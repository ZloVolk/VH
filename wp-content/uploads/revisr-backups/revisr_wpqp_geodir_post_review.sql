DROP TABLE IF EXISTS `wpqp_geodir_post_review`;
CREATE TABLE `wpqp_geodir_post_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `rating_ip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ratings` text COLLATE utf8mb4_unicode_ci,
  `overall_rating` float DEFAULT NULL,
  `comment_images` text COLLATE utf8mb4_unicode_ci,
  `wasthis_review` int(11) NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` int(11) DEFAULT NULL,
  `post_date` datetime NOT NULL,
  `post_city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_region` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_latitude` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_longitude` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
