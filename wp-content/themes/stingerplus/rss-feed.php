<?php
require( '../../../wp-config.php' );
include( 'mail.php' );

define( "DEVELOPER_ACCESS_TOKEN", "A1aUarGBZ3da3E-YRGrb23qnkFABgbCdvMFNP2SqQSMrAr_FNvYL-tWkCqAc7P6fzhGw59CEoGKYMNQGUsR2zwdzyQbo14ucqts-uEBzicjRNFAgQhjhDkX3yRvqA_eFjn6E_N-sdcx9e4fYjgONrYU4OFEQ4jtbWdWDDDwSftdfEJWsTNFvxqu1FiVqfWp_XW3N0bpj2tFFq7mCpNvbQWhPDIcMnQ:feedlydev" );
define( "TEST_DEVELOPER_ACCESS_TOKEN", "A1FuDrE0fHQguNIxldrosVYpEHGI1Dqt9FM7TKVC9uSNQwqMVMTmGd32nwNA3YTyRdoffo_9oKmjXfycyQ5tCQf8QglmlDj5uuvyDeSq9sdpjkbFECROGgTepA4--TO8YsGlL_HK8KU5zCefcvBIdnNkJJVGG3pLBeHqsNpt0RD2Yl7GvqcPAqJgSCwCyi5mHWozpSHqj0i_C3tzoWzqkOYqqIw8Epo:feedlydev" );

define( 'SITES_TABLE_NAME',     'external_sites' );
define( 'ARTICLES_TABLE_NAME',  'external_articles' );

global $ch, $wpdb;

function setCurlOptions() {
  global $ch;
  $ch = curl_init();
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
  if ( !$stream_id ) {
    return array();
  }

  global $ch;
  $url = "https://cloud.feedly.com/v3/streams/contents?streamId=" . urlencode( $stream_id );
  curl_setopt( $ch, CURLOPT_URL, $url );

  $response = curl_exec( $ch );
  $response = json_decode( $response, true );
  return $response;
}

function markFeedAsRead( $feed_ids ) {
  if ( !$feed_ids ) {
    return array();
  }

  global $ch;
  $data = [
    "feedIds" => $feed_ids,
    "action"  => "markAsRead",
    "type"    => "feeds",
    ];
  $url = "https://cloud.feedly.com/v3/markers";
  curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $data ) );
  curl_setopt( $ch, CURLOPT_URL, $url );
  curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "POST" );

  $response = curl_exec( $ch );
  $response = json_decode( $response, true );
  return $response;
}

function getFeedMetas( $feed_ids ) {
  if ( !$feed_ids ) {
    return array();
  }

  global $ch;
  $url = "https://cloud.feedly.com/v3/feeds/.mget";
  curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $feed_ids ));
  curl_setopt( $ch, CURLOPT_URL, $url );
  curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "POST" );

  $response = curl_exec( $ch );
  $response = json_decode( $response, true );
  return $response;
}

function insertArticles( $article ) {
  $is_unread = $article['unread'];
  if ( !$is_unread ) {
    return;
  }

  global $wpdb;
  print_r( $article['title'] . "\n" );
  // convert the time in ms to S
  $published_unix  = ( isset( $article['published'] ) ) ? $article['published'] / 1000 : 0;
  $crawled_unix    = ( isset( $article['crawled'] ) )   ? $article['crawled'] / 1000   : 0;
  $article_content = ( isset( $article['alternate'] ) ) ? $article['alternate'][0]['href'] : NULL;

  $set_arr = array(
    'published_gtm'    => date( 'Y-m-d H:i:s', $published_unix ),
    'crawled_gtm'      => date( 'Y-m-d H:i:s', $crawled_unix ),
    'article_content'  => $article_content,
    'article_author'   => $article['author'],
    'article_title'    => $article['title'],
    'article_url'      => ( isset( $article['alternate'] ) ) ? $article['alternate'][0]['href'] : NULL,
    'article_category' => ( isset( $article['categories'] ) ) ? $article['categories'][0]['label'] : NULL,
    'article_summary'  => ( isset( $article['summary'] ) ) ? $article['summary']['content'] : NULL,
  );
  $wpdb->insert( ARTICLES_TABLE_NAME, $set_arr );
}

function hasNewContents( $stream ) {
  $stream_count = $stream['count'];
  if ( $stream_count == 0 ) {
    return false;
  }

  return true;
}

function isFeed( $stream ) {
  if ( substr( $stream['id'], 0, 4 ) != 'feed' ) {
    return false;
  }

  return true;
}

function getAllFeedMetas() {
  setCurlOptions();

  $feed_ids = array();
  $unread_counts = getUnreadFeeds();
  if ( $unread_counts['errorCode'] || !$unread_counts['unreadcounts'] ) {
    $subject = print_r( 'Error about $unread_counts', true );
    $message = print_r( $unread_counts, true );
    sendMail( $message, $subject );
    return;
  }

  //var_dump( $unread_counts );
  foreach ( $unread_counts['unreadcounts'] as $stream ) {
    if ( !isFeed( $stream ) ) {
      continue;
    }

    $feed_ids[] = $stream['id'];
  }
  //var_dump( $feed_ids );
  print_r( getFeedMetas( $feed_ids ) );
}

function gatherUnreadContents() {
  setCurlOptions();

  $feed_ids = array();
  $article_total = 0;
  $unread_counts = getUnreadFeeds();
  if ( $unread_counts['errorCode'] || !$unread_counts['unreadcounts'] ) {
    $subject = print_r( 'Error about $unread_counts', true );
    $message = print_r( $unread_counts, true );
    sendMail( $message, $subject );
    return;
  }

  foreach ( $unread_counts['unreadcounts'] as $stream ) {
    if ( !hasNewContents( $stream ) || !isFeed( $stream ) ) {
      continue;
    }

    // maybe markers api will not work if more than 200 articles are requested
    $stream_count = $stream['count'];
    $article_total += $stream_count;
    if ( $article_total >= 200 && $feed_ids ) {
      $article_total -= $stream_count;
      break;
    }

    $stream_id = $stream['id'];
    print_r( 'stream: ' . $stream['id'] . "\n" );

    $feed_ids[] = $stream_id;
    $unread_articles = getContents( $stream_id );
    if ( $unread_articles['errorCode'] || !$unread_articles['items'] ) {
      $subject = print_r( 'Error about $unread_articles', true );
      $message = print_r( $unread_articles, true );
      sendMail( $message, $subject );
      break;
    }

    $articles = $unread_articles['items'];
    foreach ( $articles as $article ) {
      insertArticles( $article );
    }
    print_r( "\n" );
  }
  print_r( "article_total: " . $article_total . "\n\n" );

  print_r( "feed_ids:\n" );
  print_r( $feed_ids );
  print_r( "\n" );
  $markers_res = markFeedAsRead( $feed_ids );
  if ( $markers_res['errorCode'] ) {
    $subject = print_r( 'Error about $markers_res', true );
    $message = print_r( $markers_res, true );
    sendMail( $message, $subject );
  }
}

gatherUnreadContents();
//getAllFeedMetas();
