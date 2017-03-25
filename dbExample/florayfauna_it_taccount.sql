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
-- Table structure for table `it_taccount`
--

DROP TABLE IF EXISTS `it_taccount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `it_taccount` (
  `Acco_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Acco_Type_ID` int(2) DEFAULT NULL,
  `Acco_Acty_ID` int(1) DEFAULT '0',
  `Acco_Name` varchar(50) DEFAULT NULL,
  `Acco_Desc` varchar(50) DEFAULT NULL,
  `Acco_Nro` varchar(50) DEFAULT NULL,
  `Acco_Bala` decimal(18,5) DEFAULT '0.00000',
  `Acco_Date` datetime DEFAULT NULL,
  `Acco_Stat` int(1) DEFAULT '0',
  `Acco_Note` text,
  `account_thirdparty` varchar(50) DEFAULT NULL,
  `Batched` int(11) NOT NULL DEFAULT '0',
  `Updated` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Acco_ID`),
  KEY `BatchedIndex` (`Batched`),
  KEY `UpdatedIndex` (`Updated`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `it_taccount`
--

LOCK TABLES `it_taccount` WRITE;
/*!40000 ALTER TABLE `it_taccount` DISABLE KEYS */;
INSERT INTO `it_taccount` VALUES (1,11,0,'Sales','Sales',NULL,0.00000,NULL,0,NULL,NULL,0,0),(2,15,0,'Cost of Goods sold','Cost of Goods sold',NULL,0.00000,NULL,0,NULL,NULL,0,0),(3,1,0,'Cash','Cash',NULL,0.00000,NULL,0,NULL,NULL,0,0),(4,1,0,'Gift Card','Gift Card',NULL,0.00000,NULL,0,NULL,NULL,0,0),(5,13,0,'Marketing costs','Marketing costs',NULL,0.00000,NULL,0,NULL,NULL,0,0),(6,13,0,'Automobile Expense','Automobile Expense',NULL,0.00000,NULL,0,NULL,NULL,0,0),(7,13,0,'Bank Service Charges','Bank Service Charges',NULL,0.00000,NULL,0,NULL,NULL,0,0),(8,13,0,'Cleaning','Cleaning',NULL,0.00000,NULL,0,NULL,NULL,0,0),(9,13,0,'Contributions','Contributions',NULL,0.00000,NULL,0,NULL,NULL,0,0),(10,13,0,'Depreciation Expense','Depreciation Expense',NULL,0.00000,NULL,0,NULL,NULL,0,0),(11,13,0,'Insurance','Insurance',NULL,0.00000,NULL,0,NULL,NULL,0,0),(12,13,0,'Interest Expense','Interest Expense',NULL,0.00000,NULL,0,NULL,NULL,0,0),(13,13,0,'Licenses and Permits','Licenses and Permits',NULL,0.00000,NULL,0,NULL,NULL,0,0),(14,13,0,'Maintenance & repairs','Maintenance & repairs',NULL,0.00000,NULL,0,NULL,NULL,0,0),(15,13,0,'Meals & Entertainment','Meals & Entertainment',NULL,0.00000,NULL,0,NULL,NULL,0,0),(16,13,0,'Merchant credit card fees','Merchant credit card fees',NULL,0.00000,NULL,0,NULL,NULL,0,0),(17,13,0,'Office Expenses','Office Expenses',NULL,0.00000,NULL,0,NULL,NULL,0,0),(18,13,0,'Computer expenses','Computer expenses',NULL,0.00000,NULL,0,NULL,NULL,0,0),(19,13,0,'Postage and Delivery','Postage and Delivery',NULL,0.00000,NULL,0,NULL,NULL,0,0),(20,13,0,'Office Supplies','Office Supplies',NULL,0.00000,NULL,0,NULL,NULL,0,0),(21,13,0,'Payroll Taxes','Payroll Taxes',NULL,0.00000,NULL,0,NULL,NULL,0,0),(22,13,0,'Professional Fees','Professional Fees',NULL,0.00000,NULL,0,NULL,NULL,0,0),(23,13,0,'Rent','Rent',NULL,0.00000,NULL,0,NULL,NULL,0,0),(24,13,0,'Salaries -Office','Salaries -Office',NULL,0.00000,NULL,0,NULL,NULL,0,0),(25,13,0,'Salaries - Officers','Salaries - Officers',NULL,0.00000,NULL,0,NULL,NULL,0,0),(26,13,0,'Telephone','Telephone',NULL,0.00000,NULL,0,NULL,NULL,0,0),(27,13,0,'Travel','Travel',NULL,0.00000,NULL,0,NULL,NULL,0,0),(28,13,0,'Utilities','Utilities',NULL,0.00000,NULL,0,NULL,NULL,0,0),(29,1,0,'RECAUDOS','','',0.00000,'2016-07-08 00:00:00',0,NULL,'',0,0);
/*!40000 ALTER TABLE `it_taccount` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-25 14:40:49
