
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
DROP TABLE IF EXISTS `wpqp_terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpqp_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  `term_icon` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=MyISAM AUTO_INCREMENT=212 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpqp_terms` WRITE;
/*!40000 ALTER TABLE `wpqp_terms` DISABLE KEYS */;
INSERT INTO `wpqp_terms` VALUES (1,'Uncategorized','uncategorized',0,''),(2,'Attractions','attractions',0,''),(3,'Hotels','hotels',0,''),(4,'Restaurants','restaurants',0,''),(5,'Food Nightlife','food-nightlife',0,''),(6,'Festival','festival',0,''),(7,'Videos','videos',0,''),(8,'Feature','feature',0,''),(9,'Tags','tags',0,''),(10,'Sample Tags','sample-tags',0,''),(11,'wood','wood',0,''),(12,'garden','garden',0,''),(13,'Tag','tag',0,''),(14,'Center','center',0,''),(15,'sample','sample',0,''),(16,'Museum','museum',0,''),(17,'Tag1','tag1',0,''),(18,'Comfort','comfort',0,''),(19,'Luxury','luxury',0,''),(20,'Market Updates','market-updates',0,''),(21,'Sales','sales',0,''),(22,'beach','beach',0,''),(23,'Custom','custom',0,''),(24,'garden','garden',0,''),(25,'interior','interior',0,''),(26,'Trend','trend',0,''),(95,'Connecticut','connecticut',0,''),(94,'Colorado','colorado',0,''),(93,'California','california',0,''),(92,'Arkansas','arkansas',0,''),(91,'Arizona','arizona',0,''),(78,'Website','website',0,''),(65,'Ohio','ohio',0,''),(80,'Non Negotiable','non-negotiable',0,''),(145,'amenities','amenities',0,''),(90,'Alaska','alaska',0,''),(89,'Alabama','alabama',0,''),(140,'Advertising','advertising',0,''),(146,'anniversary','anniversary',0,''),(79,'Branding','branding',0,''),(141,'Relocatable','relocatable',0,''),(142,'Articles','articles',0,''),(143,'Business','business',0,''),(77,'Cloud Based','cloud-based',0,''),(74,'E-Commerce','e-commerce',0,''),(75,'DropShip','dropship',0,''),(76,'P.O.S.','p-o-s',0,''),(73,'Asking Price','asking-price',0,''),(144,'Inspiration','inspiration',0,''),(61,'Dev Menu','dev-menu',0,''),(62,'Image','post-format-image',0,''),(63,'Gallery','post-format-gallery',0,''),(64,'Video','post-format-video',0,''),(97,'Delaware','delaware',0,''),(98,'Florida','florida',0,''),(99,'Georgia','georgia',0,''),(100,'Hawaii','hawaii',0,''),(101,'Idaho','idaho',0,''),(102,'Illinois','illinois',0,''),(103,'Indiana','indiana',0,''),(104,'Iowa','iowa',0,''),(105,'Kansas','kansas',0,''),(106,'Kentucky','kentucky',0,''),(107,'Louisiana','louisiana',0,''),(108,'Maine','maine',0,''),(109,'Maryland','maryland',0,''),(110,'Massachusetts','massachusetts',0,''),(111,'Michigan','michigan',0,''),(112,'Minnesota','minnesota',0,''),(113,'Mississippi','mississippi',0,''),(114,'Missouri','missouri',0,''),(115,'Montana','montana',0,''),(116,'Nebraska','nebraska',0,''),(117,'Nevada','nevada',0,''),(118,'New Hampshire','new-hampshire',0,''),(119,'New Jersey','new-jersey',0,''),(120,'New Mexico','new-mexico',0,''),(121,'New York','new-york',0,''),(122,'North Carolina','north-carolina',0,''),(123,'North Dakota','north-dakota',0,''),(124,'Oklahoma','oklahoma',0,''),(125,'Oregon','oregon',0,''),(126,'Pennsylvania','pennsylvania',0,''),(127,'Rhode Island','rhode-island',0,''),(128,'South Carolina','south-carolina',0,''),(129,'South Dakota','south-dakota',0,''),(130,'Tennessee','tennessee',0,''),(131,'Texas','texas',0,''),(132,'Utah','utah',0,''),(133,'Vermont','vermont',0,''),(134,'Virginia','virginia',0,''),(135,'Washington','washington',0,''),(136,'West Virginia','west-virginia',0,''),(137,'Wisconsin','wisconsin',0,''),(138,'Wyoming','wyoming',0,''),(139,'Accounting','accounting',0,''),(147,'deals','deals',0,''),(148,'new','new',0,''),(149,'properties','properties',0,''),(150,'subdivision','subdivision',0,''),(151,'Branding','branding',0,''),(152,'Commercial','commercial-property',0,''),(153,'For Rent','for-rent',0,''),(154,'For Sale','for-sale',0,''),(155,'Kansas','kansas',0,''),(156,'Logo Design','logo-design',0,''),(157,'Office','office',0,''),(158,'Oklahoma','oklahoma',0,''),(159,'Residential','residential-property',0,''),(160,'Villa','villa',0,''),(161,'Web Design','web-design',0,''),(162,'Apartment','apartment',0,''),(163,'Condominium','condominium',0,''),(166,'Socket Menu','socket-menu',0,''),(165,'Audio','post-format-audio',0,''),(180,'Businesses','businesses',0,''),(211,'Domains','domains',0,NULL),(185,'Cabin Cruisers','cabin-cruisers',0,''),(210,'Websites','websites',0,NULL),(190,'Retail','retail',0,''),(191,'Service','service',0,''),(193,'Internet Based','internet-based',0,''),(194,'Manufacturing','manufacturing',0,''),(195,'Wholesale','wholesale',0,''),(196,'Construction','construction',0,''),(197,'Real Estate','real-estate',0,''),(198,'e-Commerce','e-commerce',0,''),(199,'Franchises','franchises',0,''),(201,'Automotive','automotive',0,''),(202,'Entertainment','entertainment',0,''),(203,'Technology','technology',0,''),(204,'Hotels','hotels',0,''),(205,'Fashion','fashion',0,''),(206,'Hospitality','hospitality',0,''),(207,'Closed Deals','closed-deals',0,''),(208,'Main','main',0,'');
/*!40000 ALTER TABLE `wpqp_terms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

