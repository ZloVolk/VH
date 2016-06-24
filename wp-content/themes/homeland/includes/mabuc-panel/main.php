<?php
	$args = array( 'hide_empty' => 0, 'orderby' => 'name' );
	$homeland_categories = get_categories( $args );
	$homeland_blog_category = array();
	
	foreach ($homeland_categories as $homeland_category_list ) {
		$homeland_blog_category[$homeland_category_list->slug] = $homeland_category_list->name;
	}
	array_unshift( $homeland_blog_category, __( 'Choose a category', 'homeland' ) );

	/*$pages = get_pages();
	$wp_pages = array();
	foreach ($pages as $pages_list ) {
		$wp_pages[$pages_list->ID] = $pages_list->post_title;			
	}*/

	include get_template_directory() . '/includes/mabuc-panel/options.php';

	function homeland_add_admin() {
		global $themename, $shortname, $options;
		
		if ( isset($_GET['page']) && $_GET['page'] == basename(__FILE__) ) :
			if ( 'save' == isset($_REQUEST['action']) ) :
				foreach ($options as $value) :
					update_option( @$value['id'], @$_REQUEST[ $value['id'] ] ); 
				endforeach;
				
				foreach ($options as $value) :
					if( isset( $_REQUEST[ @$value['id'] ] ) ) :
						update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); 
					else : delete_option( @$value['id'] ); 
					endif;
				endforeach;

				header("Location: themes.php?page=main.php&saved=true");
				die;
			elseif( 'reset' == isset($_REQUEST['action']) ) :
				foreach ($options as $value) :
					delete_option( $value['id'] ); 
				endforeach;
				header("Location: themes.php?page=main.php&reset=true");
				die;
			endif;
		endif;

		add_theme_page(
			$themename, 
			__( 'Theme Options', 'homeland' ), 
			'administrator', basename(__FILE__), 'homeland_mytheme_admin'
		);
	}

	function homeland_add_init() {
		if(is_admin()) {
			$homeland_directory_uri = get_template_directory_uri();

			wp_enqueue_style( 'admin', $homeland_directory_uri . '/includes/mabuc-panel/style.css' );
			wp_enqueue_style( 'thickbox' );
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_style( 'homeland_font-awesome', $homeland_directory_uri . '/includes/font-awesome/css/font-awesome.min.css' );
			wp_enqueue_style( 'homeland_range_slide', 'http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css' );		

			wp_enqueue_script( 'thickbox' );
			wp_enqueue_script( 'jquery-ui-accordion' );
			wp_enqueue_script( 'wp-color-picker' );
			wp_enqueue_script( 'custom-jquery', $homeland_directory_uri . '/includes/mabuc-panel/js/custom.js', false, "1.0", "all" );		
		}			
	}

	include get_template_directory() .'/includes/mabuc-panel/generator.php';

	add_action( 'admin_enqueue_scripts', 'homeland_add_init' );
	add_action( 'admin_menu', 'homeland_add_admin' );
?>