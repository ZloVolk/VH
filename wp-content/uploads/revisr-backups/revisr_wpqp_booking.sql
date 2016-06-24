DROP TABLE IF EXISTS `wpqp_booking`;
CREATE TABLE `wpqp_booking` (
  `booking_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `trash` bigint(10) NOT NULL DEFAULT '0',
  `sync_gid` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `is_new` bigint(10) NOT NULL DEFAULT '1',
  `status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sort_date` datetime DEFAULT NULL,
  `modification_date` datetime DEFAULT NULL,
  `form` text COLLATE utf8mb4_unicode_ci,
  `booking_type` bigint(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_booking` WRITE;
INSERT INTO `wpqp_booking` VALUES ('1','0','','1','','2016-06-25 00:00:00','2016-06-23 03:09:33','text^name1^Jony~text^secondname1^Smith~text^email1^example-free@wpbookingcalendar.com~text^phone1^8(038)458-77-77~textarea^details1^Reserve a room with sea view','1');
UNLOCK TABLES;
