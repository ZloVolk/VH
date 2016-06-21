
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
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  `term_icon` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpqp_terms` WRITE;
/*!40000 ALTER TABLE `wpqp_terms` DISABLE KEYS */;
INSERT INTO `wpqp_terms` VALUES (1,'Uncategorized','uncategorized',0,NULL),(2,'Attractions','attractions',0,NULL),(3,'Hotels','hotels',0,NULL),(4,'Restaurants','restaurants',0,NULL),(5,'Food Nightlife','food-nightlife',0,NULL),(6,'Festival','festival',0,NULL),(7,'Videos','videos',0,NULL),(8,'Feature','feature',0,NULL),(9,'Tags','tags',0,NULL),(10,'Sample Tags','sample-tags',0,NULL),(11,'wood','wood',0,NULL),(12,'garden','garden',0,NULL),(13,'Tag','tag',0,NULL),(14,'Center','center',0,NULL),(15,'sample','sample',0,NULL),(16,'Museum','museum',0,NULL),(17,'Tag1','tag1',0,NULL),(18,'Comfort','comfort',0,NULL),(19,'Luxury','luxury',0,NULL),(20,'Market Updates','market-updates',0,NULL),(21,'Sales','sales',0,NULL),(22,'beach','beach',0,NULL),(23,'Custom','custom',0,NULL),(24,'garden','garden',0,NULL),(25,'interior','interior',0,NULL),(26,'Trend','trend',0,NULL),(30,'Commercial','commercial',0,NULL),(36,'For Rent','for-rent',0,NULL),(37,'For Sale','for-sale',0,NULL),(43,'Miami','miami',0,NULL),(45,'Office','office',0,NULL),(46,'Perrine','perrine',0,NULL),(47,'Pinecrest','pinecrest',0,NULL),(48,'Residential','residential',0,NULL),(49,'Shop','shop',0,NULL),(50,'Single Family Home','single-family-home',0,NULL),(52,'Terrace','terrace',0,NULL),(53,'Villa','villa',0,NULL),(55,'Apartment','apartment',0,NULL),(56,'Apartment Building','apartment-building',0,NULL),(57,'Condominium','condominium',0,NULL),(58,'Coral Gables','coral-gables',0,NULL),(59,'Doral','doral',0,NULL),(60,'Little Havana','little-havana',0,NULL),(61,'Main Menu','main-menu',0,NULL),(62,'Image','post-format-image',0,NULL),(63,'Gallery','post-format-gallery',0,NULL),(64,'Video','post-format-video',0,NULL);
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

