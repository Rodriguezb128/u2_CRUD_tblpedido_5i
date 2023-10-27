-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2023 a las 20:52:20
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sportlife`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedido`
--

CREATE TABLE `tbl_pedido` (
  `id_pedido` int(100) NOT NULL,
  `id_producto` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `iva` int(100) NOT NULL,
  `entregado` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `contado` int(100) UNSIGNED NOT NULL,
  `descuento` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_pedido`
--

INSERT INTO `tbl_pedido` (`id_pedido`, `id_producto`, `fecha`, `iva`, `entregado`, `foto`, `contado`, `descuento`) VALUES
(1, '20', '2023-10-28', 180, 'entregado', 'Foto', 1299, 0),
(4, '5', '2023-06-12', 10, 'entregado', 'foto', 1800, 5),
(5, '9', '2023-07-04', 10, 'no entregado', 'foto', 1650, 10),
(6, '4', '2023-11-10', 15, 'entregado', 'foto', 1570, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_pedido`
--
ALTER TABLE `tbl_pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD UNIQUE KEY `NIM_unique` (`fecha`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_pedido`
--
ALTER TABLE `tbl_pedido`
  MODIFY `id_pedido` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
