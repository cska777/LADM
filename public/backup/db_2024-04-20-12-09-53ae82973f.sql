-- MySQL dump 10.13  Distrib 8.3.0, for macos13.6 (arm64)
--
-- Host: 127.0.0.1    Database: ong
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `abonnement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `current_period_start` datetime NOT NULL,
  `current_period_end` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_351268BBE899029B` (`plan_id`),
  KEY `IDX_351268BBA76ED395` (`user_id`),
  CONSTRAINT `FK_351268BBA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_351268BBE899029B` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abonnement`
--

LOCK TABLES `abonnement` WRITE;
/*!40000 ALTER TABLE `abonnement` DISABLE KEYS */;
INSERT INTO `abonnement` VALUES (85,1,52,'price_1P16oOP3TPaTU66iV4rtb8YE','2024-04-17 22:12:05','2025-04-17 22:12:05',1),(86,2,55,'price_1P18WVP3TPaTU66ishYQRGb3','2024-04-19 16:26:55','2025-04-19 16:26:55',1),(87,1,56,'price_1P16oOP3TPaTU66iV4rtb8YE','2024-04-19 16:18:33','2025-04-19 16:18:33',1),(88,1,56,'price_1P16oOP3TPaTU66iV4rtb8YE','2024-04-19 16:19:37','2025-04-19 16:19:37',0),(89,1,57,'price_1P16oOP3TPaTU66iV4rtb8YE','2024-04-19 22:06:11','2025-04-19 22:06:11',1),(90,2,58,'price_1P3ZMFP3TPaTU66iZslOjqYz','2024-04-20 10:09:00','2025-04-20 10:09:00',1);
/*!40000 ALTER TABLE `abonnement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `description` longtext NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `sous_titre1` varchar(255) DEFAULT NULL,
  `sous_titre2` varchar(255) DEFAULT NULL,
  `sous_titre3` varchar(255) DEFAULT NULL,
  `sous_titre4` varchar(255) DEFAULT NULL,
  `sous_titre5` varchar(255) DEFAULT NULL,
  `paragraphe1` longtext DEFAULT NULL,
  `paragraphe2` longtext DEFAULT NULL,
  `paragraphe3` longtext DEFAULT NULL,
  `paragraphe4` longtext DEFAULT NULL,
  `paragraphe5` longtext DEFAULT NULL,
  `paragraphe6` longtext DEFAULT NULL,
  `paragraphe7` longtext DEFAULT NULL,
  `paragraphe8` longtext DEFAULT NULL,
  `paragraphe9` longtext DEFAULT NULL,
  `paragraphe10` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(100) DEFAULT NULL,
  `message` longtext NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cotisation`
--

DROP TABLE IF EXISTS `cotisation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cotisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cotisation`
--

LOCK TABLES `cotisation` WRITE;
/*!40000 ALTER TABLE `cotisation` DISABLE KEYS */;
INSERT INTO `cotisation` VALUES (1,'Cotisation mensuelle','cotisation','price_1P42NiP3TPaTU66iLUip2Acq','2024-04-19 17:46:21');
/*!40000 ALTER TABLE `cotisation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20240412150623','2024-04-12 15:06:27',15),('DoctrineMigrations\\Version20240414094623','2024-04-14 09:46:28',94),('DoctrineMigrations\\Version20240415210135','2024-04-15 21:01:47',54),('DoctrineMigrations\\Version20240415212849','2024-04-15 21:28:53',41),('DoctrineMigrations\\Version20240416103104','2024-04-16 10:31:20',115),('DoctrineMigrations\\Version20240417093603','2024-04-17 09:36:06',48),('DoctrineMigrations\\Version20240417093748','2024-04-17 09:37:51',28),('DoctrineMigrations\\Version20240417140053','2024-04-17 14:01:02',64),('DoctrineMigrations\\Version20240419153420','2024-04-19 15:34:28',36);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facture`
--

