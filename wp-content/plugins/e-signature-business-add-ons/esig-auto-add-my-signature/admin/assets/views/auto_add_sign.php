<?php

$settings = new WP_E_Setting();
$user = new WP_E_User();
$signature = new WP_E_Signature();
$wp_user_id = get_current_user_id();

$WPuser= $user->getUserByWPID($wp_user_id);

?>

<div id="esig-auto-add-signature-popup" style="display:none;">
    <div id="auto-add-esign-popup">
<form>
<div class="auto-signature-agree">
<center><input type="checkbox" name="esign-add-auto-agree" id="esign-add-auto-signature-agree" value="1" checked><b> <?php _e('I Agree (Required)','esig-aasm');?></b></center>
</div>

<div style="max-width:500px;margin-bottom: 30px;">
<?php echo sprintf(__('I am <b>%s</b> and i understand that by clicking "Agree & Sign" ','esig-aasm'),$WPuser->first_name);?>
<span class="auto-signature-strong"><b><?php _e('I agree to be legally bound </b></span>by The WP E-Signature ','esig-aasm');?><a href="#" id="esig-terms" class="doc-terms"><b><?php _e('Terms of Use', 'esig'); ?></b></a>
<?php _e('and the contents of this agreement in its completed form.','esig-aasm');?>
</div>

<div align="center" class="auto-signature-pad">
<?php 

$sig_data=$signature->getSignatureData($WPuser->user_id); 
			
$signature_type = $sig_data->signature_type ;

 $signature_full = '';
			
if($signature_type == 'typed')
{
        $font_choice = $settings->get('esig-signature-type-font'.$WPuser->user_id);
        $signature_type = $signature->getUserSignature_by_type($WPuser->user_id ,'typed');
        
        $font_size = 64 - (strlen($signature_type)* 1.5 );
        
        $signature_full = '<span class="esig-signature-type-font'. $font_choice .'"><font size="'. $font_size .'">' . $signature_type  .'</font></span>';
}
else
{
	$image= $signature->display_signature($WPuser->user_id, false, false,true);
        
        $signature_full = '<img src="'. $image .'">' ; 
        
}

?>

 
		
<div class="signature-wrapper-displayonly-signed">
    
    <?= $signature_full ; ?>
				
</div>

</div>
     
<p align="center">
<a href="#" class="esig-blue-btn" id="esig-auto-add-confirm"  title="Agree and submit your signature."><?php _e('Agree & Sign', 'esig') ?></a>
</p>

</form>
        </div>
</div><!-- esig-auto-add-signature-popup  -->

<!-- terms and condition start here -->
<div id="esig-terms-condition" style="display:none;">
 
      <p id="esign-terms-goback" style="display:none;"><a href="#" id="esign-goback"><?php _e('Go Back','esig-aasm');?></a></p/>
     
	<div id="esign-terms-content" style="max-width: 500px;" >  <h1><?php _e('Loading ........','esig-aasm');?></h1></div>
	
     <p id="esign-terms-goback" style="display:none;"><a href="#" id="esign-goback"><?php _e('Go Back','esig-aasm');?></a></p/>
</div>


