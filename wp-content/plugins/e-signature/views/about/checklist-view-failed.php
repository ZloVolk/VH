<div id="installation-check-fail" class="installation-check-fail">

    <div class='head-check'>
       <div class="check-fail-heading"><b>Installation check failed</b></div>
       <div class="resolve_error">Resolve the error bellow then click or refresh the page.</div>
    </div>
      
      <div id ="error-show" class ="check-fail">
          
          <?php 
          global $is_esig_system_error;
         $memory_limit= WP_MEMORY_LIMIT; 
         $php_version = PHP_VERSION;
         $wordpress_version = get_bloginfo('version');
         
         
         if(!function_exists('mb_split')){ $is_esig_system_error = true; ?>
          
         <div class="checklist-failed"> <span class="icon-exit checklist-exit-icon"> </span><b>MBString multibyte support </b></div>
         <div class="failed-check" >See <a href="https://www.approveme.me/wp-digital-signature-plugin-docs/article/mbstring-multibyte-support/" target="_blank">MBString multibyte support</a> for details</div>
         
        <?php }
         
          if($memory_limit<96){ $is_esig_system_error = true; ?>
          
         <div class="checklist-failed"> <span class="icon-exit checklist-exit-icon"> </span><b>Memory limit at least 96M</b></div>
         <div class="failed-check" >See <a href="https://www.approveme.me/wp-digital-signature-plugin-docs/article/increase-memory-limit/" target="_blank">How to Increase the Memory Limit</a> for details</div>         
         <?php }
        if (version_compare($php_version, '5.3.0', '<')){ $is_esig_system_error = true;  ?>
          
         <div class="checklist-failed"> <span class="icon-exit checklist-exit-icon"> </span><b>Php version =>5.3 required</b></div>
         <div class="failed-check" >See <a href="https://www.approveme.me/wp-digital-signature-plugin-docs/article/php-requirements/" target="_blank">PHP Version Minimum Requirements</a> for details</div>
         
        <?php }
          if (version_compare($wordpress_version, '3.5', '<')){  $is_esig_system_error = true;  ?>
          
         <div class="checklist-failed"> <span class="icon-exit checklist-exit-icon"> </span><b>Wordpress version =>3.5 required</b></div>
         <div class="failed-check" >See <a href="https://www.approveme.me/wp-digital-signature-plugin-docs/article/wordpress-version-minimum-requirements/" target="_blank">WordPress Version Minimum Requirements</a> for details</div>
         
        <?php }
         if(WP_E_Addon::is_dir_writable()){  $is_esig_system_error = true;  ?>
          <div class="checklist-failed"> <span class="icon-exit checklist-exit-icon"> </span><b>Assets/temps/ directory permission set to be writable</b></div>
          <div class="failed-check" >See <a href="https://www.approveme.me/wp-digital-signature-plugin-docs/article/writable-directory/">Assets/temps/ Directory is not Writable</a> for details</div>
        <?php }
         if(!function_exists('curl_init')){   $is_esig_system_error = true; ?>
          <div class="checklist-failed"> <span class="icon-exit checklist-exit-icon"> </span><b>PHP Curl not supported</b></div>
          <div class="failed-check" style="height: 62px;">See <a href="https://www.approveme.me/wp-digital-signature-plugin-docs/article/php-curl-installation-instructions/">PHP Curl Install Instructions</a> for details</div>
        <?php }
         if(!function_exists('mcrypt_create_iv')){   $is_esig_system_error = true; ?>
          <div class="checklist-failed"> <span class="icon-exit checklist-exit-icon"> </span><b>PHP Mcrypt not supported</b></div>
          <div class="failed-check" style="height: 62px;">See <a href="https://www.approveme.me/wp-digital-signature-plugin-docs/article/mcrypt-security/">Mcrypt Security</a> for details</div>
        <?php }
         $about = new WP_E_aboutsController();
         if(!$about->remote_post_working()){  $is_esig_system_error = true; ?>
            <div class="checklist-failed"> <span class="icon-exit checklist-exit-icon"> </span><b>WP REMOTE GET/POST not working</b></div>
            <div class="failed-check" >See <a href="https://www.approveme.me/wp-digital-signature-plugin-docs/article/wp-remote-getpost/">WP REMOTE GET/POST</a> for details</div>
        <?php }
         if(!extension_loaded('gd')){ $is_esig_system_error = true; ?>
          
         <div class="checklist-failed"> <span class="icon-exit checklist-exit-icon"> </span><b>PHP GD Library not enabled</b></div>
         <div class="failed-check" >See <a href="https://www.approveme.me/wp-digital-signature-plugin-docs/article/gd-library/">How to Enable the GD Library</a> for details</div>
         
        <?php }
          ?>
    
       
     </div>
      
      <button id="esig-system-checklist-retry" class="retry-checking"><b>Retry</b></button>
      <div class="line-height"></div>

</div>
