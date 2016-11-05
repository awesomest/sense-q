<?php get_header(); ?>

<div id="content" class="clearfix">
	<div id="contentInner">
		<main <?php st_text_copyck(); ?>>
			<article>
				<div id="breadcrumb">
					<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"> <span itemprop="title">ホーム</span> </a> &gt;
					</div>
					<?php /*--- カテゴリーが階層化している場合に対応させる --- */ ?>
					<?php
					$catid = get_query_var('cat');
					if( !$catid ){
					$cat_now = get_the_category();
					$cat_now = $cat_now[0];
					$catid  = $cat_now->cat_ID;
					}
					?>
					<?php $allcats = array( $catid ); ?>
					<?php
					while ( !$catid == 0 ) {    /* すべてのカテゴリーIDを取得し配列にセットするループ */
						$mycat = get_category( $catid );    /* カテゴリーIDをセット */
						$catid = $mycat->parent;    /* 上で取得したカテゴリーIDの親カテゴリーをセット */
						array_push( $allcats, $catid );
					}
					array_pop( $allcats );
					$allcats = array_reverse( $allcats );
					?>
					<?php /*--- 親カテゴリーがある場合は表示させる --- */ ?>
					<?php foreach ( $allcats as $catid ): ?>
						<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
							<a href="<?php echo esc_url( get_category_link( $catid ) ); ?>" itemprop="url">
								<span itemprop="title"><?php echo esc_html( get_cat_name( $catid ) ); ?></span> </a> &gt; </div>
					<?php endforeach; ?>
				</div>
				<!--/kuzu-->
				<!--ループ開始-->
				<h1>「
					<?php if ( is_category() ) { ?>
						<?php single_cat_title(); ?>
					<?php } elseif ( is_tag() ) { ?>
						<?php single_tag_title(); ?>
					<?php } elseif ( is_tax() ) { ?>
						<?php single_term_title(); ?>
					<?php } elseif ( is_day() ) { ?>
						日別アーカイブ：<?php echo get_the_time( 'Y年m月d日' ); ?>
					<?php } elseif ( is_month() ) { ?>
						月別アーカイブ：<?php echo get_the_time( 'Y年m月' ); ?>
					<?php } elseif ( is_year() ) { ?>
						年別アーカイブ：<?php echo get_the_time( 'Y年' ); ?>
					<?php } elseif ( is_author() ) { ?>
						投稿者アーカイブ：<?php echo esc_html( get_queried_object()->display_name ); ?>
					<?php } elseif ( isset( $_GET['paged'] ) && !empty( $_GET['paged'] ) ) { ?>
						ブログアーカイブ
					<?php } ?>
					」 一覧 </h1>
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
