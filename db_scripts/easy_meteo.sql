-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2015 at 01:59 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `easy_meteo`
--

-- --------------------------------------------------------

--
-- Table structure for table `climat`
--

CREATE TABLE IF NOT EXISTS `climat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_station` int(11) NOT NULL,
  `date` date NOT NULL,
  `temperature` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `vitesse_vent` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `duree_insolation` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_station` (`id_station`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `climat`
--

INSERT INTO `climat` (`id`, `id_station`, `date`, `temperature`, `vitesse_vent`, `duree_insolation`) VALUES
(16, 1, '2010-01-01', '-4.1;-3.2;-3.3;-1.0;-0.8;-0.4;0.9;0.8;0.9;0.8;0.9;0.7;0.5;0.2;0.1;0.1;0.1;0.1;0.1;0.2;0.6;0.7;0.7;0.8', '5.6;5.6;7.4;7.4;9.3;11.1;13.0;22.2;18.5;16.7;18.5;22.2;18.5;16.7;20.4;18.5;24.1;18.5;24.1;20.4;22.2;20.4;18.5;20.4', '0 h 0 min'),
(17, 1, '2010-01-01', '-4.1;-3.2;-3.3;-1.0;-0.8;-0.4;0.9;0.8;0.9;0.8;0.9;0.7;0.5;0.2;0.1;0.1;0.1;0.1;0.1;0.2;0.6;0.7;0.7;0.8', '5.6;5.6;7.4;7.4;9.3;11.1;13.0;22.2;18.5;16.7;18.5;22.2;18.5;16.7;20.4;18.5;24.1;18.5;24.1;20.4;22.2;20.4;18.5;20.4', '0 h 0 min'),
(18, 1, '2010-01-01', '-4.1;-3.2;-3.3;-1.0;-0.8;-0.4;0.9;0.8;0.9;0.8;0.9;0.7;0.5;0.2;0.1;0.1;0.1;0.1;0.1;0.2;0.6;0.7;0.7;0.8', '5.6;5.6;7.4;7.4;9.3;11.1;13.0;22.2;18.5;16.7;18.5;22.2;18.5;16.7;20.4;18.5;24.1;18.5;24.1;20.4;22.2;20.4;18.5;20.4', '0 h 0 min'),
(19, 1, '2010-01-01', '-4.1;-3.2;-3.3;-1.0;-0.8;-0.4;0.9;0.8;0.9;0.8;0.9;0.7;0.5;0.2;0.1;0.1;0.1;0.1;0.1;0.2;0.6;0.7;0.7;0.8', '5.6;5.6;7.4;7.4;9.3;11.1;13.0;22.2;18.5;16.7;18.5;22.2;18.5;16.7;20.4;18.5;24.1;18.5;24.1;20.4;22.2;20.4;18.5;20.4', '0 h 0 min'),
(20, 1, '2010-01-01', '-4.1;-3.2;-3.3;-1.0;-0.8;-0.4;0.9;0.8;0.9;0.8;0.9;0.7;0.5;0.2;0.1;0.1;0.1;0.1;0.1;0.2;0.6;0.7;0.7;0.8', '5.6;5.6;7.4;7.4;9.3;11.1;13.0;22.2;18.5;16.7;18.5;22.2;18.5;16.7;20.4;18.5;24.1;18.5;24.1;20.4;22.2;20.4;18.5;20.4', '0 h 0 min');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_postal` int(11) NOT NULL,
  `nom` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `altitude` double NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `dernier_mois` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `code_postal`, `nom`, `altitude`, `longitude`, `latitude`, `dernier_mois`) VALUES
(1, 91, 'orly', 89, 2.3524, 48.7219, '2015-09-01'),
(2, 13, 'marignane', 5, 5.2161, 43.4381, '2015-09-01'),
(3, 33, 'bordeaux-merignac', 47, -0.7193, 44.8332, '2015-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `type_eolienne`
--

CREATE TABLE IF NOT EXISTS `type_eolienne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diametre_min` double NOT NULL,
  `diametre_max` double NOT NULL,
  `puissance_min` double NOT NULL,
  `puissance_max` double NOT NULL,
  `nom` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `climat`
--
ALTER TABLE `climat`
  ADD CONSTRAINT `climat_ibfk_1` FOREIGN KEY (`id_station`) REFERENCES `station` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
