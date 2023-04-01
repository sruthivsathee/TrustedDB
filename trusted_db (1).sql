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
-- Database: `trusted_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `key_no` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `address`, `dob`, `mobile`, `email`, `password`, `key_no`) VALUES
(2, 'Anish', 'pta', '1986-11-09', '9526403727', 'gettoanish@gmail.com', 'a1a1a1', '12345'),
(12, 'Manju', 'Mgm', '1985-04-11', '9526403727', 'manjuajosh@gmail.com', 'seed', '123'),
(13, 'Ann', 'Mgth', '2002-10-20', '', 'ann@gmail.com', 'ann', '111'),
(14, 'Sam', '', '', '', 'sam@gmail.com', 'sam', '123'),
(15, 'Emmanuel', 'ps', '2000-02-11', '9768675422', 'emma@gmail.com', 'emma', '1234'),
(16, '', '', '', '', 'a@gmail.com', 'aaaa', '');

-- --------------------------------------------------------

--
-- Table structure for table `category1`
--

CREATE TABLE IF NOT EXISTS `category1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category1`
--


-- --------------------------------------------------------

--
-- Table structure for table `content_tb`
--

CREATE TABLE IF NOT EXISTS `content_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(255) NOT NULL,
  `time1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `content_tb`
--


-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `remark` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `path`, `date`, `status`, `title`, `remark`) VALUES
(45, 'upload/hai.txt', '2015-03-05', 'manjuajosh@gmail.com', 'text file', 'active'),
(46, 'upload/Forest.jpg', '2015-03-05', 'ann@gmail.com', 'image', 'active'),
(47, 'upload/MINI__REQUIREMENT.docx', '2015-03-05', 'gettoanish@gmail.com', '', 'active'),
(48, 'upload/trusted_db_(3).sql', '2015-03-05', 'gettoanish@gmail.com', '', 'active'),
(49, 'upload/trust_db2_(3).sql', '2015-03-05', 'gettoanish@gmail.com', 'ferete', 'active'),
(50, 'upload/trust_db2_(3).sql', '2015-03-05', 'gettoanish@gmail.com', 'ferete', 'active'),
(51, 'upload/trust_db2_(3).sql', '2015-03-05', 'gettoanish@gmail.com', 'ferete', 'active'),
(52, 'upload/trust_db2_(3).sql', '2015-03-05', '', 'ferete', 'active'),
(53, 'upload/iona_(1).sql', '2015-03-05', '', '', 'active'),
(54, 'upload/wordgame.sql', '2015-03-05', '', '', 'active'),
(55, 'upload/doc_(1).docx', '2015-03-09', '', '', 'active'),
(56, 'upload/timetable.sql', '2015-03-16', 'gettoanish@gmail.com', '', 'active'),
(57, 'upload/moco.sql', '2015-03-16', 'gettoanish@gmail.com', '', 'active'),
(58, 'upload/moco_(1).sql', '2015-03-16', 'gettoanish@gmail.com', '', 'active'),
(59, 'upload/smart_tag_(4).sql', '2015-03-16', 'gettoanish@gmail.com', '', 'active'),
(60, 'upload/gayathri.docx', '2015-03-20', 'gettoanish@gmail.com', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_imei_no` varchar(100) NOT NULL,
  `receiver_mobile_no` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `msg`
--


-- --------------------------------------------------------

--
-- Table structure for table `transation_maker`
--

