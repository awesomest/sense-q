<?php if ( trim( $GLOBALS["stdata12"] ) == '' ) {
	if ( trim( $GLOBALS["stdata25"] ) !== '' ) {
		$twitter_name = esc_attr( $GLOBALS["stdata25"] );
	}else{
		$twitter_name = '';
	}

?>
	<?php
		$url_encode=urlencode(get_permalink());
		$title_encode=urlencode(get_the_title());
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
		<a onclick="window.open('//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&via=<?php echo $twitter_name ?>&tw_p=tweetbutton', '', 'width=500,height=450'); return false;"><i class="fa fa-twitter"></i><span class="snstext <?php echo $plug; ?>" >Twitter</span><?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()=='0')?'':'<span class="snscount">'.scc_get_share_twitter().'</span>'; ?></a>
		</li>

		<!--Facebookボタン-->      
		<li class="facebook">
		<a href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" target="_blank"><i class="fa fa-facebook"></i><span class="snstext <?php echo $plug; ?>" >Facebook</span>
		<?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':'<span class="snscount">'.scc_get_share_facebook().'</span>'; ?></a>
		</li>

		<!--Google+1ボタン-->
		<li class="googleplus">
		<a href="https://plus.google.com/share?url=<?php echo $url_encode;?>" target="_blank"><i class="fa fa-google-plus"></i><span class="snstext <?php echo $plug; ?>" >Google+</span><?php if(function_exists('scc_get_share_gplus')) echo (scc_get_share_gplus()==0)?'':'<span class="snscount">'.scc_get_share_gplus().'</span>'; ?></a>
		</li>

		<!--ポケットボタン-->      
		<li class="pocket">
		<a onclick="window.open('//getpocket.com/edit?url=<?php echo $url_encode;?>&title=<?php echo $title_encode;?>', '', 'width=500,height=350'); return false;"><i class="fa fa-get-pocket"></i><span class="snstext <?php echo $plug; ?>" >Pocket</span><?php if(function_exists('scc_get_share_pocket')) echo (scc_get_share_pocket()==0)?'':'<span class="snscount">'.scc_get_share_pocket().'</span>'; ?></a></li>

		<!--はてブボタン-->  
		<li class="hatebu">       
			<a href="//b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple" title="<?php the_title(); ?>"><span style="font-weight:bold" class="fa-hatena">B!</span><span class="snstext <?php echo $plug; ?>" >はてブ</span>
			<?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'':'<span class="snscount"><span class="hatebno">'.scc_get_share_hatebu().'</span></span>';
 ?></a><script type="text/javascript" src="//b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>

		</li>

		<!--LINEボタン-->   
		<li class="line">
		<a href="//line.me/R/msg/text/?<?php echo $title_encode . '%0A' . $url_encode;?>" target="_blank"><i class="fa fa-comment" aria-hidden="true"></i><span class="snstext" >LINE</span></a>
		</li>     
	</ul>

	</div> 

	<?php
}
