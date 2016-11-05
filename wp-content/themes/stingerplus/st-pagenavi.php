<div class="st-pagelink">
	<?php $args = array(
		'end_size'           => 1,
		'mid_size'           => 1,
		'prev_next'          => True,
		'prev_text'          => __('&laquo; Previous' , 'affinger'),
		'next_text'          => __('Next &raquo;' , 'affinger'),
		'type'               => 'plain',
		);
	echo paginate_links( $args ); ?>
</div>