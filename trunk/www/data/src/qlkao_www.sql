-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2013 at 09:48 AM
-- Server version: 5.5.30-30.2
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spngroup_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `www_category_news`
--

CREATE TABLE IF NOT EXISTS `www_category_news` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `www_category_news`
--

INSERT INTO `www_category_news` (`id`, `name`, `key`, `order`) VALUES
(1, 'av1', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `www_config`
--

CREATE TABLE IF NOT EXISTS `www_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `param` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `www_config`
--

INSERT INTO `www_config` (`id`, `param`, `value`) VALUES
(6, 'ROW_PER_PAGE', '12'),
(7, 'GUEST_VISIT', '144');

-- --------------------------------------------------------

--
-- Table structure for table `www_guest`
--

CREATE TABLE IF NOT EXISTS `www_guest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(16) CHARACTER SET latin1 NOT NULL,
  `entry_time` varchar(32) CHARACTER SET latin1 NOT NULL,
  `exit_time` varchar(32) CHARACTER SET latin1 NOT NULL,
  `agent` varchar(16) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `www_guest`
--

INSERT INTO `www_guest` (`id`, `ip`, `entry_time`, `exit_time`, `agent`) VALUES
(3, '192.168.1.3', '1378798667', '1378802267', '192.168.1.3');

-- --------------------------------------------------------

--
-- Table structure for table `www_user`
--

CREATE TABLE IF NOT EXISTS `www_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datecreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateupdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dateactivity` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` tinyint(4) NOT NULL,
  `code` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `www_user`
--

INSERT INTO `www_user` (`id`, `name`, `email`, `pass`, `gender`, `note`, `datecreate`, `dateupdate`, `dateactivity`, `type`, `code`) VALUES
(1, 'Bùi Thanh Tuấn', 'tuanbuithanh@gmail.com', 'admin123456', 0, ' ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, ''),
(2, 'Lê Nguyễn Đông Khoa', 'lekhoa.bdc@gmail.com', '123456', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, ''),
(3, 'Phan Xuân Mai', 'maiphan.bdc@gmail.com', '123456', 1, ' ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, ''),
(4, 'Phan Lê Hữu Phúc', 'phucphan.bdc@gmail.com', '123456', 0, '', '2013-04-07 11:54:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, ''),
(5, 'Lê Quang Minh', 'minhle.bdc@gmail.com', '123456', 0, '', '2013-05-20 19:21:20', '2013-05-20 19:21:20', '2013-05-20 19:21:20', 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
