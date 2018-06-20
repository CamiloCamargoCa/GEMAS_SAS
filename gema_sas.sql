-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2018 a las 02:37:54
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gema_sas`
--
create database gema_sas;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nombre`, `apellido`, `estado`) VALUES
(1, 'juan234@loquesea.com', 'Juan', 'Perez', 1),
(2, 'juan234@loquesea.com', 'Rodrigo', 'Perez', 1),
(3, 'juan324@loquesea.com', 'Juan', 'Perz', 1),
(4, 'juan15@loquesea.com', 'Juan', 'Perez', 2),
(5, 'juan11@loquesea.com', 'Juan', 'Perez', 2),
(6, 'juan12@loquesea.com', 'Juan', '', 2),
(7, 'juan0@loquesea.com', 'Juan', 'Perez', 3),
(8, 'juan9@loquesea.com', 'JuliÃ¡n', 'Perez', 3),
(9, 'juan9@loquesea.com', 'Roberto', 'Perez', 3),
(10, 'juan8@loquesea.com', 'Juan', 'Perez', 3),
(11, 'juan7@loquesea.com', 'Juan', '', 1),
(12, 'juan6@loquesea.com', 'Juan', 'Perez', 3),
(13, 'juan5@loquesea.com', 'Pedro', 'Perez', 1),
(14, 'juan4@loquesea.com', 'AndrÃ©s', 'Perez', 3),
(15, 'juan3@loquesea.com', 'Juan', '', 1),
(16, 'juan2@loquesea.com', 'Juan', 'Perez', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
