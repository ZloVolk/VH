DROP TABLE IF EXISTS `wpui_postmeta`;
CREATE TABLE `wpui_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpui_postmeta` WRITE;
INSERT INTO `wpui_postmeta` VALUES ('1','2','_wp_page_template','default'), ('2','4','_menu_item_type','custom'), ('3','4','_menu_item_menu_item_parent','0'), ('4','4','_menu_item_object_id','4'), ('5','4','_menu_item_object','custom'), ('6','4','_menu_item_target',''), ('7','4','_menu_item_classes','a:1:{i:0;s:0:\"\";}'), ('8','4','_menu_item_xfn',''), ('9','4','_menu_item_url','http://vinehurst.com/'), ('10','4','_menu_item_orphaned','1465681189'), ('11','5','_menu_item_type','post_type'), ('12','5','_menu_item_menu_item_parent','0'), ('13','5','_menu_item_object_id','2'), ('14','5','_menu_item_object','page'), ('15','5','_menu_item_target',''), ('16','5','_menu_item_classes','a:1:{i:0;s:0:\"\";}'), ('17','5','_menu_item_xfn',''), ('18','5','_menu_item_url',''), ('19','5','_menu_item_orphaned','1465681189'), ('20','6','_menu_item_type','custom'), ('21','6','_menu_item_menu_item_parent','0'), ('22','6','_menu_item_object_id','6'), ('23','6','_menu_item_object','custom'), ('24','6','_menu_item_target',''), ('25','6','_menu_item_classes','a:1:{i:0;s:0:\"\";}'), ('26','6','_menu_item_xfn',''), ('27','6','_menu_item_url','http://vinehurst.com/'), ('28','6','_menu_item_orphaned','1465681434'), ('29','7','_menu_item_type','post_type'), ('30','7','_menu_item_menu_item_parent','0'), ('31','7','_menu_item_object_id','2'), ('32','7','_menu_item_object','page'), ('33','7','_menu_item_target',''), ('34','7','_menu_item_classes','a:1:{i:0;s:0:\"\";}'), ('35','7','_menu_item_xfn',''), ('36','7','_menu_item_url',''), ('37','7','_menu_item_orphaned','1465681434');
UNLOCK TABLES;
