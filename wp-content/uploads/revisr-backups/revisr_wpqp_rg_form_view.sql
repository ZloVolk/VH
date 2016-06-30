DROP TABLE IF EXISTS `wpqp_rg_form_view`;
CREATE TABLE `wpqp_rg_form_view` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `form_id` mediumint(8) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `ip` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` mediumint(8) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `date_created` (`date_created`),
  KEY `form_id` (`form_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_rg_form_view` WRITE;
INSERT INTO `wpqp_rg_form_view` VALUES ('1','1','2016-06-25 08:18:32','108.178.54.210','954'), ('2','1','2016-06-26 08:33:47','50.148.233.78','252'), ('3','1','2016-06-27 08:37:31','108.178.54.210','216');
UNLOCK TABLES;
