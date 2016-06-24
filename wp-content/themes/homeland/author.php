<?php 
	get_header(); 
	homeland_advance_search(); 

	$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name): get_userdata(intval($author));
	$homeland_agent_name = $curauth->display_name;
	$homeland_agent_desc = $curauth->user_description;
	$homeland_agent_telno = $curauth->homeland_telno;
	$homeland_agent_mobile = $curauth->homeland_mobile;
	$homeland_agent_fax = $curauth->homeland_fax;
	$homeland_agent_facebook = $curauth->homeland_facebook;
	$homeland_agent_gplus = $curauth->homeland_gplus;
	$homeland_agent_linkedin = $curauth->homeland_linkedin;
	$homeland_agent_twitter = $curauth->homeland_twitter;
	$homeland_agent_email = $curauth->user_email;
	$homeland_custom_avatar = get_the_author_meta('homeland_custom_avatar', $curauth->ID);

	$homeland_agent_list_header = esc_attr( get_option('homeland_agent_list_header') );
	$homeland_agent_profile_layout = esc_attr( get_option('homeland_agent_profile_layout') );
	$homeland_album_order = esc_attr( get_option('homeland_album_order') );
	$homeland_album_orderby = esc_attr( get_option('homeland_album_orderby') );
	$homeland_num_properties = esc_attr( get_option('homeland_num_properties') );
	$homeland_page_nav = esc_attr( get_option('homeland_pnav') );

	$homeland_agent_list_header_label = !empty( $homeland_agent_list_header ) ? $homeland_agent_list_header : __( 'Listed Properties', 'homeland' );

	if($homeland_agent_profile_layout == "Fullwidth") :
		$homeland_agent_profile_class = "theme-fullwidth list-fullwidth";
		$homeland_agent_list_class = "property-three-cols";
		$homeland_agent_masonry_class = "grid cs-style-3 masonry";
	elseif($homeland_agent_profile_layout == "Left Sidebar") :
		$homeland_agent_profile_class = "left-container right";
		$homeland_agent_list_class = "agent-properties";
		$homeland_agent_sidebar_class = "sidebar left";
		$homeland_agent_masonry_class = "grid cs-style-3";
	else :
		$homeland_agent_profile_class = "left-container";
		$homeland_agent_list_class = "agent-properties";
		$homeland_agent_sidebar_class = "sidebar";
		$homeland_agent_masonry_class = "grid cs-style-3";
	endif;
