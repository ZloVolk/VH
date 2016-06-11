DROP TABLE IF EXISTS `wpui_usermeta`;
CREATE TABLE `wpui_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpui_usermeta` WRITE;
INSERT INTO `wpui_usermeta` VALUES ('1','1','nickname','nstudios'), ('2','1','first_name',''), ('3','1','last_name',''), ('4','1','description',''), ('5','1','rich_editing','true'), ('6','1','comment_shortcuts','false'), ('7','1','admin_color','fresh'), ('8','1','use_ssl','0'), ('9','1','show_admin_bar_front','true'), ('10','1','wpui_capabilities','a:1:{s:13:\"administrator\";b:1;}'), ('11','1','wpui_user_level','10'), ('12','1','dismissed_wp_pointers',''), ('13','1','show_welcome_panel','1'), ('14','1','session_tokens','a:1:{s:64:\"f158cf874528a024425b04bc89231288961961a525ec12dbd9396da2891be919\";a:4:{s:10:\"expiration\";i:1465853958;s:2:\"ip\";s:13:\"50.148.233.78\";s:2:\"ua\";s:108:\"Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36\";s:5:\"login\";i:1465681158;}}'), ('15','1','wpui_user-settings','libraryContent=browse'), ('16','1','wpui_user-settings-time','1465334383'), ('17','1','wpui_dashboard_quick_press_last_post_id','3'), ('18','1','managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'), ('19','1','metaboxhidden_nav-menus','a:10:{i:0;s:19:\"add-post-type-agent\";i:1;s:22:\"add-post-type-property\";i:2;s:22:\"add-post-type-partners\";i:3;s:19:\"add-post-type-slide\";i:4;s:12:\"add-post_tag\";i:5;s:15:\"add-post_format\";i:6;s:20:\"add-property-feature\";i:7;s:17:\"add-property-type\";i:8;s:17:\"add-property-city\";i:9;s:19:\"add-property-status\";}');
UNLOCK TABLES;
