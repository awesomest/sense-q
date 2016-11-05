<?php if ( $GLOBALS["stdata13"] === '' ) {
	if ( trim( $GLOBALS["stdata66"] ) !== '' ) {
		$new_entryname = esc_html( $GLOBALS["stdata66"] );
	} else {
		$new_entryname = 'NEW ENTRY';		
	}

	if ( isset($GLOBALS['stdata5']) && $GLOBALS['stdata5'] === 'yes' ) {
		echo '<h4 class="menu_underh2">'.$new_entryname.'</h4>';
		get_template_part( 'newpost-thumbnail-off' ); 
	}else{
		echo '<h4 class="menu_underh2">'.$new_entryname.'</h4>';
		get_template_part( 'newpost-thumbnail-on' ); 
	}
}
?>