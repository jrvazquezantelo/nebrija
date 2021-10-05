-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2021 a las 19:49:25
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nebrija`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `idEstudio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id`, `nombre`, `idEstudio`) VALUES
(1, 'Competencia comunicativa para profesionales de las TIC', 1),
(2, 'Estructura de datos', 1),
(3, 'Uso de bases de datos', 1),
(4, 'Estudios urbanos', 2),
(5, 'Instalaciones', 2),
(6, 'Anatomia', 3),
(7, 'Fisiologia', 3),
(8, 'Pediatria', 3),
(9, 'Cirurgia', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio`
--

CREATE TABLE `estudio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudio`
--

INSERT INTO `estudio` (`id`, `nombre`) VALUES
(1, 'Ingeneria en Sistemas'),
(2, 'Arquitectura '),
(3, 'Medicina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `nombre`) VALUES
(1, 'Antonio Posada'),
(2, 'Paul Dos Ramos'),
(3, 'Francisco Rivero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor-asignatura`
--

CREATE TABLE `profesor-asignatura` (
  `id` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  `idAsignatura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor-asignatura`
--

INSERT INTO `profesor-asignatura` (`id`, `idProfesor`, `idAsignatura`) VALUES
(1, 1, 2),
(2, 2, 9),
(3, 3, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEstudio` (`idEstudio`);

--
-- Indices de la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesor-asignatura`
--
ALTER TABLE `profesor-asignatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProfesor` (`idProfesor`),
  ADD KEY `idAsignatura` (`idAsignatura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `estudio`
--
ALTER TABLE `estudio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `profesor-asignatura`
--
ALTER TABLE `profesor-asignatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`idEstudio`) REFERENCES `estudio` (`id`);

--
-- Filtros para la tabla `profesor-asignatura`
--
ALTER TABLE `profesor-asignatura`
  ADD CONSTRAINT `profesor-asignatura_ibfk_1` FOREIGN KEY (`idAsignatura`) REFERENCES `asignatura` (`id`),
  ADD CONSTRAINT `profesor-asignatura_ibfk_2` FOREIGN KEY (`idProfesor`) REFERENCES `profesor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
