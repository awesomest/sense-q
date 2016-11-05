<?php if ( trim( $GLOBALS["stdata12"] ) == '' ) {
	if ( trim( $GLOBALS["stdata25"] ) !== '' ) {
		$twitter_name = esc_attr( $GLOBALS["stdata25"] );
	}else{
	$twitter_name = '';
	}
?>

<?php
		$url_encode=urlencode(get_home_url());
		$title_encode=urlencode(get_bloginfo('name'));
		if(function_exists('scc_get_share_twitter')){
		$plug = "smanone";
		}else{
		$plug = "";
		}
?>

<div class="sns">
	<ul class="clearfix">
		<!--ツイートボタン-->
		<li class="twitter"> 
		<a onclick="window.open('//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&via=<?php echo $twitter_name ?>&tw_p=tweetbutton', '', 'width=500,height=450'); return false;"><i class="fa fa-twitter"></i><span class="snstext <?php echo $plug; ?>" >Twitter</span>
		<?php 
		if(function_exists('get_scc_twitter')) { 
			if( scc_get_share_twitter( array( 'post_id' => 'home' ) ) !== 0){
				echo '<span class="snscount">'.scc_get_share_twitter( array( 'post_id' => 'home' ) ).'</span>';
			}
		}?></a>
		</li>

		<!--Facebookボタン-->      
		<li class="facebook">
		<a target="_blank" href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>"><i class="fa fa-facebook"></i><span class="snstext <?php echo $plug; ?>" >Facebook</span>
		<?php 
		if(function_exists('get_scc_facebook')) { 
			if( scc_get_share_facebook( array( 'post_id' => 'home' ) ) !== 0){
				echo '<span class="snscount">'.scc_get_share_facebook( array( 'post_id' => 'home' ) ).'</span>';
			}
		}?></a>
		</li>

		<!--Google+1ボタン-->
		<li class="googleplus">
		<a target="_blank" href="https://plus.google.com/share?url=<?php echo $url_encode;?>" ><i class="fa fa-google-plus"></i><span class="snstext <?php echo $plug; ?>" >Google+</span>
		<?php 
		if(function_exists('get_scc_gplus')) { 
			if( scc_get_share_gplus( array( 'post_id' => 'home' ) ) !== 0){
				echo '<span class="snscount">'.scc_get_share_gplus( array( 'post_id' => 'home' ) ).'</span>';
			}
		}?></a>
		</li>

		<!--ポケットボタン-->      
		<li class="pocket">
		<a onclick="window.open('//getpocket.com/edit?url=<?php echo $url_encode;?>&title=<?php echo $title_encode;?>', '', 'width=500,height=350'); return false;" ><i class="fa fa-get-pocket"></i><span class="snstext <?php echo $plug; ?>" >Pocket</span>
		<?php 
		if(function_exists('get_scc_pocket')) { 
			if( scc_get_share_pocket( array( 'post_id' => 'home' ) ) !== 0){
				echo '<span class="snscount">'.scc_get_share_pocket( array( 'post_id' => 'home' ) ).'</span>';
			}
		}?></a></li>

		<!--はてブボタン-->  
		<li class="hatebu">       
			<a href="//b.hatena.ne.jp/entry/<?php home_url(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple" title="<?php bloginfo('name'); ?>"><span style="font-weight:bold" class="fa-hatena">B!</span><span class="snstext <?php echo $plug; ?>" >はてブ</span>
<?php if(function_exists('get_scc_hatebu')) { 
			if( scc_get_share_hatebu( array( 'post_id' => 'home' ) ) !== 0){
				echo '<span class="snscount">'.scc_get_share_hatebu( array( 'post_id' => 'home' ) ).'</span>';
			}
		}?></a><script type="text/javascript" src="//b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>

		</li>

		<!--LINEボタン-->   
		<li class="line">
			<a target="_blank" href="//line.me/R/msg/text/?<?php echo $title_encode . '%0A' . $url_encode;?>"><i class="fa fa-comment" aria-hidden="true"></i><span class="snstext" >LINE</span></a>
		</li>   
  
	</ul>
</div> 	

<?php
}
