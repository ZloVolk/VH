<div id="esig-sif-admin-panel" style="display:none;">
    <div class="esig-sif-main-panels">
        <?php
        $asset_dir = ESIGN_ASSETS_DIR_URI;
        ?>
        <!-- textbox panel start here  -->
        <div class="panel esig-sif-panel-textfield" style="display:none;">
            <div class="sif_popup_container">
                <div class="sif_popup_left">
                    <div class="sif_text_signer_info"> </div>
                    <div class="sif_text_placeholder_Text">
                        <?php _e('Enter your placeholder text','esig-sif');?><br>
                        <input type="text"  name="textbox" value="" placeholder="Placeholder Text">
                    </div>
                </div>
                <div class="sif_popup_right" valign="top">
                    <!-- textbox advanced area -->
                    <div class="sif_advanced_button_area" align="right">
                        <button id="sif_textbox_advanced_button" class="advanced-button icon-settings">
                            <?php _e('Advanced','esig_sif'); ?>
                        </button>
                    </div>
                    <!-- others area start here -->
                    <div class="sif_others_area">
                        <input type="checkbox" class="required" name="required" checked ><?php _e('Required', 'esig-sif'); ?>
                    </div>
                </div>
                
                <p style="clear: both;"></p>
                <div align="left">
                   
                    <select  id="text_field_display_type" style="width:460px">
                        <option value="border"><?php _e('Create a border around submitted results','esig_sif'); ?></option>
                        <option value="underline"><?php _e('Underline submitted results','esig_sif'); ?></option>
                        <option value="plaintext"><?php _e('Display the submitted results as plain text(no border or underline)','esig_sif'); ?></option>
                    </select>
                    
                </div>
                
                <div class="popup_submit_area" align="left">
                    <a class="esig-mini-btn esig-blue-btn insert-btn">
                        <?php _e('Insert Text Field', 'esig-sif' );?>
                    </a>
                </div>
            </div>
            <div class="sif_textbox_advanced_content" style="display:none;">
                Max Width:  <input type="text" id="maxsize" name="textbox_width" size="4" value="">Px
                <hr width="100%">
                <span class="sif-advanced-text">    
                    <?php _e('Tips: you can adjust the size of your text field by using '
                            . 'the text box above. See the result in real time','esig-sif'); ?>
                </span>
            </div>
            <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                <?php  _e('*You must assign this field to a specific signer.','esig-sif'); ?><br>
                    <?php  _e('Please select a signer from the dropdown and try again.','esig-sif'); ?>
            </div>
            <div id="esign-sif-size-msg" class="esig-sif-signer-message" style="display:none;">
                <?php  _e('*You must input only number in input field size..','esig-sif'); ?>
            </div>
        </div>
        <!-- ************** textbox panel end here ************ -->
        
        
        <!-- ############ text area panel start here ############### -->
            <div class="panel esig-sif-panel-textarea" style="display:none;">
                <div class="sif_popup_container">
                    <div class="sif_popup_left">
                        <div class="sif_textarea_signer_info"> </div>
                        <div class="sif_textarea_placeholder_Text"><br/>
                            <em>Enter your placholder text below</em><br/><br/>
                            <textarea id="esig-textarea-input" class="esig-sif-textarea-style area-small" name="textarea" cols="20" rows="5" placeholder="E.g. How tall are you?">
                                
                            </textarea>
                        </div>
                    </div>
                    <div class="sif_popup_right" valign="top">
                        <!-- textbox advanced area -->
                        <div class="sif_advanced_button_area" align="right">
                            <button id="sif_textarea_advanced_button" class="advanced-button icon-settings">
                                <?php _e('Advanced','esig_sif'); ?>
                            </button>
                        </div>
                        <!-- others area start here -->
                        <div class="sif_others_area">
                            <input type="checkbox" class="required" name="required" checked ><?php _e('Required', 'esig-sif'); ?>
                        </div>
                    </div>
                    
                    <div class="" align="left">
                   
                    <select id="text_area_display_type" style="width:460px">
                        <option value="border"><?php _e('Create a border around submitted results','esig_sif'); ?></option>
                        <option value="underline"><?php _e('Underline submitted results','esig_sif'); ?></option>
                        <option value="plaintext"><?php _e('Display the submitted results as plain text(no border or underline)','esig_sif'); ?></option>
                    </select>
                    
                </div>
                    
                    <div class="popup_submit_area" align="left">
                        <a class="esig-mini-btn esig-blue-btn insert-btn">
                            <?php _e('Insert Paragraph Text', 'esig-sif' );?>
                        </a>
                    </div>
                </div>
                <div class="sif_textarea_advanced_content" style="display:none;">
                    <div align="center">Field Size <br/>
                        <select name="esig_textarea_type" id="esig-textarea-size">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="big">Big</option>
                        </select>
                    </div>
                    <hr width="100%">
                    <span class="sif-advanced-text">
                        <?php _e('Tips: you can adjust the size of your text area by using '
                                . 'the option above. See the result in real time','esig'); ?>
                    </span>
                </div>
                <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                    <?php  _e('*You must assign this field to a specific signer.','esig-sif'); ?></br>
                    <?php  _e('Please select a signer from the dropdown and try again.','esig-sif'); ?>
                </div>
                <div id="esign-sif-size-msg" class="esig-sif-signer-message" style="display:none;">
                    <?php  _e('*You must input only number in input field size..','esig-sif'); ?>
                </div>
            </div>
        <!-- ************ textarea panel end here *********** -->
        
        
        <!-- ################## date panel start here ##############  -->
        
            <div class="panel esig-sif-panel-datepicker" style="display:none;">
                <div align="center" class="esig-sif-popup-logo">
                    <img src="<?php echo ESIGN_ASSETS_DIR_URI ; ?>/images/logo.svg">
                </div>
                <p align="center" class="esig-sif-instructions">
                    <?php _e('Add a date picker for your signer to fill out.', 'esig-sif' );?>
                </p>
                <div class="sif_popup_main_datepicker">
                    <div class="sif_popup_left">
                        
                    </div>       
                </div>
                <p>
                    Enter your field label (Optional)<br>
                    <input type="text"  name="datepickerlabel" value="">
                </p>
                <p>
                    <input type="checkbox" class="required" name="required" checked ><?php _e('Required', 'esig-sif'); ?>
                </p>
                
                <div class="" align="left">
                   
                    <select id="datepicker_display_type" style="width:460px">
                        <option value="border"><?php _e('Create a border around submitted results','esig_sif'); ?></option>
                        <option value="underline"><?php _e('Underline submitted results','esig_sif'); ?></option>
                        <option value="plaintext"><?php _e('Display the submitted results as plain text(no border or underline)','esig_sif'); ?></option>
                    </select>
                    
                </div>
                
                <p align="center">
                    <a class="esig-mini-btn esig-blue-btn insert-date">
                        <?php _e('Insert Date', 'esig-sif' );?>
                    </a>
                </p>
                <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                    <?php  _e('*You must assign this field to a specific signer.','esig-sif'); ?></br>
                    <?php  _e('Please select a signer from the dropdown and try again.','esig-sif'); ?>
                </div>
            </div>
        <!-- ************* date panel end here ************ -->
		
		
	<!-- ############# file upload panel start here ############ -->
            <div class="panel esig-sif-panel-file" style="display:none;">
                <p class="sif-file-upload-instructions">
                    <?php _e('Allow your signer to upload a file to your document', 'esig-sif' );?>
                </p>
                <div class="sif_popup_main_file" style="height:220px;">
                    <div class="sif_popup_left">
                        <div class="sif_file_signer_info"> </div>
                        <p>
                            Enter your field label
                            <a href="#" class="tooltip">
                                <img src="<?php echo ESIGN_ASSETS_DIR_URI; ?>/images/help.png" height="17px" width="17px" align="left" />
                                <span>
                                    <?php _e('A field label is text that will live above your file upload form.', 'esig-sif'); ?>
                                </span>
                            </a>
                            <br>
                            <input type="text"  name="filelabel" placeholder="optional" value="">
                        </p>
                        <p>
                            Allowed file extensions 
                            <a href="#" class="tooltip">
                                <img src="<?php echo ESIGN_ASSETS_DIR_URI; ?>/images/help.png" height="17px" width="17px" align="left" />
                                <span>
                                    <?php _e('Enter the allowed file extensions for file uploads.  This will limit the type of files a user can upload.', 'esig-sif'); ?>
                                </span>
                            </a>
                            <br>
                            <input type="text" id="file_extension" name="file_extension" value="">
                            <br>
                            <?php _e('Separated with commas (i.e jpg, gif, png, pdf)', 'esig-sif'); ?>
                        </p>
                    </div>
                    <div class="sif_popup_right">
                        <!-- textbox advanced area -->
                        <div class="sif_advanced_button_area" align="right">
                            <button id="sif_file_advanced_button" class="advanced-button icon-settings">
                                <?php _e('Advanced','esig_sif'); ?>
                            </button>
                        </div>
                        <!-- others area start here -->
                        <div class="sif_others_area">
                            <input type="checkbox" class="required" name="required" checked ><?php _e('Required', 'esig-sif'); ?>
                        </div>
                    </div>
                </div> <!-- sif popup main file end here  -->
                
                
                <p align="center">
                    <a class="esig-mini-btn esig-blue-btn insert-file">
                        <?php _e('Insert Upload Form', 'esig-sif' );?>
                    </a>
                </p>
                <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                    <?php  _e('*You must assign this field to a specific signer.','esig-sif'); ?></br>
                    <?php  _e('Please select a signer from the dropdown and try again.','esig-sif'); ?>
                </div>
                <div id="esign-sif-extension-msg" class="esig-sif-signer-message" style="display:none;">
                    <?php  _e('*You must input file extension to a specific signer.','esig-sif'); ?>
                </div>
                <div class="sif_file_advanced_content" style="display:none;">
                    Max File Size: 
                    <span id="esig-new-html"> 
                        <input type="text" id="max-file-size" size="4" name="max_file_size" value="<?php echo (int)(ini_get('upload_max_filesize')) ; ?>" >
                    </span>MB
                    <hr width="100%">
                    <span class="sif-advanced-text">
                        <?php _e('Specify the maximum file size in megabytes allowed for the uploaded files.','esig'); ?>
                    </span>
                    <hr width="100%">
                    Maximum allowed in this server : <?php echo (int)(ini_get('upload_max_filesize')) . "MB" ; ?>
                </div>
            </div>
        <!-- ********** file upload panel end here ************** -->
        
        
        <!-- ########## radio panel start here #################### -->
            <div class="panel esig-sif-panel-radio" style="display:none;">
                <div class="sif_popup_container">
                    <div class="sif_popup_left">
                        <div class="sif_radio_signer_info"> </div>
                        <div class="sif_text_placeholder_Text">
                           <?php _e(' Enter your field label(Optional)', 'esig-sif'); ?><br>
                            <input type="text"  name="radiolabel" value=" ">
                        </div>
                        <div class="radio_button">
                            <ul id="radio_html">
                                <li><?php _e(' Add Radio Buttons', 'esig-sif'); ?></li>
                                <li>
                                    <input type="radio" name="esig-radio-sif"/>
                                    <input type="text" name="label[]" placeholder="Label" value="" />
                                    <input type="hidden" class="hidden_radio" name="" value="">
                                    <span class="icon-plus" id="addRadio"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sif_popup_right" valign="top">
                        <!-- textbox advanced area -->
                        <div class="sif_advanced_button_area">
                            <button id="sif_radio_advanced_button" class="advanced-button icon-settings">
                                <?php _e('Advanced','esig_sif'); ?>
                            </button>
                        </div>
                        <!-- others area start here -->
                        <div class="sif_others_area">
                            <input type="checkbox" class="required" name="required" checked ><?php _e('Required', 'esig-sif'); ?>
                        </div>
                    </div>
                    
                    
                    <div class="popup_submit_area" align="left">
                        <a class="esig-mini-btn esig-blue-btn insert-btn">
                            <?php _e('Insert Radio Buttons', 'esig-sif' );?>
                        </a>
                    </div>
                    <div class="sif_radio_advanced_content" style="display:none;text-align:justify;">
                        <div class="sif_alignment">
                            <input type="radio" name="sif_radio_position" id="radio_vertical" checked value="vertical"><?php _e('Display vertically' , 'esig-sif');?>
                            <span class="esig-default">
                                <?php _e('(Default)','esig-sif'); ?>
                            </span>
                            <br>
                            <input type="radio" name="sif_radio_position" id="radio_horizontal" value="horizontal"><?php _e('Display horizontally', 'esig-sif' );?>
                        </div>
                        <hr width="100%">
                        <span class="sif-advanced-text">
                            <?php _e('Tips: you can choose for your radio buttons to be displayed'
                                    . 'vertically or horizontally on your document here.','esig'); ?>
                        </span>
                    </div>
                </div>
                <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                    <?php  _e('*You must assign this field to a specific signer.','esig-sif'); ?></br>
                    <?php  _e('Please select a signer from the dropdown and try again.','esig-sif'); ?>
                </div>
            </div>
        <!-- ********************* Radio panel end here ***************** -->
         
         
        <!-- ################ checkbox start here ###################### -->
            <div class="panel esig-sif-panel-checkbox" style="display:none;">
                <div class="sif_popup_container">
                    <div class="sif_popup_left">
                        <div class="sif_checkbox_signer_info"> </div>
                        <div class="sif_text_placeholder_Text">
                            <?php _e('Enter your field label(Optional)', 'esig-sif'); ?><br>
                            <input type="text"  name="checkboxlabel" value="">
                        </div>
                        <div class="checkbox_button">
                            <ul id="checkbox_html-rupom">
                                <li><?php _e(' Add Checkbox Buttons', 'esig-sif'); ?></li>
                                <li>
                                    <input type="checkbox" name=""/>
                                    <input type="text" name="label[]" placeholder="Label" value="" />
                                    <input type="hidden" class="hidden_checkbox" name="" value="">
                                    <span class="icon-plus" id="addCheckbox"> </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sif_popup_right" valign="top">
                        <!-- textbox advanced area -->
                        <div class="sif_advanced_button_area">
                            <button id="sif_checkbox_advanced_button" class="advanced-button icon-settings">
                                <?php _e('Advanced','esig_sif'); ?>
                            </button>
                        </div>
                        <!-- others area start here -->
                        <div class="sif_others_area">
                            <input type="checkbox" class="required" name="required" checked ><?php _e('Required', 'esig-sif'); ?>
                        </div>
                    </div>
                    
                   
                    
                    <div class="popup_submit_area" align="left">
                        <a class="esig-mini-btn esig-blue-btn insert-btn">
                            <?php _e('Insert Checkboxes Buttons', 'esig-sif' );?>
                        </a>
                    </div>
                    <div class="sif_checkbox_advanced_content" style="display:none;">
                        <div class="sif_alignment">
                            <input type="radio" name="sif_checkbox_position" id="box-vertical" checked value="vertical"><?php _e('Display vertically' , 'esig-sif');?>
                            <span class="esig-default"><?php _e('(Default)','esig-sif'); ?></span> <br>
                            <input type="radio" name="sif_checkbox_position" id="box-horizontal" value="horizontal"><?php _e('Display horizontally', 'esig-sif' );?>
                        </div>
                        <hr width="100%">
                        <span class="sif-advanced-text">
                            <?php _e('Tips: you can choose for your radio buttons to be displayed'
                                    . 'vertically or horizontally on your document here.','esig'); ?>
                        </span>
                    </div>
                </div>
                <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                    <?php  _e('*You must assign this field to a specific signer.','esig-sif'); ?></br>
                    <?php  _e('Please select a signer from the dropdown and try again.','esig-sif'); ?>
                </div>
            </div>
        <!-- *******************checkbox end here ********************** -->
    
    
    <!-- sif dropdown menu start here  -->
    
    
	<div class="panel esig-sif-panel-dropdown" style="display:none;">
                <div class="sif_popup_container">
                    <div class="sif_popup_left">
                        <div class="sif_dropdown_signer_info"> </div>
                        <div class="sif_text_placeholder_Text">
                            <?php _e('Enter your field label(Optional)', 'esig-sif'); ?><br>
                            <input type="text"  name="dropdownlabel" value="">
                        </div>
                        <div class="dropdown_button">
                            <ul id="dropdown_html-rupom">
                                <li><?php _e(' Add Dropdown option', 'esig-sif'); ?></li>
                                <li>
                                  
                                    <input type="text" name="label[]" placeholder="Label" value="" />
                                    <input type="hidden" class="hidden_dropdown" name="" value="">
                                    <span class="icon-plus" id="addDropdown"> </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sif_popup_right" valign="top">
                        <!-- others area start here -->
                        <div class="sif_others_area">
                            <input type="checkbox" class="required" name="required" checked ><?php _e('Required', 'esig-sif'); ?>
                        </div>
                    </div>
                    
                    
                    <div class="popup_submit_area" align="left">
                        <a class="esig-mini-btn esig-blue-btn insert-btn">
                            <?php _e('Insert Dropdown', 'esig-sif' );?>
                        </a>
                    </div>
                </div>
                <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                    <?php  _e('*You must assign this field to a specific signer.','esig-sif'); ?></br>
                    <?php  _e('Please select a signer from the dropdown and try again.','esig-sif'); ?>
                </div>
            </div> 
    <!-- sif dropdown menu end here -->
    </div>
    
    
    
</div>