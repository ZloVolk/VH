DROP TABLE IF EXISTS `wpqp_revisr`;
CREATE TABLE `wpqp_revisr` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` text COLLATE utf8mb4_unicode_ci,
  `event` varchar(42) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
LOCK TABLES `wpqp_revisr` WRITE;
INSERT INTO `wpqp_revisr` VALUES ('1','2016-06-08 17:45:22','Successfully created a new repository.','init','nstudios'), ('2','2016-06-08 17:48:57','Successfully imported the database. <a href=\"http://dev.vinehurst.com/wp-admin/admin-post.php?action=process_revert&amp;revert_type=db&amp;db_hash=b742a98&amp;revisr_revert_nonce=af45ecc2c1\">Undo</a>','import','nstudios'), ('3','2016-06-08 17:48:57','New database tables detected. <a class=\"thickbox\" title=\"Import Tables\" href=\"http://dev.vinehurst.com/wp-admin/admin-post.php?action=revisr_import_tables_form&amp;TB_iframe=true&amp;width=400&amp;height=225&amp;import_nonce=ca11294fa3\">Click here</a> to view and import.','db','nstudios'), ('4','2016-06-11 21:37:21','Successfully backed up the database.','backup','nstudios'), ('5','2016-06-11 21:37:26','Committed <a href=\"http://dev.vinehurst.com/wp-admin/admin.php?page=revisr_view_commit&commit=132bae4&success=true\">#132bae4</a> to the local repository.','commit','nstudios'), ('6','2016-06-11 21:37:37','Successfully pushed 4 commits to origin/master.','push','nstudios'), ('7','2016-06-11 21:37:45','Sent update request to the webhook.','push','nstudios'), ('8','2016-06-11 21:45:25','Successfully backed up the database.','backup','nstudios'), ('9','2016-06-11 21:45:25','Committed <a href=\"http://dev.vinehurst.com/wp-admin/admin.php?page=revisr_view_commit&commit=b5cb48c&success=true\">#b5cb48c</a> to the local repository.','commit','nstudios'), ('10','2016-06-11 21:45:26','Successfully pushed 1 commit to origin/master.','push','nstudios'), ('11','2016-06-11 21:45:29','Sent update request to the webhook.','push','nstudios');
UNLOCK TABLES;