CREATE TABLE IF NOT EXISTS `transation_maker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `data_type` varchar(150) NOT NULL,
  `date1` varchar(150) NOT NULL,
  `amt` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  `discount` text NOT NULL,
  `tax` text NOT NULL,
  `user` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `transation_maker`
--

INSERT INTO `transation_maker` (`id`, `name`, `data_type`, `date1`, `amt`, `location`, `discount`, `tax`, `user`) VALUES
(11, 'syam', 'service', '11-12-2015', '500', 'pta', 'WhyMExqED5FxMn15580eMgAv4Y/juMc0SgDMyDHVTHUtDODovBNgayceCviu0dq9HtuPKQ6g/MqeiGc+yENHbX', '9rsgKn1hIBhwunGu+Y/7cw+/gZIb9pz2lqGQOfDMzmJ5NIm3T6IxIxfRbd/2LLID032xHShrYt86f0CTkKFdus', ''),
(13, 'akhil', 'service', '11-12-2015', '500', 'pta', '29ymW9+FiMB4qqJWT5JfJACDNxCdT4LkDhJoJzy/jOrJiBKYfXAIrAx9INW6iUArb7Qh49sK5L3JpFm7PLVmVs', 'DpFzfUFRjuuNocd+XIhF+wB6uemaNBjb5tMNNcQMbfq6LhJYwPQwrFYqPrqzOyQN3MtkKt1vhDE6GhQYZxYTnH', ''),
(17, 'Bill', 'misc', '11-04-2014', '2000', 'cok', 'Rfb+BwFfYt1V1mNXq2UpPQA6aMCum7zBAcFy7GEo1TZELlcZ1wIcD4vJMrRm+rJK/zNxdJUELtxAnoA2FmtMcT', 'yrg49seWSHp9W2QJcazTCAouKVmXqlBkZvzA9ougEopXBKrWtFfXXmk9HRl7akN1GdDdUOQqRshctyk6UMm/aX', 'manjuajosh@gmail.com'),
(18, 'Antivirus', 's/w', '05-03-2015', '900', 'cok', 'r19omGTVcPRRsQXb/ZtrsgmYjKD3l70Pw5X/7U8NADGA3dotlMGOWGKAtxRON4voXkrqfIYDhGi8HEX2qN34i7', 'LKPlIxT62sKWLB4//J24wQg5rWgMs3fbAoS2glhLm0f2L+TDB7/2oqxXZPZT3+43fbaDkHHTgeVnxs0Ye57aAe', 'manjuajosh@gmail.com'),
(19, 'sm', 'misc', '05-03-2015', '200', 'cok', 'EWrkTzVm0iTmtTJATiDqKwsMTmcTZ1No4G1Y2dRrs5elaALwGAHNPcQuzzhHWMYzxUwS1mep6o+5XCS+3ZwWPI', 'CpXpXe9pXV1KGOnsw+n3FAhaOb/ZLoraxxCuJo3YiKAO6txzaIOIUlqMH/Z2id0ZameTg6pnjhNkw9qRCBgDWp', 'ann@gmail.com'),
(22, 'an', 'service', '09-11-2014', '2000', 'tvm', 'nTivcHRAEz/nIcbrPkPRngoKAsIGds9g5Ca2VbNuKtXL4rNOAZIfJ4RcwKSrlXfugtD0WzWK+vP7CkgG+sQD3+', 'Ht2SAio7noXAV7jcRzsIzwXN1SRtDQ+TypJM2ofTMWqmlNe7u9sQI2T2MK0IpIZEizcOxM/fCYusK5ImXfINWA', 'gettoanish@gmail.com'),
(23, 'anish', 'service', '09-11-2014', '520', 'tvm', 'X8IhahcqZZlpavimn+zjuAl50UwvvjR+LQGo0zN0UQQWUllEysmlIMBsM5xvKTWtglaSYPajw5WNuW50RN/u35', 'Sv3Xcz3KxdNSUJo/bxX7/Qrzkxk4e2t2L96BL99SLXDS7RtMLpkHcb73x0d8eAH7+eLO7X1c5QvX6uMssdFdc0', 'gettoanish@gmail.com'),
(24, 'Abraham', 'service', '09-11-1986', '5000', 'tvm', 'ZwX7zCXw30Kh6Zap5Bnp6gQO0WzRdAb3yN4YhgqHEG25+rVSwWwLa8D07PhC0zfhPPTjPxkrBwKdVXmK0/ELTq', 'vxGGQo2TLCPThE8H/O0XtgNsBAW/8PogzmevtbXoKAE7fmDVPV4lkEkEQ7ufI+ttmgJt9pXBZJsnUyhDUEvSog', 'gettoanish@gmail.com'),
(25, '', 'service', '', '520', 'pta', '9+UYwmMrZr2m9N9hSezNFw9QV+Xlx8UDeahmeoWELXwQ+V0MtrEGcmpQrIz/QIGjxcVOkEAHb5JcJhQSs1LknI', 'ljLZTvurVmdaFdAEG3Zx6gJWyNHbcfcnfe0e0k/LNoRKZrepNqvvcvOTpxA8bKNw2nJKEBe6OsTUVMgBUSXJQo', 'gettoanish@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_details`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
