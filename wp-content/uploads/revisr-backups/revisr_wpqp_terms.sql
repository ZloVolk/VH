
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
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_terms` WRITE;
INSERT INTO `wpqp_terms` VALUES ('1','Uncategorized','uncategorized','0',''), ('2','Attractions','attractions','0',''), ('3','Hotels','hotels','0',''), ('4','Restaurants','restaurants','0',''), ('5','Food Nightlife','food-nightlife','0',''), ('6','Festival','festival','0',''), ('7','Videos','videos','0',''), ('8','Feature','feature','0',''), ('9','Tags','tags','0',''), ('10','Sample Tags','sample-tags','0',''), ('11','wood','wood','0',''), ('12','garden','garden','0',''), ('13','Tag','tag','0',''), ('14','Center','center','0',''), ('15','sample','sample','0',''), ('16','Museum','museum','0',''), ('17','Tag1','tag1','0',''), ('18','Comfort','comfort','0',''), ('19','Luxury','luxury','0',''), ('20','Market Updates','market-updates','0',''), ('21','Sales','sales','0',''), ('22','beach','beach','0',''), ('23','Custom','custom','0',''), ('24','garden','garden','0',''), ('25','interior','interior','0',''), ('26','Trend','trend','0',''), ('78','Website','website','0',''), ('65','Ohio','ohio','0',''), ('80','Non Negotiable','non-negotiable','0',''), ('67','E-Commerce','e-commerce','0',''), ('86','Mobile App','mobile-app','0',''), ('87','Footer Menue','footer-menue','0',''), ('84','Clothing','clothing','0',''), ('79','Branding','branding','0',''), ('81','Fitness','fitness','0',''), ('82','Consulting','consulting','0',''), ('83','Automotive','automotive','0',''), ('77','Cloud Based','cloud-based','0',''), ('74','E-Commerce','e-commerce','0',''), ('75','DropShip','dropship','0',''), ('76','P.O.S.','p-o-s','0',''), ('73','Asking Price','asking-price','0',''), ('85','Financial','financial','0',''), ('61','Main Menu','main-menu','0',''), ('62','Image','post-format-image','0',''), ('63','Gallery','post-format-gallery','0',''), ('64','Video','post-format-video','0','');
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

