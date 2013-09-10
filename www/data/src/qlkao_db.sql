-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2013 at 06:28 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qlkao_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `baduc_course`
--

CREATE TABLE IF NOT EXISTS `baduc_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcategory` int(25) DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `shortname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price1` bigint(20) NOT NULL,
  `price2` bigint(20) NOT NULL,
  `price3` bigint(20) NOT NULL,
  `price4` bigint(20) NOT NULL,
  `picture` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign_field` (`idcategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=148 ;

--
-- Dumping data for table `baduc_course`
--

INSERT INTO `baduc_course` (`id`, `idcategory`, `name`, `shortname`, `unit`, `price1`, `price2`, `price3`, `price4`, `picture`) VALUES
(15, 11, 'Thuốc hút', 'Thuốc hút', 'Gói', 25000, 0, 0, 0, NULL),
(53, 8, 'Trà Xanh', 'Trà Xanh', 'Chai', 15000, 0, 0, 0, NULL),
(54, 8, 'C2', 'C2', 'Chai', 15000, 0, 0, 0, NULL),
(55, 8, 'Dr Thanh', 'Dr Thanh', 'Chai', 15000, 0, 0, 0, NULL),
(56, 8, 'Nước Yến', 'Nước Yến', 'Lon', 15000, 0, 0, 0, NULL),
(107, 3, 'Heniken', 'Heniken', 'Chai', 18000, 0, 0, 0, ''),
(108, 3, 'Heniken', 'Heniken', 'Lon', 20000, 0, 0, 0, ''),
(110, 12, 'Trái Cây', 'Trái Cây', 'Dĩa', 50000, 0, 0, 0, ''),
(111, 3, 'Sài Gòn đỏ', 'Sài Gòn đỏ', 'Chai', 12000, 0, 0, 0, ''),
(112, 3, 'Sài Gòn XK', 'Sài Gòn XK', 'Chai', 15000, 0, 0, 0, ''),
(113, 3, 'Sài Gòn XK', 'Sài Gòn XK', 'Lon', 17000, 0, 0, 0, ''),
(114, 3, 'Bia 333', 'Bia 333', 'Lon', 16000, 0, 0, 0, ''),
(115, 11, 'Thuốc 555', 'Thuốc 555', 'Gói', 30000, 0, 0, 0, ''),
(116, 11, 'Thuốc Craven', 'Thuốc Craven', 'Gói', 25000, 0, 0, 0, ''),
(117, 12, 'Oshi', 'Oshi', 'Gói', 10000, 0, 0, 0, ''),
(118, 12, 'Chả Giò', 'Chả Giò', 'Gói', 15000, 0, 0, 0, ''),
(119, 12, 'Khô Bò', 'Khô Bò', 'Gói', 30000, 0, 0, 0, ''),
(120, 12, 'Mít sấy', 'Mít sấy', 'Gói', 30000, 0, 0, 0, ''),
(121, 12, 'Xúc Xích', 'Xúc Xích', 'Gói', 30000, 0, 0, 0, ''),
(122, 12, 'Chewing Gum', 'Chewing Gum', 'Cây', 6000, 0, 0, 0, ''),
(123, 12, 'Đậu Phộng chiên', 'Đậu Phộng chiên', 'Gói', 10000, 0, 0, 0, ''),
(124, 12, 'Đậu Phộng sấy', 'Đậu Phộng sấy', 'Gói', 10000, 0, 0, 0, ''),
(125, 12, 'Đậu Phộng', 'Đậu Phộng', 'Gói', 7000, 0, 0, 0, ''),
(126, 8, 'Lavie', 'Lavie', 'Chai', 10000, 0, 0, 0, ''),
(127, 8, 'Pepsi', 'Pepsi', 'Lon', 15000, 0, 0, 0, ''),
(128, 8, '7 Up', '7 Up', 'Lon', 15000, 0, 0, 0, ''),
(129, 8, 'Cam', 'Cam', 'Lon', 15000, 0, 0, 0, ''),
(131, 12, 'Khăn Lạnh', 'Khăn Lạnh', 'Cái', 2000, 0, 0, 0, ''),
(132, 12, 'Quẹt gas', 'Quẹt gas', 'Cái', 4000, 0, 0, 0, ''),
(134, 12, 'Khô Mực', 'Khô Mực', 'Con', 50000, 0, 0, 0, ''),
(135, 12, 'Chả Lụa', 'Chả Lụa', 'Dĩa', 50000, 0, 0, 0, ''),
(136, 8, 'Red_Bull', 'Red_Bull', 'Lon', 15000, 0, 0, 0, ''),
(137, 3, 'Tiger', 'Tiger', 'Chai', 14000, 0, 0, 0, ''),
(138, 3, 'Tiger Bạc', 'Tiger Bạc', 'Chai', 15000, 0, 0, 0, ''),
(139, 12, 'Đậu Nành rang', 'Đậu Nành rang', 'Gói', 10000, 0, 0, 0, ''),
(140, 3, 'Tiger', 'Tiger', 'Lon', 19000, 0, 0, 0, ''),
(141, 12, 'Cơm Cháy', 'Cơm Cháy', 'Bịch', 17000, 0, 0, 0, ''),
(142, 12, 'Cá Cơm', 'Cá Cơm', 'Gói', 12000, 0, 0, 0, ''),
(143, 8, 'Sting', 'Sting', 'Chai', 15000, 0, 0, 0, ''),
(144, 12, 'Khô_Mực', 'Khô_Mực', 'Con', 60000, 0, 0, 0, ''),
(145, 12, 'Chà giò rế', 'Chà giò rế', 'Dĩa', 60000, 0, 0, 0, ''),
(146, 12, 'Nhái chiên giòn', 'Nhái', 'Dĩa', 60000, 0, 0, 0, ''),
(147, 12, 'Đậu Nành sấy', 'Đậu nành sấy', 'Gói', 12000, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `www_category_news`
--

CREATE TABLE IF NOT EXISTS `www_category_news` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `www_category_news`
--


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
(7, 'GUEST_VISIT', '125');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `www_guest`
--

INSERT INTO `www_guest` (`id`, `ip`, `entry_time`, `exit_time`, `agent`) VALUES
(1, '192.168.1.3', '1378787215', '1378790815', '192.168.1.3');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baduc_course`
--
ALTER TABLE `baduc_course`
  ADD CONSTRAINT `baduc_course_1` FOREIGN KEY (`idcategory`) REFERENCES `baduc_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
