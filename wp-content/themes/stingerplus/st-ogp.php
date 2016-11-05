<?php
	if ( trim( $GLOBALS["stdata50"] ) !== '' ) {
		$fbadmin = esc_attr( $GLOBALS["stdata50"] );

		global $wp_query;
		if( isset ( $wp_query ) ){
			if( is_single() or is_page() ){
				$postID = get_the_ID();
				$post_id = get_post($postID);
				$exce = $post_id->post_content;
			}else{
				$postID = '';
				$exce = '';
			}
		}
?>
<!-- OGP -->
	<meta property='og:locale' content='ja_JP'>
	<meta property='fb:admins' content='<?php echo $fbadmin; ?>'>

		<?php if( trim( $GLOBALS["stdata51"] ) !== '' ){ 
			$facebook_page = esc_url( $GLOBALS["stdata51"] ) ;?>
			<meta property='article:publisher' content='<?php echo $facebook_page; ?>' />
		<?php } ?>

	<?php if(is_single()){ // 投稿記事 ?>
		<meta property='og:type' content='article'>
		<meta property='og:title' content='<?php the_title() ?>'>
		<meta property='og:url' content='<?php the_permalink() ?>'>
		<meta property='og:description' content='<?php echo mb_substr($exce, 0, 100) ?>'>
	<?php } elseif(is_page()){ // 固定ページ ?>
		<meta property='og:type' content='website'>
		<meta property='og:title' content='<?php the_title() ?>'>
		<meta property='og:url' content='<?php the_permalink() ?>'>
		<meta property='og:description' content='<?php echo mb_substr($exce, 0, 100) ?>'>

	<?php } else { //ホーム・カテゴリーなど ?>
		<meta property='og:type' content='website'>
		<meta property='og:title' content='<?php bloginfo('name') ?>'>
		<meta property='og:url' content='<?php echo home_url() ?>'>
		<meta property='og:description' content='<?php bloginfo('description') ?>'>
	<?php } ?>
	<meta property='og:site_name' content='<?php bloginfo('name'); ?>'>
	
	<?php
		if (is_single() or is_page()){//投稿記事か固定ページ
			if (has_post_thumbnail()){//アイキャッチがある場合
				$image_id = get_post_thumbnail_id();
				$image = wp_get_attachment_image_src($image_id, 'full');
				echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
			} elseif( preg_match( '/<img.*?src=(["\'])(.+?)\1.*?>/i', $post->post_content, $imgurl ) && !is_archive()) {//アイキャッチ以外の画像がある場合
				echo '<meta property="og:image" content="'.$imgurl[2].'">';echo "\n";
			} else {//画像が1つも無い場合
				echo '<meta property="og:image" content="'.get_template_directory_uri().'/images/no-img.png">';echo "\n";
			}
		} else { //ホーム・カテゴリーページなど
			if( get_header_image( ) ){
				echo '<meta property="og:image" content="'.get_header_image( ).'">';echo "\n";
			} else {
				echo '<meta property="og:image" content="'.get_template_directory_uri().'/images/no-img.png">';echo "\n";
			}

		}
	//Twtter Cards
	if ( trim( $GLOBALS["stdata25"] ) !== '' ) {
		$twitter_name = esc_attr( $GLOBALS["stdata25"] );
?>
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@<?php echo $twitter_name ?>">
<?php
	}
}
?>
<!-- /OGP -->