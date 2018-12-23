SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `clothes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `clothes` (`id`, `name`,  `type`, `price`, `image`) VALUES
(1, 'LOST INK', 'dress',21000, 'd1.jpg'),
(2, 'GAP','shirt', 13000, 'r1.jpg'),
(3, 'Tutto Bene','trouser', 20480, 'b1.jpg');
