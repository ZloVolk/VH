<?php
/**
 * @package   	      WP E-Signature - Document Templates
 * @contributors      Kevin Michael Gray (Approve Me), Abu Shoaib (Approve Me)
 * @wordpress-plugin
 * Plugin Name:       WP E-Signature - Document Templates
 * Plugin URI:        http://approveme.me/wp-digital-e-signature
 * Description:       This powerful add-on makes it possible to create a new document based on a re-usable document template. Gone are the days of creating a new document every single time for a similar contract.
 * mini-description  create reusable templates
 * Version:           1.4.4
 * Author:            Approve Me
 * Author URI:        http://approveme.me/
 * Text Domain:       esig-at
 * Domain Path:       /languages
 * Documentation:     http://aprv.me/1OlEp1D
 * License/Terms & Conditions: http://www.approveme.me/terms-conditions/
 * Privacy Policy: http://www.approveme.me/privacy-policy/
 */

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Define global paths
define('ESIGN_TEMP_BASE_PATH', dirname(__FILE__));
define('ESIGN_TEMP_BASE_URL', plugins_url("/", __FILE__));


if(class_exists( 'WP_E_Addon' ))
{
	$esign_addons= new WP_E_Addon();
	$esign_addons->esign_update_check('3912','1.4.4');
}


/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( dirname( __FILE__ ) . '/includes/esig-at.php' );

require_once( dirname( __FILE__ ) . '/includes/esig-autoload.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
 
register_activation_hook( __FILE__, array( 'ESIG_AT', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'ESIG_AT', 'deactivate' ) );


//if (is_admin()) {
     
	require_once( dirname( __FILE__ ) . '/admin/esig-at-admin.php' );
	add_action( 'wp_esignature_loaded', array( 'ESIG_AT_Admin', 'get_instance' ) );

//}

/**
 * Load plugin textdomain.
 *
 * @since 1.1.3
 */
if(!function_exists('esig_templates_load_textdomain')){        
function esig_templates_load_textdomain() {
    
  load_plugin_textdomain('esig-at', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' ); 
}
add_action( 'wp_esignature_loaded', 'esig_templates_load_textdomain' );
}
