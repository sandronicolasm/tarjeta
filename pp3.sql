-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-02-2017 a las 11:12:10
-- Versión del servidor: 5.7.17-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pp3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campeonato`
--

CREATE TABLE `campeonato` (
  `id_camp` int(11) NOT NULL,
  `name_camp` varchar(255) NOT NULL,
  `fech_inic` date DEFAULT NULL,
  `fech_fina` date DEFAULT NULL,
  `prec_insc` int(11) DEFAULT NULL,
  `desc_camp` varchar(255) DEFAULT NULL,
  `id_comp` int(11) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `url_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `campeonato`
--

INSERT INTO `campeonato` (`id_camp`, `name_camp`, `fech_inic`, `fech_fina`, `prec_insc`, `desc_camp`, `id_comp`, `timestamp`, `url_foto`) VALUES
(1, 'Copa de Leche', '2016-11-23', '2016-11-30', 1000, '16 equipos, 2 grupos. Clasifican los 4 primeros de cada grupo. Premios hasta el tercer puesto', 2, NULL, 'http://images.et.eltiempo.digital/contenido/bogota/IMAGEN/IMAGEN-15871535-2.png'),
(2, 'Copa Challenger', '2016-11-25', '2016-12-08', 1500, '20 equipos, todos contra todos. Premios para los 5 primeros puestos', 4, NULL, 'http://images.et.eltiempo.digital/contenido/colombia/barranquilla/IMAGEN/IMAGEN-16414082-2.jpg'),
(3, 'Copa Amistad', '2016-12-05', '2016-12-23', 800, 'Cantidad de equipos ilimitados. Precio para el ganador solamente', 1, NULL, 'http://www.ohigginsfc.cl/wp-content/uploads/2014/09/Sub-15-vs-Audax.png'),
(4, 'Copa America', '2016-11-30', '2016-12-10', 1000, 'Premios para los 3 primeros puestos', 5, NULL, 'http://www.ohigginsfc.cl/wp-content/uploads/2014/10/Capos-del-Futuro-Grupo-4-1.jpg'),
(5, 'Copa Argentina', '2016-12-01', '2017-01-19', 2000, '16 equipos, 4 grupos de 4 equipos cada uno. Clasifican los 2 primeros de cada grupo. Premios para los primeros tres puestos: 1)$5000, 1 lechon y una caja de fernet. 2) $3000, 1 lechon y 3 fernet. 3) $1000, 5 pollos y 1 damajuana de vino', 3, NULL, 'http://assets.zocalo.com.mx/uploads/articles/2/13506497074.jpg'),
(6, 'Copa Master', '2016-11-24', '2016-12-23', 1000, 'Importantes premios', 6, NULL, 'http://www.zocalo.com.mx/images/uploads/articles/partidosamistosos.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancha`
--

CREATE TABLE `cancha` (
  `id_canch` int(11) NOT NULL,
  `name_canch` varchar(255) DEFAULT NULL,
  `cubi` tinyint(1) DEFAULT NULL,
  `prec_canch` int(11) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `id_capa` int(11) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `id_comp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cancha`
--

INSERT INTO `cancha` (`id_canch`, `name_canch`, `cubi`, `prec_canch`, `timestamp`, `id_capa`, `id_tipo`, `id_comp`) VALUES
(1, 'bombonera', 0, 550, NULL, 3, 1, 1),
(2, 'monumental', 0, 550, NULL, 2, 2, 1),
(3, 'cilindro', 1, 400, NULL, 1, 1, 1),
(4, '1', 0, 500, NULL, 2, 1, 3),
(5, '2', 0, 500, NULL, 2, 1, 3),
(6, '1', 1, 350, NULL, 1, 1, 2),
(7, '2', 0, 350, NULL, 1, 1, 2),
(8, '3', 0, 400, NULL, 2, 1, 2),
(9, '1', 0, 500, NULL, 2, 1, 4),
(10, '2', 0, 500, NULL, 3, 1, 4),
(11, '1', 0, 400, NULL, 1, 1, 5),
(12, '2', 0, 500, NULL, 2, 1, 5),
(13, '3', 0, 500, NULL, 2, 1, 5),
(14, '1', 0, 300, NULL, 1, 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacidad`
--

CREATE TABLE `capacidad` (
  `id_capa` int(11) NOT NULL,
  `capa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `capacidad`
--

INSERT INTO `capacidad` (`id_capa`, `capa`) VALUES
(1, 5),
(2, 7),
(3, 9),
(4, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciud` int(11) NOT NULL,
  `name_ciud` varchar(255) NOT NULL,
  `code` int(11) DEFAULT NULL,
  `id_prov` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciud`, `name_ciud`, `code`, `id_prov`) VALUES
(1, 'Rio Cuarto', 5800, 1),
(2, 'Las Higueras', 5805, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complejo`
--

CREATE TABLE `complejo` (
  `id_comp` int(11) NOT NULL,
  `name_comp` varchar(255) NOT NULL,
  `dire_comp` varchar(255) NOT NULL,
  `phon_comp` int(11) DEFAULT NULL,
  `mail_comp` varchar(255) DEFAULT NULL,
  `descrip_comp` varchar(255) DEFAULT NULL,
  `url_comp` varchar(255) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `complejo`
--

INSERT INTO `complejo` (`id_comp`, `name_comp`, `dire_comp`, `phon_comp`, `mail_comp`, `descrip_comp`, `url_comp`, `timestamp`) VALUES
(1, 'El Aguila', 'Rio Negro 584', 358458673, 'aguila@gmail.com', 'Complejo de canchas de futbol de pasto sintetico techadas o al aire libre, para 5, 7 o 9 jugadores', 'http://www.futbolmadero.com.ar/fotos/alta/foto012.jpg', '2016-11-22 20:00:44'),
(2, 'Trewa', 'Cordoba 210', 358467323, 'trewa@gmail.com', 'Canchas de futbol de pasto sintetico para 5 jugadores. Techadas y al aire libre', 'http://www.futbolmadero.com.ar/fotos/alta/foto008.jpg', '2016-11-22 20:00:47'),
(3, 'Campo Verde', 'Ruta 158 Km 110', 358419538, 'campoverde@gmail.com', 'Canchas de pasto sintetico para 7 jugadores.', 'http://www.futbolmadero.com.ar/fotos/alta/foto009.jpg', '2016-11-22 20:00:50'),
(4, 'Abasto Futbol', 'Obispo Buteler 1289', 358593726, 'abastofutbol@hotmail.com', 'Canchas con pasto sintetico para 7 jugadores', 'http://www.futbolmadero.com.ar/fotos/alta/foto043.jpg', '2016-11-22 20:00:54'),
(5, 'Super 7', 'Avenida Sabattini 1264', 358419393, 'super7@gmail.com', 'Canchas de 7 o 5 jugadores, de pasto sintetico al aire libre', 'http://www.lacancha.pe/wp-content/uploads/2014/09/IMG_2964-850x566.jpg', '2016-11-22 20:01:01'),
(6, 'Roja Directa', 'Bolivar 934', 358499985, 'rojadirecta@hotmail.com', 'Canchas techadas de pasto sintetico para 5 jugadores', 'http://www.futbolvieytes.com.ar/nuevas/foto008.jpg', '2016-11-22 20:01:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comp_redes`
--

CREATE TABLE `comp_redes` (
  `id_comp` int(11) NOT NULL,
  `id_rede` int(11) NOT NULL,
  `link_rede` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comp_redes`
--

INSERT INTO `comp_redes` (`id_comp`, `id_rede`, `link_rede`) VALUES
(1, 1, 'www.facebook.com'),
(1, 2, 'www.instagram.com'),
(1, 3, 'www.twitter.com'),
(2, 1, 'www.facebook.com'),
(2, 2, 'www.instagram.com'),
(2, 3, 'www.twitter.com'),
(3, 1, 'www.facebook.com'),
(3, 2, 'www.instagram.com'),
(3, 3, 'www.twitter.com'),
(4, 1, 'www.facebook.com'),
(4, 2, 'www.instagram.com'),
(4, 3, 'www.twitter.com'),
(5, 1, 'www.facebook.com'),
(5, 2, 'www.instagram.com'),
(5, 3, 'www.twitter.com'),
(6, 1, 'www.facebook.com'),
(6, 2, 'www.instagram.com'),
(6, 3, 'www.twitter.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comp_serv`
--

CREATE TABLE `comp_serv` (
  `id_comp` int(11) NOT NULL,
  `id_serv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comp_serv`
--

INSERT INTO `comp_serv` (`id_comp`, `id_serv`) VALUES
(1, 1),
(1, 2),
(1, 5),
(1, 6),
(1, 7),
(2, 1),
(2, 2),
(2, 5),
(2, 6),
(2, 7),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(4, 1),
(4, 2),
(4, 5),
(4, 6),
(4, 7),
(5, 1),
(5, 2),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(6, 1),
(6, 2),
(6, 5),
(6, 6),
(6, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidad`
--

CREATE TABLE `disponibilidad` (
  `id_disp` int(255) NOT NULL,
  `id_dia` int(255) DEFAULT NULL,
  `id_apertura` int(255) DEFAULT NULL,
  `id_cierre` int(255) DEFAULT NULL,
  `id_comp` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `id_fech` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expire_at` datetime DEFAULT NULL,
  `name_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dni_user` int(11) NOT NULL,
  `fnac_user` date DEFAULT NULL,
  `dire_user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phon_user` int(11) DEFAULT NULL,
  `id_comp` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expire_at`, `name_user`, `dni_user`, `fnac_user`, `dire_user`, `phon_user`, `id_comp`) VALUES
(1, 'SANDRO', 'sandro', 'sandro1991@hotmail.com.ar', 'sandro1991@hotmail.com.ar', 1, 'pn5q9jfrntwwgowk8oswoc0ss8040cc', '$2y$13$2n/jVeJ5x6x2ob0K516wEeLeQ3Dl.vzB4nNvTlhN.rBkLUO.VYNZK', '2017-02-20 11:09:39', 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', NULL, '', 0, NULL, NULL, NULL, NULL),
(2, 'pepe', 'pepe', 'dvdnvie@krirng.com', 'dvdnvie@krirng.com', 1, 'skmnbkatsg0w80wscc8wkgw4gs40gws', '$2y$13$U.SevRrUqdgDSmTtGUCILeRfDY60TC7b4a3QmflK6oeIsyzsX6Nq6', '2016-12-06 14:56:13', 0, NULL, NULL, NULL, 'a:0:{}', NULL, 'pepito', 354234646, '2011-01-01', 'suipacha 500', 35757838, NULL),
(3, 'admin', 'admin', 'admin@admin.com', 'admin@admin.com', 1, 'fryfoq4136gc8okssko8c4socg0g44k', '$2y$13$pJhZk.wYfzskFUKtFzGIsOooMc5YsQ.7lMjblgUIbzOhA.qDENXG6', '2017-02-20 10:54:53', 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', NULL, 'administrador', 3525353, '2016-09-18', 'sobremonte 1000', 353667377, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `imageName` varchar(255) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `id_comp` int(11) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `id_camp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`id_foto`, `imageName`, `updatedAt`, `id_comp`, `timestamp`, `id_camp`) VALUES
(1, 'http://www.futbolmadero.com.ar/fotos/alta/foto012.jpg', NULL, 1, NULL, NULL),
(2, 'http://www.futbolmadero.com.ar/fotos/alta/foto008.jpg', NULL, 2, NULL, NULL),
(3, 'http://www.futbolmadero.com.ar/fotos/alta/foto009.jpg', NULL, 3, NULL, NULL),
(4, 'http://www.futbolmadero.com.ar/fotos/alta/foto043.jpg', NULL, 4, NULL, NULL),
(5, 'http://www.lacancha.pe/wp-content/uploads/2014/09/IMG_2964-850x566.jpg', NULL, 5, NULL, NULL),
(6, 'http://www.futbolvieytes.com.ar/nuevas/foto008.jpg', NULL, 6, NULL, NULL),
(7, 'http://images.et.eltiempo.digital/contenido/bogota/IMAGEN/IMAGEN-15871535-2.png', NULL, NULL, NULL, 1),
(8, 'http://images.et.eltiempo.digital/contenido/colombia/barranquilla/IMAGEN/IMAGEN-16414082-2.jpg', NULL, NULL, NULL, 2),
(9, 'http://www.ohigginsfc.cl/wp-content/uploads/2014/09/Sub-15-vs-Audax.png', NULL, NULL, NULL, 3),
(10, 'http://www.ohigginsfc.cl/wp-content/uploads/2014/10/Capos-del-Futuro-Grupo-4-1.jpg', NULL, NULL, NULL, 4),
(11, 'http://assets.zocalo.com.mx/uploads/articles/2/13506497074.jpg', NULL, NULL, NULL, 5),
(12, 'http://www.zocalo.com.mx/images/uploads/articles/partidosamistosos.jpg', NULL, NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora`
--

CREATE TABLE `hora` (
  `id_hora` int(11) NOT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hora`
--

INSERT INTO `hora` (`id_hora`, `hora`) VALUES
(1, '14:00:00'),
(2, '15:00:00'),
(3, '16:00:00'),
(4, '17:00:00'),
(5, '18:00:00'),
(6, '19:00:00'),
(7, '20:00:00'),
(8, '21:00:00'),
(9, '22:00:00'),
(10, '23:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora_fecha`
--

CREATE TABLE `hora_fecha` (
  `id_hofe` int(11) NOT NULL,
  `id_hora` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id_prov` int(11) NOT NULL,
  `name_prov` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id_prov`, `name_prov`) VALUES
(1, 'Cordoba'),
(2, 'Buenos Aires');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id_rede` int(11) NOT NULL,
  `name_rede` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id_rede`, `name_rede`) VALUES
(1, 'Facebook'),
(2, 'Instagram'),
(3, 'Twitter');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_rese` int(11) NOT NULL,
  `id_canch` int(11) DEFAULT NULL,
  `id_usua` int(11) DEFAULT NULL,
  `id_hofe` int(11) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semana`
--

CREATE TABLE `semana` (
  `id_dia` int(255) NOT NULL,
  `nom_dia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_Serv` int(11) NOT NULL,
  `name_serv` varchar(255) NOT NULL,
  `prec_serv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_Serv`, `name_serv`, `prec_serv`) VALUES
(1, 'Banos', 0),
(2, 'Duchas', 0),
(3, 'Quincho', 200),
(4, 'Asador', 100),
(5, 'Choripan', 35),
(6, 'Gaseosa', 30),
(7, 'Cerveza', 40),
(8, 'Papas Fritas', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcancha`
--

CREATE TABLE `tcancha` (
  `id_tipo` int(11) NOT NULL,
  `name_tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tcancha`
--

INSERT INTO `tcancha` (`id_tipo`, `name_tipo`) VALUES
(3, 'Cemento'),
(2, 'Pasto Natural'),
(1, 'Pasto Sintetico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campeonato`
--
ALTER TABLE `campeonato`
  ADD PRIMARY KEY (`id_camp`),
  ADD KEY `IDX_722DB8CA402A7338` (`id_comp`);

--
-- Indices de la tabla `cancha`
--
ALTER TABLE `cancha`
  ADD PRIMARY KEY (`id_canch`),
  ADD KEY `IDX_9D09C782DF6812DC` (`id_capa`),
  ADD KEY `IDX_9D09C782402A7338` (`id_comp`),
  ADD KEY `IDX_9D09C782FB0D0145` (`id_tipo`);

--
-- Indices de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  ADD PRIMARY KEY (`id_capa`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciud`),
  ADD KEY `IDX_8E86059ECD2D7CDD` (`id_prov`);

--
-- Indices de la tabla `complejo`
--
ALTER TABLE `complejo`
  ADD PRIMARY KEY (`id_comp`);

--
-- Indices de la tabla `comp_redes`
--
ALTER TABLE `comp_redes`
  ADD PRIMARY KEY (`id_comp`,`id_rede`),
  ADD KEY `id_comp` (`id_comp`),
  ADD KEY `id_rede` (`id_rede`);

--
-- Indices de la tabla `comp_serv`
--
ALTER TABLE `comp_serv`
  ADD PRIMARY KEY (`id_comp`,`id_serv`),
  ADD KEY `id_comp` (`id_comp`),
  ADD KEY `id_serv` (`id_serv`);

--
-- Indices de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  ADD PRIMARY KEY (`id_disp`);

--
-- Indices de la tabla `fecha`
--
ALTER TABLE `fecha`
  ADD PRIMARY KEY (`id_fech`);

--
-- Indices de la tabla `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_camp` (`id_camp`),
  ADD KEY `id_comp` (`id_comp`);

--
-- Indices de la tabla `hora`
--
ALTER TABLE `hora`
  ADD PRIMARY KEY (`id_hora`);

--
-- Indices de la tabla `hora_fecha`
--
ALTER TABLE `hora_fecha`
  ADD PRIMARY KEY (`id_hofe`),
  ADD KEY `id_hora` (`id_hora`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id_rede`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_rese`),
  ADD KEY `id_canch` (`id_canch`),
  ADD KEY `id_usua` (`id_usua`),
  ADD KEY `id_hofe` (`id_hofe`);

--
-- Indices de la tabla `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indices de la tabla `semana`
--
ALTER TABLE `semana`
  ADD PRIMARY KEY (`id_dia`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_Serv`);

--
-- Indices de la tabla `tcancha`
--
ALTER TABLE `tcancha`
  ADD PRIMARY KEY (`id_tipo`),
  ADD UNIQUE KEY `UQ_Tcancha_id_tipo` (`id_tipo`),
  ADD UNIQUE KEY `UQ_Tcancha_name_tipo` (`name_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campeonato`
--
ALTER TABLE `campeonato`
  MODIFY `id_camp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cancha`
--
ALTER TABLE `cancha`
  MODIFY `id_canch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  MODIFY `id_capa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `disponibilidad`
--
ALTER TABLE `disponibilidad`
  MODIFY `id_disp` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fecha`
--
ALTER TABLE `fecha`
  MODIFY `id_fech` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `hora`
--
ALTER TABLE `hora`
  MODIFY `id_hora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `hora_fecha`
--
ALTER TABLE `hora_fecha`
  MODIFY `id_hofe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id_rede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_rese` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `semana`
--
ALTER TABLE `semana`
  MODIFY `id_dia` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_Serv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tcancha`
--
ALTER TABLE `tcancha`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campeonato`
--
ALTER TABLE `campeonato`
  ADD CONSTRAINT `FK_Campeonato_Complejo` FOREIGN KEY (`id_comp`) REFERENCES `complejo` (`id_comp`);

--
-- Filtros para la tabla `cancha`
--
ALTER TABLE `cancha`
  ADD CONSTRAINT `FK_Cancha_Capacidad` FOREIGN KEY (`id_capa`) REFERENCES `capacidad` (`id_capa`),
  ADD CONSTRAINT `FK_Cancha_Complejo` FOREIGN KEY (`id_comp`) REFERENCES `complejo` (`id_comp`),
  ADD CONSTRAINT `FK_Cancha_Tcancha` FOREIGN KEY (`id_tipo`) REFERENCES `tcancha` (`id_tipo`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `FK_Ciudad_Provincia` FOREIGN KEY (`id_prov`) REFERENCES `provincia` (`id_prov`);

--
-- Filtros para la tabla `comp_redes`
--
ALTER TABLE `comp_redes`
  ADD CONSTRAINT `FK_Comp_redes_Complejo` FOREIGN KEY (`id_comp`) REFERENCES `complejo` (`id_comp`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Comp_redes_Redes` FOREIGN KEY (`id_rede`) REFERENCES `redes` (`id_rede`);

--
-- Filtros para la tabla `comp_serv`
--
ALTER TABLE `comp_serv`
  ADD CONSTRAINT `FK_Comp_serv_Complejo` FOREIGN KEY (`id_comp`) REFERENCES `complejo` (`id_comp`),
  ADD CONSTRAINT `FK_Comp_serv_Servicio` FOREIGN KEY (`id_serv`) REFERENCES `servicio` (`id_Serv`);

--
-- Filtros para la tabla `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`id_camp`) REFERENCES `campeonato` (`id_camp`),
  ADD CONSTRAINT `foto_ibfk_2` FOREIGN KEY (`id_comp`) REFERENCES `complejo` (`id_comp`);

--
-- Filtros para la tabla `hora_fecha`
--
ALTER TABLE `hora_fecha`
  ADD CONSTRAINT `FK_Hora_fecha_Hora` FOREIGN KEY (`id_hora`) REFERENCES `hora` (`id_hora`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `FK_Reserva_Cancha` FOREIGN KEY (`id_canch`) REFERENCES `cancha` (`id_canch`),
  ADD CONSTRAINT `FK_Reserva_Hora_fecha` FOREIGN KEY (`id_hofe`) REFERENCES `hora_fecha` (`id_hofe`),
  ADD CONSTRAINT `FK_Reserva_Usuario` FOREIGN KEY (`id_usua`) REFERENCES `fos_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
