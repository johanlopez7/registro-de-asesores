-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2022 a las 22:30:50
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
-- crear una Base de datos con el nombre9: `db_test_johan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adviser1`
--

CREATE TABLE `adviser1` (
  `id` int(6) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cedula` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `cliente` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `sede` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `id_user` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `adviser1`
--

INSERT INTO `adviser1` (`id`, `nombre`, `cedula`, `telefono`, `fecha_nacimiento`, `genero`, `cliente`, `sede`, `id_user`, `edad`) VALUES
(13, 'saed', '123456', '312234556', '2022-03-16', 'f', 'asdf', 'Buro', 'johan', 0),
(16, 'salome', '123456', '1234567', '0000-00-00', 'f', 'cas', 'Buro', 'ger', 1234),
(20, 'asd', 'sdgd', 'adsfe', '2022-03-28', 'femenino', 'cvfg', 'Buro', 'aetsydy', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `password`, `status`) VALUES
(1, 'comunicaciones', 'Reg1234', 'A'),
(2, 'gestion', 'Ges1234', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adviser1`
--
ALTER TABLE `adviser1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adviser1`
--
ALTER TABLE `adviser1`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
