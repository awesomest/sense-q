<?php
require('../../../wp-config.php');

define( "DEVELOPER_ACCESS_TOKEN", "A1aUarGBZ3da3E-YRGrb23qnkFABgbCdvMFNP2SqQSMrAr_FNvYL-tWkCqAc7P6fzhGw59CEoGKYMNQGUsR2zwdzyQbo14ucqts-uEBzicjRNFAgQhjhDkX3yRvqA_eFjn6E_N-sdcx9e4fYjgONrYU4OFEQ4jtbWdWDDDwSftdfEJWsTNFvxqu1FiVqfWp_XW3N0bpj2tFFq7mCpNvbQWhPDIcMnQ:feedlydev" );

define( 'SITES_TABLE_NAME',     'external_sites' );
define( 'ARTICLES_TABLE_NAME',  'external_articles' );

global $ch, $wpdb;
$ch = curl_init();

function init() {
  setCurlOptions();
}

function setCurlOptions() {
  global $ch;
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
  curl_setopt( $ch, CURLOPT_ENCODING, "" );
  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
  $headers = array(
    "Authorization: OAuth " . DEVELOPER_ACCESS_TOKEN,
    'Content-Type: application/json',
  );
  curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
}

function getUnreadFeeds() {
  global $ch;
  $url = "https://cloud.feedly.com/v3/markers/counts";
  curl_setopt( $ch, CURLOPT_URL, $url );

  $response = curl_exec( $ch );
  $response = json_decode( $response, true );
  return $response;
}

function getContents( $stream_id ) {
  global $ch;
  $url = "https://cloud.feedly.com/v3/streams/contents?streamId=" . urlencode( $stream_id );
  curl_setopt( $ch, CURLOPT_URL, $url );

  $response = curl_exec( $ch );
  $response = json_decode( $response, true );
  return $response;
}

function markFeedAsRead( $feed_ids ) {
  global $ch;
  $data = [
    "feedIds" => $feed_ids,
    "action"  => "markAsRead",
    //"action"  => "undoMarkAsRead",
    "type"    => "feeds",
    ];
  $url = "https://cloud.feedly.com/v3/markers";
  curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ));
  curl_setopt( $ch, CURLOPT_URL, $url );
  curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "POST" );

  $response = curl_exec( $ch );
  $response = json_decode( $response, true );
  return $response;
}

function showUnreadContents() {
  global $wpdb;
  init();
  $unread_counts = getUnreadFeeds();

  $feed_ids = array();
  $article_total = 0;
  foreach ( $unread_counts['unreadcounts'] as $stream ) {
    $stream_count = $stream['count'];
    if ( $stream_count == 0 ) {
      continue;
    }

    // maybe markers api will not work if more than 200 articles are requested
    $article_total += $stream_count;
    if ( $article_total >= 200 ) {
      break;
    }

    $stream_id = $stream['id'];
    $feed_ids[] = $stream_id;
    $unread_articles = getContents( $stream_id );

    $articles = $unread_articles['items'];
    foreach ( $articles as $article ) {
      print_r( $article['title'] . "\n" );
      $published_unix = ( isset( $article['published'] ) ) ? $article['published'] / 1000 : 0; // convert the time in ms to S

      $set_arr = array(
        'published_gtm'    => date( 'Y-m-d H:i:s', $published_unix ),
        'article_content'  => ( isset( $article['content'] ) ) ? $article['content']['content'] : NULL,
        'article_author'   => $article['author'],
        'article_title'    => $article['title'],
        'article_url'      => ( isset( $article['alternate'] ) ) ? $article['alternate'][0]['href'] : NULL,
        'article_category' => ( isset( $article['categories'] ) ) ? $article['categories'][0]['label'] : NULL,
        'article_summary'  => ( isset( $article['summary'] ) ) ? $article['summary']['content'] : NULL,
      );
      $wpdb->insert( ARTICLES_TABLE_NAME, $set_arr );
    }
  }
  markFeedAsRead( $feed_ids );
}

showUnreadContents();
