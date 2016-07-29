
		<div id="email_container">
			<div style="width:570px; padding:0 0 0 20px; margin:50px auto 12px auto" id="email_header">
				<span style="background:#585858; color:#fff; padding:12px;font-family:trebuchet ms; letter-spacing:1px; 
					-moz-border-radius-topleft:5px; -webkit-border-top-left-radius:5px; 
					border-top-left-radius:5px;moz-border-radius-topright:5px; -webkit-border-top-right-radius:5px; 
					border-top-right-radius:5px;">
					<?php echo $data['sitename'] ; ?>
				</div>
			</div>
		
		
			<div style="width:550px; padding:0 20px 20px 20px; background:#fff; margin:0 auto; border:3px solid DeepSkyBlue;
			color:#454545;line-height:1.5em; " id="email_content">
				
				<h1 style="padding:5px 0 0 0; font-family:georgia;font-weight:500;font-size:24px;color:#000;border-bottom:1px 1px solid #bbb">
					<?php _e('The subject of this email','esig-aur');?>
				</h1>
				
				<p><p><?php echo sprintf( __('A very special welcome to you,%s. Thank you for joining !','esig-aur'),$user_login,$data['sitename']);?></p>
	
	<p>
		<?php _e('Your username is ','esig-aur');?><strong style="color:DeepSkyBlue "><?php echo $data['wp_username'] ?></strong> <br>
		<?php _e('Your password is ','esig-aur');?><strong style="color:DeepSkyBlue "><?php echo $data['wp_password'] ?></strong> <br>
		<?php _e('Please keep it secret and keep it safe!','esig-aur');?>
	</p>
	
	<p>
		<?php _e('We hope you enjoy your stay at','esig-aur');?> <?php echo $data['sitename']; ?>. <?php _e('If you have any problems, questions, opinions, praise, 
		comments, suggestions, please feel free to contact us at any time','esig-aur');?>
	</p>
				
				<p style="">
					<?php _e('Warm regards,','esig-aur');?><br>
					
				</p>
				
				<div style="text-align:center; border-top:1px solid DeepSkyBlue;padding:5px 0 0 0;" id="email_footer "> 
					<small style="font-size:11px; color:#999; line-height:14px;"><?php echo sprintf( __('
						You have received this email because you are a member of %s.
						If you would like to stop receiving emails from us, feel free to 
						<a href="#" style="color:#666">unregister</a> from our mailing list','esig-aur'),$data['sitename']);?>
					</small>
				</div>
				
			</div>
		</div>
	</body>
</html>