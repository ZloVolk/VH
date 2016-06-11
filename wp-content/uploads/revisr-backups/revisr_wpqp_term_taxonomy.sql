DROP TABLE IF EXISTS `wpqp_term_taxonomy`;
CREATE TABLE `wpqp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_term_taxonomy` WRITE;
INSERT INTO `wpqp_term_taxonomy` VALUES ('1','1','category','','0','0'), ('2','2','gd_placecategory','','0','10'), ('3','3','gd_placecategory','','0','0'), ('4','4','gd_placecategory','','0','0'), ('5','5','gd_placecategory','','0','0'), ('6','6','gd_placecategory','','0','0'), ('7','7','gd_placecategory','','0','0'), ('8','8','gd_placecategory','','0','4'), ('9','9','gd_place_tags','','0','3'), ('10','10','gd_place_tags','','0','2'), ('11','11','gd_place_tags','','0','2'), ('12','12','gd_place_tags','','0','2'), ('13','13','gd_place_tags','','0','1'), ('14','14','gd_place_tags','','0','1'), ('15','15','gd_place_tags','','0','1'), ('16','16','gd_place_tags','','0','2'), ('17','17','gd_place_tags','','0','1'), ('18','18','category','','0','1'), ('19','19','category','','0','1'), ('20','20','category','','0','2'), ('21','21','category','','0','1'), ('22','22','post_tag','','0','2'), ('23','23','post_tag','','0','2'), ('24','24','post_tag','','0','1'), ('25','25','post_tag','','0','4'), ('26','26','post_tag','','0','1'), ('30','30','property-type','','0','0'), ('36','36','property-status','','0','5'), ('37','37','property-status','','0','4'), ('43','43','property-city','','0','9'), ('45','45','property-type','','30','1'), ('46','46','property-city','','43','1'), ('47','47','property-city','','43','1'), ('48','48','property-type','','0','0'), ('49','49','property-type','','30','1'), ('50','50','property-type','','48','2'), ('52','52','property-city','','43','1'), ('53','53','property-type','','48','2'), ('55','55','property-type','','48','2'), ('56','56','property-type','','48','1'), ('57','57','property-type','','48','0'), ('58','58','property-city','','43','1'), ('59','59','property-city','','43','1'), ('60','60','property-city','','43','3'), ('61','61','nav_menu','','0','5'), ('62','62','post_format','','0','3'), ('63','63','post_format','','0','1'), ('64','64','post_format','','0','1');
UNLOCK TABLES;
