CREATE DATABASE  IF NOT EXISTS `florayfauna` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `florayfauna`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: florayfauna
-- ------------------------------------------------------
-- Server version	5.1.72-community

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
-- Table structure for table `it_tuser`
--

DROP TABLE IF EXISTS `it_tuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `it_tuser` (
  `USER_ID` int(3) NOT NULL AUTO_INCREMENT,
  `USER_Login` text,
  `USER_Pass` text,
  `USER_Pass_alt` text,
  `USER_Date` datetime DEFAULT NULL,
  `USER_Expr_Date` datetime DEFAULT NULL,
  `USER_Roll_ID` int(2) DEFAULT '0',
  `USER_Cust_ID` int(5) DEFAULT '0',
  `USER_Loca_ID` int(5) DEFAULT '0',
  `USER_Empl_ID` int(5) DEFAULT '0',
  `Regi_Code` text,
  `UserON` int(1) DEFAULT '0',
  `EMPL_ID` int(5) DEFAULT '0',
  `grouping_id` int(3) DEFAULT '0',
  `Batched` int(11) NOT NULL DEFAULT '0',
  `Updated` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`USER_ID`),
  KEY `BatchedIndex` (`Batched`),
  KEY `UpdatedIndex` (`Updated`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `it_tuser`
--

LOCK TABLES `it_tuser` WRITE;
/*!40000 ALTER TABLE `it_tuser` DISABLE KEYS */;
INSERT INTO `it_tuser` VALUES (1,'Camaleon','1','',NULL,NULL,1,0,0,0,NULL,0,1,0,0,0),(2,'Katty ','2001','',NULL,NULL,2,0,0,0,NULL,0,2,0,0,0),(3,'Alejandra ','5275','',NULL,NULL,3,0,0,0,NULL,0,3,0,0,0),(4,'monica','5045','',NULL,NULL,2,0,0,0,NULL,0,4,0,0,0),(5,'Augusto','2012','',NULL,NULL,1,0,0,0,NULL,0,5,0,0,0),(6,'Eileen','2111','',NULL,NULL,1,0,0,0,NULL,0,6,0,0,0),(7,'Irom','5010','',NULL,NULL,2,0,0,0,NULL,0,7,0,0,0),(8,'Eduardo','1984','',NULL,NULL,6,0,0,0,NULL,0,8,0,0,0),(9,'Anthonny','2796','',NULL,NULL,6,0,0,0,NULL,0,9,0,0,0),(10,'MARINES','465549','',NULL,NULL,4,0,0,0,NULL,0,10,0,0,0),(11,'LAURA','1503','',NULL,NULL,3,0,0,0,NULL,0,11,0,0,0),(12,'ALMENDRA','1607','',NULL,NULL,2,0,0,0,NULL,0,12,0,0,0),(13,'Efrain','5263','',NULL,NULL,1,0,0,0,NULL,0,13,0,0,0),(14,'Jose','5012','',NULL,NULL,5,0,0,0,NULL,0,14,0,0,0),(15,'Deborah','0811','',NULL,NULL,1,0,0,0,NULL,0,15,0,0,0),(16,'Edwin','1511','',NULL,NULL,4,0,0,0,NULL,0,16,0,0,0),(17,'Eliane','2412','',NULL,NULL,4,0,0,0,NULL,0,17,0,0,0),(18,'Pierina','1234','',NULL,NULL,2,0,0,0,NULL,0,18,0,0,0),(19,'Descuento','92533348','',NULL,NULL,1,0,0,0,NULL,0,19,0,0,0),(20,'Aldo','6549','',NULL,NULL,5,0,0,0,NULL,0,20,0,0,0),(21,'Daniel','1991','',NULL,NULL,1,0,0,0,NULL,0,21,0,0,0),(22,'Edgar','0122','0122',NULL,NULL,2,0,0,0,NULL,0,22,0,0,0),(23,'Karla','3001','',NULL,NULL,2,0,0,0,NULL,0,23,0,0,0),(24,'linda','1279','',NULL,NULL,2,0,0,0,NULL,0,24,0,0,0),(25,'Renzo','8462','8462',NULL,NULL,2,0,0,0,NULL,0,25,0,0,0),(26,'Maria','1717','',NULL,NULL,2,0,0,0,NULL,0,26,0,0,0),(27,'Daniela','0000','',NULL,NULL,2,0,0,0,NULL,0,27,0,0,0),(28,'Eveling','4847','',NULL,NULL,2,0,0,0,NULL,0,28,0,0,1);
/*!40000 ALTER TABLE `it_tuser` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-25 14:40:28
