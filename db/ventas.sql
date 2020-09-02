-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-09-2020 a las 00:04:54
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_items`
--

CREATE TABLE `auth_items` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `icon` varchar(45) DEFAULT NULL,
  `ruta` varchar(80) NOT NULL,
  `auth_modulos_id` int(11) NOT NULL,
  `estado` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_modulos`
--

CREATE TABLE `auth_modulos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_perfiles`
--

CREATE TABLE `auth_perfiles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado` tinyint(4) DEFAULT 1,
  `staff` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_perfiles`
--

INSERT INTO `auth_perfiles` (`id`, `nombre`, `estado`, `staff`) VALUES
(1, 'Administrador', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_usuarios`
--

CREATE TABLE `auth_usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(80) NOT NULL,
  `estado` tinyint(4) DEFAULT 1,
  `auth_perfiles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_usuarios`
--

INSERT INTO `auth_usuarios` (`id`, `username`, `password`, `estado`, `auth_perfiles_id`) VALUES
(1, 'abeck', '12345678', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles_modulos`
--

CREATE TABLE `perfiles_modulos` (
  `auth_perfiles_id` int(11) NOT NULL,
  `auth_modulos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auth_items`
--
ALTER TABLE `auth_items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `auth_modulos`
--
ALTER TABLE `auth_modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `auth_perfiles`
--
ALTER TABLE `auth_perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `auth_usuarios`
--
ALTER TABLE `auth_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auth_modulos`
--
ALTER TABLE `auth_modulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
