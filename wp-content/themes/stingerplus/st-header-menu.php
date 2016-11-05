<?php
if ( isset($GLOBALS['stdata35']) && $GLOBALS['stdata35'] === 'kesu' ) {
}elseif ( isset($GLOBALS['stdata55']) && $GLOBALS['stdata55'] === 'yes' ){ //旧式のナビを表示
?>
	<nav class="clearfix st5">
		<?php
		$defaults = array(
			'theme_location'  => 'navbar',
		);
		wp_nav_menu( $defaults );
		?>
	</nav>
<?php 
}else{
	$defaults = array(
		'container' => 'nav',
		'container_class' => 'smanone clearfix',
		'theme_location' => 'primary-menu',
	);
	
	if ( has_nav_menu( 'primary-menu' ) ) : 	
		wp_nav_menu( $defaults ); 	
	else : ?>
        	<nav class="clearfix st5">
			<?php wp_page_menu( $defaults ); ?>
		</nav>
	<?php endif;
} ?>





