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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `individualratings`
--

LOCK TABLES `individualratings` WRITE;
/*!40000 ALTER TABLE `individualratings` DISABLE KEYS */;
INSERT INTO `individualratings` VALUES (31,12,5,2),(32,13,5,4),(33,12,6,5),(34,13,6,2),(35,12,7,3),(36,12,32,4),(37,12,35,2),(38,12,36,4),(39,12,37,3),(40,12,38,2),(41,12,39,4),(42,17,36,1),(43,17,37,5),(44,17,38,3),(45,17,39,2);
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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurants`
--

LOCK TABLES `restaurants` WRITE;
/*!40000 ALTER TABLE `restaurants` DISABLE KEYS */;
INSERT INTO `restaurants` VALUES (5,'Liberty grill',51.8977,-8.4781,6,2,3,'At Liberty Grill, we serve brunch, lunch or dinner to our neighbours, fellow Corkonians, and visitors to our wonderful city.','libertygrill'),(6,'Kelly\'s restaurant',51.8971,-8.47395,7,2,4,'Great restaurant, low prices',NULL),(32,'The Bodega',51.9,-8.47674,4,1,4,'The Bodega at St. Peter’s Market is Cork’s most elegant nightclub and restaurant and is an ideal venue for eating out in the city centre, enjoying a couple of drinks and dancing the night away into the early hours.','bodegacorkeats'),(35,'Oysters Restaurant',51.8983,-8.46535,2,1,2,'Seafood Restaurant in Cork City, as recommended by the Michelin Guide UK & Ire 2014, using all local Cork produce throughout their menus','oysterscork'),(36,'Fenn s Quay',51.898,-8.47988,5,2,3,'They use only the best produce from the best local suppliers RAI best Restaurant in Cork 2014','FQFood'),(37,'Electric',51.8962,-8.47339,8,2,4,'Since opening four years ago, Electric has become one of most popular restaurants for locals & visitors alike. This has been built on a menu featuring quality prime Irish steaks, freshly caught fish & locally inspired dishes, as well as the buzzing atmosphere.',''),(38,'Les Gourmandises',51.8972,-8.4715,5,2,3,'Known for using the best French and locally sourced products, and well sourced wines, we continue to offer fine french dining at the highest of standards','lgourmandises'),(39,'The Oliver Plunkett',51.8983,-8.46956,6,2,3,'The Oliver Plunkett is a traditional Irish Pub, located on Oliver Plunkett Street in Cork City.\r\nBar food is served all day from 8am until 9pm, from Breakfast, Carvery Lunches and Bar Bites throughout the evening.','theoliverplunk');
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

-- Dump completed on 2014-12-10 16:59:35
