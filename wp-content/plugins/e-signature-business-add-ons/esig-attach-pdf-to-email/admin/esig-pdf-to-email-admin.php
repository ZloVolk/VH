<?php
/**
 *
 * @package ESIG_AAMS_Admin
 * @author  Abu Shoaib <abushoaib73@gmail.com>
 */

if (! class_exists('ESIG_PDF_TO_EMAIL_Admin')) :
	class ESIG_PDF_TO_EMAIL_Admin {

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
		$plugin = ESIG_PDF_TO_EMAIL::get_instance();
		$this->plugin_slug = $plugin->get_plugin_slug();
		
		// Add an action link pointing to the options page.
		$plugin_basename = plugin_basename( plugin_dir_path( __FILE__ ) . $this->plugin_slug . '.php' );
		
		add_action('admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
		
		add_filter('esig_admin_more_document_contents', array($this, 'document_add_data'),10,1);
		
		// adding actions 
		add_action('esig_document_after_save', array($this, 'document_after_save'), 10, 1);
		add_action('esig_sad_document_invite_send', array($this, 'sad_document_after_save'), 10, 1);
		
		add_filter('esig_email_attachment', array($this, 'document_all_signed'), 10, 1);
		
		// do action 
		add_filter('esig_email_sent', array($this, 'document_email_sent'), 10, 1);
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
             // $api->setting->delete('esig-template-'.$document_id);
              $api->setting->delete('esig_pdf_attachment_'.$document_id);
              
        }
	
	/**
	 * Register and enqueue admin-specific JavaScript.
	 *
	 * @since     1.0.0
	 * @return    null    Return early if no settings page is registered.
	 */
	public function enqueue_admin_scripts() 
	{
		
		$screen = get_current_screen();
		$current = $screen->id;
		// Show if we're adding or editing a document
		if ( ($current == 'admin_page_esign-add-document') || ($current == 'admin_page_esign-edit-document')) 
		{
			wp_enqueue_script( $this->plugin_slug . '-plugin-script', plugins_url( 'assets/js/esig-pdf-attachment.js', __FILE__ ), array( 'jquery', 'jquery-ui-dialog' ),'1.0.1',TRUE);
			
			$folder_url = plugins_url('/views/',__FILE__);
			
			wp_localize_script( $this->plugin_slug . '-plugin-script', 'esig_attachment', array( 'folder_url' =>$folder_url));
			
		}
		
	}
	
	
	public function document_email_sent ($args){
		
		global $wpdb;
		
		$doc_id = $args['document']->document_id;
        
		if (!class_exists('ESIG_PDF_Admin')){
                            return ;
        }
		$pdfapi = new ESIG_PDF_Admin();
		
		if(!function_exists('WP_E_Sig'))
				return ;
		
		$api =  WP_E_Sig();
		
		$email_pdf = $api->setting->get_generic('esig_pdf_attachment_'.$doc_id);
		
		
		// email pdf set true send email with attachment 
		if($email_pdf == "1"){
			
			$admin_user_id =$args['document']->user_id; 
			
			// gettings pdf file 
			$pdf_buffer=$pdfapi->pdf_document($doc_id) ;
			
			$pdf_name=$pdfapi->pdf_file_name($doc_id).".pdf" ; 
			
			
			// php attachement 
			$upload_dir = wp_upload_dir();
			//get upload path 
			$upload_path =$upload_dir['path'] . "/" . $pdf_name; 
			if (file_exists($upload_path)) 
			{
				unlink($upload_path);
			}	
		}
		
	}
	public function document_all_signed ($args){
		
		global $wpdb;
		
		$doc_id_main = $args['document']->document_id;
		
		
		
		if (!class_exists('ESIG_PDF_Admin')){
                return ;
        }
        
	    $pdfapi = new ESIG_PDF_Admin();
		
		if(!function_exists('WP_E_Sig'))
				return ;
		
		$api =  WP_E_Sig();
		
		if(!$api->setting->get_generic('esig_pdf_attachment_'.$doc_id_main))
	    {
			global $wpdb;
			$doc_table = $api->document->table_prefix . 'documents';
			$stand_table = $api->document->table_prefix  . 'documents_stand_alone_docs';
			$sad_document=$wpdb->get_var("SELECT document_type FROM " . $doc_table . " WHERE document_id='" . $doc_id_main ."'");
			$page_id = get_the_ID();
			if($sad_document=="stand_alone") 
						$doc_id=$wpdb->get_var("SELECT max(document_id) FROM " . $stand_table . " WHERE page_id='" .$page_id . "'");
	
		}
		
		if(!isset($doc_id))
		{
			$doc_id=$doc_id_main;
		}
		
		$email_pdf = $api->setting->get_generic('esig_pdf_attachment_'.$doc_id);
		
		// email pdf set true send email with attachment 
		if($email_pdf == "1"){
			
			$admin_user_id =$args['document']->user_id; 
            
			// gettings pdf file 
			$pdf_buffer=$pdfapi->pdf_document($doc_id_main) ;
			
			$pdf_name=$pdfapi->pdf_file_name($doc_id_main).".pdf" ; 
			
			
			// php attachement 
			$upload_dir = wp_upload_dir();
			//get upload path 
			$upload_path =$upload_dir['path'] . "/" . $pdf_name; 
			// saving pdf file to upload direcotry
			file_put_contents($upload_path,$pdf_buffer);
			// send Email
			return $upload_path ; 	
		}
		
	}
	
	public function mailType($content_type){
		return 'text/html';
	}
	/**
	 * Action:
	 * Fires after document save. Updates page/document_id data and shortcode on page.
	 */		
	public function document_after_save($args) {
		
		global $wpdb;
		$doc_id = $args['document']->document_id;
		
		if(! function_exists('WP_E_Sig'))
				return ;
		
		$api =  WP_E_Sig();
		
		// saving into database 
		$attach_pdf = (isset($_POST['esig_pdf_attachment']))?$_POST['esig_pdf_attachment']:null ;
		$api->setting->set('esig_pdf_attachment_'.$doc_id,$attach_pdf);
		
		
	}
	
	public function sad_document_after_save($args) {
	
	    global $wpdb;
	    $doc_id = $args['document']->document_id;
	    
	    $old_doc_id = $args['old_doc_id'];
	    
	    if(! function_exists('WP_E_Sig'))
	        return ;
	
	    $api =  WP_E_Sig();
	
	    // saving into database
	    $old_doc_attachment=$api->setting->get_generic('esig_pdf_attachment_'.$old_doc_id);
	    
	    $api->setting->set('esig_pdf_attachment_'.$doc_id,$old_doc_attachment);
	
	
	}
	/**
	* Filter:
	* Adds options to the document-add and document-edit screens
	*/		
	public function document_add_data($more_contents) {
		
		if(!function_exists('WP_E_Sig'))
				return ;
		
		$api =  WP_E_Sig();
		
		global $wpdb;
		
		$selected = '';
		
		$checked=apply_filters('esig-pdf-attachment-check-filter','');
		
		if(!$checked)
		{
			echo $checked;
			$doc_id=isset($_GET['document_id'])?$_GET['document_id']:null;
			$pdf_attach=$api->setting->get_generic('esig_pdf_attachment_'.$doc_id);
			
			if($pdf_attach)
			{
				$checked="checked";
			}
		}
		
		$display_select='display:block;';
		
		$parent = (!class_exists('ESIG_PDF_Admin'))?"inactive":"active" ; 
		//$doc_type = $api->document->getDocumenttype($document_id) ; 
		
		$assets_url=ESIGN_ASSETS_DIR_URI ; 
		$more_contents .= '
			<p id="esig_pdf_attachment">
			<a href="#" class="tooltip">
					<img src="'. $assets_url .'/images/help.png" height="20px" width="20px" align="left" />
					<span>
					'.__('Selecting this option will automatically attach a PDF of this attachment to the email that gets sent to all parties once the document has been signed by all parties and is closed.', 'esig-pdfemail').'
					</span>
					</a>
				<input type="checkbox" '. $checked .' id="esig_pdf_email" data-parent="'. $parent .'" name="esig_pdf_attachment" value="1"> '.__('Send a PDF of this agreement as an email attachment', 'esig-pdfemail').'
				
			</p>		
		';
		
		
		return $more_contents;
		
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

