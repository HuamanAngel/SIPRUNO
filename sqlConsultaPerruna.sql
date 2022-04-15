-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: relocadb
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cita` (
  `user_client` int NOT NULL,
  `user_veterinary` int NOT NULL,
  `cita_day` varchar(255) DEFAULT NULL,
  `cita_hour` varchar(255) DEFAULT NULL,
  `cita_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `user_client` (`user_client`),
  KEY `user_veterinary` (`user_veterinary`),
  CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`user_client`) REFERENCES `users` (`user_id`),
  CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`user_veterinary`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `perro`
--

DROP TABLE IF EXISTS `perro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perro` (
  `DNI` varchar(100) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Raza` varchar(255) DEFAULT NULL,
  `Genero` int DEFAULT NULL,
  `FechaNacimiento` char(10) DEFAULT NULL,
  `Foto` char(255) DEFAULT NULL,
  `status` int DEFAULT '1',
  `user_id` int NOT NULL,
  PRIMARY KEY (`DNI`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `perro_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `perro_detail`
--

DROP TABLE IF EXISTS `perro_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perro_detail` (
  `DNI` varchar(100) NOT NULL,
  `detail_symptom` text NOT NULL,
  `detail_ray_img` varchar(255) DEFAULT NULL,
  `detail_blood_diagnostic` varchar(255) DEFAULT NULL,
  `detail_medicine` varchar(255) DEFAULT NULL,
  `detail_cost_consultation` char(5) DEFAULT NULL,
  `detail_payment` char(1) DEFAULT '0',
  `detail_fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_veterinary_id` int NOT NULL,
  `detail_vomitos` int DEFAULT '0',
  `detail_apetito` int DEFAULT '0',
  `detail_fiebre` int DEFAULT '0',
  `detail_debilidad` int DEFAULT '0',
  KEY `DNI` (`DNI`),
  KEY `user_veterinary_id` (`user_veterinary_id`),
  CONSTRAINT `perro_detail_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `perro` (`DNI`),
  CONSTRAINT `perro_detail_ibfk_2` FOREIGN KEY (`user_veterinary_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `user_lastname` varchar(200) NOT NULL,
  `user_username` varchar(200) NOT NULL,
  `user_password` varchar(500) NOT NULL,
  `user_is_admin` int DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_username` (`user_username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-28 16:58:05
