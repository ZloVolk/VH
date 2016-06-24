DROP TABLE IF EXISTS `wpqp_revslider_slides`;
CREATE TABLE `wpqp_revslider_slides` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `slider_id` int(9) NOT NULL,
  `slide_order` int(11) NOT NULL,
  `params` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `layers` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_revslider_slides` WRITE;
INSERT INTO `wpqp_revslider_slides` VALUES ('5','2','2','{\"background_type\":\"image\",\"image\":\"http:\\/\\/dev.vinehurst.com\\/wp-content\\/uploads\\/2016\\/06\\/black-white-photography-4.jpg\",\"image_id\":\"929\"}','','');
UNLOCK TABLES;
