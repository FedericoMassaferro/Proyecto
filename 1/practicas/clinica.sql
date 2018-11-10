-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2018 a las 21:56:14
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `zonas` varchar(50) NOT NULL DEFAULT '',
  `medicos` varchar(300) DEFAULT NULL,
  `horarios` varchar(10) DEFAULT NULL,
  `descansos` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `DNI` int(8) NOT NULL DEFAULT '0',
  `obraSocial` tinyint(1) DEFAULT NULL,
  `nAfiliado` int(12) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `telefono` int(15) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `diagPaciente` varchar(1000) DEFAULT NULL,
  `nota` varchar(500) DEFAULT NULL,
  `appUsuario` varchar(50) DEFAULT NULL,
  `appContraseña` varchar(50) DEFAULT NULL,
  `ticket` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE IF NOT EXISTS `pagina` (
  `nombre` varchar(55) NOT NULL,
  `apellido` varchar(55) NOT NULL,
  `especialidad` varchar(55) NOT NULL,
  `horarios` varchar(55) NOT NULL,
  `dias` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`nombre`, `apellido`, `especialidad`, `horarios`, `dias`) VALUES
('frdf', 'fdsda', 'ghghg', 'ghghjg', 'gjhgkh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scanner`
--

CREATE TABLE IF NOT EXISTS `scanner` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `DNI` int(8) DEFAULT NULL,
  `archivo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE IF NOT EXISTS `trabajador` (
  `usuario` varchar(100) DEFAULT NULL,
  `contrasenia` varchar(100) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `DNI` int(8) DEFAULT NULL,
  `nMatricula` int(11) NOT NULL DEFAULT '0',
  `zonas` varchar(50) DEFAULT NULL,
  `horario` int(70) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE IF NOT EXISTS `turnos` (
  `fecha` date DEFAULT NULL,
  `hora` int(11) DEFAULT NULL,
  `consultorio` varchar(50) NOT NULL DEFAULT '',
  `medico` varchar(30) DEFAULT NULL,
  `nombrePaciente` varchar(500) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `importe` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`zonas`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ticket`);

--
-- Indices de la tabla `scanner`
--
ALTER TABLE `scanner`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`nMatricula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
