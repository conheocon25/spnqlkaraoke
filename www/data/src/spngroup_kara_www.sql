-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2013 at 08:37 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spngroup_kara_www`
--

-- --------------------------------------------------------

--
-- Table structure for table `www_album`
--

CREATE TABLE IF NOT EXISTS `www_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `name` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `www_album`
--


-- --------------------------------------------------------

--
-- Table structure for table `www_category_album`
--

CREATE TABLE IF NOT EXISTS `www_category_album` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `www_category_album`
--

INSERT INTO `www_category_album` (`id`, `name`, `key`, `order`) VALUES
(1, 'Nội bộ', '', 0),
(2, 'Doanh nghiệp', '0', 0),
(3, 'ABC', '0', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `www_category_news`
--

INSERT INTO `www_category_news` (`id`, `name`, `key`, `order`) VALUES
(2, 'Doanh nghiệp', '0', 0),
(3, 'abc', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `www_category_video`
--

CREATE TABLE IF NOT EXISTS `www_category_video` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `www_category_video`
--

INSERT INTO `www_category_video` (`id`, `name`, `key`, `order`) VALUES
(2, 'Hướng dẫn  phiên bản 1', '0', 0),
(3, 'Hướng dẫn phiên bản 2', '0', 0);

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
(7, 'GUEST_VISIT', '594');

-- --------------------------------------------------------

--
-- Table structure for table `www_customer`
--

CREATE TABLE IF NOT EXISTS `www_customer` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `card` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `www_customer`
--

INSERT INTO `www_customer` (`id`, `name`, `type`, `card`, `phone`, `address`, `note`, `discount`) VALUES
(1, 'Cafe Cõi Riêng1', 2, '3', '1', 'Gì đây ?', 'Phạm Thái Bường P4 Vĩnh Long', 5),
(2, 'Cafe Cõi Riêng', 2, '3', '11224', 'Gì đây ?', 'Phạm Thái Bường P4 Vĩnh Long', 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `www_guest`
--

INSERT INTO `www_guest` (`id`, `ip`, `entry_time`, `exit_time`, `agent`) VALUES
(10, '192.168.1.3', '1379706701', '1379710301', '192.168.1.3');

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
(4, 'Phan Lê Hữu Phúc', 'phucphan.bdc@gmail.com', '123456', 0, '', '2013-04-07 18:54:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, ''),
(5, 'Lê Quang Minh', 'minhle.bdc@gmail.com', '123456', 0, '', '2013-05-21 02:21:20', '2013-05-21 02:21:20', '2013-05-21 02:21:20', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `www_video`
--

CREATE TABLE IF NOT EXISTS `www_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `name` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `url` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `key` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `www_video`
--

INSERT INTO `www_video` (`id`, `id_category`, `name`, `time`, `url`, `note`, `count`, `key`) VALUES
(2, 2, 'Hướng dẫn 1', '2013-09-16 05:12:05', 'http://www.youtube.com/embed/sgRmFIWAeRA', 'Thử nghiệm', 1, 'abc-'),
(3, 2, 'Hướng dẫn 2', '2013-09-16 05:12:09', 'http://www.youtube.com/embed/sgRmFIWAeRA', 'Thử nghiệm', 1, 'abc-');
