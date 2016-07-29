<?php
/**
 * @package   	      WP E-Signature - Auto Add My Signature
 * @contributors      Kevin Michael Gray (Approve Me), Abu Shoaib (Approve Me)
 * @wordpress-plugin
 * Plugin Name:       WP E-Signature - Auto Add My Signature
 * URI:        http://approveme.me/wp-digital-e-signature
 * Description:       This add-on makes it possible to automatically add your saved legal signature to any document you create with a simple tick of a button.
 * mini-description auto attach your signature to a document
 * Version:           1.4.4
 * Author:            Approve Me
 * Author URI:        http://approveme.me/
 * Text Domain:       esig-aasm
 * Domain Path:       /languages
 * Documentation:     http://aprv.me/1XSqWlx
 * License/Terms & Conditions: http://www.approveme.me/terms-conditions/
 * Privacy Policy: http://www.approveme.me/privacy-policy/
 */

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

	
if(class_exists( 'WP_E_Addon' ))
{
	$esign_addons= new WP_E_Addon();
	$esign_addons->esign_update_check('4073','1.4.4');
}   

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( dirname( __FILE__ ) . '/includes/esig-aams.php' );


/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
 
register_activation_hook( __FILE__, array( 'ESIG_AAMS', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'ESIG_AAMS', 'deactivate' ) );


//if (is_admin()) {
     
	require_once( dirname( __FILE__ ) . '/admin/esig-aams-admin.php' );
	add_action( 'wp_esignature_loaded', array( 'ESIG_AAMS_Admin', 'get_instance' ) );

//}

/**
 * Load plugin textdomain.
 *
 * @since 1.1.3
 */
if(!function_exists('esig_aasm_load_textdomain')){         
function esig_aasm_load_textdomain() {
    
  load_plugin_textdomain('esig-aasm', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' ); 
}
add_action( 'wp_esignature_loaded', 'esig_aasm_load_textdomain');
}

