<?php
	/*-------------------------------
	Portfolio Widget
	-------------------------------*/
	
	class homeland_Widget_Portfolio extends WP_Widget {
	
		function homeland_Widget_Portfolio() {		
			$widget_ops = array(
				'classname' => 'homeland_widget-portfolio', 
				'description' => __('Custom widget for portfolio', 'homeland')
			);	
			parent::__construct('Portfolio', __('Homeland: Portfolio', 'homeland'), $widget_ops);		
		}
	
		function widget($args, $instance) {		
			extract($args);		
			$title = apply_filters('widget_title', $instance['title']);		
			if (empty($title)) $title = false;
				$instance_homeland_posts_limit = array();
				
				$homeland_posts_limit = 'homeland_posts_limit';
				$instance_homeland_posts_limit = isset($instance[$homeland_posts_limit]) ? esc_attr($instance[$homeland_posts_limit]) : '';

				echo $before_widget;					

				if ($title) {						
					echo $before_title;
					echo $title;
					echo $after_title;						
				}
				?>	
					
				<!-- Portfolio List -->
				<ul class="clear">
					<?php
						global $post;
						$args = array( 
							'post_type' => 'homeland_portfolio', 
							'orderby' => 'DATE', 
							'posts_per_page' => $instance_homeland_posts_limit 
						);
						
						$posts_loop = new WP_Query( $args );	
						while ($posts_loop->have_posts()) : $posts_loop->the_post();	

							$homeland_portfolio_category = get_the_term_list( $post->ID, 'homeland_portfolio_category', ' ', ', ', '' );
					?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<?php 
									if ( has_post_thumbnail() ) : 
										the_post_thumbnail('homeland_news_thumb'); 
									else : ?>
										<label class="no-image-fallback image-portfolio">
											<span><?php _e( 'No Image Available', 'homeland' ); ?></span>
										</label><?php
									endif; 
								?>
							</a>
						</li>	
					<?php
						endwhile;	
						wp_reset_query();	
					?>		
				</ul>		

				<?php
					echo $after_widget.'';				
				}
			
				function update($new_instance, $old_instance) {				
					$instance = $old_instance;				
					$instance['title'] = strip_tags($new_instance['title']);
					$instance['homeland_posts_limit'] = strip_tags($new_instance['homeland_posts_limit']);				
					return $instance;				
				}
			
				function form($instance) {				
					$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
					$instance_homeland_posts_limit = array();
					
					$homeland_posts_limit = 'homeland_posts_limit';
					$instance_homeland_posts_limit = isset($instance[$homeland_posts_limit]) ? esc_attr($instance[$homeland_posts_limit]) : '';			
					
				?>
					<p><label for="<?php echo $this -> get_field_id('title'); ?>"><?php _e('Title', 'homeland'); ?></label>
					<input class="widefat" id="<?php echo $this -> get_field_id('title'); ?>" name="<?php echo $this -> get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>					
					<div>			
						<div>
							<p><label for="<?php echo $this -> get_field_id($homeland_posts_limit); ?>"><?php _e('Limit', 'homeland'); ?></label>
							<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_posts_limit); ?>" name="<?php echo $this -> get_field_name($homeland_posts_limit); ?>" value="<?php echo $instance_homeland_posts_limit; ?>">		
							</p>											
						</div>	
						<p><small><i><?php _e( 'Portfolio are automatically displayed', 'homeland' ); ?></i></small></p>		
					</div>
		<?php
				}			
		}

		function homeland_widgets_portfolio() {			
			register_widget('homeland_Widget_Portfolio');			
		}
		add_action('widgets_init', 'homeland_widgets_portfolio');
?>