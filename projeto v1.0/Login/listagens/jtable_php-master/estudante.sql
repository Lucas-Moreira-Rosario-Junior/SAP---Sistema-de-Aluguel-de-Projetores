-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2013 at 10:59 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database: `exemplo`
--

-- --------------------------------------------------------

--
-- Table structure for table `estudante`
--

CREATE TABLE IF NOT EXISTS `estudante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `idade` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `estudante`
--

INSERT INTO `estudante` (`id`, `nome`, `idade`) VALUES
(1, 'Joao Castro de Sousa', '2011-07-13'),
(2, 'Carla Antonio ', '2013-10-16'),
(3, 'Augusto Seixas ', '2009-08-12');

