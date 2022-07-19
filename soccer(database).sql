-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2022 a las 04:28:12
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `soccer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `email`, `first_name`, `last_name`, `address`) VALUES
(3, 'camaca,nmafg@gmail.com', 'nm,nm,n,', ',n,nm,n,', 'nm,n,nm,nm,'),
(4, 'aaaaaaaa@gmail.com', 'sadasda', 'dasdsdasda', 'dasdsdasdas'),
(5, 'camacafffffafg@gmail.com', 'fcgfgf', 'xfgfxfxg', 'xfgfgxfgx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegs`
--

CREATE TABLE `juegs` (
  `id` int(11) NOT NULL,
  `equipo1` varchar(50) NOT NULL,
  `equipo2` varchar(50) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegs`
--

INSERT INTO `juegs` (`id`, `equipo1`, `equipo2`, `hora`) VALUES
(1, 'chivas', 'america', '10:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soccernews`
--

CREATE TABLE `soccernews` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `note` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `soccernews`
--

INSERT INTO `soccernews` (`id`, `title`, `note`) VALUES
(1, 'Chivas: Cuatro jugadores del Rebaño no estarían en los planes de Ricardo Cadena', 'De acuerdo con Natalia León, reportera en FOX Sports, Eduardo ‘Chofis’ López quedó libre luego de su paso por el San José Earthquakes y estaría nuevamente a disposición de Chivas; sin embargo, el equipo tapatío ya le estaría buscando algún acomodo e incluso utilizarlo como moneda de cambio.\n\nOtro jugador que saldría del equipo dirigido por Ricardo Cadena sería Josecarlos Vanrankin luego de culminar su etapa con el Portland Timbers. El futbolista estaría en la misma situación que Chofis López, así que podríamos verlo en un nuevo equipo en el siguiente torneo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaligamx`
--

CREATE TABLE `tablaligamx` (
  `id` int(11) NOT NULL,
  `equipo` varchar(50) NOT NULL,
  `puntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(120) NOT NULL,
  `grupo` varchar(50) NOT NULL,
  `ingenieria` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `creditos` int(6) NOT NULL,
  `pg` int(11) NOT NULL,
  `ps` int(11) NOT NULL,
  `pb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `grupo`, `ingenieria`, `usuario`, `creditos`, `pg`, `ps`, `pb`) VALUES
(3, 'Rafael', 'Alba', 'rafael.alba@gmail.com', 'hola123', '4°A BIS', 'Software', 'rafa', 10000, 0, 0, 0),
(11, 'Adrian', 'Gómez', 'adrianG@gmail.com', 'hola123', '5°B', 'ingenieria', 'AdrianVV1', 6000, 0, 4, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juegs`
--
ALTER TABLE `juegs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `soccernews`
--
ALTER TABLE `soccernews`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tablaligamx`
--
ALTER TABLE `tablaligamx`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `juegs`
--
ALTER TABLE `juegs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `soccernews`
--
ALTER TABLE `soccernews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tablaligamx`
--
ALTER TABLE `tablaligamx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
