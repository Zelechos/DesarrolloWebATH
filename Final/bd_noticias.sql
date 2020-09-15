-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2019 a las 21:31:12
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_noticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) DEFAULT NULL,
  `idnoticia` int(11) NOT NULL,
  `comentario` varchar(255) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` smallint(6) NOT NULL,
  `imagen` varchar(100) COLLATE utf8_bin NOT NULL,
  `titulo` varchar(255) COLLATE utf8_bin NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `imagen`, `titulo`, `texto`, `fecha`) VALUES
(15, 'gripe.jpg', 'GRIPE H1N1', 'Confirman los dos casos de gripe del tipo AH1N1 en Santa Cruz', '2019-06-14 00:00:00'),
(16, 'antofagasta.jpg', 'Antofagasta sigue sorprendiendo en la Liga', 'Sigue haciendo historia. En su primera participación en la Liga Nacional de Futsal, el equipo de Antofagasta avanzó a las semifinales e inscribió su nombre entre los cuatro mejores equipos del país. Anoche venció 8-4 a Fantasmas Morales Moralitos, en el coliseo Jorge Revilla Aldana.', '2019-07-02 00:00:00'),
(17, 'boa.jpg', 'Revelan que BoA desvió recursos de las reservas y subió sus gastos', 'El fiscal Marcelo Soza convoc? al Cardenal Julio Terrazas en calidad de testigo para que haga declaraciones soa aerolínea usó más del 35%, de $us 17,5 millones, destinado para la modernización de su flota, en comprar repuestos. En 2018 los costos operativos subieron un 9,5% y llegaron a Bs 161,5 millones\r\n', '2019-08-30 16:24:54'),
(18, 'php.png', 'Cómo subir proyecto PHP que usa composer a un servidor que solo admite FTP', 'He desarrollado en local un proyecto de aplicación web con PHP. Generalmente uso Composer para instalar las dependencias del proyecto y, una vez desplegado en el servidor de producción lanzo los comandos de Composer correspondientes para instalar las dependencias en el servidor.\r\n\r\nSin embargo, el dominio que me ofrece mi cliente está en un servidor que no permite acceso por SSH. Sólo puedo subir los archivos por FTP. Es un atraso, pero es así.', '2019-09-03 00:00:00'),
(19, 'cartagena.jpg', '¿La de Messi? Cartagena sortea la Copa América Colombia y Argentina 2020', '\r\nPuede ser la última aparición de Messi en el torneo continental, y de local. Aunque el trofeo se alzará en Barranquilla, lejos de Buenos Aires. Los partidos de la Copa América 2020, la primera con sede doble, se sortearán este martes en la ciudad colombiana de Cartagena.', '2019-11-19 00:00:00'),
(20, 'dellien.jpg', 'Dellien se mete en semifinales tras eliminar al argentino Bagnis', 'El boliviano venció por 2-0 y se instaló en las ‘semis’ del Challenger de Guayaquil. El nacional es favorito para ganar el título en el torneo ecuatoriano.', '2019-11-20 00:00:00'),
(21, '', 'Muchos Narcos', 'Muchos narcos en todas partes ', '2019-12-02 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` smallint(6) NOT NULL,
  `correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `nombrecompleto` varchar(100) COLLATE utf8_bin NOT NULL,
  `nivel` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `password`, `nombrecompleto`, `nivel`) VALUES
(1, 'admin@noticias.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Juan Perez Chacon', 1),
(2, 'usuario@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Felipe Castaños', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo` (`titulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
