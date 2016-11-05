<p style="color:#666;margin-bottom:5px;">スポンサーリンク</p>
<div style="margin-bottom:10px;">
	<?php if ( st_is_mobile() ) { //スマートフォンの時は300pxサイズを ?>
		<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 4 ) ) : else : ?>
		<?php endif; ?>
		<?php
	} else {  //PCの時は336pxサイズを
		?>
		<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 3 ) ) : else : ?>
		<?php endif; ?>
		<?php
}?>
</div>