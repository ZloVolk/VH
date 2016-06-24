<?php get_header(); ?>
	
	<?php 
		$homeland_advance_search = get_post_meta( $post->ID, 'homeland_advance_search', true );
		if(empty($homeland_advance_search)) :
			homeland_advance_search(); // modify in custom-functions.php
		endif;
	?>

	<!-- Default Page Template -->
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