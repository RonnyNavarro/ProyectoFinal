
-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: bdllantas
-- ------------------------------------------------------
-- Server version	8.0.20

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
-- Table structure for table `contacto`
--


/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacto` (
  `idcontacto` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `correo` varchar(255) COLLATE utf8_bin NOT NULL,
  `asunto` varchar(255) COLLATE utf8_bin NOT NULL,
  `mensaje` longtext COLLATE utf8_bin NOT NULL,
  `status` varchar(45) COLLATE utf8_bin DEFAULT 'Nuevo',
  `f_creacion` date DEFAULT NULL,
  `f_termino` date DEFAULT NULL,
  PRIMARY KEY (`idcontacto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direccion`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `direccion` (
  `idDireccion` int NOT NULL AUTO_INCREMENT,
  `idUsuario` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Calle` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Colonia` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Codigo_Postal` int NOT NULL,
  `Referencia` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Descripcion_Fachada` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `NoExterior` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `NoInterior` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idDireccion`),
  UNIQUE KEY `idDireccion_UNIQUE` (`idDireccion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direccion`
--

LOCK TABLES `direccion` WRITE;
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
INSERT INTO `direccion` VALUES (1,'RonnyNavarro','Sexta Norte','San pedro',30578,'Frente a la lavadora burbuja','Patio delantero casa blanca','S/N','B'),(2,'RonnyNavarro','Quinta norte','San pedro Buenavista',30525,'Frente a la lavadora burbuja','Patio delantero casa blanca','S/N','S/N');
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `llanta`
--


/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `llanta` (
  `idLlanta` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Descripcion` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Tipo` varchar(90) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'H/L',
  `Precio` double NOT NULL DEFAULT '0',
  `Existencia` int NOT NULL DEFAULT '1',
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '/img/default.jpg',
  PRIMARY KEY (`idLlanta`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `llanta`
--

LOCK TABLES `llanta` WRITE;
/*!40000 ALTER TABLE `llanta` DISABLE KEYS */;
INSERT INTO `llanta` VALUES (1,'Continental','215/60 R17 Procontact Tx 96h','H/L',2711,50,'img/catalogo/1.jpg'),(2,'Dunlop','255/70 R16 Grandtrekat 3 111t Owl','H/L',2562.75,70,'img/catalogo/2.jpg'),(3,'Hankook','225/60 R17 Optimo K415 99h','H/L',1456.84,120,'img/catalogo/3.jpg'),(4,'Maxxis','225/60 R17 Bravo Hp-m3 99h','H/L',1685.21,85,'img/catalogo/4.jpg'),(5,'Michelin Lt','275/65 R17 Ltx Force 115t','H/L',3528.49,42,'img/catalogo/5.jpg'),(6,'Toyo','195/60 R15 Proxes Cf2 88h','H/L',2178.65,71,'img/catalogo/6.jpg'),(7,'Toyo','275-50 R21 Open Country Ht2 113v','H/L',2394.9,98,'img/catalogo/7.jpg'),(8,'Continental 2','265/80 R20','H/L',3500,50,'img/catalogo/continental_2.jpg'),(9,'Goodyear','265/60 R15','H/L',1299,120,'img/catalogo/goodyear.jpg'),(10,'Cooper',' LT 245/75 R16','H/L',1895,20,'img/catalogo/5516013-1.jpg');
/*!40000 ALTER TABLE `llanta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--


/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedido` (
  `idPedido` int NOT NULL AUTO_INCREMENT,
  `idUsuario` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `idLlanta` int DEFAULT NULL,
  `Precio` double NOT NULL DEFAULT '0',
  `Cantidad` int NOT NULL,
  `F_Pedido` date NOT NULL,
  `F_Entrega` date DEFAULT NULL,
  `idDireccion` int NOT NULL,
  `Estado` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT 'Preparando Pedido',
  PRIMARY KEY (`idPedido`),
  KEY `llanta_idx` (`idLlanta`),
  KEY `dir_entrega_idx` (`idDireccion`),
  CONSTRAINT `dir_entrega` FOREIGN KEY (`idDireccion`) REFERENCES `direccion` (`idDireccion`),
  CONSTRAINT `llanta` FOREIGN KEY (`idLlanta`) REFERENCES `llanta` (`idLlanta`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (1,'RonnyNavarro',1,24399,9,'2020-04-26','2020-04-26',1,'Recibido por cliente'),(2,'RonnyNavarro',NULL,16764.3,7,'2020-04-26','2020-04-26',2,'Cancelado');
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idUsuario` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Tipo` int NOT NULL DEFAULT '1',
  `Correo` varchar(90) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Dir_Predeterminada` int DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('Knightdohko','Israel Lopez',1,'bigalexor@gmail.com','1234',NULL),('RonnyNavarro','RonnyNavarro',0,'ipronnynavarro@hotmail.com','1234',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'bdllantas'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-10 13:50:00
