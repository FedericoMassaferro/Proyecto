-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2018 a las 21:12:51
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebareporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_estudio`
--

CREATE TABLE IF NOT EXISTS `datos_estudio` (
  `id` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `datos` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_estudio`
--

INSERT INTO `datos_estudio` (`id`, `area`, `categoria`, `datos`, `fecha`) VALUES
(1, 1, 'Hematies', 5, '2018-05-11'),
(2, 1, 'Hemoglobina', 14.5, '2018-05-11'),
(3, 1, 'Hematocrito', 43, '2018-05-11'),
(4, 1, 'Volumen Corpuscular Medio', 91, '2018-05-11'),
(5, 1, 'Hemoglobina Corps. Media', 29, '2018-05-11'),
(6, 1, 'Conc. Hem. Corps. Media', 35, '2018-05-11'),
(7, 1, 'Anchura Dist. Hematies', 12, '2018-05-11'),
(8, 1, 'Plaquetas', 350, '2018-05-11'),
(9, 1, 'Leulocitos', 10, '2018-05-11'),
(10, 1, 'Neutrofilos (10^3/uL)', 6.4, '2018-05-11'),
(11, 1, 'Neutrofilos(%)', 64.5, '2018-05-11'),
(12, 1, 'Linfocitos(10^3/uL)', 4.73, '2018-05-11'),
(13, 1, 'Linfocitos(%)', 39.5, '2018-05-11'),
(14, 1, 'Monocitos(10^3/uL)', 0.76, '2018-05-11'),
(15, 1, 'Monocitos(%)', 8.2, '2018-05-11'),
(16, 1, 'Eosinofilos(10^3/uL)', 0.5, '2018-05-11'),
(17, 1, 'Eosinofilos(%)', 6.8, '2018-05-11'),
(18, 1, 'Basofilos(10^3/uL)', 0.15, '2018-05-11'),
(19, 1, 'Basofilos(%)', 2, '2018-05-11'),
(20, 1, 'Vel. Sedimentacion Gl.', 8, '2018-05-11'),
(21, 1, 'Glucosa', 105, '2018-05-13'),
(22, 1, 'Urea', 43, '2018-05-11'),
(23, 1, 'Creatinina', 1.05, '2018-05-11'),
(24, 1, 'Acido Urico', 5.47, '2018-05-11'),
(25, 1, 'Aspartato Aminotransferasa', 35, '2018-05-11'),
(26, 1, 'Alanina Aminotransferasa', 37, '2018-05-11'),
(27, 1, 'Gamma Glutamiltransferasa', 48.9, '2018-05-11'),
(28, 1, 'Bilirrubina Total', 0.87, '2018-05-11'),
(31, 1, 'Colesterol Total', 160, '2018-05-11'),
(32, 1, 'Colesterol HDL', 40, '2018-05-11'),
(33, 1, 'Colesterol LDL', 115, '2018-05-11'),
(34, 1, 'Triglirecidos', 182, '2018-05-11'),
(35, 1, 'Hierro', 140, '2018-05-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoja_analisis`
--

CREATE TABLE IF NOT EXISTS `hoja_analisis` (
  `id_hoja` int(11) NOT NULL,
  `paciente` varchar(40) NOT NULL,
  `analisis` varchar(40) NOT NULL,
  `medico` varchar(40) NOT NULL,
  `clave` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hoja_analisis`
--

INSERT INTO `hoja_analisis` (`id_hoja`, `paciente`, `analisis`, `medico`, `clave`) VALUES
(1, '47402192', '1', 'Roberto Bolainas', 99944449);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE IF NOT EXISTS `laboratorio` (
  `id` int(11) NOT NULL,
  `paciente` int(30) NOT NULL,
  `tipo_estudio` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`id`, `paciente`, `tipo_estudio`, `area`, `fecha`) VALUES
(1, 48194501, 'Estudio de Sangre', 'Laboratorio', '2018-05-11'),
(2, 47402192, 'Estudio de Orina', 'Laboratorio', '2018-05-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `dni` int(30) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `edad` int(10) NOT NULL,
  `sexo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`dni`, `nombre`, `edad`, `sexo`) VALUES
(47402192, 'Ezequiel Mondar', 31, 'Masculino'),
(48194501, 'Mariano Bambres', 23, 'Masculino'),
(48298103, 'Luciana Wendill', 27, 'Femenino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_estudio`
--
ALTER TABLE `datos_estudio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hoja_analisis`
--
ALTER TABLE `hoja_analisis`
  ADD PRIMARY KEY (`id_hoja`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_estudio`
--
ALTER TABLE `datos_estudio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `hoja_analisis`
--
ALTER TABLE `hoja_analisis`
  MODIFY `id_hoja` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
