

<div id="boxes">

  <!------------------ getting started boxx ---------------------------->
  <div id="installation-setup-check-dialog" class="installation-setup-check-window" style="display:none;">
      <button type="button" id="esig-system-check-close" class="esig-system-btnclose">X</button>
      <h4><b style="font-size:22px;line-height: 25px;">Installation Setup Check</b></h4>
      
      <img src="<?php echo plugins_url('assets/install1.png',__FILE__); ?>" align="center" width="37%"><br><br>
      
      <div class="check-description"><b> Before you get started using ApproveMe, we just want to make sure you have the required items installed on the server.</b></div>
      <button id="esig-system-checklist-letsgo" class="letgo"><b>Get Started</b></button>
      <div class="line-height"></div>
  </div>
    
    
    <!----------------------- checking window ------------------>
    <div id="checking-installation-dialog" class="checking-installation-window" style="display:none;">

        <div id="checking-installation-header">
            
        <div class="checking-head">Checking Install...</div>
      
        <div class="esig-spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
        </div>
        
        <div id="checking-installation-footer" class="checking-installation-footer" >Checking for MBString multibyte support...</div>
        
        </div>
      
      
  
    </div>

    <div id="esig-installation-check-overlay" class="install-check-overlay"></div>

</div>

