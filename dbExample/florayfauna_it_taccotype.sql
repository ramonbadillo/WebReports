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
-- Table structure for table `it_taccotype`
--

DROP TABLE IF EXISTS `it_taccotype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `it_taccotype` (
  `AcTy_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Acco_GEN_ID` int(2) DEFAULT NULL,
  `AcTy_Name` text,
  `Batched` int(11) NOT NULL DEFAULT '0',
  `Updated` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`AcTy_ID`),
  KEY `BatchedIndex` (`Batched`),
  KEY `UpdatedIndex` (`Updated`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `it_taccotype`
--

LOCK TABLES `it_taccotype` WRITE;
/*!40000 ALTER TABLE `it_taccotype` DISABLE KEYS */;
INSERT INTO `it_taccotype` VALUES (1,1,'Bank',0,0),(2,1,'Accounts receivable(A/R)',0,0),(3,1,'Other current asset',0,0),(4,1,'Fixed asset',0,0),(5,1,'Other asset',0,0),(6,1,'Accounts payable(A/P)',0,0),(7,1,'Credit card',0,0),(8,1,'Current liability',0,0),(9,1,'Long-term liability',0,0),(10,1,'Equity',0,0),(11,2,'Income',0,0),(12,2,'Other income',0,0),(13,2,'Expense',0,0),(14,2,'Other expense',0,0),(15,2,'Cost of Goods sold',0,0);
/*!40000 ALTER TABLE `it_taccotype` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-25 14:39:13
