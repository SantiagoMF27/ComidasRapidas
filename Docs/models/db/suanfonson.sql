-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2021 a las 21:43:24
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `suanfonson`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(100) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL
) ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `celular`, `ciudad`, `direccion`) VALUES
(1, 'Alejandro', 'Gomez', '3164981794', 'Itagüí - Calatrava', 'Calle 63 58B-03'),
(2, 'Diomedes', 'Diaz', '3164981794', 'Envigado', 'Calle 63 58B-03'),
(3, 'Juan', 'Alvarado', '3164981794', 'Itagüí - Calatrava', 'Calle 63 58B-03'),
(4, 'Alejandro', 'Gomez', '3164981794', 'Bello', 'Calle 63 58B-03'),
(5, 'Juan', 'Gomez', '3164981794', 'Envigado', 'cl 34 cr 59'),
(6, 'Santiago', 'Manosalva', '3164981794', 'Itagüí - Calatrava', 'Calle 63 58B-03'),
(7, 'Santiago', 'Fernandez', '3164981794', 'planeta rica', 'df 5 n7'),
(8, 'Santiago', 'Fernandez', '3186498314', 'Medellin', 'df 5 n7'),
(9, 'Santiago', 'Fernandez', '3456872343', 'planeta rica', 'df 5 n7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_pedido`
--

CREATE TABLE `linea_pedido` (
  `id_linea` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL,
  `subtotal` double NOT NULL,
  `id_pedido` int(100) NOT NULL,
  `id_producto` int(100) NOT NULL
) ;

--
-- Volcado de datos para la tabla `linea_pedido`
--

INSERT INTO `linea_pedido` (`id_linea`, `cantidad`, `precio`, `subtotal`, `id_pedido`, `id_producto`) VALUES
(1, 2, 4500, 9000, 1, 2),
(2, 2, 2000, 22500, 2, 1),
(3, 1, 5000, 22500, 2, 4),
(4, 3, 4500, 22500, 2, 2),
(5, 2, 4500, 15000, 3, 2),
(6, 1, 6000, 15000, 3, 3),
(7, 1, 4000, 4000, 4, 10),
(8, 1, 2000, 2000, 5, 1),
(9, 1, 5999, 5999, 6, 9),
(10, 5, 4500, 22500, 7, 2),
(11, 2, 4500, 9000, 8, 2),
(12, 6, 5000, 36000, 9, 14),
(13, 1, 6000, 36000, 9, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(100) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(100) NOT NULL
) ;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `total`, `fecha`, `id_cliente`) VALUES
(1, '9000', '2020-12-10', 1),
(2, '22500', '2020-12-10', 2),
(3, '15000', '2020-12-11', 3),
(4, '4000', '2020-12-11', 4),
(5, '2000', '2020-12-11', 5),
(6, '5999', '2020-12-16', 6),
(7, '22500', '2020-12-22', 7),
(8, '9000', '2021-01-11', 8),
(9, '36000', '2021-01-13', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `existencias` int(10) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `activado` varchar(2) NOT NULL
);

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `precio`, `existencias`, `descripcion`, `foto`, `activado`) VALUES
(1, 'Alitas de Pollo', '2000', 10, 'Las mejores alitas de pollo', '../img/alitasdepollo.jpg', 'Si'),
(2, 'Perro Caliente con Verduras', '4500', 30, 'Se destacan por su tamaño.', '../img/perrocalienteconverduras.jpg', 'Si'),
(3, 'Salchipapa con Carne', '6000', 5, 'La mejor salchipapa con carne', '../img/salchipapaconcarne.jpg', 'Si'),
(4, 'Salchipapa Granade', '5000', 10, 'La mejor salchipapa', '../img/salchipapagrande.jpg', 'Si'),
(5, 'Papas a la Francesa', '9000', 20, 'La mejor papa a la francesa', '../img/papasfrancesa.jpg', 'Si'),
(7, 'Hamburguesa Doble', '5000', 10, 'La mejor hamburguesa', '../img/hamburguesaranchera.jpg', 'Si'),
(8, 'Carne Asada', '7000', 5, 'La mejor carne asada', '../img/carneasadalcarbon.jpg', 'Si'),
(9, 'Salchichas', '5999', 16, 'La mejor salchicha', '../img/salchicas.jpg', 'Si'),
(10, 'Sanduche', '4000', 10, 'El mejor sandwich', '../img/sandwichdoble.jpg', 'Si'),
(11, 'Perro Caliente', '5000', 15, 'Se destacan por su tamaño.', '../img/perrocalienteakihabara.jpg', 'Si'),
(12, 'Perro Caliente Tradicional', '7000', 5, 'La mejor perro caliente tradicional', '../img/perrocalientetradicional.jpg', 'Si'),
(13, 'Pollo Asado', '20000', 10, 'La mejor pollo asado, disfrútalo ya.', '../img/polloasado.jpg', 'Si'),
(14, 'Pan Con Cancer', '5000', 5, 'El mejor pan', '../img/hamburguesavegetariana.jpg', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_user` int(100) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_user`, `tipo`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(100) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(55) NOT NULL,
  `contrasena` varchar(55) NOT NULL,
  `id_tipo_user` int(100) NOT NULL,
  `fecha_registro` date NOT NULL
) ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `usuario`, `contrasena`, `id_tipo_user`, `fecha_registro`) VALUES
(1, 'John', 'Graciano', 'john@correo.com', 'john12', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, '2020-12-06'),
(2, 'Johann', 'Escobar', 'johann2@correo.com', 'johann30', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, '2020-12-06'),
(5, 'Santiago', 'Manosalva', 'santiago@correo.com', 'santiago27', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, '2020-12-06'),
(7, 'Carlos', 'Carmelas', 'carlos@correo.com', 'carlos45', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, '2020-12-07'),
(8, 'Alejandro', 'Gomez', 'alejo@correo.com', 'Alejandro23', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, '2020-12-09'),
(9, 'Diomedes', 'Diaz', 'diomendes@correo.com', 'diomedes35', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, '2020-12-10'),
(11, 'Juan', 'Gomez', 'juangomez@gmail.com', 'juan29', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, '2020-12-11'),
(12, 'Anderson', 'Cerezo', 'andersoncerezo03@outlook.com', 'dad0007', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 2, '2021-01-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `linea_pedido`
--
ALTER TABLE `linea_pedido`
  ADD PRIMARY KEY (`id_linea`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_user`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo_user` (`id_tipo_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `linea_pedido`
--
ALTER TABLE `linea_pedido`
  MODIFY `id_linea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `linea_pedido`
--
ALTER TABLE `linea_pedido`
  ADD CONSTRAINT `linea_pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `linea_pedido_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo_user`) REFERENCES `tipo_usuario` (`id_tipo_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
