<!-- フッターのメインコンテンツ -->
	<h3>
	<?php if ( is_home() or is_front_page() ) { ?>
	<!-- ロゴ又はブログ名 -->
		<?php if ( get_option( 'st_logo_image' ) ): //ロゴ画像がある時 ?>
			<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_logo_image' ) ); ?>" >
		<?php else: //ロゴ画像が無い時 ?>
			<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
		<?php endif; ?>
	<?php } else { ?>
		<?php if ( get_option( 'st_logo_image' ) ): //ロゴ画像がある時 ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_logo_image' ) ); ?>" ></a>
		<?php else: //ロゴ画像が無い時 ?>
			<?php st_wp_title( '' ); ?>
		<?php endif; ?>
	<?php } ?>
	</h3>

	<p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'description' ); ?></a>
	</p>
		<?php get_template_part( 'st-header-widget' ); //電話番号とヘッダー用ウィジェット ?>