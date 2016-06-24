DROP TABLE IF EXISTS `wpqp_revslider_settings`;
CREATE TABLE `wpqp_revslider_settings` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `general` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `params` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_revslider_settings` WRITE;
INSERT INTO `wpqp_revslider_settings` VALUES ('1','a:0:{}','');
UNLOCK TABLES;
