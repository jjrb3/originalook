-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: originalook
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `categoria_activa` varchar(2) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'estetica','estetica','Si','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'peluqueria','peluqueria','Si','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'maquillaje','maquillaje','Si','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'fitness','fitness','Si','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'perfumes','perfumes','Si','0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'medicina estetica','medicina estetica','Si','0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'spa','spa','Si','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentos`
--

DROP TABLE IF EXISTS `documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos`
--

LOCK TABLES `documentos` WRITE;
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
INSERT INTO `documentos` VALUES (1,'Tipo De Identificación','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Cedula Ciudadania','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Cedula Extranjera','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'Pasaporte','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'Registro Civil','0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'NIT','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nit` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas_profesionales`
--

DROP TABLE IF EXISTS `empresas_profesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas_profesionales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_profesionales` int(11) NOT NULL,
  `id_empresas` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas_profesionales`
--

LOCK TABLES `empresas_profesionales` WRITE;
/*!40000 ALTER TABLE `empresas_profesionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas_profesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas_servicios`
--

DROP TABLE IF EXISTS `empresas_servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas_servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresas` int(11) NOT NULL,
  `id_servicios` int(11) NOT NULL,
  `costo` float NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `descuento_servicio` float NOT NULL,
  `tiempo_duracion` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas_servicios`
--

LOCK TABLES `empresas_servicios` WRITE;
/*!40000 ALTER TABLE `empresas_servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas_servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagen_portafolio`
--

DROP TABLE IF EXISTS `imagen_portafolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagen_portafolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_portafolio` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `comentario` varchar(45) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imagen_portafolio_idx` (`id_portafolio`),
  CONSTRAINT `fk_imagen_portafolio` FOREIGN KEY (`id_portafolio`) REFERENCES `profesionales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagen_portafolio`
--

LOCK TABLES `imagen_portafolio` WRITE;
/*!40000 ALTER TABLE `imagen_portafolio` DISABLE KEYS */;
INSERT INTO `imagen_portafolio` VALUES (1,1,'alvaro','esta es la imagen prueba','5_20170509_123039.png'),(2,1,'jeremy','hola esta es la segunda prueba','5_20170509_123152.png'),(3,1,'andrea','prueba3','5_20170509_123410.png'),(4,1,'jeremy guppy','este es un pez con la boca igual a jeremy','5_20170509_125815.png');
/*!40000 ALTER TABLE `imagen_portafolio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagos_empresas`
--

DROP TABLE IF EXISTS `pagos_empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagos_empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresas` int(11) NOT NULL,
  `fecha_pago` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `valor` float NOT NULL,
  `numero_referencia` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagos_empresas`
--

LOCK TABLES `pagos_empresas` WRITE;
/*!40000 ALTER TABLE `pagos_empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagos_empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagos_profesionales`
--

DROP TABLE IF EXISTS `pagos_profesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagos_profesionales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_profesionales` int(11) NOT NULL,
  `valor` float NOT NULL,
  `numero_referencia` varchar(100) NOT NULL,
  `fecha_pago` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagos_profesionales`
--

LOCK TABLES `pagos_profesionales` WRITE;
/*!40000 ALTER TABLE `pagos_profesionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagos_profesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesionales`
--

DROP TABLE IF EXISTS `profesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesionales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuarios` int(11) NOT NULL,
  `perfil` varchar(100) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `aceptado` tinyint(1) NOT NULL,
  `saldo_de_cuenta` float NOT NULL,
  `fecha_creacion` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `fecha_modificacion` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `zona` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesionales`
--

LOCK TABLES `profesionales` WRITE;
/*!40000 ALTER TABLE `profesionales` DISABLE KEYS */;
INSERT INTO `profesionales` VALUES (1,5,'Maquillador',0,0,10000000,'2017-04-14 22:02:00.000000','2017-04-14 22:02:00.000000','Norte');
/*!40000 ALTER TABLE `profesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesionales_servicios`
--

DROP TABLE IF EXISTS `profesionales_servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesionales_servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_servicios` int(11) NOT NULL,
  `id_profesionales` int(11) NOT NULL,
  `costo` float NOT NULL,
  `descuento_servicio` float NOT NULL,
  `fecha_creacio` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `tiempo_duracion` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesionales_servicios`
--

LOCK TABLES `profesionales_servicios` WRITE;
/*!40000 ALTER TABLE `profesionales_servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesionales_servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Profesional','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Administrador','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Cliente & Usuario','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorias` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `valor` int(11) DEFAULT NULL,
  `servicio_activo` varchar(2) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` VALUES (1,7,'Masaje',20000,'Si','Masaje','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitudes_empresas`
--

DROP TABLE IF EXISTS `solicitudes_empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitudes_empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresas` int(11) NOT NULL,
  `codigo_identificador` varchar(100) NOT NULL,
  `fecha_peticion` datetime NOT NULL,
  `codigo_generado` varchar(45) NOT NULL,
  `comentario_cliente` varchar(300) NOT NULL,
  `calificacion` varchar(45) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitudes_empresas`
--

LOCK TABLES `solicitudes_empresas` WRITE;
/*!40000 ALTER TABLE `solicitudes_empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitudes_empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitudes_profesionales`
--

DROP TABLE IF EXISTS `solicitudes_profesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitudes_profesionales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_profesionales` int(11) NOT NULL,
  `codigo_identificador` varchar(100) NOT NULL,
  `codigo_generado` varchar(45) NOT NULL,
  `fecha_peticion` date NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `comentario_cliente` varchar(300) NOT NULL,
  `calificacion` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitudes_profesionales`
--

LOCK TABLES `solicitudes_profesionales` WRITE;
/*!40000 ALTER TABLE `solicitudes_profesionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitudes_profesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_roles` int(10) NOT NULL,
  `id_documentos` int(11) NOT NULL,
  `primer_nombre` varchar(45) NOT NULL,
  `segundo_nombre` varchar(45) NOT NULL,
  `primer_apellido` varchar(45) NOT NULL,
  `segundo_apellido` varchar(45) NOT NULL,
  `identificacion` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `dispositivo` varchar(15) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `correo_alternativo` varchar(100) NOT NULL,
  `genero` varchar(9) NOT NULL,
  `token` varchar(100) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `ruta_imagen` varchar(100) DEFAULT NULL,
  `latitud` point DEFAULT NULL,
  `longitud` point DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (5,1,2,'Alvaro','enrrique','Perez','Malo','l','k','Colombia','Barranquilla','g','IOS','333','1','u','202cb962ac59075b964b07152d234b70','alvaro.perez@ejemplo.com','f','Masculino','HiW3EsoQqjWiRaJwapNb8Y1KnFaCZ43unTCzn1Bv','2017-03-25 00:00:00','2017-03-26 00:00:00','2017-03-26 00:00:00','5_20170508_111235.png',NULL,NULL,'Este man vale monda'),(6,1,2,'jeremy','jose','reyes','barrios','1143144245','kra8b#51b-29','Colombia','Barranquilla','3014954136','IOS','3014954136','1','jeremy','6967cabefd763ac1a1a88e11159957db','jeremy@gmail.com','jeremy@hotmail.com','Masculino','JmY7yjbI1x6qU3nBPhOIK5tBrUJCpBab46ieHBbL','2017-04-20 00:00:00','2017-04-15 00:00:00','2017-04-15 00:00:00','6_20170415_103514.png',NULL,NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-14 11:05:22
