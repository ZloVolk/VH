
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
DROP TABLE IF EXISTS `wpqp_term_taxonomy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpqp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=MyISAM AUTO_INCREMENT=167 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpqp_term_taxonomy` WRITE;
/*!40000 ALTER TABLE `wpqp_term_taxonomy` DISABLE KEYS */;
INSERT INTO `wpqp_term_taxonomy` VALUES (1,1,'category','',0,15),(2,2,'gd_placecategory','',0,10),(3,3,'gd_placecategory','',0,0),(4,4,'gd_placecategory','',0,0),(5,5,'gd_placecategory','',0,0),(6,6,'gd_placecategory','',0,0),(7,7,'gd_placecategory','',0,0),(8,8,'gd_placecategory','',0,4),(9,9,'gd_place_tags','',0,3),(10,10,'gd_place_tags','',0,2),(11,11,'gd_place_tags','',0,2),(12,12,'gd_place_tags','',0,2),(13,13,'gd_place_tags','',0,1),(14,14,'gd_place_tags','',0,1),(15,15,'gd_place_tags','',0,1),(16,16,'gd_place_tags','',0,2),(17,17,'gd_place_tags','',0,1),(18,18,'category','',0,0),(19,19,'category','',0,0),(20,20,'category','',0,0),(21,21,'category','',0,1),(22,22,'post_tag','',0,0),(23,23,'post_tag','',0,0),(24,24,'post_tag','',0,0),(25,25,'post_tag','',0,0),(26,26,'post_tag','',0,0),(112,112,'property-city','',0,0),(111,111,'property-city','',0,0),(110,110,'property-city','',0,0),(102,102,'property-city','',0,0),(109,109,'property-city','',0,0),(101,101,'property-city','',0,0),(74,74,'property-feature','',0,6),(75,75,'property-feature','',74,1),(76,76,'property-feature','',74,3),(73,73,'property-type','',0,4),(79,79,'property-feature','',0,3),(141,141,'property-type','',0,1),(142,142,'category','',0,2),(143,143,'category','',0,2),(144,144,'category','',0,2),(145,145,'post_tag','',0,1),(146,146,'post_tag','',0,1),(140,140,'property-status','',0,0),(89,89,'property-city','',0,0),(87,87,'nav_menu','',0,4),(90,90,'property-city','',0,0),(91,91,'property-city','',0,0),(92,92,'property-city','',0,0),(93,93,'property-city','',0,1),(61,61,'nav_menu','',0,21),(62,62,'post_format','',0,1),(63,63,'post_format','',0,1),(64,64,'post_format','',0,1),(78,78,'property-feature','',0,4),(147,147,'post_tag','',0,1),(77,77,'property-feature','',74,4),(65,65,'property-city','',0,0),(80,80,'property-type','',0,2),(108,108,'property-city','',0,0),(107,107,'property-city','',0,0),(103,103,'property-city','',0,0),(106,106,'property-city','',0,0),(104,104,'property-city','',0,0),(105,105,'property-city','',0,0),(94,94,'property-city','',0,0),(95,95,'property-city','',0,0),(97,97,'property-city','',0,0),(98,98,'property-city','',0,0),(99,99,'property-city','',0,0),(100,100,'property-city','',0,0),(113,113,'property-city','',0,0),(114,114,'property-city','',0,0),(115,115,'property-city','',0,0),(116,116,'property-city','',0,0),(117,117,'property-city','',0,0),(118,118,'property-city','',0,0),(119,119,'property-city','',0,0),(120,120,'property-city','',0,0),(121,121,'property-city','',0,0),(122,122,'property-city','',0,0),(123,123,'property-city','',0,0),(124,124,'property-city','',0,0),(125,125,'property-city','',0,0),(126,126,'property-city','',0,0),(127,127,'property-city','',0,0),(128,128,'property-city','',0,0),(129,129,'property-city','',0,0),(130,130,'property-city','',0,0),(131,131,'property-city','',0,0),(132,132,'property-city','',0,0),(133,133,'property-city','',0,0),(134,134,'property-city','',0,0),(135,135,'property-city','',0,0),(136,136,'property-city','',0,0),(137,137,'property-city','',0,0),(138,138,'property-city','',0,0),(139,139,'property-status','',0,0),(148,148,'post_tag','',0,1),(149,149,'post_tag','',0,1),(150,150,'post_tag','',0,1),(151,151,'homeland_portfolio_category','',0,0),(152,152,'homeland_property_type','',0,0),(153,153,'homeland_property_status','',0,0),(154,154,'homeland_property_status','',0,0),(155,155,'homeland_property_location','',0,0),(156,156,'homeland_portfolio_category','',0,0),(157,157,'homeland_property_type','',152,0),(158,158,'homeland_property_location','',0,0),(159,159,'homeland_property_type','',0,0),(160,160,'homeland_property_type','',159,0),(161,161,'homeland_portfolio_category','',0,0),(162,162,'homeland_property_type','',159,0),(163,163,'homeland_property_type','',159,0),(166,166,'nav_menu','',0,4),(165,165,'post_format','',0,1);
/*!40000 ALTER TABLE `wpqp_term_taxonomy` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

