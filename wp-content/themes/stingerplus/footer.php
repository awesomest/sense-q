<footer id="footer">
<?php get_template_part( 'st-footer-link' ); //フッターリンク ?>

<?php if ( is_active_sidebar( 11 ) ) { //フッターウィジェットがある場合 ?>
	<div class="footer-wbox clearfix">

		<div class="footer-r">
			<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 11 ) ) : else : //フッターウィジェット ?>
			<?php endif; ?>
		</div>
		<div class="footer-l">
			<?php get_template_part( 'st-footer-content' ); //フッターのメインコンテンツ ?>
		</div>
	</div>
<?php }else{ ?>
	<?php get_template_part( 'st-footer-content' ); //フッターのメインコンテンツ ?>
<?php } ?>


	<p class="copy">Copyright&copy;
		<?php bloginfo( 'name' ); ?>
		,
		<?php echo date( 'Y' ); ?>
		All Rights Reserved.</p>
</footer>
</div>
<!-- /#wrapper -->
<!-- ページトップへ戻る -->
<div id="page-top"><a href="#wrapper" class="fa fa-angle-up"></a></div>
<!-- ページトップへ戻る　終わり -->
<?php wp_enqueue_script( 'base', get_template_directory_uri() . '/js/base.js', array() ); ?>
<?php if ( st_is_mobile() ) { //PCのみ追尾広告のjs読み込み ?>
<?php } else { ?>
	<?php wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/scroll.js', array() ); ?>
<?php } ?>

<?php wp_footer(); ?>
</body></html>