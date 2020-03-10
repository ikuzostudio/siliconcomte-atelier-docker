-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tweets`;
CREATE TABLE `tweets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tweets` (`id`, `author`, `msg`, `created_at`) VALUES
(1,	'JCVD',	'Si tu téléphones à une voyante et qu\'elle ne décroche pas avant que ça sonne, raccroche.',	'2020-03-10 12:34:15'),
(2,	'JCVD',	'Quand vraiment on a une confiance, on devient confiant.',	'2020-03-10 12:34:31'),
(3,	'JCVD',	'Y\'a pas de religions mon frère. On est aware.',	'2020-03-10 12:34:45'),
(4,	'JCVD',	'Moi, Adam et Ève, j\'y crois plus tu vois, parce que je suis pas un idiot : la pomme, ça peut pas être mauvais, c\'est plein de pectine...',	'2020-03-10 12:38:10');

-- 2020-03-10 12:41:28
