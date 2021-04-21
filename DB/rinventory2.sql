-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: projet2_db
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `materiels`
--

DROP TABLE IF EXISTS `materiels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `materiels` (
  `idMateriels` int NOT NULL AUTO_INCREMENT,
  `nameItem` varchar(45) NOT NULL,
  `typeItem` varchar(45) NOT NULL,
  `stateItem` int NOT NULL,
  `stockItem` int NOT NULL,
  `initStock` int NOT NULL,
  PRIMARY KEY (`idMateriels`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiels`
--

LOCK TABLES `materiels` WRITE;
/*!40000 ALTER TABLE `materiels` DISABLE KEYS */;
INSERT INTO `materiels` VALUES (1,'PC Portable','PC',2,25,60),(2,'PC fixe','PC',1,10,220),(3,'Cable usb','Cable',3,60,90),(4,'Cable HDMI','Cable',3,25,30),(5,'Adaptateur USB','Adaptateur',1,5,42),(6,'Adaptateur Ethernet','Adaptateur',2,34,100),(7,'Adaptateur VGA','Adaptateur',3,36,69),(8,'Ecran 20 pouces','Ecran',3,346,450),(9,'Ecran 40 pouces','Ecran',2,20,74),(10,'Ecran 26 pouces','Ecran',2,47,95),(11,'Tablette Samsung','Tablette ',2,12,24),(12,'Tablette Lenovo','Tablette ',3,6,9),(13,'Ipad','Tablette ',3,38,52),(14,'Adaptateur USB-C','Adaptateur',0,0,23);
/*!40000 ALTER TABLE `materiels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservation` (
  `idReservation` int NOT NULL AUTO_INCREMENT,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `userId` int NOT NULL,
  `materielId` int NOT NULL,
  PRIMARY KEY (`idReservation`),
  KEY `idUser_idx` (`userId`),
  KEY `idMaterielFK_idx` (`materielId`),
  CONSTRAINT `idMaterielFK` FOREIGN KEY (`materielId`) REFERENCES `materiels` (`idMateriels`),
  CONSTRAINT `idUserFK` FOREIGN KEY (`userId`) REFERENCES `user` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (1,'2021-04-14','2021-05-07',1,11),(2,'2021-04-07','2021-04-16',1,6);
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Lastname` varchar(45) NOT NULL,
  `Role` int NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'John','Doe',1,'jojo','toto'),(2,'John','Doe',1,'jojo','toto');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-21  9:41:07
