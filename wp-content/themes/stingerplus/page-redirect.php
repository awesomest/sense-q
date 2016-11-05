<?php
/*
Template Name:PAGE リダイレクト専用ページ
*/
?>
<!DOCTYPE html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" >
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
		<meta name="robots" content="noindex,follow">
		<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" media="screen" >
		<?php wp_head(); ?>
		<?php if ( st_is_mobile() ) { ?>
			<link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-touch-icon-precomposed.png" />
		<?php } else { ?>
		<?php } ?>
	</head>
	<body <?php body_class(); ?>>
		<?php include_once( "analyticstracking.php" ) //アナリティクスコード ?>
		<div id="wrapper">
			<header>
			</header>


<div id="content" class="clearfix">
	<div id="contentInner">
		<main>
			<div class="post" onSelectStart="return false;" onMouseDown="return false;" style="-moz-user-select: none; -khtml-user-select: none; user-select: none;">
				<article>
					<!--ループ開始 -->
<p>現在、安全にリダイレクト中です。<br/>しばらくお待ち下さい。うまくサイトに切り替わらない場合は<a href=" 
<?php
if ( !is_home() ) {
	global $wp_query;
	$postID = $wp_query->post->ID;
	$stredirect = get_post_meta( $postID, 'st_redirect', true );
} else {
	$stredirect = '';
};
if (isset( $stredirect ) && trim( $stredirect ) !== '') {
echo stripslashes($stredirect);
}  else {
} ?>">こちら</a>をクリックして下さい。
					<?php if (have_posts()) : while (have_posts()) :
					the_post(); ?>
					<?php the_content(); //本文 ?>
				</article>
				<?php endwhile; else: ?>
				<?php endif; ?>
				<!--ループ終了 -->

			</div>
			<!--/post-->
		</main>
	</div>
	<!-- /#contentInner -->
</div>
<!--/#content -->
<footer id="footer">

</footer>
</div>
<!-- /#wrapper -->

<?php wp_footer(); ?>
</body></html>

