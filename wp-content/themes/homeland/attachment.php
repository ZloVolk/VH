<?php 
	get_header(); 
	$homeland_media_type = get_post_mime_type( $post->ID );
	$homeland_media_url = wp_get_attachment_url( $post->ID );
	$homeland_media_alt_text = get_post_meta( $post->ID, '_wp_attachment_image_alt', true );
	$homeland_media_excerpt = $post->post_excerpt;
	$homeland_media_content = $post->post_content;
?>

	<!-- Fullwidth -->
	<section class="theme-pages">
		<div class="inside clear">
			<div class="theme-fullwidth attachment-page">
				<?php 
					switch ( $homeland_media_type ) {
						// Documents
						case 'application/pdf':
						case 'application/rtf': ?>
							<iframe src="http://docs.google.com/viewer?url=<?php echo $homeland_media_url; ?>&amp;embedded=true" width="100%" height="500" style="border: none;"></iframe><?php 
						break;
						
						// Audio
						case 'audio/mpeg': ?>
							<audio><source src="<?php echo $homeland_media_url; ?>" type="audio/mpeg" /></audio><?php 
						break;
						
						// Video
						case 'video/mp4': ?>
							<video controls><source src="<?php echo $homeland_media_url; ?>" type='video/mp4' /></video><?php 
						break;

						default: 
							echo wp_get_attachment_image( get_the_ID(), 'full' );
					} 


					if ( ! empty( $homeland_media_alt_text ) ) : ?>
						<h3><?php echo $homeland_media_alt_text; ?></h3><?php 
					endif;

					if ( ! empty( $homeland_media_excerpt ) ) : ?>
						<span><?php echo $homeland_media_excerpt; ?></span><?php 
					endif; 

					if ( ! empty( $homeland_media_content ) ) : ?>
						<p><?php echo $homeland_media_content; ?></p><?php
					endif;
				?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>