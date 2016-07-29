<?php
/**
 *
 * @package ESIG_AAMS_Admin
 * @author  Abu Shoaib <abushoaib73@gmail.com>
 */

if (! class_exists('ESIG_CUSTOM_MESSAGE_Admin')) :
class ESIG_CUSTOM_MESSAGE_Admin {

	/**
	 * Instance of this class.
	 * @since    1.0.1
	 * @var      object
	 */
	protected static $instance = null;

	/**
	 * Slug of the plugin screen.
	 * @since    1.0.1
	 * @var      string
	 */
	protected $plugin_screen_hook_suffix = null;

	/**
	 * Initialize the plugin by loading admin scripts & styles and adding a
	 * settings page and menu.
	 * @since     0.1
	 */
	private function __construct() {

		/*
		 * Call $plugin_slug from public plugin class.
		 */
		$plugin = ESIG_CUSTOM_MESSAGE::get_instance();
		$this->plugin_slug = $plugin->get_plugin_slug();
		// Load admin style sheet and JavaScript.
		add_action('admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
		// Add an action link pointing to the options page.
		$plugin_basename = plugin_basename( plugin_dir_path( __FILE__ ) . $this->plugin_slug . '.php' );
        
        add_filter('esig_admin_more_document_contents', array($this, 'document_add_data'), 10,1);
        
		// adding action 
        add_action('esig_document_after_save', array($this, 'custom_message_after_save'), 10, 1);
        add_action('esig_sad_document_invite_send', array($this, 'sad_document_after_save'), 10, 1);
        
        add_filter('esig-invite-custom-message', array($this, 'invite_custom_message'), 10,2);
        
          // permanently delete triger action. 
                add_action('esig_document_after_delete',array($this,"esig_delete_document_permanently"),10,1);
        
	}
        
        public function esig_delete_document_permanently($args)
        {
              if(!function_exists('WP_E_Sig'))
                        return ;
              
              $api = new WP_E_Api(); 
              
              // getting document id from argument
              $document_id = $args['document_id'] ; 
              
              // delete all settings 
             
              $api->setting->delete('esig_custom_message'.$document_id);
              $api->setting->delete('esig_custom_message_text'.$document_id);
              
        }
	
    
    public function invite_custom_message($args,$document_checksum)
    {
           if(!function_exists('WP_E_Sig'))
				return ;
				
		    
		    $api = WP_E_Sig();
            
            $doc_id = $api->document->document_id_by_csum($document_checksum);
            
            $esig_custom_message=$api->setting->get_generic('esig_custom_message'.$doc_id);
            
            if($esig_custom_message == 1)
            {
                $html = stripcslashes('<br>'.$api->setting->get_generic('esig_custom_message_text'.$doc_id).'<br><hr><br>');
                return $html;
            }
            
    }
	public function custom_message_after_save($args) {
    
            global $wpdb;
		
		    $doc_id= $args['document']->document_id;
		 
		    if(!function_exists('WP_E_Sig'))
				return ;
				
		    
		    $api = WP_E_Sig();
            
            if(isset($_POST['esig_custom_message']))
            {
                    $api->setting->set('esig_custom_message'.$doc_id,$_POST['esig_custom_message']);
                    $api->setting->set('esig_custom_message_text'.$doc_id,$_POST['esig_custom_message_text']);
            }
    }
    
    public function sad_document_after_save($args) {
    
        global $wpdb;
    
        $doc_id= $args['document']->document_id;
        $old_doc_id= $args['old_doc_id'];
        if(!function_exists('WP_E_Sig'))
            return ;
    
        
        $api = WP_E_Sig();
    
        $esig_custom_message=$api->setting->get_generic('esig_custom_message'.$old_doc_id);
        
        if(isset($esig_custom_message))
        {
            $esig_custom_text=$api->setting->get_generic('esig_custom_message_text'.$old_doc_id);
            $api->setting->set('esig_custom_message'.$doc_id,$esig_custom_message);
            $api->setting->set('esig_custom_message_text'.$doc_id,$esig_custom_text);
        }
    }
	/**
	 * Filter:
	 * Adds options to the document-add and document-edit screens
	 */		
	public function document_add_data($more_contents) {
        
        
		
		if(!function_exists('WP_E_Sig'))
				return ;
				
		
		$api = WP_E_Sig();
		
		global $wpdb;
		
		$selected = '';
		$checked='';
        $text='';
		$display_select='display:block;';
		$esig_type =isset($_GET['esig_type'])? $_GET['esig_type'] : null ; 
		// if document is not basic document return 
		$doc_id = isset($_GET['document_id'])? $_GET['document_id'] : null ; 
        
        if(($custom_message=$api->setting->get_generic('esig_custom_message'.$doc_id))==1)
        {
          $checked='checked';
          $text = $api->setting->get_generic('esig_custom_message_text'.$doc_id);
        }
        
		//$doc_type = $api->document->getDocumenttype($document_id) ; 
		 
	       $assets_url=ESIGN_ASSETS_DIR_URI ; 
		$more_contents .= sprintf(__('<p id="esig_custom_message_option">
			<a href="#" class="tooltip">
					<img src="' .$assets_url. '/images/help.png" height="20px" width="20px" align="left" />
					<span>
					'. __('Selecting this option allows you to easily save this document as a template and create future documents from its contents.','esig-acm') . '
					</span>
					</a>
				<input type="checkbox" '. $checked .' id="esig_custom_message" name="esig_custom_message" value="1"> ' . __('Add custom message to signer invite email','esig-acm') .'
				<div id="esig-custom-message-input" style="display:none;padding-left:50px;"><textarea name="esig_custom_message_text" cols="100" rows="8" placeholder="'. __('Add a custom comment that will be inserted in the email sent to signers here.....','esig-acm') .'">'. $text .'</textarea></div>
			</p>', 'esig-at'));
        
		
		return $more_contents;
         
	}
	
	/**
	 * Register and enqueue admin-specific JavaScript.
	 *
	 * @since     1.0.0
	 * @return    null    Return early if no settings page is registered.
	 */
	public function enqueue_admin_scripts() {

		$screen = get_current_screen();
		$admin_screens = array(
			'admin_page_esign-add-document',
			'admin_page_esign-edit-document',
			'e-signature_page_esign-view-document'
		);

		// Add/Edit Document scripts
		if(in_array($screen->id, $admin_screens)){
		  	
			wp_enqueue_script('jquery');
			wp_enqueue_script( $this->plugin_slug . '-admin-script', plugins_url( 'assets/js/esig-add-custom-message.js', __FILE__ ), array('jquery', 'jquery-ui-dialog'), ESIG_CUSTOM_MESSAGE::VERSION ,true);	
		}
   }
	
/**
	 * Return an instance of this class.
	 * @since     0.1
	 * @return    object    A single instance of this class.
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

}

endif;

