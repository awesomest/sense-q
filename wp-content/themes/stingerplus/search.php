<?php get_header(); ?>

<div id="content" class="clearfix">
	<div id="contentInner">
		<main <?php st_text_copyck(); ?>>
			<article>
					<h1> <!--検索結果数-->
						「<?php echo esc_html( $s ); ?>」の検索結果 <?php echo $wp_query->found_posts; ?> 件 </h1>
					<!--検索結果数終わり-->
					<?php get_template_part( 'itiran' ); //投稿一覧読み込み ?>
					<?php get_template_part( 'st-pagenavi' ); //ページナビ読み込み ?>
			</article>
		</main>
	</div>
	<!-- /#contentInner -->
	<?php get_sidebar(); ?>
</div>
<!--/#content -->
<?php get_footer(); ?>
