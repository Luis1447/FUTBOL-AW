-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2019 a las 17:16:05
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `futbol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equips`
--

CREATE TABLE `equips` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `localitat` varchar(30) COLLATE utf8_bin NOT NULL,
  `web` varchar(100) COLLATE utf8_bin NOT NULL,
  `escut` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `equips`
--

INSERT INTO `equips` (`codi`, `nom`, `localitat`, `web`, `escut`) VALUES
(1, 'Futbol Club Barcelona', 'Barcelona', 'https://www.fcbarcelona.cat/ca/futbol/primer-equip/jugadors', 'http://img.irtve.es/css/resources/deportes/equipos/44948-barcelona.png'),
(2, 'Real madrid', 'Madrid', 'https://www.realmadrid.com/', 'https://upload.wikimedia.org/wikipedia/en/thumb/5/56/Real_Madrid_CF.svg/1200px-Real_Madrid_CF.svg.pn'),
(3, 'Valencia', 'Valencia', 'http://www.valenciacf.com/portadas/splash', 'http://as00.epimg.net/img/comunes/fotos/fichas/equipos/large/17.png'),
(4, 'atletico de madrid', 'madrid', 'http://www.atleticodemadrid.com/', 'http://as00.epimg.net/img/comunes/fotos/fichas/equipos/large/42.png'),
(5, 'Sevilla Fútbol Club', 'Sevilla', 'https://www.sevillafc.es/', 'https://upload.wikimedia.org/wikipedia/ca/thumb/b/b4/Sevilla_cf_logo.png/180px-Sevilla_cf_logo.png'),
(6, 'Manchester United Football Clu', 'Manchester', 'https://es.wikipedia.org/wiki/Manchester_United_Football_Club', 'http://as00.epimg.net/img/comunes/fotos/fichas/equipos/large/67.png'),
(7, 'Betis', 'Sevilla', 'https://www.realbetisbalompie.es/', 'https://upload.wikimedia.org/wikipedia/an/f/f1/Real_Betis.png'),
(8, 'rayo vallecano', 'Madrid', 'http://www.rayovallecano.es/', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/EscudoRayo.svg/240px-EscudoRayo.svg.png'),
(9, 'Girona FC', 'Girona', 'https://www.gironafc.cat/es', 'https://files.proyectoclubes.com/girona/201808/662x372a_17124645gironafc_logo.png'),
(10, 'Eibar', 'Eibar', 'http://www.sdeibar.com/', 'http://statics.proyectoclubes.com/images/eibar/opengraph_image.png'),
(12, 'Levante', 'Valencia', 'https://www.levante-emv.com/', 'https://seeklogo.com/images/L/Levante_Uni__n_Deportiva-logo-5240250923-seeklogo.com.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titols`
--

CREATE TABLE `titols` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `codiequip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `titols`
--

INSERT INTO `titols` (`codi`, `nom`, `codiequip`) VALUES
(1, 'Copas del rey:19', 2),
(2, 'Copa del rey:30', 1),
(3, 'No tiene titulos', 10),
(4, 'No tiene titulos', 12),
(5, 'No tiene titulos', 9),
(6, '5 títulos de liga', 6),
(7, '5 UEFA ', 5),
(8, 'No tiene titulos', 8),
(9, 'No tiene titulos', 7),
(10, '1 Supercopa de España', 3),
(11, 'Los 26 títulos oficiales', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equips`
--
ALTER TABLE `equips`
  ADD PRIMARY KEY (`codi`);

--
-- Indices de la tabla `titols`
--
ALTER TABLE `titols`
  ADD PRIMARY KEY (`codi`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equips`
--
ALTER TABLE `equips`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `titols`
--
ALTER TABLE `titols`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
