-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2013 at 10:07 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spngroup_kara_karaokebao`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_app`
--

CREATE TABLE IF NOT EXISTS `tbl_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `banner` varchar(125) CHARACTER SET utf8 NOT NULL,
  `prefix` varchar(50) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(256) CHARACTER SET utf8 NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_activity` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` tinyint(4) NOT NULL,
  `page_view` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_app`
--

INSERT INTO `tbl_app` (`id`, `name`, `phone`, `address`, `email`, `banner`, `prefix`, `alias`, `date_created`, `date_modified`, `date_activity`, `type`, `page_view`) VALUES
(1, 'Karaoke Ba Đức', '0945 03 07 09', 'Phó Cơ Điều P3 - TPVL', '', 'data/images/banner/logo.png', 'tbl_', 'tbl_', '2012-07-01 05:00:00', '0000-00-00 00:00:00', '2012-12-26 20:28:02', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` binary(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `picture`) VALUES
(3, 'BEER', NULL),
(8, 'NƯỚC GIẢI KHÁT', NULL),
(11, 'THUỐC HÚT', NULL),
(12, 'THỨC ĂN', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_collect_general`
--

CREATE TABLE IF NOT EXISTS `tbl_collect_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_term` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_collect_1` (`id_term`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_collect_general`
--

INSERT INTO `tbl_collect_general` (`id`, `id_term`, `date`, `value`, `note`) VALUES
(5, 2, '2013-05-20', 10111, 'ddddd'),
(6, 2, '2013-09-08', 1, 'thử nghiệm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE IF NOT EXISTS `tbl_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `param` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_config`
--

INSERT INTO `tbl_config` (`id`, `param`, `value`) VALUES
(1, 'PRICE_HOUR_NORMAL_1', '70000'),
(2, 'PRICE_HOUR_NORMAL_2', '90000'),
(3, 'PRICE_HOUR_VIP_1', '80000'),
(4, 'PRICE_HOUR_VIP_2', '100000'),
(5, 'DISCOUNT', '0'),
(6, 'ROW_PER_PAGE', '12'),
(7, 'GUEST_VISIT', '220'),
(8, 'THEME', 'grey'),
(9, 'EVERY_5_MINUTES', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE IF NOT EXISTS `tbl_course` (
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
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign_field` (`idcategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=148 ;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `idcategory`, `name`, `shortname`, `unit`, `price1`, `price2`, `price3`, `price4`, `picture`, `rate`) VALUES
(15, 11, 'Thuốc hút', 'Thuốc hút', 'Gói', 25000, 0, 0, 0, NULL, 0),
(53, 8, 'Trà Xanh', 'Trà Xanh', 'Chai', 15000, 0, 0, 0, NULL, 0),
(54, 8, 'C2', 'C2', 'Chai', 15000, 0, 0, 0, NULL, 0),
(55, 8, 'Dr Thanh', 'Dr Thanh', 'Chai', 15000, 0, 0, 0, NULL, 0),
(56, 8, 'Nước Yến', 'Nước Yến', 'Lon', 15000, 0, 0, 0, NULL, 0),
(107, 3, 'Heniken', 'Heniken', 'Chai', 18000, 0, 0, 0, '', 0),
(108, 3, 'Heniken', 'Heniken', 'Lon', 20000, 0, 0, 0, '', 0),
(110, 12, 'Trái Cây', 'Trái Cây', 'Dĩa', 50000, 0, 0, 0, '', 0),
(111, 3, 'Sài Gòn đỏ', 'Sài Gòn đỏ', 'Chai', 12000, 0, 0, 0, '', 0),
(112, 3, 'Sài Gòn XK', 'Sài Gòn XK', 'Chai', 15000, 0, 0, 0, '', 0),
(113, 3, 'Sài Gòn XK', 'Sài Gòn XK', 'Lon', 17000, 0, 0, 0, '', 0),
(114, 3, 'Bia 333', 'Bia 333', 'Lon', 16000, 0, 0, 0, '', 0),
(115, 11, 'Thuốc 555', 'Thuốc 555', 'Gói', 30000, 0, 0, 0, '', 0),
(116, 11, 'Thuốc Craven', 'Thuốc Craven', 'Gói', 25000, 0, 0, 0, '', 0),
(117, 12, 'Oshi', 'Oshi', 'Gói', 10000, 0, 0, 0, '', 0),
(118, 12, 'Chả Giò', 'Chả Giò', 'Gói', 15000, 0, 0, 0, '', 0),
(119, 12, 'Khô Bò', 'Khô Bò', 'Gói', 30000, 0, 0, 0, '', 0),
(120, 12, 'Mít sấy', 'Mít sấy', 'Gói', 30000, 0, 0, 0, '', 0),
(121, 12, 'Xúc Xích', 'Xúc Xích', 'Gói', 30000, 0, 0, 0, '', 0),
(122, 12, 'Chewing Gum', 'Chewing Gum', 'Cây', 6000, 0, 0, 0, '', 0),
(123, 12, 'Đậu Phộng chiên', 'Đậu Phộng chiên', 'Gói', 10000, 0, 0, 0, '', 0),
(124, 12, 'Đậu Phộng sấy', 'Đậu Phộng sấy', 'Gói', 10000, 0, 0, 0, '', 0),
(125, 12, 'Đậu Phộng', 'Đậu Phộng', 'Gói', 7000, 0, 0, 0, '', 0),
(126, 8, 'Lavie', 'Lavie', 'Chai', 10000, 0, 0, 0, '', 0),
(127, 8, 'Pepsi', 'Pepsi', 'Lon', 15000, 0, 0, 0, '', 0),
(128, 8, '7 Up', '7 Up', 'Lon', 15000, 0, 0, 0, '', 0),
(129, 8, 'Cam', 'Cam', 'Lon', 15000, 0, 0, 0, '', 0),
(131, 12, 'Khăn Lạnh', 'Khăn Lạnh', 'Cái', 2000, 0, 0, 0, '', 0),
(132, 12, 'Quẹt gas', 'Quẹt gas', 'Cái', 4000, 0, 0, 0, '', 0),
(134, 12, 'Khô Mực', 'Khô Mực', 'Con', 50000, 0, 0, 0, '', 0),
(135, 12, 'Chả Lụa', 'Chả Lụa', 'Dĩa', 50000, 0, 0, 0, '', 0),
(136, 8, 'Red_Bull', 'Red_Bull', 'Lon', 15000, 0, 0, 0, '', 0),
(137, 3, 'Tiger', 'Tiger', 'Chai', 14000, 0, 0, 0, '', 0),
(138, 3, 'Tiger Bạc', 'Tiger Bạc', 'Chai', 15000, 0, 0, 0, '', 0),
(139, 12, 'Đậu Nành rang', 'Đậu Nành rang', 'Gói', 10000, 0, 0, 0, '', 0),
(140, 3, 'Tiger', 'Tiger', 'Lon', 19000, 0, 0, 0, '', 0),
(141, 12, 'Cơm Cháy', 'Cơm Cháy', 'Bịch', 17000, 0, 0, 0, '', 0),
(142, 12, 'Cá Cơm', 'Cá Cơm', 'Gói', 12000, 0, 0, 0, '', 0),
(143, 8, 'Sting', 'Sting', 'Chai', 15000, 0, 0, 0, '', 0),
(144, 12, 'Khô_Mực', 'Khô_Mực', 'Con', 60000, 0, 0, 0, '', 0),
(145, 12, 'Chà giò rế', 'Chà giò rế', 'Dĩa', 60000, 0, 0, 0, '', 0),
(146, 12, 'Nhái chiên giòn', 'Nhái', 'Dĩa', 60000, 0, 0, 0, '', 0),
(147, 12, 'Đậu Nành sấy', 'Đậu nành sấy', 'Gói', 12000, 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `card` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `type`, `card`, `phone`, `address`, `note`, `discount`) VALUES
(1, 'Khách Hàng Vãng Lai', 0, '893970784300', '0945030709', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_domain`
--

CREATE TABLE IF NOT EXISTS `tbl_domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_domain`
--

INSERT INTO `tbl_domain` (`id`, `name`) VALUES
(1, 'KHU A'),
(2, 'KHU B'),
(3, 'KHU VIP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(2) NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `job`, `gender`, `phone`, `address`) VALUES
(1, 'Phan Thị B', '', 1, '0946 111 222', 'Cao Lãnh - Đồng Tháp'),
(2, 'Lê Văn C', '', 0, '0986 222 333', 'Cái Bè, Tiền Giang'),
(3, 'Nguyễn Văn A', 'Quản lý', 1, '11224', 'Trà Vinh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guest`
--

CREATE TABLE IF NOT EXISTS `tbl_guest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(16) CHARACTER SET latin1 NOT NULL,
  `entry_time` varchar(32) CHARACTER SET latin1 NOT NULL,
  `exit_time` varchar(32) CHARACTER SET latin1 NOT NULL,
  `agent` varchar(16) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_guest`
--

INSERT INTO `tbl_guest` (`id`, `ip`, `entry_time`, `exit_time`, `agent`) VALUES
(2, '192.168.1.3', '1380571271', '1380574871', '192.168.1.3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paid_general`
--

CREATE TABLE IF NOT EXISTS `tbl_paid_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_term` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_paid_1` (`id_term`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=89 ;

--
-- Dumping data for table `tbl_paid_general`
--

INSERT INTO `tbl_paid_general` (`id`, `id_term`, `date`, `value`, `note`) VALUES
(9, 10, '2013-04-01', 157000, 'Chi tiền chợ'),
(10, 10, '2013-04-02', 146000, 'Tiền chợ'),
(11, 10, '2013-04-03', 189000, 'Tiền chợ'),
(12, 10, '2013-04-04', 184000, 'Tiền chợ'),
(13, 10, '2013-04-05', 173000, 'Tiền chợ'),
(14, 10, '2013-04-06', 213000, 'Tiền chợ'),
(15, 10, '2013-04-07', 123000, 'Tiền chợ'),
(16, 10, '2013-04-08', 224000, 'Tiền chợ'),
(17, 10, '2013-04-09', 200000, 'Tiền chợ'),
(19, 11, '2013-04-09', 57000, 'Tiền mua trái cây + bông cúng'),
(20, 11, '2013-04-06', 163000, 'Chi mua đồ điện '),
(21, 11, '2013-04-08', 250000, 'Mua CB'),
(22, 11, '2013-04-07', 57000, 'Trái cây cúng+bao kiếng trái cây'),
(23, 10, '2013-04-10', 102000, 'Tiền chợ'),
(25, 10, '2013-04-11', 106000, 'Tiền chợ'),
(26, 11, '2013-04-11', 30000, 'Trái cây cúng'),
(27, 10, '2013-04-13', 163000, 'Tiền chợ'),
(28, 11, '2013-04-13', 465000, 'Tiếp khách(Công An phường)\r\n'),
(31, 11, '2013-04-14', 400000, 'Nhập bình gas'),
(32, 11, '2013-04-14', 127000, 'Bông+trái cây cúng,Khoai mon làm chả giò,Nước rửa '),
(33, 10, '2013-04-14', 221000, 'Tiền chợ'),
(34, 10, '2013-04-15', 122000, 'Tiền chợ'),
(35, 10, '2013-04-17', 222000, 'Tiền chợ'),
(36, 10, '2013-04-18', 118000, 'Tiền chợ'),
(38, 10, '2013-04-19', 122000, 'Tiền chợ'),
(39, 10, '2013-04-20', 134000, 'Tiền chợ\r\n'),
(40, 11, '2013-04-19', 38000, 'Mua tương ớt + phô mai cho khách'),
(41, 11, '2013-04-20', 38000, 'Chai lau kiếng+bông cúng+bao kiếng trái cây\r\n'),
(42, 10, '2013-04-22', 120000, 'Tiền chợ\r\n'),
(43, 1, '2013-04-20', 649000, 'Tiền điện sinh hoạt'),
(44, 11, '2013-04-22', 42000, 'Bông + trái cây cúng,Tiền cafe Anh 2 tiếp khách'),
(45, 10, '2013-04-23', 97000, 'Tiền chợ'),
(46, 11, '2013-04-23', 34000, 'Trái cây cúng'),
(47, 10, '2013-04-24', 65000, 'Tiền chợ'),
(48, 11, '2013-04-24', 21000, 'Mua hóa đơn bán lẻ\r\n'),
(49, 10, '2013-04-25', 177000, 'Tiền chợ'),
(50, 11, '2013-04-25', 26000, 'Bông cúng+bọc đựng da cá basa'),
(51, 10, '2013-04-26', 100000, 'Tiền chợ'),
(52, 10, '2013-04-27', 102000, 'Tiền chợ'),
(53, 11, '2013-04-27', 168000, 'Trả tiền vật liệu(cát)+bình nước lọc(2 bình)'),
(54, 10, '2013-04-28', 103000, 'Tiền chợ'),
(55, 10, '2013-04-29', 126000, 'Tiền chợ'),
(56, 11, '2013-04-29', 19000, 'Muối+ớt làm rang muối'),
(57, 10, '2013-05-01', 95000, 'Tiền chợ'),
(58, 11, '2013-05-01', 24000, 'Bao kiếng trái cây(3 bao)'),
(59, 10, '2013-05-03', 183000, 'Tiền chợ'),
(60, 10, '2013-05-02', 62000, 'Tiền chợ'),
(61, 10, '2013-05-04', 85000, 'Tiền chợ'),
(62, 10, '2013-05-05', 89000, 'Tiền chợ\r\n'),
(63, 10, '2013-05-06', 32000, 'Tiền chợ'),
(64, 4, '2013-04-30', 10500000, 'Lương NV chưa tính phụ cấp'),
(65, 1, '2013-04-30', 6000000, ''),
(66, 2, '2013-04-30', 1500000, 'Tạm tính'),
(67, 10, '2013-05-07', 211000, 'Tiền chợ\r\n'),
(68, 11, '2013-05-07', 136000, 'Nấu cháo gà( Anh Khoa)\r\n'),
(69, 11, '2013-05-08', 7000, 'Mua hóa đơn bán lẻ'),
(70, 10, '2013-05-08', 115000, 'Tiền chợ'),
(71, 10, '2013-05-09', 117000, 'Tiền chợ'),
(72, 11, '2013-05-10', 6000, 'Cafe cho tài xế của khách'),
(73, 10, '2013-05-10', 81000, 'Tiền chợ'),
(74, 10, '2013-05-11', 99000, 'Tiền chợ\r\n'),
(75, 10, '2013-05-12', 330000, 'Tiền chợ'),
(76, 10, '2013-05-13', 85000, 'Tiền chợ\r\n'),
(77, 10, '2013-05-14', 74500, 'Tiền chợ'),
(78, 11, '2013-05-12', 141000, 'Mua chổi+cây lau nhà'),
(79, 3, '2013-04-30', 5600001, 'Thuế TTĐB'),
(80, 12, '2013-04-30', 3250000, 'chi tiền đầu chai cho NV'),
(81, 10, '2013-05-15', 221000, ''),
(82, 10, '2013-05-16', 106000, ''),
(83, 10, '2013-05-17', 129000, ''),
(85, 10, '2013-05-18', 99000, ''),
(86, 10, '2013-05-19', 85000, ''),
(87, 11, '2013-05-19', 414000, 'Bình gas+nguyên liệu làm motor'),
(88, 10, '2013-05-20', 40000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pay_roll`
--

CREATE TABLE IF NOT EXISTS `tbl_pay_roll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idemployee` int(11) NOT NULL,
  `date` date NOT NULL,
  `state` int(11) NOT NULL,
  `extra` int(11) NOT NULL,
  `late` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `demo1_pay_roll_1` (`idemployee`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tbl_pay_roll`
--

INSERT INTO `tbl_pay_roll` (`id`, `idemployee`, `date`, `state`, `extra`, `late`) VALUES
(1, 1, '2013-05-01', 1, 0, 0),
(2, 1, '2013-05-02', 1, 0, 0),
(3, 1, '2013-05-03', 1, 0, 0),
(4, 1, '2013-05-04', 1, 0, 0),
(5, 1, '2013-05-05', 1, 0, 0),
(6, 1, '2013-05-06', 1, 0, 0),
(7, 1, '2013-05-07', 1, 0, 0),
(8, 1, '2013-05-08', 1, 0, 0),
(9, 1, '2013-05-09', 1, 0, 0),
(10, 1, '2013-05-10', 1, 0, 0),
(11, 1, '2013-05-11', 1, 0, 0),
(12, 1, '2013-05-12', 1, 0, 0),
(13, 1, '2013-05-13', 1, 0, 0),
(14, 1, '2013-05-14', 1, 0, 0),
(15, 1, '2013-05-15', 1, 0, 0),
(16, 1, '2013-05-16', 1, 0, 0),
(17, 1, '2013-05-17', 1, 0, 0),
(18, 1, '2013-05-18', 1, 0, 0),
(19, 1, '2013-05-19', 1, 0, 0),
(20, 1, '2013-05-20', 1, 0, 0),
(21, 1, '2013-05-21', 1, 0, 0),
(22, 1, '2013-05-22', 1, 0, 0),
(23, 1, '2013-05-23', 1, 0, 0),
(24, 1, '2013-05-24', 1, 0, 0),
(25, 1, '2013-05-25', 1, 0, 0),
(26, 1, '2013-05-26', 1, 0, 0),
(27, 1, '2013-05-27', 1, 0, 0),
(28, 1, '2013-05-28', 1, 0, 0),
(29, 1, '2013-05-29', 1, 0, 0),
(30, 1, '2013-05-30', 1, 0, 0),
(31, 1, '2013-05-31', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE IF NOT EXISTS `tbl_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtable` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `datetimeend` datetime DEFAULT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `discount_value` int(11) NOT NULL,
  `discount_percent` int(11) NOT NULL,
  `surtax` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idtable` (`idtable`),
  KEY `iduser` (`iduser`),
  KEY `tbl_session_3` (`idcustomer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=441 ;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`id`, `idtable`, `iduser`, `idcustomer`, `datetime`, `datetimeend`, `note`, `status`, `discount_value`, `discount_percent`, `surtax`, `payment`, `value`) VALUES
(390, 1, 1, 1, '2013-05-11 22:34:00', '2013-05-12 00:55:00', '', 1, 0, 0, 0, 0, 0),
(438, 1, 1, 1, '2013-09-03 10:30:00', '2013-09-03 14:00:00', '', 0, 0, 0, 0, 0, 491000),
(440, 17, 1, 1, '2013-08-11 01:11:39', '2013-08-11 01:55:00', '', 0, 0, 0, 0, 0, 159000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_session_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsession` int(11) NOT NULL,
  `idcourse` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idsession` (`idsession`),
  KEY `idcourse` (`idcourse`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1827 ;

--
-- Dumping data for table `tbl_session_detail`
--

INSERT INTO `tbl_session_detail` (`id`, `idsession`, `idcourse`, `count`, `price`) VALUES
(1576, 390, 107, 24, 18000),
(1577, 390, 110, 1, 50000),
(1578, 390, 131, 15, 2000),
(1579, 390, 144, 1, 60000),
(1820, 440, 114, 4, 16000),
(1821, 440, 107, 1, 18000),
(1822, 440, 111, 1, 12000),
(1823, 438, 114, 3, 16000),
(1824, 438, 107, 1, 18000),
(1825, 438, 111, 1, 12000),
(1826, 438, 137, 12, 14000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_table`
--

CREATE TABLE IF NOT EXISTS `tbl_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iddomain` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iddomain` (`iddomain`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_table`
--

INSERT INTO `tbl_table` (`id`, `iddomain`, `name`, `iduser`, `type`) VALUES
(1, 1, 'Phòng 01', 0, '0'),
(2, 1, 'Phòng 02', 0, '0'),
(3, 1, 'Phòng 03', 0, '0'),
(4, 1, 'Phòng 04', 0, '0'),
(14, 2, 'Phòng 07', 0, '0'),
(15, 2, 'Phòng 08', 0, '0'),
(16, 2, 'Phòng 09', 0, '0'),
(17, 2, 'Phòng 10', 0, '0'),
(26, 3, 'Phòng 05', 0, '1'),
(27, 3, 'Phòng 06', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term`
--

CREATE TABLE IF NOT EXISTS `tbl_term` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_term`
--

INSERT INTO `tbl_term` (`id`, `name`, `type`) VALUES
(1, 'Tiền Điện', 0),
(2, 'Tiền Nước', 0),
(3, 'Thuế', 0),
(4, 'Lương Nhân Viên', 0),
(10, 'Tiền Ăn Nhân Viên', 0),
(11, 'CP Khác', 0),
(12, 'Tiền Phụ Cấp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term_collect`
--

CREATE TABLE IF NOT EXISTS `tbl_term_collect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_term_collect`
--

INSERT INTO `tbl_term_collect` (`id`, `name`) VALUES
(2, 'Phụ Phẩm'),
(3, 'Đặc Biệt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracking`
--

CREATE TABLE IF NOT EXISTS `tbl_tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `estate_rate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_tracking`
--

INSERT INTO `tbl_tracking` (`id`, `date_start`, `date_end`, `estate_rate`) VALUES
(1, '2013-01-01', '2013-01-31', 0),
(2, '2013-02-01', '2013-02-28', 0),
(3, '2013-03-01', '2013-03-31', 0),
(4, '2013-04-01', '2013-04-30', 0),
(5, '2013-05-01', '2013-05-31', 0),
(6, '2013-06-01', '2013-07-31', 0),
(7, '2013-07-01', '2013-07-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE IF NOT EXISTS `tbl_unit` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id`, `name`) VALUES
(1, 'Ly'),
(2, 'Điếu'),
(3, 'Chai'),
(4, 'Lon'),
(5, 'Dĩa'),
(6, 'Thùng'),
(7, 'Két'),
(9, 'Bịch'),
(10, 'Gói'),
(11, 'Cái'),
(12, 'Cây'),
(13, 'Giờ'),
(14, 'Bao'),
(15, 'Con'),
(16, 'Kg'),
(17, 'Hộp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `pass`, `gender`, `note`, `datecreate`, `dateupdate`, `dateactivity`, `type`, `code`) VALUES
(1, 'Bảo', 'bao@gmail.com', 'admin123456', 0, ' ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_collect_general`
--
ALTER TABLE `tbl_collect_general`
  ADD CONSTRAINT `tbl_collect_general_1` FOREIGN KEY (`id_term`) REFERENCES `tbl_term_collect` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD CONSTRAINT `tbl_course_1` FOREIGN KEY (`idcategory`) REFERENCES `tbl_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_paid_general`
--
ALTER TABLE `tbl_paid_general`
  ADD CONSTRAINT `tbl_paid_general_1` FOREIGN KEY (`id_term`) REFERENCES `tbl_term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pay_roll`
--
ALTER TABLE `tbl_pay_roll`
  ADD CONSTRAINT `tbl_pay_roll_1` FOREIGN KEY (`idemployee`) REFERENCES `tbl_employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_session`
--
ALTER TABLE `tbl_session`
  ADD CONSTRAINT `tbl_session_1` FOREIGN KEY (`idtable`) REFERENCES `tbl_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_session_2` FOREIGN KEY (`iduser`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_session_3` FOREIGN KEY (`idcustomer`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_session_detail`
--
ALTER TABLE `tbl_session_detail`
  ADD CONSTRAINT `tbl_session_detail_1` FOREIGN KEY (`idsession`) REFERENCES `tbl_session` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_session_detail_2` FOREIGN KEY (`idcourse`) REFERENCES `tbl_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_table`
--
ALTER TABLE `tbl_table`
  ADD CONSTRAINT `tbl_table_1` FOREIGN KEY (`iddomain`) REFERENCES `tbl_domain` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
