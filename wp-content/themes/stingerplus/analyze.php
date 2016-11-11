<?php
require( '../../../wp-config.php' );

define( 'SITES_TABLE_NAME',     'external_sites' );
define( 'ARTICLES_TABLE_NAME',  'external_articles' );

global $wpdb;

function getSumsArticleHourly( $b_day, $e_day ) {
  global $wpdb;
  $hourly_sums = $wpdb->get_results( "
    SELECT DATE_FORMAT(crawled_gtm, '%H') hour, COUNT(ID) count
    FROM " . ARTICLES_TABLE_NAME . "
    WHERE crawled_gtm >= '{$b_day}' AND crawled_gtm < '{$e_day}'
    GROUP BY DATE_FORMAT(crawled_gtm, '%H');" );
  return $hourly_sums;
}

function displayTable( $datas ) {
  foreach ( $datas as $data ) {
    echo "$data->hour\t$data->count\n";
  }
}

$hourly_sums = getSumsArticleHourly( '2016-11-07', '2016-11-10' );

displayTable( $hourly_sums );
