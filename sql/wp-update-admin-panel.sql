-- Adminer 4.6.2 MySQL dump

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `activation_key` (`id`, `name`, `email`, `mobile_number`, `from_date`, `to_date`, `activation_key`, `site_url`, `activation_key_status`) VALUES
(1,	'Ragupathi',	'ragu3610@gmail.com',	8526462226,	'30-10-2018',	'31-10-2018',	'a8fe8f196ffe417aefc3c814b452e76afbf5c3a7',	NULL,	0),
(2,	'xcvxcv',	'xcvxcvx@xfdcxfg',	8526462227,	'30-10-2018',	'31-10-2018',	'54b4810e1e83c1d795ff5a19d6d375702277e4f6',	NULL,	0),
(3,	'ragu',	'ragu3610@gmail.com',	8526462226,	'30-10-2018',	'31-10-2018',	'e028102fd161a55b6f8b5115dcb6440ddbbb10ba',	NULL,	0);

-- 2018-10-30 13:36:41
