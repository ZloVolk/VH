<?php
/*
	Template Name: Login
*/

	$homeland_site_layout = esc_attr( get_option('homeland_site_layout') );
	$homeland_favicon = esc_attr( get_option('homeland_favicon') );
	$homeland_logo = esc_attr( get_option('homeland_logo') );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php if(empty($homeland_site_layout)) : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php endif; ?>
	<link rel="shortcut icon" href="<?php echo $homeland_favicon; ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body class="login-page">

	<!-- Login Form -->
	<section class="coming-soon login">
		<div class="inside clear">
			<h1>
				<a href="<?php echo esc_url( home_url() ); ?>">
					<?php if(empty( $homeland_logo )) : ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php esc_attr( bloginfo('name') ); ?>" title="<?php esc_attr( bloginfo('name') ); ?>" />
					<?php else : ?>
						<img src="<?php echo $homeland_logo; ?>" alt="<?php esc_attr( bloginfo('name') ); ?>" title="<?php esc_attr( bloginfo('name') ); ?>" />
					<?php endif; ?>
				</a>
			</h1>
			<?php
				$homeland_ptitle = esc_attr( get_post_meta( @$post->ID, "homeland_ptitle", true ) );
				$homeland_subtitle = esc_attr( get_post_meta( @$post->ID, "homeland_subtitle", true ) );

				if ( ! is_user_logged_in() ) :
					if(!empty($homeland_ptitle)) : echo '<h2><span>' . $homeland_ptitle . '</span></h2>';
					else : the_title('<h2><span>', '</span></h2>'); endif; 

					if(!empty($homeland_subtitle)) : echo '<h3>' . stripslashes ( $homeland_subtitle ) . '</h3>';
					else : ?>
						<h3><?php _e( 'Already a member? Please login here', 'homeland' ); ?></h3><?php
					endif;

					$args = array(
						'echo'           => true,
						'remember'       => true,
						'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
						'form_id' 		  => 'homeland-loginform',
						'id_username'    => 'user_login',
						'id_password'    => 'user_pass',
						'id_remember'    => 'rememberme',
						'id_submit'      => 'wp-submit',
						'label_username' => __( 'Username', 'homeland' ),
						'label_password' => __( 'Password', 'homeland' ),
						'label_remember' => __( 'Remember Me', 'homeland' ),
						'label_log_in'   => __( 'Log In', 'homeland' ),
						'value_username' => '',
						'value_remember' => false
					);

					wp_login_form( $args );

					?>
						<div class="login-links">
							<a href="<?php echo wp_registration_url(); ?>"><?php _e( 'Register', 'homeland' ); ?></a> | <a href="<?php echo wp_lostpassword_url(); ?>" title="Lost Password"><?php _e( 'Lost your Password?', 'homeland' ); ?></a>
						</div>
					<?php
				else :
					$homeland_current_user = wp_get_current_user();
					?>
						<h2>
							<span>
								<?php 
									_e( 'Howdy', 'homeland' );
									echo ",&nbsp;" . $homeland_current_user->user_firstname; 
								?>
							</span>
						</h2>
						<div class="login-actions">
							<a href="<?php echo get_edit_user_link(); ?>" target="_blank"><?php _e('View Profile', 'homeland'); ?></a>
							<a href="<?php echo get_author_posts_url( $homeland_current_user->ID ); ?>" target="_blank"><?php _e('View Properties', 'homeland'); ?></a>
							<a href="<?php echo wp_logout_url( home_url() ); ?>"><?php _e('Logout', 'homeland'); ?></a>
						</div>
					<?php
				endif;
			?>
		</div>
	</section>

<?php wp_footer(); ?>

</body>
</html>