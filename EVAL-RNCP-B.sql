CREATE DATABASE `EVAL-RNCP-B`;
USE `EVAL-RNCP-B`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `birth_date` varchar(30) NOT NULL,
  `countries` varchar(40) NOT NULL,
  `asylum_number` varchar(40) NOT NULL,
  `letter_available_date` timestamp NOT NULL CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
