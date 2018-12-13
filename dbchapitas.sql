-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 11:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbchapitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapitas`
--

CREATE TABLE `chapitas` (
  `Numero` int(11) NOT NULL,
  `Tamano` varchar(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Cliente` varchar(100) NOT NULL,
  `Petshop` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapitas`
--

INSERT INTO `chapitas` (`Numero`, `Tamano`, `Nombre`, `Telefono`, `Cliente`, `Petshop`) VALUES
(1, 'Grande', 'Renata', '2236034246', 'Magali Fernandez', 'A La Cucha'),
(2, 'Grande', 'Dorita', '2236697977', 'Matias Bruno', 'A La Cucha');

-- --------------------------------------------------------

--
-- Table structure for table `petshops`
--

CREATE TABLE `petshops` (
  `Numero` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petshops`
--

INSERT INTO `petshops` (`Numero`, `Nombre`, `Direccion`) VALUES
('1', 'A La Cucha', 'Cordoba 3100');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuarioId` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`UsuarioId`, `Email`, `Password`) VALUES
(1, 'admin@admin.com', 'administrador');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapitas`
--
ALTER TABLE `chapitas`
  ADD PRIMARY KEY (`Numero`),
  ADD UNIQUE KEY `NUMERO_UNIQUE` (`Numero`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuarioId`),
  ADD UNIQUE KEY `Password_UNIQUE` (`Password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapitas`
--
ALTER TABLE `chapitas`
  MODIFY `Numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UsuarioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
