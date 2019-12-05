-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: megabuy
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

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

--
-- Table structure for table `activations`
--

DROP TABLE IF EXISTS `activations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activations`
--

LOCK TABLES `activations` WRITE;
/*!40000 ALTER TABLE `activations` DISABLE KEYS */;
INSERT INTO `activations` VALUES (1,1,'9l1fK35YDk4nHTEpCPH7uU7lrpKHiwvA',1,'2019-09-19 00:56:12','2019-09-19 00:56:12','2019-09-19 00:56:12'),(2,2,'BQbhGduYefgg2ttHRXbdcESUsWU6glsI',1,'2019-10-27 06:27:24','2019-10-27 06:27:24','2019-10-27 06:27:24'),(3,3,'fuN1tGOwV5a9hFMMQwDqcOk2DuDRNwod',1,'2019-10-27 06:28:46','2019-10-27 06:28:46','2019-10-27 06:28:46'),(4,4,'9Na2TFhn6OWpziaALHhZKTNFV2pqqNHC',1,'2019-11-03 14:29:14','2019-11-03 14:29:14','2019-11-03 14:29:14'),(5,5,'HpzBOQrWcaMHz4lOCLYtBU4sdDK3v959',1,'2019-11-13 14:49:30','2019-11-13 14:49:30','2019-11-13 14:49:30'),(6,6,'bdsPPp8Mn9L21dJ9dVasJfylXKiqZQL5',1,'2019-11-20 01:21:29','2019-11-20 01:21:29','2019-11-20 01:21:29');
/*!40000 ALTER TABLE `activations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB AUTO_INCREMENT=222 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-06 00:08:35','2019-10-06 00:08:35'),(2,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-16 15:57:25','2019-10-16 15:57:25'),(3,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-17 09:50:47','2019-10-17 09:50:47'),(4,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-17 12:57:25','2019-10-17 12:57:25'),(5,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-17 13:00:04','2019-10-17 13:00:04'),(6,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-17 23:58:14','2019-10-17 23:58:14'),(7,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-18 06:51:08','2019-10-18 06:51:08'),(8,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-19 01:38:20','2019-10-19 01:38:20'),(9,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-19 06:25:43','2019-10-19 06:25:43'),(10,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-19 10:46:28','2019-10-19 10:46:28'),(11,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-19 10:50:06','2019-10-19 10:50:06'),(12,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-19 18:48:03','2019-10-19 18:48:03'),(13,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-19 19:01:02','2019-10-19 19:01:02'),(14,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-21 09:31:58','2019-10-21 09:31:58'),(15,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-21 13:04:24','2019-10-21 13:04:24'),(16,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-21 21:10:48','2019-10-21 21:10:48'),(17,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-22 10:29:35','2019-10-22 10:29:35'),(18,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-22 21:33:51','2019-10-22 21:33:51'),(19,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-23 01:35:28','2019-10-23 01:35:28'),(20,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-23 06:04:50','2019-10-23 06:04:50'),(21,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-23 13:35:25','2019-10-23 13:35:25'),(22,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-23 23:55:00','2019-10-23 23:55:00'),(23,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-24 03:16:35','2019-10-24 03:16:35'),(24,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-24 08:37:26','2019-10-24 08:37:26'),(25,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-24 22:18:02','2019-10-24 22:18:02'),(26,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-25 14:31:40','2019-10-25 14:31:40'),(27,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-25 09:42:24','2019-10-25 09:42:24'),(28,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-25 21:30:33','2019-10-25 21:30:33'),(29,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-26 15:13:18','2019-10-26 15:13:18'),(30,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-26 22:29:57','2019-10-26 22:29:57'),(31,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-27 06:25:05','2019-10-27 06:25:05'),(32,'user buy','New User Created by John Doe',2,'App\\User',2,'App\\User','[]','2019-10-27 06:27:24','2019-10-27 06:27:24'),(33,'seller user','New User Created by John Doe',3,'App\\User',3,'App\\User','[]','2019-10-27 06:28:46','2019-10-27 06:28:46'),(34,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-10-27 06:30:02','2019-10-27 06:30:02'),(35,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-10-27 06:39:38','2019-10-27 06:39:38'),(36,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-10-27 06:40:06','2019-10-27 06:40:06'),(37,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-10-27 06:41:09','2019-10-27 06:41:09'),(38,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-10-27 07:19:05','2019-10-27 07:19:05'),(39,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-10-27 07:19:15','2019-10-27 07:19:15'),(40,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-10-27 07:20:16','2019-10-27 07:20:16'),(41,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-10-27 07:20:35','2019-10-27 07:20:35'),(42,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-10-27 07:21:13','2019-10-27 07:21:13'),(43,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-10-27 07:24:58','2019-10-27 07:24:58'),(44,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-10-27 07:25:15','2019-10-27 07:25:15'),(45,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-10-27 07:33:13','2019-10-27 07:33:13'),(46,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-27 07:33:25','2019-10-27 07:33:25'),(47,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-10-27 07:33:42','2019-10-27 07:33:42'),(48,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-10-27 07:33:52','2019-10-27 07:33:52'),(49,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-10-27 07:36:41','2019-10-27 07:36:41'),(50,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-27 07:37:42','2019-10-27 07:37:42'),(51,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-10-27 07:38:23','2019-10-27 07:38:23'),(52,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-10-27 07:38:39','2019-10-27 07:38:39'),(53,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-10-27 08:56:23','2019-10-27 08:56:23'),(54,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-27 08:56:36','2019-10-27 08:56:36'),(55,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-10-27 09:03:23','2019-10-27 09:03:23'),(56,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-10-27 09:03:56','2019-10-27 09:03:56'),(57,'user buy','User Updated successfully',2,'App\\User',2,'App\\User','[]','2019-10-27 09:50:45','2019-10-27 09:50:45'),(58,'user buy','User Updated successfully',2,'App\\User',2,'App\\User','[]','2019-10-27 09:53:00','2019-10-27 09:53:00'),(59,'user buy','User Updated successfully',2,'App\\User',2,'App\\User','[]','2019-10-27 09:53:28','2019-10-27 09:53:28'),(60,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-10-27 10:51:14','2019-10-27 10:51:14'),(61,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-10-27 10:51:30','2019-10-27 10:51:30'),(62,'seller user','User Updated successfully',3,'App\\User',3,'App\\User','[]','2019-10-27 11:04:33','2019-10-27 11:04:33'),(63,'seller user','User Updated successfully',3,'App\\User',3,'App\\User','[]','2019-10-27 11:06:23','2019-10-27 11:06:23'),(64,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-10-27 11:36:56','2019-10-27 11:36:56'),(65,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-10-27 11:37:29','2019-10-27 11:37:29'),(66,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-10-27 11:37:40','2019-10-27 11:37:40'),(67,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-10-27 11:38:03','2019-10-27 11:38:03'),(68,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-10-27 14:01:48','2019-10-27 14:01:48'),(69,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-10-27 14:01:59','2019-10-27 14:01:59'),(70,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-10-27 15:37:17','2019-10-27 15:37:17'),(71,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-27 15:37:27','2019-10-27 15:37:27'),(72,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-10-27 16:45:36','2019-10-27 16:45:36'),(73,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-10-27 16:46:15','2019-10-27 16:46:15'),(74,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-10-27 16:46:34','2019-10-27 16:46:34'),(75,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-10-27 16:47:19','2019-10-27 16:47:19'),(76,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-10-27 16:48:35','2019-10-27 16:48:35'),(77,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-03 14:27:08','2019-11-03 14:27:08'),(78,'seller user','New User Created by John Doe',4,'App\\User',4,'App\\User','[]','2019-11-03 14:29:15','2019-11-03 14:29:15'),(79,'seller user','User Updated by John Doe',3,'App\\User',3,'App\\User','[]','2019-11-03 14:29:37','2019-11-03 14:29:37'),(80,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-03 14:29:52','2019-11-03 14:29:52'),(81,'seller user','LoggedIn',4,'App\\User',4,'App\\User','[]','2019-11-03 14:30:11','2019-11-03 14:30:11'),(82,'seller user','LoggedOut',4,'App\\User',4,'App\\User','[]','2019-11-03 14:52:26','2019-11-03 14:52:26'),(83,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-03 14:55:30','2019-11-03 14:55:30'),(84,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-03 15:03:48','2019-11-03 15:03:48'),(85,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-03 15:04:04','2019-11-03 15:04:04'),(86,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-03 15:46:21','2019-11-03 15:46:21'),(87,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-03 15:46:33','2019-11-03 15:46:33'),(88,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-03 16:02:32','2019-11-03 16:02:32'),(89,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-03 16:02:57','2019-11-03 16:02:57'),(90,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-03 22:59:59','2019-11-03 22:59:59'),(91,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-04 01:18:47','2019-11-04 01:18:47'),(92,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-04 01:19:26','2019-11-04 01:19:26'),(93,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-04 14:11:49','2019-11-04 14:11:49'),(94,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-04 18:50:59','2019-11-04 18:50:59'),(95,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-07 07:49:03','2019-11-07 07:49:03'),(96,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-08 09:59:46','2019-11-08 09:59:46'),(97,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-08 17:56:45','2019-11-08 17:56:45'),(98,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-09 01:57:22','2019-11-09 01:57:22'),(99,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-09 09:08:46','2019-11-09 09:08:46'),(100,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-09 19:26:08','2019-11-09 19:26:08'),(101,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-09 22:53:38','2019-11-09 22:53:38'),(102,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-09 22:54:03','2019-11-09 22:54:03'),(103,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-09 23:45:48','2019-11-09 23:45:48'),(104,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-10 01:58:59','2019-11-10 01:58:59'),(105,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-10 01:59:11','2019-11-10 01:59:11'),(106,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-10 01:59:20','2019-11-10 01:59:20'),(107,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-10 01:59:29','2019-11-10 01:59:29'),(108,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-10 02:59:01','2019-11-10 02:59:01'),(109,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-10 03:00:28','2019-11-10 03:00:28'),(110,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-10 07:59:06','2019-11-10 07:59:06'),(111,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-10 08:06:53','2019-11-10 08:06:53'),(112,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-10 08:07:14','2019-11-10 08:07:14'),(113,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-10 08:14:18','2019-11-10 08:14:18'),(114,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-10 08:14:43','2019-11-10 08:14:43'),(115,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-10 08:14:57','2019-11-10 08:14:57'),(116,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-10 08:15:42','2019-11-10 08:15:42'),(117,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-10 08:19:48','2019-11-10 08:19:48'),(118,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-10 08:22:53','2019-11-10 08:22:53'),(119,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-10 08:30:12','2019-11-10 08:30:12'),(120,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-10 13:34:13','2019-11-10 13:34:13'),(121,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-10 13:34:23','2019-11-10 13:34:23'),(122,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-10 14:01:48','2019-11-10 14:01:48'),(123,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-10 14:02:11','2019-11-10 14:02:11'),(124,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-10 15:34:40','2019-11-10 15:34:40'),(125,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-10 17:14:49','2019-11-10 17:14:49'),(126,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-10 17:15:04','2019-11-10 17:15:04'),(127,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-10 17:29:25','2019-11-10 17:29:25'),(128,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-10 17:43:46','2019-11-10 17:43:46'),(129,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-10 18:46:31','2019-11-10 18:46:31'),(130,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-10 18:47:09','2019-11-10 18:47:09'),(131,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-10 18:49:03','2019-11-10 18:49:03'),(132,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-10 18:49:12','2019-11-10 18:49:12'),(133,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-10 19:15:26','2019-11-10 19:15:26'),(134,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-10 19:15:35','2019-11-10 19:15:35'),(135,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-10 19:29:56','2019-11-10 19:29:56'),(136,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-10 19:30:16','2019-11-10 19:30:16'),(137,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-11 07:18:44','2019-11-11 07:18:44'),(138,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-11 09:57:24','2019-11-11 09:57:24'),(139,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-11 10:30:09','2019-11-11 10:30:09'),(140,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-11 12:35:11','2019-11-11 12:35:11'),(141,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-11 12:35:33','2019-11-11 12:35:33'),(142,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-11 12:36:17','2019-11-11 12:36:17'),(143,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-11 12:36:28','2019-11-11 12:36:28'),(144,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-11 12:34:30','2019-11-11 12:34:30'),(145,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-11 12:44:11','2019-11-11 12:44:11'),(146,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-11 12:48:06','2019-11-11 12:48:06'),(147,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-11 12:48:18','2019-11-11 12:48:18'),(148,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-11 12:49:01','2019-11-11 12:49:01'),(149,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-11 12:52:14','2019-11-11 12:52:14'),(150,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-11 13:00:42','2019-11-11 13:00:42'),(151,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-13 12:59:16','2019-11-13 12:59:16'),(152,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-13 13:36:16','2019-11-13 13:36:16'),(153,'1111 1111','New Account created',5,'App\\User',5,'App\\User','[]','2019-11-13 14:49:30','2019-11-13 14:49:30'),(154,'1111 1111','LoggedOut',5,'App\\User',5,'App\\User','[]','2019-11-13 14:49:51','2019-11-13 14:49:51'),(155,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-13 15:10:30','2019-11-13 15:10:30'),(156,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-13 15:40:05','2019-11-13 15:40:05'),(157,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-13 15:41:06','2019-11-13 15:41:06'),(158,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-13 17:23:46','2019-11-13 17:23:46'),(159,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-13 17:27:45','2019-11-13 17:27:45'),(160,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-14 08:13:32','2019-11-14 08:13:32'),(161,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-16 02:15:05','2019-11-16 02:15:05'),(162,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-16 02:16:07','2019-11-16 02:16:07'),(163,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-16 02:16:14','2019-11-16 02:16:14'),(164,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-16 08:31:11','2019-11-16 08:31:11'),(165,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-16 13:52:25','2019-11-16 13:52:25'),(166,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-16 20:09:29','2019-11-16 20:09:29'),(167,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-16 23:07:22','2019-11-16 23:07:22'),(168,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-16 23:57:27','2019-11-16 23:57:27'),(169,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-17 10:30:20','2019-11-17 10:30:20'),(170,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-17 10:33:52','2019-11-17 10:33:52'),(171,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-17 11:14:16','2019-11-17 11:14:16'),(172,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-17 14:45:00','2019-11-17 14:45:00'),(173,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-17 20:14:35','2019-11-17 20:14:35'),(174,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-17 22:58:19','2019-11-17 22:58:19'),(175,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-17 23:04:45','2019-11-17 23:04:45'),(176,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-18 01:07:44','2019-11-18 01:07:44'),(177,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-18 02:57:03','2019-11-18 02:57:03'),(178,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-18 11:11:09','2019-11-18 11:11:09'),(179,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-18 18:28:06','2019-11-18 18:28:06'),(180,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-18 18:35:54','2019-11-18 18:35:54'),(181,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-18 18:40:36','2019-11-18 18:40:36'),(182,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-18 18:43:56','2019-11-18 18:43:56'),(183,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-18 18:47:01','2019-11-18 18:47:01'),(184,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-18 18:47:19','2019-11-18 18:47:19'),(185,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-18 18:49:26','2019-11-18 18:49:26'),(186,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-18 18:49:37','2019-11-18 18:49:37'),(187,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-18 18:50:52','2019-11-18 18:50:52'),(188,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-18 18:51:24','2019-11-18 18:51:24'),(189,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-18 18:59:30','2019-11-18 18:59:30'),(190,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-18 18:59:43','2019-11-18 18:59:43'),(191,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-18 19:10:00','2019-11-18 19:10:00'),(192,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-18 19:10:18','2019-11-18 19:10:18'),(193,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-18 19:13:13','2019-11-18 19:13:13'),(194,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-18 19:13:24','2019-11-18 19:13:24'),(195,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-18 20:03:05','2019-11-18 20:03:05'),(196,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-19 21:11:14','2019-11-19 21:11:14'),(197,'user buy','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-11-19 22:29:30','2019-11-19 22:29:30'),(198,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-19 22:29:40','2019-11-19 22:29:40'),(199,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-19 23:05:43','2019-11-19 23:05:43'),(200,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-19 23:05:54','2019-11-19 23:05:54'),(201,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-20 00:14:27','2019-11-20 00:14:27'),(202,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-20 00:15:30','2019-11-20 00:15:30'),(203,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-20 00:16:37','2019-11-20 00:16:37'),(204,'11111 1111','New Account created',6,'App\\User',6,'App\\User','[]','2019-11-20 01:21:30','2019-11-20 01:21:30'),(205,'11111 1111','LoggedOut',6,'App\\User',6,'App\\User','[]','2019-11-20 01:30:25','2019-11-20 01:30:25'),(206,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-21 22:50:14','2019-11-21 22:50:14'),(207,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-22 20:52:01','2019-11-22 20:52:01'),(208,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-22 20:54:14','2019-11-22 20:54:14'),(209,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-22 20:56:30','2019-11-22 20:56:30'),(210,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-22 20:57:34','2019-11-22 20:57:34'),(211,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-22 20:57:46','2019-11-22 20:57:46'),(212,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-22 21:09:07','2019-11-22 21:09:07'),(213,'seller user','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-11-22 21:09:38','2019-11-22 21:09:38'),(214,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-22 21:18:53','2019-11-22 21:18:53'),(215,'seller user','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-11-22 22:42:41','2019-11-22 22:42:41'),(216,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-22 22:42:48','2019-11-22 22:42:48'),(217,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-22 22:43:07','2019-11-22 22:43:07'),(218,'user buy','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-11-22 22:46:00','2019-11-22 22:46:00'),(219,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-23 16:46:46','2019-11-23 16:46:46'),(220,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-11-23 16:47:55','2019-11-23 16:47:55'),(221,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-11-23 18:19:21','2019-11-23 18:19:21');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_attr`
--

DROP TABLE IF EXISTS `au_attr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_attr` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT 'ex:Language',
  `attr_type` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0-text,1-select,2-checkbox,3-radio',
  `category_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_product_category:id',
  `product_id` int(10) NOT NULL DEFAULT '0' COMMENT '0-category common ,au_product:id, custom product',
  `is_variant` tinyint(3) NOT NULL DEFAULT '0' COMMENT '1-varient attr',
  `order_num` int(10) NOT NULL DEFAULT '0' COMMENT 'sort order',
  `is_require` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1-required, 0-additional',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=385 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_attr`
--

LOCK TABLES `au_attr` WRITE;
/*!40000 ALTER TABLE `au_attr` DISABLE KEYS */;
INSERT INTO `au_attr` VALUES (1,'Network',0,9,0,0,1,0),(3,'Storage Capacity',0,9,0,0,3,1),(4,'Model',0,9,0,0,4,0),(5,'Color',2,9,0,0,5,1),(6,'Operating System',2,9,0,0,6,1),(7,'Camera Resolution',0,9,0,0,7,0),(8,'Lock Status',0,9,0,0,8,0),(9,'Screen Size',0,9,0,0,9,1),(11,'Show Only',2,9,0,0,11,0),(12,'Style',2,9,0,0,13,0),(13,'Processor',0,9,0,0,14,0),(14,'Contract',2,9,0,0,15,1),(15,'RAM',0,9,0,0,16,0),(16,'Model Number',0,9,0,0,17,0),(17,'SIM Card Slot',3,10,0,0,18,0),(18,'Memory Card Type',0,10,0,0,19,1),(19,'Features',0,10,0,0,20,0),(26,'Series',0,9,0,0,2,0),(27,'Case Size',0,9,0,0,3,0),(28,'Band Color',0,9,0,1,4,0),(29,'Compatiable Operating System',0,9,0,0,5,0),(30,'Model',0,9,0,0,6,0),(31,'Network',0,9,0,0,7,1),(33,'Show Only',0,9,0,0,9,0),(34,'Case Material',0,9,0,0,10,0),(35,'Features',0,9,0,0,11,0),(36,'Operating System',0,9,0,0,12,0),(37,'Band Materal',0,9,0,0,13,0),(38,'Storage Capacity',0,9,0,0,14,0),(46,'Show Only',0,11,0,0,5,0),(49,'Compatible Brand',0,12,0,0,2,0),(50,'Compatible Model',0,12,0,0,3,0),(51,'Color',0,12,0,1,4,0),(56,'Show Only',0,12,0,0,9,0),(58,'Name (Name of the product)',0,14,0,0,1,0),(59,'Description (Description about the product )',0,14,0,0,2,0),(61,'Seller location',0,14,0,0,4,0),(63,'Designed For',0,14,0,0,6,0),(64,'Type',0,14,0,0,7,0),(65,'Bus Speed',0,14,0,0,8,0),(66,'Total Capacity',0,14,0,0,9,0),(67,'Model',0,14,0,0,10,0),(68,'Country/Region of Manufacture',0,14,0,0,11,0),(69,'Number of Pins',0,14,0,0,12,0),(70,'Capacity per Module',0,14,0,0,13,0),(72,'Modal number',0,14,0,0,15,0),(73,'Shipping cost',0,14,0,0,16,0),(75,'Name (Name of the product)',0,15,0,0,1,0),(76,'Description (Description about the product )',0,15,0,0,2,0),(77,'Brands',0,15,0,0,3,0),(78,'Modal number',0,15,0,0,4,0),(80,'Hard Drive Capacity',0,15,0,0,6,0),(81,'RAM Size',0,15,0,0,7,0),(82,'Operating system',0,15,0,0,8,0),(83,'Processor',0,15,0,0,9,0),(84,'Screen size',0,15,0,0,10,0),(85,'Colour',0,15,0,0,11,0),(86,'Item Weight',0,15,0,0,12,0),(87,'Processor Speed',0,15,0,0,13,0),(88,'Processor Count',0,15,0,0,14,0),(89,'Memory Type',0,15,0,0,15,0),(90,'Hard Disk Technology',0,15,0,0,16,0),(92,'Seller location',0,15,0,0,18,0),(93,'Show Only',0,15,0,0,19,0),(95,'Name (Name of the product)',0,16,0,0,1,0),(96,'Description (Description about the product )',0,16,0,0,2,0),(97,'Brands',0,16,0,0,3,0),(98,'Modal number',0,16,0,0,4,0),(101,'Warranty',0,16,0,0,6,0),(102,'Type',0,16,0,0,7,0),(103,'Interface',0,16,0,0,8,0),(104,'Seller Location',0,16,0,0,9,0),(107,'Name (Name of the product)',0,18,0,0,1,0),(108,'Description (Description about the product )',0,18,0,0,2,0),(111,'Color',0,18,0,1,5,0),(112,'Pages per minute',0,18,0,0,6,0),(113,'Model number',0,18,0,0,7,0),(114,'Expiration Date',0,18,0,0,8,0),(115,'Type',0,18,0,0,9,0),(116,'Connectivity',0,18,0,0,10,0),(117,'Item Height',0,18,0,0,11,0),(118,'Item Width',0,18,0,0,12,0),(119,'Item Weight',0,18,0,0,13,0),(120,'Ideal Usage',0,18,0,0,14,0),(121,'Page Size Supported',0,18,0,0,15,0),(122,'Warranty',0,18,0,0,16,0),(123,'Supported OS',0,18,0,0,17,0),(124,'RAM Size',0,18,0,0,18,0),(125,'Voltage',0,18,0,0,19,0),(128,'Name (Name of the product)',0,19,0,0,1,0),(129,'Description (Description about the product )',0,19,0,0,2,0),(132,'Model Number',0,19,0,0,5,0),(133,'Material',2,19,0,0,6,0),(134,'Compatible Model',0,19,0,0,7,0),(135,'Color',0,19,0,1,8,0),(136,'Display Size',0,19,0,0,9,0),(137,'Included Components',0,19,0,0,10,0),(138,'Item Weight',0,19,0,0,11,0),(139,'Operating System',0,19,0,0,12,0),(140,'Special Feature',0,19,0,0,13,0),(141,'Warranty',0,19,0,0,14,0),(142,'RAM Size',0,19,0,0,15,0),(143,'Batteries',0,19,0,0,16,0),(144,'17',0,19,0,0,17,0),(146,'Name',0,21,0,0,1,0),(147,'Description',0,21,0,0,2,0),(150,'Colour',0,21,0,1,5,0),(151,'Material',0,21,0,0,6,0),(152,'Style',0,21,0,0,7,0),(153,'Type',0,21,0,0,8,0),(154,'Warranty',0,21,0,0,9,0),(155,'Seller location',0,21,0,0,10,0),(158,'Name',0,22,0,0,1,0),(159,'Description',0,22,0,0,2,0),(162,'Colour',0,22,0,1,5,0),(163,'Designer',0,22,0,0,6,0),(164,'Made In',0,22,0,0,7,0),(165,'Fabric Content',0,22,0,0,8,0),(166,'Total Length',0,22,0,1,9,0),(167,'Width',0,22,0,1,10,0),(168,'Style',0,22,0,0,11,0),(169,'Material',0,22,0,0,12,0),(170,'Pattern',0,22,0,0,13,0),(171,'Shape',0,22,0,0,14,0),(172,'Seller Location',0,22,0,0,15,0),(175,'Name',0,24,0,0,1,0),(176,'Description',0,24,0,0,2,0),(179,'Color',0,24,0,1,5,0),(180,'Size',0,24,0,1,6,0),(181,'Style',0,24,0,0,7,0),(182,'Material',0,24,0,0,8,0),(183,'Adjustment Type',0,24,0,0,9,0),(184,'Pattern',0,24,0,0,10,0),(185,'Country/Region of Manufacture',0,24,0,0,11,0),(186,'Seller Location',0,24,0,0,12,0),(189,'Name',0,25,0,0,1,0),(190,'Description',0,25,0,0,2,0),(193,'Color',0,25,0,1,5,0),(194,'Country/Region of Manufacture',0,25,0,0,6,0),(195,'Style',0,25,0,0,7,0),(196,'Protection',3,25,0,0,8,0),(197,'Frame Color',0,25,0,1,9,0),(198,'Frame Material',2,25,0,0,10,0),(199,'Lens Color',2,25,0,0,11,0),(200,'Lens Technology',0,25,0,0,12,0),(201,'Seller Location',0,25,0,0,13,0),(204,'Name',0,27,0,0,1,0),(205,'Description',0,27,0,0,2,0),(208,'Color',0,27,0,1,5,0),(209,'Shoe Size',0,27,0,1,6,0),(211,'Style',0,27,0,0,7,0),(212,'Pattern',0,27,0,0,8,0),(213,'Width',2,27,0,0,9,0),(214,'Material',0,27,0,0,10,0),(215,'Seller Location',0,27,0,0,11,0),(218,'Name',0,28,0,0,1,0),(219,'Description',0,28,0,0,2,0),(222,'Color',0,28,0,1,5,0),(223,'Shoe Size',0,28,0,1,6,0),(224,'Material',0,28,0,0,7,0),(225,'Pattern',0,28,0,0,8,0),(226,'Occasion',0,28,0,0,9,0),(227,'Width',0,28,0,0,10,0),(228,'Seller Location',0,28,0,0,11,0),(232,'Name',0,30,0,0,1,0),(233,'Description',0,30,0,0,2,0),(237,'Formulation',2,30,0,0,5,0),(238,'Gender',0,30,0,0,6,0),(239,'Active Ingredients',0,30,0,0,7,0),(240,'Features',0,30,0,0,8,0),(241,'Ingredients',0,30,0,0,9,0),(242,'Main Purpose',0,30,0,0,10,0),(244,'Type',0,30,0,0,11,0),(245,'Age Group',0,30,0,0,12,0),(246,'Country/Region of Manufacture',0,30,0,0,13,0),(247,'Seller Location',0,30,0,0,14,0),(250,'Name',0,155,0,0,1,0),(251,'Description',0,155,0,0,2,0),(254,'Modal number',0,155,0,0,5,0),(255,'Features',2,155,0,0,6,0),(256,'Item Weight',0,155,0,0,7,0),(257,'Colour',0,155,0,0,8,0),(258,'Hard Drive Interface',0,155,0,0,9,0),(259,'Included Components',0,155,0,0,10,0),(260,'Memory Storage Capacity',0,155,0,0,11,0),(261,'Sold By',0,155,0,0,12,0),(262,'Item Dimensions',0,155,0,0,13,0),(263,'Seller locatio',2,155,0,0,14,0),(266,'Name',0,157,0,0,1,0),(267,'Description',0,157,0,0,2,0),(270,'Amp Hours',0,157,0,0,5,0),(271,'Model number',0,157,0,0,6,0),(272,'Battery Size',0,157,0,0,7,0),(273,'Type',0,157,0,0,8,0),(274,'Warrenty',0,157,0,0,9,0),(275,'Colour',0,157,0,0,10,0),(276,'Item Weight',0,157,0,0,11,0),(277,'Battery Charge Cycles',0,157,0,0,12,0),(278,'Seller Location',0,157,0,0,13,0),(281,'Name',0,158,0,0,1,0),(282,'Description',0,158,0,0,2,0),(285,'Modal Number',0,158,0,0,5,0),(286,'Item Weight',0,158,0,0,6,0),(287,'Additional Features',2,158,0,0,7,0),(288,'Compatible Devices',2,158,0,0,8,0),(289,'Batteries Included',3,158,0,0,9,0),(290,'Lens size',0,158,0,0,10,0),(291,'Seller location',2,158,0,0,11,0),(294,'Name',0,159,0,0,1,0),(295,'Description',0,159,0,0,2,0),(298,'Modal Number',0,159,0,0,5,0),(299,'Warranty',0,159,0,0,6,0),(300,'MPN',0,159,0,0,7,0),(301,'Seller Location',2,159,0,0,8,0),(304,'Name',0,161,0,0,1,0),(305,'Description',0,161,0,0,2,0),(308,'Modal Number',0,161,0,0,5,0),(309,'Video Game Series',0,161,0,0,6,0),(310,'Platform',0,161,0,0,7,0),(311,'Type',0,161,0,0,8,0),(312,'Item Weight',0,161,0,0,9,0),(313,'Manufacturer\'s Minimum Suggested Age',0,161,0,0,10,0),(314,'Color',0,161,0,0,11,0),(315,'Batteries Required',3,161,0,0,12,0),(316,'Seller Loccation',2,161,0,0,13,0),(319,'Name',0,162,0,0,1,0),(320,'Description',0,162,0,0,2,0),(323,'Modal Number',0,162,0,0,5,0),(324,'Platform',0,162,0,0,6,0),(325,'Color',0,162,0,0,7,0),(326,'Name',0,165,0,0,1,0),(327,'Description',0,165,0,0,2,0),(330,'Body Type',0,165,0,0,5,0),(331,'Body Color',0,165,0,0,6,0),(332,'Size',3,165,0,0,7,0),(333,'String Configuration',0,165,0,0,8,0),(334,'Right-/ Left-Handed',0,165,0,0,9,0),(335,'Country/Region of Manufacture',0,165,0,0,10,0),(336,'Seller Location',0,165,0,0,11,0),(339,'Name',0,166,0,0,1,0),(340,'Description',0,166,0,0,2,0),(343,'Model Number',0,166,0,0,5,0),(344,'Features',0,166,0,0,6,0),(345,'Type',0,166,0,0,7,0),(346,'Country/Region of Manufacture',0,166,0,0,8,0),(347,'Seller Location',0,166,0,0,9,0),(350,'Name',0,167,0,0,1,0),(351,'Description',0,167,0,0,2,0),(354,'Model Number',0,167,0,0,5,0),(355,'Type',0,167,0,0,6,0),(356,'Size',0,167,0,0,7,0),(357,'Country/Region of Manufacture',0,167,0,0,8,0),(358,'Seller Location',0,167,0,0,9,0),(361,'Name',0,168,0,0,1,0),(362,'Description',0,168,0,0,2,0),(365,'Model Number',0,168,0,0,5,0),(366,'Colour',0,168,0,0,6,0),(367,'Type',0,168,0,0,7,0),(368,'Material',0,168,0,0,8,0),(369,'Theme',0,168,0,0,9,0),(370,'Country/Region of Manufacture',0,168,0,0,10,0),(371,'Seller Location',0,168,0,0,11,0),(374,'Name',0,172,0,0,1,0),(375,'Description',0,172,0,0,2,0),(377,'Genre',2,172,0,0,4,0),(378,'Leading Role',3,172,0,0,5,0),(379,'Film Country',0,172,0,0,6,0),(380,'Release Date',0,172,0,0,7,0),(381,'Region Code',0,172,0,0,8,0),(382,'Number of Discs',2,172,0,0,9,0),(383,'Format',0,172,0,0,10,0),(384,'Seller Location',0,172,0,0,11,0);
/*!40000 ALTER TABLE `au_attr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_attr_val`
--

DROP TABLE IF EXISTS `au_attr_val`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_attr_val` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `attr_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_attr:id',
  `val` varchar(255) NOT NULL DEFAULT '',
  `product_id` int(10) NOT NULL DEFAULT '0' COMMENT '0-category,au_product:id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=442 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_attr_val`
--

LOCK TABLES `au_attr_val` WRITE;
/*!40000 ALTER TABLE `au_attr_val` DISABLE KEYS */;
INSERT INTO `au_attr_val` VALUES (1,1,'3G',0),(2,1,'4G',0),(3,1,'5G',0),(4,4,'Galaxy 10+',0),(5,6,'Android',0),(6,6,'iOS',0),(7,5,'White,Black,Red',0),(8,5,'Blue,Black,Red',0),(9,5,'Green,Black,Red',0),(10,11,'Authorized Seller',0),(11,11,'Accepts PayPal',0),(12,12,'Bar',0),(13,12,'Flip',0),(14,12,'Foldable',0),(15,14,'With Contract',0),(16,14,'without Contract',0),(17,17,'Single Sim',0),(18,17,'Dual Sim',0),(19,18,'TFCard',0),(20,19,'Rear Camera',0),(21,5,'Red',0),(22,22,'Samsung',0),(23,22,'Apple',0),(24,26,'Apple watch series 3',0),(25,27,'35mm',0),(26,28,'red',0),(27,28,'blue',0),(28,29,'Android',0),(29,29,'iOS',0),(30,31,'AT&T',0),(31,33,'Authorized Seller',0),(32,33,'Accepts PayPal',0),(33,34,'Rubber',0),(34,34,'Aluminium',0),(35,35,'3G Capable',0),(36,35,'4G Capable',0),(37,39,'New',0),(38,39,'Second-hand',0),(39,60,'Intel',0),(40,60,'Asus',0),(41,61,'USA',0),(42,61,'UK',0),(43,62,'brand-new',0),(44,62,'unused',0),(45,62,'unopened',0),(46,63,'Dell',0),(47,63,'HP-Compaq',0),(48,63,'Apple',0),(49,63,'Intel',0),(50,63,'IBM-Lenovo',0),(51,63,'Toshiba',0),(52,63,'Acer',0),(53,63,'Asus',0),(54,63,'Sony',0),(55,64,'DDR3',0),(56,64,'SDRAM',0),(57,65,'PC3-10600',0),(58,65,'DDR3-1333',0),(59,66,'8 GB',0),(60,67,'EB3-S400',0),(61,68,'USA',0),(62,69,'240',0),(63,70,'4 GB',0),(64,71,'25$',0),(65,72,'EB3-SP00070',0),(66,73,'free',0),(67,73,'5$',0),(68,74,'Auction',0),(69,74,'Fixed',0),(70,77,'Apple',0),(71,77,'HP',0),(72,77,'Dell',0),(73,78,'STUDIO1749',0),(74,79,'Brand New',0),(75,79,'unused',0),(76,80,'1 GB',0),(77,80,'1 TB',0),(78,81,'4 GB',0),(79,81,'8 GB',0),(80,82,'windows 10',0),(81,83,'2.5 GHz Core i5 Processor',0),(82,84,'13.3-inch Led-Lit',0),(83,85,'Silver',0),(84,85,'Black',0),(85,86,'2.44 kg',0),(86,87,'2.30 GHz',0),(87,88,'1',0),(88,88,'3',0),(89,89,'DDR3',0),(90,89,'SDRAM',0),(91,90,'HDD',0),(92,91,'2500$',0),(93,92,'USA',0),(94,92,'UK',0),(95,93,'Authorized Seller',0),(96,93,'Accepts PayPal',0),(97,94,'Auction',0),(98,94,'Fixed',0),(99,97,'Apple',0),(100,97,'HP',0),(101,97,'Dell',0),(102,98,'STUDIO1749',0),(103,100,'Brand New',0),(104,100,'unused',0),(105,101,'1 year',0),(106,102,'Card Adapter',0),(107,102,'Reader-USB Stick',0),(108,103,'USB 2.0',0),(109,104,'USA',0),(110,104,'Uk',0),(111,105,'100$',0),(112,106,'Auction',0),(113,106,'Fixed',0),(114,109,'HP',0),(115,109,'canon',0),(116,110,'Brand New',0),(117,110,'unused',0),(118,111,'blue&black',0),(119,112,'10',0),(120,112,'20',0),(121,113,'M452E52',0),(122,115,'Ink Cartridge',0),(123,115,'Drum Unit',0),(124,116,'USB',0),(125,116,'Wireless',0),(126,117,'15.9 Centimeters',0),(127,118,'43.5 Centimeters',0),(128,119,'7.4 Kg',0),(129,120,'Home and small office',0),(130,120,'regular',0),(131,121,'A4',0),(132,121,'Letter',0),(133,121,'Legal',0),(134,121,'Mexico Legal',0),(135,121,'India Legal',0),(136,122,'1 year',0),(137,123,'Windows 10',0),(138,123,'Windows 10 S',0),(139,123,'windows 8',0),(140,123,'Windows 8.1',0),(141,123,'Windows 7',0),(142,124,'128M',0),(143,125,'220 Volts',0),(144,127,'Auction',0),(145,127,'Fixed',0),(146,130,'Apple',0),(147,130,'Samsung',0),(148,131,'Brand New',0),(149,131,'Unused',0),(150,132,'Number(iBall Slide Elan 3x32',0),(151,133,'Silicone',0),(152,133,'lGe',0),(153,133,'Rubber',0),(154,134,'For Samsung Galaxy Tab S',0),(155,134,'For Samsung Galaxy Tab E',0),(156,135,'Blue',0),(157,135,'Black',0),(158,136,'10.1 inches',0),(159,137,'Charger',0),(160,137,'DC Round Pin Cable',0),(161,137,'USB Cable',0),(162,138,'0.59 kg',0),(163,139,'Android 8.1 Oreo',0),(164,140,'Single SIM',0),(165,140,'GPS',0),(166,140,'Music Player',0),(167,140,'Video Player',0),(168,140,'FM Radio',0),(169,141,'1 year manufacturer warranty',0),(170,142,'2 GB',0),(171,142,'8 GB',0),(172,143,'1 Lithium Polymer batteries required',0),(173,144,'700$',0),(174,145,'Auction',0),(175,145,'Fixed',0),(176,148,'Fendi',0),(177,148,'Louis Vuitton',0),(178,149,'Brand New',0),(179,149,'Unused',0),(180,150,'Black',0),(181,150,'Silver',0),(182,151,'Canvas',0),(183,151,'Leather',0),(184,152,'Small',0),(185,152,'Agenda',0),(186,152,'Cover',0),(187,153,'Zip',0),(188,153,'closure',0),(189,155,'USA',0),(190,155,'UK',0),(192,157,'Auction',0),(193,157,'Fixed',0),(194,160,'Fendi',0),(195,160,'Louis Vuitton',0),(196,161,'Brand New',0),(197,161,'Unused',0),(198,162,'Black',0),(199,162,'Silver',0),(200,165,'Linen',0),(201,165,'Silk',0),(202,172,'USA',0),(203,172,'UK',0),(204,174,'Auction',0),(205,174,'Fixed',0),(206,178,'Brand New',0),(207,178,'Unused',0),(209,185,'France',0),(210,186,'USA',0),(211,186,'UK',0),(212,188,'Auction',0),(213,188,'Fixed',0),(214,192,'Brand New',0),(215,192,'Unused',0),(216,193,'Black',0),(217,194,'USA',0),(218,196,'100% UVA',0),(219,196,'UVB',0),(220,196,'UVC',0),(221,197,'Black',0),(222,198,'Plastic',0),(223,199,'Black Iridium',0),(224,201,'USA',0),(225,201,'UK',0),(226,203,'Auction',0),(227,203,'Fixed',0),(228,206,'Nike',0),(229,207,'Brand New',0),(230,207,'Unused',0),(231,208,'Black',0),(232,211,'Off Court Shoes',0),(233,212,'Solid',0),(234,213,'Medium (D, M)',0),(235,214,'Leather',0),(236,215,'USA',0),(237,215,'UK',0),(238,216,'120$',0),(239,217,'Auction',0),(240,217,'Fixed',0),(241,220,'Nike',0),(242,221,'Brand New',0),(243,221,'Unused',0),(245,222,'Black',0),(246,223,'10.5',0),(247,224,'Leather',0),(248,225,'Solid',0),(249,226,'Casual',0),(250,227,'Medium (B, M)',0),(251,228,'USA',0),(252,228,'UK',0),(253,229,'140$',0),(254,231,'Auction',0),(255,231,'Fixed',0),(256,234,'Brand New',0),(257,234,'Unused',0),(258,235,'Mustad',0),(259,237,'Bar',0),(260,237,'Caplet',0),(261,238,'Male',0),(262,239,'L-Arginine',0),(263,239,'Lipase',0),(264,240,'Alcohol Free',0),(265,240,'Low Carb',0),(266,241,'1-Deoxynojirimycin (DNJ)',0),(267,241,'Krill Oil',0),(268,242,'Adrenal Support',0),(270,242,'Anti-Aging',0),(271,244,'Boron',0),(272,244,'Silicon',0),(273,245,'Infant',0),(274,245,'Senior',0),(275,246,'USA',0),(276,246,'UK',0),(277,247,'USA',0),(278,247,'UK',0),(279,248,'12200$',0),(280,249,'Auction',0),(281,249,'Fixed',0),(282,252,'HP',0),(283,253,'Brand new',0),(284,253,'Unused',0),(285,254,'SYS204RMHDD',0),(286,255,'Standalone Operation',0),(287,255,'Duplication',0),(288,255,'Basic Test',0),(289,255,'Wipe',0),(290,256,'8.16 Kg',0),(291,257,'Black',0),(292,258,'USB',0),(293,259,'1 Pendrive',0),(294,260,'32 GB',0),(295,261,'XYS retailer',0),(296,262,'Length * Breadth * Height 5.5 x 16.8 x 5.7 Centimetres',0),(297,263,'USA',0),(298,263,'UK',0),(299,264,'230$',0),(300,265,'Auction',0),(301,265,'Fixed',0),(302,268,'Sanyo',0),(303,268,'HP',0),(304,269,'Brand new',0),(305,269,'Unused',0),(306,270,'2200MAH UNTESTED',0),(307,271,'UR18650F',0),(308,272,'18650',0),(309,273,'Li-ion Color Black Voltage 11. 1V Campacity: 6600mAh',0),(310,274,'6 months',0),(311,275,'Black',0),(312,275,'Blue',0),(313,276,'422 g',0),(314,277,'4.00',0),(315,278,'USA',0),(316,278,'UK',0),(317,279,'230$',0),(318,280,'Auction',0),(319,280,'Fixed',0),(320,283,'HTC',0),(321,283,'PROCUS',0),(322,284,'Brand New',0),(323,284,'Unused',0),(324,285,'B079VL6RTS',0),(325,286,'413 g',0),(326,287,'headband',0),(327,287,'Free 3D VR Game',0),(328,287,'40mm lenses',0),(329,288,'Android',0),(330,288,'iOS',0),(331,288,'Windows phone - with gyroscope function',0),(332,289,'Yes',0),(333,289,'No',0),(334,290,'40mm lenses',0),(335,291,'USA',0),(336,291,'UK',0),(337,292,'1000$',0),(338,293,'Auction',0),(339,293,'Fixed',0),(340,296,'HTC',0),(341,296,'PROCUS',0),(342,297,'Brand New',0),(343,297,'Unused',0),(344,298,'B079VL6RTS',0),(345,299,'1 year',0),(346,300,'HIFI-DIGI+PRO',0),(347,301,'USA',0),(348,301,'Uk',0),(349,302,'1000$',0),(350,303,'Auction',0),(351,303,'Fixed',0),(352,306,'HTC',0),(353,306,'PROCUS',0),(354,307,'Brand New',0),(355,307,'Unused',0),(356,308,'B079VL6RTS',0),(357,309,'Fallout',0),(358,310,'Sony PlayStation 4',0),(359,311,'Gun',0),(360,311,'Advanture',0),(361,312,'281 g',0),(362,314,'MULTI',0),(363,315,'Yes',0),(364,315,'No',0),(365,316,'USA',0),(366,316,'UK',0),(367,317,'200$',0),(368,318,'Auction',0),(369,318,'Fixed',0),(370,321,'PROCUS',0),(371,321,'Nintendo',0),(372,322,'Brand New',0),(373,322,'Unused',0),(374,323,'190268707121',0),(375,324,'Nintendo GameCube',0),(376,325,'Black',0),(377,325,'Silver',0),(378,328,'Fender',0),(379,329,'Brand New',0),(380,329,'Unused',0),(381,330,'Solid',0),(382,331,'Beige',0),(383,332,'Full',0),(384,332,'Medium',0),(385,334,'Right-Handed',0),(386,335,'Italy',0),(387,336,'USA',0),(388,336,'UK',0),(389,337,'12200$',0),(390,338,'Auction',0),(391,338,'Fixed',0),(392,341,'Fender',0),(393,342,'Brand New',0),(394,342,'Unused',0),(395,343,'SK 500 G2 C',0),(396,344,'Gate Sequencer',0),(397,344,'Step Sequencer',0),(398,345,'Eurorack Module',0),(399,346,'Italy',0),(400,347,'USA',0),(401,347,'UK',0),(402,348,'12200$',0),(403,349,'Auction',0),(404,349,'Fixed',0),(405,352,'Pearl',0),(406,353,'Brand New',0),(407,353,'Unused',0),(408,354,'SK 500 G2 C',0),(409,355,'Crash',0),(410,356,'14 inch',0),(411,357,'Italy',0),(412,358,'USA',0),(413,358,'UK',0),(414,359,'12200$',0),(415,360,'Auction',0),(416,360,'Fixed',0),(417,363,'Pearl',0),(418,363,'selmer',0),(419,364,'Brand New',0),(420,364,'Unused',0),(421,365,'SK 500 G2 C',0),(422,366,'Black',0),(423,367,'Badges',0),(424,368,'Enamel',0),(425,369,'Musical Instruments',0),(426,370,'Italy',0),(427,371,'USA',0),(428,371,'UK',0),(429,372,'12200$',0),(430,373,'Auction',0),(431,373,'Fixed',0),(432,376,'Brand New',0),(433,376,'Unused',0),(434,377,'Action',0),(435,377,'Adventure',0),(436,378,'Devon Sawa',0),(437,378,'cott Bairstow',0),(438,378,'Jonathan Taylor Thomas',0),(439,379,'USA',0),(440,382,'1',0),(441,382,'2',0);
/*!40000 ALTER TABLE `au_attr_val` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_banner`
--

DROP TABLE IF EXISTS `au_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_banner` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `img` varchar(1024) NOT NULL DEFAULT '',
  `url` varchar(1024) NOT NULL DEFAULT '',
  `category` int(5) NOT NULL DEFAULT '0' COMMENT '0-top, 1-daily deals, 2-middle top, 3-middle bottom 4-bottom',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_banner`
--

LOCK TABLES `au_banner` WRITE;
/*!40000 ALTER TABLE `au_banner` DISABLE KEYS */;
INSERT INTO `au_banner` VALUES (1,'title1','uploads/product/20191026/1704387964.png','http://www.baidu.com',0),(2,'title2','assets/images/slide_2.jpg','http://www.baidu.com',0),(3,'title3','assets/images/slide_1.jpg','http://www.baidu.com',0),(4,'title4','assets/img/parallax/photo1.jpg','http://www.baidu.com',1),(5,'title5','assets/img/parallax/photo2.jpg','http://www.baidu.com',1),(6,'title6','assets/img/parallax/photo3.jpg','www.baidu.com',1),(7,'title7','assets/img/parallax/photo1.jpg','www.baidu.com',1),(8,'title8','assets/img/parallax/photo2.jpg','www.baidu.com',1),(9,'title9','assets/img/parallax/photo1.jpg','www.baidu.com',2),(10,'title10','assets/img/parallax/photo2.jpg','www.baidu.com',2),(11,'title11','assets/img/parallax/photo3.jpg','www.baidu.com',2),(12,'title12','assets/img/parallax/photo1.jpg','www.baidu.com',2),(13,'title13','assets/img/parallax/photo2.jpg','www.baidu.com',2),(14,'title14','assets/img/parallax/photo1.jpg','www.baidu.com',3),(15,'title15','assets/img/parallax/photo2.jpg','www.baidu.com',3),(16,'title16','assets/img/parallax/photo3.jpg','www.baidu.com',3),(17,'title17','assets/img/parallax/photo1.jpg','www.baidu.com',3),(18,'title18','assets/img/parallax/photo2.jpg','www.baidu.com',3),(19,'title19','assets/img/parallax/photo1.jpg','www.baidu.com',4),(20,'title20','assets/img/parallax/photo2.jpg','www.baidu.com',4),(21,'title21','assets/img/parallax/photo3.jpg','www.baidu.com',4),(22,'title22','assets/img/parallax/photo1.jpg','www.baidu.com',4),(23,'title23','assets/img/parallax/photo2.jpg','www.baidu.com',4),(24,'11','uploads/product/20191026/1703171345.png','11',0);
/*!40000 ALTER TABLE `au_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_brand`
--

DROP TABLE IF EXISTS `au_brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_brand` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `log_img` varchar(1024) NOT NULL DEFAULT '',
  `file_name` varchar(1024) NOT NULL DEFAULT '',
  `is_hot` tinyint(3) NOT NULL DEFAULT '0' COMMENT 'home show',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_brand`
--

LOCK TABLES `au_brand` WRITE;
/*!40000 ALTER TABLE `au_brand` DISABLE KEYS */;
INSERT INTO `au_brand` VALUES (1,'samsung','http://192.168.99.110:9032/assets/images/cart/htc.jpg','',1),(3,'adidas','uploads/product/20191027/0215064915.png','',1);
/*!40000 ALTER TABLE `au_brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_email_verify_code`
--

DROP TABLE IF EXISTS `au_email_verify_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_email_verify_code` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL DEFAULT '',
  `verify_code` varchar(10) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_email_verify_code`
--

LOCK TABLES `au_email_verify_code` WRITE;
/*!40000 ALTER TABLE `au_email_verify_code` DISABLE KEYS */;
INSERT INTO `au_email_verify_code` VALUES (2,'11@111.com','R6MIO','2019-11-20 01:00:29','2019-11-20 01:00:29');
/*!40000 ALTER TABLE `au_email_verify_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_order`
--

DROP TABLE IF EXISTS `au_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT 'users:id',
  `seller_id` int(10) NOT NULL DEFAULT '0' COMMENT 'users:id',
  `quantity` int(10) NOT NULL DEFAULT '0' COMMENT 'product_detail_count',
  `order_number` varchar(50) NOT NULL DEFAULT '',
  `total_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `receive_region_id` varchar(10) NOT NULL DEFAULT '',
  `receive_user_name` varchar(255) NOT NULL DEFAULT '',
  `receive_address` varchar(255) NOT NULL DEFAULT '',
  `receive_phone_num` varchar(50) NOT NULL DEFAULT '',
  `member_say` varchar(255) NOT NULL DEFAULT '',
  `state` tinyint(3) NOT NULL DEFAULT '0' COMMENT '-1-cacel,0-create,1-pay,2-pakage,3-sended,4-complete(evaluation)',
  `order_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delivery_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `receive_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `complete_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `discount_price_req` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount_price_response` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount_state` tinyint(3) NOT NULL DEFAULT '0' COMMENT '1-user proposal,2-passed,3-sell proposal, 4-cancel',
  `discount_user_msg` varchar(1024) NOT NULL DEFAULT '' COMMENT 'user msg',
  `discount_seller_msg` varchar(1024) NOT NULL DEFAULT '' COMMENT 'seller msg',
  `org_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `eval_msg` varchar(1024) NOT NULL DEFAULT '',
  `eval_mark` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_order`
--

LOCK TABLES `au_order` WRITE;
/*!40000 ALTER TABLE `au_order` DISABLE KEYS */;
INSERT INTO `au_order` VALUES (1,2,3,20,'2019110909163427098',296.00,'BT','Test','shanghai 上海 20063','132932392965','',0,'2019-11-09 09:16:34','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,0.00,0,'','',0.00,'',0),(2,2,4,1,'2019110909163428955',11.20,'BT','Test','shanghai 上海 20063','132932392965','',0,'2019-11-09 09:16:34','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,0.00,0,'','',0.00,'',0),(3,2,3,20,'2019110909165425959',220.00,'BT','Test','shanghai 上海 20063','132932392965','',3,'2019-11-09 09:16:54','2019-11-10 01:00:10','0000-00-00 00:00:00','2019-11-18 01:48:17','2019-11-10 00:32:05',200.00,220.00,2,'teset','',296.00,'',0),(4,2,4,1,'2019110909165423585',11.20,'BT','Test','shanghai 上海 20063','132932392965','',0,'2019-11-09 09:16:54','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','2019-11-09 22:45:44',10.25,0.00,1,'test','',0.00,'',0),(5,2,3,20,'2019110919263026341',296.00,'BT','Test','shanghai 上海 20063','132932392965','',4,'2019-11-09 19:26:30','2019-11-10 12:59:41','0000-00-00 00:00:00','2019-11-18 01:48:13','2019-11-09 19:26:40',0.00,0.00,0,'','',0.00,'no ok',3),(6,2,4,1,'2019110919263028599',11.20,'BT','Test','shanghai 上海 20063','132932392965','',1,'2019-11-09 19:26:30','0000-00-00 00:00:00','0000-00-00 00:00:00','2019-11-09 19:26:40','2019-11-09 19:26:40',0.00,0.00,0,'','',0.00,'',0),(7,2,3,20,'2019110919282927991',296.00,'BT','Test','shanghai 上海 20063','132932392965','',4,'2019-11-09 19:28:29','2019-11-10 12:59:02','0000-00-00 00:00:00','2019-11-18 01:48:06','2019-11-09 19:28:37',0.00,0.00,0,'','',0.00,'OK',4),(8,2,4,1,'2019110919282927697',11.20,'BT','Test','shanghai 上海 20063','132932392965','',1,'2019-11-09 19:28:29','0000-00-00 00:00:00','0000-00-00 00:00:00','2019-11-18 01:48:08','2019-11-09 19:28:37',0.00,0.00,0,'','',0.00,'',0),(9,3,4,4,'2019111018145936063',44.80,'AL','ddd','dd','dddd','',0,'2019-11-10 18:14:59','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,0.00,0,'','',0.00,'',0),(10,2,3,20,'2019111316002724371',0.00,'BT','Test','shanghai 上海 20063','132932392965','',0,'2019-11-13 16:00:27','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,0.00,0,'','',0.00,'',0),(11,2,3,20,'2019111316003621933',0.00,'BT','Test','shanghai 上海 20063','132932392965','',0,'2019-11-13 16:00:36','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,0.00,0,'','',0.00,'',0),(12,2,3,20,'2019111316014629237',0.00,'BT','Test','shanghai 上海 20063','132932392965','',0,'2019-11-13 16:01:46','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,0.00,0,'','',0.00,'',0),(13,2,3,20,'2019111316054727463',0.00,'BT','Test','shanghai 上海 20063','132932392965','',0,'2019-11-13 16:05:47','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,0.00,0,'','',0.00,'',0),(14,2,3,20,'2019111316092323410',0.00,'BT','Test','shanghai 上海 20063','132932392965','',0,'2019-11-13 16:09:23','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,0.00,0,'','',0.00,'',0),(15,2,3,20,'2019111316094726061',0.00,'BT','Test','shanghai 上海 20063','132932392965','',0,'2019-11-13 16:09:47','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,0.00,0,'','',0.00,'',0),(16,2,4,8,'2019111316094726238',89.60,'BT','Test','shanghai 上海 20063','132932392965','',0,'2019-11-13 16:09:47','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,0.00,0,'','',0.00,'',0),(17,2,3,1,'2019111408165128761',14.00,'BT','Test','shanghai 上海 20063','132932392965','',0,'2019-11-14 08:16:51','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,0.00,0,'','',0.00,'',0),(18,2,4,9,'2019111408165126205',80011.20,'BT','Test','shanghai 上海 20063','132932392965','',0,'2019-11-14 08:16:51','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00',0.00,0.00,0,'','',0.00,'',0),(19,3,3,1,'2019111819242331651',12.00,'AL','ddd','dd','dddd','',1,'2019-11-18 19:24:23','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00','2019-11-18 19:24:31',0.00,0.00,0,'','',0.00,'',0);
/*!40000 ALTER TABLE `au_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_order_detail`
--

DROP TABLE IF EXISTS `au_order_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_order_detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) NOT NULL DEFAULT '0',
  `product_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_product_id',
  `sku_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_product_variant:id',
  `product_count` int(10) NOT NULL DEFAULT '0',
  `product_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `product_total_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_order_detail`
--

LOCK TABLES `au_order_detail` WRITE;
/*!40000 ALTER TABLE `au_order_detail` DISABLE KEYS */;
INSERT INTO `au_order_detail` VALUES (1,1,1,71,6,13.00,78.00),(2,1,1,73,8,16.00,128.00),(3,1,1,72,6,15.00,90.00),(4,2,2,0,1,11.20,11.20),(5,3,1,71,6,13.00,78.00),(6,3,1,73,8,16.00,128.00),(7,3,1,72,6,15.00,90.00),(8,4,2,0,1,11.20,11.20),(9,5,1,71,6,13.00,78.00),(10,5,1,73,8,16.00,128.00),(11,5,1,72,6,15.00,90.00),(12,6,2,0,1,11.20,11.20),(13,7,1,71,6,13.00,78.00),(14,7,1,73,8,16.00,128.00),(15,7,1,72,6,15.00,90.00),(16,8,2,0,1,11.20,11.20),(17,9,2,0,4,11.20,44.80),(18,16,2,0,8,11.20,89.60),(19,17,1,99,1,14.00,14.00),(20,18,2,0,1,11.20,11.20),(21,18,8,0,7,10000.00,70.00),(22,18,12,0,1,10000.00,10.00),(23,19,153,0,1,12.00,12.00);
/*!40000 ALTER TABLE `au_order_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_product`
--

DROP TABLE IF EXISTS `au_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `seller_id` int(10) NOT NULL DEFAULT '0' COMMENT 'users:id',
  `title` varchar(255) NOT NULL DEFAULT '',
  `subtitle` varchar(255) NOT NULL DEFAULT '',
  `img` varchar(255) NOT NULL DEFAULT '',
  `is_search` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1-search possible',
  `category_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_product_category:id',
  `brand_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_brand:id',
  `buy_format` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0:auction,1:fixed',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `retail_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'retail_price del tag',
  `quantity` int(10) NOT NULL DEFAULT '1',
  `condition` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0-none 1-new 2-unused',
  `is_hot` tinyint(3) NOT NULL DEFAULT '0' COMMENT '1-main show',
  `state` tinyint(3) NOT NULL DEFAULT '1' COMMENT '0-draft ,1-sale',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sell_count` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_product`
--

LOCK TABLES `au_product` WRITE;
/*!40000 ALTER TABLE `au_product` DISABLE KEYS */;
INSERT INTO `au_product` VALUES (1,3,'smartphone1','sphone','http://192.168.99.110/auction/public/uploads/product/20191110/1622216257.png',0,9,0,0,10.00,140.00,200,0,1,1,'2019-11-17 05:30:26','2019-11-22 22:40:10',177),(2,4,'cellphone2','cphone','uploads/product/20191110/1614305323.png',0,10,0,0,11.20,161.20,200,0,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(3,3,'haweiphone3','hphone','',1,10,0,0,15.00,165.00,200,0,0,0,'2019-11-17 05:30:26','2019-11-22 21:36:12',0),(4,3,'sumsngphone4','sumphone','uploads/product/20191122/2150541862.png',0,10,0,0,170.50,320.50,200,0,0,1,'2019-11-17 05:30:26','2019-11-22 21:51:39',0),(8,4,'product1','product1','',0,9,0,0,10000.00,10150.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(9,4,'product1','product1','',0,9,0,0,10000.00,10150.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(10,4,'product1','product1','',0,9,0,0,10000.00,10150.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(11,4,'product1','product1','http://192.168.99.110:9032/uploads/product/20191116/2059106297.png',0,9,0,0,10.00,160.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(12,4,'product1','product1','',0,9,0,0,10000.00,10150.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(13,4,'product1','product1','',1,9,0,0,10000.00,10150.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(16,3,'test1','test1','',1,10,0,0,0.00,150.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(17,3,'test1','test1','uploads/product/20191122/2144445155.png',0,10,0,0,0.00,150.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-22 21:44:44',0),(18,3,'test1','test1','',1,10,0,0,0.00,150.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(19,3,'111','111','',1,10,0,0,12.00,162.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(28,3,'tsersdfsdfsdf','12','uploads/product/20191122/2130432500.png',0,12,0,0,1858.00,2008.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-22 21:31:20',0),(29,3,'tsersdfsdfsdf','12','',1,12,0,0,1858.00,2008.00,200,1,0,0,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(30,3,'tsersdfsdfsdf','12','',1,12,0,0,1858.00,2008.00,200,1,0,0,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(31,3,'tsersdfsdfsdf','12','',1,12,0,0,1858.00,2008.00,200,1,0,0,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(32,3,'tsersdfsdfsdf','12','',0,12,0,0,1858.00,2008.00,200,1,0,0,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(33,3,'11','11','uploads/product/20191110/1651465592.png',0,10,0,0,11.00,161.00,200,1,0,0,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(34,0,'qqq','qq','',0,0,0,0,100.00,250.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(35,0,'watch1','w1','',0,0,0,0,10.00,160.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(36,0,'watch1','w1','',0,0,0,0,10.00,160.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(37,0,'we','we','',0,0,0,0,10.00,160.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(38,0,'111','111','',0,0,0,0,20.00,170.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(39,0,'111','111','',0,0,0,0,20.00,170.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(40,0,'sdfsdf','sdfsdf','',0,0,0,0,20.00,170.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(41,0,'sdfsdf','sdfsdf','',0,0,0,0,20.00,170.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(42,0,'11test','11tyee','',0,0,0,0,50.00,200.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(46,3,'watch1','w1','uploads/product/20191117/2015089505.png',0,11,0,0,10.00,160.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-17 20:15:08',0),(47,3,'w2','2','',0,11,0,0,12.00,162.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(48,3,'Fsd','ss','',0,11,0,0,20.00,170.00,200,1,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(49,3,'rew','www','',0,11,0,0,20.00,170.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(50,3,'qwe','ww','',0,11,0,0,23.00,173.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(51,3,'yoi','fsf','',0,15,0,0,30.00,180.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(52,3,'Fabric Content','ss','',0,15,0,0,10.00,160.00,200,1,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(53,3,'gho','aaa','',0,15,0,0,10.00,160.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(54,3,'kiji','dfg','',0,15,0,0,10.00,160.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(55,3,'dggg','dfg','',0,15,0,0,30.00,180.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(56,3,'desktop','computer','',0,16,0,0,600.00,750.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(57,3,'Acer','aaa','',0,16,0,0,700.00,850.00,200,1,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(58,3,'verd','sss','',0,16,0,0,58.00,208.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(59,3,'mreg','mmm','',0,16,0,0,350.00,500.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(60,3,'mol','qwe','',0,16,0,0,24.00,174.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(61,3,'Printer','p','',0,18,0,0,75.00,225.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(62,3,'Printer and Scanner','p_s','',0,18,0,0,59.00,209.00,200,2,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(63,3,'All Printer','aaa','',0,18,0,0,25.00,175.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(64,3,'PP','print','',0,18,0,0,10.00,160.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(65,3,'Neer','nee','',0,18,0,0,20.00,170.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(66,3,'Table','aaa','',0,19,0,0,10.00,160.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(67,3,'BOO','boo','',0,19,0,0,25.00,175.00,200,2,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(68,3,'MOO','mp','',0,19,0,0,20.00,170.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(69,3,'voo','doo','',0,19,0,0,50.00,200.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(70,3,'Bebe','abe','',0,19,0,0,52.00,202.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(71,3,'Harddisk','HDD','',0,14,0,0,25.00,175.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(72,3,'RAM','ddr2','',0,14,0,0,25.00,175.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(73,3,'Keyboard','wireless','',0,14,0,0,25.00,175.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(74,3,'Sounder','Ok','',0,14,0,0,26.00,176.00,200,1,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(75,3,'Pad','haha','',0,14,0,0,26.00,176.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(76,3,'USB storage','flash','',0,155,0,0,26.00,176.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(77,3,'TF','Card','',0,155,0,0,12.00,162.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(78,3,'SD','card','',0,155,0,0,11.00,161.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(79,3,'AWE','de','',0,155,0,0,14.00,164.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(80,3,'SWE','gt','',0,155,0,0,8.00,158.00,200,2,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(81,3,'Rey','def','',0,21,0,0,10.00,160.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(82,3,'BVC','cde','',0,21,0,0,24.00,174.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(83,3,'LKJ','fere','',0,21,0,0,32.00,182.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(84,3,'LG','ker','',0,21,0,0,13.00,163.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(85,3,'Love for','like','',0,21,0,0,57.00,207.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(86,3,'BIO','wer','',0,22,0,0,25.00,175.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(87,3,'VHOP','der','',0,22,0,0,15.00,165.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(88,3,'DETY','ref','',0,22,0,0,45.00,195.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(89,3,'HOHO','nop','',0,22,0,0,12.00,162.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(90,3,'VBK','awe','',0,22,0,0,13.00,163.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(91,3,'HIHI','high','',0,24,0,0,18.00,168.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(92,3,'NOLP','ccc','',0,24,0,0,15.00,165.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(93,3,'VOIU','see','',0,24,0,0,15.00,165.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(94,3,'LKKD','fdfe','',0,24,0,0,1.30,151.30,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(95,3,'CAP','aa','',0,24,0,0,15.00,165.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(96,3,'BBBB','adf','',0,25,0,0,14.00,164.00,200,1,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(97,3,'Ok and Ok','ok','',0,25,0,0,14.30,164.30,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(98,3,'MNFM','erer','',0,25,0,0,11.00,161.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(99,3,'our life','life','',0,25,0,0,144.00,294.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(100,3,'vore do','loa','',0,25,0,0,14.00,164.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(101,3,'Fastest','fff','',0,27,0,0,45.00,195.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(102,3,'Tong Tong','tt','',0,27,0,0,14.00,164.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(103,3,'MOD ','fsaa','',0,27,0,0,254.00,404.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(104,3,'Quik!','qq','',0,27,0,0,15.00,165.00,200,1,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(105,3,'Mol Do','we','',0,27,0,0,44.00,194.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(106,3,'BOLP','bp','',0,28,0,0,41.00,191.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(107,3,'Light','lt','',0,28,0,0,21.00,171.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(108,3,'lER','lr','',0,28,0,0,12.00,162.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(109,3,'Love & Use','LU','',0,28,0,0,23.00,173.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(110,3,'Some','s','',0,28,0,0,65.00,215.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(111,3,'Hoo Hoo','h&h','',0,30,0,0,17.00,167.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(112,3,'Force!','F!','',0,30,0,0,58.00,208.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(113,3,'SDEE','vre','',0,30,0,0,14.00,164.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(114,3,'CDELO','ooo','',0,30,0,0,14.00,164.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(115,3,'VDS','cdl','',0,30,0,0,62.00,212.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(116,3,'MICOD','fere','',0,31,0,0,17.00,167.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(117,3,'LKJH','fedre','',0,31,0,0,22.00,172.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(118,3,'FGTHY','bfgfgadfg','',0,31,0,0,254.00,404.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(119,3,'DKEOFJ','fsfera','',0,35,0,0,11.00,161.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(120,3,'LDLEOFD','sdfe','',0,35,0,0,136.00,286.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(121,3,'MLLFOE','fsfer','',0,35,0,0,30.00,180.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(122,3,'WDEFR','vfg','',0,36,0,0,45.00,195.00,200,1,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(123,3,'FFGH','fdfd','',0,33,0,0,12.00,162.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(124,3,'MHKHD','ferer','',0,33,0,0,14.00,164.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(125,3,'CDEF','FG','',0,33,0,0,36.00,186.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(126,3,'Sfser','fdfdf','',0,33,0,0,14.00,164.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(127,3,'MNE','fsff','',0,34,0,0,361.00,511.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(128,3,'DFR','gt','',0,34,0,0,25.00,175.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(129,3,'DEFGB','gfgh','',0,34,0,0,14.00,164.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(130,3,'LLERKF','gfgt','',0,34,0,0,15.00,165.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(131,3,'TVDE','gga','',0,82,0,0,456.00,606.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(132,3,'JKDLF','gt','',0,82,0,0,10.00,160.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(133,3,'NDLR','fdfd','',0,82,0,0,13.00,163.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(134,3,'LLKRF','fdd','',0,82,0,0,1.00,151.00,200,1,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(135,3,'FrG','2','',0,82,0,0,2.00,152.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(136,3,'LDJKF','fdfrf','',0,83,0,0,14.00,164.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(137,3,'BGT','Fff','',0,83,0,0,5.00,155.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(138,3,'DEFGg','gdfg','',0,83,0,0,254.00,404.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(139,3,'DIRKF','grt','',0,84,0,0,2.00,152.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(140,3,'BFGG','ljy','',0,84,0,0,14.00,164.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(141,3,'BFTG','hgh','',0,84,0,0,3.00,153.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(142,3,'VFR','FGfg','',0,84,0,0,25.00,175.00,200,2,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(143,3,'FGTHS','fdfd','',0,84,0,0,3.00,153.00,200,2,1,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(144,3,'FTHHYF','gvfgf','',0,85,0,0,12.00,162.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(145,3,'GUJU','ref','',0,85,0,0,4.00,154.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(146,3,'DDERF','fgf','',0,85,0,0,1.00,151.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(147,3,'LODE','fff','',0,85,0,0,45.00,195.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(148,3,'FeG','fgdrfe','',0,85,0,0,14.00,164.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(149,3,'Adventure Action Figures','dfe','',0,85,0,0,5.00,155.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(150,3,'VFGGH','gfgf','',0,86,0,0,14.00,164.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(151,3,'JKDKE','dfd','',0,86,0,0,2.00,152.00,200,1,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(152,3,'FERT','gfgf','',0,87,0,0,36.00,186.00,200,2,0,1,'2019-11-17 05:30:26','2019-11-18 05:13:02',0),(153,3,'Kongkong','KK','',0,165,0,0,12.00,0.00,200,1,0,1,'2019-11-18 01:39:30','2019-11-18 01:39:30',0),(154,3,'LFRFSDF','dfd','',0,165,0,0,25.00,0.00,200,1,0,1,'2019-11-18 01:40:04','2019-11-18 01:40:04',0),(155,3,'LONGAS','fer','',0,165,0,0,14.00,0.00,200,1,1,1,'2019-11-18 01:40:50','2019-11-18 01:40:50',0),(156,3,'MLOJD','frygh','',0,165,0,0,4.00,0.00,200,1,0,1,'2019-11-18 01:41:17','2019-11-18 01:41:17',0),(157,3,'LPOSND','fhty','',0,165,0,0,7.00,0.00,200,1,1,1,'2019-11-18 01:41:43','2019-11-18 01:41:43',0),(158,3,'LDVFGR','gft','',0,166,0,0,125.00,0.00,200,2,0,1,'2019-11-18 01:43:00','2019-11-18 01:43:00',0),(159,3,'NSJED','fdfd','',0,166,0,0,1.00,0.00,200,2,0,1,'2019-11-18 01:43:23','2019-11-18 01:43:23',0),(160,3,'CNMDJ','rere','',0,166,0,0,5.00,0.00,200,2,0,1,'2019-11-18 01:43:50','2019-11-18 01:43:50',0),(161,3,'LSJEKD','alo','',0,166,0,0,15.00,0.00,200,1,0,1,'2019-11-18 01:44:23','2019-11-18 01:44:23',0),(162,3,'SLWEOD','frfgr','',0,166,0,0,5.00,0.00,200,1,0,1,'2019-11-18 01:45:07','2019-11-18 01:45:07',0),(163,3,'FKRIFGD','ere','',0,167,0,0,5.00,0.00,200,1,1,1,'2019-11-18 01:46:36','2019-11-18 01:46:36',0),(164,3,'BFGHTFD','grt','',0,167,0,0,8.00,0.00,200,2,0,1,'2019-11-18 01:46:58','2019-11-18 01:46:58',0),(165,3,'LERO','fgyrt','',0,167,0,0,36.00,0.00,200,2,0,1,'2019-11-18 01:47:21','2019-11-18 01:47:21',0),(166,3,'AFGDGDF','gftr','',0,167,0,0,654.00,0.00,200,1,0,1,'2019-11-18 01:47:55','2019-11-18 01:47:55',0),(167,3,'LORJFLDF','fgr','',0,167,0,0,25.00,0.00,200,1,0,1,'2019-11-18 01:48:21','2019-11-18 01:48:21',0),(168,3,'BJROFDF','grt','',0,168,0,0,25.00,0.00,200,1,1,1,'2019-11-18 01:49:17','2019-11-18 01:49:17',0),(169,3,'LOKDJ','fere','',0,168,0,0,21.00,0.00,200,1,0,1,'2019-11-18 01:49:41','2019-11-18 01:49:41',0),(170,3,'DLEKDKD','fer','',0,168,0,0,45.00,0.00,200,1,1,1,'2019-11-18 01:50:11','2019-11-18 01:50:11',0),(171,3,'CJKDOE','ferer','',0,168,0,0,36.00,0.00,200,1,0,1,'2019-11-18 01:50:49','2019-11-18 01:50:49',0),(172,3,'SEA','fer','',0,169,0,0,14.00,0.00,200,2,0,1,'2019-11-18 01:51:31','2019-11-18 01:51:31',0);
/*!40000 ALTER TABLE `au_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_product_attr_val`
--

DROP TABLE IF EXISTS `au_product_attr_val`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_product_attr_val` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `attr_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_attr:id',
  `val_ids` varchar(1024) NOT NULL DEFAULT '' COMMENT 'au_attr_val:ids',
  `product_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_product:id',
  `text_val` varchar(255) NOT NULL DEFAULT '' COMMENT 'text_property',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=961 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_product_attr_val`
--

LOCK TABLES `au_product_attr_val` WRITE;
/*!40000 ALTER TABLE `au_product_attr_val` DISABLE KEYS */;
INSERT INTO `au_product_attr_val` VALUES (1,1,'',1,'default text'),(3,3,'',1,'30G'),(4,6,'5,6',1,''),(5,13,'',1,'quard core 4'),(10,18,'19',2,'default text'),(11,19,'20',2,'default text'),(13,7,'',3,'24M Pixel'),(14,11,'10',3,''),(15,16,'',3,'hawei135234902495423'),(16,18,'19',3,'default text'),(17,1,'3',4,'default text'),(19,3,'',4,'80G'),(20,6,'6',4,''),(21,7,'',4,'64M Pixel'),(23,19,'',4,'default text'),(24,4,'4',4,'default text'),(25,5,'7',4,''),(26,8,'',4,'Unlock'),(27,9,'',4,'9inch'),(28,11,'10',4,''),(29,12,'14',4,''),(30,13,'',4,'quard core 8'),(31,14,'16',4,''),(32,15,'',4,'12M'),(33,16,'',4,'IPhone156469823416747'),(34,17,'18',4,''),(35,18,'',4,'default text'),(43,3,'',13,'1'),(44,5,'21',13,''),(45,6,'5',13,''),(46,31,'30',13,'default text'),(47,9,'',13,'1000'),(48,14,'15',13,''),(49,1,'2',13,'default text'),(50,26,'24',13,'default text'),(51,27,'25',13,'default text'),(52,28,'27',13,'default text'),(53,4,'4',13,'default text'),(54,29,'28',13,'default text'),(55,30,'',13,'10'),(56,7,'',13,'10'),(58,8,'',13,'10'),(59,33,'31',13,'default text'),(60,34,'33',13,'default text'),(62,35,'35',13,'default text'),(63,11,'10',13,''),(64,36,'',13,'Android'),(65,12,'12',13,''),(66,37,'',13,'10'),(67,13,'',13,'10'),(68,38,'',13,'100G'),(70,15,'',13,'10G'),(72,16,'',13,'01023434545'),(108,5,'7,8',1,''),(109,31,'',1,'default text'),(110,9,'',1,'123'),(111,14,'15,16',1,''),(112,-1,'15,16',1,''),(113,26,'',1,'default text'),(114,27,'',1,'default text'),(115,4,'',1,'default text'),(116,29,'',1,'default text'),(117,33,'',1,'default text'),(118,34,'',1,'default text'),(119,35,'',1,'default text'),(121,30,'',1,'1212'),(122,7,'',1,'121'),(124,11,'10',1,''),(126,18,'19',14,'default text'),(128,17,'17',14,''),(129,19,'20',14,'default text'),(165,18,'19',15,'default text'),(167,17,'',15,''),(168,19,'20',15,'default text'),(171,18,'19',16,'default text'),(173,17,'17',16,''),(174,19,'20',16,'default text'),(177,18,'',17,'default text'),(179,17,'17',17,''),(180,19,'',17,'default text'),(183,18,'19',18,'default text'),(185,17,'17',18,''),(186,19,'20',18,'default text'),(189,18,'19',19,'default text'),(191,17,'17',19,''),(192,19,'20',19,'default text'),(196,18,'19',20,'default text'),(198,17,'',20,''),(199,19,'20',20,'default text'),(227,49,'',0,'11'),(229,49,'',22,'11'),(231,49,'',23,'11'),(233,49,'',24,'11'),(235,49,'',27,'11'),(237,49,'',28,'11'),(239,49,'',29,'11'),(241,49,'',30,'11'),(243,49,'',31,'11'),(245,49,'',32,'11'),(246,18,'19',33,'default text'),(248,17,'17',33,''),(249,19,'20',33,'default text'),(252,3,'',11,'2'),(253,5,'7',11,''),(254,6,'5',11,''),(255,31,'30',11,'default text'),(256,9,'',11,'2323'),(257,14,'15',11,''),(258,-1,'15',11,''),(259,1,'1',11,'default text'),(260,26,'24',11,'default text'),(261,27,'25',11,'default text'),(262,4,'4',11,'default text'),(263,29,'28',11,'default text'),(264,33,'31',11,'default text'),(265,34,'33',11,'default text'),(266,35,'35',11,'default text'),(268,-1,'',34,''),(269,-1,'',35,''),(270,-1,'',36,''),(271,-1,'',37,''),(272,-1,'',38,''),(273,-1,'',39,''),(274,-1,'',40,''),(275,-1,'',41,''),(276,-1,'',42,''),(277,-1,'97',43,''),(278,75,'',43,'11'),(279,76,'',43,'111'),(280,77,'70',43,'default text'),(281,78,'73',43,'default text'),(283,80,'76',43,'default text'),(284,81,'78',43,'default text'),(285,82,'80',43,'default text'),(286,83,'81',43,'default text'),(287,84,'82',43,'default text'),(288,85,'83',43,'default text'),(289,86,'85',43,'default text'),(290,87,'86',43,'default text'),(291,88,'87',43,'default text'),(292,89,'89',43,'default text'),(293,90,'91',43,'default text'),(295,92,'93',43,'default text'),(296,93,'95',43,'default text'),(298,-1,'',44,''),(299,-1,'',45,''),(300,-1,'',46,''),(301,-1,'',47,''),(302,-1,'',48,''),(303,-1,'',49,''),(304,-1,'',50,''),(305,-1,'97',51,''),(306,77,'70',51,'default text'),(307,78,'73',51,'default text'),(309,80,'76',51,'default text'),(310,81,'78',51,'default text'),(311,82,'80',51,'default text'),(312,83,'81',51,'default text'),(313,84,'82',51,'default text'),(314,85,'83',51,'default text'),(315,86,'85',51,'default text'),(316,87,'86',51,'default text'),(317,88,'87',51,'default text'),(318,89,'89',51,'default text'),(319,90,'91',51,'default text'),(321,92,'93',51,'default text'),(322,93,'95',51,'default text'),(324,-1,'97',52,''),(325,77,'70',52,'default text'),(326,78,'73',52,'default text'),(328,80,'76',52,'default text'),(329,81,'78',52,'default text'),(330,82,'80',52,'default text'),(331,83,'81',52,'default text'),(332,84,'82',52,'default text'),(333,85,'83',52,'default text'),(334,86,'85',52,'default text'),(335,87,'86',52,'default text'),(336,88,'87',52,'default text'),(337,89,'89',52,'default text'),(338,90,'91',52,'default text'),(340,92,'93',52,'default text'),(341,93,'95',52,'default text'),(343,-1,'97',53,''),(344,77,'70',53,'default text'),(345,78,'73',53,'default text'),(347,80,'76',53,'default text'),(348,81,'78',53,'default text'),(349,82,'80',53,'default text'),(350,83,'81',53,'default text'),(351,84,'82',53,'default text'),(352,85,'83',53,'default text'),(353,86,'85',53,'default text'),(354,87,'86',53,'default text'),(355,88,'87',53,'default text'),(356,89,'89',53,'default text'),(357,90,'91',53,'default text'),(359,92,'93',53,'default text'),(360,93,'95',53,'default text'),(362,-1,'97',54,''),(363,77,'70',54,'default text'),(364,78,'73',54,'default text'),(366,80,'76',54,'default text'),(367,81,'78',54,'default text'),(368,82,'80',54,'default text'),(369,83,'81',54,'default text'),(370,84,'82',54,'default text'),(371,85,'83',54,'default text'),(372,86,'85',54,'default text'),(373,87,'86',54,'default text'),(374,88,'87',54,'default text'),(375,89,'89',54,'default text'),(376,90,'91',54,'default text'),(378,92,'93',54,'default text'),(379,93,'95',54,'default text'),(381,-1,'97',55,''),(382,77,'70',55,'default text'),(383,78,'73',55,'default text'),(385,80,'76',55,'default text'),(386,81,'78',55,'default text'),(387,82,'80',55,'default text'),(388,83,'81',55,'default text'),(389,84,'82',55,'default text'),(390,85,'83',55,'default text'),(391,86,'85',55,'default text'),(392,87,'86',55,'default text'),(393,88,'87',55,'default text'),(394,89,'89',55,'default text'),(395,90,'91',55,'default text'),(397,92,'93',55,'default text'),(398,93,'95',55,'default text'),(400,-1,'112',56,''),(401,97,'99',56,'default text'),(402,98,'102',56,'default text'),(404,101,'105',56,'default text'),(405,102,'106',56,'default text'),(406,103,'108',56,'default text'),(407,104,'109',56,'default text'),(410,-1,'112',57,''),(411,97,'99',57,'default text'),(412,98,'102',57,'default text'),(414,101,'105',57,'default text'),(415,102,'106',57,'default text'),(416,103,'108',57,'default text'),(417,104,'109',57,'default text'),(420,-1,'112',58,''),(421,97,'99',58,'default text'),(422,98,'102',58,'default text'),(424,101,'105',58,'default text'),(425,102,'106',58,'default text'),(426,103,'108',58,'default text'),(427,104,'109',58,'default text'),(430,-1,'112',59,''),(431,97,'99',59,'default text'),(432,98,'102',59,'default text'),(434,101,'105',59,'default text'),(435,102,'106',59,'default text'),(436,103,'108',59,'default text'),(437,104,'109',59,'default text'),(440,-1,'112',60,''),(441,97,'99',60,'default text'),(442,98,'102',60,'default text'),(444,101,'105',60,'default text'),(445,102,'106',60,'default text'),(446,103,'108',60,'default text'),(447,104,'109',60,'default text'),(450,-1,'144',61,''),(453,112,'119',61,'default text'),(454,113,'121',61,'default text'),(455,115,'122',61,'default text'),(456,116,'124',61,'default text'),(457,117,'126',61,'default text'),(458,118,'127',61,'default text'),(459,119,'128',61,'default text'),(460,120,'129',61,'default text'),(461,121,'131',61,'default text'),(462,122,'136',61,'default text'),(463,123,'137',61,'default text'),(464,124,'142',61,'default text'),(465,125,'143',61,'default text'),(467,-1,'144',62,''),(470,112,'119',62,'default text'),(471,113,'121',62,'default text'),(472,115,'122',62,'default text'),(473,116,'124',62,'default text'),(474,117,'126',62,'default text'),(475,118,'127',62,'default text'),(476,119,'128',62,'default text'),(477,120,'129',62,'default text'),(478,121,'131',62,'default text'),(479,122,'136',62,'default text'),(480,123,'137',62,'default text'),(481,124,'142',62,'default text'),(482,125,'143',62,'default text'),(484,-1,'144',63,''),(487,112,'119',63,'default text'),(488,113,'121',63,'default text'),(489,115,'122',63,'default text'),(490,116,'124',63,'default text'),(491,117,'126',63,'default text'),(492,118,'127',63,'default text'),(493,119,'128',63,'default text'),(494,120,'129',63,'default text'),(495,121,'131',63,'default text'),(496,122,'136',63,'default text'),(497,123,'137',63,'default text'),(498,124,'142',63,'default text'),(499,125,'143',63,'default text'),(501,-1,'144',64,''),(504,112,'119',64,'default text'),(505,113,'121',64,'default text'),(506,115,'122',64,'default text'),(507,116,'124',64,'default text'),(508,117,'126',64,'default text'),(509,118,'127',64,'default text'),(510,119,'128',64,'default text'),(511,120,'129',64,'default text'),(512,121,'131',64,'default text'),(513,122,'136',64,'default text'),(514,123,'137',64,'default text'),(515,124,'142',64,'default text'),(516,125,'143',64,'default text'),(518,-1,'144',65,''),(521,112,'119',65,'default text'),(522,113,'121',65,'default text'),(523,115,'122',65,'default text'),(524,116,'124',65,'default text'),(525,117,'126',65,'default text'),(526,118,'127',65,'default text'),(527,119,'128',65,'default text'),(528,120,'129',65,'default text'),(529,121,'131',65,'default text'),(530,122,'136',65,'default text'),(531,123,'137',65,'default text'),(532,124,'142',65,'default text'),(533,125,'143',65,'default text'),(535,-1,'174',66,''),(538,132,'150',66,'default text'),(539,134,'154',66,'default text'),(540,136,'158',66,'default text'),(541,137,'159',66,'default text'),(542,138,'162',66,'default text'),(543,139,'163',66,'default text'),(544,140,'164',66,'default text'),(545,141,'169',66,'default text'),(546,142,'170',66,'default text'),(547,143,'172',66,'default text'),(549,-1,'174',67,''),(552,132,'150',67,'default text'),(553,134,'154',67,'default text'),(554,136,'158',67,'default text'),(555,137,'159',67,'default text'),(556,138,'162',67,'default text'),(557,139,'163',67,'default text'),(558,140,'164',67,'default text'),(559,141,'169',67,'default text'),(560,142,'170',67,'default text'),(561,143,'172',67,'default text'),(563,-1,'174',68,''),(566,132,'150',68,'default text'),(567,134,'154',68,'default text'),(568,136,'158',68,'default text'),(569,137,'159',68,'default text'),(570,138,'162',68,'default text'),(571,139,'163',68,'default text'),(572,140,'164',68,'default text'),(573,141,'169',68,'default text'),(574,142,'170',68,'default text'),(575,143,'172',68,'default text'),(577,-1,'174',69,''),(580,132,'150',69,'default text'),(581,134,'154',69,'default text'),(582,136,'158',69,'default text'),(583,137,'159',69,'default text'),(584,138,'162',69,'default text'),(585,139,'163',69,'default text'),(586,140,'164',69,'default text'),(587,141,'169',69,'default text'),(588,142,'170',69,'default text'),(589,143,'172',69,'default text'),(591,-1,'174',70,''),(594,132,'150',70,'default text'),(595,134,'154',70,'default text'),(596,136,'158',70,'default text'),(597,137,'159',70,'default text'),(598,138,'162',70,'default text'),(599,139,'163',70,'default text'),(600,140,'164',70,'default text'),(601,141,'169',70,'default text'),(602,142,'170',70,'default text'),(603,143,'172',70,'default text'),(605,-1,'68',71,''),(607,61,'41',71,'default text'),(609,63,'46',71,'default text'),(610,64,'55',71,'default text'),(611,65,'57',71,'default text'),(612,66,'59',71,'default text'),(613,67,'60',71,'default text'),(614,68,'61',71,'default text'),(615,69,'62',71,'default text'),(616,70,'63',71,'default text'),(618,72,'65',71,'default text'),(619,73,'66',71,'default text'),(621,-1,'68',72,''),(623,61,'41',72,'default text'),(625,63,'46',72,'default text'),(626,64,'55',72,'default text'),(627,65,'57',72,'default text'),(628,66,'59',72,'default text'),(629,67,'60',72,'default text'),(630,68,'61',72,'default text'),(631,69,'62',72,'default text'),(632,70,'63',72,'default text'),(634,72,'65',72,'default text'),(635,73,'66',72,'default text'),(637,-1,'68',73,''),(639,61,'41',73,'default text'),(641,63,'46',73,'default text'),(642,64,'55',73,'default text'),(643,65,'57',73,'default text'),(644,66,'59',73,'default text'),(645,67,'60',73,'default text'),(646,68,'61',73,'default text'),(647,69,'62',73,'default text'),(648,70,'63',73,'default text'),(650,72,'65',73,'default text'),(651,73,'66',73,'default text'),(653,-1,'68',74,''),(655,61,'41',74,'default text'),(657,63,'46',74,'default text'),(658,64,'55',74,'default text'),(659,65,'57',74,'default text'),(660,66,'59',74,'default text'),(661,67,'60',74,'default text'),(662,68,'61',74,'default text'),(663,69,'62',74,'default text'),(664,70,'63',74,'default text'),(666,72,'65',74,'default text'),(667,73,'66',74,'default text'),(669,-1,'68',75,''),(671,61,'41',75,'default text'),(673,63,'46',75,'default text'),(674,64,'55',75,'default text'),(675,65,'57',75,'default text'),(676,66,'59',75,'default text'),(677,67,'60',75,'default text'),(678,68,'61',75,'default text'),(679,69,'62',75,'default text'),(680,70,'63',75,'default text'),(682,72,'65',75,'default text'),(683,73,'66',75,'default text'),(685,-1,'',76,''),(686,257,'291',76,'default text'),(687,-1,'',77,''),(688,257,'291',77,'default text'),(689,-1,'',78,''),(690,257,'291',78,'default text'),(691,-1,'',79,''),(692,257,'291',79,'default text'),(693,-1,'',80,''),(694,257,'291',80,'default text'),(695,-1,'192',81,''),(697,151,'182',81,'default text'),(698,152,'184',81,'default text'),(699,153,'187',81,'default text'),(700,155,'189',81,'default text'),(702,-1,'192',82,''),(704,151,'182',82,'default text'),(705,152,'184',82,'default text'),(706,153,'187',82,'default text'),(707,155,'189',82,'default text'),(709,-1,'192',83,''),(711,151,'182',83,'default text'),(712,152,'184',83,'default text'),(713,153,'187',83,'default text'),(714,155,'189',83,'default text'),(716,-1,'192',84,''),(718,151,'182',84,'default text'),(719,152,'184',84,'default text'),(720,153,'187',84,'default text'),(721,155,'189',84,'default text'),(723,-1,'192',85,''),(725,151,'182',85,'default text'),(726,152,'184',85,'default text'),(727,153,'187',85,'default text'),(728,155,'189',85,'default text'),(730,-1,'204',86,''),(732,165,'200',86,'default text'),(733,172,'202',86,'default text'),(735,-1,'204',87,''),(737,165,'200',87,'default text'),(738,172,'202',87,'default text'),(740,-1,'204',88,''),(742,165,'200',88,'default text'),(743,172,'202',88,'default text'),(745,-1,'204',89,''),(747,165,'200',89,'default text'),(748,172,'202',89,'default text'),(750,-1,'204',90,''),(752,165,'200',90,'default text'),(753,172,'202',90,'default text'),(755,-1,'212,213',91,''),(757,185,'209',91,'default text'),(758,186,'211',91,'default text'),(760,-1,'',92,''),(761,175,'',92,'faa'),(762,176,'',92,'faff'),(765,185,'209',92,'default text'),(766,186,'210',92,'default text'),(767,-1,'',93,''),(768,175,'',93,'wer'),(769,176,'',93,'bgt'),(772,185,'209',93,'default text'),(773,186,'210',93,'default text'),(774,-1,'',94,''),(776,185,'209',94,'default text'),(777,186,'210',94,'default text'),(778,-1,'',95,''),(780,185,'209',95,'default text'),(781,186,'210',95,'default text'),(782,-1,'',96,''),(783,194,'217',96,'default text'),(784,196,'220',96,''),(785,201,'224',96,'default text'),(786,-1,'',97,''),(787,194,'217',97,'default text'),(788,201,'224',97,'default text'),(789,-1,'',98,''),(790,194,'217',98,'default text'),(791,201,'224',98,'default text'),(792,-1,'',99,''),(793,194,'217',99,'default text'),(794,201,'224',99,'default text'),(795,-1,'',100,''),(796,194,'217',100,'default text'),(797,201,'224',100,'default text'),(798,-1,'',101,''),(799,215,'236',101,'default text'),(800,-1,'',102,''),(801,215,'236',102,'default text'),(802,-1,'',103,''),(803,215,'236',103,'default text'),(804,-1,'',104,''),(805,215,'236',104,'default text'),(806,-1,'',105,''),(807,215,'236',105,'default text'),(808,-1,'',106,''),(809,228,'251',106,'default text'),(810,-1,'',107,''),(811,228,'251',107,'default text'),(812,-1,'',108,''),(813,228,'251',108,'default text'),(814,-1,'',109,''),(815,228,'251',109,'default text'),(816,-1,'',110,''),(817,228,'251',110,'default text'),(818,-1,'',111,''),(819,239,'262',111,'default text'),(820,240,'264',111,'default text'),(821,241,'266',111,'default text'),(822,242,'268',111,'default text'),(823,244,'271',111,'default text'),(824,245,'273',111,'default text'),(825,246,'275',111,'default text'),(826,247,'277',111,'default text'),(827,-1,'',112,''),(828,239,'262',112,'default text'),(829,240,'264',112,'default text'),(830,241,'266',112,'default text'),(831,242,'268',112,'default text'),(832,244,'271',112,'default text'),(833,245,'273',112,'default text'),(834,246,'275',112,'default text'),(835,247,'277',112,'default text'),(836,-1,'',113,''),(837,239,'262',113,'default text'),(838,240,'264',113,'default text'),(839,241,'266',113,'default text'),(840,242,'268',113,'default text'),(841,244,'271',113,'default text'),(842,245,'273',113,'default text'),(843,246,'275',113,'default text'),(844,247,'277',113,'default text'),(845,-1,'',114,''),(846,239,'262',114,'default text'),(847,240,'264',114,'default text'),(848,241,'266',114,'default text'),(849,242,'268',114,'default text'),(850,244,'271',114,'default text'),(851,245,'273',114,'default text'),(852,246,'275',114,'default text'),(853,247,'277',114,'default text'),(854,-1,'',115,''),(855,239,'262',115,'default text'),(856,240,'264',115,'default text'),(857,241,'266',115,'default text'),(858,242,'268',115,'default text'),(859,244,'271',115,'default text'),(860,245,'273',115,'default text'),(861,246,'275',115,'default text'),(862,247,'277',115,'default text'),(863,-1,'',116,''),(864,-1,'',117,''),(865,-1,'',118,''),(866,-1,'',119,''),(867,-1,'',120,''),(868,-1,'',121,''),(869,-1,'',122,''),(870,-1,'',123,''),(871,-1,'',124,''),(872,-1,'',125,''),(873,-1,'',126,''),(874,-1,'',127,''),(875,-1,'',128,''),(876,-1,'',129,''),(877,-1,'',130,''),(878,-1,'',131,''),(879,-1,'',132,''),(880,-1,'',133,''),(881,-1,'',134,''),(882,-1,'',135,''),(883,-1,'',136,''),(884,-1,'',137,''),(885,-1,'',138,''),(886,-1,'',139,''),(887,-1,'',140,''),(888,-1,'',141,''),(889,-1,'',142,''),(890,-1,'',143,''),(891,-1,'',144,''),(892,-1,'',145,''),(893,-1,'',146,''),(894,-1,'',147,''),(895,-1,'',148,''),(896,-1,'',149,''),(897,-1,'',150,''),(898,-1,'',151,''),(899,-1,'',152,''),(900,-1,'390',153,''),(901,332,'384',153,''),(902,336,'387',153,'default text'),(904,-1,'',154,''),(905,336,'387',154,'default text'),(906,-1,'',155,''),(907,326,'',155,'MLD'),(908,327,'',155,'SDs'),(910,336,'387',155,'default text'),(911,-1,'',156,''),(912,336,'387',156,'default text'),(913,-1,'',157,''),(914,336,'387',157,'default text'),(915,-1,'',158,''),(916,344,'396',158,'default text'),(917,347,'400',158,'default text'),(918,-1,'',159,''),(919,344,'396',159,'default text'),(920,347,'400',159,'default text'),(921,-1,'',160,''),(922,344,'396',160,'default text'),(923,347,'400',160,'default text'),(924,-1,'',161,''),(925,344,'396',161,'default text'),(926,347,'400',161,'default text'),(927,-1,'',162,''),(928,344,'396',162,'default text'),(929,347,'400',162,'default text'),(930,-1,'',163,''),(931,358,'412',163,'default text'),(932,-1,'',164,''),(933,358,'412',164,'default text'),(934,-1,'',165,''),(935,358,'412',165,'default text'),(936,-1,'',166,''),(937,358,'412',166,'default text'),(938,-1,'',167,''),(939,358,'412',167,'default text'),(940,-1,'',168,''),(942,366,'422',168,'default text'),(943,370,'426',168,'default text'),(944,371,'427',168,'default text'),(945,-1,'',169,''),(947,366,'422',169,'default text'),(948,370,'426',169,'default text'),(949,371,'427',169,'default text'),(950,-1,'',170,''),(952,366,'422',170,'default text'),(953,370,'426',170,'default text'),(954,371,'427',170,'default text'),(955,-1,'',171,''),(957,366,'422',171,'default text'),(958,370,'426',171,'default text'),(959,371,'427',171,'default text'),(960,-1,'',172,'');
/*!40000 ALTER TABLE `au_product_attr_val` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_product_brand`
--

DROP TABLE IF EXISTS `au_product_brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_product_brand` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `remark` varchar(255) NOT NULL DEFAULT '',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_product_brand`
--

LOCK TABLES `au_product_brand` WRITE;
/*!40000 ALTER TABLE `au_product_brand` DISABLE KEYS */;
/*!40000 ALTER TABLE `au_product_brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_product_category`
--

DROP TABLE IF EXISTS `au_product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT 'ex: Art',
  `path` varchar(255) NOT NULL DEFAULT '' COMMENT 'ex:  top>top1',
  `img` varchar(255) NOT NULL DEFAULT '' COMMENT 'ex: uploads/1.png',
  `img_filename` varchar(255) NOT NULL DEFAULT '',
  `parent_ids` varchar(1024) NOT NULL DEFAULT '',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order_num` tinyint(4) NOT NULL DEFAULT '0',
  `is_leaved` tinyint(2) NOT NULL DEFAULT '0' COMMENT '1-leaved',
  `state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1-used,0-unused',
  `is_main` tinyint(3) NOT NULL DEFAULT '0' COMMENT '1-home show',
  `brand_ids` varchar(1024) NOT NULL DEFAULT '' COMMENT 'brand_ids',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'update_date',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_product_category`
--

LOCK TABLES `au_product_category` WRITE;
/*!40000 ALTER TABLE `au_product_category` DISABLE KEYS */;
INSERT INTO `au_product_category` VALUES (1,'Electronics','Electronics','assets/img/electron.png','electron.png','',0,1,0,1,1,'','2019-10-15 07:22:07','2019-10-17 20:43:08'),(2,'Fashion','Fashion','assets/img/fashion.png','fashion','',0,2,0,1,1,'','2019-10-15 07:22:18','2019-10-17 20:43:08'),(3,'Health & Beauty','Health & Beauty','assets/img/sport_category.png','sports.png','',0,3,0,1,1,'','2019-10-15 07:23:44','2019-10-17 20:43:08'),(8,'Cell Phone & Accessories','Electronics>Cell Phone & Accessories','','','1',1,1,0,1,0,'','2019-10-17 00:39:15','2019-10-17 20:43:08'),(9,'Smart Watches','Electronics>Cell Phone & Accessories>Smart Watches','/uploads/category/201910171636276712.jpg','1.jpg','1,8',8,1,1,1,1,'1,3','2019-10-17 00:40:03','2019-10-27 15:38:04'),(10,'Cell Phones & Smartphones','Electronics>Cell Phones & Smartphones','','','1',1,2,1,1,1,'','2019-10-17 00:40:39','2019-11-17 03:30:57'),(11,'Smart Watch Accessories','Electronics>Smart Watch Accessories','','',',1',1,3,1,1,0,'','2019-10-19 02:13:28','2019-10-19 06:39:50'),(12,'Smart Watch Chargers and Docking Stations','Electronics>Smart Watch Chargers and Docking Stations','','',',1',1,4,1,1,0,'','2019-10-19 06:42:52','2019-10-19 07:48:27'),(13,'Computers, Tablets & Network hardwares','Electronics>Computers, Tablets & Network hardwares','','',',1',1,5,0,0,0,'','2019-10-19 07:09:45','2019-10-19 07:09:45'),(14,'Computer components & parts','Electronics>Computers, Tablets & Network hardwares>Computer components & parts','','',',1,13',13,1,1,1,0,'','2019-10-19 07:10:11','2019-10-19 07:10:11'),(15,'Laptops & Notebooks','Electronics>Laptops & Notebooks','','',',1',1,6,1,1,0,'','2019-10-19 07:39:09','2019-10-19 07:39:09'),(16,'Laptop & Desktop Accessories','Electronics>Laptop & Desktop Accessories','','',',1',1,7,1,1,0,'','2019-10-19 10:52:19','2019-10-19 10:52:19'),(18,'Computer printers, scanners & supplies','Electronics>Computer printers, scanners & supplies','','',',1',1,8,1,1,0,'','2019-10-19 11:19:17','2019-10-19 11:19:17'),(19,'Tablet & eReaders Accessories','Electronics>Tablet & eReaders Accessories','','',',1',1,9,1,1,0,'','2019-10-19 19:02:26','2019-10-19 19:02:26'),(20,'Women’s  Accessories','Fashion>Women’s  Accessories','','',',2',2,1,0,0,0,'1','2019-11-16 08:53:23','2019-11-16 08:53:23'),(21,'Women’s Wallet','Fashion>Women’s  Accessories>Women’s Wallet','','',',2,20',20,1,1,1,1,'1','2019-11-16 08:55:56','2019-11-16 09:01:38'),(22,'Women\'s Scarves & Wraps','Fashion>Women’s  Accessories>Women\'s Scarves & Wraps','','',',2,20',20,2,1,1,1,'1','2019-11-16 09:14:50','2019-11-16 09:14:50'),(23,'Men’s Accessories','Fashion>Men’s Accessories','','',',2',2,2,0,1,0,'1','2019-11-16 09:23:32','2019-11-16 09:23:32'),(24,'Men\'s Hats','Fashion>Men’s Accessories>Men\'s Hats','','',',2,23',23,1,1,1,1,'1','2019-11-16 09:23:54','2019-11-16 09:23:54'),(25,'Men\'s Sunglasses & Sunglasses Accessories','Fashion>Men’s Accessories>Men\'s Sunglasses & Sunglasses Accessories','','',',2,23',23,2,1,1,1,'1','2019-11-16 09:37:23','2019-11-16 09:37:23'),(26,'Shoes','Fashion>Shoes','','',',2',2,3,0,1,0,'1','2019-11-16 09:51:09','2019-11-16 09:51:09'),(27,'Men’s Shoes','Fashion>Shoes>Men’s Shoes','','',',2,26',26,1,1,1,1,'1','2019-11-16 09:51:30','2019-11-16 09:51:30'),(28,'Women\'s Shoes','Fashion>Shoes>Women\'s Shoes','','',',2,26',26,2,1,1,1,'1','2019-11-16 09:59:25','2019-11-16 09:59:25'),(29,'Vitamins & Dietary Supplements','Health & Beauty>Vitamins & Dietary Supplements','','',',3',3,1,0,1,0,'1','2019-11-16 10:07:49','2019-11-16 10:07:49'),(30,'Vitamin & Mineral Health Supplements','Health & Beauty>Vitamins & Dietary Supplements>Vitamin & Mineral Health Supplements','','',',3,29',29,1,1,1,1,'1','2019-11-16 10:08:18','2019-11-16 10:08:18'),(31,'Dietary Sports Supplements','Health & Beauty>Vitamins & Dietary Supplements>Dietary Sports Supplements','','',',3,29',29,2,1,1,1,'1','2019-11-16 14:05:25','2019-11-16 14:05:25'),(32,'Health Care Product','Health & Beauty>Health Care Product','','',',3',3,2,0,1,0,'1','2019-11-16 14:06:51','2019-11-16 14:06:51'),(33,'Over-the-Counter Medications & Treatments','Health & Beauty>Health Care Product>Over-the-Counter Medications & Treatments','','',',3,32',32,1,1,1,1,'1','2019-11-16 14:07:11','2019-11-16 14:07:11'),(34,'Sleeping Aids','Health & Beauty>Health Care Product>Sleeping Aids','','',',3,32',32,2,1,1,1,'1','2019-11-16 14:07:33','2019-11-16 14:07:33'),(35,'Herb & Botanical Dietary Supplements','Health & Beauty>Vitamins & Dietary Supplements>Herb & Botanical Dietary Supplements','','',',3,29',29,3,1,1,1,'1','2019-11-16 14:08:36','2019-11-16 14:08:36'),(36,'Weight Management Supplements','Health & Beauty>Vitamins & Dietary Supplements>Weight Management Supplements','','',',3,29',29,4,1,1,1,'1','2019-11-16 14:09:11','2019-11-16 14:09:11'),(37,'Endurance & Energy Bars, Drinks & Pills','Health & Beauty>Vitamins & Dietary Supplements>Endurance & Energy Bars, Drinks & Pills','','',',3,29',29,5,1,1,1,'1','2019-11-16 14:09:35','2019-11-16 14:09:35'),(38,'Dietary Supplements','Health & Beauty>Vitamins & Dietary Supplements>Dietary Supplements','','',',3,29',29,6,1,1,1,'1','2019-11-16 14:09:58','2019-11-16 14:09:58'),(39,'Diabetic Care','Health & Beauty>Health Care Product>Diabetic Care','','',',3,32',32,3,1,1,1,'1','2019-11-16 14:10:25','2019-11-16 14:10:25'),(40,'Medical Monitoring & Testing Equipment','Health & Beauty>Health Care Product>Medical Monitoring & Testing Equipment','','',',3,32',32,4,1,1,1,'1','2019-11-16 14:10:48','2019-11-16 14:10:48'),(41,'Smoking Cessation Products','Health & Beauty>Health Care Product>Smoking Cessation Products','','',',3,32',32,5,1,1,1,'1','2019-11-16 14:11:08','2019-11-16 14:11:08'),(42,'Foot Creams & Treatments','Health & Beauty>Health Care Product>Foot Creams & Treatments','','',',3,32',32,6,1,1,1,'1','2019-11-16 14:11:29','2019-11-16 14:11:29'),(43,'Skin Care Products','Health & Beauty>Skin Care Products','','',',3',3,3,0,1,0,'1','2019-11-16 14:11:53','2019-11-16 14:11:53'),(44,'Anti-Aging Products','Health & Beauty>Skin Care Products>Anti-Aging Products','','',',3,43',43,1,1,1,1,'1','2019-11-16 14:12:11','2019-11-16 14:12:11'),(45,'Skin Care Moisturizers','Health & Beauty>Skin Care Products>Skin Care Moisturizers','','',',3,43',43,2,1,1,1,'1','2019-11-16 14:12:30','2019-11-16 14:12:30'),(46,'Skin Cleansers & Toners','Health & Beauty>Skin Care Products>Skin Cleansers & Toners','','',',3,43',43,3,1,1,1,'1','2019-11-16 14:12:51','2019-11-16 14:12:51'),(47,'Acne & Blemish Treatments','Health & Beauty>Skin Care Products>Acne & Blemish Treatments','','',',3,43',43,4,1,1,1,'1','2019-11-16 14:13:16','2019-11-16 14:13:16'),(48,'Skin Masks & Peels','Health & Beauty>Skin Care Products>Skin Masks & Peels','','',',3,43',43,5,1,1,1,'1','2019-11-16 14:13:35','2019-11-16 14:13:35'),(49,'Eye Treatments & Masks','Health & Beauty>Skin Care Products>Eye Treatments & Masks','','',',3,43',43,6,1,1,1,'1','2019-11-16 14:13:51','2019-11-16 14:13:51'),(50,'Hair care & Styling products','Health & Beauty>Hair care & Styling products','','',',3',3,4,0,1,0,'1','2019-11-16 14:14:11','2019-11-16 14:14:11'),(51,'Hair Extensions & Wigs','Health & Beauty>Hair care & Styling products>Hair Extensions & Wigs','','',',3,50',50,1,1,1,1,'1','2019-11-16 14:14:31','2019-11-16 14:14:31'),(52,'Shampoos & Conditioners','Health & Beauty>Hair care & Styling products>Shampoos & Conditioners','','',',3,50',50,2,1,1,1,'1','2019-11-16 14:14:48','2019-11-16 14:14:48'),(53,'Hair Loss Treatments','Health & Beauty>Hair care & Styling products>Shampoos & Conditioners','','',',3,50',50,3,1,1,1,'1','2019-11-16 14:14:49','2019-11-16 14:15:32'),(54,'Hair Styling Products','Health & Beauty>Hair care & Styling products>Hair Styling Products','','',',3,50',50,4,1,1,1,'1','2019-11-16 14:15:58','2019-11-16 14:15:58'),(55,'Hair Color Products','Health & Beauty>Hair care & Styling products>Hair Color Products','','',',3,50',50,5,1,1,1,'1','2019-11-16 14:16:23','2019-11-16 14:16:23'),(56,'Straightening & Curling Irons','Health & Beauty>Hair care & Styling products>Straightening & Curling Irons','','',',3,50',50,6,1,1,1,'1','2019-11-16 14:16:50','2019-11-16 14:16:50'),(57,'Makeup Products','Health & Beauty>Makeup Products','','',',3',3,5,0,1,0,'1','2019-11-16 14:17:09','2019-11-16 14:17:09'),(58,'Eye Makeup','Health & Beauty>Makeup Products>Eye Makeup','','',',3,57',57,1,1,1,1,'1','2019-11-16 14:17:48','2019-11-16 14:17:48'),(59,'Face Makeup Products','Health & Beauty>Makeup Products>Face Makeup Products','','',',3,57',57,2,1,1,1,'1','2019-11-16 14:18:09','2019-11-16 14:18:09'),(60,'Lip Makeup','Health & Beauty>Makeup Products>Lip Makeup','','',',3,57',57,3,1,1,1,'1','2019-11-16 14:18:30','2019-11-16 14:18:30'),(61,'Makeup Tools & Accessories','Health & Beauty>Makeup Products>Makeup Tools & Accessories','','',',3,57',57,4,1,1,1,'1','2019-11-16 14:18:50','2019-11-16 14:18:50'),(62,'Makeup Bags & Cases','Health & Beauty>Makeup Products>Makeup Bags & Cases','','',',3,57',57,5,1,1,1,'1','2019-11-16 14:19:12','2019-11-16 14:19:12'),(64,'Fragrances','Health & Beauty>Fragrances','','',',3',3,6,0,1,0,'1','2019-11-16 14:20:18','2019-11-16 14:20:18'),(65,'Fragrances for Men','Health & Beauty>Fragrances>Fragrances for Men','','',',3,64',64,1,1,1,1,'1','2019-11-16 14:20:36','2019-11-16 14:20:36'),(66,'Fragrances for Women','Health & Beauty>Fragrances>Fragrances for Women','','',',3,64',64,2,1,1,1,'1','2019-11-16 14:20:55','2019-11-16 14:20:55'),(67,'Unisex Fragrances','Health & Beauty>Fragrances>Unisex Fragrances','','',',3,64',64,3,1,1,1,'1','2019-11-16 14:21:17','2019-11-16 14:21:17'),(68,'Fragrances for Children','Health & Beauty>Fragrances>Fragrances for Children','','',',3,64',64,4,1,1,1,'1','2019-11-16 14:21:38','2019-11-16 14:21:38'),(69,'Manicure, Pedicure & Nail Care Products','Health & Beauty>Manicure, Pedicure & Nail Care Products','','',',3',3,7,0,1,0,'1','2019-11-16 14:22:08','2019-11-16 14:22:08'),(70,'Nail Art Accessories','Health & Beauty>Manicure, Pedicure & Nail Care Products>Nail Art Accessories','','',',3,69',69,1,1,1,1,'1','2019-11-16 14:22:26','2019-11-16 14:22:26'),(71,'Gel Nail Polish','Health & Beauty>Manicure, Pedicure & Nail Care Products>Gel Nail Polish','','',',3,69',69,2,1,1,1,'1','2019-11-16 14:23:40','2019-11-16 14:23:40'),(72,'Nail Polish','Health & Beauty>Manicure, Pedicure & Nail Care Products>Nail Polish','','',',3,69',69,3,1,1,1,'1','2019-11-16 14:24:02','2019-11-16 14:24:02'),(73,'Manicure & Pedicure Tools & Kits','Health & Beauty>Manicure, Pedicure & Nail Care Products>Manicure & Pedicure Tools & Kits','','',',3,69',69,4,1,1,1,'1','2019-11-16 14:24:22','2019-11-16 14:24:22'),(74,'Nail Dryers & UV/LED Lamps','Health & Beauty>Manicure, Pedicure & Nail Care Products>Nail Dryers & UV/LED Lamps','','',',3,69',69,5,1,1,1,'1','2019-11-16 14:24:43','2019-11-16 14:24:43'),(75,'Electric Nail Files & Tools','Health & Beauty>Manicure, Pedicure & Nail Care Products>Electric Nail Files & Tools','','',',3,69',69,6,1,1,1,'1','2019-11-16 14:25:32','2019-11-16 14:25:32'),(80,'Toys & Hobbies','Toys & Hobbies','assets/img/toys.png','toys.png','',0,4,0,0,1,'','2019-11-17 00:04:13','2019-11-17 10:31:21'),(81,'Action Figures','Toys & Hobbies>Action Figures','','',',80',80,1,0,1,0,'1','2019-11-17 00:05:05','2019-11-17 00:05:05'),(82,'TV, Movie & Video Game Action Figures','Toys & Hobbies>Action Figures>TV, Movie & Video Game Action Figures','','',',80,81',81,1,1,1,1,'1','2019-11-17 00:05:41','2019-11-17 00:05:41'),(83,'Comic Book Hero Action Figures','Toys & Hobbies>Action Figures>Comic Book Hero Action Figures','','',',80,81',81,2,1,1,1,'1','2019-11-17 00:06:08','2019-11-17 00:06:08'),(84,'Transformers & Robot Action Figures','Toys & Hobbies>Action Figures>Transformers & Robot Action Figures','','',',80,81',81,3,1,1,1,'1','2019-11-17 00:06:34','2019-11-17 00:06:34'),(85,'Military & Adventure Action Figures','Toys & Hobbies>Action Figures>Military & Adventure Action Figures','','',',80,81',81,4,1,1,1,'1','2019-11-17 00:07:06','2019-11-17 00:07:06'),(86,'Sports Action Figures','Toys & Hobbies>Action Figures>Sports Action Figures','','',',80,81',81,5,1,1,1,'1','2019-11-17 00:07:41','2019-11-17 00:07:41'),(87,'Designer & Urban Vinyl Action Figures','Toys & Hobbies>Action Figures>Sports Action Figures','','',',80,81',81,6,1,1,1,'1','2019-11-17 00:07:41','2019-11-17 00:08:13'),(88,'RC Model Vehicles, Toys & Control Line','Toys & Hobbies>RC Model Vehicles, Toys & Control Line','','',',80',80,2,0,1,0,'1','2019-11-17 00:08:40','2019-11-17 00:08:40'),(89,'Hobby RC Model Vehicle Parts & Accessories','Toys & Hobbies>RC Model Vehicles, Toys & Control Line>Hobby RC Model Vehicle Parts & Accessories','','',',80,88',88,1,1,1,1,'1','2019-11-17 00:09:13','2019-11-17 00:09:13'),(90,'Hobby RC Model Vehicles & Kits','Toys & Hobbies>RC Model Vehicles, Toys & Control Line>Hobby RC Model Vehicles & Kits','','',',80,88',88,2,1,1,1,'1','2019-11-17 00:09:58','2019-11-17 00:09:58'),(91,'Control Line Tether Car Models & Kits','Toys & Hobbies>RC Model Vehicles, Toys & Control Line>Control Line Tether Car Models & Kits','','',',80,88',88,3,1,1,1,'1','2019-11-17 00:10:24','2019-11-17 00:10:24'),(92,'Control Line & Freeflight Models & Kits','Toys & Hobbies>RC Model Vehicles, Toys & Control Line>Control Line & Freeflight Models & Kits','','',',80,88',88,4,1,1,1,'1','2019-11-17 00:10:58','2019-11-17 00:10:58'),(93,'Remote-Controlled Toys','Toys & Hobbies>RC Model Vehicles, Toys & Control Line>Remote-Controlled Toys','','',',80,88',88,5,1,1,1,'1','2019-11-17 00:16:38','2019-11-17 00:16:38'),(94,'Hobby RC Simulators','Toys & Hobbies>RC Model Vehicles, Toys & Control Line>Hobby RC Simulators','','',',80,88',88,6,1,1,1,'1','2019-11-17 00:18:24','2019-11-17 00:18:24'),(95,'Games','Toys & Hobbies>Games','','',',80',80,3,0,1,0,'1','2019-11-17 00:19:17','2019-11-17 00:19:17'),(96,'Miniatures & War Games','Toys & Hobbies>Games>Miniatures & War Games','','',',80,95',95,1,1,1,1,'1','2019-11-17 00:20:47','2019-11-17 00:20:47'),(97,'Board & Traditional Games','Toys & Hobbies>Games>Board & Traditional Games','','',',80,95',95,2,1,1,1,'1','2019-11-17 00:21:14','2019-11-17 00:21:14'),(98,'Role Playing Games','Toys & Hobbies>Games>Role Playing Games','','',',80,95',95,3,1,1,1,'1','2019-11-17 00:21:59','2019-11-17 00:21:59'),(99,'Chess','Toys & Hobbies>Games>Chess','','',',80,95',95,4,1,1,1,'1','2019-11-17 00:22:58','2019-11-17 00:22:58'),(100,'Card Games & Poker','Toys & Hobbies>Games>Card Games & Poker','','',',80,95',95,5,1,1,1,'1','2019-11-17 00:23:32','2019-11-17 00:23:32'),(101,'Other Games','Toys & Hobbies>Games>Other Games','','',',80,95',95,6,1,1,1,'1','2019-11-17 00:28:53','2019-11-17 00:28:53'),(102,'Diecast & Toy Vehicles','Toys & Hobbies>Diecast & Toy Vehicles','','',',80',80,4,0,1,0,'1','2019-11-17 00:29:28','2019-11-17 00:29:28'),(103,'Diecast Cars, Trucks & Vans','Toys & Hobbies>Diecast & Toy Vehicles>Diecast Cars, Trucks & Vans','','',',80,102',102,1,1,1,1,'1','2019-11-17 00:30:40','2019-11-17 00:30:40'),(105,'Diecast Racing Cars','Toys & Hobbies>Diecast & Toy Vehicles>Diecast Racing Cars','','',',80,102',102,2,1,1,1,'1','2019-11-17 00:31:51','2019-11-17 00:31:51'),(106,'Diecast Aircraft & Spacecraft','Toys & Hobbies>Diecast & Toy Vehicles>Diecast Aircraft & Spacecraft','','',',80,102',102,3,1,1,1,'1','2019-11-17 00:32:14','2019-11-17 00:32:14'),(107,'Diecast Farm Vehicles','Toys & Hobbies>Diecast & Toy Vehicles>Diecast Farm Vehicles','','',',80,102',102,4,1,1,1,'1','2019-11-17 00:32:48','2019-11-17 00:32:48'),(108,'Diecast Tanks & Military Vehicles','Toys & Hobbies>Diecast & Toy Vehicles>Diecast Tanks & Military Vehicles','','',',80,102',102,5,1,1,1,'1','2019-11-17 00:33:17','2019-11-17 00:33:17'),(109,'Diecast Construction Equipment','Toys & Hobbies>Diecast & Toy Vehicles>Diecast Construction Equipment','','',',80,102',102,6,1,1,1,'1','2019-11-17 00:33:46','2019-11-17 00:33:46'),(110,'Collectible Card Games & Accessories','Toys & Hobbies>Collectible Card Games & Accessories','','',',80',80,5,0,1,0,'1','2019-11-17 00:34:28','2019-11-17 00:34:28'),(111,'Pokémon Trading Card Game Cards & Merchandise','Toys & Hobbies>Collectible Card Games & Accessories>Pokémon Trading Card Game Cards & Merchandise','','',',80,110',110,1,1,1,1,'1','2019-11-17 00:34:54','2019-11-17 00:34:54'),(112,'Magic: The Gathering Cards & Merchandise','Toys & Hobbies>Collectible Card Games & Accessories>Magic: The Gathering Cards & Merchandise','','',',80,110',110,2,1,1,1,'1','2019-11-17 00:35:27','2019-11-17 00:35:27'),(113,'Yu-Gi-Oh! Trading Card Game Cards & Merchandise','Toys & Hobbies>Collectible Card Games & Accessories>Yu-Gi-Oh! Trading Card Game Cards & Merchandise','','',',80,110',110,3,1,1,1,'1','2019-11-17 00:35:56','2019-11-17 00:35:56'),(114,'Individual Collectible Card Game Cards','Toys & Hobbies>Collectible Card Games & Accessories>Individual Collectible Card Game Cards','','',',80,110',110,4,1,1,1,'1','2019-11-17 00:36:23','2019-11-17 00:36:23'),(115,'Collectible Card Game Supplies & Accessories','Toys & Hobbies>Collectible Card Games & Accessories>Collectible Card Game Supplies & Accessories','','',',80,110',110,5,1,1,1,'1','2019-11-17 00:37:03','2019-11-17 00:37:03'),(116,'Other Collectible Card Game Items','Toys & Hobbies>Collectible Card Games & Accessories>Other Collectible Card Game Items','','',',80,110',110,6,1,1,1,'1','2019-11-17 00:37:30','2019-11-17 00:37:30'),(117,'Building Toys','Toys & Hobbies>Building Toys','','',',80',80,6,0,1,0,'1','2019-11-17 00:38:15','2019-11-17 00:38:15'),(118,'LEGO Building Toys','Toys & Hobbies>Building Toys>LEGO Building Toys','','',',80,117',117,1,1,1,1,'1','2019-11-17 00:38:40','2019-11-17 00:38:40'),(119,'Building Toy Sets & Packs','Toys & Hobbies>Building Toys>Building Toy Sets & Packs','','',',80,117',117,2,1,1,1,'1','2019-11-17 00:39:18','2019-11-17 00:39:18'),(120,'MEGA Bloks Building Toys','Toys & Hobbies>Building Toys>MEGA Bloks Building Toys','','',',80,117',117,3,1,1,1,'1','2019-11-17 00:40:05','2019-11-17 00:40:05'),(121,'Building Toy Pieces & Accessories','Toys & Hobbies>Building Toys>Building Toy Pieces & Accessories','','',',80,117',117,4,1,1,1,'1','2019-11-17 00:40:26','2019-11-17 00:40:26'),(122,'K\'NEX Building Toys','Toys & Hobbies>Building Toys>K\'NEX Building Toys','','',',80,117',117,5,1,1,1,'1','2019-11-17 00:40:47','2019-11-17 00:40:47'),(123,'Model Railroads & Trains','Toys & Hobbies>Building Toys>Model Railroads & Trains','','',',80,117',117,7,0,1,0,'1','2019-11-17 00:41:13','2019-11-17 00:41:13'),(124,'Model Railroads & Trains','Toys & Hobbies>Model Railroads & Trains','','',',80',80,7,0,1,0,'1','2019-11-17 00:42:29','2019-11-17 00:42:29'),(125,'HO Scale Model Railroads & Trains','Toys & Hobbies>Model Railroads & Trains>HO Scale Model Railroads & Trains','','',',80,124',124,1,1,1,1,'1','2019-11-17 00:42:50','2019-11-17 00:42:50'),(126,'N Scale Model Railroads & Trains','Toys & Hobbies>Model Railroads & Trains>N Scale Model Railroads & Trains','','',',80,124',124,2,1,1,1,'1','2019-11-17 00:43:15','2019-11-17 00:43:15'),(127,'O Scale Model Railroads & Trains','Toys & Hobbies>Model Railroads & Trains>O Scale Model Railroads & Trains','','',',80,124',124,3,1,1,1,'1','2019-11-17 00:43:35','2019-11-17 00:43:35'),(128,'G Scale Model Railroads & Trains','Toys & Hobbies>Model Railroads & Trains>G Scale Model Railroads & Trains','','',',80,124',124,4,1,1,1,'1','2019-11-17 00:45:00','2019-11-17 00:45:00'),(129,'Z Scale Model Railroads & Trains','Toys & Hobbies>Model Railroads & Trains>Z Scale Model Railroads & Trains','','',',80,124',124,5,1,1,1,'1','2019-11-17 00:45:40','2019-11-17 00:45:40'),(130,'S Scale Model Railroads & Trains','Toys & Hobbies>Model Railroads & Trains>S Scale Model Railroads & Trains','','',',80,124',124,6,1,1,1,'1','2019-11-17 00:46:03','2019-11-17 00:46:03'),(131,'Toy Models & Kits','Toys & Hobbies>Toy Models & Kits','','',',80',80,8,0,1,0,'1','2019-11-17 00:46:52','2019-11-17 00:46:52'),(132,'Military Models & Kits','Toys & Hobbies>Toy Models & Kits>Military Models & Kits','','',',80,131',131,1,1,1,1,'1','2019-11-17 00:47:33','2019-11-17 00:47:33'),(133,'Automotive Models & Kits','Toys & Hobbies>Toy Models & Kits>Automotive Models & Kits','','',',80,131',131,2,1,1,1,'1','2019-11-17 00:48:00','2019-11-17 00:48:00'),(134,'Science Fiction Toy Models & Kits','Toys & Hobbies>Toy Models & Kits>Science Fiction Toy Models & Kits','','',',80,131',131,3,1,1,1,'1','2019-11-17 00:48:22','2019-11-17 00:48:22'),(135,'Model & Kit Tools, Supplies & Engines','Toys & Hobbies>Toy Models & Kits>Model & Kit Tools, Supplies & Engines','','',',80,131',131,4,1,1,1,'1','2019-11-17 00:48:47','2019-11-17 00:48:47'),(136,'Boat & Ship Model Toys & Kits','Toys & Hobbies>Toy Models & Kits>Boat & Ship Model Toys & Kits','','',',80,131',131,5,1,1,1,'1','2019-11-17 00:49:08','2019-11-17 00:49:08'),(138,'Non-Military Aircraft Models & Kits','Toys & Hobbies>Toy Models & Kits>Non-Military Aircraft Models & Kits','','',',80,131',131,6,1,1,1,'1','2019-11-17 00:50:26','2019-11-17 00:50:26'),(139,'Preschool Toys & Pretend Play','Toys & Hobbies>Preschool Toys & Pretend Play','','',',80',80,9,0,1,0,'1','2019-11-17 00:51:42','2019-11-17 00:51:42'),(140,'Littlest Pet Shop Toys','Toys & Hobbies>Preschool Toys & Pretend Play>Littlest Pet Shop Toys','','',',80,139',139,1,1,1,1,'1','2019-11-17 00:52:29','2019-11-17 00:52:29'),(141,'Fisher-Price Preschool Toys','Toys & Hobbies>Preschool Toys & Pretend Play>Fisher-Price Preschool Toys','','',',80,139',139,2,1,1,1,'1','2019-11-17 00:52:49','2019-11-17 00:52:49'),(142,'Playmobil Preschool Toys','Toys & Hobbies>Preschool Toys & Pretend Play>Playmobil Preschool Toys','','',',80,139',139,3,1,1,1,'1','2019-11-17 00:53:08','2019-11-17 00:53:08'),(143,'Other Preschool & Pretend Play Toys','Toys & Hobbies>Preschool Toys & Pretend Play>Other Preschool & Pretend Play Toys','','',',80,139',139,4,1,1,1,'1','2019-11-17 00:55:48','2019-11-17 00:55:48'),(144,'Pretend Play Kitchens','Toys & Hobbies>Preschool Toys & Pretend Play>Pretend Play Kitchens','','',',80,139',139,5,1,1,1,'1','2019-11-17 00:56:24','2019-11-17 00:56:24'),(145,'Wooden & Handcrafted Pretend Play Toys','Toys & Hobbies>Preschool Toys & Pretend Play>Wooden & Handcrafted Pretend Play Toys','','',',80,139',139,6,1,1,1,'1','2019-11-17 00:56:53','2019-11-17 00:56:53'),(146,'Electronics Top Brands','Toys & Hobbies>Preschool Toys & Pretend Play>Electronics Top Brands','','',',80,139',139,7,1,1,1,'1','2019-11-17 00:57:37','2019-11-17 00:57:37'),(147,'Fashion Top Brands','Toys & Hobbies>Preschool Toys & Pretend Play>Fashion Top Brands','','',',80,139',139,8,1,1,1,'','2019-11-17 00:58:30','2019-11-17 00:58:30'),(148,'Books, Movies & Musics Top Brands','Toys & Hobbies>Preschool Toys & Pretend Play>Books, Movies & Musics Top Brands','','',',80,139',139,9,1,1,1,'','2019-11-17 00:59:02','2019-11-17 00:59:02'),(149,'Home & Garden','Toys & Hobbies>Preschool Toys & Pretend Play>Home & Garden','','',',80,139',139,10,1,1,1,'','2019-11-17 00:59:25','2019-11-17 00:59:25'),(150,'Sporting goods Top Brands','Toys & Hobbies>Preschool Toys & Pretend Play>Sporting goods Top Brands','','',',80,139',139,11,1,1,1,'','2019-11-17 01:00:07','2019-11-17 01:00:07'),(151,'Health & Beauty Top Brands','Toys & Hobbies>Preschool Toys & Pretend Play>Health & Beauty Top Brands','','',',80,139',139,12,1,1,1,'','2019-11-17 01:00:30','2019-11-17 01:00:30'),(152,'Toys & hobbies Top Brands','Toys & Hobbies>Preschool Toys & Pretend Play>Toys & hobbies Top Brands','','',',80,139',139,13,1,1,1,'','2019-11-17 01:00:58','2019-11-17 01:00:58'),(153,'Business & Industrial Top Brands','Toys & Hobbies>Preschool Toys & Pretend Play>Business & Industrial Top Brands','','',',80,139',139,14,1,1,1,'','2019-11-17 01:01:32','2019-11-17 01:01:32'),(154,'Collectibles & Art','Toys & Hobbies>Preschool Toys & Pretend Play>Collectibles & Art','','',',80,139',139,15,1,1,1,'','2019-11-17 01:02:06','2019-11-17 01:02:06'),(155,'Computer Drives, Storage & Blank Media','Electronics>Computers, Tablets & Network hardwares>Computer Drives, Storage & Blank Media','','',',1,13',13,2,1,1,1,'','2019-11-17 02:27:55','2019-11-17 02:27:55'),(156,'Consumer Electronics','Electronics>Consumer Electronics','','',',1',1,3,0,1,0,'','2019-11-17 02:38:25','2019-11-17 02:38:25'),(157,'Multipurpose betteries & power','Electronics>Consumer Electronics>Multipurpose betteries & power','','',',1,156',156,1,1,1,1,'','2019-11-17 02:38:47','2019-11-17 02:38:47'),(158,'Virtually Reality Headsets, parts & Accessories','Electronics>Consumer Electronics>Virtually Reality Headsets, parts & Accessories','','',',1,156',156,2,1,1,1,'','2019-11-17 02:51:42','2019-11-17 02:51:42'),(159,'Consumer Electronics Mixed Lots','Electronics>Consumer Electronics>Consumer Electronics Mixed Lots','','',',1,156',156,3,1,1,1,'','2019-11-17 03:01:55','2019-11-17 03:01:55'),(160,'Video Games & Consoles','Electronics>Video Games & Consoles','','',',1',1,4,0,1,0,'','2019-11-17 03:36:37','2019-11-17 03:36:37'),(161,'Video games','Electronics>Video Games & Consoles>Video games','','',',1,160',160,1,1,1,1,'','2019-11-17 03:36:52','2019-11-17 03:36:52'),(162,'Video Games Accessories','Electronics>Video Games & Consoles>Video Games Accessories','','',',1,160',160,2,1,1,1,'','2019-11-17 03:45:07','2019-11-17 03:45:07'),(163,'Books, Movies & Musics','Books, Movies & Musics','assets/img/musics.png','musics.png','',0,5,0,1,1,'1','2019-11-18 01:09:43','2019-11-18 01:09:43'),(164,'Musical Instruments & Gear','Books, Movies & Musics>Musical Instruments & Gear','','',',163',163,1,0,1,0,'1','2019-11-18 01:10:06','2019-11-18 01:10:06'),(165,'Guitars & Basses','Books, Movies & Musics>Musical Instruments & Gear>Guitars & Basses','','',',163,164',164,1,1,1,1,'1','2019-11-18 01:10:30','2019-11-18 01:10:30'),(166,'Pro Audio Equipment','Books, Movies & Musics>Musical Instruments & Gear>Pro Audio Equipment','','',',163,164',164,2,1,1,1,'','2019-11-18 01:17:49','2019-11-18 01:17:49'),(167,'Percussion Instruments','Books, Movies & Musics>Musical Instruments & Gear>Percussion Instruments','','',',163,164',164,3,1,1,1,'','2019-11-18 01:25:10','2019-11-18 01:25:10'),(168,'Wind & Woodwind Instruments','Books, Movies & Musics>Musical Instruments & Gear>Wind & Woodwind Instruments','','',',163,164',164,4,1,1,1,'','2019-11-18 01:30:41','2019-11-18 01:31:00'),(169,'String Instruments','Books, Movies & Musics>Musical Instruments & Gear>String Instruments','','',',163,164',164,5,1,1,1,'','2019-11-18 01:36:58','2019-11-18 01:36:58'),(170,'Pianos, Keyboards & Organs','Books, Movies & Musics>Musical Instruments & Gear>Pianos, Keyboards & Organs','','',',163,164',164,6,1,1,1,'','2019-11-18 01:37:26','2019-11-18 01:37:26'),(171,'DVD’s & Movies','Books, Movies & Musics>DVD’s & Movies','','',',163',163,2,0,1,0,'','2019-11-18 01:52:44','2019-11-18 01:52:44'),(172,'DVDs & Blu-ray Discs','Books, Movies & Musics>DVD’s & Movies>DVDs & Blu-ray Discs','','',',163,171',171,1,1,1,1,'','2019-11-18 01:53:34','2019-11-18 01:53:34');
/*!40000 ALTER TABLE `au_product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_product_description`
--

DROP TABLE IF EXISTS `au_product_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_product_description` (
  `id` int(10) NOT NULL DEFAULT '0',
  `description` text,
  `meta_description` varchar(255) NOT NULL DEFAULT '',
  `meta_keyword` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_product_description`
--

LOCK TABLES `au_product_description` WRITE;
/*!40000 ALTER TABLE `au_product_description` DISABLE KEYS */;
INSERT INTO `au_product_description` VALUES (1,'<p>sdfafdasdfasdf</p><p>sdfsafasdf</p>','',''),(2,'<p><br></p>','',''),(4,'<p><br></p>','',''),(11,'<p><br></p>','',''),(17,'<p>sfsadfasdf</p>','',''),(28,'<p><br></p>','',''),(34,'<p><br></p>','',''),(35,'<p><br></p>','',''),(36,'<p><br></p>','',''),(37,'<p><br></p>','',''),(38,'<p><br></p>','',''),(39,'<p><br></p>','',''),(40,'<p><br></p>','',''),(41,'<p><br></p>','',''),(42,'<p><br></p>','',''),(43,'<p><br></p>','',''),(44,'<p><br></p>','',''),(45,'<p><br></p>','',''),(46,'<p><br></p>','',''),(47,'<p><br></p>','',''),(48,'<p><br></p>','',''),(49,'<p><br></p>','',''),(50,'<p><br></p>','',''),(51,'<p><br></p>','',''),(52,'<p><br></p>','',''),(53,'<p><br></p>','',''),(54,'<p><br></p>','',''),(55,'<p><br></p>','',''),(56,'<p><br></p>','',''),(57,'<p><br></p>','',''),(58,'<p><br></p>','',''),(59,'<p><br></p>','',''),(60,'<p><br></p>','',''),(61,'<p><br></p>','',''),(62,'<p><br></p>','',''),(63,'<p><br></p>','',''),(64,'<p><br></p>','',''),(65,'<p><br></p>','',''),(66,'<p><br></p>','',''),(67,'<p><br></p>','',''),(68,'<p><br></p>','',''),(69,'<p><br></p>','',''),(70,'<p><br></p>','',''),(71,'<p><br></p>','',''),(72,'<p><br></p>','',''),(73,'<p><br></p>','',''),(74,'<p><br></p>','',''),(75,'<p><br></p>','',''),(76,'<p><br></p>','',''),(77,'<p><br></p>','',''),(78,'<p><br></p>','',''),(79,'<p><br></p>','',''),(80,'<p><br></p>','',''),(81,'<p><br></p>','',''),(82,'<p><br></p>','',''),(83,'<p><br></p>','',''),(84,'<p><br></p>','',''),(85,'<p><br></p>','',''),(86,'<p><br></p>','',''),(87,'<p><br></p>','',''),(88,'<p><br></p>','',''),(89,'<p><br></p>','',''),(90,'<p><br></p>','',''),(91,'<p><br></p>','',''),(92,'<p><br></p>','',''),(93,'<p><br></p>','',''),(94,'<p><br></p>','',''),(95,'<p><br></p>','',''),(96,'<p><br></p>','',''),(97,'<p><br></p>','',''),(98,'<p><br></p>','',''),(99,'<p><br></p>','',''),(100,'<p><br></p>','',''),(101,'<p><br></p>','',''),(102,'<p><br></p>','',''),(103,'<p><br></p>','',''),(104,'<p><br></p>','',''),(105,'<p><br></p>','',''),(106,'<p><br></p>','',''),(107,'<p><br></p>','',''),(108,'<p><br></p>','',''),(109,'<p><br></p>','',''),(110,'<p><br></p>','',''),(111,'<p><br></p>','',''),(112,'<p><br></p>','',''),(113,'<p><br></p>','',''),(114,'<p><br></p>','',''),(115,'<p><br></p>','',''),(116,'<p><br></p>','',''),(117,'<p><br></p>','',''),(118,'<p><br></p>','',''),(119,'<p><br></p>','',''),(120,'<p><br></p>','',''),(121,'<p><br></p>','',''),(122,'<p><br></p>','',''),(123,'<p><br></p>','',''),(124,'<p><br></p>','',''),(125,'<p><br></p>','',''),(126,'<p><br></p>','',''),(127,'<p><br></p>','',''),(128,'<p><br></p>','',''),(129,'<p><br></p>','',''),(130,'<p><br></p>','',''),(131,'<p><br></p>','',''),(132,'<p><br></p>','',''),(133,'<p><br></p>','',''),(134,'<p><br></p>','',''),(135,'<p><br></p>','',''),(136,'<p><br></p>','',''),(137,'<p><br></p>','',''),(138,'<p><br></p>','',''),(139,'<p><br></p>','',''),(140,'<p><br></p>','',''),(141,'<p><br></p>','',''),(142,'<p><br></p>','',''),(143,'<p><br></p>','',''),(144,'<p><br></p>','',''),(145,'<p><br></p>','',''),(146,'<p><br></p>','',''),(147,'<p><br></p>','',''),(148,'<p><br></p>','',''),(149,'<p><br></p>','',''),(150,'<p><br></p>','',''),(151,'<p><br></p>','',''),(152,'<p><br></p>','',''),(153,'<p><br></p>','',''),(154,'<p><br></p>','',''),(155,'<p><br></p>','',''),(156,'<p><br></p>','',''),(157,'<p><br></p>','',''),(158,'<p><br></p>','',''),(159,'<p><br></p>','',''),(160,'<p><br></p>','',''),(161,'<p><br></p>','',''),(162,'<p><br></p>','',''),(163,'<p><br></p>','',''),(164,'<p><br></p>','',''),(165,'<p><br></p>','',''),(166,'<p><br></p>','',''),(167,'<p><br></p>','',''),(168,'<p><br></p>','',''),(169,'<p><br></p>','',''),(170,'<p><br></p>','',''),(171,'<p><br></p>','',''),(172,'<p><br></p>','','');
/*!40000 ALTER TABLE `au_product_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_product_img`
--

DROP TABLE IF EXISTS `au_product_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_product_img` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_product:id',
  `img` varchar(255) NOT NULL DEFAULT '' COMMENT 'uploads/1.png',
  `order_num` int(10) NOT NULL DEFAULT '0' COMMENT 'sort order number',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_product_img`
--

LOCK TABLES `au_product_img` WRITE;
/*!40000 ALTER TABLE `au_product_img` DISABLE KEYS */;
INSERT INTO `au_product_img` VALUES (1,1,'uploads/product/20191110/1622217448.png',1),(15,2,'uploads/product/20191110/1614306148.png',1);
/*!40000 ALTER TABLE `au_product_img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_product_variant`
--

DROP TABLE IF EXISTS `au_product_variant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_product_variant` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_product:id',
  `varient_val_ids` varchar(1024) NOT NULL DEFAULT '' COMMENT 'ex: 1_2,2_3 au_attr:id,au_attr_val:id',
  `sku` varchar(255) NOT NULL DEFAULT '',
  `quantity` int(10) NOT NULL DEFAULT '1',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `state` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1-normal,0-delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_product_variant`
--

LOCK TABLES `au_product_variant` WRITE;
/*!40000 ALTER TABLE `au_product_variant` DISABLE KEYS */;
INSERT INTO `au_product_variant` VALUES (123,1,'5_7,6_5','sku1',11,14.00,1,'2019-11-22 21:53:00','2019-11-22 21:53:00'),(124,1,'5_7,6_6','sku2',10,15.00,1,'2019-11-22 21:53:00','2019-11-22 21:53:00'),(125,1,'5_8,6_5','sku3',12,16.00,1,'2019-11-22 21:53:00','2019-11-22 21:53:00'),(126,1,'5_8,6_6','sku4',13,17.00,1,'2019-11-22 21:53:00','2019-11-22 21:53:00');
/*!40000 ALTER TABLE `au_product_variant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_user_basket`
--

DROP TABLE IF EXISTS `au_user_basket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_user_basket` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT 'users:id',
  `product_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_product:id',
  `sku_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_product_variant:id',
  `product_count` int(11) NOT NULL DEFAULT '0',
  `supplier_id` bigint(20) NOT NULL DEFAULT '0' COMMENT 'users:id',
  `immeditaly_type` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0:insert basket ，1：directive buy',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COMMENT='采购单位-购买车';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_user_basket`
--

LOCK TABLES `au_user_basket` WRITE;
/*!40000 ALTER TABLE `au_user_basket` DISABLE KEYS */;
INSERT INTO `au_user_basket` VALUES (14,3,2,0,2,4,0),(17,3,8,0,3,4,0),(19,3,9,0,1,4,0),(24,2,8,0,1,4,1),(25,3,1,123,1,3,1),(26,3,1,123,201,3,0);
/*!40000 ALTER TABLE `au_user_basket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_user_product_history`
--

DROP TABLE IF EXISTS `au_user_product_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_user_product_history` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT 'users:id',
  `product_id` int(10) NOT NULL DEFAULT '0' COMMENT 'au_product:id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_user_product_history`
--

LOCK TABLES `au_user_product_history` WRITE;
/*!40000 ALTER TABLE `au_user_product_history` DISABLE KEYS */;
INSERT INTO `au_user_product_history` VALUES (24,1,8),(25,2,1),(26,2,2),(27,2,19),(28,2,8),(29,2,12),(30,1,1),(31,1,82),(32,1,147),(33,2,112),(34,3,112),(35,3,1),(36,3,154),(37,3,156),(38,3,157),(39,3,153),(40,3,2),(41,3,3),(42,1,13);
/*!40000 ALTER TABLE `au_user_product_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_user_receive_address`
--

DROP TABLE IF EXISTS `au_user_receive_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_user_receive_address` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT 'users:id',
  `user_name` varchar(255) NOT NULL DEFAULT '' COMMENT 'receiver user name',
  `region_id` varchar(10) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT 'detail address',
  `phone_num` varchar(50) NOT NULL DEFAULT '',
  `is_active` tinyint(3) NOT NULL DEFAULT '0' COMMENT '1-active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_user_receive_address`
--

LOCK TABLES `au_user_receive_address` WRITE;
/*!40000 ALTER TABLE `au_user_receive_address` DISABLE KEYS */;
INSERT INTO `au_user_receive_address` VALUES (1,2,'Test','BT','shanghai 上海 20063','132932392965',1),(2,2,'Test1','CN','asdfasdfasdfasdf','132932392965',0),(4,2,'ssdfsdf','AF','sdfsdf','12234342341',0),(5,3,'11','AF','111','1111',0),(6,3,'ddd','AL','dd','dddd',1);
/*!40000 ALTER TABLE `au_user_receive_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_user_save_seller`
--

DROP TABLE IF EXISTS `au_user_save_seller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_user_save_seller` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `seller_id` int(10) NOT NULL DEFAULT '0',
  `msg` varchar(30) NOT NULL DEFAULT '',
  `log_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_user_save_seller`
--

LOCK TABLES `au_user_save_seller` WRITE;
/*!40000 ALTER TABLE `au_user_save_seller` DISABLE KEYS */;
INSERT INTO `au_user_save_seller` VALUES (1,2,3,'test','2019-11-11 11:39:51');
/*!40000 ALTER TABLE `au_user_save_seller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_user_saved_history`
--

DROP TABLE IF EXISTS `au_user_saved_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_user_saved_history` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT 'users:id',
  `conditions` text,
  `brands` text,
  `price` varchar(256) DEFAULT NULL,
  `search_key` varchar(256) DEFAULT NULL,
  `search_date` date NOT NULL DEFAULT '0000-00-00',
  `category_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_user_saved_history`
--

LOCK TABLES `au_user_saved_history` WRITE;
/*!40000 ALTER TABLE `au_user_saved_history` DISABLE KEYS */;
INSERT INTO `au_user_saved_history` VALUES (3,3,NULL,NULL,',','a','0000-00-00',0),(4,3,'0,1,2','1,3','20.00,30.00','a','0000-00-00',0),(6,2,NULL,NULL,',','1','2019-11-19',0),(7,2,NULL,NULL,',','1','2019-11-19',11);
/*!40000 ALTER TABLE `au_user_saved_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `au_user_trans_log`
--

DROP TABLE IF EXISTS `au_user_trans_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `au_user_trans_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT 'users:id',
  `trans_type` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0-mastercard,1-paypal,2-american',
  `trans_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `trans_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pay_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `trans_state` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0-create,1-success',
  `order_ids` varchar(1024) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `au_user_trans_log`
--

LOCK TABLES `au_user_trans_log` WRITE;
/*!40000 ALTER TABLE `au_user_trans_log` DISABLE KEYS */;
INSERT INTO `au_user_trans_log` VALUES (1,2,0,307.20,'2019-11-08 20:15:02','0000-00-00 00:00:00',0,'21,22'),(2,2,0,307.20,'2019-11-08 20:15:52','0000-00-00 00:00:00',0,'21,22'),(3,2,0,307.20,'2019-11-08 20:16:28','2019-11-08 20:16:31',1,'21,22'),(4,2,0,307.20,'2019-11-08 20:18:40','2019-11-08 20:18:42',1,'23,24'),(5,2,1,307.20,'2019-11-08 20:20:07','2019-11-08 20:20:09',1,'25,26'),(6,2,0,307.20,'2019-11-09 19:26:37','2019-11-09 19:26:40',1,'5,6'),(7,2,1,307.20,'2019-11-09 19:28:35','2019-11-09 19:28:37',1,'7,8'),(8,2,0,11.20,'2019-11-09 22:45:41','2019-11-09 22:45:44',1,'4'),(9,2,0,220.00,'2019-11-10 00:32:01','2019-11-10 00:32:05',1,'3'),(10,3,0,12.00,'2019-11-18 19:24:29','2019-11-18 19:24:31',1,'19');
/*!40000 ALTER TABLE `au_user_trans_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_categories`
--

DROP TABLE IF EXISTS `blog_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_categories`
--

LOCK TABLES `blog_categories` WRITE;
/*!40000 ALTER TABLE `blog_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_comments`
--

DROP TABLE IF EXISTS `blog_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_comments`
--

LOCK TABLES `blog_comments` WRITE;
/*!40000 ALTER TABLE `blog_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_category_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sortname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datatables`
--

DROP TABLE IF EXISTS `datatables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datatables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `points` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datatables`
--

LOCK TABLES `datatables` WRITE;
/*!40000 ALTER TABLE `datatables` DISABLE KEYS */;
INSERT INTO `datatables` VALUES (1,'Odell','Reilly','sipes.brett@yahoo.com','410','Sint adipisci adipisci ut ad. Est consequatur minima rerum quia.','2019-09-19 00:56:13','2019-09-19 00:56:13',31,'Financial Analyst','Female','India','2017-09-30 06:14:21'),(2,'Susanna','Nolan','kenny81@yahoo.com','580','Sapiente consequuntur ipsum nesciunt sit ab. Placeat quia quia aut corrupti qui ea.','2019-09-19 00:56:13','2019-09-19 00:56:13',31,'Painter and Illustrator','Female','India','2017-09-26 01:44:40'),(3,'Clovis','Ryan','weber.mikel@gmail.com','722','Et et illum pariatur unde et et. Mollitia ut iure velit nobis quae expedita. Qui iusto soluta et a.','2019-09-19 00:56:13','2019-09-19 00:56:13',31,'Real Estate Broker','Male','India','2017-10-02 22:23:32'),(4,'Jasen','Wunsch','jada34@okuneva.biz','873','Consequuntur minus inventore et reprehenderit recusandae. Dolorem ad tempore aut voluptates ex.','2019-09-19 00:56:13','2019-09-19 00:56:13',67,'Conservation Scientist','Female','Australia','2017-10-06 12:14:54'),(5,'Kraig','Becker','emmalee.marks@bruen.com','534','Dolorem eos dolores voluptas voluptatem aut nihil. Dicta ex vel fugiat labore.','2019-09-19 00:56:13','2019-09-19 00:56:13',49,'Medical Equipment Repairer','Female','Australia','2017-09-21 14:52:50'),(6,'Dallas','Murphy','hackett.bret@hotmail.com','2','Dolore excepturi non sunt distinctio officia. Qui iure quisquam consequuntur pariatur sint.','2019-09-19 00:56:13','2019-09-19 00:56:13',80,'Production Helper','Male','India','2017-09-19 09:00:47'),(7,'Louie','Spencer','mills.king@yahoo.com','900','Delectus expedita cumque similique dicta reiciendis. Voluptatum ut fugit consequatur aut rem.','2019-09-19 00:56:13','2019-09-19 00:56:13',74,'Emergency Medical Technician and Paramedic','Male','India','2017-10-16 18:51:42'),(8,'Soledad','Pfannerstill','lwalker@larson.com','615','Soluta qui ad hic qui provident sit qui. Aut eveniet architecto nisi veritatis at eos.','2019-09-19 00:56:13','2019-09-19 00:56:13',42,'Environmental Science Technician','Male','America','2017-10-10 14:31:32'),(9,'Malachi','Davis','katharina.kulas@hotmail.com','371','Enim et quia et quia velit. Amet similique labore sed. Sit voluptatem a molestiae harum.','2019-09-19 00:56:13','2019-09-19 00:56:13',32,'Loan Counselor','Male','India','2017-09-30 03:29:05'),(10,'Kariane','Walter','ejacobs@gmail.com','253','Sed qui atque officia similique quisquam sunt velit. Excepturi nemo est ipsum dolores.','2019-09-19 00:56:13','2019-09-19 00:56:13',44,'Assessor','Male','Australia','2017-09-26 02:59:33'),(11,'Reece','Schuster','lhodkiewicz@yahoo.com','277','Nemo magnam magnam quam quo consequatur est nostrum voluptates. Nobis aut qui rem accusamus rerum.','2019-09-19 00:56:13','2019-09-19 00:56:13',48,'Media and Communication Worker','Female','India','2017-09-23 22:09:19'),(12,'Ole','Cronin','irma90@ziemann.com','999','Atque rerum accusamus sint est molestiae et. Qui ducimus aliquid quia id laboriosam accusamus.','2019-09-19 00:56:13','2019-09-19 00:56:13',54,'Farm Equipment Mechanic','Female','India','2017-10-04 06:21:55'),(13,'Abe','Ferry','ritchie.taryn@yahoo.com','721','Qui aut dolor iure nam enim dolor inventore sed. Corporis illo non aut a rerum saepe repellendus.','2019-09-19 00:56:13','2019-09-19 00:56:13',68,'Administrative Law Judge','Female','Canada','2017-09-30 04:40:21'),(14,'Ernie','Mayert','bridget.beahan@witting.com','229','Sed qui delectus itaque. Veritatis assumenda vero est unde quaerat occaecati. Quia ea ut non quae.','2019-09-19 00:56:13','2019-09-19 00:56:13',69,'Gauger','Female','India','2017-09-15 23:05:23'),(15,'Elody','Gleason','aaliyah16@gmail.com','228','Inventore facere et aut omnis minus optio. Possimus officiis cum deserunt et ut.','2019-09-19 00:56:13','2019-09-19 00:56:13',53,'Precision Devices Inspector','Female','America','2017-09-23 23:41:33'),(16,'Cristal','Olson','chowell@hotmail.com','672','Qui quo numquam ut sunt odio ut aliquam. Temporibus dolorem earum maiores. Ab quis iure et aut ab.','2019-09-19 00:56:13','2019-09-19 00:56:13',50,'Rail Yard Engineer','Male','Newzealand','2017-10-10 19:44:31'),(17,'Elsa','Franecki','vbatz@hotmail.com','449','Dignissimos possimus incidunt totam. Ut et deserunt dolores maxime.','2019-09-19 00:56:14','2019-09-19 00:56:14',38,'Broadcast News Analyst','Female','Australia','2017-10-07 09:34:16'),(18,'Brigitte','Rowe','aileen34@yahoo.com','254','Quis incidunt ut occaecati omnis non tempore est molestiae. Qui laborum quia delectus vel qui.','2019-09-19 00:56:14','2019-09-19 00:56:14',65,'Transportation Inspector','Male','India','2017-09-19 10:02:03'),(19,'Vernice','Fadel','aiyana71@harvey.com','673','Alias esse unde est tenetur quia accusamus. Eos in voluptatem quaerat blanditiis nesciunt voluptas.','2019-09-19 00:56:14','2019-09-19 00:56:14',70,'Library Assistant','Female','India','2017-09-28 23:00:00'),(20,'Gabrielle','Waelchi','alarson@gmail.com','936','Ratione animi pariatur nam labore. Incidunt pariatur error et.','2019-09-19 00:56:14','2019-09-19 00:56:14',30,'Crushing Grinding Machine Operator','Female','Newzealand','2017-09-23 05:11:11'),(21,'Gladys','Upton','isaiah28@gmail.com','842','Est aut et tenetur ratione odio ea. Vero sit quos nesciunt numquam ut. Ut nihil qui sequi.','2019-09-19 00:56:14','2019-09-19 00:56:14',64,'Occupational Therapist Aide','Male','India','2017-10-06 21:55:34'),(22,'Meredith','Russel','jacobs.paris@hotmail.com','271','Odit aut nulla et natus quis. Sequi sit ad quia nisi. Fuga voluptatum deleniti nihil.','2019-09-19 00:56:14','2019-09-19 00:56:14',47,'Optical Instrument Assembler','Male','Newzealand','2017-09-28 02:51:10'),(23,'Isai','Braun','lee13@mclaughlin.com','947','Perferendis aperiam voluptatem ex nostrum. Ea atque cumque ullam aspernatur fugit rem omnis.','2019-09-19 00:56:14','2019-09-19 00:56:14',64,'Dishwasher','Male','Newzealand','2017-10-19 12:40:59'),(24,'Jermey','Ondricka','tatum.streich@schuster.com','763','Voluptatem rerum impedit est enim est tenetur. Nam eveniet aut fugit architecto et aliquam.','2019-09-19 00:56:14','2019-09-19 00:56:14',65,'Gaming Manager','Male','bangladesh','2017-09-25 13:40:53'),(25,'Braden','Gorczany','rutherford.jaren@hotmail.com','874','Soluta in mollitia aut dolor eum consequatur. Facere delectus suscipit natus nostrum.','2019-09-19 00:56:14','2019-09-19 00:56:14',57,'Health Technologist','Male','India','2017-10-14 00:11:32'),(26,'Lessie','Dicki','goconner@yahoo.com','464','Sit minus cupiditate quia eius et et. In omnis sed quos nisi et. Atque nemo at optio dolorem quae.','2019-09-19 00:56:14','2019-09-19 00:56:14',73,'Education Administrator','Male','India','2017-10-08 22:55:05'),(27,'Candace','Beatty','lang.gillian@hotmail.com','589','Quasi culpa et hic accusantium cum quia. Sed saepe perspiciatis ut rerum et quia beatae.','2019-09-19 00:56:14','2019-09-19 00:56:14',32,'Environmental Science Technician','Female','India','2017-10-10 19:20:08'),(28,'Lou','Anderson','zschmidt@hotmail.com','913','Consequatur rerum voluptate ut dolore ad. Illum voluptas incidunt error distinctio consequuntur.','2019-09-19 00:56:14','2019-09-19 00:56:14',47,'Forming Machine Operator','Female','India','2017-09-26 22:19:53'),(29,'Davin','Kulas','jlittle@moore.net','70','Reprehenderit eum quae tempore suscipit officia accusantium. Esse porro eos voluptatem ea.','2019-09-19 00:56:14','2019-09-19 00:56:14',33,'Title Abstractor','Female','America','2017-09-22 05:48:28'),(30,'Nakia','Grant','walker.amely@hotmail.com','762','Maiores occaecati omnis id iste sit. Aut quaerat laudantium qui autem et.','2019-09-19 00:56:14','2019-09-19 00:56:14',78,'Pewter Caster','Male','India','2017-10-13 03:23:51'),(31,'Roosevelt','Powlowski','joanne.blick@yahoo.com','114','Qui dolores dolorem quasi accusantium natus et. Quia ipsam ut exercitationem.','2019-09-19 00:56:14','2019-09-19 00:56:14',64,'Media and Communication Worker','Female','Newzealand','2017-10-07 05:04:53'),(32,'Horace','Crooks','naomi.hamill@smith.com','330','Sunt tempore odio qui. Voluptatem voluptatibus vel pariatur quas dolor dolor et.','2019-09-19 00:56:14','2019-09-19 00:56:14',58,'Athletic Trainer','Female','India','2017-10-07 15:24:55'),(33,'Glen','Gutkowski','dbergnaum@hotmail.com','919','Pariatur aut ab officia earum ducimus necessitatibus quia. Sunt dolores iure a sint harum et iste.','2019-09-19 00:56:14','2019-09-19 00:56:14',21,'Municipal Clerk','Female','India','2017-10-04 16:34:54'),(34,'Donna','McCullough','kira57@wiegand.com','252','Corrupti nostrum ut tempore eligendi alias. Consequatur nihil sequi et dolorem.','2019-09-19 00:56:14','2019-09-19 00:56:14',22,'Motorboat Operator','Male','Canada','2017-09-18 07:41:43'),(35,'Harry','Roob','aleffler@hotmail.com','98','Similique asperiores adipisci veniam iste qui cumque eveniet. Dolor qui ut quod tempore tempora.','2019-09-19 00:56:14','2019-09-19 00:56:14',21,'Production Control Manager','Male','India','2017-10-03 11:43:17'),(36,'Humberto','Gulgowski','ed67@zulauf.com','73','Quia minus quos assumenda saepe veniam facere temporibus. Quia minima rem incidunt minus.','2019-09-19 00:56:14','2019-09-19 00:56:14',58,'Loan Officer','Male','Canada','2017-09-25 02:52:01'),(37,'Calista','Ruecker','icassin@huel.com','483','Cumque sed vel eum. Ratione dolores ea facilis.','2019-09-19 00:56:14','2019-09-19 00:56:14',71,'Instructional Coordinator','Male','Canada','2017-10-18 10:31:52'),(38,'Alexandrine','Kuhic','sammy.marquardt@gmail.com','901','Voluptatem sunt est quo alias blanditiis. Eum animi quia veniam labore. Dolores rerum est vel.','2019-09-19 00:56:14','2019-09-19 00:56:14',27,'License Clerk','Female','Canada','2017-10-17 07:01:09'),(39,'Melany','Lakin','duane07@yahoo.com','461','Et dolor facilis ut voluptatibus est. Quidem odio qui molestiae. Odit voluptas saepe iste et ut.','2019-09-19 00:56:14','2019-09-19 00:56:14',60,'Soil Conservationist','Female','Newzealand','2017-10-01 12:21:18'),(40,'Gregg','Rath','bernard55@yahoo.com','163','Nemo et repellendus esse enim. Fugit soluta esse ab blanditiis ut.','2019-09-19 00:56:14','2019-09-19 00:56:14',46,'Extruding Machine Operator','Male','Canada','2017-10-05 06:49:47'),(41,'Melyna','Treutel','vgrady@yahoo.com','828','Commodi qui ut voluptas temporibus ut. Possimus labore explicabo repellat velit rerum animi.','2019-09-19 00:56:14','2019-09-19 00:56:14',25,'Letterpress Setters Operator','Male','Newzealand','2017-09-21 19:58:37'),(42,'Demond','Ledner','herzog.edd@lynch.info','828','Sint aut non eveniet asperiores et. Qui aliquid dicta perferendis saepe laborum eum iusto.','2019-09-19 00:56:14','2019-09-19 00:56:14',46,'Social and Human Service Assistant','Female','India','2017-10-03 19:14:57'),(43,'Daisha','Johns','kenny.king@klein.info','283','Et quia fugiat sed libero sapiente aut. Et itaque tenetur autem odio dicta.','2019-09-19 00:56:14','2019-09-19 00:56:14',43,'Radiologic Technician','Male','Canada','2017-09-18 16:12:19'),(44,'Haylie','Hermann','huels.friedrich@gerlach.com','694','Reprehenderit sed aut et possimus. Mollitia qui magni sed quo tenetur amet rerum occaecati.','2019-09-19 00:56:15','2019-09-19 00:56:15',47,'Meat Packer','Male','India','2017-10-02 11:37:43'),(45,'Kallie','Hand','willard.krajcik@hotmail.com','855','Minus minima sint ullam. Laudantium vero iusto doloremque culpa nihil quod labore.','2019-09-19 00:56:15','2019-09-19 00:56:15',38,'Driver-Sales Worker','Female','Australia','2017-10-11 13:01:28'),(46,'Ophelia','Krajcik','beau53@gmail.com','383','Quam unde et non praesentium sint. Similique quia sit et cupiditate. Cum aliquam placeat quis aut.','2019-09-19 00:56:15','2019-09-19 00:56:15',51,'Molding Machine Operator','Female','Newzealand','2017-09-20 09:03:55'),(47,'Macey','Oberbrunner','hklein@paucek.com','27','Provident sit ratione omnis eum et quibusdam. Est aperiam deleniti dolorum amet aut.','2019-09-19 00:56:15','2019-09-19 00:56:15',79,'Marketing VP','Male','bangladesh','2017-09-27 17:48:12'),(48,'Genoveva','Schinner','odell41@yahoo.com','707','Quia ex omnis ex deleniti. Qui totam ratione laudantium voluptatem. Nobis omnis aut atque.','2019-09-19 00:56:15','2019-09-19 00:56:15',57,'Bartender','Male','India','2017-09-29 06:31:36'),(49,'Alisa','Feeney','jones.cathrine@hotmail.com','143','Mollitia sit expedita non quis magnam aliquam qui. Eaque qui sint expedita nemo dolor ipsam eum.','2019-09-19 00:56:15','2019-09-19 00:56:15',30,'Gaming Surveillance Officer','Female','Newzealand','2017-10-14 15:06:23'),(50,'Gerhard','Balistreri','walker.jamie@yahoo.com','268','Sit quo ut molestiae vero consequatur non eos. Minima ut nobis veritatis excepturi.','2019-09-19 00:56:15','2019-09-19 00:56:15',60,'Director Of Business Development','Male','India','2017-09-20 02:12:05');
/*!40000 ALTER TABLE `datatables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` VALUES (1,'LLGxfkQVl0.jpg','image/jpeg','2019-10-16 16:08:51','2019-10-16 16:08:51');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0000_00_00_000000_create_taggable_table',1),(2,'2014_07_02_230147_migration_cartalyst_sentinel',1),(3,'2014_10_04_174350_soft_delete_users',1),(4,'2014_12_10_011106_add_fields_to_user_table',1),(5,'2015_08_09_200015_create_blog_module_table',1),(6,'2015_08_11_064636_add_slug_to_blogs_table',1),(7,'2015_11_10_140011_create_files_table',1),(8,'2016_01_02_062647_create_tasks_table',1),(9,'2016_04_26_054601_create_datatables_table',1),(10,'2016_10_04_103149_add_fields_datatables_table',1),(11,'2017_09_29_113930_create_activity_log_table',1),(12,'2017_10_07_070138_create_countries_table',1),(13,'2017_10_24_130059_add_country_field',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persistences`
--

DROP TABLE IF EXISTS `persistences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persistences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persistences`
--

LOCK TABLES `persistences` WRITE;
/*!40000 ALTER TABLE `persistences` DISABLE KEYS */;
INSERT INTO `persistences` VALUES (1,1,'KN0HsL220JdkBubgt0R12ZFbN62jQSiQ','2019-10-06 00:08:35','2019-10-06 00:08:35'),(2,1,'3Ie3V8TygSNEXYbHNTx980zf9GlKMEUo','2019-10-16 15:57:24','2019-10-16 15:57:24'),(3,1,'LjWp7krscclDHjrffDjx6L1Mn5XqzIOE','2019-10-17 09:50:47','2019-10-17 09:50:47'),(4,1,'B9ZC3TKwlUFvYWuzvICCxnxNveUYWYyg','2019-10-17 12:57:25','2019-10-17 12:57:25'),(5,1,'UQDU7KBG7NU1JNGg7sr3AEADGv7yQ5ku','2019-10-17 13:00:04','2019-10-17 13:00:04'),(6,1,'8QVzf13lKHO4RP51IUgTUz4yK8cw21p0','2019-10-17 23:58:14','2019-10-17 23:58:14'),(7,1,'vYqmkSVixilVEOE5QXztZuQQocTYzfKc','2019-10-18 06:51:08','2019-10-18 06:51:08'),(8,1,'oUi2iWTm5Xv1ss0ggJkcXjz1jq8YHAg0','2019-10-19 01:38:20','2019-10-19 01:38:20'),(9,1,'emtNrdqApKOiRFMWjI95ICVCX7UtmqY8','2019-10-19 06:25:43','2019-10-19 06:25:43'),(10,1,'crDTXaRMu4g8LBRU5WkumwpkbBjl54gC','2019-10-19 10:46:28','2019-10-19 10:46:28'),(11,1,'u4R2b6mNRZvbLtQoxFSJmvz2nWkd3vqh','2019-10-19 10:50:05','2019-10-19 10:50:05'),(12,1,'mmgvu64I0xoNqWZkeXsk4GRPZ42jKqtM','2019-10-19 18:48:03','2019-10-19 18:48:03'),(13,1,'SVLod5jXAzEOLhCgSyCcwcBHVYjAQihI','2019-10-19 19:01:02','2019-10-19 19:01:02'),(14,1,'IHfJ4rDjlAIaW0fhIiglvLGrNcyp8K3Q','2019-10-21 09:31:58','2019-10-21 09:31:58'),(15,1,'XpDizYKIpdTHDZz5EKF51frLOG9XsDAQ','2019-10-21 13:04:24','2019-10-21 13:04:24'),(16,1,'Ry87qs7BszkWVsk2kd63zXejMCV6u6VT','2019-10-21 21:10:48','2019-10-21 21:10:48'),(17,1,'ZEOdiqpGbzaGCe3ZeU6hLQevYNg8fYWv','2019-10-22 10:29:35','2019-10-22 10:29:35'),(18,1,'PyMBCkrn4vyYI3eXCbeKz7CbfuaZQOd4','2019-10-22 21:33:51','2019-10-22 21:33:51'),(19,1,'pbeK4AW4Qt4GssDgOuRHENJsEHZiLJQj','2019-10-23 01:35:28','2019-10-23 01:35:28'),(20,1,'NmT1QD8cizo5zkanFjndx6V7EwhjnEeI','2019-10-23 06:04:50','2019-10-23 06:04:50'),(21,1,'ToHQtsLa3jqfFe79JMHFYmYq30N8PL3Z','2019-10-23 13:35:25','2019-10-23 13:35:25'),(22,1,'9DxuXRGktgE1wxIAFFzaDO0E3l3HatCP','2019-10-23 23:55:00','2019-10-23 23:55:00'),(23,1,'UM4wlVeDMWnzlDcS3hyEFBdGiMZJk5gJ','2019-10-24 03:16:35','2019-10-24 03:16:35'),(24,1,'YVcOirnpxVN55FPcwQxSqik4Pqvy2RSP','2019-10-24 08:37:25','2019-10-24 08:37:25'),(25,1,'OFnAZBSBJzckXXhh7mMOGfEFPlWfP2QR','2019-10-24 22:18:02','2019-10-24 22:18:02'),(26,1,'VowSrLQ9sc060NKElkDyMLfMTkmRTkpZ','2019-10-25 14:31:40','2019-10-25 14:31:40'),(27,1,'NdJSjCxjACz12RfomHzBqWgR2DKvqHJB','2019-10-25 09:42:24','2019-10-25 09:42:24'),(28,1,'sckabfDsbRnUcnRgfTSHu5sVss9KuKEF','2019-10-25 21:30:33','2019-10-25 21:30:33'),(29,1,'f87w3DSSvDunnpGV96NEbaRZQrZGNZr7','2019-10-26 15:13:18','2019-10-26 15:13:18'),(30,1,'swijK79QkRoY7pOlHYi1xVWBYEjazfHh','2019-10-26 22:29:57','2019-10-26 22:29:57'),(34,2,'T3sPi2N1HWZQLP0QmjunOjRuDEgjxi4b','2019-10-27 07:19:15','2019-10-27 07:19:15'),(35,2,'nZGCKSsKAtOXtQPd5dCbj8Z5lgD0qY8x','2019-10-27 07:20:15','2019-10-27 07:20:15'),(36,2,'EkDt9y05jTy9ErhjSthHG9KWZ7pKd2FM','2019-10-27 07:20:35','2019-10-27 07:20:35'),(42,2,'UC6qbGy5TDHS8w2XFbMOoY6maPGxpE8h','2019-11-03 16:02:57','2019-11-03 16:02:57'),(43,2,'DtBUI2uliblHiX1ZBuVCRkgcIsEb1DvD','2019-11-03 22:59:58','2019-11-03 22:59:58'),(44,2,'YEOp6Pcqfu67FN0LfEeDHNovFMdKpYKo','2019-11-04 01:18:47','2019-11-04 01:18:47'),(45,2,'3o9ImnVRrbYUwUabfR7GEVft73efGG1E','2019-11-04 01:19:26','2019-11-04 01:19:26'),(46,2,'8Uj1FsJ44BCFelDINSxd9mTLgSEgMkVs','2019-11-04 14:11:48','2019-11-04 14:11:48'),(47,2,'Ctg7AaLgz43tNHdE1UuirTrF8LwuncPV','2019-11-04 18:50:59','2019-11-04 18:50:59'),(48,1,'jHNUhEuFkGpFc0JqSf8ZLcTqwJAYuaGY','2019-11-07 07:49:03','2019-11-07 07:49:03'),(49,2,'iiYaRetF7dT0nR5Nck3CZT38XmrNmwbx','2019-11-08 09:59:46','2019-11-08 09:59:46'),(50,2,'NyTWY9GMvbr2X2NyIkxqtwxCYCtXKexj','2019-11-08 17:56:45','2019-11-08 17:56:45'),(51,2,'w4ELbKMvPuNfpd7GePmkN0bWk3y76Yog','2019-11-09 01:57:22','2019-11-09 01:57:22'),(52,2,'iCKL6WbGRT6h4drB0gHhrRU1DqSHbWil','2019-11-09 09:08:46','2019-11-09 09:08:46'),(55,2,'boileY0Pr89qpBLWUlNEqaWwPwRLFCjM','2019-11-09 23:45:48','2019-11-09 23:45:48'),(58,3,'HgQew8XBOUi1o7BitHP6jirrJpORWUXH','2019-11-10 03:00:28','2019-11-10 03:00:28'),(63,1,'PSKZ0TsCT2e4bbBXYLvUesgyHX8zdsn0','2019-11-10 08:22:52','2019-11-10 08:22:52'),(69,3,'5qEKZTODdNl1fIlmeLMHjKNNG9PFoFt4','2019-11-10 17:43:46','2019-11-10 17:43:46'),(73,3,'FMaHHiSStnVrPRvwGauY3Vcc72bTpD07','2019-11-10 19:30:16','2019-11-10 19:30:16'),(74,3,'xdmkTzrUHutM4eb1YeBhZMGN7XMCc95N','2019-11-11 07:18:44','2019-11-11 07:18:44'),(76,3,'aI558uqb5DtUM7l9bn1RlOcEI72iIogk','2019-11-11 10:30:09','2019-11-11 10:30:09'),(79,3,'CccYc3PS5zqwXqf2G8uyK8HxXnNvDVCj','2019-11-11 12:34:30','2019-11-11 12:34:30'),(82,2,'vuvg9wFYINKKPJ4UnCOhKmhdsl94n5BY','2019-11-11 13:00:42','2019-11-11 13:00:42'),(87,2,'e3iLP0yhOuZiLPLXhEFN9EBUUWzXb4FR','2019-11-13 17:27:45','2019-11-13 17:27:45'),(88,2,'ZuvAEaUa4HbAaCAOdguoryxBf4jaswVo','2019-11-14 08:13:32','2019-11-14 08:13:32'),(90,1,'yn50KyViT2HaY7L8uUG0N0jYjhyDUeX0','2019-11-16 02:16:14','2019-11-16 02:16:14'),(91,1,'bj4IRkOp24Z3urjE0yxkzjNGVu2UH1VY','2019-11-16 08:31:11','2019-11-16 08:31:11'),(92,1,'u2tNidiKMnusEQKHFnp0ifQTyBqZaahC','2019-11-16 13:52:24','2019-11-16 13:52:24'),(93,1,'zRxLQy00EHIpUSppbwaW7smvXVKICB8p','2019-11-16 20:09:29','2019-11-16 20:09:29'),(94,1,'Hg7plFrF0AAE6ZvRN7LW4AlOh3rVKn1u','2019-11-16 23:07:22','2019-11-16 23:07:22'),(95,1,'wf3oBLIK8g6Dtok9ml8SzFpxPGLapCu5','2019-11-16 23:57:27','2019-11-16 23:57:27'),(96,1,'n1OphQ60CD6rJuZgZ3vIBwoBwoTnJnht','2019-11-17 10:30:20','2019-11-17 10:30:20'),(97,1,'ZtFwhNa9q8RJxt1koUELnuvHtEh3Eajy','2019-11-17 10:33:52','2019-11-17 10:33:52'),(98,1,'6OShAu70AqmJMruTN3ImxdQ2y4xn0ED1','2019-11-17 11:14:15','2019-11-17 11:14:15'),(99,1,'UW2JxaEpdJzynvbom7whC8KyorF0yAG3','2019-11-17 14:45:00','2019-11-17 14:45:00'),(101,1,'KtKMGdJG3ILPOgTkvYEq2n24aJIZNFVG','2019-11-17 23:04:44','2019-11-17 23:04:44'),(102,1,'JLflQF4u0LfyHEzAQ5ltEgMES1RmDAMN','2019-11-18 01:07:44','2019-11-18 01:07:44'),(103,1,'1GjlLlExUpc8jC0OSBdSaCZWlNVVkjto','2019-11-18 02:57:03','2019-11-18 02:57:03'),(108,2,'35BzO1LvFYVFfmW16KAY3ak1FwePbfrT','2019-11-18 18:49:36','2019-11-18 18:49:36'),(109,2,'CyF2TtWxWfDQH404VSCguA9SngbzyDMM','2019-11-18 18:50:52','2019-11-18 18:50:52'),(113,3,'LBfa3UiwfYF5x88ZsLm3JhhsCfbVDKvW','2019-11-18 19:13:24','2019-11-18 19:13:24'),(114,1,'HG8omyBf01XkLtZuIOsxdgs0kiDTa1Mo','2019-11-18 20:03:05','2019-11-18 20:03:05'),(115,3,'qZYaB1GPopVCsD7PtkHikiqjqrpMFb3u','2019-11-21 22:50:14','2019-11-21 22:50:14'),(121,2,'0iY37BA9EOgS2uvu9Kw0ab58bemRRQ9Y','2019-11-22 22:43:07','2019-11-22 22:43:07'),(122,2,'MM5oJN29dzwLk2T0ORA6lO3LmS6jixYw','2019-11-22 22:46:00','2019-11-22 22:46:00'),(124,1,'wK8sxpIEz9DYlGZL7SiDsUtQZmj28QDJ','2019-11-23 18:19:21','2019-11-23 18:19:21');
/*!40000 ALTER TABLE `persistences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reminders`
--

DROP TABLE IF EXISTS `reminders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reminders`
--

LOCK TABLES `reminders` WRITE;
/*!40000 ALTER TABLE `reminders` DISABLE KEYS */;
/*!40000 ALTER TABLE `reminders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_users`
--

LOCK TABLES `role_users` WRITE;
/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
INSERT INTO `role_users` VALUES (1,1,'2019-09-19 00:56:12','2019-09-19 00:56:12'),(2,2,'2019-10-27 06:27:24','2019-10-27 06:27:24'),(3,3,'2019-10-27 06:28:46','2019-10-27 06:28:46'),(4,3,'2019-11-03 14:29:14','2019-11-03 14:29:14'),(5,2,'2019-11-13 14:49:30','2019-11-13 14:49:30'),(6,2,'2019-11-20 01:21:29','2019-11-20 01:21:29');
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Admin','{\"admin\":1}','2019-09-19 00:56:12','2019-09-19 00:56:12'),(2,'buyer','Buyer',NULL,'2019-09-19 00:56:12','2019-09-19 00:56:12'),(3,'seller','Seller',NULL,'2019-10-15 06:52:26','2019-10-15 06:52:28');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taggable_taggables`
--

DROP TABLE IF EXISTS `taggable_taggables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taggable_taggables` (
  `tag_id` int(10) unsigned NOT NULL,
  `taggable_id` int(10) unsigned NOT NULL,
  `taggable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `i_taggable_fwd` (`tag_id`,`taggable_id`),
  KEY `i_taggable_rev` (`taggable_id`,`tag_id`),
  KEY `i_taggable_type` (`taggable_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taggable_taggables`
--

LOCK TABLES `taggable_taggables` WRITE;
/*!40000 ALTER TABLE `taggable_taggables` DISABLE KEYS */;
/*!40000 ALTER TABLE `taggable_taggables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taggable_tags`
--

DROP TABLE IF EXISTS `taggable_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taggable_tags` (
  `tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `normalized` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tag_id`),
  KEY `taggable_tags_normalized_index` (`normalized`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taggable_tags`
--

LOCK TABLES `taggable_tags` WRITE;
/*!40000 ALTER TABLE `taggable_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `taggable_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `finished` tinyint(4) NOT NULL DEFAULT '0',
  `task_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_deadline` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `throttle`
--

LOCK TABLES `throttle` WRITE;
/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;
INSERT INTO `throttle` VALUES (1,NULL,'global',NULL,'2019-10-27 06:36:56','2019-10-27 06:36:56'),(2,NULL,'ip','192.168.99.110','2019-10-27 06:36:56','2019-10-27 06:36:56'),(3,NULL,'global',NULL,'2019-10-27 06:37:11','2019-10-27 06:37:11'),(4,NULL,'ip','192.168.99.110','2019-10-27 06:37:11','2019-10-27 06:37:11'),(5,NULL,'global',NULL,'2019-10-27 06:40:58','2019-10-27 06:40:58'),(6,NULL,'ip','192.168.99.110','2019-10-27 06:40:58','2019-10-27 06:40:58'),(7,3,'user',NULL,'2019-10-27 06:40:58','2019-10-27 06:40:58'),(8,NULL,'global',NULL,'2019-10-27 09:03:45','2019-10-27 09:03:45'),(9,NULL,'ip','192.168.99.110','2019-10-27 09:03:45','2019-10-27 09:03:45'),(10,NULL,'global',NULL,'2019-10-27 11:37:14','2019-10-27 11:37:14'),(11,NULL,'ip','192.168.99.110','2019-10-27 11:37:15','2019-10-27 11:37:15'),(12,2,'user',NULL,'2019-10-27 11:37:15','2019-10-27 11:37:15'),(13,NULL,'global',NULL,'2019-10-27 16:45:50','2019-10-27 16:45:50'),(14,NULL,'ip','192.168.99.110','2019-10-27 16:45:50','2019-10-27 16:45:50'),(15,2,'user',NULL,'2019-10-27 16:45:50','2019-10-27 16:45:50'),(16,NULL,'global',NULL,'2019-10-27 16:46:01','2019-10-27 16:46:01'),(17,NULL,'ip','192.168.99.110','2019-10-27 16:46:01','2019-10-27 16:46:01'),(18,2,'user',NULL,'2019-10-27 16:46:01','2019-10-27 16:46:01'),(19,NULL,'global',NULL,'2019-11-03 16:02:47','2019-11-03 16:02:47'),(20,NULL,'ip','192.168.99.110','2019-11-03 16:02:47','2019-11-03 16:02:47'),(21,2,'user',NULL,'2019-11-03 16:02:47','2019-11-03 16:02:47'),(22,NULL,'global',NULL,'2019-11-09 22:53:56','2019-11-09 22:53:56'),(23,NULL,'ip','192.168.99.110','2019-11-09 22:53:56','2019-11-09 22:53:56'),(24,3,'user',NULL,'2019-11-09 22:53:56','2019-11-09 22:53:56'),(25,NULL,'global',NULL,'2019-11-10 02:59:12','2019-11-10 02:59:12'),(26,NULL,'ip','192.168.99.110','2019-11-10 02:59:12','2019-11-10 02:59:12'),(27,3,'user',NULL,'2019-11-10 02:59:12','2019-11-10 02:59:12'),(28,NULL,'global',NULL,'2019-11-10 02:59:26','2019-11-10 02:59:26'),(29,NULL,'ip','192.168.99.110','2019-11-10 02:59:26','2019-11-10 02:59:26'),(30,3,'user',NULL,'2019-11-10 02:59:26','2019-11-10 02:59:26'),(31,NULL,'global',NULL,'2019-11-10 02:59:40','2019-11-10 02:59:40'),(32,NULL,'ip','192.168.99.110','2019-11-10 02:59:40','2019-11-10 02:59:40'),(33,3,'user',NULL,'2019-11-10 02:59:40','2019-11-10 02:59:40'),(34,NULL,'global',NULL,'2019-11-10 02:59:52','2019-11-10 02:59:52'),(35,NULL,'ip','192.168.99.110','2019-11-10 02:59:52','2019-11-10 02:59:52'),(36,3,'user',NULL,'2019-11-10 02:59:52','2019-11-10 02:59:52'),(37,NULL,'global',NULL,'2019-11-10 08:15:11','2019-11-10 08:15:11'),(38,NULL,'ip','192.168.99.110','2019-11-10 08:15:11','2019-11-10 08:15:11'),(39,3,'user',NULL,'2019-11-10 08:15:11','2019-11-10 08:15:11'),(40,NULL,'global',NULL,'2019-11-10 18:46:40','2019-11-10 18:46:40'),(41,NULL,'ip','192.168.99.110','2019-11-10 18:46:40','2019-11-10 18:46:40'),(42,2,'user',NULL,'2019-11-10 18:46:40','2019-11-10 18:46:40'),(43,NULL,'global',NULL,'2019-11-10 18:46:49','2019-11-10 18:46:49'),(44,NULL,'ip','192.168.99.110','2019-11-10 18:46:49','2019-11-10 18:46:49'),(45,2,'user',NULL,'2019-11-10 18:46:49','2019-11-10 18:46:49'),(46,NULL,'global',NULL,'2019-11-10 18:46:58','2019-11-10 18:46:58'),(47,NULL,'ip','192.168.99.110','2019-11-10 18:46:58','2019-11-10 18:46:58'),(48,2,'user',NULL,'2019-11-10 18:46:58','2019-11-10 18:46:58'),(49,NULL,'global',NULL,'2019-11-10 19:30:06','2019-11-10 19:30:06'),(50,NULL,'ip','192.168.99.110','2019-11-10 19:30:06','2019-11-10 19:30:06'),(51,3,'user',NULL,'2019-11-10 19:30:06','2019-11-10 19:30:06'),(52,NULL,'global',NULL,'2019-11-11 09:57:15','2019-11-11 09:57:15'),(53,NULL,'ip','192.168.99.110','2019-11-11 09:57:15','2019-11-11 09:57:15'),(54,2,'user',NULL,'2019-11-11 09:57:15','2019-11-11 09:57:15'),(55,NULL,'global',NULL,'2019-11-11 12:47:55','2019-11-11 12:47:55'),(56,NULL,'ip','192.168.99.110','2019-11-11 12:47:55','2019-11-11 12:47:55'),(57,3,'user',NULL,'2019-11-11 12:47:55','2019-11-11 12:47:55'),(58,NULL,'global',NULL,'2019-11-13 14:43:23','2019-11-13 14:43:23'),(59,NULL,'ip','192.168.99.110','2019-11-13 14:43:23','2019-11-13 14:43:23'),(60,NULL,'global',NULL,'2019-11-14 08:13:22','2019-11-14 08:13:22'),(61,NULL,'ip','192.168.99.110','2019-11-14 08:13:22','2019-11-14 08:13:22'),(62,2,'user',NULL,'2019-11-14 08:13:22','2019-11-14 08:13:22'),(63,NULL,'global',NULL,'2019-11-18 01:07:36','2019-11-18 01:07:36'),(64,NULL,'ip','192.168.99.107','2019-11-18 01:07:36','2019-11-18 01:07:36'),(65,NULL,'global',NULL,'2019-11-18 19:10:13','2019-11-18 19:10:13'),(66,NULL,'ip','192.168.99.110','2019-11-18 19:10:13','2019-11-18 19:10:13'),(67,1,'user',NULL,'2019-11-18 19:10:13','2019-11-18 19:10:13'),(68,NULL,'global',NULL,'2019-11-22 21:09:27','2019-11-22 21:09:27'),(69,NULL,'ip','192.168.99.110','2019-11-22 21:09:27','2019-11-22 21:09:27'),(70,NULL,'global',NULL,'2019-11-22 22:45:50','2019-11-22 22:45:50'),(71,NULL,'ip','192.168.99.110','2019-11-22 22:45:50','2019-11-22 22:45:50'),(72,3,'user',NULL,'2019-11-22 22:45:50','2019-11-22 22:45:50'),(73,NULL,'global',NULL,'2019-11-23 17:51:52','2019-11-23 17:51:52'),(74,NULL,'ip','13.52.246.91','2019-11-23 17:51:52','2019-11-23 17:51:52');
/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin@admin.com','$2y$10$.653bjJRO4hoDKkNe.A04O3pk6szi.qbx5U7MPLvGXA14ZpTSMjBe',NULL,'2019-11-23 18:19:21','John','Doe','2019-09-19 00:56:12','2019-11-23 18:19:21',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'buy@user.com','$2y$10$G5Q68uANUq7uHdC1Q8fiBOKQorJ0tG3WnWfMpfiJqaQvdEN/fUT/W',NULL,'2019-11-22 22:46:00','user','buy','2019-10-27 06:27:24','2019-11-22 22:46:00',NULL,'Test','male','1992-03-04','fyoEF1StSK.jpeg','AS','Sannaer','Sapa','apsdsp','ddfdf'),(3,'seller@user.com','$2y$10$wNByRGkB5KnpOPZx670d6OJU1cGqE8gl7ilc92yRARe9PdFo.ec3.',NULL,'2019-11-22 21:09:37','seller','user','2019-10-27 06:28:46','2019-11-22 21:09:37',NULL,'Bio','male','1983-06-03','UdzR9xZ55u.jpeg','AL','s','sss','sss','ssss'),(4,'seller1@user.com','$2y$10$JOV2QUgElL3td/Lay0ZFUu5YM/7Kza9637DhYLIg0QH72b1ornqjW',NULL,'2019-11-03 14:30:11','seller1','user','2019-11-03 14:29:14','2019-11-03 14:30:11',NULL,'111','male','2019-10-28',NULL,'AF','11','111','11','111'),(5,'11111@111.com','$2y$10$s1xK5SOwPgGIbBu4pUhF4e94dhqKsAMqhFmxlvCrYYRbm/v0LktHi',NULL,'2019-11-13 14:49:30','1111','1111','2019-11-13 14:49:30','2019-11-13 14:49:30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'11@111.com','$2y$10$.bk0a8XYnGpSRkCUCXWOG.lOZJLbzjiun/mXscmbsOpjmpB7ddB9C',NULL,'2019-11-20 01:21:30','11111','1111','2019-11-20 01:21:29','2019-11-20 01:21:30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-23 18:31:09
