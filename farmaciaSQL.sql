-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: adan
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `idCat` int NOT NULL AUTO_INCREMENT,
  `NomCat` varchar(50) NOT NULL,
  `DescCat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idCat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compras` (
  `idComp` int NOT NULL AUTO_INCREMENT,
  `FechaComp` date NOT NULL,
  `HoraComp` time NOT NULL,
  `TotalComp` double(6,2) NOT NULL,
  `idProv` int NOT NULL,
  `idUsu` int NOT NULL,
  PRIMARY KEY (`idComp`),
  KEY `Compras_proveedores_idProv_fk` (`idProv`),
  KEY `compras_usuarios_idUsu_fk` (`idUsu`),
  CONSTRAINT `Compras_proveedores_idProv_fk` FOREIGN KEY (`idProv`) REFERENCES `proveedores` (`idProv`),
  CONSTRAINT `compras_usuarios_idUsu_fk` FOREIGN KEY (`idUsu`) REFERENCES `usuarios` (`idUsu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consultas`
--

DROP TABLE IF EXISTS `consultas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `consultas` (
  `idCon` int NOT NULL AUTO_INCREMENT,
  `FechaCon` date NOT NULL,
  `HoraCon` time NOT NULL,
  `DiagnostCon` varchar(255) DEFAULT NULL,
  `CostoCon` double(6,2) NOT NULL,
  `idPac` int NOT NULL,
  `idUsu` int NOT NULL,
  PRIMARY KEY (`idCon`),
  KEY `Consultas_pacientes_idPac_fk` (`idPac`),
  KEY `Consultas_usuarios_idUsu_fk` (`idUsu`),
  CONSTRAINT `Consultas_pacientes_idPac_fk` FOREIGN KEY (`idPac`) REFERENCES `pacientes` (`idPac`),
  CONSTRAINT `Consultas_usuarios_idUsu_fk` FOREIGN KEY (`idUsu`) REFERENCES `usuarios` (`idUsu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultas`
--

LOCK TABLES `consultas` WRITE;
/*!40000 ALTER TABLE `consultas` DISABLE KEYS */;
/*!40000 ALTER TABLE `consultas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `det_compras`
--

DROP TABLE IF EXISTS `det_compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `det_compras` (
  `idDetComp` int NOT NULL AUTO_INCREMENT,
  `CantDetComp` int NOT NULL,
  `SubTtlDetComp` double(6,2) NOT NULL,
  `idComp` int NOT NULL,
  `idMed` int NOT NULL,
  PRIMARY KEY (`idDetComp`),
  KEY `Det_Compras_compras_idComp_fk` (`idComp`),
  CONSTRAINT `Det_Compras_compras_idComp_fk` FOREIGN KEY (`idComp`) REFERENCES `compras` (`idComp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `det_compras`
--

LOCK TABLES `det_compras` WRITE;
/*!40000 ALTER TABLE `det_compras` DISABLE KEYS */;
/*!40000 ALTER TABLE `det_compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `det_ventas`
--

DROP TABLE IF EXISTS `det_ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `det_ventas` (
  `idDetVta` int NOT NULL AUTO_INCREMENT,
  `CabteDetVta` int NOT NULL,
  `SubTtlDetVta` double(6,2) NOT NULL,
  `idVta` int NOT NULL,
  `idMed` int NOT NULL,
  PRIMARY KEY (`idDetVta`),
  KEY `Det_Ventas_medicamentos_IdMed_fk` (`idMed`),
  KEY `Det_Ventas_ventas_idVta_fk` (`idVta`),
  CONSTRAINT `Det_Ventas_medicamentos_IdMed_fk` FOREIGN KEY (`idMed`) REFERENCES `medicamentos` (`IdMed`),
  CONSTRAINT `Det_Ventas_ventas_idVta_fk` FOREIGN KEY (`idVta`) REFERENCES `ventas` (`idVta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `det_ventas`
--

LOCK TABLES `det_ventas` WRITE;
/*!40000 ALTER TABLE `det_ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `det_ventas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direccion`
--

DROP TABLE IF EXISTS `direccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `direccion` (
  `Id_Dir` int NOT NULL AUTO_INCREMENT,
  `ColDir` varchar(100) DEFAULT NULL,
  `CalleDir` varchar(100) DEFAULT NULL,
  `NumExtDir` int NOT NULL,
  `NumIntDir` varchar(6) DEFAULT NULL,
  `CPDir` int NOT NULL,
  PRIMARY KEY (`Id_Dir`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direccion`
--

LOCK TABLES `direccion` WRITE;
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marca` (
  `idMarc` int NOT NULL AUTO_INCREMENT,
  `NomMarc` varchar(50) NOT NULL,
  `DescMarc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idMarc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca`
--

LOCK TABLES `marca` WRITE;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicamentos`
--

DROP TABLE IF EXISTS `medicamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medicamentos` (
  `IdMed` int NOT NULL AUTO_INCREMENT,
  `NomMed` varchar(50) NOT NULL,
  `PrecioVta` double(6,2) NOT NULL,
  `PrecioComp` double(6,2) NOT NULL,
  `ExistenciaMed` int NOT NULL,
  `TamañoMed` varchar(30) NOT NULL,
  `TipoMed` varchar(30) NOT NULL,
  `PresentacionMed` varchar(30) NOT NULL,
  `CaduciMed` date NOT NULL,
  `idMarc` int NOT NULL,
  `idCat` int NOT NULL,
  PRIMARY KEY (`IdMed`),
  KEY `Medicamentos_categoria_idCat_fk` (`idCat`),
  KEY `medicamentos_marca_idMarc_fk` (`idMarc`),
  CONSTRAINT `Medicamentos_categoria_idCat_fk` FOREIGN KEY (`idCat`) REFERENCES `categoria` (`idCat`),
  CONSTRAINT `medicamentos_marca_idMarc_fk` FOREIGN KEY (`idMarc`) REFERENCES `marca` (`idMarc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicamentos`
--

LOCK TABLES `medicamentos` WRITE;
/*!40000 ALTER TABLE `medicamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `medicamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pacientes` (
  `idPac` int NOT NULL AUTO_INCREMENT,
  `idPer` int NOT NULL,
  PRIMARY KEY (`idPac`),
  KEY `Pacientes_persona_IdPer_fk` (`idPer`),
  CONSTRAINT `Pacientes_persona_IdPer_fk` FOREIGN KEY (`idPer`) REFERENCES `persona` (`IdPer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `persona` (
  `IdPer` int NOT NULL,
  `NomPer` varchar(50) NOT NULL,
  `ApePatPer` varchar(50) NOT NULL,
  `ApeMatPer` varchar(50) DEFAULT NULL,
  `SexoPer` varchar(10) NOT NULL,
  `EdadPer` int NOT NULL,
  `idDir` int NOT NULL,
  `idSuc` int NOT NULL,
  PRIMARY KEY (`IdPer`),
  KEY `Persona_direccion_Id_Dir_fk` (`idDir`),
  KEY `persona_sucursal_idSuc_fk` (`idSuc`),
  CONSTRAINT `Persona_direccion_Id_Dir_fk` FOREIGN KEY (`idDir`) REFERENCES `direccion` (`Id_Dir`),
  CONSTRAINT `persona_sucursal_idSuc_fk` FOREIGN KEY (`idSuc`) REFERENCES `sucursal` (`idSuc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedores` (
  `idProv` int NOT NULL AUTO_INCREMENT,
  `NomProv` varchar(50) NOT NULL,
  `TelProv` bigint DEFAULT NULL,
  `CorreoProv` varchar(100) DEFAULT NULL,
  `idDir` int NOT NULL,
  PRIMARY KEY (`idProv`),
  KEY `Proveedores_direccion_Id_Dir_fk` (`idDir`),
  CONSTRAINT `Proveedores_direccion_Id_Dir_fk` FOREIGN KEY (`idDir`) REFERENCES `direccion` (`Id_Dir`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receta`
--

DROP TABLE IF EXISTS `receta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receta` (
  `idRec` int NOT NULL AUTO_INCREMENT,
  `FechaRec` date NOT NULL,
  `HoraRec` time NOT NULL,
  `Medicamento` varchar(255) NOT NULL,
  `idCon` int NOT NULL,
  PRIMARY KEY (`idRec`),
  KEY `Receta_consultas_idCon_fk` (`idCon`),
  CONSTRAINT `Receta_consultas_idCon_fk` FOREIGN KEY (`idCon`) REFERENCES `consultas` (`idCon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receta`
--

LOCK TABLES `receta` WRITE;
/*!40000 ALTER TABLE `receta` DISABLE KEYS */;
/*!40000 ALTER TABLE `receta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursal`
--

DROP TABLE IF EXISTS `sucursal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sucursal` (
  `idSuc` int NOT NULL,
  `NomSuc` varchar(50) NOT NULL,
  `TelSuc` bigint DEFAULT NULL,
  `idDir` int NOT NULL,
  PRIMARY KEY (`idSuc`),
  KEY `Sucursal_direccion_Id_Dir_fk` (`idDir`),
  CONSTRAINT `Sucursal_direccion_Id_Dir_fk` FOREIGN KEY (`idDir`) REFERENCES `direccion` (`Id_Dir`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursal`
--

LOCK TABLES `sucursal` WRITE;
/*!40000 ALTER TABLE `sucursal` DISABLE KEYS */;
/*!40000 ALTER TABLE `sucursal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idUsu` int NOT NULL AUTO_INCREMENT,
  `CorreoUsu` varchar(100) DEFAULT NULL,
  `ContraUsu` varchar(15) NOT NULL,
  `RolUsu` varchar(20) NOT NULL,
  `idPer` int NOT NULL,
  `idSuc` int NOT NULL,
  PRIMARY KEY (`idUsu`),
  KEY `Usuarios_persona_IdPer_fk` (`idPer`),
  KEY `Usuarios_sucursal_idSuc_fk` (`idSuc`),
  CONSTRAINT `Usuarios_persona_IdPer_fk` FOREIGN KEY (`idPer`) REFERENCES `persona` (`IdPer`),
  CONSTRAINT `Usuarios_sucursal_idSuc_fk` FOREIGN KEY (`idSuc`) REFERENCES `sucursal` (`idSuc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventas` (
  `idVta` int NOT NULL AUTO_INCREMENT,
  `FechaVta` date NOT NULL,
  `HoraVta` time NOT NULL,
  `TotalVta` double(6,2) NOT NULL,
  `idUsu` int NOT NULL,
  PRIMARY KEY (`idVta`),
  KEY `Ventas_usuarios_idUsu_fk` (`idUsu`),
  CONSTRAINT `Ventas_usuarios_idUsu_fk` FOREIGN KEY (`idUsu`) REFERENCES `usuarios` (`idUsu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-10 11:21:12
