
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `wpqp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpqp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_value` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpqp_usermeta` WRITE;
/*!40000 ALTER TABLE `wpqp_usermeta` DISABLE KEYS */;
INSERT INTO `wpqp_usermeta` VALUES (1,1,'nickname','nstudios'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'comment_shortcuts','false'),(7,1,'admin_color','fresh'),(8,1,'use_ssl','0'),(9,1,'show_admin_bar_front','true'),(10,1,'wpqp_capabilities','a:2:{s:13:\"administrator\";b:1;s:13:\"bbp_keymaster\";b:1;}'),(11,1,'wpqp_user_level','10'),(12,1,'dismissed_wp_pointers','vc_pointers_backend_editor'),(13,1,'show_welcome_panel','0'),(14,1,'session_tokens','a:1:{s:64:\"7998277fb292b2549d35bc436e077ac7d8d8e1a53fce6d623d8ceeaebb4d32fb\";a:4:{s:10:\"expiration\";i:1467502537;s:2:\"ip\";s:13:\"50.148.233.78\";s:2:\"ua\";s:109:\"Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36\";s:5:\"login\";i:1467329737;}}'),(15,1,'wpqp_dashboard_quick_press_last_post_id','1383'),(16,1,'nav_menu_recently_edited','61'),(17,1,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),(18,1,'metaboxhidden_nav-menus','a:10:{i:0;s:19:\"add-post-type-agent\";i:1;s:22:\"add-post-type-property\";i:2;s:22:\"add-post-type-partners\";i:3;s:19:\"add-post-type-slide\";i:4;s:12:\"add-post_tag\";i:5;s:15:\"add-post_format\";i:6;s:20:\"add-property-feature\";i:7;s:17:\"add-property-type\";i:8;s:17:\"add-property-city\";i:9;s:19:\"add-property-status\";}'),(19,1,'wpqp_user-settings','editor=tinymce&post_dfw=off&hidetb=1&editor_plain_text_paste_warning=2&libraryContent=browse&edit_element_vcUIPanelWidth=650&edit_element_vcUIPanelLeft=953px&edit_element_vcUIPanelTop=74px&imgsize=thumbnail'),(20,1,'wpqp_user-settings-time','1466778618'),(21,2,'nickname','Dorsee'),(22,2,'first_name','Chris'),(23,2,'last_name','Anderson'),(24,2,'description','Chris Anderson is the President and CEO of Vinehurst, one of the leading M&amp;A Advisory Firms in the United States. Under Chris’s leadership, Vinehurst has been recognized as an ultra exclusive, highly-experienced, brokerage firm.\r\n\r\nChris has been an active member in the M&amp;A Industry for over 15 years. He also is a proud member of IBBA, the International Business Brokers Association.\r\n\r\nChris is known notably for his passion for getting the deal done.  Acting on his passion, Chris has closed over 1000 transactions over his distinguished career.\r\n\r\nIn his spare time, he is involved with numerous charitable activities and considers his greatest achievement to be the fact that his wife, Amanda, agreed to marry him in 2015. They have 2 beautiful children and live in a beautiful suburb outside of Minneapolis.\r\n\r\nSpecialties: Business Sales,Tech Development, Marketing, Management, Retail, Medical, and Overseas deal-making.'),(25,2,'rich_editing','true'),(26,2,'comment_shortcuts','false'),(27,2,'admin_color','fresh'),(28,2,'use_ssl','0'),(29,2,'show_admin_bar_front','true'),(30,2,'wpqp_capabilities','a:1:{s:11:\"contributor\";b:1;}'),(31,2,'wpqp_user_level','1'),(32,2,'dismissed_wp_pointers',''),(33,2,'default_password_nag',''),(52,1,'screen_layout_page','2'),(35,2,'wpqp_dashboard_quick_press_last_post_id','1381'),(36,2,'meta-box-order_property','a:3:{s:4:\"side\";s:109:\"submitdiv,property-featurediv,property-typediv,property-citydiv,property-statusdiv,pageparentdiv,postimagediv\";s:6:\"normal\";s:114:\"property-meta-box,postexcerpt,authordiv,slugdiv,additional-details-meta-box,payment-meta-box,mymetabox_revslider_0\";s:8:\"advanced\";s:0:\"\";}'),(37,2,'screen_layout_property','2'),(38,2,'wpqp_user-settings','editor=tinymce&hidetb=1&libraryContent=browse'),(39,2,'wpqp_user-settings-time','1466447884'),(40,1,'closedpostboxes_property','a:0:{}'),(41,1,'metaboxhidden_property','a:1:{i:0;s:7:\"slugdiv\";}'),(46,1,'meta-box-order_dashboard','a:4:{s:6:\"normal\";s:38:\"dashboard_right_now,dashboard_activity\";s:4:\"side\";s:18:\"rg_forms_dashboard\";s:7:\"column3\";s:0:\"\";s:7:\"column4\";s:39:\"dashboard_primary,dashboard_quick_press\";}'),(47,1,'closedpostboxes_dashboard','a:2:{i:0;s:21:\"dashboard_quick_press\";i:1;s:17:\"dashboard_primary\";}'),(48,1,'metaboxhidden_dashboard','a:0:{}'),(51,1,'meta-box-order_page','a:3:{s:4:\"side\";s:36:\"submitdiv,pageparentdiv,postimagediv\";s:6:\"normal\";s:96:\"wpb_visual_composer,homeland_page_menu,postcustom,commentstatusdiv,commentsdiv,slugdiv,authordiv\";s:8:\"advanced\";s:0:\"\";}'),(44,2,'closedpostboxes_property','a:0:{}'),(45,2,'metaboxhidden_property','a:1:{i:0;s:7:\"slugdiv\";}'),(50,1,'tgmpa_dismissed_notice_tgmpa','1'),(53,1,'wpqp_recently_edited_template','499'),(54,2,'homeland_custom_avatar','http://dev.vinehurst.com/wp-content/uploads/2013/08/VineHurst-Agent.jpeg'),(55,2,'homeland_designation',''),(56,2,'homeland_twitter',''),(57,2,'homeland_facebook',''),(58,2,'homeland_gplus',''),(59,2,'homeland_linkedin',''),(60,2,'homeland_telno',''),(61,2,'homeland_mobile','000-000-0000'),(62,2,'homeland_fax',''),(63,2,'session_tokens','a:1:{s:64:\"50e86047b6971365f2197ab1ff3d40a632688851fc5bd85d86bf86d2decd2264\";a:4:{s:10:\"expiration\";i:1467900105;s:2:\"ip\";s:13:\"75.73.200.188\";s:2:\"ua\";s:127:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586\";s:5:\"login\";i:1466690505;}}'),(64,2,'meta-box-order_homeland_properties','a:3:{s:4:\"side\";s:151:\"submitdiv,homeland_property_typediv,homeland_property_statusdiv,homeland_property_locationdiv,homeland_property_amenitiesdiv,pageparentdiv,postimagediv\";s:6:\"normal\";s:91:\"postexcerpt,homeland_authordiv,commentstatusdiv,homeland_properties_meta,postcustom,slugdiv\";s:8:\"advanced\";s:0:\"\";}'),(65,2,'screen_layout_homeland_properties','2');
/*!40000 ALTER TABLE `wpqp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

