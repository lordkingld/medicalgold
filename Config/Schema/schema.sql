

DROP TABLE IF EXISTS `taller3`.`appointment`;
DROP TABLE IF EXISTS `taller3`.`doctors`;
DROP TABLE IF EXISTS `taller3`.`users`;


CREATE TABLE `taller3`.`appointment` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`paciente` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`especialista` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`fecha` date NOT NULL,
	`place` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `taller3`.`doctors` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`cedula` int(11) NOT NULL,
	`name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`especialidad` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `taller3`.`users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`cedula` int(11) NOT NULL,
	`name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`adress` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`phone` int(11) DEFAULT NULL,
	`celphone` int(11) DEFAULT NULL,
	`created` datetime NOT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

