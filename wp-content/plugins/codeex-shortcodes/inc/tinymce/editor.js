(function($) {
"use strict";   

   // Shortcodes
   tinymce.PluginManager.add( 'typo_path', function( editor, url ) {
      
      editor.addButton( 'typo_shortcodes', {
         type: 'splitbutton',
         icon: false,
         title:  'codeex Shortcodes',
         onclick : function(e) {},
         menu: [
            {text: 'Alerts',onclick:function(){
               tb_show("Insert Alert Shortcode", url + "/modal.php?popup=alerts");
            }},
            {text: 'Blockquote',onclick:function(){
               tb_show("Insert Blockquote Shortcode", url + "/modal.php?popup=blockquotes");
            }},
            {text: 'Buttons',onclick:function(){
               tb_show("Insert Buttons Shortcode", url + "/modal.php?popup=buttons");
            }},
            {text: 'Callouts',onclick:function(){
               tb_show("Insert Callout Shortcode", url + "/modal.php?popup=callouts");
            }},
            {text: 'Columns',onclick:function(){
               tb_show("Insert Columns Shortcode", url + "/modal.php?popup=columns");
            }},
            {text: 'Dropcaps',onclick:function(){
               tb_show("Insert Dropcaps Shortcode", url + "/modal.php?popup=dropcaps");
            }},
            {text: 'Google Map',onclick:function(){
               tb_show("Insert Google Map Shortcode", url + "/modal.php?popup=gmap");
            }},
            {text: 'Images',onclick:function(){
               tb_show("Insert Image Shortcode", url + "/modal.php?popup=images");
            }},
            {text: 'List Icons',onclick:function(){
               tb_show("Insert List Icons Shortcode", url + "/modal.php?popup=list-icons");
            }},
            {text: 'Skills Bar',onclick:function(){
               tb_show("Insert Skills Bar Shortcode", url + "/modal.php?popup=skills-bar");
            }},
            {text: 'Social Icons',onclick:function(){
               tb_show("Insert Social Icons Shortcode", url + "/modal.php?popup=social-icons");
            }},
            {text: 'Tabs',onclick:function(){
               tb_show("Insert Tab Shortcode", url + "/modal.php?popup=tabs");
            }},
            {text: 'Toggle',onclick:function(){
               tb_show("Insert Toggle Shortcode", url + "/modal.php?popup=toggles");
            }},
            {text: 'Video',onclick:function(){
               tb_show("Insert Video Shortcode", url + "/modal.php?popup=videos");
            }},
         ]
      });

   });

})(jQuery);