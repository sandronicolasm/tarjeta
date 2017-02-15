/*
Navicat MySQL Data Transfer

Source Server         : pp3
Source Server Version : 50552
Source Host           : localhost:3306
Source Database       : pp3

Target Server Type    : MYSQL
Target Server Version : 50552
File Encoding         : 65001

Date: 2017-02-03 20:00:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for campeonato
-- ----------------------------
DROP TABLE IF EXISTS `campeonato`;
CREATE TABLE `campeonato` (
  `id_camp` int(11) NOT NULL AUTO_INCREMENT,
  `name_camp` varchar(255) NOT NULL,
  `fech_inic` date DEFAULT NULL,
  `fech_fina` date DEFAULT NULL,
  `prec_insc` int(11) DEFAULT NULL,
  `desc_camp` varchar(255) DEFAULT NULL,
  `id_comp` int(11) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `url_foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_camp`),
  KEY `IDX_722DB8CA402A7338` (`id_comp`),
  CONSTRAINT `FK_Campeonato_Complejo` FOREIGN KEY (`id_comp`) REFERENCES `complejo` (`id_comp`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of campeonato
-- ----------------------------
INSERT INTO `campeonato` VALUES ('1', 'Copa de Leche', '2016-11-23', '2016-11-30', '1000', '16 equipos, 2 grupos. Clasifican los 4 primeros de cada grupo. Premios hasta el tercer puesto', '2', null, 'http://images.et.eltiempo.digital/contenido/bogota/IMAGEN/IMAGEN-15871535-2.png');
INSERT INTO `campeonato` VALUES ('2', 'Copa Challenger', '2016-11-25', '2016-12-08', '1500', '20 equipos, todos contra todos. Premios para los 5 primeros puestos', '4', null, 'http://images.et.eltiempo.digital/contenido/colombia/barranquilla/IMAGEN/IMAGEN-16414082-2.jpg');
INSERT INTO `campeonato` VALUES ('3', 'Copa Amistad', '2016-12-05', '2016-12-23', '800', 'Cantidad de equipos ilimitados. Precio para el ganador solamente', '1', null, 'http://www.ohigginsfc.cl/wp-content/uploads/2014/09/Sub-15-vs-Audax.png');
INSERT INTO `campeonato` VALUES ('4', 'Copa America', '2016-11-30', '2016-12-10', '1000', 'Premios para los 3 primeros puestos', '5', null, 'http://www.ohigginsfc.cl/wp-content/uploads/2014/10/Capos-del-Futuro-Grupo-4-1.jpg');
INSERT INTO `campeonato` VALUES ('5', 'Copa Argentina', '2016-12-01', '2017-01-19', '2000', '16 equipos, 4 grupos de 4 equipos cada uno. Clasifican los 2 primeros de cada grupo. Premios para los primeros tres puestos: 1)$5000, 1 lechon y una caja de fernet. 2) $3000, 1 lechon y 3 fernet. 3) $1000, 5 pollos y 1 damajuana de vino', '3', null, 'http://assets.zocalo.com.mx/uploads/articles/2/13506497074.jpg');
INSERT INTO `campeonato` VALUES ('6', 'Copa Master', '2016-11-24', '2016-12-23', '1000', 'Importantes premios', '6', null, 'http://www.zocalo.com.mx/images/uploads/articles/partidosamistosos.jpg');

-- ----------------------------
-- Table structure for cancha
-- ----------------------------
DROP TABLE IF EXISTS `cancha`;
CREATE TABLE `cancha` (
  `id_canch` int(11) NOT NULL AUTO_INCREMENT,
  `name_canch` varchar(255) DEFAULT NULL,
  `cubi` tinyint(1) DEFAULT NULL,
  `prec_canch` int(11) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `id_capa` int(11) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `id_comp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_canch`),
  KEY `IDX_9D09C782DF6812DC` (`id_capa`),
  KEY `IDX_9D09C782402A7338` (`id_comp`),
  KEY `IDX_9D09C782FB0D0145` (`id_tipo`),
  CONSTRAINT `FK_Cancha_Capacidad` FOREIGN KEY (`id_capa`) REFERENCES `capacidad` (`id_capa`),
  CONSTRAINT `FK_Cancha_Complejo` FOREIGN KEY (`id_comp`) REFERENCES `complejo` (`id_comp`),
  CONSTRAINT `FK_Cancha_Tcancha` FOREIGN KEY (`id_tipo`) REFERENCES `tcancha` (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cancha
-- ----------------------------
INSERT INTO `cancha` VALUES ('1', 'bombonera', '0', '550', null, '3', '1', '1');
INSERT INTO `cancha` VALUES ('2', 'monumental', '0', '550', null, '2', '2', '1');
INSERT INTO `cancha` VALUES ('3', 'cilindro', '1', '400', null, '1', '1', '1');
INSERT INTO `cancha` VALUES ('4', '1', '0', '500', null, '2', '1', '3');
INSERT INTO `cancha` VALUES ('5', '2', '0', '500', null, '2', '1', '3');
INSERT INTO `cancha` VALUES ('6', '1', '1', '350', null, '1', '1', '2');
INSERT INTO `cancha` VALUES ('7', '2', '0', '350', null, '1', '1', '2');
INSERT INTO `cancha` VALUES ('8', '3', '0', '400', null, '2', '1', '2');
INSERT INTO `cancha` VALUES ('9', '1', '0', '500', null, '2', '1', '4');
INSERT INTO `cancha` VALUES ('10', '2', '0', '500', null, '3', '1', '4');
INSERT INTO `cancha` VALUES ('11', '1', '0', '400', null, '1', '1', '5');
INSERT INTO `cancha` VALUES ('12', '2', '0', '500', null, '2', '1', '5');
INSERT INTO `cancha` VALUES ('13', '3', '0', '500', null, '2', '1', '5');
INSERT INTO `cancha` VALUES ('14', '1', '0', '300', null, '1', '1', '6');

-- ----------------------------
-- Table structure for capacidad
-- ----------------------------
DROP TABLE IF EXISTS `capacidad`;
CREATE TABLE `capacidad` (
  `id_capa` int(11) NOT NULL AUTO_INCREMENT,
  `capa` int(11) NOT NULL,
  PRIMARY KEY (`id_capa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of capacidad
-- ----------------------------
INSERT INTO `capacidad` VALUES ('1', '5');
INSERT INTO `capacidad` VALUES ('2', '7');
INSERT INTO `capacidad` VALUES ('3', '9');
INSERT INTO `capacidad` VALUES ('4', '11');

-- ----------------------------
-- Table structure for ciudad
-- ----------------------------
DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE `ciudad` (
  `id_ciud` int(11) NOT NULL AUTO_INCREMENT,
  `name_ciud` varchar(255) NOT NULL,
  `code` int(11) DEFAULT NULL,
  `id_prov` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ciud`),
  KEY `IDX_8E86059ECD2D7CDD` (`id_prov`),
  CONSTRAINT `FK_Ciudad_Provincia` FOREIGN KEY (`id_prov`) REFERENCES `provincia` (`id_prov`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ciudad
-- ----------------------------
INSERT INTO `ciudad` VALUES ('1', 'Rio Cuarto', '5800', '1');
INSERT INTO `ciudad` VALUES ('2', 'Las Higueras', '5805', '1');

-- ----------------------------
-- Table structure for comp_redes
-- ----------------------------
DROP TABLE IF EXISTS `comp_redes`;
CREATE TABLE `comp_redes` (
  `id_comp` int(11) NOT NULL,
  `id_rede` int(11) NOT NULL,
  `link_rede` varchar(255) NOT NULL,
  PRIMARY KEY (`id_comp`,`id_rede`),
  KEY `id_comp` (`id_comp`),
  KEY `id_rede` (`id_rede`),
  CONSTRAINT `FK_Comp_redes_Complejo` FOREIGN KEY (`id_comp`) REFERENCES `complejo` (`id_comp`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Comp_redes_Redes` FOREIGN KEY (`id_rede`) REFERENCES `redes` (`id_rede`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comp_redes
-- ----------------------------
INSERT INTO `comp_redes` VALUES ('1', '1', 'www.facebook.com');
INSERT INTO `comp_redes` VALUES ('1', '2', 'www.instagram.com');
INSERT INTO `comp_redes` VALUES ('1', '3', 'www.twitter.com');
INSERT INTO `comp_redes` VALUES ('2', '1', 'www.facebook.com');
INSERT INTO `comp_redes` VALUES ('2', '2', 'www.instagram.com');
INSERT INTO `comp_redes` VALUES ('2', '3', 'www.twitter.com');
INSERT INTO `comp_redes` VALUES ('3', '1', 'www.facebook.com');
INSERT INTO `comp_redes` VALUES ('3', '2', 'www.instagram.com');
INSERT INTO `comp_redes` VALUES ('3', '3', 'www.twitter.com');
INSERT INTO `comp_redes` VALUES ('4', '1', 'www.facebook.com');
INSERT INTO `comp_redes` VALUES ('4', '2', 'www.instagram.com');
INSERT INTO `comp_redes` VALUES ('4', '3', 'www.twitter.com');
INSERT INTO `comp_redes` VALUES ('5', '1', 'www.facebook.com');
INSERT INTO `comp_redes` VALUES ('5', '2', 'www.instagram.com');
INSERT INTO `comp_redes` VALUES ('5', '3', 'www.twitter.com');
INSERT INTO `comp_redes` VALUES ('6', '1', 'www.facebook.com');
INSERT INTO `comp_redes` VALUES ('6', '2', 'www.instagram.com');
INSERT INTO `comp_redes` VALUES ('6', '3', 'www.twitter.com');

-- ----------------------------
-- Table structure for comp_serv
-- ----------------------------
DROP TABLE IF EXISTS `comp_serv`;
CREATE TABLE `comp_serv` (
  `id_comp` int(11) NOT NULL,
  `id_serv` int(11) NOT NULL,
  PRIMARY KEY (`id_comp`,`id_serv`),
  KEY `id_comp` (`id_comp`),
  KEY `id_serv` (`id_serv`),
  CONSTRAINT `FK_Comp_serv_Complejo` FOREIGN KEY (`id_comp`) REFERENCES `complejo` (`id_comp`),
  CONSTRAINT `FK_Comp_serv_Servicio` FOREIGN KEY (`id_serv`) REFERENCES `servicio` (`id_Serv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comp_serv
-- ----------------------------
INSERT INTO `comp_serv` VALUES ('1', '1');
INSERT INTO `comp_serv` VALUES ('1', '2');
INSERT INTO `comp_serv` VALUES ('1', '5');
INSERT INTO `comp_serv` VALUES ('1', '6');
INSERT INTO `comp_serv` VALUES ('1', '7');
INSERT INTO `comp_serv` VALUES ('2', '1');
INSERT INTO `comp_serv` VALUES ('2', '2');
INSERT INTO `comp_serv` VALUES ('2', '5');
INSERT INTO `comp_serv` VALUES ('2', '6');
INSERT INTO `comp_serv` VALUES ('2', '7');
INSERT INTO `comp_serv` VALUES ('3', '1');
INSERT INTO `comp_serv` VALUES ('3', '2');
INSERT INTO `comp_serv` VALUES ('3', '3');
INSERT INTO `comp_serv` VALUES ('3', '4');
INSERT INTO `comp_serv` VALUES ('3', '5');
INSERT INTO `comp_serv` VALUES ('3', '6');
INSERT INTO `comp_serv` VALUES ('3', '7');
INSERT INTO `comp_serv` VALUES ('3', '8');
INSERT INTO `comp_serv` VALUES ('4', '1');
INSERT INTO `comp_serv` VALUES ('4', '2');
INSERT INTO `comp_serv` VALUES ('4', '5');
INSERT INTO `comp_serv` VALUES ('4', '6');
INSERT INTO `comp_serv` VALUES ('4', '7');
INSERT INTO `comp_serv` VALUES ('5', '1');
INSERT INTO `comp_serv` VALUES ('5', '2');
INSERT INTO `comp_serv` VALUES ('5', '4');
INSERT INTO `comp_serv` VALUES ('5', '5');
INSERT INTO `comp_serv` VALUES ('5', '6');
INSERT INTO `comp_serv` VALUES ('5', '7');
INSERT INTO `comp_serv` VALUES ('6', '1');
INSERT INTO `comp_serv` VALUES ('6', '2');
INSERT INTO `comp_serv` VALUES ('6', '5');
INSERT INTO `comp_serv` VALUES ('6', '6');
INSERT INTO `comp_serv` VALUES ('6', '7');

-- ----------------------------
-- Table structure for complejo
-- ----------------------------
DROP TABLE IF EXISTS `complejo`;
CREATE TABLE `complejo` (
  `id_comp` int(11) NOT NULL,
  `name_comp` varchar(255) NOT NULL,
  `dire_comp` varchar(255) NOT NULL,
  `phon_comp` int(11) DEFAULT NULL,
  `mail_comp` varchar(255) DEFAULT NULL,
  `descrip_comp` varchar(255) DEFAULT NULL,
  `url_comp` varchar(255) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of complejo
-- ----------------------------
INSERT INTO `complejo` VALUES ('1', 'El Aguila', 'Rio Negro 584', '358458673', 'aguila@gmail.com', 'Complejo de canchas de futbol de pasto sintetico techadas o al aire libre, para 5, 7 o 9 jugadores', 'http://www.futbolmadero.com.ar/fotos/alta/foto012.jpg', '2016-11-22 20:00:44');
INSERT INTO `complejo` VALUES ('2', 'Trewa', 'Cordoba 210', '358467323', 'trewa@gmail.com', 'Canchas de futbol de pasto sintetico para 5 jugadores. Techadas y al aire libre', 'http://www.futbolmadero.com.ar/fotos/alta/foto008.jpg', '2016-11-22 20:00:47');
INSERT INTO `complejo` VALUES ('3', 'Campo Verde', 'Ruta 158 Km 110', '358419538', 'campoverde@gmail.com', 'Canchas de pasto sintetico para 7 jugadores.', 'http://www.futbolmadero.com.ar/fotos/alta/foto009.jpg', '2016-11-22 20:00:50');
INSERT INTO `complejo` VALUES ('4', 'Abasto Futbol', 'Obispo Buteler 1289', '358593726', 'abastofutbol@hotmail.com', 'Canchas con pasto sintetico para 7 jugadores', 'http://www.futbolmadero.com.ar/fotos/alta/foto043.jpg', '2016-11-22 20:00:54');
INSERT INTO `complejo` VALUES ('5', 'Super 7', 'Avenida Sabattini 1264', '358419393', 'super7@gmail.com', 'Canchas de 7 o 5 jugadores, de pasto sintetico al aire libre', 'http://www.lacancha.pe/wp-content/uploads/2014/09/IMG_2964-850x566.jpg', '2016-11-22 20:01:01');
INSERT INTO `complejo` VALUES ('6', 'Roja Directa', 'Bolivar 934', '358499985', 'rojadirecta@hotmail.com', 'Canchas techadas de pasto sintetico para 5 jugadores', 'http://www.futbolvieytes.com.ar/nuevas/foto008.jpg', '2016-11-22 20:01:03');

-- ----------------------------
-- Table structure for disponibilidad
-- ----------------------------
DROP TABLE IF EXISTS `disponibilidad`;
CREATE TABLE `disponibilidad` (
  `id_disp` int(255) NOT NULL AUTO_INCREMENT,
  `id_dia` int(255) DEFAULT NULL,
  `id_apertura` int(255) DEFAULT NULL,
  `id_cierre` int(255) DEFAULT NULL,
  `id_comp` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_disp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of disponibilidad
-- ----------------------------

-- ----------------------------
-- Table structure for fecha
-- ----------------------------
DROP TABLE IF EXISTS `fecha`;
CREATE TABLE `fecha` (
  `id_fech` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id_fech`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fecha
-- ----------------------------

-- ----------------------------
-- Table structure for fos_user
-- ----------------------------
DROP TABLE IF EXISTS `fos_user`;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_comp` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of fos_user
-- ----------------------------
INSERT INTO `fos_user` VALUES ('1', 'SANDRO', 'sandro', 'sandro1991@hotmail.com.ar', 'sandro1991@hotmail.com.ar', '1', 'pn5q9jfrntwwgowk8oswoc0ss8040cc', '$2y$13$2n/jVeJ5x6x2ob0K516wEeLeQ3Dl.vzB4nNvTlhN.rBkLUO.VYNZK', '2016-11-22 15:52:08', '0', null, null, null, 'a:0:{}', null, '', '0', null, null, null, null);
INSERT INTO `fos_user` VALUES ('2', 'pepe', 'pepe', 'dvdnvie@krirng.com', 'dvdnvie@krirng.com', '1', 'skmnbkatsg0w80wscc8wkgw4gs40gws', '$2y$13$U.SevRrUqdgDSmTtGUCILeRfDY60TC7b4a3QmflK6oeIsyzsX6Nq6', '2016-12-06 14:56:13', '0', null, null, null, 'a:0:{}', null, 'pepito', '354234646', '2011-01-01', 'suipacha 500', '35757838', null);
INSERT INTO `fos_user` VALUES ('3', 'admin', 'admin', 'admin@admin.com', 'admin@admin.com', '1', 'fryfoq4136gc8okssko8c4socg0g44k', '$2y$13$pJhZk.wYfzskFUKtFzGIsOooMc5YsQ.7lMjblgUIbzOhA.qDENXG6', '2016-12-12 12:42:33', '0', null, null, null, 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}', null, 'administrador', '3525353', '2016-09-18', 'sobremonte 1000', '353667377', null);

-- ----------------------------
-- Table structure for foto
-- ----------------------------
DROP TABLE IF EXISTS `foto`;
CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `imageName` varchar(255) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `id_comp` int(11) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `id_camp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `id_camp` (`id_camp`),
  KEY `id_comp` (`id_comp`),
  CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`id_camp`) REFERENCES `campeonato` (`id_camp`),
  CONSTRAINT `foto_ibfk_2` FOREIGN KEY (`id_comp`) REFERENCES `complejo` (`id_comp`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of foto
-- ----------------------------
INSERT INTO `foto` VALUES ('1', 'http://www.futbolmadero.com.ar/fotos/alta/foto012.jpg', null, '1', null, null);
INSERT INTO `foto` VALUES ('2', 'http://www.futbolmadero.com.ar/fotos/alta/foto008.jpg', null, '2', null, null);
INSERT INTO `foto` VALUES ('3', 'http://www.futbolmadero.com.ar/fotos/alta/foto009.jpg', null, '3', null, null);
INSERT INTO `foto` VALUES ('4', 'http://www.futbolmadero.com.ar/fotos/alta/foto043.jpg', null, '4', null, null);
INSERT INTO `foto` VALUES ('5', 'http://www.lacancha.pe/wp-content/uploads/2014/09/IMG_2964-850x566.jpg', null, '5', null, null);
INSERT INTO `foto` VALUES ('6', 'http://www.futbolvieytes.com.ar/nuevas/foto008.jpg', null, '6', null, null);
INSERT INTO `foto` VALUES ('7', 'http://images.et.eltiempo.digital/contenido/bogota/IMAGEN/IMAGEN-15871535-2.png', null, null, null, '1');
INSERT INTO `foto` VALUES ('8', 'http://images.et.eltiempo.digital/contenido/colombia/barranquilla/IMAGEN/IMAGEN-16414082-2.jpg', null, null, null, '2');
INSERT INTO `foto` VALUES ('9', 'http://www.ohigginsfc.cl/wp-content/uploads/2014/09/Sub-15-vs-Audax.png', null, null, null, '3');
INSERT INTO `foto` VALUES ('10', 'http://www.ohigginsfc.cl/wp-content/uploads/2014/10/Capos-del-Futuro-Grupo-4-1.jpg', null, null, null, '4');
INSERT INTO `foto` VALUES ('11', 'http://assets.zocalo.com.mx/uploads/articles/2/13506497074.jpg', null, null, null, '5');
INSERT INTO `foto` VALUES ('12', 'http://www.zocalo.com.mx/images/uploads/articles/partidosamistosos.jpg', null, null, null, '6');

-- ----------------------------
-- Table structure for hora
-- ----------------------------
DROP TABLE IF EXISTS `hora`;
CREATE TABLE `hora` (
  `id_hora` int(11) NOT NULL AUTO_INCREMENT,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id_hora`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hora
-- ----------------------------
INSERT INTO `hora` VALUES ('1', '14:00:00');
INSERT INTO `hora` VALUES ('2', '15:00:00');
INSERT INTO `hora` VALUES ('3', '16:00:00');
INSERT INTO `hora` VALUES ('4', '17:00:00');
INSERT INTO `hora` VALUES ('5', '18:00:00');
INSERT INTO `hora` VALUES ('6', '19:00:00');
INSERT INTO `hora` VALUES ('7', '20:00:00');
INSERT INTO `hora` VALUES ('8', '21:00:00');
INSERT INTO `hora` VALUES ('9', '22:00:00');
INSERT INTO `hora` VALUES ('10', '23:00:00');

-- ----------------------------
-- Table structure for hora_fecha
-- ----------------------------
DROP TABLE IF EXISTS `hora_fecha`;
CREATE TABLE `hora_fecha` (
  `id_hofe` int(11) NOT NULL AUTO_INCREMENT,
  `id_hora` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_hofe`),
  KEY `id_hora` (`id_hora`),
  CONSTRAINT `FK_Hora_fecha_Hora` FOREIGN KEY (`id_hora`) REFERENCES `hora` (`id_hora`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hora_fecha
-- ----------------------------

-- ----------------------------
-- Table structure for provincia
-- ----------------------------
DROP TABLE IF EXISTS `provincia`;
CREATE TABLE `provincia` (
  `id_prov` int(11) NOT NULL AUTO_INCREMENT,
  `name_prov` varchar(255) NOT NULL,
  PRIMARY KEY (`id_prov`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of provincia
-- ----------------------------
INSERT INTO `provincia` VALUES ('1', 'Cordoba');
INSERT INTO `provincia` VALUES ('2', 'Buenos Aires');

-- ----------------------------
-- Table structure for redes
-- ----------------------------
DROP TABLE IF EXISTS `redes`;
CREATE TABLE `redes` (
  `id_rede` int(11) NOT NULL AUTO_INCREMENT,
  `name_rede` varchar(255) NOT NULL,
  PRIMARY KEY (`id_rede`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of redes
-- ----------------------------
INSERT INTO `redes` VALUES ('1', 'Facebook');
INSERT INTO `redes` VALUES ('2', 'Instagram');
INSERT INTO `redes` VALUES ('3', 'Twitter');

-- ----------------------------
-- Table structure for reserva
-- ----------------------------
DROP TABLE IF EXISTS `reserva`;
CREATE TABLE `reserva` (
  `id_rese` int(11) NOT NULL AUTO_INCREMENT,
  `id_canch` int(11) DEFAULT NULL,
  `id_usua` int(11) DEFAULT NULL,
  `id_hofe` int(11) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id_rese`),
  KEY `id_canch` (`id_canch`),
  KEY `id_usua` (`id_usua`),
  KEY `id_hofe` (`id_hofe`),
  CONSTRAINT `FK_Reserva_Cancha` FOREIGN KEY (`id_canch`) REFERENCES `cancha` (`id_canch`),
  CONSTRAINT `FK_Reserva_Hora_fecha` FOREIGN KEY (`id_hofe`) REFERENCES `hora_fecha` (`id_hofe`),
  CONSTRAINT `FK_Reserva_Usuario` FOREIGN KEY (`id_usua`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reserva
-- ----------------------------

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `name_role` varchar(255) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', 'admin');
INSERT INTO `role` VALUES ('2', 'usuario');

-- ----------------------------
-- Table structure for semana
-- ----------------------------
DROP TABLE IF EXISTS `semana`;
CREATE TABLE `semana` (
  `id_dia` int(255) NOT NULL AUTO_INCREMENT,
  `nom_dia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_dia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of semana
-- ----------------------------

-- ----------------------------
-- Table structure for servicio
-- ----------------------------
DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `id_Serv` int(11) NOT NULL AUTO_INCREMENT,
  `name_serv` varchar(255) NOT NULL,
  `prec_serv` int(11) NOT NULL,
  PRIMARY KEY (`id_Serv`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of servicio
-- ----------------------------
INSERT INTO `servicio` VALUES ('1', 'Banos', '0');
INSERT INTO `servicio` VALUES ('2', 'Duchas', '0');
INSERT INTO `servicio` VALUES ('3', 'Quincho', '200');
INSERT INTO `servicio` VALUES ('4', 'Asador', '100');
INSERT INTO `servicio` VALUES ('5', 'Choripan', '35');
INSERT INTO `servicio` VALUES ('6', 'Gaseosa', '30');
INSERT INTO `servicio` VALUES ('7', 'Cerveza', '40');
INSERT INTO `servicio` VALUES ('8', 'Papas Fritas', '25');

-- ----------------------------
-- Table structure for tcancha
-- ----------------------------
DROP TABLE IF EXISTS `tcancha`;
CREATE TABLE `tcancha` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `name_tipo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tipo`),
  UNIQUE KEY `UQ_Tcancha_id_tipo` (`id_tipo`),
  UNIQUE KEY `UQ_Tcancha_name_tipo` (`name_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tcancha
-- ----------------------------
INSERT INTO `tcancha` VALUES ('3', 'Cemento');
INSERT INTO `tcancha` VALUES ('2', 'Pasto Natural');
INSERT INTO `tcancha` VALUES ('1', 'Pasto Sintetico');
