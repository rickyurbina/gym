-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2022 at 07:57 PM
-- Server version: 8.0.30
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int NOT NULL,
  `idSocio` int NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Dumping data for table `asistencia`
--

INSERT INTO `asistencia` (`id`, `idSocio`, `fecha`) VALUES
(1, 5, '2021-12-18 10:15:18'),
(2, 10, '2022-05-12 12:02:52'),
(3, 1, '2022-05-12 14:13:47'),
(4, 1, '2022-06-01 21:46:55'),
(5, 1, '2022-12-03 12:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `telefono` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `tipoCliente` int NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombres`, `apellidos`, `telefono`, `email`, `tipoCliente`, `fechaNacimiento`, `fechaRegistro`) VALUES
(1, 'Ricardo', 'Urbina', '6251221438', 'ricky@gmail.com', 1, '1975-11-05', '2021-12-08'),
(5, 'Melany', 'Urbina Garcia', '6251065030', 'mell@gmail.com', 2, '2005-03-03', '2021-12-10'),
(6, 'Monica', 'Garcia Arpero', '625', 'monica@gmail.com', 3, '1979-05-04', '2021-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `pagos`
--

CREATE TABLE `pagos` (
  `id` int NOT NULL,
  `idSocio` int NOT NULL,
  `cantidad` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pagos`
--

INSERT INTO `pagos` (`id`, `idSocio`, `cantidad`, `fecha`) VALUES
(1, 11, 1, '2022-12-13'),
(2, 10, 1, '2022-12-13'),
(3, 6, 3, '2022-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `precios`
--

CREATE TABLE `precios` (
  `id` int NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `costo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `precios`
--

INSERT INTO `precios` (`id`, `categoria`, `costo`) VALUES
(1, 'Individual', 500),
(2, 'Familiar', 400);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `idProducto` int NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `marca` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `contenido` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `costo` double NOT NULL,
  `precioPublico` double NOT NULL DEFAULT '0',
  `stock` int NOT NULL DEFAULT '0',
  `imagen` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `marca`, `contenido`, `costo`, `precioPublico`, `stock`, `imagen`) VALUES
(5, 'Proteina Mass Tech Extreme 2000', 'Muscletech', '7 Libras', 900, 1100, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `socios`
--

CREATE TABLE `socios` (
  `idSocio` int NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `telefono` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `contacto` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `tipoSocio` int NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaRegistro` date NOT NULL,
  `fechaUltimoPago` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Dumping data for table `socios`
--

INSERT INTO `socios` (`idSocio`, `nombres`, `apellidos`, `telefono`, `contacto`, `tipoSocio`, `fechaNacimiento`, `fechaRegistro`, `fechaUltimoPago`) VALUES
(1, 'Ricardo', 'Urbina', '6251221438', 'ricky@gmail.com', 1, '1975-11-05', '2022-12-08', '2022-12-13 13:04:16'),
(5, 'Melany', 'Urbina Garcia', '6251065030', 'mell@gmail.com', 2, '2005-03-03', '2022-12-10', '2022-11-20 11:15:45'),
(6, 'Monica', 'Garcia Arpero', '625', 'monica@gmail.com', 3, '1979-05-04', '2022-12-11', '2022-12-13 13:42:16'),
(9, 'Alan', 'Urbina Najera', '6251234444', 'alan@gmail.com', 1, '2021-12-14', '2022-11-05', '2022-12-12 11:16:30'),
(10, 'Venta', 'General', '6251234455', 'correo@gmail.com', 1, '2022-05-12', '2022-11-11', '2022-12-13 13:37:33'),
(11, 'Olaf', 'Urbina', '6251064590', 'Julio Urbina', 1, '2022-12-11', '2022-12-13', '2022-12-13 13:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `nickName` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `telefono` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `permisos` varchar(13) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `password` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellidos`, `nickName`, `email`, `telefono`, `permisos`, `password`) VALUES
(15, 'Melany Fernanda', 'Urbina Garcia', 'Mell', 'mell@gmail.com', '6251065030', 'Administrador', '909090');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `nickName` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `telefono` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `password` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `personal` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci COMMENT 'Informacion personal del usuario que sera mostrada en el perfil de usuario',
  `titulo` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL COMMENT 'Titulo que tiene en la empresa. ej. Gerente, Agente de ventas, etc',
  `permisos` varchar(13) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL COMMENT 'El tipo de acceso que tiene en el sistema ej. Administrador, usuario, etc',
  `foto` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci,
  `estado` varchar(1) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL COMMENT 'Activo / Inactivo',
  `ultimoLogin` datetime DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
  `sociales` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci COMMENT 'Los diferentes links a las redes sociales del usuario para ser contactado por los clientes.  En formato JSON'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `nickName`, `telefono`, `email`, `password`, `personal`, `titulo`, `permisos`, `foto`, `estado`, `ultimoLogin`, `fechaNac`, `sociales`) VALUES
(13, 'Ricardo', 'Urbina Najera', 'Rick', '6251221438', 'r', 'r', '', 'Gerente', 'administrador', 'assets/images/faces/1.jpg', '1', '0000-00-00 00:00:00', '1991-09-27', '{\"Facebook\":\"\",\"Twitter\":\"\",\"LinkedIn\":\"\"}'),
(24, 'Johan Ricardo', 'Urina', 'Ricky', '6251234444', 'rick@gmail.com.mx', 'r', NULL, NULL, 'usuario', NULL, NULL, NULL, NULL, NULL),
(25, 'Melany', 'Urbina Garcia', 'Mell', '6251065030', 'mell@gmail.com', '909090', NULL, NULL, 'usuario', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int NOT NULL,
  `idCliente` int NOT NULL,
  `productos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `total` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`idVenta`, `idCliente`, `productos`, `total`, `fecha`) VALUES
(1, 1, '[{\"idProducto\":\"5\",\"nombreProducto\":\"Proteina Mass Tech Extreme 2000\",\"cantidad\":1,\"precio\":1100}]', 1100, '2022-04-25'),
(2, 6, '[{\"idProducto\":\"5\",\"nombreProducto\":\"Proteina Mass Tech Extreme 2000\",\"cantidad\":1,\"precio\":1100}]', 4400, '2022-04-25'),
(3, 1, '[{\"idProducto\":\"5\",\"nombreProducto\":\"Proteina Mass Tech Extreme 2000\",\"cantidad\":1,\"precio\":1100}]', 1100, '2022-05-12'),
(4, 10, '[{\"idProducto\":\"5\",\"nombreProducto\":\"Proteina Mass Tech Extreme 2000\",\"cantidad\":1,\"precio\":1100}]', 1100, '2022-05-12'),
(5, 10, '[{\"idProducto\":\"5\",\"nombreProducto\":\"Proteina Mass Tech Extreme 2000\",\"cantidad\":1,\"precio\":1100}]', 1100, '2022-12-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indexes for table `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`idSocio`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `precios`
--
ALTER TABLE `precios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `socios`
--
ALTER TABLE `socios`
  MODIFY `idSocio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
