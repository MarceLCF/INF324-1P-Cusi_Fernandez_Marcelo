-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2023 a las 05:59:43
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mibd_cusi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `user` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id`, `nombre`, `user`, `contrasena`) VALUES
('01', 'Fernando Ramirez Perez', 'fernan1', '12345'),
('02', 'Carla Gutierrez Mammani', 'carlaGM', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `ci` int(11) NOT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `nombres` varchar(30) NOT NULL,
  `depto` varchar(20) NOT NULL,
  `genero` varchar(1) NOT NULL,
  `fecha_nac` varchar(10) NOT NULL,
  `nota` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`ci`, `apellidos`, `nombres`, `depto`, `genero`, `fecha_nac`, `nota`, `usuario`, `contrasena`) VALUES
(100233, 'Quispe Conde', 'Juan', 'Santa Cruz', 'M', '23/01/2001', 69, 'juanc', '1234'),
(100238, 'Mamani Rojas', 'Lucia', 'Cochabamba', 'F', '11/08/2000', 81, 'luciaM', '1234'),
(100288, 'Martinez Laime', 'Noemi', 'Tarija', 'F', '01/10/2000', 72, 'noemiML', '1234'),
(100333, 'Cruz Jimenez', 'Andres', 'La Paz', 'M', '12/03/2001', 77, 'andresC', '1234'),
(100615, 'Alave', 'Mauricio', 'Oruro', 'M', '18/05/2001', 62, 'mauricio', '1234'),
(100633, 'Cusi Fernandez', 'Marcelo', 'Beni', 'M', '08/12/2000', 27, 'user', '1234'),
(100722, 'Patzi Flores', 'Elena', 'La Paz', 'F', '02/07/2000', 80, 'elenaF', '1234'),
(100736, 'Torrez', 'Sebastian', 'La Paz', 'M', '17/06/2001', 85, 'sebasT', '1234'),
(100762, 'Fernandez Salas', 'Paola', 'La Paz', 'F', '19/12/2001', 75, 'paolaf', '1234'),
(100819, 'Gutierrez Limachi', 'Laura', 'Santa Cruz', 'F', '14/12/2002', 78, 'lauraG', '1234'),
(100823, 'Mendoza Quispe', 'Gabriel', 'Tarija', 'M', '30/11/2002', 71, 'gabrielQ', '1234'),
(100921, 'Condori Almeida', 'Adriana', 'Oruro', 'F', '11/08/2002', 68, 'adriana', '1234'),
(103382, 'Luna Rosales', 'Fabricio', 'Santa Cruz', 'F', '15/09/2001', 71, 'fabricio', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`ci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
