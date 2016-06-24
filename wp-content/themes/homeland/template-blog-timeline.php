<?php
/*
	Template Name: Blog Timeline
*/
?>

<?php 
	get_header();

	$homeland_advance_search = get_post_meta( $post->ID, 'homeland_advance_search', true );
	$homeland_page_nav = esc_attr( get_option('homeland_pnav') );

	if(empty($homeland_advance_search)) : homeland_advance_search(); endif;
?>

	<!-- Blog Page -->
	<section class="theme-pages">
		<div class="inside clear">
			<div class="theme-fullwidth">		
				<?php
					if (have_posts()) : 
						while (have_posts()) : the_post(); 
							the_content(); 								
						endwhile; 
					endif;
				?>	
				<div class="blog-list blog-timeline clear">
					<?php
						homeland_get_home_pagination(); //modify function in "functions.php"...
						
						$args = array( 'post_type' => 'post', 'paged' => $paged );		
						$wp_query = new WP_Query( $args );	

						if ($wp_query->have_posts()) : 
							while ($wp_query->have_posts()) : $wp_query->the_post(); 					
								get_template_part( 'loop', 'entry-timeline' );								
							endwhile;	
						else : _e( 'You have no blog post yet!', 'homeland' );
						endif;		
					?>
				</div>
				<?php 
					if( $homeland_page_nav == "Next Previous Link") : 
						homeland_next_previous(); //modify function in "functions.php"... 
					else : homeland_pagination(); //modify function in "functions.php"...
					endif; 
				?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>