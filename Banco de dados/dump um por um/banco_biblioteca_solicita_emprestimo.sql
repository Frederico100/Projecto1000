-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: banco_biblioteca
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `solicita_emprestimo`
--

DROP TABLE IF EXISTS `solicita_emprestimo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solicita_emprestimo` (
  `idFuncionario` int NOT NULL,
  `idUtente` int NOT NULL,
  `num_registro_interno` int NOT NULL,
  `cutter` varchar(17) NOT NULL,
  `data_emprestimo` date NOT NULL,
  `estado` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idFuncionario`,`idUtente`,`num_registro_interno`,`cutter`,`data_emprestimo`),
  KEY `idUtente` (`idUtente`),
  KEY `num_registro_interno` (`num_registro_interno`,`cutter`),
  CONSTRAINT `solicita_emprestimo_ibfk_1` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`idFuncionario`),
  CONSTRAINT `solicita_emprestimo_ibfk_2` FOREIGN KEY (`idUtente`) REFERENCES `utente` (`idUtente`),
  CONSTRAINT `solicita_emprestimo_ibfk_3` FOREIGN KEY (`num_registro_interno`, `cutter`) REFERENCES `exemplar` (`num_registro_interno`, `cutter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicita_emprestimo`
--

LOCK TABLES `solicita_emprestimo` WRITE;
/*!40000 ALTER TABLE `solicita_emprestimo` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicita_emprestimo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-28 18:46:14
