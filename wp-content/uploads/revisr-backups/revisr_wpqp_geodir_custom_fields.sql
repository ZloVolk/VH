DROP TABLE IF EXISTS `wpqp_geodir_custom_fields`;
CREATE TABLE `wpqp_geodir_custom_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'text,checkbox,radio,select,textarea',
  `admin_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_desc` text COLLATE utf8mb4_unicode_ci,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `htmlvar_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_value` text COLLATE utf8mb4_unicode_ci,
  `sort_order` int(11) NOT NULL,
  `option_values` text COLLATE utf8mb4_unicode_ci,
  `clabels` text COLLATE utf8mb4_unicode_ci,
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `is_default` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_admin` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_required` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `required_msg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_on_listing` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `show_on_detail` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `show_as_tab` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `for_admin_use` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `packages` text COLLATE utf8mb4_unicode_ci,
  `cat_sort` text COLLATE utf8mb4_unicode_ci,
  `cat_filter` text COLLATE utf8mb4_unicode_ci,
  `extra_fields` text COLLATE utf8mb4_unicode_ci,
  `field_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decimal_point` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validation_pattern` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validation_msg` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_geodir_custom_fields` WRITE;
INSERT INTO `wpqp_geodir_custom_fields` VALUES ('1','gd_place','VARCHAR','taxonomy','Category','SELECT listing category FROM here. SELECT at least one CATEGORY','Category','gd_placecategory','','1','','Category','1','1','1','1','','','','','','0','','','','','','','',''), ('2','gd_place','','address','Address','Please enter listing address. eg. : 230 Vine Street','Address','post','','2','','Address','1','1','1','1','Address fields are required','','','','','0','','','a:15:{s:9:\"show_city\";i:1;s:10:\"city_lable\";s:4:\"City\";s:11:\"show_region\";i:1;s:12:\"region_lable\";s:6:\"Region\";s:12:\"show_country\";i:1;s:13:\"country_lable\";s:7:\"Country\";s:8:\"show_zip\";i:1;s:9:\"zip_lable\";s:13:\"Zip/Post Code\";s:8:\"show_map\";i:1;s:9:\"map_lable\";s:18:\"Set Address On Map\";s:12:\"show_mapview\";i:1;s:13:\"mapview_lable\";s:15:\"Select Map View\";s:12:\"show_mapzoom\";i:1;s:13:\"mapzoom_lable\";s:6:\"hidden\";s:11:\"show_latlng\";i:1;}','','','','',''), ('3','gd_place','VARCHAR','text','Time','Enter Business or Listing Timing Information.<br/>eg. : 10.00 am to 6 pm every day','Time','geodir_timing','','3','','Time','1','1','1','0','','','','','','0','','','','','','','',''), ('4','gd_place','VARCHAR','phone','Phone','You can enter phone number,cell phone number etc.','Phone','geodir_contact','','4','','Phone','1','1','1','0','','','','','','0','','','','','','','',''), ('5','gd_place','VARCHAR','email','Email','You can enter your business or listing email.','Email','geodir_email','','5','','Email','1','1','1','0','','','','','','0','','','','','','','',''), ('6','gd_place','TEXT','url','Website','You can enter your business or listing website.','Website','geodir_website','','6','','Website','1','1','1','0','','','','','','0','','','','','','','',''), ('7','gd_place','TEXT','url','Twitter','You can enter your business or listing twitter url.','Twitter','geodir_twitter','','7','','Twitter','1','1','1','0','','','','','','0','','','','','','','',''), ('8','gd_place','TEXT','url','Facebook','You can enter your business or listing facebook url.','Facebook','geodir_facebook','','8','','Facebook','1','1','1','0','','','','','','0','','','','','','','',''), ('9','gd_place','TEXT','textarea','Video','Add video code here, YouTube etc.','Video','geodir_video','','9','','Video','1','0','1','0','','','','','','0','','','','','','','',''), ('10','gd_place','TEXT','textarea','Special Offers','Note: List out any special offers (optional)','Special Offers','geodir_special_offers','','10','','Special Offers','1','0','1','0','','','','','','0','','','','','','','','');
UNLOCK TABLES;
