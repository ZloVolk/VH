<?php
	if ( is_active_sidebar( 'homeland_sidebar' ) ) :
		dynamic_sidebar( 'homeland_sidebar' );
	else :
		_e( 'This is a widget area, so please add widgets here...', 'homeland' );
	endif;
?>