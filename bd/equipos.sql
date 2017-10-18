-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2017 at 09:15 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soporte`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipos`
--

CREATE TABLE `equipos` (
  `idEquipos` int(3) NOT NULL,
  `nInventario` int(10) DEFAULT NULL,
  `procedencia` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `equipo` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `marca` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `modelo` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `estModelo` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `serie` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `marcaDisco` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `capDisco` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `ram` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `fechaIngreso` date DEFAULT NULL,
  `fechaSalida` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`idEquipos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idEquipos` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
