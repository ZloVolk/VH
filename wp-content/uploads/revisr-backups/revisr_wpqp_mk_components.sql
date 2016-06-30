DROP TABLE IF EXISTS `wpqp_mk_components`;
CREATE TABLE `wpqp_mk_components` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `wpqp_mk_components_type` (`type`),
  KEY `wpqp_mk_components_status` (`status`),
  KEY `wpqp_mk_components_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=7076 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_mk_components` WRITE;
INSERT INTO `wpqp_mk_components` VALUES ('7075','short_code','1','mk_dropcaps','2016-06-30 23:22:21','2016-06-30 23:22:21'), ('7074','short_code','1','mk_gallery','2016-06-30 23:22:21','2016-06-30 23:22:21'), ('7073','short_code','1','mk_icon_box_gradient','2016-06-30 23:21:25','2016-06-30 23:21:25'), ('7072','short_code','1','mk_lcd_slideshow','2016-06-30 23:21:25','2016-06-30 23:21:25'), ('7071','short_code','1','mk_icon_box','2016-06-30 23:21:25','2016-06-30 23:21:25'), ('7070','short_code','1','mk_testimonials','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7069','short_code','1','mk_employees','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7068','short_code','1','mk_font_icons','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7067','short_code','1','mk_portfolio','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7066','short_code','1','mk_icon_box2','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7065','short_code','1','mk_custom_box','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7064','short_code','1','vc_row_inner','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7063','short_code','1','mk_image','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7062','short_code','1','mk_divider','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7061','short_code','1','vc_row','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7060','short_code','1','mk_button_gradient','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7059','short_code','1','vc_column_text','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7058','short_code','1','mk_fancy_title','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7057','short_code','1','mk_padding_divider','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7056','short_code','1','vc_column','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7055','short_code','1','mk_page_section','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7054','short_code','1','mk_swipe_slideshow','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7053','short_code','1','mk_audio','2016-06-30 23:18:00','2016-06-30 23:18:00'), ('7052','short_code','1','mk_button','2016-06-30 23:18:00','2016-06-30 23:18:00');
UNLOCK TABLES;
