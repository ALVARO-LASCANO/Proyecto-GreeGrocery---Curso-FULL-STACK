-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2023 a las 14:57:38
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `greengrocery`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `tituloProducto` varchar(50) NOT NULL,
  `precioProducto` float NOT NULL,
  `urlProducto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `tituloProducto`, `precioProducto`, `urlProducto`) VALUES
(9, 'Manzanas', 100, 'archivos/productos/Manzanas-30-03-23_181032.jpg'),
(10, 'Peras', 450, 'archivos/productos/Peras-30-03-23_181044.jpg'),
(11, 'Naranja', 750, 'archivos/productos/Naranja-30-03-23_181059.jpg'),
(12, 'Pomelo Tucumano', 680, 'archivos/productos/Pomelo-30-03-23_181125.jpg'),
(13, 'Durazno', 890, 'archivos/productos/Durazno-30-03-23_181136.jpg'),
(14, 'Mandarina', 250, 'archivos/productos/Mandarina-30-03-23_181147.jpg'),
(15, 'Granadas x unid', 90, 'archivos/productos/Granadasxunidad-30-03-23_181247.jpg'),
(16, 'Frutillas', 280, 'archivos/productos/Frutillas-30-03-23_181302.jpg'),
(17, 'Ciruelas', 400, 'archivos/productos/Ciruelas-30-03-23_182424.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `email`, `pass`, `avatar`) VALUES
(4, 'Nikolas ', 'Monsalve ', 'niko@correo.com', '$2y$10$hBEJOfSsZqI/QdSdECTe..rpJYuddAh/jaIFFmHkEt3', 'archivos/usuarios/Nikolas-Monsalve.png'),
(6, 'Franco', 'Pineda', 'franco@correo.com', '$2y$10$hIBO7Gv4qo/CnHhO5MYc8OUwLRZhp.VNZv0EP2fsB6O', 'archivos/usuarios/Franco-Pineda.png'),
(7, 'Ricard', 'Pineda', 'ricardo@correo.com', '$2y$10$vhEDzKoP7TOoeY.OgIXvCOjT7UQedqnwLrItI6V7v73', 'archivos/usuarios/Ricard-Pineda.png'),
(9, 'Juan Ignacio', 'Sanchez', 'sanchez@correo.com', '$2y$10$TQBldmDYa0ODNBbk4jwhOOQ2s4Cooca7EqEsqckAdYq', 'archivos/usuarios/Juan Ignacio-Sanchez.png'),
(11, 'Administrador ', 'Principal', 'admin@correo.com', '$2y$10$B7TwPYJ57s4amOJJL7CT7eTnED5othju9hPR7IL/txAht.1mxvsbK', 'archivos/usuarios/Administrador -Principal.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
