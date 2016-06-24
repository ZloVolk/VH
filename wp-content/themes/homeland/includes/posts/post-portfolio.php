<?php
	/*---------------------------
	Custom Post Type: Portfolio
	---------------------------*/		

	if ( ! function_exists( 'homeland_portfolio_post_type' ) ) :	
		function homeland_portfolio_post_type() { 
			register_post_type( 'homeland_portfolio',
				array(
					'labels' => array(
						'name' => __( 'Portfolio', 'homeland' ),
						'singular_name' => __( 'Portfolio', 'homeland' ),
						'add_new' => __( 'Add New', 'homeland' ),
						'add_new_item' => __( 'Add New Portfolio', 'homeland' ),
						'edit_item' => __( 'Edit Portfolio', 'homeland' ),
						'search_items' => __( 'Search Portfolio', 'homeland' ),
						'not_found' => __( 'No portfolio found.', 'homeland' ),
						'not_found_in_trash' => __( 'No portfolio found in Trash.', 'homeland' ),
					),
					'public' => true,
					'has_archive' => true,	
					'publicly_queryable' => true,
					'show_ui' => true, 
			    	'show_in_menu' => true, 
			   	'query_var' => true,	
				   'rewrite' => array( 'slug' => __( 'portfolio-item', 'homeland' ), 'with_front' => TRUE ),
				   'supports' => array('title', 'editor', 'author', 'thumbnail', 'page-attributes', 'custom-fields', 'excerpt'),
					'menu_icon' => 'dashicons-portfolio',
				)
			);
		}
	endif;
	add_action( 'init', 'homeland_portfolio_post_type' );

	
	/*----------------------------
	MetaBoxes
	----------------------------*/

	if ( ! function_exists( 'homeland_portfolio_meta' ) ) :	
		function homeland_portfolio_meta() {
			global $post;

			$homeland_advance_search = sanitize_text_field( get_post_meta( $post->ID, 'homeland_advance_search', true ) );
			$homeland_bgimage = sanitize_text_field( get_post_meta($post->ID, 'homeland_bgimage', true) );
			$homeland_hdimage = sanitize_text_field( get_post_meta($post->ID, 'homeland_hdimage', true) );
			$homeland_website = sanitize_text_field( get_post_meta($post->ID, 'homeland_website', true) );
			$homeland_rev_slider = sanitize_text_field( get_post_meta($post->ID, 'homeland_rev_slider', true ) );

			?>
				<div class="mabuc-form-wrap">	

					<!-- Tabs -->
					<ul class="mabuc-tabs">
						<li class="mabuc-tab-link current" data-tab="tab-1">
							<i class="fa fa-home"></i><?php _e( 'Main Settings', 'homeland' ); ?>
						</li>
						<li class="mabuc-tab-link" data-tab="tab-2">
							<i class="fa fa-image"></i><?php _e( 'Images', 'homeland' ); ?>
						</li>
						<li class="mabuc-tab-link" data-tab="tab-3">
							<i class="fa fa-sliders"></i><?php _e( 'Slider', 'homeland' ); ?>
						</li>
					</ul>

					<!-- Main Settings -->
					<div id="tab-1" class="mabuc-tab-content current">
						<ul>
							<li>
								<label for="homeland_advance_search">
									<?php esc_attr( _e( 'Hide Search', 'homeland' ) ); ?>
								</label>
								<input name="homeland_advance_search" type="checkbox" id="homeland_advance_search" <?php if( $homeland_advance_search == true ) { ?>checked="checked"<?php } ?> /><br>
								<span class="desc"><?php esc_attr( _e( 'Tick the box to hide advance search in this post', 'homeland' ) ); ?></span>
							</li>
							<li>
								<label for="homeland_website">
									<?php _e( 'Website URL', 'homeland' ); ?>
								</label>
								<input name="homeland_website" type="text" id="homeland_website" value="<?php echo esc_attr( $homeland_website ); ?>" /> <br>
								<span class="desc"><?php _e( 'Provide your portfolio website url', 'homeland' ); ?></span>
							</li>
						</ul>
					</div>	

					<!-- Images -->
					<div id="tab-2" class="mabuc-tab-content">
						<ul>
							<li>
								<label for="homeland_hdimage">
									<?php esc_attr( _e( 'Header Image', 'homeland' ) ); ?>
								</label>
								<input name="homeland_hdimage" type="text" id="homeland_hdimage" value="<?php echo esc_attr( $homeland_hdimage ); ?>" /> <input id="upload_image_button_homeland_hdimage" type="button" value="<?php echo _e( 'Upload', 'homeland' ); ?>" class="button-secondary" /><br>
								<span class="desc"><?php esc_attr( _e( 'Please upload header image. Otherwise default header image from theme options will be displayed', 'homeland' ) ); ?></span>
							</li>
							<li>
								<label for="homeland_bgimage">
									<?php _e( 'Background Image', 'homeland' ); ?>
								</label>
								<input name="homeland_bgimage" type="text" id="homeland_bgimage" value="<?php echo esc_attr( $homeland_bgimage ); ?>" /> <input id="upload_image_button_homeland_bgimage" type="button" value="<?php _e( 'Upload', 'homeland' ); ?>" class="button-secondary" /><br>
								<span class="desc"><?php _e( 'Please upload background image. Otherwise default background image from theme options will be displayed', 'homeland' ); ?></span>
							</li>
						</ul>
					</div>

					<!-- Slider -->
					<div id="tab-3" class="mabuc-tab-content">	
						<ul>
							<?php
								if(shortcode_exists("rev_slider")) : ?>
								   <li>
								   	<label for="homeland_rev_slider">
								   		<?php _e( 'Revolution Slider', 'homeland' ); ?>
								   	</label>
								   	<select name="homeland_rev_slider" id="homeland_rev_slider">
									   	<?php
												$slider = new RevSlider();
												$revolution_sliders = $slider->getArrSliders();
												 
												echo "<option value=''>Select</option>";
												foreach ( $revolution_sliders as $revolution_slider ) {
										       	$checked="";
													$alias = $revolution_slider->getAlias();
													$title = $revolution_slider->getTitle();
													if($alias==$homeland_rev_slider) $checked="selected";
														echo "<option value='".$alias."' $checked>".$title."</option>";
												}
											?>
										</select><br>
										<span class="desc"><?php _e( 'Select your slider if you want to use revolution slider in portfolio single page', 'homeland' ); ?></span>
								   </li><?php
								endif;
							?>
						</ul>
					</div>		
				</div>		
			<?php	
		}
	endif;

		
	/*----------------------------
	Portfolio Taxonomies
	----------------------------*/

	if ( ! function_exists( 'homeland_portfolio_taxonomies' ) ) :	
		function homeland_portfolio_taxonomies() {

			//Portfolio Category
			$labels = array(
				'name'              => __( 'Portfolio Category', 'homeland' ),
				'singular_name'     => __( 'Portfolio Category', 'homeland' ),
				'search_items'      => __( 'Search Portfolio Category', 'homeland' ),
				'all_items'         => __( 'All Portfolio Category', 'homeland' ),
				'edit_item'         => __( 'Edit Portfolio Category', 'homeland' ),
				'update_item'       => __( 'Update Portfolio Category', 'homeland' ),
				'add_new_item'      => __( 'Add New Portfolio Category', 'homeland' ),
				'new_item_name'     => __( 'New Portfolio Category', 'homeland' ),
				'menu_name'         => __( 'Categories', 'homeland' ),
				'parent_item'       => __( 'Parent Portfolio Category', 'homeland' )
			);
			$args = array( 
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'portfolio-category' ),
			);
			register_taxonomy( 'homeland_portfolio_category', 'homeland_portfolio', $args );


			//Portfolio Tags
			$labels = array(
				'name' => __( 'Portfolio Tags', 'homeland'),
				'singular_name' => __( 'Portfolio Tag', 'homeland' ),
				'search_items' =>  __( 'Portfolio Search Tags', 'homeland' ),
				'popular_items' => __( 'Portfolio Popular Tags', 'homeland' ),
				'all_items' => __( 'All Portfolio Tags', 'homeland' ),
				'edit_item' => __( 'Edit Portfolio Tag', 'homeland' ), 
				'update_item' => __( 'Update Portfolio Tag', 'homeland' ),
				'add_new_item' => __( 'Add New Portfolio Tag', 'homeland' ),
				'new_item_name' => __( 'New Portfolio Tag Name', 'homeland' ),
				'separate_items_with_commas' => __( 'Separate tags with commas', 'homeland' ),
				'add_or_remove_items' => __( 'Add or remove tags', 'homeland' ),
				'choose_from_most_used' => __( 'Choose from the most used tags', 'homeland' ),
				'menu_name' => __( 'Tags', 'homeland' ),
			); 

			$args = array( 
				'hierarchical' => false,
				'labels' => $labels,
				'show_ui' => true,
				'update_count_callback' => '_update_post_term_count',
				'query_var' => true,
				'rewrite' => array( 'slug' => 'portfolio-tag' ),
			);

			register_taxonomy( 'homeland_portfolio_tag', 'homeland_portfolio', $args );
		}
	endif;
	add_action( 'init', 'homeland_portfolio_taxonomies', 1 );


	/*----------------------------
	Custom Columns
	----------------------------*/

	if ( ! function_exists( 'homeland_edit_portfolio_columns' ) ) :	
		function homeland_edit_portfolio_columns( $columns ) {
			$columns = array(
				'cb' => '<input type="checkbox" />',
				'title' => __( 'Name', 'homeland' ),						
				'category' => __( 'Categories', 'homeland' ),
				'link' => __( 'Website', 'homeland' ),
				'thumbnail' => __( 'Thumbnail', 'homeland' ),
				'date' => __( 'Date', 'homeland' )
			);
			return $columns;
		}
	endif;
	add_filter( 'manage_edit-homeland_portfolio_columns', 'homeland_edit_portfolio_columns' ) ;


	if ( ! function_exists( 'homeland_manage_portfolio_columns' ) ) :	
		function homeland_manage_portfolio_columns( $column ) {
			global $post;

			switch($column) {
				case 'category' :
					$terms = get_the_terms( $post->ID, 'homeland_portfolio_category' );
					if ( !empty( $terms ) ) :
						$out = array();
						foreach ( $terms as $term ) {
							$out[] = sprintf( '<a href="%s">%s</a>',
								esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'homeland_portfolio_category' => $term->slug ), 'edit.php' ) ),
								esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'homeland_portfolio_category', 'display' ) )
							);
						}
						echo join( ', ', $out );
					else : __( 'No Categories', 'homeland' ); 
					endif;
				break;

				case 'link' : 
					$homeland_website = sanitize_text_field( get_post_meta( $post->ID, 'homeland_website', true ));
					echo "<a href=". $homeland_website ." target='_blank'>$homeland_website</a>";
	   		break;

				case 'thumbnail' : 
	   			echo the_post_thumbnail( array(80,80) );
	   		break;

	   		default :
				break;
			}
		}
	endif;
	add_action( 'manage_homeland_portfolio_posts_custom_column', 'homeland_manage_portfolio_columns', 10, 2 );


	/*----------------------------
	Save and Update
	----------------------------*/
	
	if ( ! function_exists( 'homeland_custom_posts_portfolio' ) ) :		
		function homeland_custom_posts_portfolio(){
			add_meta_box(
				"homeland_portfolio_meta", 
				__( 'Portfolio Options', 'homeland' ), 
				"homeland_portfolio_meta", 
				"homeland_portfolio", 
				"normal", 
				"low"
			);
		}	
	endif;
	add_action( 'add_meta_boxes', 'homeland_custom_posts_portfolio' );
	

	if ( ! function_exists( 'homeland_custom_posts_save_portfolio' ) ) :		
		function homeland_custom_posts_save_portfolio( $post_id ){
			
			if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || (defined('DOING_AJAX') && DOING_AJAX)) return;
			if ( 'page' == isset($_POST['post_type']) ) { if ( !current_user_can( 'edit_page', $post_id ) ) return;
			} else { if ( !current_user_can( 'edit_post', $post_id ) ) return; }

			$homeland_fields = array( 'homeland_advance_search', 'homeland_hdimage', 'homeland_bgimage', 'homeland_website', 'homeland_rev_slider' );

			foreach ($homeland_fields as $homeland_value) {
	         if( isset($homeland_value) ) :

	            $homeland_new = false;
	            $homeland_old = get_post_meta( $post_id, $homeland_value, true );

	            if ( isset( $_POST[$homeland_value] ) ) :
	               $homeland_new = $_POST[$homeland_value];
	           	endif;

	            if ( isset( $homeland_new ) && '' == $homeland_new && $homeland_old ) :
	               delete_post_meta( $post_id, $homeland_value, $homeland_old );
	            elseif ( false === $homeland_new || !isset( $homeland_new ) ) :
	            	delete_post_meta( $post_id, $homeland_value, $homeland_old );
	            elseif ( isset( $homeland_new ) && $homeland_new != $homeland_old ) :
	            	update_post_meta( $post_id, $homeland_value, $homeland_new );
	           	elseif ( ! isset( $homeland_old ) && isset( $homeland_new ) ) :
	               add_post_meta( $post_id, $homeland_value, $homeland_new );
	            endif;

	         endif;
	      }
		}	
	endif;
	add_action('save_post', 'homeland_custom_posts_save_portfolio');
?>