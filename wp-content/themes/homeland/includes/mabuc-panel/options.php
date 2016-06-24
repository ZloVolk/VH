<?php
	function homeland_options_setup() {
		global $themename, $shortname, $options, $version, $help, $docs, $author, $homeland_blog_category;

		// Theme Variables
		$version = "2.9.6";	
		$author = "codeex";	
		$themename = "Homeland";
		$shortname = "homeland";	
		$help = "http://themecss.com/codeex/support/theme/homeland/";
		$docs = "http://themecss.com/wp/switcher/docs/homeland/Homeland-User-Guide.html";

		// Theme Fonts
		$homeland_theme_fonts = array( __( 'Default', 'homeland' ), "Abel", "Alegreya Sans", "Archivo Narrow", "Arimo", "Armata", "Asap", "Bitter", "Cabin", "Cambay", "Cambo", "Carrois Gothic", "Catamaran", "Comfortaa", "Crimson Text", "Didact Gothic", "Dosis", "Droid Sans", "Duru Sans", "EB Garamond", "Exo", "Fira Sans", "Gafata", "Gudea", "Glegoo", "Hind", "Inconsolata", "Istok Web", "Josefin Sans", "Karla", "Kreon", "Lato", "Lora", "Merriweather", "Monda", "Montserrat", "Muli", "News Cycle", "Nixie One", "Nobile", "Noticia Text", "Noto Sans", "Open Sans", "Oswald", "Oxygen", "PT Sans", "Poiret One", "Pontano Sans", "Poppins", "Puritan", "PT Serif", "Quattrocento Sans", "Questrial", "Quicksand", "Rajdhani", "Raleway", "Ruda", "Source Sans Pro", "Sintony", "Slabo", "Titillium Web", "Ubuntu", "Varela Round", "Voces", "Work Sans" );

		// Theme Patterns
		$homeland_theme_patterns = array( __( 'Select Pattern', 'homeland' ), "Symphony", "Contemporary China", "Eight Horns", "Swirl", "Mini Waves", "Skulls", "Pentagon", "Halftone", "Giftly", "Food", "Sprinkles", "Geometry", "Dimension", "Pixel Weave", "Hoffman", "Gray Lines", "Noise Lines", "Tiny Grid", "Bullseye", "Gray Paper", "Norwegian Rose", "Subtle Net", "Polyester Lite", "Absurdity", "White Bed Sheet", "Subtle Stripes", "Light Mesh", "Rough Diagonal", "Arabesque", "Stack Circles", "Hexellence", "White Texture", "Concrete Wall", "Brush Aluminum", "Groovepaper", "Diagonal Noise", "Rocky Wall", "Whitey", "Bright Squares", "Freckles", "Wallpaper", "Project Paper", "Cubes", "Washi", "Dot Noise", "xv", "Little Plaid", "Old Wall", "Connect", "Ravenna", "Smooth Wall", "Tapestry", "Psychedelic", "Scribble Light", "GPlay", "Lil Fiber", "First Aid", "Frenchstucco", "Light Wool", "Gradient Squares", "Escheresque", "Climpek", "Lyonnette", "Gray Floral", "Reticular Tissue", "Confectionary", "Dark Sharp Edges", "Subtle White Feathers", "Tileable Wood", "Pineapple Cut" );

		// Theme Sort By
		$homeland_theme_sort_by = array( "ID", "author", "title", "name", "date", "modified", "parent", "rand", "comment_count", "menu_order" );

		// Advance Search Sort By
		$homeland_advance_search_sort_by = array( "id", "count", "name", "slug", "none" );

		// Theme Options
		$options = array(	

			/*-----------------------
			Theme Settings
			-----------------------*/

			array("name" => __( 'Theme Settings', 'homeland' ), "type" => "top_section"),
			array("type" => "close"),	


			/*-----------------------
			General Settings
			-----------------------*/

			array("name" => __( 'General', 'homeland' ),
				    "type" => "section",
		        "icon" => "fa fa-cog"),

			array("name" => __( 'Main', 'homeland' ), "type" => "headers"), 

			array("name" => __( 'Responsive Layout', 'homeland' ),
					"desc" => __( 'Do you want to disable the responsive style of this theme? then tick the box', 'homeland' ),
					"id" => $shortname."_site_layout",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Favicon', 'homeland' ),
					"desc" => __( 'Upload your favorite icon for your website', 'homeland' ),
					"id" => $shortname."_favicon",
					"type" => "img_preview",
					"std" => ""),
					
			array("name" => __( 'Logo', 'homeland' ),
					"desc" => __( 'Upload your company logo', 'homeland' ),
					"id" => $shortname."_logo",
					"type" => "img_preview",
					"std" => ""),	

			array("name" => __( 'Logo Retina', 'homeland' ),
					"desc" => __( 'Upload your website logo for retina feature (NOTE: you need to upload image with @2x in your filename like this image@2x.jpg)', 'homeland' ),
					"id" => $shortname."_logo_retina",
					"type" => "img_preview",
					"std" => ""),	

			array("name" => __( 'Disable Preloader', 'homeland' ),
					"desc" => __( 'Check the box to disbale preloader', 'homeland' ),
					"id" => $shortname."_disable_preloader",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Preloader Icon', 'homeland' ),
					"desc" => __( 'Upload your preloader icon use when your site is still loading, please upload only .gif extension', 'homeland' ),
					"id" => $shortname."_preloader_icon",
					"type" => "img_preview",
					"std" => ""),

			array("name" => __( 'Map Pointer', 'homeland' ),
					"desc" => __( 'Upload your map pointer icon', 'homeland' ),
					"id" => $shortname."_map_pointer_icon",
					"type" => "img_preview",
					"std" => ""),	

			array("name" => __( 'Map Marker Clusterer', 'homeland' ),
					"desc" => __( 'Upload your map marker clusterer icon', 'homeland' ),
					"id" => $shortname."_map_pointer_clusterer_icon",
					"type" => "img_preview",
					"std" => ""),	

			array("name" => __( 'Styles', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Layout Style', 'homeland' ),
					"desc" => __( 'Select your theme layout style', 'homeland' ),
					"id" => $shortname."_theme_layout",
					"type" => "select",
					"options" => array("Fullwidth", "Boxed", "Boxed Left"),
					"std" => ""),

			array("name" => __( 'Mobile Menu Style', 'homeland' ),
					"desc" => __( 'Select your mobile menu style', 'homeland' ),
					"id" => $shortname."_theme_mobile_menu",
					"type" => "select",
					"options" => array("Classic", "Modern"),
					"std" => ""),

			array("name" => __( 'Paging Style', 'homeland' ),
					"desc" => __( 'Select your theme paging navigation style', 'homeland' ),
					"id" => $shortname."_pnav",
					"type" => "select",
					"options" => array("Pagination", "Next Previous Link"),
					"std" => ""),

			array("name" => __( 'Custom CSS', 'homeland' ),
					"desc" => __( 'Enter your custom CSS tags here', 'homeland' ),
					"id" => $shortname."_custom_css",
					"type" => "textarea",
					"std" => ""),

			array("type" => "close"),

			/*-----------------------
			Typography Settings
			-----------------------*/

			array("name" => __( 'Typography', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-text-height"),

			array("name" => __( 'Main', 'homeland' ), 
					"desc" => __( 'This settings is use for adjusting your font size', 'homeland' ),
					"type" => "headers"),

			array("name" => __( 'Font Family', 'homeland' ),
					"desc" => __( 'Select your theme font family', 'homeland' ),
					"id" => $shortname."_theme_font",
					"type" => "select",
					"options" => $homeland_theme_fonts,
					"std" => ""),

			array("name" => __( 'Body', 'homeland' ),
					"desc" => __( 'Select your value for body font size (pixel)', 'homeland' ),
					"id" => $shortname."_body_font_size",
					"type" => "slide_amount_fonts",
					"std" => "12"),		

			array("name" => __( 'Line Height', 'homeland' ),
					"desc" => __( 'Select your value for body line height (pixel)', 'homeland' ),
					"id" => $shortname."_body_line_height",
					"type" => "slide_amount_fonts",
					"std" => "24"),	

			array("name" => __( 'Homepage Header', 'homeland' ),
					"desc" => __( 'Select your value for homepage header (pixel)', 'homeland' ),
					"id" => $shortname."_homepage_header_font_size",
					"type" => "slide_amount_fonts",
					"std" => "24"),		

			array("name" => __( 'Page Top Header', 'homeland' ),
					"desc" => __( 'Select your value for page top header (pixel)', 'homeland' ),
					"id" => $shortname."_page_top_header_font_size",
					"type" => "slide_amount_fonts",
					"std" => "35"),		

			array("name" => __( 'Page Top Subtitle', 'homeland' ),
					"desc" => __( 'Select your value for page top subtitle (pixel)', 'homeland' ),
					"id" => $shortname."_page_top_subtitle_font_size",
					"type" => "slide_amount_fonts",
					"std" => "12"),

			array("name" => __( 'Page Content Header', 'homeland' ),
					"desc" => __( 'Select your value for page content header (pixel)', 'homeland' ),
					"id" => $shortname."_page_content_header_font_size",
					"type" => "slide_amount_fonts",
					"std" => "22"),

			array("name" => __( 'Sidebar Header', 'homeland' ),
					"desc" => __( 'Select your value for sidebar header (pixel)', 'homeland' ),
					"id" => $shortname."_sidebar_header_font_size",
					"type" => "slide_amount_fonts",
					"std" => "16"),

			array("name" => __( 'Footer Header', 'homeland' ),
					"desc" => __( 'Select your value for footer header (pixel)', 'homeland' ),
					"id" => $shortname."_footer_font_size",
					"type" => "slide_amount_fonts",
					"std" => "20"),

			array("name" => __( 'Color Schemes', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Global Color', 'homeland' ),
					"desc" => __( 'Enter your global color for your theme', 'homeland' ),
					"id" => $shortname."_global_color",
					"type" => "color",
					"std" => ""),	

			array("name" => __( 'Top Header Background', 'homeland' ),
					"desc" => __( 'Enter your top header background color', 'homeland' ),
					"id" => $shortname."_top_header_bg_color",
					"type" => "color",
					"std" => ""),

			array("name" => __( 'Menu Text', 'homeland' ),
					"desc" => __( 'Enter menu text color', 'homeland' ),
					"id" => $shortname."_menu_text_color",
					"type" => "color",
					"std" => ""),	

			array("name" => __( 'Menu Text Current', 'homeland' ),
					"desc" => __( 'Enter menu text color for active and hovered menu', 'homeland' ),
					"id" => $shortname."_menu_text_color_active",
					"type" => "color",
					"std" => ""),	

			array("name" => __( 'Menu Background', 'homeland' ),
					"desc" => __( 'Enter menu background color text when active and hovered', 'homeland' ),
					"id" => $shortname."_menu_bg_color",
					"type" => "color",
					"std" => ""),	

			array("name" => __( 'Headers', 'homeland' ),
					"desc" => __( 'Enter your header text color', 'homeland' ),
					"id" => $shortname."_header_text_color",
					"type" => "color",
					"std" => ""),

			array("name" => __( 'Sidebar Header', 'homeland' ),
					"desc" => __( 'Enter your sidebar header text color', 'homeland' ),
					"id" => $shortname."_sidebar_text_color",
					"type" => "color",
					"std" => ""),

			array("name" => __( 'Button Text', 'homeland' ),
					"desc" => __( 'Enter your button text color', 'homeland' ),
					"id" => $shortname."_button_text_color",
					"type" => "color",
					"std" => ""),

			array("name" => __( 'Button Background', 'homeland' ),
					"desc" => __( 'Enter your button background color', 'homeland' ),
					"id" => $shortname."_button_bg_color",
					"type" => "color",
					"std" => ""),

			array("name" => __( 'Button Hover', 'homeland' ),
					"desc" => __( 'Enter your button hover background color', 'homeland' ),
					"id" => $shortname."_button_bg_hover_color",
					"type" => "color",
					"std" => ""),

			array("name" => __( 'Footer Text', 'homeland' ),
					"desc" => __( 'Enter your footer text color', 'homeland' ),
					"id" => $shortname."_footer_text_color",
					"type" => "color",
					"std" => ""),

			array("name" => __( 'Footer Background', 'homeland' ),
					"desc" => __( 'Enter your footer background color', 'homeland' ),
					"id" => $shortname."_footer_bg_color",
					"type" => "color",
					"std" => ""),

			array("name" => __( 'Sliding Bar', 'homeland' ),
					"desc" => __( 'Enter your top sliding bar background color', 'homeland' ),
					"id" => $shortname."_slide_top_bg_color",
					"type" => "color",
					"std" => ""),

			array("type" => "close"),


			/*-----------------------
			Background Settings
			-----------------------*/

			array("name" => __( 'Background', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-square"),

			array("name" => __( 'Main', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Background Type', 'homeland' ),
					"desc" => __( 'Select the background type you want, either full image or pattern', 'homeland' ),
					"id" => $shortname."_bg_type",
					"type" => "select",
					"options" => array("Image", "Pattern", "Color"),
					"std" => ""),

			array("name" => __( 'Image', 'homeland' ),
					"desc" => __( 'Upload your default background image', 'homeland' ),
					"id" => $shortname."_default_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Pattern', 'homeland' ),
					"desc" => __( 'Select 65 built-in background patterns. You can only use this if you are using Pattern Background Type', 'homeland' ),
					"id" => $shortname."_pattern",
					"type" => "select",
					"options" => $homeland_theme_patterns,
					"std" => ""),

			array("name" => __( 'Color', 'homeland' ),
					"desc" => __( 'Enter your background color for this theme', 'homeland' ),
					"id" => $shortname."_bg_color",
					"type" => "color",
					"std" => ""),	

			array("name" => __( 'Images', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Archive', 'homeland' ),
					"desc" => __( 'Upload archive background image for archive page', 'homeland' ),
					"id" => $shortname."_archive_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Taxonomy', 'homeland' ),
					"desc" => __( 'Upload taxonomy background image for taxonomy page', 'homeland' ),
					"id" => $shortname."_taxonomy_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Agent', 'homeland' ),
					"desc" => __( 'Upload agent background image for agent single page', 'homeland' ),
					"id" => $shortname."_agent_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Search', 'homeland' ),
					"desc" => __( 'Upload search background image for search page', 'homeland' ),
					"id" => $shortname."_search_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Attachment', 'homeland' ),
					"desc" => __( 'Upload attachment background image for attachment page', 'homeland' ),
					"id" => $shortname."_attachment_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( '404 Not Found', 'homeland' ),
					"desc" => __( 'Upload 404 not found background image for 404 page', 'homeland' ),
					"id" => $shortname."_notfound_bgimage",
					"type" => "upload",
					"std" => ""),

			array("type" => "close"),


			/*-----------------------
			Headers Settings
			-----------------------*/

			array("name" => __( 'Headers', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-align-left"),

			array("name" => __( 'Main', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Sticky Header', 'homeland' ),
					"desc" => __( 'Enable Sticky header effect', 'homeland' ),
					"id" => $shortname."_sticky_header",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Top Sliding Bar', 'homeland' ),
					"desc" => __( 'Enable Top Sliding Bar at the top of header', 'homeland' ),
					"id" => $shortname."_enable_slide_bar",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Header Style', 'homeland' ),
					"desc" => __( 'Select your theme header style', 'homeland' ),
					"id" => $shortname."_theme_header",
					"type" => "select",
					"options" => array("Default", "Header 2", "Header 3", "Header 4", "Header 5", "Header 6", "Header 7", "Header 8"),
					"std" => ""),

			array("name" => __( 'Call us', 'homeland' ),
					"desc" => __( 'Add label of your call us', 'homeland' ),
					"id" => $shortname."_call_us_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Hide Page Title and Subtitle', 'homeland' ),
					"desc" => __( 'Check the box to hide page title and subtitle', 'homeland' ),
					"id" => $shortname."_hide_ptitle_stitle",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Buttons', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide Login', 'homeland' ),
					"desc" => __( 'Check the box to hide login button', 'homeland' ),
					"id" => $shortname."_hide_login",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Login', 'homeland' ),
					"desc" => __( 'Add label of your login button', 'homeland' ),
					"id" => $shortname."_login_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Custom Link Login', 'homeland' ),
					"desc" => __( 'Add your custom link for login button', 'homeland' ),
					"id" => $shortname."_login_link",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Logout', 'homeland' ),
					"desc" => __( 'Add label of your logout button, you only see this label if you already logged in', 'homeland' ),
					"id" => $shortname."_logout_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Hide Register', 'homeland' ),
					"desc" => __( 'Check the box to hide register button', 'homeland' ),
					"id" => $shortname."_hide_register",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Register', 'homeland' ),
					"desc" => __( 'Add label of your register button', 'homeland' ),
					"id" => $shortname."_register_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Custom Link Register', 'homeland' ),
					"desc" => __( 'Add your custom link for register button', 'homeland' ),
					"id" => $shortname."_register_link",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Social Icons', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Brand Color', 'homeland' ),
					"desc" => __( 'Enable social color branding', 'homeland' ),
					"id" => $shortname."_brand_color",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'RSS Feed URL', 'homeland' ),
					"desc" => __( 'Enter rss feed link', 'homeland' ),
					"id" => $shortname."_rss",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Twitter ID', 'homeland' ),
					"desc" => __( 'Enter twitter id', 'homeland' ),
					"id" => $shortname."_twitter",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Facebook ID', 'homeland' ),
					"desc" => __( 'Enter facebook id', 'homeland' ),
					"id" => $shortname."_facebook",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Youtube URL', 'homeland' ),
					"desc" => __( 'Enter your youtube profile link', 'homeland' ),
					"id" => $shortname."_youtube",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Pinterest', 'homeland' ),
					"desc" => __( 'Enter your pinterest id', 'homeland' ),
					"id" => $shortname."_pinterest",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'LinkedIn URL', 'homeland' ),
					"desc" => __( 'Enter your linkedin link', 'homeland' ),
					"id" => $shortname."_linkedin",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Dribbble', 'homeland' ),
					"desc" => __( 'Enter your dribbble id', 'homeland' ),
					"id" => $shortname."_dribbble",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Instagram', 'homeland' ),
					"desc" => __( 'Enter your instagram id', 'homeland' ),
					"id" => $shortname."_instagram",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Google Plus URL', 'homeland' ),
					"desc" => __( 'Enter your google plus profile link', 'homeland' ),
					"id" => $shortname."_gplus",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Images', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Check the box to hide header images at the top', 'homeland' ),
					"id" => $shortname."_hide_header_image",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Default', 'homeland' ),
					"desc" => __( 'Upload default header image for entire site', 'homeland' ),
					"id" => $shortname."_default_hdimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Archive', 'homeland' ),
					"desc" => __( 'Upload archive header image for archive page', 'homeland' ),
					"id" => $shortname."_archive_hdimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Taxonomy', 'homeland' ),
					"desc" => __( 'Upload taxonomy header image for taxonomy page', 'homeland' ),
					"id" => $shortname."_taxonomy_hdimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Agent', 'homeland' ),
					"desc" => __( 'Upload header image for agent single page', 'homeland' ),
					"id" => $shortname."_agent_hdimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Search', 'homeland' ),
					"desc" => __( 'Upload search header image for search page', 'homeland' ),
					"id" => $shortname."_search_hdimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Attachment', 'homeland' ),
					"desc" => __( 'Upload attachment header image for attachment page', 'homeland' ),
					"id" => $shortname."_attachment_hdimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( '404 Not Found', 'homeland' ),
					"desc" => __( 'Upload 404 not found header image for 404 page', 'homeland' ),
					"id" => $shortname."_notfound_hdimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Overlay Color', 'homeland' ),
					"desc" => __( 'Select your overlay color for header image', 'homeland' ),
					"id" => $shortname."_header_overlay",
					"type" => "color",
					"std" => ""),

			array("type" => "close"),


			/*-----------------------
			Advance Search Settings
			-----------------------*/

			array("name" => __( 'Advance Search', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-search"),
			
			array("type" => "open"),

			array("name" => __( 'Main', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Disable advance search in all pages, except homepage', 'homeland' ),
					"id" => $shortname."_disable_advance_search",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Hide Map', 'homeland' ),
					"desc" => __( 'Check the box to hide google map in advance search page', 'homeland' ),
					"id" => $shortname."_gmap_search",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Layout', 'homeland' ),
					"desc" => __( 'Select advance search layout for advance search page', 'homeland' ),
					"id" => $shortname."_advance_search_layout",
					"type" => "select",
					"options" => array( 
						__( 'Default', 'homeland' ), 
						"Left Sidebar", 
						"1 Column", 
						"2 Columns", 
						"3 Columns", 
						"4 Columns", 
						"Grid Sidebar", 
						"Grid Left Sidebar"
					),
					"std" => ""),

			array("name" => __( 'Button', 'homeland' ),
					"desc" => __( 'Add search button label in advance search form', 'homeland' ),
					"id" => $shortname."_search_button_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'ID', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide property id textfield in advance search', 'homeland' ),
					"id" => $shortname."_hide_pid",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Label', 'homeland' ),
					"desc" => __( 'Add your property id label', 'homeland' ),
					"id" => $shortname."_pid_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Location', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide location selectbox in advance search', 'homeland' ),
					"id" => $shortname."_hide_location",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Label', 'homeland' ),
					"desc" => __( 'Add your location label', 'homeland' ),
					"id" => $shortname."_location_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Order', 'homeland' ),
					"desc" => __( 'Select your property location order', 'homeland' ),
					"id" => $shortname."_property_location_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),	

			array("name" => __( 'Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter for property location', 'homeland' ),
					"id" => $shortname."_property_location_orderby",
					"type" => "select",
					"options" => $homeland_advance_search_sort_by,
					"std" => ""),

			array("name" => __( 'Status', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide status selectbox in advance search', 'homeland' ),
					"id" => $shortname."_hide_status",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Label', 'homeland' ),
					"desc" => __( 'Add your status label', 'homeland' ),
					"id" => $shortname."_status_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Order', 'homeland' ),
					"desc" => __( 'Select your property status order', 'homeland' ),
					"id" => $shortname."_property_status_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),	

			array("name" => __( 'Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter for property status', 'homeland' ),
					"id" => $shortname."_property_status_orderby",
					"type" => "select",
					"options" => $homeland_advance_search_sort_by,
					"std" => ""),

			array("name" => __( 'Type', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide property type selectbox in advance search', 'homeland' ),
					"id" => $shortname."_hide_property_type",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Label', 'homeland' ),
					"desc" => __( 'Add your property type label', 'homeland' ),
					"id" => $shortname."_property_type_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Order', 'homeland' ),
					"desc" => __( 'Select your property type order', 'homeland' ),
					"id" => $shortname."_property_type_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),	

			array("name" => __( 'Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter for property type', 'homeland' ),
					"id" => $shortname."_property_type_orderby",
					"type" => "select",
					"options" => $homeland_advance_search_sort_by,
					"std" => ""),

			array("name" => __( 'Bedrooms', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide bedrooms selectbox in advance search', 'homeland' ),
					"id" => $shortname."_hide_bed",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Label', 'homeland' ),
					"desc" => __( 'Add your bedrooms label', 'homeland' ),
					"id" => $shortname."_bed_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Selections', 'homeland' ),
					"desc" => __( 'Add your bedrooms selections', 'homeland' ),
					"id" => $shortname."_bed_number",
					"type" => "text",
					"std" => "1, 2, 3"),

			array("name" => __( 'Bathrooms', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide bathrooms selectbox in advance search', 'homeland' ),
					"id" => $shortname."_hide_bath",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Label', 'homeland' ),
					"desc" => __( 'Add your bathrooms label', 'homeland' ),
					"id" => $shortname."_bath_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Selections', 'homeland' ),
					"desc" => __( 'Add your bathrooms selections', 'homeland' ),
					"id" => $shortname."_bath_number",
					"type" => "text",
					"std" => "1, 2, 3"),

			array("name" => __( 'Minimum Price', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide minimum price selectbox in advance search', 'homeland' ),
					"id" => $shortname."_hide_min_price",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Label', 'homeland' ),
					"desc" => __( 'Add your minimum price label', 'homeland' ),
					"id" => $shortname."_min_price_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Price Range', 'homeland' ),
					"desc" => __( 'Add your minimum price values selection', 'homeland' ),
					"id" => $shortname."_min_price_value",
					"type" => "textarea",
					"std" => "5000, 10000, 50000, 100000, 200000, 300000, 400000, 500000, 600000, 700000, 800000, 900000, 1000000, 1500000, 2000000, 2500000, 5000000"),

			array("name" => __( 'Maximum Price', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide maximum price selectbox in advance search', 'homeland' ),
					"id" => $shortname."_hide_max_price",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Label', 'homeland' ),
					"desc" => __( 'Add your maximum price label', 'homeland' ),
					"id" => $shortname."_max_price_label",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Price Range', 'homeland' ),
					"desc" => __( 'Add your maximum price values selection', 'homeland' ),
					"id" => $shortname."_max_price_value",
					"type" => "textarea",
					"std" => "10000, 50000, 100000, 200000, 300000, 400000, 500000, 600000, 700000, 800000, 900000, 1000000, 1500000, 2000000, 2500000, 5000000, 10000000"),

			array("type" => "close"),


			/*-----------------------
			Agents Settings
			-----------------------*/

			array("name" => __( 'Agents', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-group"),
			
			array("type" => "open"),

			array("name" => __( 'Main', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Check the box to hide agents or agency all over the theme', 'homeland' ),
					"id" => $shortname."_all_agents",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Limit', 'homeland' ),
					"desc" => __( 'Enter your agents number of posts limit', 'homeland' ),
					"id" => $shortname."_agent_page_limit",
					"type" => "text",
					"std" => "5"),

			array("name" => __( 'Order', 'homeland' ),
					"desc" => __( 'Select your agent order type', 'homeland' ),
					"id" => $shortname."_agent_page_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),	

			array("name" => __( 'Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter for agents', 'homeland' ),
					"id" => $shortname."_agent_page_orderby",
					"type" => "select",
					"options" => array( "ID", "display_name", "name", "login", "nicename", "email", "url", "registered", "post_count", "meta_value" ),
					"std" => ""),

			array("name" => __( 'Agent Button', 'homeland' ),
					"desc" => __( 'Add label of your agent button', 'homeland' ),
					"id" => $shortname."_agent_button",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Profile', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Enter your agents header in profile page', 'homeland' ),
					"id" => $shortname."_agent_profile_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Subtitle', 'homeland' ),
					"desc" => __( 'Enter your agents subtitle in profile page', 'homeland' ),
					"id" => $shortname."_agent_profile_subtitle",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Layout', 'homeland' ),
					"desc" => __( 'Select your agent profile layout', 'homeland' ),
					"id" => $shortname."_agent_profile_layout",
					"type" => "select",
					"options" => array( __( 'Default', 'homeland' ), "Left Sidebar", "Fullwidth" ),
					"std" => ""),	

			array("name" => __( 'List Header', 'homeland' ),
					"desc" => __( 'Add list header label in your agent profile page', 'homeland' ),
					"id" => $shortname."_agent_list_header",
					"type" => "text",
					"std" => ""),

			array("type" => "close"),


			/*-----------------------
			Footer Settings
			-----------------------*/

			array("name" => __( 'Footer', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-align-justify"),
			
			array("type" => "open"),

			array("name" => __( 'Hide Widgets', 'homeland' ),
					"desc" => __( 'Check the box to hide footer widgets', 'homeland' ),
					"id" => $shortname."_hide_widgets",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Layout', 'homeland' ),
					"desc" => __( 'Select your footer layout style', 'homeland' ),
					"id" => $shortname."_footer_layout",
					"type" => "select",
					"options" => array( 
						__( 'Default', 'homeland' ), 
						"Layout 2", 
						"Layout 3", 
						"Layout 4", 
						"Layout 5",
						"Layout 6", 
					),
					"std" => ""),	

			array("name" => __( 'Copyright Text', 'homeland' ),
					"desc" => __( 'Enter your copyright text here', 'homeland' ),
					"id" => $shortname."_copyright_text",
					"type" => "text",
					"std" => __( 'All Rights Reserved', 'homeland' )),

			array("name" => __( 'Google Analytics Code', 'homeland' ),
					"desc" => __( 'You can paste your Google Analytics or other tracking code in this box', 'homeland' ),
					"id" => $shortname."_ga_code",
					"type" => "textarea",
					"std" => ""),

			array("type" => "close"),


		/*-----------------------
		Theme Pages Settings
		-----------------------*/

		array("name" => __( 'Theme Pages', 'homeland' ), "type" => "top_section"),
		array("type" => "close"),


			/*-----------------------
			Homepage Settings
			-----------------------*/

			array("name" => __( 'Homepage', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-home"),

			array("name" => __( 'Main', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide Advance Search', 'homeland' ),
					"desc" => __( 'Hide Advance Search in homepage', 'homeland' ),
					"id" => $shortname."_hide_advance_search",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Hide Bottom 2 Columns', 'homeland' ),
					"desc" => __( 'Hide the two columns at the bottom', 'homeland' ),
					"id" => $shortname."_hide_two_cols",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Hide Bottom 3 Columns', 'homeland' ),
					"desc" => __( 'Hide the three columns at the bottom', 'homeland' ),
					"id" => $shortname."_hide_three_cols",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Video Url', 'homeland' ),
					"desc" => __( 'Add your video embedded code here (ex. http://player.vimeo.com/video/21942776 and http://youtube.com/embed/68AqHwgk2s8)', 'homeland' ),
					"id" => $shortname."_video_url",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Properties', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide Properties box in homepage', 'homeland' ),
					"id" => $shortname."_hide_properties",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Limit', 'homeland' ),
					"desc" => __( 'Enter your properties number of posts limit', 'homeland' ),
					"id" => $shortname."_property_limit",
					"type" => "text",
					"std" => "6"),

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of your properties', 'homeland' ),
					"id" => $shortname."_property_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Limit Featured', 'homeland' ),
					"desc" => __( 'Enter your properties number of posts limit for featured properties', 'homeland' ),
					"id" => $shortname."_featured_property_limit",
					"type" => "text",
					"std" => "2"),

			array("name" => __( 'Header Featured', 'homeland' ),
					"desc" => __( 'Add header label of your featured properties', 'homeland' ),
					"id" => $shortname."_featured_property_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Portfolio', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide Portfolio in homepage', 'homeland' ),
					"id" => $shortname."_hide_portfolio",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of your portfolio list', 'homeland' ),
					"id" => $shortname."_portfolio_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Limit', 'homeland' ),
					"desc" => __( 'Enter your portfolio number of posts limit', 'homeland' ),
					"id" => $shortname."_portfolio_limit",
					"type" => "text",
					"std" => "6"),

			array("name" => __( 'Order', 'homeland' ),
					"desc" => __( 'Select your portfolio order type', 'homeland' ),
					"id" => $shortname."_portfolio_home_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),	

			array("name" => __( 'Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter for portfolio', 'homeland' ),
					"id" => $shortname."_portfolio_home_orderby",
					"type" => "select",
					"options" => $homeland_theme_sort_by,
					"std" => ""),

			array("name" => __( 'Blog', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Limit', 'homeland' ),
					"desc" => __( 'Enter your blog number of posts limit', 'homeland' ),
					"id" => $shortname."_blog_limit",
					"type" => "text",
					"std" => "3"),

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of your blog list', 'homeland' ),
					"id" => $shortname."_blog_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Category', 'homeland' ),
					"desc" => __( 'Select the category you want to display for blog', 'homeland' ),
					"id" => $shortname."_blog_category",
					"type" => "select",
					"options" => $homeland_blog_category,
					"std" => ""),

			array("name" => __( 'Services', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide Services box in Homepage', 'homeland' ),
					"id" => $shortname."_hide_services",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Limit', 'homeland' ),
					"desc" => __( 'Enter your services number of posts limit', 'homeland' ),
					"id" => $shortname."_services_limit",
					"type" => "text",
					"std" => "3"),

			array("name" => __( 'Background Image', 'homeland' ),
					"desc" => __( 'Upload your services background image', 'homeland' ),
					"id" => $shortname."_services_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Overlay Color', 'homeland' ),
					"desc" => __( 'Select your overlay color for services element', 'homeland' ),
					"id" => $shortname."_services_overlay",
					"type" => "color",
					"std" => ""),

			array("name" => __( 'Partners', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide Partners in homepage', 'homeland' ),
					"id" => $shortname."_hide_partners",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of your partners list', 'homeland' ),
					"id" => $shortname."_partners_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Limit', 'homeland' ),
					"desc" => __( 'Enter your partner number of posts limit', 'homeland' ),
					"id" => $shortname."_partners_limit",
					"type" => "text",
					"std" => "5"),

			array("name" => __( 'Order', 'homeland' ),
					"desc" => __( 'Select your partner order type', 'homeland' ),
					"id" => $shortname."_partner_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),	

			array("name" => __( 'Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter for partner', 'homeland' ),
					"id" => $shortname."_partner_orderby",
					"type" => "select",
					"options" => $homeland_theme_sort_by,
					"std" => ""),

			array("name" => __( 'Background Image', 'homeland' ),
					"desc" => __( 'Upload your partners background image', 'homeland' ),
					"id" => $shortname."_partners_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Overlay Color', 'homeland' ),
					"desc" => __( 'Select your overlay color for partners element', 'homeland' ),
					"id" => $shortname."_partners_overlay",
					"type" => "color",
					"std" => ""),

			array("name" => __( 'Slider', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide Slider Details', 'homeland' ),
					"desc" => __( 'Hide slider details box', 'homeland' ),
					"id" => $shortname."_hide_properties_details",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Description Style', 'homeland' ),
					"desc" => __( 'Select your post slider description type', 'homeland' ),
					"id" => $shortname."_slider_desc_type",
					"type" => "select",
					"options" => array("Default", "Right", "Bottom"),
					"std" => ""),	

			array("name" => __( 'Display List', 'homeland' ),
					"desc" => __( 'Select your post slider display list, default is featured properties', 'homeland' ),
					"id" => $shortname."_slider_display_list",
					"type" => "select",
					"options" => array("Properties", "Featured Properties", "Blog", "Portfolio"),
					"std" => ""),	

			array("name" => __( 'Limit', 'homeland' ),
					"desc" => __( 'Enter your slider number of posts limit', 'homeland' ),
					"id" => $shortname."_slider_limit",
					"type" => "text",
					"std" => "5"),

			array("name" => __( 'Order', 'homeland' ),
					"desc" => __( 'Select your slider order type', 'homeland' ),
					"id" => $shortname."_slider_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),	

			array("name" => __( 'Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter for slider', 'homeland' ),
					"id" => $shortname."_slider_orderby",
					"type" => "select",
					"options" => array( "ID", "author", "title", "name", "date", "modified", "parent", "rand", "comment_count", "menu_order", "price" ),
					"std" => ""),

			array("name" => __( 'Button', 'homeland' ),
					"desc" => __( 'Add label of your slider button', 'homeland' ),
					"id" => $shortname."_slider_button",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Welcome', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide Welcome box in homepage', 'homeland' ),
					"id" => $shortname."_hide_welcome",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Enter your welcome header', 'homeland' ),
					"id" => $shortname."_welcome_header",
					"type" => "text",
					"std" => __( 'Start a good life', 'homeland' )),

			array("name" => __( 'Welcome Text', 'homeland' ),
					"desc" => __( 'Enter your welcome text or paragraph here', 'homeland' ),
					"id" => $shortname."_welcome_text",
					"type" => "textarea",
					"std" => __( 'Our Services go beyond just providing safe, serene and beautiful exclusive house. As an extended service, we also provide house packages that give you access to an array of house designs, suited to a variety of lot sizes and unique family needs', 'homeland' )),

			array("name" => __( 'Button', 'homeland' ),
					"desc" => __( 'Add label of your welcome button', 'homeland' ),
					"id" => $shortname."_welcome_button",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Button Link', 'homeland' ),
					"desc" => __( 'Add link of your welcome button', 'homeland' ),
					"id" => $shortname."_welcome_link",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Background Image', 'homeland' ),
					"desc" => __( 'Upload your welcome background image', 'homeland' ),
					"id" => $shortname."_welcome_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Overlay Color', 'homeland' ),
					"desc" => __( 'Select your overlay color for welcome element', 'homeland' ),
					"id" => $shortname."_welcome_overlay",
					"type" => "color",
					"std" => ""),

			array("name" => __( 'Agent', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Limit', 'homeland' ),
					"desc" => __( 'Enter your agents number of posts limit', 'homeland' ),
					"id" => $shortname."_agent_limit",
					"type" => "text",
					"std" => "3"),

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of your agents list', 'homeland' ),
					"id" => $shortname."_agents_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Order', 'homeland' ),
					"desc" => __( 'Select your agent order type', 'homeland' ),
					"id" => $shortname."_agent_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),	

			array("name" => __( 'Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter for agents', 'homeland' ),
					"id" => $shortname."_agent_orderby",
					"type" => "select",
					"options" => array(
						"ID", "display_name", "name", "login", "nicename", "email", "url", "registered", "post_count", "meta_value"
					),
					"std" => ""),

			array("name" => __( 'Testimonials', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Hide Testimonials box in homepage', 'homeland' ),
					"id" => $shortname."_hide_testimonials",
					"type" => "checkbox",
					"std" => ""),

			array("name" => __( 'Limit', 'homeland' ),
					"desc" => __( 'Enter your testimonials number of posts limit', 'homeland' ),
					"id" => $shortname."_testi_limit",
					"type" => "text",
					"std" => "3"),

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of your testimonials list', 'homeland' ),
					"id" => $shortname."_testi_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Background Image', 'homeland' ),
					"desc" => __( 'Upload your testimonials background image', 'homeland' ),
					"id" => $shortname."_testimonials_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Overlay Color', 'homeland' ),
					"desc" => __( 'Select your overlay color for testimonials element', 'homeland' ),
					"id" => $shortname."_testi_overlay",
					"type" => "color",
					"std" => ""),

			array("name" => __( 'Google Map', 'homeland' ), 
					"desc" => __( 'Get google map latitude and longitude value <a href="http://latlong.net" target="_blank">here</a>', 'homeland' ),
					"type" => "headers"),

			array("name" => __( 'Latitude', 'homeland' ),
					"desc" => __( 'Enter your google map latitude', 'homeland' ),
					"id" => $shortname."_home_map_lat",
					"type" => "text",
					"std" => "37.0625"),

			array("name" => __( 'Longitude', 'homeland' ),
					"desc" => __( 'Enter your google map longitude', 'homeland' ),
					"id" => $shortname."_home_map_lng",
					"type" => "text",
					"std" => "-95.677068"),

			array("name" => __( 'Map Zoom', 'homeland' ),
					"desc" => __( 'Select your value for map zoom from 1-20', 'homeland' ),
					"id" => $shortname."_home_map_zoom",
					"type" => "slide_amount",
					"std" => "8"),		

			array("type" => "close"),


			/*-----------------------
			Property Settings
			-----------------------*/

			array("name" => __( 'Properties', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-th"),

			array("name" => __( 'Currency', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Currency Sign', 'homeland' ),
					"desc" => __( 'Global - Currency for properties', 'homeland' ),
					"id" => $shortname."_property_currency",
					"type" => "text",
					"std" => ""),	

			array("name" => __( 'Price Format', 'homeland' ),
					"desc" => __( 'Global - Price Format for property', 'homeland' ),
					"id" => $shortname."_price_format",
					"type" => "select",
					"options" => array("Comma", "Dot", "Europe", "Brazil", "None"),
					"std" => ""),	

			array("name" => __( 'Position of Currency Sign', 'homeland' ),
					"desc" => __( 'Select your currency position sign in property price', 'homeland' ),
					"id" => $shortname."_property_currency_sign",
					"type" => "select",
					"options" => array("Before", "After"),
					"std" => ""),	

			array("name" => __( 'Decimal', 'homeland' ),
					"desc" => __( 'Global - Decimal number to be display for property price', 'homeland' ),
					"id" => $shortname."_property_decimal",
					"type" => "text",
					"std" => ""),	

			array("name" => __( 'Main', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Hide Map', 'homeland' ),
					"desc" => __( 'Check the box to hide list property map', 'homeland' ),
					"id" => $shortname."_hide_map_list",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Limit', 'homeland' ),
					"desc" => __( 'Global - Posts per page for properties', 'homeland' ),
					"id" => $shortname."_num_properties",
					"type" => "text",
					"std" => "10"),	

			array("name" => __( 'Order', 'homeland' ),
					"desc" => __( 'Select your ordering parameter in properties album', 'homeland' ),
					"id" => $shortname."_album_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),

			array("name" => __( 'Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter in properties album', 'homeland' ),
					"id" => $shortname."_album_orderby",
					"type" => "select",
					"options" => $homeland_theme_sort_by,
					"std" => "menu_order"),

			array("name" => __( 'Hide Excerpt', 'homeland' ),
					"desc" => __( 'Check the box to hide property excerpt, this will hide all property excerpt including in homepage and other pages', 'homeland' ),
					"id" => $shortname."_property_excerpt",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Button', 'homeland' ),
					"desc" => __( 'Add label of your property list read more', 'homeland' ),
					"id" => $shortname."_property_button",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Filter Sort By', 'homeland' ),
					"desc" => __( 'Select your filter default', 'homeland' ),
					"id" => $shortname."_filter_default",
					"type" => "select",
					"options" => array( "Date", "Name", "Price", "Random" ),
					"std" => ""),	

			array("name" => __( 'Preferred Size', 'homeland' ),
					"desc" => __( 'Select your preferred size to be display as default', 'homeland' ),
					"id" => $shortname."_preferred_size",
					"type" => "select",
					"options" => array( "Lot Area", "Floor Area" ),
					"std" => ""),	

			array("name" => __( 'Single Post', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Layout', 'homeland' ),
					"desc" => __( 'Select your property single page layout', 'homeland' ),
					"id" => $shortname."_single_property_layout",
					"type" => "select",
					"options" => array( __( 'Default', 'homeland' ) , "Left Sidebar", "Fullwidth"),
					"std" => ""),	

			array("name" => __( 'Featured Image', 'homeland' ),
					"desc" => __( 'Check the box to exclude featured image in properties slider', 'homeland' ),
					"id" => $shortname."_properties_thumb_slider",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Attachment Order', 'homeland' ),
					"desc" => __( 'Select your ordering parameter in properties page for slider attachment images', 'homeland' ),
					"id" => $shortname."_attachment_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),

			array("name" => __( 'Attachment Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter in properties page for slider attachment images', 'homeland' ),
					"id" => $shortname."_attachment_orderby",
					"type" => "select",
					"options" => $homeland_theme_sort_by,
					"std" => "menu_order"),

			array("name" => __( 'Amenities Header', 'homeland' ),
					"desc" => __( 'Add header label of your property amenities', 'homeland' ),
					"id" => $shortname."_property_amenities_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Clickable Amenities List', 'homeland' ),
					"desc" => __( 'Check the box for clickable amenities list', 'homeland' ),
					"id" => $shortname."_clickable_amenities",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Hide Map', 'homeland' ),
					"desc" => __( 'Check the box to hide property map', 'homeland' ),
					"id" => $shortname."_hide_map",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Show Street View', 'homeland' ),
					"desc" => __( 'Check the box to show map street view', 'homeland' ),
					"id" => $shortname."_show_street_view",
					"type" => "checkbox",
					"std" => ""),		

			array("name" => __( 'Map Header', 'homeland' ),
					"desc" => __( 'Add header label of your property map', 'homeland' ),
					"id" => $shortname."_property_map_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Hide Agent Details', 'homeland' ),
					"desc" => __( 'Check the box to hide agent details information', 'homeland' ),
					"id" => $shortname."_agent_info",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Agent Form', 'homeland' ),
					"desc" => __( 'Add header label of your agent contact form', 'homeland' ),
					"id" => $shortname."_agent_form",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Hide Other Properties', 'homeland' ),
					"desc" => __( 'Check the box to hide other properties', 'homeland' ),
					"id" => $shortname."_other_properties",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Limit Other Properties', 'homeland' ),
					"desc" => __( 'Enter your other properties number of posts', 'homeland' ),
					"id" => $shortname."_other_property_limit",
					"type" => "text",
					"std" => "3"),

			array("name" => __( 'Other Properties', 'homeland' ),
					"desc" => __( 'Add header label of your other properties', 'homeland' ),
					"id" => $shortname."_other_properties_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Hide Comments', 'homeland' ),
					"desc" => __( 'Check the box to hide property comments', 'homeland' ),
					"id" => $shortname."_hide_property_comments",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Archive', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Taxonomy and Archive Layout', 'homeland' ),
					"desc" => __( 'Select your taxonomy and archive layout style', 'homeland' ),
					"id" => $shortname."_tax_layout",
					"type" => "select",
					"options" => array( 
						__( 'Default', 'homeland' ), 
						"Left Sidebar", 
						"1 Column", 
						"2 Columns", 
						"3 Columns", 
						"4 Columns", 
						"Grid Sidebar", 
						"Grid Left Sidebar"
					),
					"std" => ""),	

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of your property archive page', 'homeland' ),
					"id" => $shortname."_property_archive_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Subtitle', 'homeland' ),
					"desc" => __( 'Add subtitle label of your property archive page', 'homeland' ),
					"id" => $shortname."_property_archive_subtitle",
					"type" => "text",
					"std" => ""),

			array("type" => "close"),


			/*-----------------------
			Blog Settings
			-----------------------*/

			array("name" => __( 'Blog', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-pencil"),
			
			array("type" => "open"),

			array("name" => __( 'Main', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Button', 'homeland' ),
					"desc" => __( 'Add label of your blog learn more button', 'homeland' ),
					"id" => $shortname."_blog_button",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Excerpt', 'homeland' ),
					"desc" => __( 'Check the box to enable the_excerpt of blog post', 'homeland' ),
					"id" => $shortname."_blog_excerpt",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Archive Layout', 'homeland' ),
					"desc" => __( 'Select your archive layout style', 'homeland' ),
					"id" => $shortname."_archive_layout",
					"type" => "select",
					"options" => array( 
						__( 'Default', 'homeland' ), 
						"Left Sidebar",
						"List Alternate",
						"Grid", 
						"Grid Left Sidebar", 
						"2 Columns",
						"3 Columns", 
						"4 Columns", 
						"Fullwidth", 
						"Timeline"
					),
					"std" => ""),	

			array("name" => __( 'Single Post', 'homeland' ), "type" => "headers"),	

			array("name" => __( 'Layout', 'homeland' ),
					"desc" => __( 'Select your blog single page layout', 'homeland' ),
					"id" => $shortname."_single_blog_layout",
					"type" => "select",
					"options" => array( __( 'Default', 'homeland' ) , "Left Sidebar", "Fullwidth"),
					"std" => ""),		

			array("name" => __( 'Thumbnail Slider', 'homeland' ),
					"desc" => __( 'Check the box to exclude post thumbnail in blog slider', 'homeland' ),
					"id" => $shortname."_blog_thumb_slider",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Attachment Order', 'homeland' ),
					"desc" => __( 'Select your order parameter in blog single page for slider attachment images', 'homeland' ),
					"id" => $shortname."_blog_attachment_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),

			array("name" => __( 'Attachment Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter in blog single page for slider attachment images', 'homeland' ),
					"id" => $shortname."_blog_attachment_orderby",
					"type" => "select",
					"options" => $homeland_theme_sort_by,
					"std" => "menu_order"),

			array("name" => __( 'Hide Author', 'homeland' ),
					"desc" => __( 'Check the box to hide blog author details', 'homeland' ),
					"id" => $shortname."_blog_author_hide",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Hide Comments', 'homeland' ),
					"desc" => __( 'Check the box to hide blog comments', 'homeland' ),
					"id" => $shortname."_hide_blog_comments",
					"type" => "checkbox",
					"std" => ""),	

			array("type" => "close"),


			/*-----------------------
			Portfolio Settings
			-----------------------*/

			array("name" => __( 'Portfolio', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-laptop"),
			
			array("type" => "open"),

			array("name" => __( 'Main', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Limit', 'homeland' ),
					"desc" => __( 'Global - Posts per page for portfolio', 'homeland' ),
					"id" => $shortname."_num_portfolio",
					"type" => "text",
					"std" => "10"),	

			array("name" => __( 'Order', 'homeland' ),
					"desc" => __( 'Select your ordering parameter in portfolio album', 'homeland' ),
					"id" => $shortname."_portfolio_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),

			array("name" => __( 'Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter in portfolio album', 'homeland' ),
					"id" => $shortname."_portfolio_orderby",
					"type" => "select",
					"options" => $homeland_theme_sort_by,
					"std" => "menu_order"),

			array("name" => __( 'Single Post', 'homeland' ), "type" => "headers"),		

			array("name" => __( 'Layout', 'homeland' ),
					"desc" => __( 'Select your portfolio single page layout', 'homeland' ),
					"id" => $shortname."_single_portfolio_layout",
					"type" => "select",
					"options" => array( 
						__( 'Default', 'homeland' ), 
						"Right Sidebar", 
						"Left Sidebar"
					),
					"std" => ""),

			array("name" => __( 'Static Images', 'homeland' ),
					"desc" => __( 'Check the box to enable static images without a slider', 'homeland' ),
					"id" => $shortname."_portfolio_static_image",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Attachment Order', 'homeland' ),
					"desc" => __( 'Select your order parameter in portfolio single page for slider attachment images', 'homeland' ),
					"id" => $shortname."_portfolio_attachment_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),

			array("name" => __( 'Attachment Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter in portfolio single page for slider attachment images', 'homeland' ),
					"id" => $shortname."_portfolio_attachment_orderby",
					"type" => "select",
					"options" => $homeland_theme_sort_by,
					"std" => "menu_order"),

			array("name" => __( 'Archive', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Taxonomy and Archive Layout', 'homeland' ),
					"desc" => __( 'Select your taxonomy and archive layout style', 'homeland' ),
					"id" => $shortname."_portfolio_tax_layout",
					"type" => "select",
					"options" => array( 
						__( 'Default', 'homeland' ), 
						"Right Sidebar", 
						"Left Sidebar"
					),
					"std" => ""),

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of your portfolio archive page', 'homeland' ),
					"id" => $shortname."_portfolio_archive_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Subtitle', 'homeland' ),
					"desc" => __( 'Add subtitle label of your portfolio archive page', 'homeland' ),
					"id" => $shortname."_portfolio_archive_subtitle",
					"type" => "text",
					"std" => ""),

			array("type" => "close"),


			/*-----------------------
			Services Settings
			-----------------------*/

			array("name" => __( 'Services', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-gears"),

			array("type" => "open"),

			array("name" => __( 'Main', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Limit', 'homeland' ),
					"desc" => __( 'Global - Posts per page for services', 'homeland' ),
					"id" => $shortname."_num_services",
					"type" => "text",
					"std" => "10"),	

			array("name" => __( 'Order', 'homeland' ),
					"desc" => __( 'Select your services order type', 'homeland' ),
					"id" => $shortname."_services_order",
					"type" => "select",
					"options" => array("DESC", "ASC"),
					"std" => ""),	

			array("name" => __( 'Sort By', 'homeland' ),
					"desc" => __( 'Select your sort by parameter for services', 'homeland' ),
					"id" => $shortname."_services_orderby",
					"type" => "select",
					"options" => $homeland_theme_sort_by,
					"std" => ""),

			array("name" => __( 'Button', 'homeland' ),
					"desc" => __( 'Add label of your services read more button', 'homeland' ),
					"id" => $shortname."_services_button",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Link Target', 'homeland' ),
					"desc" => __( 'Add your services link target for custom link', 'homeland' ),
					"id" => $shortname."_services_link_target",
					"type" => "select",
					"options" => array("_self", "_blank", "_parent", "_top"),
					"std" => ""),

			array("name" => __( 'Single Post', 'homeland' ), "type" => "headers"),	

			array("name" => __( 'Layout', 'homeland' ),
					"desc" => __( 'Select your single services layout', 'homeland' ),
					"id" => $shortname."_services_single_layout",
					"type" => "select",
					"options" => array( __( 'Default', 'homeland' ), "Left Sidebar", "Fullwidth"),
					"std" => ""),	

			array("name" => __( 'Archive', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Layout', 'homeland' ),
					"desc" => __( 'Select your services archive layout', 'homeland' ),
					"id" => $shortname."_services_archive_layout",
					"type" => "select",
					"options" => array( __( 'Default', 'homeland' ), "Left Sidebar", "Fullwidth", "Grid Fullwidth"),
					"std" => ""),	

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of your services archive page', 'homeland' ),
					"id" => $shortname."_services_archive_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Subtitle', 'homeland' ),
					"desc" => __( 'Add subtitle label of your services archive page', 'homeland' ),
					"id" => $shortname."_services_archive_subtitle",
					"type" => "text",
					"std" => ""),

			array("type" => "close"),


			/*-----------------------
			Contact Settings
			-----------------------*/

			array("name" => __( 'Contact', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-phone-square"),
			
			array("type" => "open"),

			array("name" => __( 'Main', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Email', 'homeland' ),
					"desc" => __( 'Enter your email address here', 'homeland' ),
					"id" => $shortname."_email_address",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Fax', 'homeland' ),
					"desc" => __( 'Enter your fax number here', 'homeland' ),
					"id" => $shortname."_fax",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Phone Number', 'homeland' ),
					"desc" => __( 'Enter your company phone number', 'homeland' ),
					"id" => $shortname."_phone_number",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Address', 'homeland' ),
					"desc" => __( 'Enter your company complete address', 'homeland' ),
					"id" => $shortname."_contact_address",
					"type" => "textarea",
					"std" => ""),

			array("name" => __( 'Working Hours', 'homeland' ),
					"desc" => __( 'Enter your company working hours', 'homeland' ),
					"id" => $shortname."_working_hours",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Alternate Background', 'homeland' ),
					"desc" => __( 'Upload your contact us alternate background image', 'homeland' ),
					"id" => $shortname."_contact_alt_bgimage",
					"type" => "upload",
					"std" => ""),	

			array("name" => __( 'Google Map', 'homeland' ), 
					"desc" => __( 'Get google map latitude and longitude value <a href="http://latlong.net" target="_blank">here</a>', 'homeland' ),
					"type" => "headers"),

			array("name" => __( 'Hide', 'homeland' ),
					"desc" => __( 'Check the box to hide google map', 'homeland' ),
					"id" => $shortname."_hide_gmap",
					"type" => "checkbox",
					"std" => ""),	

			array("name" => __( 'Latitude', 'homeland' ),
					"desc" => __( 'Enter your google map latitude', 'homeland' ),
					"id" => $shortname."_map_lat",
					"type" => "text",
					"std" => "37.0625"),

			array("name" => __( 'Longitude', 'homeland' ),
					"desc" => __( 'Enter your google map longitude', 'homeland' ),
					"id" => $shortname."_map_lng",
					"type" => "text",
					"std" => "-95.677068"),

			array("name" => __( 'Map Zoom', 'homeland' ),
					"desc" => __( 'Select your value for map zoom from 1-20', 'homeland' ),
					"id" => $shortname."_map_zoom",
					"type" => "slide_amount",
					"std" => "8"),		

			array("type" => "close"),


			/*-----------------------
			Other Pages Settings
			-----------------------*/

			array("name" => __( 'Other Pages', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-folder"),
			
			array("type" => "open"),

			array("name" => __( 'About', 'homeland' ), "type" => "headers"),

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of our team', 'homeland' ),
					"id" => $shortname."_team_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( '404 Page', 'homeland' ), "type" => "headers"),		

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of your 404 page', 'homeland' ),
					"id" => $shortname."_not_found_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Subtitle', 'homeland' ),
					"desc" => __( 'Add subtitle label of your 404 page', 'homeland' ),
					"id" => $shortname."_not_found_subtitle",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Content Header', 'homeland' ),
					"desc" => "Add your 404 large text",
					"id" => $shortname."_not_found_large_text",
					"type" => "text",
					"std" => __( 'Error <span>404</span>', 'homeland' )),

			array("name" => __( 'Content Subtitle', 'homeland' ),
					"desc" => __( 'Add your 404 small text', 'homeland' ),
					"id" => $shortname."_not_found_small_text",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Button', 'homeland' ),
					"desc" => __( 'Add your 404 button', 'homeland' ),
					"id" => $shortname."_not_found_button",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Search', 'homeland' ), "type" => "headers"),		

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of your search results page', 'homeland' ),
					"id" => $shortname."_search_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Subtitle', 'homeland' ),
					"desc" => __( 'Add subtitle label of your search results page', 'homeland' ),
					"id" => $shortname."_search_subtitle",
					"type" => "text",
					"std" => ""),

			array("type" => "close"),


			/*-----------------------
			Forum Settings
			-----------------------*/

			array("name" => __( 'Forum', 'homeland' ),
					"type" => "section",
					"icon" => "fa fa-comments"),

			array("name" => __( 'Main', 'homeland' ), "type" => "headers"),		

			array("name" => __( 'Header', 'homeland' ),
					"desc" => __( 'Add header label of your forum page', 'homeland' ),
					"id" => $shortname."_forum_header",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Subtitle', 'homeland' ),
					"desc" => __( 'Add subtitle label of your forum page', 'homeland' ),
					"id" => $shortname."_forum_subtitle",
					"type" => "text",
					"std" => ""),

			array("name" => __( 'Header Images', 'homeland' ), "type" => "headers"),	

			array("name" => __( 'Forum', 'homeland' ),
					"desc" => __( 'Upload your forum header image', 'homeland' ),
					"id" => $shortname."_forum_hdimage",
					"type" => "upload",
					"std" => ""),	

			array("name" => __( 'Single Forum', 'homeland' ),
					"desc" => __( 'Upload your single forum header image', 'homeland' ),
					"id" => $shortname."_forum_single_hdimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Single Topic', 'homeland' ),
					"desc" => __( 'Upload your forum single topic header image', 'homeland' ),
					"id" => $shortname."_forum_single_topic_hdimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Topic Edit', 'homeland' ),
					"desc" => __( 'Upload your forum topic edit header image', 'homeland' ),
					"id" => $shortname."_forum_topic_edit_hdimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Forum Search', 'homeland' ),
					"desc" => __( 'Upload your forum search header image', 'homeland' ),
					"id" => $shortname."_forum_search_hdimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'User Profile', 'homeland' ),
					"desc" => __( 'Upload your user profile header image', 'homeland' ),
					"id" => $shortname."_user_profile_hdimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Background Images', 'homeland' ), "type" => "headers"),	

			array("name" => __( 'Forum', 'homeland' ),
					"desc" => __( 'Upload your forum background image', 'homeland' ),
					"id" => $shortname."_forum_bgimage",
					"type" => "upload",
					"std" => ""),	

			array("name" => __( 'Single Forum', 'homeland' ),
					"desc" => __( 'Upload your single forum background image', 'homeland' ),
					"id" => $shortname."_forum_single_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Single Topic', 'homeland' ),
					"desc" => __( 'Upload your forum single topic background image', 'homeland' ),
					"id" => $shortname."_forum_single_topic_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Topic Edit', 'homeland' ),
					"desc" => __( 'Upload your forum topic edit background image', 'homeland' ),
					"id" => $shortname."_forum_topic_edit_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'Forum Search', 'homeland' ),
					"desc" => __( 'Upload your forum search background image', 'homeland' ),
					"id" => $shortname."_forum_search_bgimage",
					"type" => "upload",
					"std" => ""),

			array("name" => __( 'User Profile', 'homeland' ),
					"desc" => __( 'Upload your user profile background image', 'homeland' ),
					"id" => $shortname."_user_profile_bgimage",
					"type" => "upload",
					"std" => ""),

			array("type" => "close"),
		
		); 
	}

	add_action('init', 'homeland_options_setup');
?>