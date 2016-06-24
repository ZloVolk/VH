
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
/*!40000 ALTER TABLE `wpqp_rg_form_meta` DISABLE KEYS */;
INSERT INTO `wpqp_rg_form_meta` VALUES (1,'{\"title\":\"Inquire About This Listing\",\"description\":\"\",\"labelPlacement\":\"top_label\",\"descriptionPlacement\":\"below\",\"button\":{\"type\":\"text\",\"text\":\"Submit\",\"imageUrl\":\"\"},\"fields\":[{\"type\":\"name\",\"id\":1,\"label\":\"Name\",\"adminLabel\":\"\",\"isRequired\":true,\"size\":\"medium\",\"errorMessage\":\"\",\"nameFormat\":\"advanced\",\"inputs\":[{\"id\":\"1.2\",\"label\":\"Prefix\",\"name\":\"\",\"choices\":[{\"text\":\"Mr.\",\"value\":\"Mr.\",\"isSelected\":false,\"price\":\"\"},{\"text\":\"Mrs.\",\"value\":\"Mrs.\",\"isSelected\":false,\"price\":\"\"},{\"text\":\"Miss\",\"value\":\"Miss\",\"isSelected\":false,\"price\":\"\"},{\"text\":\"Ms.\",\"value\":\"Ms.\",\"isSelected\":false,\"price\":\"\"},{\"text\":\"Dr.\",\"value\":\"Dr.\",\"isSelected\":false,\"price\":\"\"},{\"text\":\"Prof.\",\"value\":\"Prof.\",\"isSelected\":false,\"price\":\"\"},{\"text\":\"Rev.\",\"value\":\"Rev.\",\"isSelected\":false,\"price\":\"\"}],\"isHidden\":true,\"inputType\":\"radio\"},{\"id\":\"1.3\",\"label\":\"First\",\"name\":\"\"},{\"id\":\"1.4\",\"label\":\"Middle\",\"name\":\"\",\"isHidden\":true},{\"id\":\"1.6\",\"label\":\"Last\",\"name\":\"\"},{\"id\":\"1.8\",\"label\":\"Suffix\",\"name\":\"\",\"isHidden\":true}],\"labelPlacement\":\"\",\"descriptionPlacement\":\"\",\"subLabelPlacement\":\"\",\"placeholder\":\"\",\"multipleFiles\":false,\"maxFiles\":\"\",\"calculationFormula\":\"\",\"calculationRounding\":\"\",\"enableCalculation\":\"\",\"disableQuantity\":false,\"displayAllCategories\":false,\"inputMask\":false,\"inputMaskValue\":\"\",\"allowsPrepopulate\":false,\"formId\":1,\"pageNumber\":1,\"description\":\"\",\"inputType\":\"\",\"cssClass\":\"\",\"inputName\":\"\",\"adminOnly\":false,\"noDuplicates\":false,\"defaultValue\":\"\",\"choices\":\"\",\"conditionalLogic\":\"\"},{\"type\":\"email\",\"id\":2,\"label\":\"Email\",\"adminLabel\":\"\",\"isRequired\":true,\"size\":\"medium\",\"errorMessage\":\"\",\"inputs\":null,\"labelPlacement\":\"\",\"descriptionPlacement\":\"\",\"subLabelPlacement\":\"\",\"placeholder\":\"\",\"multipleFiles\":false,\"maxFiles\":\"\",\"calculationFormula\":\"\",\"calculationRounding\":\"\",\"enableCalculation\":\"\",\"disableQuantity\":false,\"displayAllCategories\":false,\"inputMask\":false,\"inputMaskValue\":\"\",\"allowsPrepopulate\":false,\"emailConfirmEnabled\":false,\"formId\":1,\"pageNumber\":1,\"description\":\"\",\"inputType\":\"\",\"cssClass\":\"\",\"inputName\":\"\",\"adminOnly\":false,\"noDuplicates\":false,\"defaultValue\":\"\",\"choices\":\"\",\"conditionalLogic\":\"\"},{\"type\":\"phone\",\"id\":3,\"label\":\"Phone\",\"adminLabel\":\"\",\"isRequired\":true,\"size\":\"medium\",\"errorMessage\":\"\",\"inputs\":null,\"phoneFormat\":\"standard\",\"labelPlacement\":\"\",\"descriptionPlacement\":\"\",\"subLabelPlacement\":\"\",\"placeholder\":\"\",\"multipleFiles\":false,\"maxFiles\":\"\",\"calculationFormula\":\"\",\"calculationRounding\":\"\",\"enableCalculation\":\"\",\"disableQuantity\":false,\"displayAllCategories\":false,\"inputMask\":false,\"inputMaskValue\":\"\",\"allowsPrepopulate\":false,\"formId\":1,\"pageNumber\":1,\"description\":\"\",\"inputType\":\"\",\"cssClass\":\"\",\"inputName\":\"\",\"adminOnly\":false,\"noDuplicates\":false,\"defaultValue\":\"\",\"choices\":\"\",\"conditionalLogic\":\"\"},{\"type\":\"text\",\"id\":4,\"label\":\"Listing Number\",\"adminLabel\":\"\",\"isRequired\":true,\"size\":\"medium\",\"errorMessage\":\"\",\"inputs\":null,\"labelPlacement\":\"\",\"descriptionPlacement\":\"\",\"subLabelPlacement\":\"\",\"placeholder\":\"\",\"multipleFiles\":false,\"maxFiles\":\"\",\"calculationFormula\":\"\",\"calculationRounding\":\"\",\"enableCalculation\":\"\",\"disableQuantity\":false,\"displayAllCategories\":false,\"inputMask\":false,\"inputMaskValue\":\"\",\"allowsPrepopulate\":false,\"formId\":1,\"pageNumber\":1,\"description\":\"\",\"inputType\":\"\",\"cssClass\":\"\",\"inputName\":\"\",\"adminOnly\":false,\"noDuplicates\":false,\"defaultValue\":\"\",\"choices\":\"\",\"conditionalLogic\":\"\"}],\"version\":\"1.9.18\",\"id\":1,\"useCurrentUserAsAuthor\":true,\"postContentTemplateEnabled\":false,\"postTitleTemplateEnabled\":false,\"postTitleTemplate\":\"\",\"postContentTemplate\":\"\",\"lastPageButton\":null,\"pagination\":null,\"firstPageCssClass\":null}','','{\"5760977487715\":{\"id\":\"5760977487715\",\"name\":\"Default Confirmation\",\"isDefault\":true,\"type\":\"message\",\"message\":\"Thanks for contacting us! We will get in touch with you shortly.\",\"url\":\"\",\"pageId\":\"\",\"queryString\":\"\"}}','{\"576097748743f\":{\"id\":\"576097748743f\",\"to\":\"{admin_email}\",\"name\":\"Admin Notification\",\"event\":\"form_submission\",\"toType\":\"email\",\"subject\":\"New submission from {form_title}\",\"message\":\"{all_fields}\"}}');
/*!40000 ALTER TABLE `wpqp_rg_form_meta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

