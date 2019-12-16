-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-12-2019 a las 06:34:50
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_tsp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_has_expediente`
--

CREATE TABLE IF NOT EXISTS `docente_has_expediente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Docente_idDocente` int(11) NOT NULL,
  `Expediente_idExpediente` int(11) NOT NULL,
  `Tipo` char(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `docente_has_expediente`
--

INSERT INTO `docente_has_expediente` (`id`, `Docente_idDocente`, `Expediente_idExpediente`, `Tipo`) VALUES
(31, 2, 1, 'Revisor'),
(32, 3, 1, 'Revisor'),
(33, 1, 1, 'Asesor'),
(34, 2, 2, 'Revisor'),
(35, 1, 2, 'Revisor'),
(36, 3, 2, 'Asesor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
