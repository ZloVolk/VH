<?php
/*
	Template Name: Coming Soon
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

<body class="coming-soon-page">

	<!-- Coming Soon Page -->
	<section class="coming-soon">
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
			<h2><span><?php _e( 'Our Site is Almost Ready', 'homeland' ); ?></span></h2>
			<h5>
				<?php 
					_e( 'Hello, It\'s nice to meet you. We\'ll be back soon once we\'re done building this site.', 'homeland' ); 
				?>
			</h5>
			<h3><?php _e( 'Time left until launching', 'homeland' ); ?></h3>
			<div id="defaultCountdown"></div>
			<?php homeland_social_share_header(); ?>
		</div>
	</section>

<?php wp_footer(); ?>

</body>
</html>