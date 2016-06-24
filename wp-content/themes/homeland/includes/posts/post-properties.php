<?php
	/*---------------------------
	Custom Post Type: Properties
	---------------------------*/		

	if ( ! function_exists( 'homeland_properties_post_type' ) ) :
		function homeland_properties_post_type() { 
			register_post_type( 'homeland_properties',
				array(
					'labels' => array(
						'name' => __( 'Properties', 'homeland' ),
						'singular_name' => __( 'Properties', 'homeland' ),
						'add_new' => __( 'Add New', 'homeland' ),
						'add_new_item' => __( 'Add New Property', 'homeland' ),
						'edit_item' => __( 'Edit Property', 'homeland' ),
						'search_items' => __( 'Search Property', 'homeland' ),
						'not_found' => __( 'No property found.', 'homeland' ),
						'not_found_in_trash' => __( 'No property found in Trash.', 'homeland' ),
					),
					'public' => true,
					'has_archive' => true,	
					'publicly_queryable' => true,
					'show_ui' => true, 
			    'show_in_menu' => true, 
			   	'query_var' => true,	
				  'rewrite' => array( 
				  	'slug' => __('property-item', 'homeland'), 
				  	'with_front' => true
				  ),
				  'supports' => array('title', 'editor', 'author', 'comments', 'thumbnail', 'page-attributes', 'custom-fields', 'excerpt'),
					'menu_icon' => 'dashicons-screenoptions'
				)
			);
		}
	endif;
	add_action( 'init', 'homeland_properties_post_type' );

	
	/*----------------------------
	MetaBoxes
	----------------------------*/

	if ( ! function_exists( 'homeland_properties_meta' ) ) :
		function homeland_properties_meta() {
			global $post;

			$homeland_advance_search = sanitize_text_field( get_post_meta($post->ID, 'homeland_advance_search', true ) );
			$homeland_featured = sanitize_text_field( get_post_meta($post->ID, 'homeland_featured', true) );
			$homeland_property_sold = sanitize_text_field( get_post_meta($post->ID, 'homeland_property_sold', true) );
			$homeland_hdimage = sanitize_text_field( get_post_meta($post->ID, 'homeland_hdimage', true) );
			$homeland_bgimage = sanitize_text_field( get_post_meta($post->ID, 'homeland_bgimage', true) );
			$homeland_thumbnails = sanitize_text_field(get_post_meta($post->ID, 'homeland_thumbnails', true));
			$homeland_property_currency = sanitize_text_field( get_post_meta($post->ID, 'homeland_property_currency', true ) );
			$homeland_price = sanitize_text_field( get_post_meta($post->ID, 'homeland_price', true ) );
			$homeland_price_per = sanitize_text_field( get_post_meta($post->ID, 'homeland_price_per', true ) );
			$homeland_property_id = sanitize_text_field(get_post_meta($post->ID, 'homeland_property_id', true));
			$homeland_zip = sanitize_text_field( get_post_meta($post->ID, 'homeland_zip', true ) );
			$homeland_address = sanitize_text_field( get_post_meta($post->ID, 'homeland_address', true ) );
			$homeland_area = sanitize_text_field( get_post_meta($post->ID, 'homeland_area', true ) );
			$homeland_area_unit = sanitize_text_field( get_post_meta($post->ID, 'homeland_area_unit', true ) );
			$homeland_floor_area = sanitize_text_field( get_post_meta($post->ID, 'homeland_floor_area', true ) );
			$homeland_floor_area_unit = sanitize_text_field( get_post_meta($post->ID, 'homeland_floor_area_unit', true ) );
			$homeland_garage = sanitize_text_field( get_post_meta($post->ID, 'homeland_garage', true ) );
			$homeland_room = sanitize_text_field( get_post_meta($post->ID, 'homeland_room', true ) );
			$homeland_bedroom = sanitize_text_field( get_post_meta($post->ID, 'homeland_bedroom', true ) );
			$homeland_bathroom = sanitize_text_field( get_post_meta($post->ID, 'homeland_bathroom', true ) );
			$homeland_year_built = sanitize_text_field( get_post_meta($post->ID, 'homeland_year_built', true ) );
			$homeland_stories = sanitize_text_field( get_post_meta($post->ID, 'homeland_stories', true ) );
			$homeland_basement = sanitize_text_field( get_post_meta($post->ID, 'homeland_basement', true ) );
			$homeland_structure_type = sanitize_text_field( get_post_meta($post->ID, 'homeland_structure_type', true ) );
			$homeland_roofing = sanitize_text_field( get_post_meta($post->ID, 'homeland_roofing', true ) );
			$homeland_rev_slider = sanitize_text_field( get_post_meta($post->ID, 'homeland_rev_slider', true ) );
			$homeland_property_hide_map = sanitize_text_field( get_post_meta($post->ID, 'homeland_property_hide_map', true) );
			$homeland_property_lat = sanitize_text_field(get_post_meta($post->ID, 'homeland_property_lat', true));
			$homeland_property_lng = sanitize_text_field(get_post_meta($post->ID, 'homeland_property_lng', true));
			$homeland_property_map_zoom = sanitize_text_field( get_post_meta($post->ID, 'homeland_property_map_zoom', true) );
			
			if(empty($homeland_property_map_zoom)) :
				$homeland_property_map_zoom = 1;
			endif;

			?>

				<script type="text/javascript">
					function deleteSpecialChar(homeland_price) {
	        	if (homeland_price.value != '' && homeland_price.value.match(/_^[\w ]+$/) == null) {
	            homeland_price.value = homeland_price.value.replace(/[\W]/g, '');
	        	}
		    	}

		    	(function($) {
  					"use strict";
			    	$(function() {
							$( "#slider-range-max" ).slider({
						      range: "max",
						      min: 1,
						      max: 20,
						      value: <?php echo $homeland_property_map_zoom; ?>,
						      slide: function( event, ui ) {
						        $( "#homeland_property_map_zoom" ).val( ui.value );
						      }
						   });
						   $( "#homeland_property_map_zoom" ).val( $( "#slider-range-max" ).slider( "value" ) 
						  );
						});
					})(jQuery);
				</script>

				<div class="mabuc-form-wrap">	

					<!-- Tabs -->
					<ul class="mabuc-tabs">
						<li class="mabuc-tab-link current" data-tab="tab-1">
							<i class="fa fa-home"></i><?php _e( 'Main Information', 'homeland' ); ?>
						</li>
						<li class="mabuc-tab-link" data-tab="tab-2">
							<i class="fa fa-image"></i><?php _e( 'Images', 'homeland' ); ?>
						</li>
						<li class="mabuc-tab-link" data-tab="tab-3">
							<i class="fa fa-sliders"></i><?php _e( 'Slider', 'homeland' ); ?>
						</li>
						<li class="mabuc-tab-link" data-tab="tab-4">
							<i class="fa fa-map-o"></i><?php _e( 'Google Map', 'homeland' ); ?>
						</li>
					</ul>

					<!-- Main Information -->
					<div id="tab-1" class="mabuc-tab-content current">
						<ul>
							<li>
								<label for="homeland_advance_search">
									<?php _e( 'Hide Search', 'homeland' ); ?>
								</label>
								<input name="homeland_advance_search" type="checkbox" id="homeland_advance_search" <?php if( $homeland_advance_search == true ) { ?>checked="checked"<?php } ?> /><br>
								<span class="desc"><?php _e( 'Tick the box to hide advance search in this post', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_featured"><?php _e( 'Featured', 'homeland' ); ?></label>
								<input name="homeland_featured" type="checkbox" id="homeland_featured" <?php if( $homeland_featured == true ) { ?>checked="checked"<?php } ?> />
								<span class="desc"><?php _e( 'Checking this box will display it in featured properties sections across the theme and also it will be included in your homepage slider.', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_property_sold">
									<?php _e( 'Sold', 'homeland' ); ?>
								</label>
								<input name="homeland_property_sold" type="checkbox" id="homeland_property_sold" <?php if( $homeland_property_sold == true ) { ?>checked="checked"<?php } ?> /><br>
								<span class="desc"><?php _e( 'Tick the box if this property is already sold', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_property_id">
									<?php _e( 'Property ID', 'homeland' ); ?>
								</label>
								<input name="homeland_property_id" type="text" id="homeland_property_id" value="<?php echo esc_attr( $homeland_property_id ); ?>" style="width:100px;" /> <span class="desc"><?php _e( 'Provide your property id here', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_price"><?php _e( 'Price', 'homeland' ); ?></label>
								<input name="homeland_property_currency" type="text" id="homeland_property_currency" value="<?php echo esc_attr( $homeland_property_currency ); ?>" style="width:40px;" placeholder="$" />
								<input name="homeland_price" type="text" id="homeland_price" value="<?php echo esc_attr( $homeland_price ); ?>" style="width:100px;" onkeyup="javascript:deleteSpecialChar(this)" />
								<input name="homeland_price_per" type="text" id="homeland_price_per" value="<?php echo esc_attr( $homeland_price_per ); ?>" style="width:100px;" placeholder="<?php _e( 'Per', 'homeland' ); ?>" />
								&nbsp;<span class="desc"><?php _e( 'Provide your property price here. Please add number digits only (Example: 100000)', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_area"><?php _e( 'Lot Area', 'homeland' ); ?></label>
								<input name="homeland_area" type="text" id="homeland_area" value="<?php echo esc_attr( $homeland_area ); ?>" style="width:100px;" />
								<input name="homeland_area_unit" type="text" id="homeland_area_unit" value="<?php echo esc_attr( $homeland_area_unit ); ?>" style="width:100px;" placeholder="<?php _e( 'Unit', 'homeland' ); ?>" /> <span class="desc"><?php _e( 'Provide property lot area and unit here', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_floor_area">
									<?php _e( 'Floor Area', 'homeland' ); ?>
								</label>
								<input name="homeland_floor_area" type="text" id="homeland_floor_area" value="<?php echo esc_attr( $homeland_floor_area ); ?>" style="width:100px;" />
								<input name="homeland_floor_area_unit" type="text" id="homeland_floor_area_unit" value="<?php echo esc_attr( $homeland_floor_area_unit ); ?>" style="width:100px;" placeholder="<?php _e( 'Unit', 'homeland' ); ?>" /> <span class="desc"><?php _e( 'Provide property floor area and unit here', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_year_built">
									<?php _e( 'Year Built', 'homeland' ); ?>
								</label>
								<input name="homeland_year_built" type="text" id="homeland_year_built" value="<?php echo esc_attr( $homeland_year_built ); ?>" maxlength="4" style="width:100px;" /> <span class="desc"><?php _e( 'Provide property year built. Please add number digits only (Example: 2015)', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_garage"><?php _e( 'Garage', 'homeland' ); ?></label>
								<input name="homeland_garage" type="text" id="homeland_garage" value="<?php echo esc_attr( $homeland_garage ); ?>" maxlength="2" style="width:100px;" /> <span class="desc"><?php _e( 'Provide property garage. Please add number digits only', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_room"><?php _e( 'Rooms', 'homeland' ); ?></label>
								<input name="homeland_room" type="text" id="homeland_room" value="<?php echo esc_attr( $homeland_room ); ?>" style="width:100px;" /> <span class="desc"><?php _e( 'Provide property room number. Please add number digits only', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_bedroom"><?php _e( 'Bedroom', 'homeland' ); ?></label>
								<input name="homeland_bedroom" type="text" id="homeland_bedroom" value="<?php echo esc_attr( $homeland_bedroom ); ?>" style="width:100px;" /> <span class="desc"><?php _e( 'Provide property bedroom. Please add number digits only', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_bathroom"><?php _e( 'Bathroom', 'homeland' ); ?></label>
								<input name="homeland_bathroom" type="text" id="homeland_bathroom" value="<?php echo esc_attr( $homeland_bathroom ); ?>" style="width:100px;" /> <span class="desc"><?php _e( 'Provide property bathroom. Please add number digits only', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_stories"><?php _e( 'Stories', 'homeland' ); ?></label>
								<input name="homeland_stories" type="text" id="homeland_stories" value="<?php echo esc_attr( $homeland_stories ); ?>" style="width:100px;" /> <span class="desc"><?php _e( 'Provide property number of stories. Please add number digits only', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_basement"><?php _e( 'Basement', 'homeland' ); ?></label>
								<input name="homeland_basement" type="text" id="homeland_basement" value="<?php echo esc_attr( $homeland_basement ); ?>" style="width:100px;" /> <span class="desc"><?php _e( 'Provide property basement. Please add number digits only', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_zip"><?php _e( 'Zip Code', 'homeland' ); ?></label>
								<input name="homeland_zip" type="text" id="homeland_zip" value="<?php echo esc_attr( $homeland_zip ); ?>" style="width:100px;" /> <span class="desc"><?php _e( 'Provide property zip code', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_structure_type">
									<?php _e( 'Structure Type', 'homeland' ); ?>
								</label>
								<input name="homeland_structure_type" type="text" id="homeland_structure_type" value="<?php echo esc_attr( $homeland_structure_type ); ?>" /> <span class="desc"><?php _e( 'Provide property structure type.', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_roofing"><?php _e( 'Roofing', 'homeland' ); ?></label>
								<input name="homeland_roofing" type="text" id="homeland_roofing" value="<?php echo esc_attr( $homeland_roofing ); ?>" /> <span class="desc"><?php _e( 'Provide property roofing.', 'homeland' ); ?></span>
							</li>	
							<li>
								<label for="homeland_address"><?php _e( 'Address', 'homeland' ); ?></label>
								<input name="homeland_address" type="text" id="homeland_address" value="<?php echo esc_attr( $homeland_address ); ?>" /><br>
								<span class="desc"><?php _e( 'Provide property address here (city/state/province/country)', 'homeland' ); ?></span>
							</li>
						</ul>
					</div>		

					<!-- Images -->
					<div id="tab-2" class="mabuc-tab-content">
						<ul>
							<li>
								<label for="homeland_hdimage">
									<?php _e( 'Header Image', 'homeland' ); ?>
								</label>
								<input name="homeland_hdimage" type="text" id="homeland_hdimage" value="<?php echo esc_attr( $homeland_hdimage ); ?>" /> <input id="upload_image_button_homeland_hdimage" type="button" value="<?php _e( 'Upload', 'homeland' ); ?>" class="button-secondary" /><br>
								<span class="desc">
									<?php 
										_e( 'Please upload header image. Otherwise default header image from theme options will be displayed', 'homeland' ); 
									?>
								</span>
							</li>
							<li>
								<label for="homeland_bgimage">
									<?php _e( 'Background Image', 'homeland' ); ?>
								</label>
								<input name="homeland_bgimage" type="text" id="homeland_bgimage" value="<?php echo esc_attr( $homeland_bgimage ); ?>" /> <input id="upload_image_button_homeland_bgimage" type="button" value="<?php _e( 'Upload', 'homeland' ); ?>" class="button-secondary" /><br>
								<span class="desc">
									<?php 
										_e( 'Please upload background image. Otherwise default background image from theme options will be displayed', 'homeland' ); 
									?>
								</span>
							</li>
						</ul>
					</div>

					<!-- Slider -->
					<div id="tab-3" class="mabuc-tab-content">
						<ul>
							<li>
								<label for="homeland_thumbnails">
									<?php _e( 'Slider Thumbnails', 'homeland' ); ?>
								</label>
								<input name="homeland_thumbnails" type="checkbox" id="homeland_thumbnails" <?php if( $homeland_thumbnails == true ) { ?>checked="checked"<?php } ?> />
								<span class="desc"><?php _e( 'Checking this box will hide all thumbnails in property slider', 'homeland' ); ?></span>
							</li>
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
										<span class="desc"><?php _e( 'Select your slider if you want to use revolution slider in property single page', 'homeland' ); ?></span>
										</td>
									</tr><?php
								endif;
							?>	
						</ul>
					</div>

					<!-- Google Map -->
					<div id="tab-4" class="mabuc-tab-content">
						<span class="content-desc">
							<?php 
								$url = "http://latlong.net";
								printf( __( 'Get google map latitude and longitude value <a href="%s" target="_blank">here</a>', 'homeland' ), $url );
							?>
						</span>
						<ul>
							<li>
								<label for="homeland_property_hide_map">
									<?php _e( 'Hide', 'homeland' ); ?>
								</label>
								<input name="homeland_property_hide_map" type="checkbox" id="homeland_property_hide_map" <?php if( $homeland_property_hide_map == true ) { ?>checked="checked"<?php } ?> /><br>
								<span class="desc"><?php _e( 'Check the box to hide map on properties', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_property_lat">
									<?php _e( 'Latitude', 'homeland' ); ?>
								</label>
								<input name="homeland_property_lat" type="text" id="homeland_property_lat" value="<?php echo esc_attr( $homeland_property_lat ); ?>" /><br>
								<span class="desc"><?php _e( 'Add your property latitude for google map', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_property_lng">
									<?php _e( 'Longitude', 'homeland' ); ?>
								</label>
								<input name="homeland_property_lng" type="text" id="homeland_property_lng" value="<?php echo esc_attr( $homeland_property_lng ); ?>" /><br>
								<span class="desc"><?php _e( 'Add your property longitude for google map', 'homeland' ); ?></span>
							</li>
							<li>
								<label for="homeland_property_map_zoom">
									<?php _e( 'Map Zoom', 'homeland' ); ?>
								</label>
								<div id="slider-range-max" class="slider-range"></div>
								<input type="text" id="homeland_property_map_zoom" name="homeland_property_map_zoom" readonly class="slide-amount" value="<?php echo $homeland_property_map_zoom; ?>">
								<span class="desc"><?php _e( 'Add your map zoom value (1-20) only', 'homeland' ); ?></span>
							</li>
						</ul>
					</div>

				</div>		
			<?php	
		}
	endif;

	
	/*----------------------------
	Taxonomies
	----------------------------*/

	if ( ! function_exists( 'homeland_properties_taxonomies' ) ) :
		function homeland_properties_taxonomies() {

			// Property Type
			$labels = array(
				'name' => __( 'Property Type', 'homeland' ),
				'singular_name' => __( 'Property Type', 'homeland' ),
				'search_items' => __( 'Search Property Type', 'homeland' ),
				'all_items' => __( 'All Property Type', 'homeland' ),
				'edit_item' => __( 'Edit Property Type', 'homeland' ),
				'update_item' => __( 'Update Property Type', 'homeland' ),
				'add_new_item' => __( 'Add New Property Type', 'homeland' ),
				'new_item_name' => __( 'New Property Type', 'homeland' ),
				'menu_name' => __( 'Type', 'homeland' ),
				'parent_item' => __( 'Parent Property Type', 'homeland' )
			);
			$args = array( 
				'hierarchical' => true,
				'labels' => $labels,
				'show_ui' => true,
				'show_admin_column' => true,
				'query_var' => true,
				'rewrite' => array( 'slug' => 'property-type' ),
			);
			register_taxonomy( 'homeland_property_type', 'homeland_properties', $args );


			// Property Status
			$labels = array(
				'name' => __( 'Property Status', 'homeland' ),
				'singular_name' => __( 'Property Status', 'homeland' ),
				'search_items' => __( 'Search Property Status', 'homeland' ),
				'all_items' => __( 'All Property Status', 'homeland' ),
				'edit_item' => __( 'Edit Property Status', 'homeland' ),
				'update_item' => __( 'Update Property Status', 'homeland' ),
				'add_new_item' => __( 'Add New Property Status', 'homeland' ),
				'new_item_name' => __( 'New Property Status', 'homeland' ),
				'menu_name' => __( 'Status', 'homeland' ),
				'parent_item' => __( 'Parent Property Status', 'homeland' )
			);
			$args = array( 
				'hierarchical'  => true,
				'labels' => $labels,
				'show_ui' => true,
				'show_admin_column' => true,
				'query_var' => true,
				'rewrite' => array( 'slug' => 'property-status' ),
			);
			register_taxonomy( 'homeland_property_status', 'homeland_properties', $args );


			// Property Location
			$labels = array(
				'name' => __( 'Property Location', 'homeland' ),
				'singular_name' => __( 'Property Location', 'homeland' ),
				'search_items' => __( 'Search Property Location', 'homeland' ),
				'all_items' => __( 'All Property Location', 'homeland' ),
				'edit_item' => __( 'Edit Property Location', 'homeland' ),
				'update_item' => __( 'Update Property Location', 'homeland' ),
				'add_new_item' => __( 'Add New Property Location', 'homeland' ),
				'new_item_name' => __( 'New Property Location', 'homeland' ),
				'menu_name' => __( 'Location', 'homeland' ),
				'parent_item' => __( 'Parent Property Location', 'homeland' )
			);
			$args = array( 
				'hierarchical' => true,
				'labels' => $labels,
				'show_ui' => true,
				'show_admin_column' => true,
				'query_var' => true,
				'rewrite' => array( 'slug' => 'property-location' ),
			);
			register_taxonomy( 'homeland_property_location', 'homeland_properties', $args );


			// Property Amenities
			$labels = array(
				'name' => __( 'Property Amenities', 'homeland' ),
				'singular_name' => __( 'Property Amenities', 'homeland' ),
				'search_items' => __( 'Search Property Amenities', 'homeland' ),
				'all_items' => __( 'All Property Amenities', 'homeland' ),
				'edit_item' => __( 'Edit Property Amenities', 'homeland' ),
				'update_item' => __( 'Update Property Amenities', 'homeland' ),
				'add_new_item' => __( 'Add New Property Amenities', 'homeland' ),
				'new_item_name' => __( 'New Property Amenities', 'homeland' ),
				'menu_name' => __( 'Amenities', 'homeland' ),
				'parent_item' => __( 'Parent Property Amenities', 'homeland' )
			);
			$args = array( 
				'hierarchical' => true,
				'labels' => $labels,
				'show_ui' => true,
				'show_admin_column' => true,
				'query_var' => true,
				'rewrite' => array( 'slug' => 'property-amenities' ),
			);
			register_taxonomy( 'homeland_property_amenities', 'homeland_properties', $args );
		}
	endif;
	add_action( 'init', 'homeland_properties_taxonomies', 1 );


	/*----------------------------
	Custom Columns
	----------------------------*/

	if ( ! function_exists( 'homeland_edit_properties_columns' ) ) :
		function homeland_edit_properties_columns( $columns ) {
			$columns = array(
				'cb' => '<input type="checkbox" />',
				'title' => __( 'Name', 'homeland' ),						
				'address' => __( 'Address', 'homeland' ),
				'property_id' => __( 'Property ID', 'homeland' ),						
				'type' => __( 'Type', 'homeland' ),
				'status' => __( 'Status', 'homeland' ),
				'thumbnail' => __( 'Thumbnail', 'homeland' ),
				'agent' => __( 'Agent', 'homeland' ),
				'price' => __( 'Price', 'homeland' ),
				'date' => __( 'Date', 'homeland' )
			);
			return $columns;
		}
	endif;
	add_filter( 'manage_edit-homeland_properties_columns', 'homeland_edit_properties_columns' );


	/*----------------------------
	Sortable Columns
	----------------------------*/

	if ( ! function_exists( 'homeland_properties_sortable_columns' ) ) :
		function homeland_properties_sortable_columns( $columns ) {
			$columns['price'] = 'homeland_price';
			$columns['address'] = 'homeland_address';
			return $columns;
		}
	endif;
	add_filter( 'manage_edit-homeland_properties_sortable_columns', 'homeland_properties_sortable_columns' );

	if ( ! function_exists( 'homeland_properties_load' ) ) :
		function homeland_properties_load() {
			add_filter( 'request', 'homeland_sort_properties' );
		}
	endif;
	add_action( 'load-edit.php', 'homeland_properties_load' );


	if ( ! function_exists( 'homeland_sort_properties' ) ) :
		function homeland_sort_properties( $vars ) {
			if ( isset( $vars['post_type'] ) && 'homeland_properties' == $vars['post_type'] ) :
				if ( isset( $vars['orderby'] ) && 'homeland_price' == $vars['orderby'] ) :
					$vars = array_merge(
						$vars,
						array(
							'meta_key' => 'homeland_price',
							'orderby' => 'meta_value_num'
						)
					);
				elseif ( isset( $vars['orderby'] ) && 'homeland_address' == $vars['orderby'] ) :
					$vars = array_merge(
						$vars,
						array(
							'meta_key' => 'homeland_address',
							'orderby' => 'meta_value'
						)
					);
				endif;
			endif;
			return $vars;
		}
	endif;


	/*----------------------------
	Custom Columns List
	----------------------------*/

	if ( ! function_exists( 'homeland_manage_properties_columns' ) ) :
		function homeland_manage_properties_columns( $column ) {
			global $post;

			switch($column) {
				case 'address' :
					$homeland_address = sanitize_text_field( get_post_meta( $post->ID, 'homeland_address', true ) );
	   			echo $homeland_address;
	   		break;

	   		case 'property_id' :
	   			$homeland_property_id = sanitize_text_field( get_post_meta( $post->ID, 'homeland_property_id', true ) );
	   			echo $homeland_property_id;
	   		break;

				case 'type' :
					$terms = get_the_terms( $post->ID, 'homeland_property_type' );
					if ( !empty( $terms ) ) {
						$out = array();
						foreach ( $terms as $term ) {
							$out[] = sprintf( '<a href="%s">%s</a>',
								esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'homeland_property_type' => $term->slug ), 'edit.php' ) ),
								esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'homeland_property_type', 'display' ) )
							);
						}
						echo join( ', ', $out );
					}		
					else { __( 'No Type', 'homeland' ); }
				break;

				case 'agent' : 
	   			the_author_meta( 'user_firstname' );
	   		break;

				case 'thumbnail' : 
	   			echo the_post_thumbnail( array(80,80) );
	   		break;

	   		case 'price' :
	   			$homeland_price = sanitize_text_field( get_post_meta( $post->ID, 'homeland_price', true ) );
	   			$homeland_price_per = sanitize_text_field(get_post_meta($post->ID, 'homeland_price_per', true));
	   			$homeland_currency = get_option('homeland_property_currency');

	   			if(!empty($homeland_price)) :
	   				echo $homeland_currency;
	   				echo number_format ($homeland_price); 
	      			if(!empty($homeland_price_per)) :
	      				echo "/" . $homeland_price_per;
	      			endif;
	   			endif;
	   		break;

	   		case 'status' :
	   			$terms = get_the_terms( $post->ID, 'homeland_property_status' );
	   			$homeland_property_sold = sanitize_text_field(get_post_meta($post->ID, 'homeland_property_sold', true));

	   			if(!empty($homeland_property_sold)) :
	   				_e( 'SOLD', 'homeland' );
	   			else :	
						if ( !empty( $terms ) ) :
							$out = array();
							foreach ( $terms as $term ) {
								$out[] = sprintf( '<a href="%s">%s</a>',
									esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'homeland_property_status' => $term->slug ), 'edit.php' ) ),
									esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'homeland_property_status', 'display' ) )
								);
							}
							echo join( ', ', $out );
						else : 
							__( 'No Status', 'homeland' );
						endif;
					endif;
	   		break;
				
				default :
				break;
			}
		}
	endif;
	add_action( 'manage_homeland_properties_posts_custom_column', 'homeland_manage_properties_columns', 10, 2 );


	/*----------------------------
	Save and Update
	----------------------------*/
	
	if ( ! function_exists( 'homeland_custom_posts_properties' ) ) :
		function homeland_custom_posts_properties(){
			add_meta_box(
				"homeland_properties_meta", 
				__( 'Property Options', 'homeland' ), 
				"homeland_properties_meta", 
				"homeland_properties", 
				"normal", 
				"low"
			);
		}	
	endif;
	add_action( 'add_meta_boxes', 'homeland_custom_posts_properties' );
	

	if ( ! function_exists( 'homeland_custom_posts_save_properties' ) ) :
		function homeland_custom_posts_save_properties( $post_id ){
			if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || (defined('DOING_AJAX') && DOING_AJAX)) return;
			if ( 'page' == isset($_POST['post_type']) ) { if ( !current_user_can( 'edit_page', $post_id ) ) return;
			} else { if ( !current_user_can( 'edit_post', $post_id ) ) return; }

			$homeland_fields = array(  'homeland_advance_search', 'homeland_featured', 'homeland_property_sold', 'homeland_property_id', 'homeland_hdimage', 'homeland_bgimage', 'homeland_thumbnails', 'homeland_property_currency', 'homeland_price', 'homeland_price_per', 'homeland_zip', 'homeland_address', 'homeland_area', 'homeland_area_unit', 'homeland_floor_area', 'homeland_floor_area_unit', 'homeland_garage', 'homeland_year_built', 'homeland_room', 'homeland_bedroom', 'homeland_bathroom', 'homeland_property_hide_map', 'homeland_property_lat', 'homeland_property_lng', 'homeland_property_map_zoom', 'homeland_rev_slider', 'homeland_stories', 'homeland_basement', 'homeland_structure_type', 'homeland_roofing' );

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
	add_action('save_post', 'homeland_custom_posts_save_properties');
?>