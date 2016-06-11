DROP TABLE IF EXISTS `wpqp_terms`;
CREATE TABLE `wpqp_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  `term_icon` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_terms` WRITE;
INSERT INTO `wpqp_terms` VALUES ('1','Uncategorized','uncategorized','0',''), ('2','Attractions','attractions','0',''), ('3','Hotels','hotels','0',''), ('4','Restaurants','restaurants','0',''), ('5','Food Nightlife','food-nightlife','0',''), ('6','Festival','festival','0',''), ('7','Videos','videos','0',''), ('8','Feature','feature','0',''), ('9','Tags','tags','0',''), ('10','Sample Tags','sample-tags','0',''), ('11','wood','wood','0',''), ('12','garden','garden','0',''), ('13','Tag','tag','0',''), ('14','Center','center','0',''), ('15','sample','sample','0',''), ('16','Museum','museum','0',''), ('17','Tag1','tag1','0',''), ('18','Comfort','comfort','0',''), ('19','Luxury','luxury','0',''), ('20','Market Updates','market-updates','0',''), ('21','Sales','sales','0',''), ('22','beach','beach','0',''), ('23','Custom','custom','0',''), ('24','garden','garden','0',''), ('25','interior','interior','0',''), ('26','Trend','trend','0',''), ('30','Commercial','commercial','0',''), ('36','For Rent','for-rent','0',''), ('37','For Sale','for-sale','0',''), ('43','Miami','miami','0',''), ('45','Office','office','0',''), ('46','Perrine','perrine','0',''), ('47','Pinecrest','pinecrest','0',''), ('48','Residential','residential','0',''), ('49','Shop','shop','0',''), ('50','Single Family Home','single-family-home','0',''), ('52','Terrace','terrace','0',''), ('53','Villa','villa','0',''), ('55','Apartment','apartment','0',''), ('56','Apartment Building','apartment-building','0',''), ('57','Condominium','condominium','0',''), ('58','Coral Gables','coral-gables','0',''), ('59','Doral','doral','0',''), ('60','Little Havana','little-havana','0',''), ('61','Main Menu','main-menu','0',''), ('62','Image','post-format-image','0',''), ('63','Gallery','post-format-gallery','0',''), ('64','Video','post-format-video','0','');
UNLOCK TABLES;
