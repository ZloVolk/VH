<?php
/**
 * @package   	      WP E-Signature Upload Logo And Branding
 * @contributors	  Kevin Michael Gray (Approve Me), Abu Shoaib (Approve Me) <abushoaib73@gmail.com>
 * @wordpress-plugin
 * Plugin Name:       WP E-Signature - Upload Logo And Branding
 * URI:        http://approveme.me/wp-digital-e-signature
 * Description:       This add-on gives you the ability to customize the email branding, upload your logo to documents (and emails), create a cover page, customize the success page and more.
 * mini-description upload your logo and branding
 * Version:           1.4.4
 * Author:            Approve Me
 * Author URI:        http://approveme.me/
 * Text Domain:       esig-ulab
 * Domain Path:       /languages
 * Documentation:     http://aprv.me/1Pp8593
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

	$esign_addons->esign_update_check('6169','1.4.4');

}   


/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( dirname( __FILE__ ) . '/includes/esig-logo-branding.php' );


/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */

register_activation_hook( __FILE__, array( 'ESIG_LOGO_BRANDING', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'ESIG_LOGO_BRANDING', 'deactivate' ) );


//if (is_admin()) {

require_once( dirname( __FILE__ ) . '/admin/esig-logo-branding-admin.php' );
add_action( 'wp_esignature_loaded', array( 'ESIG_LOGO_BRANDING_Admin', 'get_instance' ) );

//require_once( plugin_dir_path( __FILE__ ) . 'admin/esig-customize-signing-page.php' );

//}

/**
 * Load plugin textdomain.
 *
 * @since 1.1.3
 */
if(!function_exists('esig_ulab_load_textdomain')){ 
function esig_ulab_load_textdomain() {
    
  load_plugin_textdomain('esig-ulab', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' ); 
}
add_action( 'wp_esignature_loaded', 'esig_ulab_load_textdomain');
}

 function esig_addon_setting_page_esig_upload_logo_and_branding($settings_page){
    
            $settings_page = '<div class="esig-add-on-settings"><a href="admin.php?page=esign-mails-general"></a></div>';
           
            return $settings_page ; 
        }
