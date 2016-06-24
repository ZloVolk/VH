<?php
/*
	Template Name: Left Sidebar
*/
?>

<?php 
	get_header(); 
	$homeland_advance_search = get_post_meta( $post->ID, 'homeland_advance_search', true );
	if(empty($homeland_advance_search)) : homeland_advance_search(); endif;
?>

	<!-- Left Sidebar -->
	<section class="theme-pages">
		<div class="inside clear">		
			<div class="left-container right">
				<?php
					if (have_posts()) : 
						while (have_posts()) : the_post(); 
							the_content(); 								
						endwhile; 
					endif;
				?>	
			</div>

			<!-- Sidebar -->
			<div class="sidebar left"><?php get_sidebar(); ?></div>
		</div>
	</section>

<?php get_footer(); ?>