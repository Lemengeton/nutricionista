-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< HEAD:nutricionista.sql
-- Tiempo de generación: 23-06-2022 a las 22:43:43
=======
-- Tiempo de generación: 23-06-2022 a las 22:35:31
>>>>>>> main:recetas.sql
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nutricionista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `tiempo` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `calorias` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

<<<<<<< HEAD:nutricionista.sql
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `DNI` int(50) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `contraseña` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`DNI`, `nombre`, `apellido`, `contraseña`) VALUES
(44962456, 'Aleja', 'bug', '123456');
=======
--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id`, `nombre`, `tiempo`, `descripcion`, `imagen`, `calorias`) VALUES
(4, 'atawt', '123gaf', 'aftgagag', 'images/logo.png', '');
>>>>>>> main:recetas.sql

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
