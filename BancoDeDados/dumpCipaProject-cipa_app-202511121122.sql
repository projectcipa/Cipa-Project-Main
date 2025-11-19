-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: cipa_app
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `brancoounulo`
--

DROP TABLE IF EXISTS `brancoounulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brancoounulo` (
  `id_branco_nulo` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade_branco` int(11) DEFAULT 0,
  `quantidade_nulo` int(11) DEFAULT 0,
  `eleicao_FK` int(11) NOT NULL,
  PRIMARY KEY (`id_branco_nulo`),
  KEY `eleicao_FK` (`eleicao_FK`),
  CONSTRAINT `brancoounulo_ibfk_1` FOREIGN KEY (`eleicao_FK`) REFERENCES `eleicao` (`id_eleicao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brancoounulo`
--

LOCK TABLES `brancoounulo` WRITE;
/*!40000 ALTER TABLE `brancoounulo` DISABLE KEYS */;
/*!40000 ALTER TABLE `brancoounulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidato`
--

DROP TABLE IF EXISTS `candidato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `candidato` (
  `id_candidato` int(11) NOT NULL AUTO_INCREMENT,
  `funcionario_FK` int(11) NOT NULL,
  `foto_candidato` varchar(300) DEFAULT NULL,
  `numero_candidato` varchar(10) NOT NULL,
  `cargo_candidato` varchar(35) DEFAULT NULL,
  `data_registro_candidato` date NOT NULL,
  `eleicao_FK` int(11) NOT NULL,
  `status_candidato_ata` enum('eleito','suplente','participante') DEFAULT NULL,
  `quantidade_voto_candidato` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_candidato`),
  UNIQUE KEY `funcionario_FK` (`funcionario_FK`),
  UNIQUE KEY `numero_candidato` (`numero_candidato`),
  UNIQUE KEY `foto_candidato` (`foto_candidato`),
  KEY `eleicao_FK` (`eleicao_FK`),
  CONSTRAINT `candidato_ibfk_1` FOREIGN KEY (`funcionario_FK`) REFERENCES `funcionario` (`id_funcionario`),
  CONSTRAINT `candidato_ibfk_2` FOREIGN KEY (`eleicao_FK`) REFERENCES `eleicao` (`id_eleicao`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidato`
--

LOCK TABLES `candidato` WRITE;
/*!40000 ALTER TABLE `candidato` DISABLE KEYS */;
INSERT INTO `candidato` VALUES (3,2,'fotinhadele','40028922','auxiliardemimir','2025-10-27',1,'eleito',20),(4,1,'fotinhu','00000000','gerentedemimir','2025-10-27',1,'suplente',19);
/*!40000 ALTER TABLE `candidato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documento`
--

DROP TABLE IF EXISTS `documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documento` (
  `id_documento` int(11) NOT NULL AUTO_INCREMENT,
  `data_hora_documento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `data_inicio_documento` date NOT NULL,
  `data_fim_documento` date NOT NULL,
  `observacao_documento` varchar(200) DEFAULT NULL,
  `pdf_documento` varchar(300) DEFAULT NULL,
  `titulo_documento` varchar(100) DEFAULT NULL,
  `tipo_documento` enum('edital','ata') DEFAULT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento`
--

LOCK TABLES `documento` WRITE;
/*!40000 ALTER TABLE `documento` DISABLE KEYS */;
INSERT INTO `documento` VALUES (1,'2025-10-27 03:00:00','2025-10-27','2025-11-27','documento muito top','meuarquivopdf.pdf','ata2025','ata'),(2,'2025-10-27 03:00:00','2025-10-27','2025-11-27','documento muito top','meuarquivopdf.pdf','edital2025','edital');
/*!40000 ALTER TABLE `documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eleicao`
--

DROP TABLE IF EXISTS `eleicao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eleicao` (
  `id_eleicao` int(11) NOT NULL AUTO_INCREMENT,
  `edital_FK` int(11) NOT NULL,
  `data_inicio_eleicao` date NOT NULL,
  `data_fim_eleicao` date NOT NULL,
  `status_eleicao` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_eleicao`),
  KEY `edital_FK` (`edital_FK`),
  CONSTRAINT `eleicao_ibfk_1` FOREIGN KEY (`edital_FK`) REFERENCES `documento` (`id_documento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eleicao`
--

LOCK TABLES `eleicao` WRITE;
/*!40000 ALTER TABLE `eleicao` DISABLE KEYS */;
INSERT INTO `eleicao` VALUES (1,1,'2025-10-27','2025-11-27','andamento');
/*!40000 ALTER TABLE `eleicao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_funcionario` varchar(40) NOT NULL,
  `sobrenome_funcionario` varchar(80) NOT NULL,
  `CPF_funcionario` varchar(11) DEFAULT NULL,
  `data_nascimento_funcionario` date NOT NULL,
  `data_contratacao_funcionario` date NOT NULL,
  `telefone_funcionario` varchar(11) NOT NULL,
  `matricula_funcionario` varchar(20) NOT NULL,
  `codigo_voto_funcionario` char(8) DEFAULT NULL,
  `ativo_funcionario` tinyint(1) NOT NULL DEFAULT 1,
  `ADM_funcionario` tinyint(1) NOT NULL DEFAULT 0,
  `email_funcionario` varchar(100) NOT NULL,
  `senha_funcionario` varchar(20) NOT NULL,
  PRIMARY KEY (`id_funcionario`),
  UNIQUE KEY `email_funcionario` (`email_funcionario`),
  UNIQUE KEY `CPF_funcionario` (`CPF_funcionario`),
  UNIQUE KEY `codigo_voto_funcionario` (`codigo_voto_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'Will','Silva','99988811100','1997-01-01','2025-10-27','71993295049','cipa1235','cod99900',1,1,'will.santos97@hotmail.com','123456'),(2,'Emanuel','Santana','99988811101','2000-12-01','2025-10-27','71993293098','cipa1234','cod99901',1,0,'emanus.santis@hotmail.com','brenoelindo'),(3,'Felipe','Xavier','32184189498','1990-01-01','2025-10-27','71923450987','cipa0987','cod88888',1,0,'felipinho_rei_delas_xaulin_matador_de_porco@gmail.com','chamanozap');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voto`
--

DROP TABLE IF EXISTS `voto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `voto` (
  `id_voto` int(11) NOT NULL AUTO_INCREMENT,
  `data_hora_voto` date NOT NULL,
  `funcionario_FK` int(11) NOT NULL,
  PRIMARY KEY (`id_voto`),
  KEY `funcionario_FK` (`funcionario_FK`),
  CONSTRAINT `voto_ibfk_1` FOREIGN KEY (`funcionario_FK`) REFERENCES `funcionario` (`id_funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voto`
--

LOCK TABLES `voto` WRITE;
/*!40000 ALTER TABLE `voto` DISABLE KEYS */;
/*!40000 ALTER TABLE `voto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cipa_app'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-11-12 11:22:27
