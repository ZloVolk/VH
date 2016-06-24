<?php
	/*-------------------------------
	Working Hours Widget
	-------------------------------*/
	
	class homeland_Widget_Working_Hours extends WP_Widget {
	
		function homeland_Widget_Working_Hours() {		
			$widget_ops = array('classname' => 'homeland_widget-working-hours', 'description' => __('Custom widget for working hours', 'homeland'));	
			parent::__construct('WorkingHours', __('Homeland: Working Hours', 'homeland'), $widget_ops);
		}
	
		function widget($args, $instance) {		
			extract($args);		
			$title = apply_filters('widget_title', $instance['title']);		
			if (empty($title)) $title = false;						
				$instance_homeland_working_monday = array();
				$instance_homeland_working_tuesday = array();
				$instance_homeland_working_wednesday = array();
				$instance_homeland_working_thursday = array();
				$instance_homeland_working_friday = array();
				$instance_homeland_working_saturday = array();
				$instance_homeland_working_sunday = array();
				
				$homeland_working_monday = 'homeland_working_monday';
				$homeland_working_tuesday = 'homeland_working_tuesday';
				$homeland_working_wednesday = 'homeland_working_wednesday';
				$homeland_working_thursday = 'homeland_working_thursday';
				$homeland_working_friday = 'homeland_working_friday';
				$homeland_working_saturday = 'homeland_working_saturday';
				$homeland_working_sunday = 'homeland_working_sunday';

				$instance_homeland_working_monday = isset($instance[$homeland_working_monday]) ? esc_attr($instance[$homeland_working_monday]) : '';		
				$instance_homeland_working_tuesday = isset($instance[$homeland_working_tuesday]) ? esc_attr($instance[$homeland_working_tuesday]) : '';									
				$instance_homeland_working_wednesday = isset($instance[$homeland_working_wednesday]) ? esc_attr($instance[$homeland_working_wednesday]) : '';									
				$instance_homeland_working_thursday = isset($instance[$homeland_working_thursday]) ? esc_attr($instance[$homeland_working_thursday]) : '';									
				$instance_homeland_working_friday = isset($instance[$homeland_working_friday]) ? esc_attr($instance[$homeland_working_friday]) : '';									
				$instance_homeland_working_saturday = isset($instance[$homeland_working_saturday]) ? esc_attr($instance[$homeland_working_saturday]) : '';									
				$instance_homeland_working_sunday = isset($instance[$homeland_working_sunday]) ? esc_attr($instance[$homeland_working_sunday]) : '';	
				
				echo $before_widget;	
				if ($title) {						
					echo $before_title;
					echo $title;
					echo $after_title;						
				}				

				?>	

				<!-- Working Hours -->
				<ul>
					<li>
						<?php _e( 'Monday', 'homeland' ); ?>
						<span><?php echo $instance_homeland_working_monday; ?></span>
					</li>
					<li>
						<?php _e( 'Tuesday', 'homeland' ); ?>
						<span><?php echo $instance_homeland_working_tuesday; ?></span>
					</li>
					<li>
						<?php _e( 'Wednesday', 'homeland' ); ?>
						<span><?php echo $instance_homeland_working_wednesday; ?></span>
					</li>
					<li>
						<?php _e( 'Thursday', 'homeland' ); ?>
						<span><?php echo $instance_homeland_working_thursday; ?></span>
					</li>
					<li>
						<?php _e( 'Friday', 'homeland' ); ?>
						<span><?php echo $instance_homeland_working_friday; ?></span>
					</li>
					<li>
						<?php _e( 'Saturday', 'homeland' ); ?>
						<span><?php echo $instance_homeland_working_saturday; ?></span>
					</li>
					<li>
						<?php _e( 'Sunday', 'homeland' ); ?>
						<span><?php echo $instance_homeland_working_sunday; ?></span>
					</li>
				</ul>

				<?php
					echo $after_widget.'';				
				}
			
				function update($new_instance, $old_instance) {				
					$instance = $old_instance;				
					$instance['title'] = strip_tags($new_instance['title']);
					$instance['homeland_working_monday'] = strip_tags($new_instance['homeland_working_monday']);	
					$instance['homeland_working_tuesday'] = strip_tags($new_instance['homeland_working_tuesday']);	
					$instance['homeland_working_wednesday'] = strip_tags($new_instance['homeland_working_wednesday']);	
					$instance['homeland_working_thursday'] = strip_tags($new_instance['homeland_working_thursday']);
					$instance['homeland_working_friday'] = strip_tags($new_instance['homeland_working_friday']);
					$instance['homeland_working_saturday'] = strip_tags($new_instance['homeland_working_saturday']);
					$instance['homeland_working_sunday'] = strip_tags($new_instance['homeland_working_sunday']);
					return $instance;				
				}
			
				function form($instance) {				
					$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
					$instance_homeland_working_monday = array();
					$instance_homeland_working_tuesday = array();
					$instance_homeland_working_wednesday = array();
					$instance_homeland_working_thursday = array();
					$instance_homeland_working_friday = array();
					$instance_homeland_working_saturday = array();
					$instance_homeland_working_sunday = array();
					
					$homeland_working_monday = 'homeland_working_monday';
					$homeland_working_tuesday = 'homeland_working_tuesday';
					$homeland_working_wednesday = 'homeland_working_wednesday';
					$homeland_working_thursday = 'homeland_working_thursday';
					$homeland_working_friday = 'homeland_working_friday';
					$homeland_working_saturday = 'homeland_working_saturday';
					$homeland_working_sunday = 'homeland_working_sunday';

					$instance_homeland_working_monday = isset($instance[$homeland_working_monday]) ? esc_attr($instance[$homeland_working_monday]) : '';		
					$instance_homeland_working_tuesday = isset($instance[$homeland_working_tuesday]) ? esc_attr($instance[$homeland_working_tuesday]) : '';									
					$instance_homeland_working_wednesday = isset($instance[$homeland_working_wednesday]) ? esc_attr($instance[$homeland_working_wednesday]) : '';									
					$instance_homeland_working_thursday = isset($instance[$homeland_working_thursday]) ? esc_attr($instance[$homeland_working_thursday]) : '';									
					$instance_homeland_working_friday = isset($instance[$homeland_working_friday]) ? esc_attr($instance[$homeland_working_friday]) : '';									
					$instance_homeland_working_saturday = isset($instance[$homeland_working_saturday]) ? esc_attr($instance[$homeland_working_saturday]) : '';									
					$instance_homeland_working_sunday = isset($instance[$homeland_working_sunday]) ? esc_attr($instance[$homeland_working_sunday]) : '';									
														
				?>
					<p><label for="<?php echo $this -> get_field_id('title'); ?>"><?php _e('Title', 'homeland'); ?></label>
					<input class="widefat" id="<?php echo $this -> get_field_id('title'); ?>" name="<?php echo $this -> get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
					<div>			
						<div>
							<p><label for="<?php echo $this -> get_field_id($homeland_working_monday); ?>"><?php _e('Monday', 'homeland'); ?></label>
								<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_working_monday); ?>" name="<?php echo $this -> get_field_name($homeland_working_monday); ?>" value="<?php echo $instance_homeland_working_monday; ?>">
							</p>											
						</div>	
					</div>
					<div>			
						<div>
							<p><label for="<?php echo $this -> get_field_id($homeland_working_tuesday); ?>"><?php _e('Tuesday', 'homeland'); ?></label>
								<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_working_tuesday); ?>" name="<?php echo $this -> get_field_name($homeland_working_tuesday); ?>" value="<?php echo $instance_homeland_working_tuesday; ?>">
							</p>											
						</div>	
					</div>
					<div>			
						<div>
							<p><label for="<?php echo $this -> get_field_id($homeland_working_wednesday); ?>"><?php _e('Wednesday', 'homeland'); ?></label>
								<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_working_wednesday); ?>" name="<?php echo $this -> get_field_name($homeland_working_wednesday); ?>" value="<?php echo $instance_homeland_working_wednesday; ?>">
							</p>											
						</div>	
					</div>
					<div>			
						<div>
							<p><label for="<?php echo $this -> get_field_id($homeland_working_thursday); ?>"><?php _e('Thursday', 'homeland'); ?></label>
								<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_working_thursday); ?>" name="<?php echo $this -> get_field_name($homeland_working_thursday); ?>" value="<?php echo $instance_homeland_working_thursday; ?>">
							</p>											
						</div>	
					</div>
					<div>			
						<div>
							<p><label for="<?php echo $this -> get_field_id($homeland_working_friday); ?>"><?php _e('Friday', 'homeland'); ?></label>
								<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_working_friday); ?>" name="<?php echo $this -> get_field_name($homeland_working_friday); ?>" value="<?php echo $instance_homeland_working_friday; ?>">
							</p>											
						</div>	
					</div>
					<div>			
						<div>
							<p><label for="<?php echo $this -> get_field_id($homeland_working_saturday); ?>"><?php _e('Saturday', 'homeland'); ?></label>
								<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_working_saturday); ?>" name="<?php echo $this -> get_field_name($homeland_working_saturday); ?>" value="<?php echo $instance_homeland_working_saturday; ?>">
							</p>											
						</div>	
					</div>
					<div>			
						<div>
							<p><label for="<?php echo $this -> get_field_id($homeland_working_sunday); ?>"><?php _e('Sunday', 'homeland'); ?></label>
								<input class="widefat" type="text" id="<?php echo $this -> get_field_id($homeland_working_sunday); ?>" name="<?php echo $this -> get_field_name($homeland_working_sunday); ?>" value="<?php echo $instance_homeland_working_sunday; ?>">
							</p>											
						</div>	
					</div><?php
				}			
		}

		function homeland_widgets_working_hours() {			
			register_widget('homeland_Widget_Working_Hours');			
		}
		add_action('widgets_init', 'homeland_widgets_working_hours');
?>