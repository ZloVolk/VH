<?php
/*
	Template Name: Homepage 2
*/
?>

<?php 
	get_header();

	$homeland_hide_three_cols = esc_attr( get_option('homeland_hide_three_cols') );	
	$homeland_hide_two_cols = esc_attr( get_option('homeland_hide_two_cols') );	
	$homeland_hide_welcome = esc_attr( get_option('homeland_hide_welcome') );	
	$homeland_hide_properties = esc_attr( get_option('homeland_hide_properties') );	
	$homeland_hide_services = esc_attr( get_option('homeland_hide_services') );	
	$homeland_hide_testimonials = esc_attr( get_option('homeland_hide_testimonials') );	
	$homeland_hide_partners = esc_attr( get_option('homeland_hide_partners') );	
	$homeland_hide_portfolio = esc_attr( get_option('homeland_hide_portfolio') );	

	homeland_slider(); // modify in custom-functions.php
	homeland_advance_search(); // modify in custom-functions.php

	if(empty($homeland_hide_welcome)) :
		homeland_welcome_text_top();	
	endif; // modify in custom-functions.php

	if(empty($homeland_hide_properties)) :
		homeland_property_list();
	endif; // modify in custom-functions.php

	if(empty($homeland_hide_portfolio)) :
		homeland_portfolio_list_grid();	
	endif; // modify in custom-functions.php

	if(empty($homeland_hide_services)) : 
		homeland_services_list_bg();
	endif; // modify in custom-functions.php
	
	if(empty($homeland_hide_three_cols)) : ?>
		<!-- 3 Columns -->
		<section class="three-columns-block">
			<div class="inside clear">
				<?php 
					homeland_featured_list_large(); // modify in custom-functions.php
					homeland_blog_latest(); // modify in custom-functions.php
				?>
			</div>
		</section><?php
	endif;

	if(empty($homeland_hide_partners)) :
		homeland_partners_list();
	endif;

	get_footer(); 
?>