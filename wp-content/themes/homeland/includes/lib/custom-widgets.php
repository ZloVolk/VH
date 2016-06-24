<?php
	$homeland_all_agents = esc_attr( get_option('homeland_all_agents') );
	$homeland_widget_directory = get_template_directory() . '/includes/widgets';
	
	if(empty($homeland_all_agents)) : 
		include $homeland_widget_directory . '/widget-agent.php'; 
	endif;

	include $homeland_widget_directory . '/widget-follow-us.php';
	include $homeland_widget_directory . '/widget-contact.php';
	include $homeland_widget_directory . '/widget-video.php';
	include $homeland_widget_directory . '/widget-flickr.php';
	include $homeland_widget_directory . '/widget-popular.php';
	include $homeland_widget_directory . '/widget-dribbble.php';
	include $homeland_widget_directory . '/widget-featured-properties.php';
	include $homeland_widget_directory . '/widget-search-type.php';
	include $homeland_widget_directory . '/widget-search-location.php';
	include $homeland_widget_directory . '/widget-search-status.php';
	include $homeland_widget_directory . '/widget-search-amenities.php';
	include $homeland_widget_directory . '/widget-twitter.php';
	include $homeland_widget_directory . '/widget-advance-search.php';
	include $homeland_widget_directory . '/widget-facebook-like.php';
	include $homeland_widget_directory . '/widget-gmap.php';
	include $homeland_widget_directory . '/widget-portfolio.php';
	include $homeland_widget_directory . '/widget-testimonials.php';
	include $homeland_widget_directory . '/widget-working-hours.php';


	// Sidebar Widgets

	if ( ! function_exists( 'homeland_sidebar_widgets_init' ) ) :
		function homeland_sidebar_widgets_init() {
		
			register_sidebar( array(
				'name' => __( 'Page Sidebar', 'homeland' ),
				'id' => 'homeland_sidebar',
				'description' => __( 'Main widgets of the theme', 'homeland' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h5>',
				'after_title' => '</h5>',
			) );

			register_sidebar( array(
				'name' => __( 'Sliding Bar', 'homeland' ),
				'id' => 'homeland_sliding_bar',
				'description' => __( 'Sliding Bar widgets of the theme located at the top of the website', 'homeland' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h5>',
				'after_title' => '</h5>',
			) );

			register_sidebar( array(
				'name' => __( 'Top Slider', 'homeland' ),
				'id' => 'homeland_top_slider',
				'description' => __('Top slider widgets of the theme for revolution slider', 'homeland'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h5>',
				'after_title' => '</h5>',
			) );

			register_sidebar( array(
				'name' => __( 'Search Type', 'homeland' ),
				'id' => 'homeland_search_type',
				'description' => __( 'Search Type widgets of the theme for IDX listing search. Leave it empty if you want to use the default Advance Search', 'homeland' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h5>',
				'after_title' => '</h5>',
			) );

			register_sidebar( array(
				'name' => __( 'Dual Sidebar', 'homeland' ),
				'id' => 'homeland_dual_sidebar',
				'description' => __( 'This widgets of the theme is for dual sidebar, this is displayed in left sidebar', 'homeland' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h5>',
				'after_title' => '</h5>',
			) );

			register_sidebar( array(
				'name' => __( 'Footer One', 'homeland' ),
				'id' => 'homeland_footer_one',
				'description' => __( 'Footer column widget of the theme', 'homeland' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h5>',
				'after_title' => '</h5>',
			) );

			register_sidebar( array(
				'name' => __( 'Footer Two', 'homeland' ),
				'id' => 'homeland_footer_two',
				'description' => __( 'Footer column widget of the theme', 'homeland' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h5>',
				'after_title' => '</h5>',
			) );

			register_sidebar( array(
				'name' => __( 'Footer Three', 'homeland' ),
				'id' => 'homeland_footer_three',
				'description' => __( 'Footer column widget of the theme', 'homeland' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h5>',
				'after_title' => '</h5>',
			) );

			register_sidebar( array(
				'name' => __( 'Footer Four', 'homeland' ),
				'id' => 'homeland_footer_four',
				'description' => __( 'Footer column widget of the theme', 'homeland' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<h5>',
				'after_title' => '</h5>',
			) );
			
		}
	endif;
	add_action( 'widgets_init', 'homeland_sidebar_widgets_init' );
?>