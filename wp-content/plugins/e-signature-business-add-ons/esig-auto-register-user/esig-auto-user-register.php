<?php

/**
 * @package   	      Wordpress User Registration after Signing Add-On
 * @contributors      Kevin Michael Gray (Approve Me), Abu Shoaib (Approve Me), Arafat Rahman (Approve Me)
 *
 * @wordpress-plugin
 * Plugin Name:       Wordpress User Registration after Signing Add-On
 * URI:        http://approveme.me/wp-digital-e-signature
 * Description:       Automatically creates a WP user account when a document is signed, based on the signer's email address.
 * mini-description  register a signer as a WordPress user after they sign your document
 * Version:           1.4.4.1
 * Author:            Approve Me
 * Author URI:        http://approveme.me/
 * Documentation:     http://aprv.me/1YnDjVe
 * License/Terms & Conditions: http://www.approveme.me/terms-conditions/
 * Privacy Policy: http://www.approveme.me/privacy-policy/
 * Text Domain:       esig-aur
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}


if (class_exists('WP_E_Addon')) {
    $esign_addons = new WP_E_Addon();
    $esign_addons->esign_update_check('23715', '1.4.4.1');
}


/* ----------------------------------------------------------------------------*
 * Public-Facing Functionality
 * ---------------------------------------------------------------------------- */

require_once( plugin_dir_path(__FILE__) . 'includes/esig-auto-user-register.php' );


/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */

register_activation_hook(__FILE__, array('ESIG_AUTO_REGISTER', 'activate'));
// setting reminder schedule event . 

register_deactivation_hook(__FILE__, array('ESIG_AUTO_REGISTER', 'deactivate'));



//if (is_admin()) {
require_once( dirname(__FILE__) . '/includes/esig-register-settings.php' );
require_once( dirname(__FILE__) . '/admin/esig-auto-user-register-admin.php' );
add_action('wp_esignature_loaded', array('ESIG_AUTO_REGISTER_Admin', 'get_instance'));

//}

/**
 * Load plugin textdomain.
 *
 * @since 1.1.3
 */
if(!function_exists('esig_auto_register_load_textdomain')){  
function esig_auto_register_load_textdomain() {

    load_plugin_textdomain('esig-aur', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}

add_action('wp_esignature_loaded', 'esig_auto_register_load_textdomain');
}

if(!function_exists('esig_addon_setting_page_esig_auto_register_user')){  
function esig_addon_setting_page_esig_auto_register_user($settings_page) {

    $settings_page = '<div class="esig-add-on-settings"><a href="admin.php?page=esign-mails-general"></a></div>';

    return $settings_page;
}
}

?>
