<?php	
	/*-------------------------------
	Dribbble Feed Widget
	-------------------------------*/
	
	class homeland_Widget_Dribbble extends WP_Widget {
	
		function homeland_Widget_Dribbble() {		
			$widget_ops = array('classname' => 'homeland_widget-dribbble', 'description' => __('Custom widget for dribbble feed', 'homeland'));	
			parent::__construct('DribbbleFeed', __('Homeland: Dribbble Feed', 'homeland'), $widget_ops);		
		}
	
		function widget($args, $instance) {		

			if ( is_active_widget( false, false, $this->id_base, true ) ) :
				wp_register_script( 'homeland_dribbble', get_template_directory_uri() . '/js/jribbble.min.js', array(), '', true );
				wp_enqueue_script( 'homeland_dribbble' );
   		endif;	

			extract($args);		
			$title = apply_filters('widget_title', $instance['title']);		
			if (empty($title)) $title = false;
				$instance_homeland_dribbble_id = array();
				$instance_homeland_dribbble_limit = array();
				
				$homeland_dribbble_id = 'homeland_dribbble_id';
				$instance_homeland_dribbble_id = isset($instance[$homeland_dribbble_id]) ? esc_attr($instance[$homeland_dribbble_id]) : '';
				$homeland_dribbble_limit = 'homeland_dribbble_limit';
				$instance_homeland_dribbble_limit = isset($instance[$homeland_dribbble_limit]) ? esc_attr($instance[$homeland_dribbble_limit]) : '';
							
				echo ''.$before_widget.'';					
					if ($title) {						
						echo $before_title;
						echo $title;
						echo $after_title.'';						
					}

				?>	

				<!-- Dribbble Feeds -->
				<ul id="dribbble" class="clear"></ul>

				<script type="text/javascript">
					(function($) {
					  	"use strict";
						$.jribbble.setToken('<?php echo $instance_homeland_dribbble_id; ?>');

						$.jribbble.shots('debuts', {
						  	'per_page': <?php echo $instance_homeland_dribbble_limit; ?>,
						  	'timeframe': 'month',
						  	'sort': 'views'
						}).then(function(res) {
						  	var html = [];
						  	res.forEach(function(shot) {
						    	html.push('<li>');
						    	html.push('<a href="' + shot.html_url + '" target="_blank">');
						    	html.push('<img src="' + shot.images.normal + '">');
						    	html.push('</a></li>');
						  	});
						  
						  	$('#dribbble').html(html.join(''));
						});
					});
				</script>

				<?php
					echo $after_widget.'';				
				}
			
				function update($new_instance, $old_instance) {				
					$instance = $old_instance;				
					$instance['title'] = strip_tags($new_instance['title']);
					$instance['homeland_dribbble_id'] = strip_tags($new_instance['homeland_dribbble_id']);
					$instance['homeland_dribbble_limit'] = strip_tags($new_instance['homeland_dribbble_limit']);				
					return $instance;				
				}
			
				function form($instance) {				
					$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
					$instance_homeland_dribbble_id = array();
					$instance_homeland_dribbble_limit = array();							
					
					$homeland_dribbble_id = 'homeland_dribbble_id';
					$instance_homeland_dribbble_id = isset($instance[$homeland_dribbble_id]) ? esc_attr($instance[$homeland_dribbble_id]) : '';
					$homeland_dribbble_limit = 'homeland_dribbble_limit';
					$instance_homeland_dribbble_limit = isset($instance[$homeland_dribbble_limit]) ? esc_attr($instance[$homeland_dribbble_limit]) : '';	
					
				?>
					<p><label for="<?php echo $this -> get_field_id('title'); ?>"><?php _e('Title', 'homeland'); ?></label>
					<input class="widefat" id="<?php echo $this -> get_field_id('title'); ?>" name="<?php echo $this -> get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>					
					<div>			
						<div>
							<p><label for="<?php echo $this -> get_field_id($homeland_dribbble_id); ?>"><?php _e('Client Access Token', 'homeland'); ?></label>
							<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_dribbble_id); ?>" name="<?php echo $this -> get_field_name($homeland_dribbble_id); ?>" value="<?php echo $instance_homeland_dribbble_id; ?>"><br>
							<span>
								<?php 
									$homeland_dribbble_token_url = "http://developer.dribbble.com/v1/oauth/";
									printf( __( 'Get your client access token here <a href="%s" target="_blank">here</a>', 'homeland' ), $homeland_dribbble_token_url );
								?>
							</span>		
							</p>
							<p><label for="<?php echo $this -> get_field_id($homeland_dribbble_limit); ?>"><?php _e('Limit', 'homeland'); ?></label>
							<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_dribbble_limit); ?>" name="<?php echo $this -> get_field_name($homeland_dribbble_limit); ?>" value="<?php echo $instance_homeland_dribbble_limit; ?>">
							</p>														
						</div>			
					</div>
		<?php
				}			
		}

		function homeland_Widget_dribbble() {			
			register_widget('homeland_Widget_Dribbble');			
		}
		add_action('widgets_init', 'homeland_Widget_dribbble');
?>