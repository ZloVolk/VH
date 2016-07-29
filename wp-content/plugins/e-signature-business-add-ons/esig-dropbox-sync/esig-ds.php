<?php
/**
 * @package   	      WP E-Signature - Dropbox Sync
 * @contributors      Kevin Michael Gray (Approve Me), Abu Shoaib (Approve Me)
 * @wordpress-plugin
 * Plugin Name:       WP E-Signature - Dropbox Sync
 * URI:        http://approveme.me/wp-digital-e-signature
 * Description:       This powerful add-on generates in real-time a PDF of your signed document and automatically (some might say magically) syncs the signed document with your Dropbox account.
 * mini-description sync PDF's of your signed documents in your Dropbox account
 * Version:           1.4.4.2
 * Author:            Approve Me
 * Author URI:        http://approveme.me/
 * Text Domain:       esig-ds
 * Domain Path:       /languages
 * Documentation:     http://aprv.me/1tmwxTB
 * License/Terms & Conditions: http://www.approveme.me/terms-conditions/
 * Privacy Policy: http://www.approveme.me/privacy-policy/
 */

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if (!defined('ESIG_DROPBOX_LABEL')) define('ESIG_DROPBOX_LABEL', 'ESIG_Dropbox');
if (!defined('ESIG_DROPBOX_SYNC_VERSION')) define('ESIG_DROPBOX_SYNC_VERSION', '1.0.0');
if (!defined('ESIG_DROPBOX_SYNC_DATABASE_VERSION')) define('ESIG_DROPBOX_SYNC_DATABASE_VERSION', '1.0.0');


if(class_exists( 'WP_E_Addon' ))
{
	$esign_addons= new WP_E_Addon();
	$esign_addons->esign_update_check('69','1.4.4.2');
}   

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( dirname( __FILE__ ) . '/includes/esig-ds.php' );


/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
 
register_activation_hook( __FILE__, array( 'ESIG_DS', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'ESIG_DS', 'deactivate' ) );


//if (is_admin()) {
        require_once( dirname( __FILE__ ) . '/includes/esig-dropbox-settings.php' );
	require_once( dirname( __FILE__ ) . '/admin/esig-ds-admin.php' );
	add_action( 'wp_esignature_loaded', array( 'ESIG_DS_Admin', 'get_instance' ) );

//}

if (function_exists('spl_autoload_register')) {
	spl_autoload_register('esig_dropbox_sync_autoload');
} else {
	require_once 'dropbox/Dropbox/API.php';
	require_once 'dropbox/Dropbox/OAuth/Consumer/ConsumerAbstract.php';
	require_once 'dropbox/Dropbox/OAuth/Consumer/Curl.php';
	require_once 'includes/DropboxFacade.php';
	require_once 'includes/Config.php';
	require_once 'includes/Factory.php';
}

/*
	*  loading class autoload 
	*   since 1.0.0
	*/
function esig_dropbox_sync_autoload($className)
{
	$fileName = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
	if (preg_match('/^ESIGDS/', $fileName)) {
		$fileName = 'includes' . str_replace('ESIGDS', '', $fileName);
	} elseif (preg_match('/^Dropbox/', $fileName)) {
		$fileName = 'Dropbox' . DIRECTORY_SEPARATOR . $fileName;
	} else {
		return false;
	}

	$path = dirname(__FILE__) . DIRECTORY_SEPARATOR . $fileName;

	if (file_exists($path)) {
		require_once $path;
	}
}

function esigds_get_custom_menu_page()
{
	return admin_url('admin.php?page=esign-misc-general');
}

/**
 * Load plugin textdomain.
 *
 * @since 1.1.3
 */
if(!function_exists('esig_ds_load_textdomain')){  
function esig_ds_load_textdomain() {
    
  load_plugin_textdomain('esig-ds', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' ); 
}
add_action( 'wp_esignature_loaded', 'esig_ds_load_textdomain');
}


function esig_addon_setting_page_esig_dropbox_sync($settings_page) {

    $settings_page = '<div class="esig-add-on-settings"><a href="admin.php?page=esign-misc-general"></a></div>';

    return $settings_page;
}
