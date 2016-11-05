<?php
/*
Template Name:PAGE06-Noteスタイル（β）
*/
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="i7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>>
	<!--<![endif]-->
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<meta charset="<?php bloginfo( 'charset' ); ?>" >
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
		<meta name="format-detection" content="telephone=no" >
		
		<?php if ( is_home() && !is_paged() ): ?>
			<meta name="robots" content="index,follow">
		<?php elseif ( is_search() or is_404() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( !is_category() && is_archive() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( is_paged() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( trim($GLOBALS["stdata9"]) !== '' &&  ($GLOBALS["stdata9"]) == $post->ID ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( is_category() && trim($GLOBALS["stdata15"]) !== ''): ?>
			<meta name="robots" content="noindex,follow">
		<?php endif; ?>

		<link rel="alternate" type="application/rss+xml" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" >
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
		<?php include_once( "st-font.php" ) //googlefont ?>
		<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/js/html5shiv.js"></script>
		<![endif]-->
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		<?php wp_head(); ?>
		<?php include_once( "analyticstracking.php" ) //アナリティクスコード ?>

	</head>
	<body <?php body_class(); ?> >
	
		<div id="wrapper" class="lp colum1">
			<header id="">
			</header>

<div id="content" class="clearfix">
	<div id="contentInner">
		<main <?php st_text_copyck(); ?> style="border-radius:0;">
			<div class="post" id="st-page">

				<article>
					<!--ループ開始 -->
					<?php if (have_posts()) : while (have_posts()) :
					the_post(); ?>
					<h1 class="entry-title">
						<?php the_title(); //タイトル ?>
					</h1>

					<?php the_content(); //本文 ?>

				</article>

					<div class="blogbox <?php st_hidden_class(); ?>">
						<p><span class="kdate"><i class="fa fa-pencil" aria-hidden="true"></i>
             					<time class="entry-date date updated" datetime="<?php the_time(DATE_W3C); ?>">
							<?php the_time( 'Y/m/d' ); ?>
						</time>
						<?php if ( $mtime = st_get_mtime( 'Y/m/d' ) ) {
							echo ' <i class="fa fa-repeat"></i> ', $mtime;
						} ?>
						</span></p>
					</div>

				<?php endwhile; else: ?>
					<p>記事がありません</p>
				<?php endif; ?>
				<!--ループ終了 -->

			</div>
			<!--/post-->
		</main>
	</div>
	<!-- /#contentInner -->
</div>
<!--/#content -->
<footer id="footer" style="margin:0;padding:0;">
</footer>
</div>
<!-- /#wrapper -->
<!-- ページトップへ戻る -->
<div id="page-top"><a href="#wrapper" class="fa fa-angle-up"></a></div>
<!-- ページトップへ戻る　終わり -->
<?php wp_enqueue_script( 'base', get_template_directory_uri() . '/js/base.js', array() ); ?>

<?php wp_footer(); ?>
</body></html>