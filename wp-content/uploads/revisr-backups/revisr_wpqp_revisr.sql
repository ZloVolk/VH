
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
DROP TABLE IF EXISTS `wpqp_revisr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpqp_revisr` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `event` varchar(42) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpqp_revisr` WRITE;
/*!40000 ALTER TABLE `wpqp_revisr` DISABLE KEYS */;
INSERT INTO `wpqp_revisr` VALUES (1,'2016-06-08 17:45:22','Successfully created a new repository.','init','nstudios'),(2,'2016-06-08 17:48:57','Successfully imported the database. <a href=\"http://dev.vinehurst.com/wp-admin/admin-post.php?action=process_revert&amp;revert_type=db&amp;db_hash=b742a98&amp;revisr_revert_nonce=af45ecc2c1\">Undo</a>','import','nstudios'),(3,'2016-06-08 17:48:57','New database tables detected. <a class=\"thickbox\" title=\"Import Tables\" href=\"http://dev.vinehurst.com/wp-admin/admin-post.php?action=revisr_import_tables_form&amp;TB_iframe=true&amp;width=400&amp;height=225&amp;import_nonce=ca11294fa3\">Click here</a> to view and import.','db','nstudios'),(4,'2016-06-11 21:37:21','Successfully backed up the database.','backup','nstudios'),(5,'2016-06-11 21:37:26','Committed <a href=\"http://dev.vinehurst.com/wp-admin/admin.php?page=revisr_view_commit&commit=132bae4&success=true\">#132bae4</a> to the local repository.','commit','nstudios'),(6,'2016-06-11 21:37:37','Successfully pushed 4 commits to origin/master.','push','nstudios'),(7,'2016-06-11 21:37:45','Sent update request to the webhook.','push','nstudios'),(8,'2016-06-11 21:45:25','Successfully backed up the database.','backup','nstudios'),(9,'2016-06-11 21:45:25','Committed <a href=\"http://dev.vinehurst.com/wp-admin/admin.php?page=revisr_view_commit&commit=b5cb48c&success=true\">#b5cb48c</a> to the local repository.','commit','nstudios'),(10,'2016-06-11 21:45:26','Successfully pushed 1 commit to origin/master.','push','nstudios'),(11,'2016-06-11 21:45:29','Sent update request to the webhook.','push','nstudios'),(12,'2016-06-11 23:08:45','Successfully backed up the database.','backup','nstudios'),(13,'2016-06-11 23:08:45','Committed <a href=\"http://dev.vinehurst.com/wp-admin/admin.php?page=revisr_view_commit&commit=3b9169b&success=true\">#3b9169b</a> to the local repository.','commit','nstudios'),(14,'2016-06-11 23:08:46','Successfully pushed 1 commit to origin/master.','push','nstudios'),(15,'2016-06-11 23:08:49','Sent update request to the webhook.','push','nstudios'),(16,'2016-06-20 02:13:43','Successfully backed up the database.','backup','nstudios'),(17,'2016-06-20 02:13:58','Committed <a href=\"http://dev.vinehurst.com/wp-admin/admin.php?page=revisr_view_commit&commit=5c6a5e5&success=true\">#5c6a5e5</a> to the local repository.','commit','nstudios'),(18,'2016-06-21 23:57:10','Successfully backed up the database.','backup','nstudios'),(19,'2016-06-21 23:57:17','Committed <a href=\"http://dev.vinehurst.com/wp-admin/admin.php?page=revisr_view_commit&commit=531953e&success=true\">#531953e</a> to the local repository.','commit','nstudios'),(20,'2016-06-21 23:57:29','Successfully pushed 2 commits to origin/master.','push','nstudios'),(21,'2016-06-21 23:57:59','Error contacting webhook URL.','error','nstudios'),(22,'2016-06-24 06:32:21','Successfully imported the database. <a href=\"http://vinehurst.com/wp-admin/admin-post.php?action=process_revert&amp;revert_type=db&amp;db_hash=1d97f60&amp;revisr_revert_nonce=1e206ce50e\">Undo</a>','import','Revisr Bot'),(23,'2016-06-30 23:34:57','Successfully backed up the database.','backup','Revisr Bot'),(24,'2016-06-30 23:34:57','Error pulling changes from the remote repository.','error','Revisr Bot'),(25,'2016-06-30 23:35:34','Successfully backed up the database.','backup','Revisr Bot'),(26,'2016-06-30 23:35:35','Error pulling changes from the remote repository.','error','Revisr Bot'),(27,'2016-06-30 23:36:01','Successfully backed up the database.','backup','nstudios'),(28,'2016-06-30 23:36:05','Error pulling changes from the remote repository.','error','nstudios'),(29,'2016-06-30 23:36:39','Error pushing changes to the remote repository.','error','nstudios');
/*!40000 ALTER TABLE `wpqp_revisr` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

