DROP TABLE IF EXISTS `wpui_posts`;
CREATE TABLE `wpui_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpui_posts` WRITE;
INSERT INTO `wpui_posts` VALUES ('1','1','2016-06-07 21:10:29','2016-06-07 21:10:29','Welcome to WordPress. This is your first post. Edit or delete it, then start writing!','Hello world!','','publish','open','open','','hello-world','','','2016-06-07 21:10:29','2016-06-07 21:10:29','','0','http://vinehurst.com/wp/?p=1','0','post','','1'), ('2','1','2016-06-07 21:10:29','2016-06-07 21:10:29','This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:\n\n<blockquote>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</blockquote>\n\n...or something like this:\n\n<blockquote>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</blockquote>\n\nAs a new WordPress user, you should go to <a href=\"http://vinehurst.com/wp/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!','Sample Page','','publish','closed','open','','sample-page','','','2016-06-07 21:10:29','2016-06-07 21:10:29','','0','http://vinehurst.com/wp/?page_id=2','0','page','','0'), ('3','1','2016-06-07 21:19:48','0000-00-00 00:00:00','','Auto Draft','','auto-draft','open','open','','','','','2016-06-07 21:19:48','0000-00-00 00:00:00','','0','http://vinehurst.com/?p=3','0','post','','0'), ('4','1','2016-06-11 21:39:49','0000-00-00 00:00:00','','Home','','draft','closed','closed','','','','','2016-06-11 21:39:49','0000-00-00 00:00:00','','0','http://vinehurst.com/?p=4','1','nav_menu_item','','0'), ('5','1','2016-06-11 21:39:49','0000-00-00 00:00:00',' ','','','draft','closed','closed','','','','','2016-06-11 21:39:49','0000-00-00 00:00:00','','0','http://vinehurst.com/?p=5','1','nav_menu_item','','0'), ('6','1','2016-06-11 21:43:54','0000-00-00 00:00:00','','Home','','draft','closed','closed','','','','','2016-06-11 21:43:54','0000-00-00 00:00:00','','0','http://vinehurst.com/?p=6','1','nav_menu_item','','0'), ('7','1','2016-06-11 21:43:54','0000-00-00 00:00:00',' ','','','draft','closed','closed','','','','','2016-06-11 21:43:54','0000-00-00 00:00:00','','0','http://vinehurst.com/?p=7','1','nav_menu_item','','0');
UNLOCK TABLES;
