-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `activation_key`;
CREATE TABLE `activation_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `from_date` varchar(50) NOT NULL,
  `to_date` varchar(50) NOT NULL,
  `activation_key` varchar(100) NOT NULL,
  `site_url` varchar(200) DEFAULT NULL,
  `activation_key_status` int(11) DEFAULT '0',
  `plugin_communication_key` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `activation_key` (`id`, `name`, `email`, `mobile_number`, `from_date`, `to_date`, `activation_key`, `site_url`, `activation_key_status`, `plugin_communication_key`) VALUES
(1,	'Ragupathi',	'ragu3610@gmail.com',	8526462226,	'31-10-2018',	'31-10-2018',	'9369eb6cbf5aea6505c7f48d3a8a7128fa297331',	'http://localhost/wp-update',	1,	'1120218fb728701100693613e328f6a439972493');

DROP TABLE IF EXISTS `wordpress_release`;
CREATE TABLE `wordpress_release` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(100) NOT NULL DEFAULT 'wp_form',
  `download_url` varchar(100) NOT NULL DEFAULT 'http://localhost/wp-form.zip',
  `version` varchar(100) NOT NULL DEFAULT '2.0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `wordpress_release` (`id`, `slug`, `download_url`, `version`) VALUES
(1,	'wp_form',	'http://localhost/wp-form.zip',	'3.0');

-- 2018-10-30 22:03:57
