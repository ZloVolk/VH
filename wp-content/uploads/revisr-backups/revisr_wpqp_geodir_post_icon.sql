
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
DROP TABLE IF EXISTS `wpqp_geodir_post_icon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpqp_geodir_post_icon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `post_title` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) NOT NULL,
  `json` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpqp_geodir_post_icon` WRITE;
/*!40000 ALTER TABLE `wpqp_geodir_post_icon` DISABLE KEYS */;
INSERT INTO `wpqp_geodir_post_icon` VALUES (1,18,'',2,'{\"id\":\"18\",\"lat_pos\": \"46.634651556054\",\"long_pos\": \"-95.095289970061\",\"marker_id\":\"18_2\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Attractions.png\",\"group\":\"catgroup2\"}'),(2,18,'',8,'{\"id\":\"18\",\"lat_pos\": \"46.634651556054\",\"long_pos\": \"-95.095289970061\",\"marker_id\":\"18_8\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Feature.png\",\"group\":\"catgroup8\"}'),(3,20,'',2,'{\"id\":\"20\",\"lat_pos\": \"46.620714087007\",\"long_pos\": \"-95.103851717383\",\"marker_id\":\"20_2\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Attractions.png\",\"group\":\"catgroup2\"}'),(4,20,'',8,'{\"id\":\"20\",\"lat_pos\": \"46.620714087007\",\"long_pos\": \"-95.103851717383\",\"marker_id\":\"20_8\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Feature.png\",\"group\":\"catgroup8\"}'),(5,22,'',2,'{\"id\":\"22\",\"lat_pos\": \"46.632573482533\",\"long_pos\": \"-95.085984263225\",\"marker_id\":\"22_2\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Attractions.png\",\"group\":\"catgroup2\"}'),(6,24,'',2,'{\"id\":\"24\",\"lat_pos\": \"46.629241639197\",\"long_pos\": \"-95.085786299023\",\"marker_id\":\"24_2\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Attractions.png\",\"group\":\"catgroup2\"}'),(7,26,'',2,'{\"id\":\"26\",\"lat_pos\": \"46.626214610024\",\"long_pos\": \"-95.090936485243\",\"marker_id\":\"26_2\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Attractions.png\",\"group\":\"catgroup2\"}'),(8,26,'',8,'{\"id\":\"26\",\"lat_pos\": \"46.626214610024\",\"long_pos\": \"-95.090936485243\",\"marker_id\":\"26_8\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Feature.png\",\"group\":\"catgroup8\"}'),(9,28,'',2,'{\"id\":\"28\",\"lat_pos\": \"46.627922089412\",\"long_pos\": \"-95.102156162296\",\"marker_id\":\"28_2\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Attractions.png\",\"group\":\"catgroup2\"}'),(10,30,'',2,'{\"id\":\"30\",\"lat_pos\": \"46.616975933994\",\"long_pos\": \"-95.077126492935\",\"marker_id\":\"30_2\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Attractions.png\",\"group\":\"catgroup2\"}'),(11,32,'',2,'{\"id\":\"32\",\"lat_pos\": \"46.628817814981\",\"long_pos\": \"-95.081718041013\",\"marker_id\":\"32_2\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Attractions.png\",\"group\":\"catgroup2\"}'),(12,34,'',2,'{\"id\":\"34\",\"lat_pos\": \"46.633975712566\",\"long_pos\": \"-95.089325991629\",\"marker_id\":\"34_2\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Attractions.png\",\"group\":\"catgroup2\"}'),(13,34,'',8,'{\"id\":\"34\",\"lat_pos\": \"46.633975712566\",\"long_pos\": \"-95.089325991629\",\"marker_id\":\"34_8\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Feature.png\",\"group\":\"catgroup8\"}'),(14,36,'',2,'{\"id\":\"36\",\"lat_pos\": \"46.625219281408\",\"long_pos\": \"-95.08225548119\",\"marker_id\":\"36_2\",\"icon\":\"http://dev.vinehurst.com/wp-content/uploads/2016/06/Attractions.png\",\"group\":\"catgroup2\"}');
/*!40000 ALTER TABLE `wpqp_geodir_post_icon` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

