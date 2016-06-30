
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
DROP TABLE IF EXISTS `wpqp_rg_form_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wpqp_rg_form_meta` (
  `form_id` mediumint(8) unsigned NOT NULL,
  `display_meta` longtext COLLATE utf8mb4_unicode_ci,
  `entries_grid_meta` longtext COLLATE utf8mb4_unicode_ci,
  `confirmations` longtext COLLATE utf8mb4_unicode_ci,
  `notifications` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`form_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wpqp_rg_form_meta` WRITE;
INSERT INTO `wpqp_rg_form_meta` VALUES ('1','{\"title\":\"Menu Contact\",\"description\":\"\",\"labelPlacement\":\"top_label\",\"descriptionPlacement\":\"below\",\"button\":{\"type\":\"text\",\"text\":\"Submit\",\"imageUrl\":\"\"},\"fields\":[{\"type\":\"name\",\"id\":1,\"label\":\"\",\"adminLabel\":\"\",\"isRequired\":true,\"size\":\"medium\",\"errorMessage\":\"\",\"nameFormat\":\"advanced\",\"inputs\":[{\"id\":\"1.2\",\"label\":\"Prefix\",\"name\":\"\",\"choices\":[{\"text\":\"Mr.\",\"value\":\"Mr.\",\"isSelected\":false,\"price\":\"\"},{\"text\":\"Mrs.\",\"value\":\"Mrs.\",\"isSelected\":false,\"price\":\"\"},{\"text\":\"Miss\",\"value\":\"Miss\",\"isSelected\":false,\"price\":\"\"},{\"text\":\"Ms.\",\"value\":\"Ms.\",\"isSelected\":false,\"price\":\"\"},{\"text\":\"Dr.\",\"value\":\"Dr.\",\"isSelected\":false,\"price\":\"\"},{\"text\":\"Prof.\",\"value\":\"Prof.\",\"isSelected\":false,\"price\":\"\"},{\"text\":\"Rev.\",\"value\":\"Rev.\",\"isSelected\":false,\"price\":\"\"}],\"isHidden\":true,\"inputType\":\"radio\"},{\"id\":\"1.3\",\"label\":\"First\",\"name\":\"\",\"placeholder\":\"First\"},{\"id\":\"1.4\",\"label\":\"Middle\",\"name\":\"\",\"isHidden\":true},{\"id\":\"1.6\",\"label\":\"Last\",\"name\":\"\",\"placeholder\":\"Last\"},{\"id\":\"1.8\",\"label\":\"Suffix\",\"name\":\"\",\"isHidden\":true}],\"formId\":1,\"pageNumber\":1,\"description\":\"\",\"allowsPrepopulate\":false,\"inputMask\":false,\"inputMaskValue\":\"\",\"inputType\":\"\",\"labelPlacement\":\"hidden_label\",\"descriptionPlacement\":\"\",\"subLabelPlacement\":\"hidden_label\",\"placeholder\":\"\",\"cssClass\":\"\",\"inputName\":\"\",\"adminOnly\":false,\"noDuplicates\":false,\"defaultValue\":\"\",\"choices\":\"\",\"conditionalLogic\":\"\",\"displayOnly\":\"\",\"multipleFiles\":false,\"maxFiles\":\"\",\"calculationFormula\":\"\",\"calculationRounding\":\"\",\"enableCalculation\":\"\",\"disableQuantity\":false,\"displayAllCategories\":false},{\"type\":\"email\",\"id\":2,\"label\":\"Email\",\"adminLabel\":\"\",\"isRequired\":true,\"size\":\"medium\",\"errorMessage\":\"\",\"inputs\":null,\"formId\":1,\"pageNumber\":1,\"description\":\"\",\"allowsPrepopulate\":false,\"inputMask\":false,\"inputMaskValue\":\"\",\"inputType\":\"\",\"labelPlacement\":\"hidden_label\",\"descriptionPlacement\":\"\",\"subLabelPlacement\":\"\",\"placeholder\":\"Email\",\"cssClass\":\"\",\"inputName\":\"\",\"adminOnly\":false,\"noDuplicates\":false,\"defaultValue\":\"\",\"choices\":\"\",\"conditionalLogic\":\"\",\"displayOnly\":\"\",\"multipleFiles\":false,\"maxFiles\":\"\",\"calculationFormula\":\"\",\"calculationRounding\":\"\",\"enableCalculation\":\"\",\"disableQuantity\":false,\"displayAllCategories\":false},{\"type\":\"textarea\",\"id\":3,\"label\":\"Message\",\"adminLabel\":\"\",\"isRequired\":true,\"size\":\"medium\",\"errorMessage\":\"\",\"inputs\":null,\"formId\":1,\"pageNumber\":1,\"description\":\"\",\"allowsPrepopulate\":false,\"inputMask\":false,\"inputMaskValue\":\"\",\"inputType\":\"\",\"labelPlacement\":\"hidden_label\",\"descriptionPlacement\":\"\",\"subLabelPlacement\":\"\",\"placeholder\":\"Write us a message here.\",\"cssClass\":\"\",\"inputName\":\"\",\"adminOnly\":false,\"noDuplicates\":true,\"defaultValue\":\"\",\"choices\":\"\",\"conditionalLogic\":\"\",\"displayOnly\":\"\",\"multipleFiles\":false,\"maxFiles\":\"\",\"calculationFormula\":\"\",\"calculationRounding\":\"\",\"enableCalculation\":\"\",\"disableQuantity\":false,\"displayAllCategories\":false}],\"version\":\"1.9.18\",\"id\":1,\"useCurrentUserAsAuthor\":true,\"postContentTemplateEnabled\":false,\"postTitleTemplateEnabled\":false,\"postTitleTemplate\":\"\",\"postContentTemplate\":\"\",\"lastPageButton\":null,\"pagination\":null,\"firstPageCssClass\":null}','','{\"576e3a8adac23\":{\"id\":\"576e3a8adac23\",\"name\":\"Default Confirmation\",\"isDefault\":true,\"type\":\"message\",\"message\":\"Thanks for contacting us! We will get in touch with you shortly.\",\"url\":\"\",\"pageId\":\"\",\"queryString\":\"\"}}','{\"576e3a8ada9bb\":{\"id\":\"576e3a8ada9bb\",\"to\":\"{admin_email}\",\"name\":\"Admin Notification\",\"event\":\"form_submission\",\"toType\":\"email\",\"subject\":\"New submission from {form_title}\",\"message\":\"{all_fields}\"}}');
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

