-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2018 a las 04:27:32
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbchapitas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chapitas`
--

CREATE TABLE `chapitas` (
  `Numero` int(20) NOT NULL,
  `Tamano` varchar(20) NOT NULL,
  `Mascota` varchar(20) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Cliente` varchar(20) NOT NULL,
  `Petshop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chapitas`
--

INSERT INTO `chapitas` (`Numero`, `Tamano`, `Mascota`, `Telefono`, `Cliente`, `Petshop`) VALUES
(1, 'Gatito', 'Limona', '2236049503', 'Stella', '4'),
(4, 'Grande', 'Luna', '2235258000', 'Maria Rosa', '3'),
(8, 'Gatito', 'Peluda', '2234752228', 'Florencia', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `petshops`
--

CREATE TABLE `petshops` (
  `Numero` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `petshops`
--

INSERT INTO `petshops` (`Numero`, `Nombre`, `Direccion`) VALUES
(1, 'Veterinaria Libra', 'Santa Fe 2313'),
(2, 'Veterinaria Paso', 'Av. Paso 3102'),
(3, 'Veterinaria Sol', 'Av. Tejedor 2628'),
(4, 'Royal Pet', 'Libertad 4800'),
(5, 'Pet Mariela', 'Strobel 5700'),
(6, 'Pet Fantasma', 'Diag. EE UU 889');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuarioId` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UsuarioId`, `Email`, `Password`) VALUES
(1, 'administrador', 'administrador'),
(2, 'admin@admin.com', '123456'),
(3, 'magaliten', '36616668');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chapitas`
--
ALTER TABLE `chapitas`
  ADD PRIMARY KEY (`Numero`);

--
-- Indices de la tabla `petshops`
--
ALTER TABLE `petshops`
  ADD PRIMARY KEY (`Numero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuarioId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chapitas`
--
ALTER TABLE `chapitas`
  MODIFY `Numero` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `petshops`
--
ALTER TABLE `petshops`
  MODIFY `Numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UsuarioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
