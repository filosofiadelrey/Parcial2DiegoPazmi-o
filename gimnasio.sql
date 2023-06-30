-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 12:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gimnasio`
--
CREATE DATABASE IF NOT EXISTS `gimnasio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gimnasio`;

-- --------------------------------------------------------

--
-- Table structure for table `asistencias`
--
-- Creation: Jun 30, 2023 at 02:06 PM
-- Last update: Jun 30, 2023 at 05:08 PM
--

DROP TABLE IF EXISTS `asistencias`;
CREATE TABLE `asistencias` (
  `ID_Asistencia` int(11) NOT NULL,
  `ID_Cliente` int(11) DEFAULT NULL,
  `ID_Clase` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `asistencias`:
--   `ID_Cliente`
--       `clientes` -> `ID_Cliente`
--   `ID_Clase`
--       `clases` -> `ID_Clase`
--

--
-- Dumping data for table `asistencias`
--

INSERT INTO `asistencias` (`ID_Asistencia`, `ID_Cliente`, `ID_Clase`, `Fecha`) VALUES
(3, 2, 3, '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `clases`
--
-- Creation: Jun 30, 2023 at 02:06 PM
-- Last update: Jun 30, 2023 at 05:07 PM
--

DROP TABLE IF EXISTS `clases`;
CREATE TABLE `clases` (
  `ID_Clase` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `ID_Instructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `clases`:
--   `ID_Instructor`
--       `instructores` -> `ID_Instructor`
--

--
-- Dumping data for table `clases`
--

INSERT INTO `clases` (`ID_Clase`, `Nombre`, `ID_Instructor`) VALUES
(3, 'Bicicleta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--
-- Creation: Jun 30, 2023 at 02:06 PM
-- Last update: Jun 30, 2023 at 04:21 PM
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `ID_Cliente` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `clientes`:
--

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`ID_Cliente`, `Nombre`) VALUES
(2, 'Diego');

-- --------------------------------------------------------

--
-- Table structure for table `instructores`
--
-- Creation: Jun 30, 2023 at 02:06 PM
-- Last update: Jun 30, 2023 at 05:07 PM
--

DROP TABLE IF EXISTS `instructores`;
CREATE TABLE `instructores` (
  `ID_Instructor` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `instructores`:
--

--
-- Dumping data for table `instructores`
--

INSERT INTO `instructores` (`ID_Instructor`, `Nombre`) VALUES
(1, 'Carlos');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--
-- Creation: Jun 30, 2023 at 05:00 PM
-- Last update: Jun 30, 2023 at 05:01 PM
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `roles`:
--

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `role_id`) VALUES
(1, 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Jun 30, 2023 at 03:54 PM
-- Last update: Jun 30, 2023 at 05:02 PM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `users`:
--   `role_id`
--       `roles` -> `id`
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'diego', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`ID_Asistencia`),
  ADD KEY `ID_Cliente` (`ID_Cliente`),
  ADD KEY `ID_Clase` (`ID_Clase`);

--
-- Indexes for table `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`ID_Clase`),
  ADD KEY `ID_Instructor` (`ID_Instructor`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Indexes for table `instructores`
--
ALTER TABLE `instructores`
  ADD PRIMARY KEY (`ID_Instructor`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `ID_Asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clases`
--
ALTER TABLE `clases`
  MODIFY `ID_Clase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `instructores`
--
ALTER TABLE `instructores`
  MODIFY `ID_Instructor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`ID_Cliente`) REFERENCES `clientes` (`ID_Cliente`),
  ADD CONSTRAINT `asistencias_ibfk_2` FOREIGN KEY (`ID_Clase`) REFERENCES `clases` (`ID_Clase`);

--
-- Constraints for table `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`ID_Instructor`) REFERENCES `instructores` (`ID_Instructor`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