?>

	<!-- Agent Profile -->
	<section class="theme-pages">
		<div class="inside clear">

			<!-- Left Container -->	
			<div class="<?php echo $homeland_agent_profile_class; ?>">
				<div class="agent-container">
					<div class="agent-list clear">

			    		<!-- Agent Image and Social Icons -->
			    		<div class="agent-image">
			    			<?php if(!empty($homeland_custom_avatar)) : ?>
	    						<img src="<?php echo $homeland_custom_avatar; ?>">
	    					<?php	else : 
	    						echo get_avatar( $curauth->ID, 230 );
	    						endif;
	    					?>
			    			<div class="agent-social">
			    				<ul class="clear">
			    					<?php
			    						if(!empty($homeland_agent_facebook)) : 
			    							echo '<li><a href="'. $homeland_agent_facebook .'" target="_blank">
			    									<i class="fa fa-facebook fa-lg"></i></a></li>';
			    						endif;
			    						if(!empty($homeland_agent_gplus)) : 
			    							echo '<li><a href="'. $homeland_agent_gplus .'" target="_blank">
			    									<i class="fa fa-google-plus fa-lg"></i></a></li>';
			    						endif;
			    						if(!empty($homeland_agent_linkedin)) : 
			    							echo '<li><a href="'. $homeland_agent_linkedin .'" target="_blank">
			    									<i class="fa fa-linkedin fa-lg"></i></a></li>';
			    						endif;
			    						if(!empty($homeland_agent_twitter)) : 
			    							echo '<li><a href="'. $homeland_agent_twitter .'" target="_blank">
			    									<i class="fa fa-twitter fa-lg"></i></a></li>';
			    						endif;
			    						if(!empty($homeland_agent_email)) : 
			    							echo '<li class="last">
			    									<a href="mailto:'. $homeland_agent_email .'" target="_blank">
			    									<i class="fa fa-envelope-o fa-lg"></i></a></li>';
			    						endif; 
			    					?>
			    				</ul>
			    			</div>
			    		</div>

			    		<!-- Agent Descriptions -->
			    		<div class="agent-desc">
			    			<h4><?php echo $homeland_agent_name; ?></h4>
			    			<?php echo do_shortcode( wpautop( $homeland_agent_desc ) ); ?>
			    			<label class="more-info">
			    				<?php 
			    					if(!empty($homeland_agent_telno)) : ?>
			    						<span><i class="fa fa-phone"></i><strong><?php _e( 'Tel no', 'homeland' ); echo ":"; ?></strong> <?php echo $homeland_agent_telno; ?></span><?php
			    					endif;
			    					if(!empty($homeland_agent_mobile)) : ?>
			    						<span><i class="fa fa-mobile"></i><strong><?php _e( 'Mobile', 'homeland' ); echo ":"; ?></strong> <?php echo $homeland_agent_mobile; ?></span><?php
			    					endif;
			    					if(!empty($homeland_agent_fax)) : ?>
			    						<span><i class="fa fa-print"></i><strong><?php _e( 'Fax', 'homeland' ); echo ":"; ?></strong> <?php echo $homeland_agent_fax; ?></span><?php
			    					endif;
 			    				?>
			    			</label>
			    		</div>
			    	</div>

			    	<div class="<?php echo $homeland_agent_list_class; ?>">
              <?php
								global $wpdb;
								$homeland_post_author = $curauth->ID;
								$homeland_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts WHERE post_author = $homeland_post_author AND post_type IN ('homeland_properties') and post_status = 'publish'" );
              ?>
              <h3>
              	<?php echo intval($homeland_count) . "&nbsp;"; echo $homeland_agent_list_header_label; ?>
              </h3>

              <?php 
								$args = array( 
									'post_type' => 'homeland_properties', 
									'author' => $curauth->ID, 
									'orderby' => $homeland_album_orderby, 
									'order' => $homeland_album_order, 
									'posts_per_page' => $homeland_num_properties,
									'paged' => $paged 
								);
								$wp_query = new WP_Query( $args );  

                if ( $wp_query->have_posts() ) : ?>
                  <div class="<?php echo $homeland_agent_masonry_class; ?>">
                    <ul class="clear">
                      <?php
                      	if($homeland_agent_profile_layout == "Fullwidth") :
                      		for($homeland_i = 1; $wp_query->have_posts(); $homeland_i++) {
														$wp_query->the_post();			
														$homeland_columns = 3;	
														$homeland_class = 'property-cols masonry-item ';
														$homeland_class .= ($homeland_i % $homeland_columns == 0) ? 'last' : '';
														get_template_part( 'loop', 'property-3cols' );
													}
                      	else :
                         	while ( $wp_query->have_posts() ) : 
                          	$wp_query->the_post(); 
                         		get_template_part( 'loop', 'properties' );
                         	endwhile; 
                        endif;
                      ?>
                    </ul>
                  </div><?php
                endif;
              ?>    
			    	</div>

			    	<?php 
			    		if($homeland_page_nav == "Next Previous Link") : 
								homeland_next_previous(); // modify in functions.php
							else : homeland_pagination(); // modify in functions.php 
							endif; 
			    	?>
				</div>
			</div>

			<!-- Sidebar -->
			<?php if($homeland_agent_profile_layout != "Fullwidth") : ?>
				<div class="<?php echo $homeland_agent_sidebar_class; ?>"><?php get_sidebar(); ?></div>
			<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>