
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
DROP TABLE IF EXISTS `wpui_revisr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpui_revisr` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` text COLLATE utf8mb4_unicode_ci,
  `event` varchar(42) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpui_revisr` WRITE;
/*!40000 ALTER TABLE `wpui_revisr` DISABLE KEYS */;
INSERT INTO `wpui_revisr` VALUES (1,'2016-06-07 21:57:27','Successfully created a new repository.','init','nstudios'),(2,'2016-06-07 21:57:33','Successfully backed up the database.','backup','nstudios'),(3,'2016-06-07 21:57:39','Error pushing changes to the remote repository.','error','nstudios'),(4,'2016-06-07 21:58:30','Error pushing changes to the remote repository.','error','nstudios'),(5,'2016-06-07 21:59:55','Error pushing changes to the remote repository.','error','nstudios'),(6,'2016-06-07 22:03:10','Error pulling changes from the remote repository.','error','nstudios'),(7,'2016-06-07 22:21:41','Error pulling changes from the remote repository.','error','nstudios'),(8,'2016-06-07 22:27:13','Error pulling changes from the remote repository.','error','nstudios'),(9,'2016-06-07 22:27:44','Error pushing changes to the remote repository.','error','nstudios'),(10,'2016-06-07 22:29:11','Successfully backed up the database.','backup','nstudios'),(11,'2016-06-07 22:29:17','Error pushing changes to the remote repository.','error','nstudios'),(12,'2016-06-07 22:29:23','Error pulling changes from the remote repository.','error','nstudios'),(13,'2016-06-07 22:29:23','Error pulling changes from the remote repository.','error','nstudios'),(14,'2016-06-07 22:34:06','Error pulling changes from the remote repository.','error','nstudios'),(15,'2016-06-07 22:34:21','Error pushing changes to the remote repository.','error','nstudios'),(16,'2016-06-07 22:41:57','Successfully created a new repository.','init','nstudios'),(17,'2016-06-07 22:42:19','Successfully backed up the database.','backup','nstudios'),(18,'2016-06-07 22:42:23','Committed <a href=\"http://vinehurst.com/wp-admin/admin.php?page=revisr_view_commit&commit=52451f8&success=true\">#52451f8</a> to the local repository.','commit','nstudios'),(19,'2016-06-07 22:45:31','Error pulling changes from the remote repository.','error','nstudios'),(20,'2016-06-07 22:45:33','Error pushing changes to the remote repository.','error','nstudios'),(21,'2016-06-08 17:11:45','Error pulling changes from the remote repository.','error','nstudios'),(22,'2016-06-08 17:11:54','Error pushing changes to the remote repository.','error','nstudios'),(23,'2016-06-08 17:31:12','Error pushing changes to the remote repository.','error','nstudios'),(24,'2016-06-08 17:31:21','Error pulling changes from the remote repository.','error','nstudios'),(25,'2016-06-08 17:31:30','Error pushing changes to the remote repository.','error','nstudios'),(26,'2016-06-08 17:33:41','Error pulling changes from the remote repository.','error','nstudios'),(27,'2016-06-08 17:33:48','Error pushing changes to the remote repository.','error','nstudios'),(28,'2016-06-08 17:38:09','Successfully created a new repository.','init','nstudios');
/*!40000 ALTER TABLE `wpui_revisr` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

