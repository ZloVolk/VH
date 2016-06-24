<?php 
	get_header(); 
	homeland_advance_search(); 

	$homeland_page_nav = esc_attr( get_option('homeland_pnav') );
?>

	<!-- Search Results -->
	<section class="theme-pages">
		<div class="inside clear">

			<!-- Left Container -->		
			<div class="left-container">				
				<div class="blog-list clear">
					<?php
						if (have_posts()) : 
							while (have_posts()) : the_post(); 					
								get_template_part( 'loop', 'entry' );								
							endwhile;	
						else :
							_e( 'The Keyword you search cannot be found!', 'homeland' );
						endif;					
					?>
				</div>
				<?php 
					if( $homeland_page_nav == "Next Previous Link" ) : 
						homeland_next_previous(); //modify function in "functions.php"...
					else : homeland_pagination(); //modify function in "functions.php"... 
					endif; 
				?>
			</div>

			<!-- Sidebar -->
			<div class="sidebar"><?php get_sidebar(); ?></div>
		</div>
	</section>

<?php get_footer(); ?>