DROP TABLE IF EXISTS `facture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `abonnement_id` int(11) NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `montant_paye` double NOT NULL,
  `no_facture` varchar(255) NOT NULL,
  `hosted_url_facture` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_FE866410F1D74413` (`abonnement_id`),
  CONSTRAINT `FK_FE866410F1D74413` FOREIGN KEY (`abonnement_id`) REFERENCES `abonnement` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facture`
--

LOCK TABLES `facture` WRITE;
/*!40000 ALTER TABLE `facture` DISABLE KEYS */;
INSERT INTO `facture` VALUES (25,83,'in_1P6ZIsP3TPaTU66iAbcHWMNm',13.73,'D5D463F6-0249','https://invoice.stripe.com/i/acct_1P13wrP3TPaTU66i/test_YWNjdF8xUDEzd3JQM1RQYVRVNjZpLF9Qd1NEb1p4Mm1mSnIwZ0ZwYUEyaXVYN2E0cmpXUElhLDEwMzkwNDI2Mg0200qSyuZsKZ?s=ap','2024-04-17 14:17:42'),(27,85,'in_1P6ghxP3TPaTU66iQPKQPXeS',13.73,'D5D463F6-0252','https://invoice.stripe.com/i/acct_1P13wrP3TPaTU66i/test_YWNjdF8xUDEzd3JQM1RQYVRVNjZpLF9Qd1pyNlcyQnF0OEZkeUk0Qkx6bjNFT1pNdWt3SVZGLDEwMzkzMjcyNg0200xCyUPS8X?s=ap','2024-04-17 22:12:06'),(28,86,'in_1P7JZcP3TPaTU66i4EUna4vY',76.28,'D5D463F6-0258','https://invoice.stripe.com/i/acct_1P13wrP3TPaTU66i/test_YWNjdF8xUDEzd3JQM1RQYVRVNjZpLF9QeEUxRE00MnNVaFF6TVFjTERnUWlXaGpWVzI1ZTJoLDEwNDA4MjEyNA0200uwVD912c?s=ap','2024-04-19 15:42:04'),(30,87,'in_1P7K8vP3TPaTU66iljGs3ITY',13.73,'D5D463F6-0262','https://invoice.stripe.com/i/acct_1P13wrP3TPaTU66i/test_YWNjdF8xUDEzd3JQM1RQYVRVNjZpLF9QeEVjemV2M0Q5QlZjeGtXY3lOMGZtME82SjE0Z3ZlLDEwNDA4NDMxMw0200PKolHobu?s=ap','2024-04-19 16:18:33'),(33,89,'in_1P7PZLP3TPaTU66iiB2Jk8PW',13.73,'D5D463F6-0264','https://invoice.stripe.com/i/acct_1P13wrP3TPaTU66i/test_YWNjdF8xUDEzd3JQM1RQYVRVNjZpLF9QeEtETXJiYUVMcnFZdWRQaWlGTU9xbEE4eUxIMVpjLDEwNDEwNTE3MQ0200TO4fNYB9?s=ap','2024-04-19 22:06:12'),(34,90,'in_1P7aqpP3TPaTU66itvjlMKLH',100,'D5D463F6-0265','https://invoice.stripe.com/i/acct_1P13wrP3TPaTU66i/test_YWNjdF8xUDEzd3JQM1RQYVRVNjZpLF9QeFZzZG5tQVJDbUN5TEpuUThOb0FCWFl4TlMxNG4xLDEwNDE0ODU0MQ0200imz1Pxlh?s=ap','2024-04-20 10:09:01');
/*!40000 ALTER TABLE `facture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messenger_messages`
--

LOCK TABLES `messenger_messages` WRITE;
/*!40000 ALTER TABLE `messenger_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messenger_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newz`
--

DROP TABLE IF EXISTS `newz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `newz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newz`
--

LOCK TABLES `newz` WRITE;
/*!40000 ALTER TABLE `newz` DISABLE KEYS */;
INSERT INTO `newz` VALUES (1,'Don',NULL,'<div>SUPER</div>','defd794579911ad651a34a79dbc546d8cc5068ec.jpg','MOI','2024-04-09');
/*!40000 ALTER TABLE `newz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan`
--

DROP TABLE IF EXISTS `plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan`
--

LOCK TABLES `plan` WRITE;
/*!40000 ALTER TABLE `plan` DISABLE KEYS */;
INSERT INTO `plan` VALUES (1,'Adherent simple','simple','price_1P42ReP3TPaTU66iraYr4e2u','2024-04-02 15:50:30'),(2,'Ahderent Cadre','cadre','price_1P3ZMFP3TPaTU66iZslOjqYz','2024-04-02 16:24:15');
/*!40000 ALTER TABLE `plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(255) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`role`)),
  `type` varchar(255) NOT NULL,
  `siren` varchar(255) DEFAULT NULL,
  `forme_juridique` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) NOT NULL,
  `complement_adresse` varchar(255) DEFAULT NULL,
  `code_postal` varchar(10) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `reset_password_token` varchar(255) DEFAULT NULL,
  `plan_id` int(11) NOT NULL,
  `adhesion_paye` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8D93D649E899029B` (`plan_id`),
  CONSTRAINT `FK_8D93D649E899029B` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (52,'Mr','AAAA','Chris','arya.carbin@gmail.com','$2y$13$WOknh2IETDxzheDjG5wunul5/2CkwUI2gfvt2GEwlJ/.8bZVa8zDi','[\"ROLE_S_AD\"]','adherent',NULL,NULL,'0606060606','33/A',NULL,'54000','Lahore','AF',NULL,1,1),(55,'Mr','MOIMOI','MOIMOI','moi@gmail.com','$2y$13$w0v82mv71/JMy2UcP2T2zuxQPGt//KrWhoyLxbxHBpPvKKgdRHJze','[]','adherent',NULL,NULL,'0606060606','33/A',NULL,'54000','Lahore','AF',NULL,2,1),(56,NULL,'Cricri',NULL,'cricri@gmail.com','$2y$13$uIhfKYb4JshhrwBLmEss9uZaYBKTYcQtP/J6Mfr6.rJHWaiYlXWM2','[\"ROLE_USER\",\"ROLE_S_AD\"]','adherent',NULL,NULL,'','33/A','','54000','Lahore','Angleterre',NULL,1,1),(57,'Mme','Jaja','Jojo','jojo@gmail.com','$2y$13$zuZ88BBxkjcR3FQzS0hx9u/4FzlzA3buSeLwN4m9TcPdhXJJZQ.tW','[]','adherent',NULL,NULL,'0606060606','10 rue de quelque part',NULL,'77777','Loin','DE',NULL,1,1),(58,'Mr','ssssss','joanna','joanna@gmail.com','$2y$13$Di4Z9qNgHznj3rjhLXbJA.HImtRlKptgQKGNfSeKkNCjEvJ/xI21G','[]','adherent',NULL,NULL,'0606060606','33/A',NULL,'54000','Lahore','AF',NULL,2,1);
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

-- Dump completed on 2024-04-20 12:09:48
