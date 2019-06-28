-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2019 a las 16:29:02
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `educacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estu` varchar(10) NOT NULL,
  `nombre_estu` varchar(50) NOT NULL,
  `apellido_estu` varchar(50) NOT NULL,
  `contra_estu` varchar(100) NOT NULL,
  `direccion_estu` varchar(100) NOT NULL,
  `ciudad_estu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estu`, `nombre_estu`, `apellido_estu`, `contra_estu`, `direccion_estu`, `ciudad_estu`) VALUES
('0117', 'elison', 'sanchez', 'elisoo', 'coma', 'san miguel'),
('0217', 'eli', 'isai', 'gona', 'sanchez', 'san'),
('1', 'isai', 'sanchez', '', 'comacaran', 'san miguel'),
('10', 'sdf|svd', 'sdv', 'sdf', 'sdf', 'sdf'),
('11', 'sv', 'sdf', 'sdf', 'sdf', 'sdf'),
('12', 'lskfj', 'sldkf', 'sdflk', 'sdlfkj', 'sdflkj'),
('13', 'elison', 'sanchez', '12345', 'asd', 'asf'),
('14', 'elison', 'sanchez', '12345', 'asd', 'asf'),
('2', 'Missell', 'Sanchez', '', 'comacaran', 'san miguel'),
('3', 'Angela', 'Sanchez', '', 'comacaran', 'san miguel'),
('4', 'Berta', 'Flores', '', 'comacaran', 'san miguel'),
('5', 'adsasd', 'sdfsf', '', 'sdffsdf', 'sdsdf'),
('6', 'sdsgfsg', 'sdfwfvdsv', '', 'sdfsdfv', 'dvdssv'),
('7', 'elison', 'asd', 'asdads', 'asdads', 'asdads'),
('9', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf'),
('lasÃ±jfp84', 'lkfjodu098|', 'lkfdj809q4u\'Â´q j0Ã¡Ã±', 'Ã±lkasjf84u', 'oisfj9834upru894u', '	erjqipowjr8321'),
('smis010417', 'sdij', 'sodifj', 'sdifj', 'sdoifj', 'sodij');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_use` int(11) NOT NULL,
  `nombre_user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estu`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_use`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_use` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
