DROP TABLE IF EXISTS cleord;
CREATE TABLE `cleord` (
  `prikey` int(11) NOT NULL AUTO_INCREMENT,
  `kind` tinyint(4) NOT NULL,
  `class` smallint(6) NOT NULL,
  `week` tinyint(4) NOT NULL,
  `Mon` tinyint(4) NOT NULL,
  `Tue` tinyint(4) NOT NULL,
  `Wed` tinyint(4) NOT NULL,
  `Thu` tinyint(4) NOT NULL,
  `Fri` tinyint(4) NOT NULL,
  `Sat` tinyint(4) NOT NULL,
  `Sun` tinyint(4) NOT NULL,
  `tscore` smallint(6) NOT NULL,
  `rank` varchar(6) NOT NULL,
  `memo` varchar(4) NOT NULL,
  PRIMARY KEY (`prikey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS year_semester_class;
CREATE TABLE `year_semester_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `class_number_1` int(11) NOT NULL,
  `class_number_2` int(11) NOT NULL,
  `class_number_3` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;