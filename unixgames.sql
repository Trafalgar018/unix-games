-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2017 a las 03:58:52
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unixgames`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `name` tinytext NOT NULL,
  `genre` tinytext NOT NULL,
  `image` tinytext NOT NULL,
  `description` tinytext NOT NULL,
  `developer` tinytext NOT NULL,
  `date` date DEFAULT NULL,
  `id` int(11) NOT NULL,
  `online` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`name`, `genre`, `image`, `description`, `developer`, `date`, `id`, `online`) VALUES
('Alien Arena', 'Shooter', 'http://red.planetarena.org/images/top_img.jpg', 'Space Shooter.', 'COR Entertainment', '2004-10-01', 6, 0),
('Red Eclipse', 'Shooter', 'no', 'shooter', 'open source', '2017-11-01', 9, 0),
('minecraft', 'Adventure', 'no', 'survival', 'mojang', '2017-11-10', 10, 0),
('Counter-Strike: Global Offensive', 'Shooter', 'http://www.3djuegos.com/juegos/7909/counterstrike_global_offensive/fotos/ficha/counterstrike_global_offensive-1942556.jpg', 'shooter', 'Valve', '2012-08-21', 14, 0),
('ASCII PORTAL', 'Strategy', 'https://i.emezeta.com/cache/img/1284_o.jpg', 'Game Portal with ASCII !!', 'Radsoft', '2009-02-05', 16, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
