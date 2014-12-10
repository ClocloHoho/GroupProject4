CREATE DATABASE  IF NOT EXISTS `groupproject` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `groupproject`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: groupproject
-- ------------------------------------------------------
-- Server version	5.6.21-log

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
-- Table structure for table `individualratings`
--

DROP TABLE IF EXISTS `individualratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `individualratings` (
  `individualRatingID` int(11) NOT NULL AUTO_INCREMENT,
  `ratingIdUser` int(11) DEFAULT NULL,
  `ratingIdRestaurant` int(11) DEFAULT NULL,
  `rating` tinyint(10) DEFAULT NULL,
  PRIMARY KEY (`individualRatingID`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `individualratings`
--

LOCK TABLES `individualratings` WRITE;
/*!40000 ALTER TABLE `individualratings` DISABLE KEYS */;
INSERT INTO `individualratings` VALUES (31,12,5,1),(32,13,5,4),(33,12,6,2),(34,13,6,2),(35,12,7,3);
/*!40000 ALTER TABLE `individualratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurants` (
  `restaurantID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `GPSX` float DEFAULT NULL,
  `GPSY` float DEFAULT NULL,
  `totalRating` int(11) DEFAULT '0',
  `numberRatings` int(11) DEFAULT '0',
  `rating` int(11) DEFAULT '0',
  `description` longtext,
  `tag` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`restaurantID`),
  UNIQUE KEY `idrestaurants_UNIQUE` (`restaurantID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurants`
--

LOCK TABLES `restaurants` WRITE;
/*!40000 ALTER TABLE `restaurants` DISABLE KEYS */;
INSERT INTO `restaurants` VALUES (5,'Liberty grill',51.8977,-8.4781,5,2,3,'At Liberty Grill, we serve brunch, lunch or dinner to our neighbours, fellow Corkonians, and visitors to our wonderful city.','libertygrill'),(6,'Kelly\'s restaurant',51.8971,-8.47395,4,2,2,'Great restaurant, low prices',NULL),(32,'The Bodega',51.9,-8.47674,0,0,0,'The Bodega at St. Peter’s Market is Cork’s most elegant nightclub and restaurant and is an ideal venue for eating out in the city centre, enjoying a couple of drinks and dancing the night away into the early hours.','bodegacorkeats');
/*!40000 ALTER TABLE `restaurants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(60) DEFAULT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `isAdmin` bit(1) DEFAULT b'0',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `iduser_UNIQUE` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (12,'$2y$10$yXd9nlqJO2A3nX4bdhqFae3tpykxERvujyzfffP0Enc.f02kDpj8a','admin','admin@admin.admin',''),(13,'$2y$10$JtgYDJROuoTgfWukjIXjWOQm6T/rluJJSVhRFn9c04q/gTdAl3sNW','admin2','admin2@admin2',''),(14,'$2y$10$SrbZMI7B/O9UA64fEr7xvuSvWqjAIJoA0meFCCDJws7Au0QOxX6/O','notAdmin','notAdmin@notAdmin','\0'),(16,'$2y$10$cybL5/hwYqMXv6frPTTJmO5UCnS3q9mHjmBlUmhjFrQjqISf6ymlq','admin','admin@admin.admin','\0'),(17,'$2y$10$7GYhKKIk7vRsUVwV35CORelO/9VfX6Uz1dgo/mkF33gb1K9oO5FZm','add','add@add','\0');
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

-- Dump completed on 2014-12-10  2:57:25
