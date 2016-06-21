
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `wpqp_geodir_gd_place_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpqp_geodir_gd_place_detail` (
  `post_id` int(11) NOT NULL,
  `post_title` text COLLATE utf8_unicode_ci,
  `post_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `default_category` int(11) DEFAULT NULL,
  `post_tags` text COLLATE utf8_unicode_ci,
  `post_location_id` int(11) NOT NULL,
  `geodir_link_business` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marker_json` text COLLATE utf8_unicode_ci,
  `claimed` enum('1','0') COLLATE utf8_unicode_ci DEFAULT '0',
  `businesses` enum('1','0') COLLATE utf8_unicode_ci DEFAULT '0',
  `is_featured` enum('1','0') COLLATE utf8_unicode_ci DEFAULT '0',
  `featured_image` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid_amount` double NOT NULL DEFAULT '0',
  `package_id` int(11) NOT NULL DEFAULT '0',
  `alive_days` int(11) NOT NULL DEFAULT '0',
  `paymentmethod` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expire_date` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `submit_time` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `submit_ip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `overall_rating` float DEFAULT '0',
  `rating_count` int(11) DEFAULT '0',
  `post_locations` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_dummy` enum('1','0') COLLATE utf8_unicode_ci DEFAULT '0',
  `gd_placecategory` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_address` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_city` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_region` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_country` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_zip` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_latitude` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_longitude` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_mapview` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_mapzoom` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_latlng` varchar(3) COLLATE utf8_unicode_ci DEFAULT '1',
  `geodir_timing` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `geodir_contact` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `geodir_email` varchar(254) COLLATE utf8_unicode_ci DEFAULT NULL,
  `geodir_website` text COLLATE utf8_unicode_ci,
  `geodir_twitter` text COLLATE utf8_unicode_ci,
  `geodir_facebook` text COLLATE utf8_unicode_ci,
  `geodir_video` text COLLATE utf8_unicode_ci,
  `geodir_special_offers` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpqp_geodir_gd_place_detail` WRITE;
/*!40000 ALTER TABLE `wpqp_geodir_gd_place_detail` DISABLE KEYS */;
INSERT INTO `wpqp_geodir_gd_place_detail` VALUES (18,'Franklin Square','publish',2,'Tags,Sample Tags',0,NULL,'{\"id\":\"18\",\"lat_pos\":\"46.634651556054\",\"long_pos\":\"-95.095289970061\",\"marker_id\":\"18_8\",\"icon\":\"http:\\/\\/vinehurst.com\\/wp-content\\/uploads\\/2016\\/06\\/Feature.png\",\"group\":\"catgroup8\"}','','','0','/2016/06/a1.jpg',0,0,0,NULL,'Never','1465425604','50.148.233.78',0,0,'[sebeka],[minnesota],[united-states]','1',',2,8,','310,5th Street Northwest','Sebeka','Minnesota','United States','56477','46.634651556054','-95.095289970061',NULL,NULL,'1','Open today until 1 p.m., Sunday 10 am to 9 pm','(111) 677-4444','info@franklinsq.com','http://franklinsquare.com','http://twitter.com/franklinsquare','http://facebook.com/franklinsquare','',NULL),(20,'Please Touch Museum','publish',2,'Tags,Sample Tags',0,NULL,'{\"id\":\"20\",\"lat_pos\":\"46.620714087007\",\"long_pos\":\"-95.103851717383\",\"marker_id\":\"20_8\",\"icon\":\"http:\\/\\/vinehurst.com\\/wp-content\\/uploads\\/2016\\/06\\/Feature.png\",\"group\":\"catgroup8\"}','','','0','/2016/06/a6-1.jpg',0,0,0,NULL,'Never','1465425605','50.148.233.78',0,0,'[sebeka],[minnesota],[united-states]','1',',2,8,','899,5th Street Southwest','Sebeka','Minnesota','United States','56477','46.620714087007','-95.103851717383',NULL,NULL,'1','Open today until 1 p.m., Sunday 10 am to 9 pm','(222) 777-1111','info@pleasetouchmuseum.com','http://pleasetouchmuseum.com','http://twitter.com/pleasetouchmuseum','http://facebook.com/pleasetouchmuseum','',NULL),(22,'Longwood Gardens','publish',2,'wood,garden',0,NULL,'{\"id\":\"22\",\"lat_pos\":\"46.632573482533\",\"long_pos\":\"-95.085984263225\",\"marker_id\":\"22_2\",\"icon\":\"http:\\/\\/vinehurst.com\\/wp-content\\/uploads\\/2016\\/06\\/Attractions.png\",\"group\":\"catgroup2\"}','','','0','/2016/06/a9-2.jpg',0,0,0,NULL,'Never','1465425608','50.148.233.78',0,0,'[sebeka],[minnesota],[united-states]','1',',2,','269-399,3rd Street Northeast','Sebeka','Minnesota','United States','56477','46.632573482533','-95.085984263225',NULL,NULL,'1','Open today until 1 p.m., Sunday 10 am to 9 pm','(111) 888-1111','info@longwoodgardens.com','http://longwoodgardens.com','http://twitter.com/longwoodgardens','http://facebook.com/longwoodgardens','',NULL),(24,'The Philadelphia Zoo','publish',2,'wood,garden',0,NULL,'{\"id\":\"24\",\"lat_pos\":\"46.629241639197\",\"long_pos\":\"-95.085786299023\",\"marker_id\":\"24_2\",\"icon\":\"http:\\/\\/vinehurst.com\\/wp-content\\/uploads\\/2016\\/06\\/Attractions.png\",\"group\":\"catgroup2\"}','','','0','/2016/06/a11-3.jpg',0,0,0,NULL,'Never','1465425610','50.148.233.78',0,0,'[sebeka],[minnesota],[united-states]','1',',2,','300-398,1st Street Southeast','Sebeka','Minnesota','United States','56477','46.629241639197','-95.085786299023',NULL,NULL,'1','Open today until 11.30 a.m., Sunday 11 am to 7 pm','(211) 143-1900','info@philadelphiazoo.com','http://philadelphiazoo.com','http://twitter.com/philadelphiazoo','http://facebook.com/philadelphiazoo','',NULL),(26,'National Constitution Center','publish',2,'Tag,Center',0,NULL,'{\"id\":\"26\",\"lat_pos\":\"46.626214610024\",\"long_pos\":\"-95.090936485243\",\"marker_id\":\"26_8\",\"icon\":\"http:\\/\\/vinehurst.com\\/wp-content\\/uploads\\/2016\\/06\\/Feature.png\",\"group\":\"catgroup8\"}','','','0','/2016/06/a12.jpg',0,0,0,NULL,'Never','1465425613','50.148.233.78',0,0,'[sebeka],[minnesota],[united-states]','1',',2,8,','101-299,Riverside Drive','Sebeka','Minnesota','United States','56477','46.626214610024','-95.090936485243',NULL,NULL,'1','Open today until 9.30 a.m., Sunday 11 am to 7 pm','(111) 111-1111','info@ncc.com','http://ncc.com','http://twitter.com/ncc','http://facebook.com/ncc','',NULL),(28,'Sadsbury Woods Preserve','publish',2,'sample,tags',0,NULL,'{\"id\":\"28\",\"lat_pos\":\"46.627922089412\",\"long_pos\":\"-95.102156162296\",\"marker_id\":\"28_2\",\"icon\":\"http:\\/\\/vinehurst.com\\/wp-content\\/uploads\\/2016\\/06\\/Attractions.png\",\"group\":\"catgroup2\"}','','','0','/2016/06/a14.jpg',0,0,0,NULL,'Never','1465425615','50.148.233.78',0,0,'[sebeka],[minnesota],[united-states]','1',',2,','815-923,West Minnesota Street','Sebeka','Minnesota','United States','56477','46.627922089412','-95.102156162296',NULL,NULL,'1','Open today until 12.30 p.m., Sunday 12 pm to 7 pm','(222) 999-9999','info@swp.com','http://swp.com','http://twitter.com/swp','http://facebook.com/swp','',NULL),(30,'Museum Without Walls','publish',2,'Museum',0,NULL,'{\"id\":\"30\",\"lat_pos\":\"46.616975933994\",\"long_pos\":\"-95.077126492935\",\"marker_id\":\"30_2\",\"icon\":\"http:\\/\\/vinehurst.com\\/wp-content\\/uploads\\/2016\\/06\\/Attractions.png\",\"group\":\"catgroup2\"}','','','0','/2016/06/a15.jpg',0,0,0,NULL,'Never','1465425618','50.148.233.78',0,0,'[sebeka],[minnesota],[united-states]','1',',2,','5th Street Southeast','Sebeka','Minnesota','United States','56477','46.616975933994','-95.077126492935',NULL,NULL,'1','Open today until 10.30 a.m., Sunday 10 am to 7 pm','(222) 999-9999','info@mwwalls.com','http://museumwithoutwallsaudio.org/','http://twitter.com/mwwalls','http://facebook.com/mwwalls','',NULL),(32,'Audacious Freedom','publish',2,'Tag1',0,NULL,'{\"id\":\"32\",\"lat_pos\":\"46.628817814981\",\"long_pos\":\"-95.081718041013\",\"marker_id\":\"32_2\",\"icon\":\"http:\\/\\/vinehurst.com\\/wp-content\\/uploads\\/2016\\/06\\/Attractions.png\",\"group\":\"catgroup2\"}','','','0','/2016/06/a18.jpg',0,0,0,NULL,'Never','1465425620','50.148.233.78',0,0,'[sebeka],[minnesota],[united-states]','1',',2,','401-1799,East Minnesota Avenue','Sebeka','Minnesota','United States','56477','46.628817814981','-95.081718041013',NULL,NULL,'1','Open today until 11.30 a.m., Sunday 1 pm to 7 pm','(777) 777-7777','info@aampmuseum.com','http://www.aampmuseum.org/','http://twitter.com/aampmuseum','http://facebook.com/aampmuseum','',NULL),(34,'The Liberty Bell Center','publish',2,'',0,NULL,'{\"id\":\"34\",\"lat_pos\":\"46.633975712566\",\"long_pos\":\"-95.089325991629\",\"marker_id\":\"34_8\",\"icon\":\"http:\\/\\/vinehurst.com\\/wp-content\\/uploads\\/2016\\/06\\/Feature.png\",\"group\":\"catgroup8\"}','','','0','/2016/06/a19.jpg',0,0,0,NULL,'Never','1465425622','50.148.233.78',0,0,'[sebeka],[minnesota],[united-states]','1',',2,8,','293-355,North Jefferson Avenue','Sebeka','Minnesota','United States','56477','46.633975712566','-95.089325991629',NULL,NULL,'1','The center is open year round, 9 a.m. – 5 p.m., with extended hours in the summer.','(777) 666-6666','info@nps.com','http://www.nps.gov/inde','http://twitter.com/nps','http://facebook.com/nps','',NULL),(36,'Rittenhouse Square','publish',2,'Museum',0,NULL,'{\"id\":\"36\",\"lat_pos\":\"46.625219281408\",\"long_pos\":\"-95.08225548119\",\"marker_id\":\"36_2\",\"icon\":\"http:\\/\\/vinehurst.com\\/wp-content\\/uploads\\/2016\\/06\\/Attractions.png\",\"group\":\"catgroup2\"}','','','0','/2016/06/a19-1.jpg',0,0,0,NULL,'Never','1465425624','50.148.233.78',0,0,'[sebeka],[minnesota],[united-states]','1',',2,','499,2nd Street Southeast','Sebeka','Minnesota','United States','56477','46.625219281408','-95.08225548119',NULL,NULL,'1','The center is open year round, 9 a.m. – 5 p.m., with extended hours in the summer.','(777) 666-6666','info@fairmountpark.com','http://www.fairmountpark.org/rittenhousesquare.asp','http://twitter.com/fairmountpark','http://facebook.com/fairmountpark','',NULL);
/*!40000 ALTER TABLE `wpqp_geodir_gd_place_detail` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

