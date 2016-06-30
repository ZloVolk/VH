DROP TABLE IF EXISTS `wpqp_rg_form`;
CREATE TABLE `wpqp_rg_form` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_trash` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_rg_form` WRITE;
INSERT INTO `wpqp_rg_form` VALUES ('1','Menu Contact','2016-06-25 08:02:18','1','0');
UNLOCK TABLES;
