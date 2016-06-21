DROP TABLE IF EXISTS `wpqp_geodir_custom_sort_fields`;
CREATE TABLE `wpqp_geodir_custom_sort_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `htmlvar_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_default` int(11) NOT NULL,
  `default_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_asc` int(11) NOT NULL,
  `sort_desc` int(11) NOT NULL,
  `asc_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
