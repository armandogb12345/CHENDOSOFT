-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-11-2019 a las 21:15:00
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_tsp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `Puesto` varchar(45) NOT NULL,
  `Login_idLogin` int(11) NOT NULL,
  PRIMARY KEY (`idAdmin`),
  KEY `fk_Admin_Login1_idx` (`Login_idLogin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idAdmin`, `Puesto`, `Login_idLogin`) VALUES
(2, 'Jefe de Divicion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

DROP TABLE IF EXISTS `docente`;
CREATE TABLE IF NOT EXISTS `docente` (
  `idDocente` int(11) NOT NULL AUTO_INCREMENT,
  `NombreDocente` varchar(45) NOT NULL,
  `Division` varchar(45) NOT NULL,
  `Login_idLogin` int(11) NOT NULL,
  PRIMARY KEY (`idDocente`),
  KEY `fk_Asesor_Login1_idx` (`Login_idLogin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_has_expediente`
--

DROP TABLE IF EXISTS `docente_has_expediente`;
CREATE TABLE IF NOT EXISTS `docente_has_expediente` (
  `Docente_idDocente` int(11) NOT NULL,
  `Expediente_idExpediente` int(11) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`Docente_idDocente`,`Expediente_idExpediente`),
  KEY `fk_Docente_has_Expediente_Expediente1_idx` (`Expediente_idExpediente`),
  KEY `fk_Docente_has_Expediente_Docente1_idx` (`Docente_idDocente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

DROP TABLE IF EXISTS `documento`;
CREATE TABLE IF NOT EXISTS `documento` (
  `idDocumento` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(45) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Contenido` longblob NOT NULL,
  `Expediente_idExpediente` int(11) NOT NULL,
  PRIMARY KEY (`idDocumento`),
  KEY `fk_Documento_Expediente1_idx` (`Expediente_idExpediente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `idEstudiante` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEstudiante` varchar(45) NOT NULL,
  `Carrera` varchar(45) NOT NULL,
  `Login_idLogin` int(11) NOT NULL,
  PRIMARY KEY (`idEstudiante`),
  KEY `fk_Estudiante_Login1_idx` (`Login_idLogin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

DROP TABLE IF EXISTS `evaluacion`;
CREATE TABLE IF NOT EXISTS `evaluacion` (
  `idEvaluacion` int(11) NOT NULL AUTO_INCREMENT,
  `Criterios` varchar(45) NOT NULL,
  `Puntaje` decimal(3,0) NOT NULL,
  `Expediente_idExpediente` int(11) NOT NULL,
  PRIMARY KEY (`idEvaluacion`),
  KEY `fk_Evaluacion_Expediente1_idx` (`Expediente_idExpediente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expediente`
--

DROP TABLE IF EXISTS `expediente`;
CREATE TABLE IF NOT EXISTS `expediente` (
  `idExpediente` int(11) NOT NULL AUTO_INCREMENT,
  `Folio` varchar(45) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Estudiante_idEstudiante` int(11) NOT NULL,
  PRIMARY KEY (`idExpediente`),
  KEY `fk_Expediente_Estudiante1_idx` (`Estudiante_idEstudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefedepartamento`
--

DROP TABLE IF EXISTS `jefedepartamento`;
CREATE TABLE IF NOT EXISTS `jefedepartamento` (
  `idJefeDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `NombreDep` varchar(45) NOT NULL,
  `Login_idLogin` int(11) NOT NULL,
  PRIMARY KEY (`idJefeDepartamento`),
  KEY `fk_JefeDepartamento_Login1_idx` (`Login_idLogin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jefedepartamento`
--

INSERT INTO `jefedepartamento` (`idJefeDepartamento`, `NombreDep`, `Login_idLogin`) VALUES
(2, 'SubDirreccion', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `idLogin` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(45) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  PRIMARY KEY (`idLogin`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`idLogin`, `Usuario`, `Nombre`, `Password`, `Tipo`, `Email`) VALUES
(1, 'Admin', 'Daniel Arredondo Salcedo', 'ZGFueTEyMzQ1', 'Administrador', 'daniels@cimat.mx'),
(2, 'Armando', 'Jose Armando Gomez Benitez', 'MTIzNDU=', 'Estudiante', 'jarmandogb1@gmail.com'),
(3, 'Nacho', 'Manuel Ignacio Salaz Guzman', 'MTIzNDU=', 'Docente', 'salasg@gmail.com'),
(4, 'Jairo', 'Jairo isac lira', 'MTIzNDU=', 'Jefe de Departamento', 'jairoisac@gmail.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_Admin_Login1` FOREIGN KEY (`Login_idLogin`) REFERENCES `login` (`idLogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `fk_Asesor_Login1` FOREIGN KEY (`Login_idLogin`) REFERENCES `login` (`idLogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `docente_has_expediente`
--
ALTER TABLE `docente_has_expediente`
  ADD CONSTRAINT `fk_Docente_has_Expediente_Docente1` FOREIGN KEY (`Docente_idDocente`) REFERENCES `docente` (`idDocente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Docente_has_Expediente_Expediente1` FOREIGN KEY (`Expediente_idExpediente`) REFERENCES `expediente` (`idExpediente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `fk_Documento_Expediente1` FOREIGN KEY (`Expediente_idExpediente`) REFERENCES `expediente` (`idExpediente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_Estudiante_Login1` FOREIGN KEY (`Login_idLogin`) REFERENCES `login` (`idLogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `fk_Evaluacion_Expediente1` FOREIGN KEY (`Expediente_idExpediente`) REFERENCES `expediente` (`idExpediente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD CONSTRAINT `fk_Expediente_Estudiante1` FOREIGN KEY (`Estudiante_idEstudiante`) REFERENCES `estudiante` (`idEstudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `jefedepartamento`
--
ALTER TABLE `jefedepartamento`
  ADD CONSTRAINT `fk_JefeDepartamento_Login1` FOREIGN KEY (`Login_idLogin`) REFERENCES `login` (`idLogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
