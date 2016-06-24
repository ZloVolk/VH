<?php 
	global $homeland_class; 
	
	$homeland_property_status = get_the_term_list ( $post->ID, 'homeland_property_status', ' ', ', ', '' );
	$homeland_price = esc_attr( get_post_meta( $post->ID, 'homeland_price', true ) );
	$homeland_property_button = esc_attr( get_option('homeland_property_button') ); 
	$homeland_area = esc_attr( get_post_meta($post->ID, 'homeland_area', true) );
	$homeland_area_unit = esc_attr( get_post_meta( $post->ID, 'homeland_area_unit', true ) );
	$homeland_floor_area = esc_attr( get_post_meta( $post->ID, 'homeland_floor_area', true ) );
	$homeland_floor_area_unit = esc_attr( get_post_meta( $post->ID, 'homeland_floor_area_unit', true ) );
	$homeland_bedroom = esc_attr( get_post_meta($post->ID, 'homeland_bedroom', true) );
	$homeland_bathroom = esc_attr( get_post_meta($post->ID, 'homeland_bathroom', true) );
	$homeland_featured = esc_attr( get_post_meta($post->ID, 'homeland_featured', true) );
	$homeland_property_sold = esc_attr( get_post_meta($post->ID, 'homeland_property_sold', true) );
	$homeland_address = esc_attr( get_post_meta($post->ID, 'homeland_address', true) );
	$homeland_property_button_label = !empty($homeland_property_button) ? $homeland_property_button : __('View More Details', 'homeland');
?>

<li id="post-<?php the_ID(); ?>" class="<?php echo $homeland_class; ?>">
	<div class="property-mask">
		<?php if(!empty($homeland_featured)) : ?>
			<div class="featured-ribbon"><i class="fa fa-star" title="<?php _e('Featured', 'homeland'); ?>"></i></div>
		<?php endif; ?>
		<?php

			if ( post_password_required() ) :
				echo "<div class='password-protect-thumb password-4cols'><i class='fa fa-lock fa-2x'></i></div>";
			else : ?>
				<figure class="pimage">
					<a href="<?php the_permalink(); ?>">
						<?php 
							if ( has_post_thumbnail() ) : 
								the_post_thumbnail('homeland_property_4cols'); 
							else : ?>
								<label class="no-image-fallback image-properties">
									<span><?php _e( 'No Image Available', 'homeland' ); ?></span>
								</label><?php
							endif; 
						?>
					</a>
					<figcaption>
						<a href="<?php the_permalink(); ?>"><i class="fa fa-link fa-lg"></i></a>
					</figcaption>
					<?php
						if(!empty($homeland_property_sold)) :
							echo "<h4 class='property-sold'>". __('Sold', 'homeland') ."</h4>";
						else :
							if(!empty( $homeland_property_status )) : 
								echo "<h4>". $homeland_property_status ."</h4>";
							endif; 
						endif;
					?>						
				</figure><?php
			endif;
		?>			
	</div>
	<div class="property-desc">
		<?php the_title( '<h4><a href="' . get_permalink() . '">', '</a></h4>' ); ?>	
		<h5><?php echo $homeland_address; ?></h5>
		<ul class="pinfo clear">
			<?php
				if(!empty($homeland_floor_area)) : ?>
					<li>
						<?php
							esc_attr( _e( 'Floor Area', 'homeland' ) ); ?>
							<span><?php echo $homeland_floor_area; echo "&nbsp;" . $homeland_floor_area_unit; ?></span><?php
						?>
					</li><?php
				endif;
				if(!empty($homeland_area)) : ?>
					<li>
						<?php
							esc_attr( _e( 'Lot Area', 'homeland' ) ); ?>
							<span><?php echo $homeland_area; echo "&nbsp;" . $homeland_area_unit; ?></span><?php
						?>
					</li><?php
				endif;
				if(!empty($homeland_bedroom)) : ?>
					<li>
						<?php
							esc_attr( _e( 'Bedrooms', 'homeland' ) ); ?>
							<span><?php echo $homeland_bedroom; ?></span><?php
						?>
					</li><?php
				endif;
				if(!empty($homeland_bathroom)) : ?>
					<li>
						<?php
							esc_attr( _e( 'Bathrooms', 'homeland' ) ); ?>
							<span><?php echo $homeland_bathroom; ?></span><?php
						?>
					</li><?php
				endif;
			?>
		</ul>
		<?php if(!empty($homeland_price)) : ?>
			<span class="price"><?php homeland_property_price_format(); ?></span>
		<?php endif; ?>
		<span class="view-details">
			<a href="<?php the_permalink(); ?>"><?php echo $homeland_property_button_label; ?></a>
		</span>
	</div>	
</li>