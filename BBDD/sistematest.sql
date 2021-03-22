-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2021 a las 20:39:04
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistematest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidad`
--

CREATE TABLE `nacionalidad` (
  `idnacionalidad` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `nacionalidad`
--

INSERT INTO `nacionalidad` (`idnacionalidad`, `nombre`) VALUES
(1, 'Peruana'),
(2, 'Colombiana'),
(3, 'Argentina'),
(4, 'Ecuatoriana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `idtipodocumento` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`idtipodocumento`, `nombre`) VALUES
(1, 'DNI'),
(2, 'Pasaporte'),
(3, 'Documento Extranjería');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(20) NOT NULL,
  `clave` varchar(500) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idnacionalidad` int(11) NOT NULL,
  `idtipodocumento` int(11) NOT NULL,
  `ndocumento` varchar(50) NOT NULL,
  `amaterno` varchar(50) NOT NULL,
  `apaterno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `clave`, `tipo`, `idUsuario`, `idnacionalidad`, `idtipodocumento`, `ndocumento`, `amaterno`, `apaterno`) VALUES
('Daniel', 'b2774c26445bc1e124c301d45d6b31b4', 'administrador', 1, 2, 2, '34343421', 'Rivas', 'Mata'),
('Gonzalo', '25d55ad283aa400af464c76d713c07ad', 'supervisor', 2, 1, 1, '44486252', 'Ramirez', 'Mendoza'),
('Jose', '47bce5c74f589f4867dbd57e9ca9f808', 'administrador', 3, 1, 1, '46523433', 'Moreno', 'Bardales'),
('Ali', 'b2774c26445bc1e124c301d45d6b31b4', 'administrador', 5, 0, 0, '34546', 'Ramirez', 'Mendoza'),
('Carlos', '81dc9bdb52d04dc20036dbd8313ed055', 'administrador', 6, 0, 0, '123456', 'Bardales', 'Bardales');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  ADD PRIMARY KEY (`idnacionalidad`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`idtipodocumento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  MODIFY `idnacionalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `idtipodocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
