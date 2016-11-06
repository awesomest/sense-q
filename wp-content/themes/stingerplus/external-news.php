<?php
define( 'SITES_TABLE_NAME',     'external_sites' );
define( 'ARTICLES_TABLE_NAME',  'external_articles' );

global $wpdb;

$articles = $wpdb->get_results("
  SELECT article_content, article_author, article_url, article_title, article_summary, published_gtm
  FROM " . ARTICLES_TABLE_NAME . "
  ORDER BY crawled_gtm DESC
  LIMIT 10"
);
?>

<h4 class="menu_underh2">外部NEWS</h4>
<div class="external_articles_wrap" style="overflow: scroll; height: 350px;">
  <?php
  foreach ( $articles as $article ) { ?>
    <div class="external_article">
      <a href="<?php echo $article->article_url; ?>">
        <h5><?php echo $article->article_title; ?></h5>
      </a>
      <p><?php echo $article->article_summary; ?></p>
    </div>
    <?php
  } ?>
</div>
