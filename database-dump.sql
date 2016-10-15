-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2015 at 01:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `grupa`
--

CREATE TABLE IF NOT EXISTS `grupa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `broj_ljudi` int(11) NOT NULL,
  `aktivna` tinyint(1) NOT NULL DEFAULT '0',
  `id_volontera` int(11) DEFAULT NULL,
  `id_vodje` int(11) NOT NULL,
  `transport` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_grupa_volonteri_idx` (`id_volontera`),
  KEY `fk_grupa_vodja1_idx` (`id_vodje`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=28 ;

--
-- Dumping data for table `grupa`
--

INSERT INTO `grupa` (`id`, `broj_ljudi`, `aktivna`, `id_volontera`, `id_vodje`, `transport`) VALUES
(3, 6, 1, 1, 1, 0),
(4, 9, 0, NULL, 2, 0),
(5, 5, 1, 2, 3, 0),
(25, 4, 1, 6, 5, 0),
(26, 8, 0, NULL, 13, 0),
(27, 3, 0, NULL, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hrana`
--

CREATE TABLE IF NOT EXISTS `hrana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_resursa` int(11) DEFAULT NULL,
  `vrsta` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `kolicina` int(11) DEFAULT NULL,
  `jedinica` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `za_bebe` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hrana`
--

INSERT INTO `hrana` (`id`, `id_resursa`, `vrsta`, `kolicina`, `jedinica`, `za_bebe`) VALUES
(1, 1, 'meat', 3, 'kg', 0),
(2, 2, 'kasica', 4, 'pcs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `odeca`
--

CREATE TABLE IF NOT EXISTS `odeca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_resursa` int(11) DEFAULT NULL,
  `vrsta` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `velicina` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `za_decu` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resurs`
--

CREATE TABLE IF NOT EXISTS `resurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tip` varchar(45) COLLATE utf8_bin NOT NULL,
  `id_grupe` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `id_volontera` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `resurs`
--

INSERT INTO `resurs` (`id`, `tip`, `id_grupe`, `id_volontera`) VALUES
(1, 'hrana', '1', '1'),
(2, '2', '2', '1'),
(3, '3', '3', '2'),
(4, '4', '4', '25');

-- --------------------------------------------------------

--
-- Table structure for table `smestaj`
--

CREATE TABLE IF NOT EXISTS `smestaj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_resursa` int(11) DEFAULT NULL,
  `br_kreveta` int(11) DEFAULT NULL,
  `zatvoreni` tinyint(1) DEFAULT NULL,
  `host_info` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `smestaj`
--

INSERT INTO `smestaj` (`id`, `id_resursa`, `br_kreveta`, `zatvoreni`, `host_info`) VALUES
(1, 3, 2, 1, 'Bencun'),
(2, 4, 6, 0, 'Kesic');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_resursa` int(11) DEFAULT NULL,
  `od` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `do` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `broj_mesta` int(11) DEFAULT NULL,
  `host_info` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `pass` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vodja`
--

CREATE TABLE IF NOT EXISTS `vodja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(45) COLLATE utf8_bin NOT NULL,
  `prezime` varchar(45) COLLATE utf8_bin NOT NULL,
  `telefon` varchar(45) COLLATE utf8_bin NOT NULL,
  `lokacija` varchar(45) COLLATE utf8_bin NOT NULL,
  `smartphone` tinyint(1) NOT NULL,
  `email` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Dumping data for table `vodja`
--

INSERT INTO `vodja` (`id`, `ime`, `prezime`, `telefon`, `lokacija`, `smartphone`, `email`) VALUES
(1, 'Aadila', 'Muhamed', '346546696', 'Nis', 1, NULL),
(2, 'Amira', 'Lut', '21214125', 'Beograd', 0, 'Lut@yahoo.com'),
(3, 'Madani', 'Madyan', '89465165465', 'Nis', 1, NULL),
(4, 'test', 'test', '5252', '', 0, ''),
(5, 'aga', 'ggadga', '435536', 'Nis', 0, 'dgfdg@gdgd'),
(13, 'testvodja', 'test ', '935395', 'nniss', 0, 'fdsfjs@gaga'),
(14, 'aaa', 'Bbb', '23525', 'ddd', 0, 'eee@mmm');

-- --------------------------------------------------------

--
-- Table structure for table `volonteri`
--

CREATE TABLE IF NOT EXISTS `volonteri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(10) COLLATE utf8_bin NOT NULL,
  `prezime` varchar(10) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `zauzet` tinyint(1) NOT NULL DEFAULT '0',
  `telefon` varchar(50) COLLATE utf8_bin NOT NULL,
  `grad` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `volonteri`
--

INSERT INTO `volonteri` (`id`, `ime`, `prezime`, `password`, `email`, `zauzet`, `telefon`, `grad`) VALUES
(1, 'petar', 'petrovic', 'e10adc3949ba59abbe56e057f20f883e', 'petar@gmail.com', 1, '065/3654-985', 'Nis'),
(2, 'marko', 'markovic', '123456', 'marko@gmail.com', 0, '065/3654-985', 'Nis'),
(3, 'Nikola', 'Kesic', 'fcea920f7412b5da7be0cf42b8c93759', 'nikolakesic991@gmail.com', 0, '0631584454', 'Nis'),
(4, 'Nikola', 'Kesic', 'b1c593a9f6c0653e431467574a128b4a', 'nikola.kesic.kesa@gmail.com', 0, '0641112223', 'Nis'),
(5, 'Stefan', 'Pekovic', '123456', 'stefan@gmail.com', 1, '5651515515', 'Beograd'),
(6, 'NIkola', 'NIkolic', '123456', 'nikolanikolic@gmail.com', 1, '484814616', 'Novi Sad');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grupa`
--
ALTER TABLE `grupa`
  ADD CONSTRAINT `fk_grupa_vodja1` FOREIGN KEY (`id_vodje`) REFERENCES `vodja` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupa_volonteri` FOREIGN KEY (`id_volontera`) REFERENCES `volonteri` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
