<?php
/**
 * @package   	      WP E-Signature Save As PDF
 * @contributors	  Kevin Michael Gray (Approve Me), Abu Shoaib (Approve Me)
 * @wordpress-plugin
 * Plugin Name:       WP E-Signature - Save As PDF
 * URI:        http://approveme.me/wp-digital-e-signature
 * Description:       This add-on gives you the ability to add a "Save Document" button to your signed documents which generates a downloadable PDF of your document.
 * mini-description save documents as a PDF
 * Version:           1.4.4
 * Author:            Approve Me
 * Author URI:        http://approveme.me/
 * Documentation:     http://aprv.me/24Mh4rM
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}



define('ESIG_MPDF_PATH', dirname(__FILE__) . '/mpdf');

define('ESIG_PDF_INCLUDE_PATH', dirname(__FILE__) . '/includes');

define('ESIG_PDF_ASSET_PATH', dirname(__FILE__) . '/admin/assets/');


//if (is_admin()) {

require_once( dirname(__FILE__) . '/admin/esig-pdf-admin.php' );
add_action('wp_esignature_loaded', array('ESIG_PDF_Admin', 'get_instance'));

//}


