(function($){
		// show dialog if esig pdf is not active 
		//alert(esig_dropbox.folder_url);
		$('input[name="esig_pdf_attachment"]').on('change', function(){
			
			if($('input[name="esig_pdf_attachment"]').attr('checked')){
				
				   var url = esig_attachment.folder_url +"pdf-error-dialog.php" ; 
				   
				   var parent = $(this).attr('data-parent');
				   
				   if(parent == "active")
				   {
				   	 return true ;
				   }
				   // not active parent addon 
				   $('#esig-dialog-content').load(url);
				   // show esig dialog 
				   $( "#esig-dialog-content" ).dialog({
					  dialogClass: 'esig-dialog',
					  height: 500,
				      width: 600,
				      modal: true,
				    
		   			 });
				  
				  $('input[name="esig_pdf_attachment"]').prop('checked',false);
				  return false ;	   
			}
			else
			{
				 $('input[name="esig_pdf_attachment"]').prop('checked',false);
			}
			
		});
	
})(jQuery);
