-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2017 a las 04:52:53
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ceramica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombreCate` varchar(100) CHARACTER SET utf8 NOT NULL,
  `descripCate` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombreCate`, `descripCate`) VALUES
(3, 'Decoración', 'Elementos para decorar cualquier habitación '),
(4, 'Bebidas', 'asdfafasf'),
(5, 'Cocina', 'ajdnfabofybary');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentarios` int(11) NOT NULL,
  `nombreCom` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `mensaje` text CHARACTER SET utf8 NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventas`
--

CREATE TABLE `detalleventas` (
  `idDetalleventas` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `idVentas` int(11) NOT NULL,
  `cantidaddetalle` int(11) NOT NULL,
  `preciomenudeo` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalleventas`
--

INSERT INTO `detalleventas` (`idDetalleventas`, `idProducto`, `idVentas`, `cantidaddetalle`, `preciomenudeo`) VALUES
(1, 1, 2, 2, 123),
(2, 1, 2, 12, 123),
(3, 2, 2, 3, 1500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `iddireccion` int(11) NOT NULL,
  `estado` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ciudad` varchar(100) CHARACTER SET utf8 NOT NULL,
  `codigopostal` varchar(100) CHARACTER SET utf8 NOT NULL,
  `colonia` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `calle` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `imagen` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `nombrePro` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `descriPro` varchar(150) DEFAULT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `imagen`, `nombrePro`, `descriPro`, `codigo`, `precio`, `stock`, `idCategoria`) VALUES
(1, NULL, NULL, NULL, '04949845', 700, 20, 5),
(2, NULL, 'copa', 'copa tequilera', 'cfhjy', 50, 10, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cpostal` varchar(50) NOT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `privilegios` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `email`, `password`, `direccion`, `telefono`, `estado`, `cpostal`, `avatar`, `privilegios`) VALUES
(1, 'root', 'root@ale.com', 'armando', 'jazmin tarandacuao ', '42147985954', 'guanajuato', '38790', 'esdfsf', 1),
(2, 'Ale', 'ale@alex.com', '12345', 'vdfbgncgghn dfgh dfdfgh', '23435678', 'cbfnghndhn', '32456776543', NULL, 0),
(3, 'Ale', 'aleja@ale.com', '12345', 'dsfksmfks', '334567890', 'ñllknvuyvuy', '0987654', NULL, 1),
(4, 'Angela', 'angy@angy.com', '123', 'Neruife', '134567890', NULL, '2234456', NULL, 0),
(7, 'Mariana', 'maria@ma.com', '12345', 'jazmin, Las flores', '421874930', 'Guanajuato', '88000', NULL, 0),
(8, 'Mary', 'mary@ma.com', 'mar19', 'adkdfnsdn', '1554686667', 'Guanajuato', '38790', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVentas` int(11) NOT NULL,
  `fechaVenta` date NOT NULL,
  `montoFinal` double NOT NULL,
  `foliopago` varchar(150) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVentas`, `fechaVenta`, `montoFinal`, `foliopago`, `idProducto`, `idUsuario`) VALUES
(2, '2017-02-14', 1500, '', 0, 2),
(3, '2017-02-14', 2000, '', 0, 1),
(4, '2017-02-18', 1500, '69876fghbjniu765re', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentarios`),
  ADD KEY `fk_comentarios_usuarios` (`idUsuario`);

--
-- Indices de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD PRIMARY KEY (`idDetalleventas`),
  ADD KEY `fk_productos_has_ventas_productos` (`idProducto`),
  ADD KEY `fk_productos_has_ventas_ventas1` (`idVentas`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`iddireccion`),
  ADD KEY `fk_direccion_usuarios` (`idUsuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `fk_productos_categoria1` (`idCategoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVentas`),
  ADD KEY `fk_ventas_usuario1` (`idUsuario`),
  ADD KEY `fk_ventas_productos` (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentarios` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  MODIFY `idDetalleventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `iddireccion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVentas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD CONSTRAINT `fk_productos_has_ventas_productos` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_has_ventas_ventas1` FOREIGN KEY (`idVentas`) REFERENCES `ventas` (`idVentas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `fk_direccion_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categoria1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_ventas_usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
