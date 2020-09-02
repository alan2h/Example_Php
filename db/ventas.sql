-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2020 a las 20:38:02
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

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
-- Estructura de tabla para la tabla `auth_modulos`
--

CREATE TABLE `auth_modulos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `icon` varchar(45) DEFAULT NULL,
  `ruta` varchar(80) NOT NULL,
  `estado` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `auth_permisos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
