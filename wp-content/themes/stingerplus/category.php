<?php get_header(); ?>

<div id="content" class="clearfix">
    <div id="contentInner">
        <main <?php st_text_copyck(); ?>>
            <article>
                <div id="breadcrumb">
                    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"> <span itemprop="title">HOME</span> </a> &gt;
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

                <?php
		$now_category = get_query_var('cat'); //現在のカテゴリIDを取得
		$args = array(
                'include' => array($now_category),
		);
		$tag_all = get_terms("category", $args);
		$cat_data = get_option('cat_'.$now_category);
                    
		if(trim($cat_data['listdelete']) === '' || $cat_data['listdelete'] === 'yes'){

                     //一覧を表示する場合　?>
                        <div class="post">
                        <?php if(trim($cat_data['st_cattitle']) !== ''){ ?>
                            <h1 class="entry-title"><?php echo esc_html($cat_data['st_cattitle']) ?></h1>
                        <?php }else{ ?>
                            <h1 class="entry-title">「<?php single_cat_title(); ?>」 一覧</h1>
                        <?php } ?>
                            <?php if(!is_paged()){ ?>
                            <?php echo category_description(); ?>
                            <?php } ?>
                        </div><!-- /post -->
                        <?php get_template_part( 'itiran' ); //投稿一覧読み込み ?>
                        <?php get_template_part( 'st-pagenavi' ); //ページナビ読み込み ?>
		<?php }else{ //一覧を表示しない ?>

                        <div class="post">
                        <?php if(trim($cat_data['st_cattitle']) !== ''){ ?>
                            <h1 class="entry-title"><?php echo esc_html($cat_data['st_cattitle']) ?></h1>
                        <?php }else{ ?>
                            <h1 class="entry-title">「<?php single_cat_title(); ?>」 一覧</h1>
                        <?php } ?>                       
                        <?php echo category_description(); ?>
                        </div><!-- /post -->
		<?php } ?>

            </article>
        </main>
    </div>
    <!-- /#contentInner -->
    <?php get_sidebar(); ?>
</div>
<!--/#content -->
<?php get_footer(); ?>
