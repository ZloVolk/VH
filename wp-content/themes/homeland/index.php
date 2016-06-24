<?php get_header(); ?>
	
	<?php homeland_advance_search(); ?>

	<!-- Blog List -->
	<section class="theme-pages">
		<div class="inside clear">

			<!-- Left Container -->	
			<div class="left-container">				
				<div class="blog-list clear">
					<?php
						homeland_get_home_pagination(); // modify in functions.php
						$homeland_page_nav = esc_attr( get_option('homeland_pnav') );

						$args = array( 'post_type' => 'post', 'paged' => $paged );		
						$wp_query = new WP_Query( $args );	

						if ($wp_query->have_posts()) : 
							while ($wp_query->have_posts()) : $wp_query->the_post(); 					
								get_template_part( 'loop', 'entry' );								
							endwhile;	
						else :
							_e( 'You have no blog post yet!', 'homeland' );
						endif;					
					?>
				</div>
				<?php 
					if( $homeland_page_nav == "Next Previous Link" ) : 
						homeland_next_previous(); // modify in functions.php
					else : homeland_pagination(); // modify in functions.php
					endif; 
				?>
			</div>

			<!-- Sidebar -->
			<div class="sidebar"><?php get_sidebar(); ?></div>
		</div>
	</section>

<?php get_footer(); ?>