DROP TABLE IF EXISTS `wpqp_bookingdates`;
CREATE TABLE `wpqp_bookingdates` (
  `booking_id` bigint(20) unsigned NOT NULL,
  `booking_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `approved` bigint(20) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `booking_id_dates` (`booking_id`,`booking_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_bookingdates` WRITE;
INSERT INTO `wpqp_bookingdates` VALUES ('1','2016-06-25 00:00:00','0'), ('1','2016-06-26 00:00:00','0'), ('1','2016-06-27 00:00:00','0');
UNLOCK TABLES;
