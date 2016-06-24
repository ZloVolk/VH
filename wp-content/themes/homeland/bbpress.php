<?php get_header(); ?>
	
	<!-- bbPress -->
	<section class="theme-pages">
		<div class="inside clear">

			<!-- Left Container -->	
			<div class="left-container">
				<?php
					if (have_posts()) : 
						while (have_posts()) : the_post(); 
							the_content(); 								
						endwhile; 
					endif;
				?>	
			</div>

			<!-- Sidebar -->
			<div class="sidebar"><?php get_sidebar(); ?></div>
		</div>
	</section>

<?php get_footer(); ?>