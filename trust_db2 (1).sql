-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2015 at 11:08 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trust_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `seedblock` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `user_id`, `seedblock`) VALUES
(1, '2', '25252'),
(2, '12', '2136'),
(3, '13', '61412'),
(4, '14', '41846'),
(5, '15', '123885'),
(6, '16', '122896');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `remark` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `path`, `date`, `status`, `title`, `remark`) VALUES
(28, 'upload/hai.txt', '2015-03-05', 'manjuajosh@gmail.com', 'text file', ''),
(29, 'upload/Forest.jpg', '2015-03-05', 'ann@gmail.com', 'image', ''),
(30, 'upload/MINI__REQUIREMENT.docx', '2015-03-05', 'gettoanish@gmail.com', '', ''),
(31, 'upload/trusted_db_(3).sql', '2015-03-05', 'gettoanish@gmail.com', '', ''),
(32, 'upload/trust_db2_(3).sql', '2015-03-05', 'gettoanish@gmail.com', 'ferete', ''),
(33, 'upload/trust_db2_(3).sql', '2015-03-05', 'gettoanish@gmail.com', 'ferete', ''),
(34, 'upload/trust_db2_(3).sql', '2015-03-05', 'gettoanish@gmail.com', 'ferete', ''),
(35, 'upload/trust_db2_(3).sql', '2015-03-05', '', 'ferete', ''),
(36, 'upload/iona_(1).sql', '2015-03-05', '', '', ''),
(37, 'upload/wordgame.sql', '2015-03-05', '', '', ''),
(38, 'upload/doc_(1).docx', '2015-03-09', '', '', ''),
(39, 'upload/timetable.sql', '2015-03-16', 'gettoanish@gmail.com', '', ''),
(40, 'upload/moco.sql', '2015-03-16', 'gettoanish@gmail.com', '', ''),
(41, 'upload/moco_(1).sql', '2015-03-16', 'gettoanish@gmail.com', '', ''),
(42, 'upload/smart_tag_(4).sql', '2015-03-16', 'gettoanish@gmail.com', '', ''),
(43, 'upload/gayathri.docx', '2015-03-20', 'gettoanish@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `integrity`
--

CREATE TABLE IF NOT EXISTS `integrity` (
  `hash` text NOT NULL,
  `path` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `integrity`
--

INSERT INTO `integrity` (`hash`, `path`, `id`) VALUES
('', 'SERVER_FOLDER/enc/.', 1),
('', 'SERVER_FOLDER/enc/..', 2),
('7c9acc7768a4bcb5e6b2860126fe0dcf', 'SERVER_FOLDER/enc/doc_(1).docx', 3),
('5fdcda2804ab72515a95309e070bad36', 'SERVER_FOLDER/enc/evl.sql', 4),
('8b66904437ab962c434e941696523914', 'SERVER_FOLDER/enc/Forest.jpg', 5),
('800a80b138789a432461f4c0d731514e', 'SERVER_FOLDER/enc/gayathri.docx', 6),
('05f272599e847d996719f94f2af86772', 'SERVER_FOLDER/enc/hai.txt', 7),
('cfcd208495d565ef66e7dff9f98764da', 'SERVER_FOLDER/enc/iona_(1).sql', 8),
('cfcd208495d565ef66e7dff9f98764da', 'SERVER_FOLDER/enc/moco.sql', 9),
('e3e4e57d91471f6923e780a23bc2c0a7', 'SERVER_FOLDER/enc/moco_(1).sql', 10),
('66b4a5349073fea27c8199fa69c38665', 'SERVER_FOLDER/enc/smart_tag_(4).sql', 11),
('936677ebf32b2a576ab79050c833a04b', 'SERVER_FOLDER/enc/timetable.sql', 12),
('6e226b0b58c1dd880de87ac3117071c4', 'SERVER_FOLDER/enc/wordgame.sql', 13);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stype` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `tax` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `stype`, `discount`, `tax`) VALUES
(1, 'service', '5', '12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
