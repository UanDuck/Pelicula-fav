-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: peli
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pref`
--

DROP TABLE IF EXISTS `pref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pref` (
  `id_u` int(5) NOT NULL AUTO_INCREMENT,
  `nom_u` varchar(50) DEFAULT NULL,
  `pelicula` varchar(50) DEFAULT NULL,
  `actor` varchar(50) DEFAULT NULL,
  `op_u` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pref`
--

LOCK TABLES `pref` WRITE;
/*!40000 ALTER TABLE `pref` DISABLE KEYS */;
INSERT INTO `pref` VALUES (1,'Juan','El ni?o con el pijama de rayas','Jack Scanlon (Shmuel)','Me encant? la historia'),(2,'Maria','Tocando el viento','Asa Butterfield (Bruno)','La m?sica fue hermosa'),(3,'Pedro','brassed off: a film script','David Thewelis (Ralf)','Me gust? la actuaci?n'),(4,'Ana','Florece la esperanza','Rupert Friend (Kurt Kothler)','La trama fue interesante'),(5,'Luis','Unusual Ground Floor Conversion','Amber Beattie (Gretel)','Me encant? el final'),(6,'Sofia','Blame It on The Belboy','Vera Farmiga (Elsa)','La comedia fue genial'),(7,'Carlos','?Que pasada!','Jack Scanlon (Shmuel)','Me re? mucho'),(8,'Laura','Purely Belter','Asa Butterfield (Bruno)','La historia fue conmovedora'),(9,'Jorge','C.B.D. The comic book diaries','David Thewelis (Ralf)','Me gust? la animaci?n'),(10,'Daniela','Marijuanos','Rupert Friend (Kurt Kothler)','La trama fue emocionante'),(11,'Juan','Little Voice','Vera Farmiga (Elsa)','Me encant? la voz de la actriz'),(12,'Maria','See you at wembley, frankie walsh','Amber Beattie (Gretel)','La historia fue divertida'),(13,'Pedro','A Kick in the Grass','Rupert Friend (Kurt Kothler)','Me gust? la actuaci?n del actor'),(14,'Ana','El ni?o con el pijama de rayas','Asa Butterfield (Bruno)','La trama fue interesante'),(15,'Luis','Tocando el viento','David Thewelis (Ralf)','La m?sica fue hermosa'),(16,'Sofia','brassed off: a film script','Jack Scanlon (Shmuel)','Me encant? la historia'),(17,'Carlos','Florece la esperanza','Vera Farmiga (Elsa)','La trama fue emocionante'),(18,'Laura','Unusual Ground Floor Conversion','Rupert Friend (Kurt Kothler)','Me gust? el final'),(19,'Jorge','Blame It on The Belboy','Amber Beattie (Gretel)','La comedia fue genial'),(20,'Daniela','Purely Belter','Asa Butterfield (Bruno)','Me re? mucho');
/*!40000 ALTER TABLE `pref` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-02 21:13:50
