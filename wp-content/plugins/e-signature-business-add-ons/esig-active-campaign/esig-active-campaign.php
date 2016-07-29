<?php
/**
 * @package   	      WP E-Signature - ActiveCampaign
 * @contributors      Kevin Michael Gray (Approve Me), Abu Shoaib (Approve Me)
 * @wordpress-plugin
 * Plugin Name:       WP E-Signature - ActiveCampaign
 * Plugin URI:        http://www.approveme.me/wp-digital-e-signature
 * Description:       This add-on automatically subscribes (and tags) your signers to this powerful email marketing software which lets your create custom email sequences for your signers.
 * mini-description:  connect with your Active Campaign CRM
 * Version:           1.4.4
 * Author:            Approve Me
 * AuthorURI:        http://approveme.me/
 * TextDomain:       esig-active
 * DomainPath:       /languages
 * Documentation:   http://aprv.me/1NE59p3
 * License/TermsandConditions: http://www.approveme.me/terms-conditions/
 * PrivacyPolicy: http://www.approveme.me/privacy-policy/
 */

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


if(class_exists( 'WP_E_Addon' ))
{
	$esign_addons= new WP_E_Addon();
	$esign_addons->esign_update_check('3491','1.4.4');
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( dirname( __FILE__ ) . '/includes/esig-active-campaign.php' );


/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
 
register_activation_hook( __FILE__, array( 'ESIG_ACTIVE_CAMPAIGN', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'ESIG_ACTIVE_CAMPAIGN', 'deactivate' ) );


//if (is_admin()) {
     
	require_once( dirname( __FILE__ ) . '/admin/esig-active-campaign-admin.php' );
	add_action( 'wp_esignature_loaded', array( 'ESIG_ACTIVE_CAMPAIGN_Admin', 'get_instance' ) );

//}


/**
 * Load plugin textdomain.
 *
 * @since 1.1.3
 */
if(!function_exists('ActiveCampaign_load_textdomain')){
function ActiveCampaign_load_textdomain() {
    
  load_plugin_textdomain('esig-active', false, dirname(dirname( __FILE__ ) ) . '/languages/' ); 
}
add_action( 'wp_esignature_loaded', 'ActiveCampaign_load_textdomain' );
}

function esig_addon_setting_page_esig_active_campaign($settings_page) {

    $settings_page = '<div class="esig-add-on-settings"><a href="admin.php?page=esign-misc-general"></a></div>';

    return $settings_page;
}
