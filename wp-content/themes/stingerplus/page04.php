<?php
/*
Template Name:PAGE04-任意エントリ読込なし
*/
?>
<?php get_header(); ?>

<div id="content" class="clearfix">
	<div id="contentInner">
		<main <?php st_text_copyck(); ?>>
			<div class="post" id="st-page">

		<?php //アイキャッチ画像を挿入
		if( is_single() or is_page() ){
			$postID = $wp_query->post->ID;
			$eyecatchset = get_post_meta( $postID, 'eyecatch_set', true );
		}else{
			$eyecatchset = '';
		} 
		if ( has_post_thumbnail() && (( isset($GLOBALS['stdata53']) && $GLOBALS['stdata53'] === 'yes' ) || ( isset( $eyecatchset ) && $eyecatchset === 'yes' ))) { ?>
			<div class="st-eyecatch"><?php the_post_thumbnail('full'); ?>
			</div>
				
		<?php } //アイキャッチ画像を挿入ここまで ?>

				<?php if( !is_front_page() ){ ?>
					<!--ぱんくず -->
					<div id="breadcrumb"><a href="<?php echo home_url(); ?>">HOME</a>&nbsp;>&nbsp;
						<?php foreach ( array_reverse( get_post_ancestors( $post->ID ) ) as $parid ) { ?>
							<a href="<?php echo get_page_link( $parid ); ?>" title="<?php echo  get_the_title(); ?>"> <?php echo get_page( $parid )->post_title; ?></a>&nbsp;>&nbsp;
						<?php } ?>
					</div>
					<!--/ ぱんくず -->

				<?php }else{ //フロントページの場合
					if( has_post_thumbnail() && (( isset($GLOBALS['stdata53']) && $GLOBALS['stdata53'] === 'yes' ) || ( isset( $eyecatchset ) && $eyecatchset === 'yes' ))) { //アイキャッチがある場合 ?>
						<div class="nowhits hits-front-eye"><?php get_template_part( 'popular-thumbnail' ); //任意のエントリ ?></div>
					<?php }else{ //アイキャッチがない場合 ?>
						<div class="nowhits hits-front"><?php get_template_part( 'popular-thumbnail' ); //任意のエントリ ?></div>
					<?php } ?>

					<?php if ( is_active_sidebar( 12 ) ) { ?>
						<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 12 ) ) : else : //トップ上部のウィジェット ?>
						<?php endif; ?>
					<?php } ?>

					<?php get_template_part( 'news-st' ); //お知らせ ?>
				<?php } ?>


				<article>
					<!--ループ開始 -->
					<?php if (have_posts()) : while (have_posts()) :
					the_post(); ?>
					<h1 class="entry-title"><?php the_title(); //タイトル ?></h1>

					<div class="mainbox">

						<?php the_content(); //本文 ?>

						<?php //クレジット表示
						if( is_single() or is_page() ){
							$stcopyurl = get_post_meta( $postID, 'st_copyurl', true );
						}else{
							$stcopyurl = '';
						} if( trim( $stcopyurl ) !== '' ) { ?>
							<p class="eyecatch-copyurl"><?php echo stripslashes( $stcopyurl ); ?></p>
						<?php } //クレジット表示ここまで ?>

						<?php wp_link_pages(); ?>


						<?php if ( is_active_sidebar( 6 ) ) { ?>
							<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 6 ) ) : else : //固定ページ一括ウィジェット ?>
							<?php endif; ?>
						<?php } ?>

						<?php if ( is_front_page() && is_active_sidebar( 13 ) ) { ?>
							<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 13 ) ) : else : //トップ下部のウィジェット ?>
							<?php endif; ?>
						<?php } ?>


					</div>
					
					<?php if ( isset($GLOBALS['stdata69']) && $GLOBALS['stdata69'] === 'yes' ) {
						get_template_part( 'sns' ); //ソーシャルボタン読み込み 
					} ?>
					<?php get_template_part( 'st-childlink' ); //子ページへのリンク ?>
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

				<?php
				//コメント
				if ( ( $GLOBALS["stdata6"] ) === '' ) { ?>
					<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					} ?>
				<?php } ?>

			</div>
			<!--/post-->
		</main>
	</div>
	<!-- /#contentInner -->
	<?php get_sidebar(); ?>
</div>
<!--/#content -->
<?php get_footer(); ?>
