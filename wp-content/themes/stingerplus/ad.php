<?php if ( st_is_mobile() ) { //スマートフォンの時は300pxサイズを ?>
	<?php if ( is_active_sidebar( 4 ) && !is_404() ) { ?>
		<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 4 ) ) : else : ?>
		<?php endif; ?>
	<?php } ?>

<?php } else {  //PCの時は336pxサイズを	?>

	<?php if ( is_active_sidebar( 3 ) && !is_404() ) { ?>
		<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 3 ) ) : else : ?>
		<?php endif; ?>
	<?php } ?>

<?php }