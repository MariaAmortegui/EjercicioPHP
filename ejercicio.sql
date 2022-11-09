-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2022 a las 13:56:38
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejercicio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `programa` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `programa`) VALUES
(1, 'Maria del Pilar', 'Amortegui', 'maria.amortegui111@misena.edu.co', 2147483647, 'ADSO'),
(2, 'Juan', 'Perez', 'juan.perez@misena.edu.co', 123456789, 'ADSI'),
(3, 'Luis', 'Perez', 'luis.perez@misena.edu.co', 123456789, 'COCINA'),
(4, 'Juan', 'Rodriguez', 'juan.rodriguez@misena.edu.co', 123456789, 'ADMON'),
(5, 'Felipe', 'Mendoza', 'felipe.mendoza@misena.edu.co', 123456789, 'RH'),
(6, 'Camila', 'Colomba', 'camila.colomba@misena.edu.co', 123456789, 'RN'),
(7, 'Andres', 'Silva', 'andres.silva@misena.edu.co', 123456789, 'ADSO'),
(12, 'Luis', 'Perez', 'luis.perez@misena.edu.co', 123456789, 'COCINA'),
(13, 'Juan', 'Rodriguez', 'juan.rodriguez@misena.edu.co', 123456789, 'ADMON'),
(14, 'Felipe', 'Mendoza', 'felipe.mendoza@misena.edu.co', 123456789, 'RH'),
(15, 'Camila', 'Colomba', 'camila.colomba@misena.edu.co', 123456789, 'RN'),
(16, 'Andres', 'Silva', 'andres.silva@misena.edu.co', 123456789, 'ADSO'),
(21, 'Juan', 'Gonzalez', 'juan.gonzalez@misena.edu.co', 1234567889, 'ALTURAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `programa` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idnovedad` int(10) DEFAULT NULL,
  `respuesta` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `coordinador`
--

INSERT INTO `coordinador` (`id`, `nombre`, `apellido`, `correo`, `programa`, `idnovedad`, `respuesta`) VALUES
(1, 'Carlos', 'Cortes', 'carlos.cortes@sena.edu.co', 'ADSO', 1, 'Para dar respuesta a su peticion en la que expone un interrogante respecto del tratamiento a empresas obligadas a la contratacion de aprendices'),
(2, 'Fernando', 'Rodriguez', 'fernando.rodriguez@misena.edu.co', 'COCINA', 1, 'Lorem ipsum'),
(3, 'nada', 'nada', 'nada@nada.co', 'nada', 0, 'nada'),
(4, 'nada', 'nada', 'nada@nada.co', 'nada', 0, 'nada'),
(5, 'nada', 'nada', 'nada@nada.co', 'nada', 0, 'nada'),
(6, 'nada', 'nada', 'nada@nada.co', 'nada', 0, 'nada'),
(7, 'nada', 'nada', 'nada@nada.co', 'nada', 0, 'nada'),
(8, 'nada', 'nada', 'nada@nada.co', 'nada', 0, 'nada'),
(9, 'nada', 'nada', 'nada@nada.co', 'nada', 0, 'nada'),
(10, 'nada', 'nada', 'nada@nada.co', 'nada', 0, 'nada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `id` int(10) NOT NULL,
  `idalumno` int(10) DEFAULT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idcoordinador` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `novedad`
--

INSERT INTO `novedad` (`id`, `idalumno`, `tipo`, `descripcion`, `idcoordinador`) VALUES
(1, 1, 'Peticion', 'Buen dia, que pasa cuando una empresa que tiene ma', 1),
(2, 2, 'Queja', 'nada', 2),
(3, 2, 'reclamo', 'nada', 2),
(4, 2, 'nada', 'nada', 2),
(5, 2, 'nada', 'nada', 2),
(6, 2, 'nada', 'nada', 2),
(7, 2, 'nada', 'nada', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idalumno` (`idalumno`),
  ADD KEY `idcoordinador` (`idcoordinador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
