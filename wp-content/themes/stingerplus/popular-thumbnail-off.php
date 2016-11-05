<div class="kanren pop-box">
<?php
	if ( trim( $GLOBALS["stdata38"] ) !== '' ) {
		$popname = esc_html( $GLOBALS["stdata38"] );
	?>
<p class="p-entry-t"><span class="p-entry"><?php echo "$popname"; ?></span></p>
	<?php } ?>
<?php
	if ( trim( $GLOBALS["stdata37"] ) !== '' ) {
		$popid = $GLOBALS["stdata37"];
		$popids =explode(',',$popid);
	}else{
	$popids = '';
	}
	$poprank_no = '1';
	if (is_array($popids)) {
		foreach ($popids as $popid_no) {
			$posts_query = new WP_Query(array(
			'post_type' => array('post','page','template'),
			'post__in' => array_map('intval', explode(',', $popid_no)), //指定IDを含む投稿のみ
		));
		while ($posts_query->have_posts()) : $posts_query->the_post();
?>

	<h5 class="poprank-noh5"><span class="poprank-no2"><?php echo "$poprank_no";?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
						</a></h5>

					<div class="smanone2">
						<?php the_excerpt(); //抜粋文 ?>
					</div>

	<?php $poprank_no++;
		endwhile; ?>
<?php }
}?>
<?php wp_reset_postdata(); ?>
</div>