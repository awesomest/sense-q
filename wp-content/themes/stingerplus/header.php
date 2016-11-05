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
		<?php get_template_part( 'st-ogp' ); //OGP設定 ?>
	</head>
	<body <?php body_class(); ?> >
	
		<div id="wrapper" class="<?php st_wrap_class(); ?>">
			<header id="<?php st_head_class(); ?>">
			<div class="clearfix" id="headbox">
			<!-- アコーディオン -->
			<nav id="s-navi" class="pcnone">
				<dl class="acordion">

					<dt class="trigger">
					<p><span class="op"><i class="fa fa-bars"></i></span></p>
					</dt>
					<dd class="acordion_tree">
						<?php
							$defaults = array(
							'theme_location' => 'primary-menu',
							);
						?>
						<?php wp_nav_menu( $defaults ); ?>
						<div class="clear"></div>
					</dd>
				</dl>
			</nav>
			<!-- /アコーディオン -->
			<div id="header-l">
				<!-- ロゴ又はブログ名 -->
				<p class="sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php if ( get_option( 'st_logo_image' ) ): //ロゴ画像がある時 ?>
							<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_logo_image' ) ); ?>" >
						<?php else: //ロゴ画像が無い時 ?>
							<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
						<?php endif; ?>
					</a></p>
				<!-- キャプション -->
				<?php if ( is_home() ) { ?>
					<h1 class="descr">
						<?php bloginfo( 'description' ); ?>
					</h1>
				<?php } else { ?>
					<p class="descr">
						<?php bloginfo( 'description' ); ?>
					</p>
				<?php } ?>

			</div><!-- /#header-l -->
			<div id="header-r" class="smanone">
				<?php if ( isset($GLOBALS['stdata43']) && $GLOBALS['stdata43'] === 'yes' ) {
					get_template_part( 'st-footer-link' ); //フッターリンク 
				} ?>
				<?php get_template_part( 'st-header-widget' ); //電話番号とヘッダー用ウィジェット ?>
			</div><!-- /#header-r -->
			</div><!-- /#clearfix -->

				<?php get_template_part( 'st-header-image' ); //カスタムヘッダー画像 ?>

			</header>