<?php
	/*-------------------------------
	Testimonials Widget
	-------------------------------*/
	
	class homeland_Widget_Testimonials extends WP_Widget {
	
		function homeland_Widget_Testimonials() {		
			$widget_ops = array(
				'classname' => 'homeland_widget-testimonials', 
				'description' => __('Custom widget for testimonials', 'homeland')
			);	
			parent::__construct('Testimonials', __('Homeland: Testimonials', 'homeland'), $widget_ops);
		}
	
		function widget($args, $instance) {		
			extract($args);		
			$title = apply_filters('widget_title', $instance['title']);		
			if (empty($title)) $title = false;
				$instance_testi_limit = array();
				
				$testi_limit = 'testi_limit';
				$instance_testi_limit = isset($instance[$testi_limit]) ? esc_attr($instance[$testi_limit]) : '';
							
				echo ''.$before_widget.'';					
				if ($title) {						
					echo $before_title;
			 		echo $title;
			 		echo $after_title.'';						
			 	}

					global $post;

			 		$args = array( 
						'post_type' => 'homeland_testimonial', 
						'posts_per_page' => $instance_testi_limit 
					);	

					$wp_query = new WP_Query( $args ); ?>
					<div class="testimonial-flexslider">	
						<ul class="slides">
							<?php
								while ($wp_query->have_posts()) : 
									$wp_query->the_post(); 
									$homeland_position = esc_attr(get_post_meta($post->ID, 'homeland_position', true));
								?>
									<li id="post-<?php the_ID(); ?>" <?php sanitize_html_class( post_class() ); ?>>
										<?php 
											the_content();
											if ( has_post_thumbnail() ) : 
												the_post_thumbnail('homeland_theme_thumb'); 
											endif;
											the_title( '<h4>', '</h4>' ); 
											echo "<span>". $homeland_position ."</span>";
										?>	 
									</li><?php							
								endwhile;								
							?>
						</ul>	
					</div><?php
					wp_reset_query();

					echo $after_widget.'';				
				}
			
				function update($new_instance, $old_instance) {				
					$instance = $old_instance;				
					$instance['title'] = strip_tags($new_instance['title']);
					$instance['testi_limit'] = $new_instance['testi_limit'];				
					return $instance;				
				}
			
				function form($instance) {				
					$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
					$instance_testi_limit = array();							
					
					$testi_limit = 'testi_limit';
					$instance_testi_limit = isset($instance[$testi_limit]) ? esc_attr($instance[$testi_limit]) : '';					
					
				?>
					<p>
						<label for="<?php echo $this -> get_field_id('title'); ?>">
							<?php _e('Title', 'homeland'); ?>
						</label>
						<input class="widefat" id="<?php echo $this -> get_field_id('title'); ?>" name="<?php echo $this -> get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
					</p>	

					<div>			
						<div>
							<p>
								<label for="<?php echo $this->get_field_id($testi_limit); ?>">
									<?php _e('Number of Testimonials', 'homeland'); ?>
								</label>
								<input class="widefat" type="text" id="<?php echo $this -> get_field_id($testi_limit); ?>" name="<?php echo $this->get_field_name($testi_limit); ?>" value="<?php echo $instance_testi_limit; ?>">
							</p>														
						</div>			
					</div>
		<?php
				}			
		}

		function homeland_widget_testimonials() {			
			register_widget('homeland_Widget_Testimonials');			
		}
		add_action('widgets_init', 'homeland_widget_testimonials');
?>