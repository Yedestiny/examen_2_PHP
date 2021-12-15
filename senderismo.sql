-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2021 a las 13:39:11
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `senderismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(55) COLLATE utf8_bin NOT NULL DEFAULT '',
  `descripcion` mediumtext COLLATE utf8_bin DEFAULT NULL,
  `desnivel` int(6) UNSIGNED NOT NULL DEFAULT 0,
  `distancia` int(11) NOT NULL DEFAULT 0,
  `notas` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `dificultad` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `titulo`, `descripcion`, `desnivel`, `distancia`, `notas`, `dificultad`) VALUES
(1, 'Cuerda Larga: puerto Navacerrada a Puerto la Morcuera', 'Cuerda Larga Desde el Puerto de Navacerrada al Puerto de la Morcuera, con sus 9 cumbres superiores a 2000 m.', 1000, 21, 'Las Montañas o Cumbres que conforman la Cuerda Larga ordenados de Oeste a Este son:\r\n- Bola del Mundo 2.258 m\r\n- Alto de Valdemartin, 2.283 m\r\n- Cabeza de Hierro Menor, 2.376 m\r\n- Cabeza de Hierro May', '2'),
(2, 'De Barcelona a Valldoreix por Collserola', 'Ruta en bicicleta que cruza Collserola, sale de Barcelona por la carretera de Cerdanyola y nos deja en la estacion de los FGC de Valldoreix', 277, 21, 'Estupenda ruta para empezar.', '1'),
(3, 'Los 4 puentes. ', 'Manzaneros. Avila', 538, 43, 'Dehesa del Pinar (Dehesa \"de los perrillos\"), camino paralelo a la via del tren, Castro de las Cogotas, Arco de Conejeros, Cardeñosa (1º puente), encinar (2º, 3º y 4º puente), La Alamedilla, Las porte', '2'),
(5, 'anton', 'la cosa de la cosa de la cosa', 234, 4234, 'no se puede', 'duro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas_comentarios`
--

CREATE TABLE `rutas_comentarios` (
  `id` int(10) NOT NULL,
  `id_ruta` int(11) NOT NULL DEFAULT 0,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `texto` varchar(200) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rutas_comentarios`
--

INSERT INTO `rutas_comentarios` (`id`, `id_ruta`, `nombre`, `texto`, `fecha`) VALUES
(1, 1, 'Pedro', '¡Me ha encantado la ruta!', '2021-06-23'),
(2, 2, 'Irene', 'Gracias por la información.', '2021-06-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `titulo` (`titulo`);

--
-- Indices de la tabla `rutas_comentarios`
--
ALTER TABLE `rutas_comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rutascomentarios` (`id_ruta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rutas_comentarios`
--
ALTER TABLE `rutas_comentarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rutas_comentarios`
--
ALTER TABLE `rutas_comentarios`
  ADD CONSTRAINT `fk_rutascomentarios` FOREIGN KEY (`id_ruta`) REFERENCES `rutas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
