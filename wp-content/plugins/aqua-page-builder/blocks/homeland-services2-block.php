<?php
/** Services block **/
class Homeland_Services2_Block extends AQ_Block {
	
	//set and create block
	function __construct() {
		$block_options = array(
			'name' => __('Services 2', 'aqpb-l10n'),
			'size' => 'span12',
		);
		
		//create the block
		parent::__construct('homeland_services2_block', $block_options);
	}
	
	function form($instance) {
		
		$defaults = array(
			'homeland_limit' => '',
			'homeland_order' => '',
			'homeland_sort' => '',
			'homeland_button_text' => '',
			'homeland_background' => '',
			'homeland_overlay' => '',
		);
		
		$instance = wp_parse_args($instance, $defaults);
		extract($instance);

		$homeland_order_options = array(
			'DESC' => 'Descending',
			'ASC' => 'Ascending',
		);

		$homeland_sort_options = array(
			'ID' => 'ID',
			'author' => 'Author',
			'title' => 'Title',
			'name' => 'Name',
			'date' => 'Date',
			'modified' => 'Modified',
			'parent' => 'Parent',
			'rand' => 'Random',
			'comment_count' => 'Comment Count',
			'menu_order' => 'Menu Order',
		);
		
		?>

		<p class="description half">
			<label for="<?php echo $this->get_field_id('homeland_order'); ?>">
				<?php 
					_e( 'Order', 'aqpb-l10n' ); 
					echo aq_field_select('homeland_order', $block_id, $homeland_order_options, $homeland_order); 
				?>
				<small><?php _e( 'Select your services order type', 'aqpb-l10n' ); ?></small>
			</label>
		</p>
		<p class="description half last">
			<label for="<?php echo $this->get_field_id('homeland_sort'); ?>">
				<?php 
					_e( 'Sort', 'aqpb-l10n' );
					echo aq_field_select('homeland_sort', $block_id, $homeland_sort_options, $homeland_sort); 
				?>
				<small><?php _e( 'Select your sort by parameter for services', 'aqpb-l10n' ); ?></small>
			</label>
		</p>
		<p class="description half">
			<label for="<?php echo $this->get_field_id('homeland_limit'); ?>">
				<?php 
					_e( 'Limit', 'aqpb-l10n' );
					echo aq_field_input('homeland_limit', $block_id, $homeland_limit); 
				?>
				<small><?php _e(' Enter your number of services to be display', 'aqpb-l10n'); ?></small>
			</label>
		</p>
		<p class="description half last">
			<label for="<?php echo $this->get_field_id('homeland_button_text'); ?>">
				<?php 
					_e( 'Button Label', 'aqpb-l10n' );
					echo aq_field_input('homeland_button_text', $block_id, $homeland_button_text, $size = 'full'); 
				?>  
				<small><?php _e( ' Add label of your services button', 'aqpb-l10n' ); ?></small>
			</label>
		</p>
		<p class="description half">
			<label for="<?php echo $this->get_field_id('homeland_background'); ?>">
				<?php 
					_e( 'Background', 'aqpb-l10n' ); 
					echo aq_field_upload('homeland_background', $block_id, $homeland_background, $media_type = 'image'); 
				?>   
			</label>
		</p>
		<p class="description half last">
			<label for="<?php echo $this->get_field_id('homeland_overlay'); ?>">
				<?php 
					_e( 'Overlay Color', 'aqpb-l10n' ); 
					echo aq_field_color_picker('homeland_overlay', $block_id, $homeland_overlay, $default = ''); 
				?>
			</label>
		</p>
		
		<?php
	}
	
	function block($instance) {
		extract($instance);

		if(!empty($homeland_background)) :
			?><style>.services-pb-block { background: url('<?php echo $homeland_background; ?>') no-repeat center !important; background-size: cover !important; }</style><?php
		endif;

		if(!empty($homeland_overlay)) :
			?><style>.services-pb-block .overlay { background-color: <?php echo $homeland_overlay; ?> !important; }</style><?php
		endif;

		global $post;

		$args = array( 
			'post_type' => 'homeland_services', 
			'orderby' => $homeland_sort, 
			'order' => $homeland_order, 
			'posts_per_page' => $homeland_limit 
		);

		$wp_query = new WP_Query( $args );	

		if ($wp_query->have_posts()) : ?>
			<!--SERVICES-->
			<section class="services-pb-block">
				<?php
					if(!empty($homeland_overlay)) :
						echo "<div class='overlay'>&nbsp;</div>";
					endif;
				?>		
				<div class="inside services-list-box clear"><?php
					for($homeland_i = 1; $wp_query->have_posts(); $homeland_i++) {
						$wp_query->the_post();		

						$homeland_custom_link = get_post_meta( $post->ID, 'homeland_custom_link', true );	
						$homeland_icon = esc_html( get_post_meta( $post->ID, "homeland_icon", true ) );
						$homeland_custom_icon = esc_html( get_post_meta( $post->ID, "homeland_custom_icon", true ) );	

						$homeland_columns = 3;	
						$homeland_class = 'services-list clear ';
						$homeland_class .= ($homeland_i % $homeland_columns == 0) ? 'last' : ''; ?>
						
						<div id="post-<?php the_ID(); ?>" <?php sanitize_html_class( post_class($homeland_class) ); ?>>
							<?php
								if(!empty($homeland_custom_link)) :
									?><a href="<?php echo $homeland_custom_link; ?>" target="_blank"><?php
								else :
									?><a href="<?php the_permalink(); ?>"><?php
								endif;
							?>
								<span class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
									<?php
										if(!empty($homeland_icon)) : ?><i class="hi-icon fa <?php echo $homeland_icon; ?>"></i><?php
										else : ?><img src="<?php echo $homeland_custom_icon; ?>" alt="" title="" /><?php
										endif;
									?>
								</span>
							</a>
							<div class="services-desc">
								<?php 
									the_title( '<h5>', '</h5>' ); 
									the_excerpt();

									if(!empty($homeland_custom_link)) :
										?><a href="<?php echo $homeland_custom_link; ?>" class="more" target="_blank"><?php
									else :
										?><a href="<?php the_permalink(); ?>" class="more"><?php
									endif;

										echo $homeland_button_text;
									?>
								</a>
							</div>
						</div><?php
					} ?>				
				</div>
			</section><?php
		endif;

	}
	
}