<hr class="hrcss" />
<div id="comments">
     <?php
     if ( have_comments() ):
          ?>
	<h5 id="resp"><i class="fa fa-commenting"></i>&nbsp;comment</h5>
          <ol class="commets-list">
               <?php wp_list_comments( 'avatar_size=55' ); ?>
          </ol>
          <?php
     endif;

     $args = array(
          'title_reply' => 'Message',
          'label_submit' => __( 'Submit Comment' , 'affinger' )
     );
     comment_form( $args );
     ?>
</div>
<?php
if( $wp_query -> max_num_comment_pages > 1 ):
?>
<div class="st-pagelink">
<?php
$args = array(
'prev_text' => '&laquo; Prev',
'next_text' => 'Next &raquo;',
);
paginate_comments_links($args);
?>
</div>
<?php
endif;
?>

<!-- END singer -->
