-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2016 a las 04:27:38
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresas`
--
CREATE DATABASE IF NOT EXISTS `empresas` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `empresas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data`
--

CREATE TABLE `data` (
  `id` int(15) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_bin NOT NULL,
  `tipologia` text COLLATE utf8_bin NOT NULL,
  `pais` text COLLATE utf8_bin NOT NULL,
  `estado` text COLLATE utf8_bin NOT NULL,
  `ciudad` text COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `password` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `data`
--

INSERT INTO `data` (`id`, `nombre`, `tipologia`, `pais`, `estado`, `ciudad`, `descripcion`, `email`, `password`) VALUES
(1, 'tecnogg', 'SA', 'VE', 'apure', 'san fernando', 'Informatica Etc', 'danyhherrera390@hotmail.com', 123456789),
(4, 'lol22', 'SA', 'VE', '', '', 'adadsasdsda', '', 0),
(5, 'businnes', 'CO', 'EEUU', 'Michigan', 'Michigan', 'Telecomunicaciones', 'danyhherrera390@hotmail.com', 1234),
(6, 'empresa2', 'SA', 'VE', '', '', '', '', 0),
(15, 'sadasdsad', 'SA', 'VE', 'asd', 'asd', 'asd', 'danielbarrios20760933.3s1mtb@gmail.com', 0),
(16, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1234, '', '', '', '', '', '', '', 0),
(1235, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1236, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1237, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1238, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1239, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1240, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1241, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1242, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1243, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1244, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1245, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1246, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1247, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1248, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1249, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1250, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1251, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1252, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1253, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1254, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1255, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1256, 'bob', 'SA', 'VE', 'Ap', 'Sn', 'tele', 'dan@gmail.com', 1234),
(1257, 'ggg', 'CO', 'VE', 'aasd', 'asd', '12345', 'danielbarrios20760933.3s1mtb@gmail.com', 1234),
(1258, 'ggg', 'FU', 'ES', 'barcelona', 'onteniente', 'tele', 'danielbarrios20760933.3s1mtb@gmail.com', 1234);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `data`
--
ALTER TABLE `data`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1259;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
