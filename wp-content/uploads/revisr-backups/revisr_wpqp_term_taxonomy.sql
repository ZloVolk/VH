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
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_term_taxonomy` WRITE;
INSERT INTO `wpqp_term_taxonomy` VALUES ('1','1','category','','0','10'), ('2','2','gd_placecategory','','0','10'), ('3','3','gd_placecategory','','0','0'), ('4','4','gd_placecategory','','0','0'), ('5','5','gd_placecategory','','0','0'), ('6','6','gd_placecategory','','0','0'), ('7','7','gd_placecategory','','0','0'), ('8','8','gd_placecategory','','0','4'), ('9','9','gd_place_tags','','0','3'), ('10','10','gd_place_tags','','0','2'), ('11','11','gd_place_tags','','0','2'), ('12','12','gd_place_tags','','0','2'), ('13','13','gd_place_tags','','0','1'), ('14','14','gd_place_tags','','0','1'), ('15','15','gd_place_tags','','0','1'), ('16','16','gd_place_tags','','0','2'), ('17','17','gd_place_tags','','0','1'), ('18','18','category','','0','0'), ('19','19','category','','0','0'), ('20','20','category','','0','0'), ('21','21','category','','0','1'), ('22','22','post_tag','','0','0'), ('23','23','post_tag','','0','0'), ('24','24','post_tag','','0','0'), ('25','25','post_tag','','0','0'), ('26','26','post_tag','','0','0'), ('74','74','property-feature','','0','4'), ('75','75','property-feature','','74','1'), ('76','76','property-feature','','74','3'), ('73','73','property-type','','0','3'), ('79','79','property-feature','','0','3'), ('81','81','property-status','','0','1'), ('82','82','property-status','','0','1'), ('83','83','property-status','','0','0'), ('84','84','property-status','','0','1'), ('85','85','property-status','','0','0'), ('86','86','property-status','','0','1'), ('87','87','nav_menu','','0','4'), ('61','61','nav_menu','','0','8'), ('62','62','post_format','','0','0'), ('63','63','post_format','','0','0'), ('64','64','post_format','','0','0'), ('78','78','property-feature','','0','4'), ('67','67','property-status','','0','3'), ('77','77','property-feature','','74','3'), ('65','65','property-city','','0','0'), ('80','80','property-type','','0','2');
UNLOCK TABLES;
