-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 29 Septembre 2013 à 23:03
-- Version du serveur: 5.5.30-30.2
-- Version de PHP: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `spngroup_kara_demo2`
--

-- --------------------------------------------------------

--
-- Structure de la table `demo2_app`
--

CREATE TABLE IF NOT EXISTS `demo2_app` (
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
-- Contenu de la table `demo2_app`
--

INSERT INTO `demo2_app` (`id`, `name`, `phone`, `address`, `email`, `banner`, `prefix`, `alias`, `date_created`, `date_modified`, `date_activity`, `type`, `page_view`) VALUES
(1, 'Karaoke Ba Đức', '0945 03 07 09', 'Phó Cơ Điều P3 - TPVL', '', 'data/images/banner/logo.png', 'demo2_', 'demo2_', '2012-06-30 22:00:00', '0000-00-00 00:00:00', '2012-12-26 13:28:02', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `demo2_category`
--

CREATE TABLE IF NOT EXISTS `demo2_category` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` binary(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `demo2_category`
--

INSERT INTO `demo2_category` (`id`, `name`, `picture`) VALUES
(3, 'BEER', NULL),
(8, 'NƯỚC GIẢI KHÁT', NULL),
(11, 'THUỐC HÚT', NULL),
(12, 'THỨC ĂN', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `demo2_collect_customer`
--

CREATE TABLE IF NOT EXISTS `demo2_collect_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcustomer` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demo2_customer_collect_1` (`idcustomer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `demo2_collect_customer`
--

INSERT INTO `demo2_collect_customer` (`id`, `idcustomer`, `date`, `value`, `note`) VALUES
(2, 15, '2013-05-18', 1000001, 'Trả lần 1, lẻ 1 đồng'),
(3, 17, '2013-05-01', 2087000, 'thanh toán nợ cũ');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_collect_general`
--

CREATE TABLE IF NOT EXISTS `demo2_collect_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_term` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demo2_collect_1` (`id_term`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `demo2_collect_general`
--

INSERT INTO `demo2_collect_general` (`id`, `id_term`, `date`, `value`, `note`) VALUES
(5, 2, '2013-05-20', 10111, 'ddddd'),
(6, 2, '2013-09-08', 1, 'thử nghiệm');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_config`
--

CREATE TABLE IF NOT EXISTS `demo2_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `param` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `demo2_config`
--

INSERT INTO `demo2_config` (`id`, `param`, `value`) VALUES
(1, 'PRICE_HOUR_NORMAL_1', '70000'),
(2, 'PRICE_HOUR_NORMAL_2', '90000'),
(3, 'PRICE_HOUR_VIP_1', '80000'),
(4, 'PRICE_HOUR_VIP_2', '100000'),
(5, 'DISCOUNT', '0'),
(6, 'ROW_PER_PAGE', '12'),
(7, 'GUEST_VISIT', '177');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_course`
--

CREATE TABLE IF NOT EXISTS `demo2_course` (
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
-- Contenu de la table `demo2_course`
--

INSERT INTO `demo2_course` (`id`, `idcategory`, `name`, `shortname`, `unit`, `price1`, `price2`, `price3`, `price4`, `picture`) VALUES
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
-- Structure de la table `demo2_customer`
--

CREATE TABLE IF NOT EXISTS `demo2_customer` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `card` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Contenu de la table `demo2_customer`
--

INSERT INTO `demo2_customer` (`id`, `name`, `type`, `card`, `phone`, `address`, `note`, `discount`) VALUES
(1, 'Khách Hàng Vãng Lai', 0, '893970784300', '0945030709', '', '', 0),
(12, 'Lê Hồng Đức', 1, '893970784301', '0918585203', 'Cty TNHH MTV Ba Đức Vĩnh Long', 'Giám Đốc', 0),
(13, 'Nguyễn Quang Minh', 0, '893970784302', '', '', '', 0),
(14, 'Phan Thanh Phong', 0, '893970784303', '', '', 'Toàn', 0),
(15, 'Phạm Minh Tuấn Anh', 0, '893970784304', '', 'Vĩnh Long', 'Kế Toán', 0),
(16, 'Lê Nguyễn Đông Khoa', 1, '893970784305', '0945030709', 'Cty TNHH MTV Ba Đức Vĩnh Long', 'P. GĐ', 0),
(17, 'Lê Thành Tâm', 0, '893970784306', '', '', '', 0),
(18, 'Cường Cầu Đôi', 0, '893970784307', '', 'Cầu Đôi', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `demo2_domain`
--

CREATE TABLE IF NOT EXISTS `demo2_domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `demo2_domain`
--

INSERT INTO `demo2_domain` (`id`, `name`) VALUES
(1, 'KHU A'),
(2, 'KHU B'),
(3, 'KHU VIP');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_employee`
--

CREATE TABLE IF NOT EXISTS `demo2_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(2) NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `demo2_employee`
--

INSERT INTO `demo2_employee` (`id`, `name`, `job`, `gender`, `phone`, `address`) VALUES
(1, 'Phan Xuân Mai', '', 1, '0946 915 700', 'Cao Lãnh - Đồng Tháp'),
(2, 'Phan Lê Hữu Phúc', '', 0, '0986 468 896', 'Cao Lãnh, Đồng Tháp'),
(3, 'Nguyễn Văn A', 'Quản lý', 1, '11224', 'Trà Vinh');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_guest`
--

CREATE TABLE IF NOT EXISTS `demo2_guest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(16) CHARACTER SET latin1 NOT NULL,
  `entry_time` varchar(32) CHARACTER SET latin1 NOT NULL,
  `exit_time` varchar(32) CHARACTER SET latin1 NOT NULL,
  `agent` varchar(16) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `demo2_guest`
--

INSERT INTO `demo2_guest` (`id`, `ip`, `entry_time`, `exit_time`, `agent`) VALUES
(2, '192.168.1.3', '1379611115', '1379614715', '192.168.1.3');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_order_import`
--

CREATE TABLE IF NOT EXISTS `demo2_order_import` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsupplier` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `demo2_order_import_1` (`idsupplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=124 ;

--
-- Contenu de la table `demo2_order_import`
--

INSERT INTO `demo2_order_import` (`id`, `idsupplier`, `date`, `description`) VALUES
(7, 9, '2013-04-07', ''),
(10, 12, '2013-04-01', ''),
(11, 12, '2013-04-02', ''),
(12, 12, '2013-04-04', ''),
(13, 12, '2013-04-05', ''),
(14, 12, '2013-04-07', ''),
(15, 12, '2013-04-08', ''),
(16, 12, '2013-04-09', ''),
(18, 9, '2013-04-05', ''),
(19, 9, '2013-04-09', ''),
(20, 1, '2013-04-10', ''),
(21, 8, '2013-04-11', ''),
(22, 12, '2013-04-11', ''),
(23, 1, '2013-04-12', ''),
(24, 9, '2013-04-12', ''),
(25, 12, '2013-04-12', ''),
(28, 1, '2013-04-13', ''),
(29, 12, '2013-04-13', ''),
(30, 6, '2013-04-13', ''),
(31, 8, '2013-04-13', ''),
(32, 8, '2013-04-02', ''),
(33, 6, '2013-04-02', ''),
(35, 6, '2013-04-06', ''),
(36, 6, '2013-04-07', ''),
(37, 6, '2013-04-12', ''),
(38, 6, '2013-04-14', ''),
(39, 12, '2013-04-14', ''),
(40, 1, '2013-04-15', ''),
(41, 12, '2013-04-15', ''),
(42, 8, '2013-04-15', ''),
(43, 12, '2013-04-16', ''),
(45, 11, '2013-03-31', ''),
(46, 6, '2013-03-31', ''),
(48, 9, '2013-03-31', ''),
(49, 12, '2013-04-17', ''),
(50, 1, '2013-04-17', ''),
(51, 12, '2013-04-18', ''),
(52, 12, '2013-04-19', ''),
(53, 9, '2013-04-20', ''),
(54, 12, '2013-04-20', ''),
(55, 1, '2013-04-21', ''),
(57, 8, '2013-04-22', ''),
(61, 9, '2013-04-23', ''),
(62, 12, '2013-04-23', ''),
(67, 6, '2013-04-24', ''),
(68, 12, '2013-04-26', ''),
(69, 12, '2013-04-27', ''),
(70, 12, '2013-04-28', ''),
(71, 6, '2013-04-28', ''),
(72, 8, '2013-04-28', ''),
(73, 8, '2013-04-29', ''),
(76, 9, '2013-04-29', 'Đậu nành sấy: 100 bich x 4000đ'),
(77, 12, '2013-04-29', ''),
(78, 1, '2013-04-22', ''),
(79, 1, '2013-04-25', ''),
(80, 1, '2013-04-27', ''),
(81, 12, '2013-05-01', ''),
(82, 1, '2013-05-01', ''),
(83, 6, '2013-05-01', ''),
(84, 9, '2013-05-03', ''),
(85, 8, '2013-05-03', ''),
(86, 12, '2013-05-03', ''),
(87, 12, '2013-05-05', ''),
(88, 1, '2013-05-05', ''),
(89, 1, '2013-05-06', ''),
(90, 12, '2013-05-06', ''),
(91, 6, '2013-05-06', ''),
(92, 11, '2013-05-07', ''),
(93, 6, '2013-05-07', ''),
(94, 1, '2013-05-07', ''),
(95, 8, '2013-05-07', ''),
(96, 12, '2013-05-07', ''),
(97, 9, '2013-05-06', ''),
(98, 12, '2013-05-08', ''),
(99, 1, '2013-05-10', ''),
(100, 12, '2013-05-10', ''),
(101, 1, '2013-05-11', ''),
(102, 8, '2013-05-11', ''),
(105, 9, '2013-05-11', ''),
(106, 8, '2013-05-14', ''),
(107, 1, '2013-05-13', ''),
(108, 12, '2013-05-13', ''),
(111, 11, '2013-03-28', 'Tồn kho tính đến ngày 28/03'),
(112, 1, '2013-05-19', ''),
(113, 8, '2013-05-19', ''),
(114, 12, '2013-05-19', ''),
(115, 6, '2013-05-19', ''),
(116, 8, '2013-03-31', 'Tồn tính đến ngày 28/03'),
(117, 6, '2013-03-28', 'Tồn kho tính đến ngày 28/03'),
(118, 9, '2013-03-28', 'Tồn khó tính đến ngày 28/03\r\n'),
(120, 12, '2013-05-15', ''),
(121, 6, '2013-05-16', ''),
(122, 12, '2013-05-17', ''),
(123, 6, '2013-05-20', '');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_order_import_detail`
--

CREATE TABLE IF NOT EXISTS `demo2_order_import_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idorder` int(11) NOT NULL,
  `idresource` int(11) NOT NULL,
  `count` float NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `demo2_order_import_detail_1` (`idorder`),
  KEY `demo2_order_import_detail_2` (`idresource`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=209 ;

--
-- Contenu de la table `demo2_order_import_detail`
--

INSERT INTO `demo2_order_import_detail` (`id`, `idorder`, `idresource`, `count`, `price`) VALUES
(2, 7, 44, 100, 3000),
(3, 10, 53, 2, 10000),
(4, 11, 54, 2, 15000),
(5, 11, 53, 1, 15000),
(6, 11, 48, 2, 7500),
(7, 11, 55, 1, 12000),
(8, 12, 54, 2, 12500),
(9, 12, 53, 3, 13500),
(10, 12, 55, 2, 12000),
(11, 12, 48, 2, 10000),
(12, 13, 55, 1, 8000),
(13, 13, 54, 2, 11000),
(14, 13, 53, 1, 17000),
(15, 14, 53, 3, 10000),
(16, 14, 48, 1, 10000),
(17, 15, 47, 10, 9000),
(18, 14, 52, 5, 22000),
(19, 16, 54, 2, 15000),
(20, 16, 48, 3, 6700),
(23, 18, 59, 9, 26667),
(24, 18, 58, 1, 0),
(25, 19, 39, 10, 16500),
(26, 19, 40, 10, 23500),
(27, 20, 2, 5, 16000),
(28, 21, 19, 5, 313000),
(29, 21, 22, 5, 178000),
(30, 21, 20, 5, 362000),
(31, 22, 48, 3, 6700),
(32, 22, 53, 2, 12500),
(33, 22, 54, 7, 11450),
(34, 22, 56, 4, 6500),
(35, 23, 2, 5, 16000),
(36, 24, 59, 10, 27500),
(37, 25, 53, 2, 15000),
(38, 28, 2, 5, 16000),
(39, 29, 48, 2, 5000),
(40, 29, 54, 2, 13000),
(41, 29, 53, 3, 12000),
(42, 30, 27, 10, 17500),
(43, 29, 47, 10, 9000),
(44, 31, 20, 5, 362000),
(45, 32, 19, 5, 313000),
(46, 33, 27, 5, 19000),
(47, 35, 27, 10, 17500),
(48, 36, 28, 20, 2500),
(49, 37, 28, 20, 2500),
(50, 24, 61, 200, 550),
(51, 38, 28, 20, 2500),
(52, 39, 50, 1, 17000),
(53, 39, 53, 2, 11000),
(54, 39, 54, 3, 9000),
(55, 40, 2, 5, 16000),
(56, 41, 53, 2, 11000),
(57, 41, 50, 1, 15000),
(58, 42, 19, 5, 313000),
(59, 42, 21, 5, 132000),
(60, 42, 22, 5, 178000),
(61, 42, 62, 5, 280000),
(62, 42, 63, 1, 258000),
(63, 43, 50, 1, 20000),
(64, 45, 45, 44, 7000),
(65, 45, 46, 40, 7000),
(66, 46, 27, 2, 0),
(67, 46, 28, 23, 0),
(68, 46, 29, 29, 0),
(69, 46, 30, 25, 0),
(70, 46, 31, 25, 0),
(71, 46, 32, 130, 0),
(84, 46, 17, 59, 0),
(85, 48, 59, 8, 0),
(86, 48, 39, 11, 0),
(87, 48, 40, 6, 0),
(88, 48, 35, 377, 0),
(89, 49, 55, 2, 12500),
(90, 50, 2, 5, 16000),
(91, 51, 53, 2, 10500),
(92, 51, 54, 2, 12500),
(93, 52, 47, 15, 8000),
(94, 53, 61, 500, 538),
(95, 53, 39, 20, 16700),
(96, 54, 53, 3, 10000),
(97, 54, 54, 5, 12000),
(98, 54, 55, 2, 15000),
(99, 55, 2, 5, 16000),
(100, 57, 19, 10, 313000),
(101, 57, 21, 10, 132000),
(102, 57, 22, 10, 178000),
(103, 62, 53, 2, 12000),
(104, 62, 55, 2, 10000),
(105, 61, 44, 50, 3000),
(106, 61, 59, 33, 27273),
(107, 67, 31, 10, 17700),
(108, 67, 30, 10, 16800),
(109, 68, 47, 12, 8584),
(110, 68, 54, 2, 6000),
(111, 68, 53, 2, 13000),
(112, 68, 50, 1, 13000),
(113, 69, 55, 2, 10000),
(114, 69, 53, 2, 12000),
(115, 69, 54, 2, 6000),
(116, 70, 53, 3, 11660),
(117, 71, 27, 10, 17500),
(118, 72, 19, 4, 313000),
(119, 73, 19, 5, 313000),
(120, 73, 21, 10, 132000),
(121, 77, 47, 3, 15000),
(122, 77, 54, 6, 14850),
(123, 77, 55, 3, 15335),
(124, 78, 2, 3, 16000),
(125, 79, 2, 6, 16000),
(126, 80, 2, 3, 16000),
(127, 81, 53, 6, 11000),
(128, 81, 54, 5, 9000),
(129, 81, 55, 2, 12000),
(130, 82, 2, 5, 16000),
(131, 83, 28, 20, 2500),
(132, 84, 43, 40, 1700),
(133, 84, 65, 20, 15400),
(134, 84, 40, 20, 23000),
(135, 84, 39, 30, 17100),
(136, 85, 21, 10, 132000),
(137, 85, 60, 1, 173000),
(138, 86, 55, 2, 12000),
(139, 87, 47, 21, 9000),
(140, 88, 2, 4, 16000),
(141, 87, 54, 3, 7000),
(142, 89, 2, 4, 16000),
(143, 90, 53, 6, 10000),
(144, 91, 31, 10, 19500),
(145, 91, 30, 10, 16800),
(147, 92, 46, 1, 350000),
(148, 93, 27, 10, 17500),
(149, 94, 2, 3, 16000),
(150, 95, 21, 10, 132000),
(151, 96, 53, 6, 10000),
(152, 97, 61, 6, 26900),
(153, 95, 74, 1, 185000),
(154, 95, 72, 1, 148000),
(155, 98, 54, 2, 5000),
(156, 98, 55, 2, 10000),
(157, 99, 2, 3, 16000),
(158, 100, 54, 6, 8333),
(159, 101, 2, 3, 16000),
(160, 102, 19, 5, 313000),
(161, 102, 21, 5, 132000),
(162, 105, 44, 48, 3000),
(163, 106, 19, 3, 313000),
(164, 106, 22, 5, 178000),
(165, 107, 2, 3, 16000),
(166, 108, 54, 2, 9000),
(167, 108, 53, 1, 15000),
(168, 112, 2, 5, 16000),
(169, 113, 20, 4, 362000),
(170, 113, 21, 10, 132000),
(171, 114, 54, 3, 8000),
(172, 115, 27, 10, 17500),
(173, 114, 52, 1, 15000),
(174, 114, 47, 2, 8000),
(175, 116, 19, 5.12, 313000),
(176, 116, 20, 7.33, 362000),
(177, 116, 21, 38.45, 132000),
(178, 116, 22, 8.4, 178000),
(179, 116, 23, 6.54, 261500),
(180, 116, 62, 1, 280000),
(181, 116, 26, 7.67, 238000),
(182, 116, 25, 9.5, 260000),
(183, 116, 24, 3.5, 207000),
(184, 116, 63, 0.75, 86000),
(185, 116, 76, 0.95, 173000),
(186, 116, 64, 1, 108000),
(188, 117, 17, 59, 0),
(189, 117, 30, 25, 15500),
(190, 117, 31, 25, 19500),
(191, 117, 29, 29, 0),
(192, 117, 27, 2, 0),
(193, 117, 32, 130, 0),
(194, 117, 28, 23, 0),
(195, 111, 45, 0.88, 350000),
(196, 111, 46, 0.8, 350000),
(197, 118, 35, 377, 0),
(198, 118, 39, 1.1, 165000),
(199, 118, 40, 0.6, 235000),
(200, 118, 58, 8, 0),
(201, 118, 65, 0.4, 155000),
(202, 120, 54, 3, 8000),
(203, 121, 28, 20, 2500),
(204, 122, 54, 5, 10000),
(205, 122, 52, 1, 15000),
(206, 123, 29, 10, 10500),
(207, 123, 30, 10, 18500),
(208, 123, 31, 10, 20500);

-- --------------------------------------------------------

--
-- Structure de la table `demo2_paid_customer`
--

CREATE TABLE IF NOT EXISTS `demo2_paid_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcustomer` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demo2_customer_paid_1` (`idcustomer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Contenu de la table `demo2_paid_customer`
--

INSERT INTO `demo2_paid_customer` (`id`, `idcustomer`, `date`, `value`, `note`) VALUES
(18, 1, '2013-05-16', 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_paid_general`
--

CREATE TABLE IF NOT EXISTS `demo2_paid_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_term` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demo2_paid_1` (`id_term`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=89 ;

--
-- Contenu de la table `demo2_paid_general`
--

INSERT INTO `demo2_paid_general` (`id`, `id_term`, `date`, `value`, `note`) VALUES
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
-- Structure de la table `demo2_paid_pay_roll`
--

CREATE TABLE IF NOT EXISTS `demo2_paid_pay_roll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idemployee` int(11) NOT NULL,
  `date` date NOT NULL,
  `value_base` int(11) NOT NULL,
  `value_sub` int(11) NOT NULL,
  `value_pre` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demo2_paid_pay_roll_1` (`idemployee`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `demo2_paid_pay_roll`
--

INSERT INTO `demo2_paid_pay_roll` (`id`, `idemployee`, `date`, `value_base`, `value_sub`, `value_pre`, `note`) VALUES
(1, 2, '2013-09-10', 21, 31, 41, ''),
(2, 2, '2013-09-08', 2, 3, 4, NULL),
(4, 2, '2013-09-01', 1, 2, 3, 'a');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_paid_supplier`
--

CREATE TABLE IF NOT EXISTS `demo2_paid_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsupplier` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `demo2_supplier_paid_1` (`idsupplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Contenu de la table `demo2_paid_supplier`
--

INSERT INTO `demo2_paid_supplier` (`id`, `idsupplier`, `date`, `value`, `note`) VALUES
(1, 1, '2012-08-01', 2300000, 'được không ?'),
(2, 1, '2012-07-03', 350000, 'Ghi chú gì đây'),
(3, 1, '2012-07-26', 750000, 'Ghi ghi gì gì đó'),
(8, 6, '2012-09-19', 1000000, 'Thử nè được không đó !'),
(9, 1, '2012-09-19', 1000000, 'lung tung quá đi'),
(11, 1, '2012-01-01', 123, 'sdfdsfggf'),
(12, 1, '2012-09-24', 1230000, 'đâu biết'),
(13, 1, '2012-09-24', 1213232, ''),
(14, 1, '2012-09-24', 34243243, ''),
(15, 1, '2012-09-24', 21323, ''),
(16, 1, '2012-09-24', 123323, ''),
(17, 1, '2012-09-24', 21323, '');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_r2c`
--

CREATE TABLE IF NOT EXISTS `demo2_r2c` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_course` int(11) NOT NULL,
  `id_resource` int(11) NOT NULL,
  `value1` double NOT NULL,
  `value2` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `demo2_r2c_1` (`id_course`),
  KEY `demo2_r2c_2` (`id_resource`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=52 ;

--
-- Contenu de la table `demo2_r2c`
--

INSERT INTO `demo2_r2c` (`id`, `id_course`, `id_resource`, `value1`, `value2`) VALUES
(28, 114, 24, 24, 1),
(29, 108, 20, 24, 1),
(30, 113, 23, 24, 1),
(31, 114, 1, 10, 1),
(32, 114, 2, 1, 1),
(33, 107, 19, 24, 1),
(34, 111, 21, 20, 1),
(35, 112, 22, 20, 1),
(36, 137, 26, 24, 1),
(37, 140, 62, 24, 1),
(38, 138, 25, 24, 1),
(39, 128, 69, 24, 1),
(40, 54, 64, 24, 1),
(41, 126, 63, 24, 1),
(42, 55, 74, 24, 1),
(43, 129, 73, 24, 1),
(44, 56, 75, 24, 1),
(45, 127, 72, 24, 1),
(46, 136, 71, 24, 1),
(47, 53, 70, 24, 1),
(48, 143, 76, 24, 1),
(49, 134, 58, 1, 1),
(50, 144, 59, 1, 1),
(51, 119, 30, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `demo2_resource`
--

CREATE TABLE IF NOT EXISTS `demo2_resource` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `idsupplier` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `demo2_resource_1` (`idsupplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=77 ;

--
-- Contenu de la table `demo2_resource`
--

INSERT INTO `demo2_resource` (`id`, `idsupplier`, `name`, `unit`, `price`, `description`) VALUES
(1, 1, 'Nước đá ống', 'Kg', 0, 'Nước đá dùng để uống trà, cafe'),
(2, 1, 'Nước đá ướp', 'Cây', 0, 'Dùng để ướp lạnh'),
(3, 1, 'Nước đá viên', 'Kg', 0, 'Viên cưa dùng uống bia'),
(14, 1, 'Nước đá tủ lạnh', 'Gói', 0, 'Nước đá lấy từ tủ lạnh nhà'),
(17, 6, 'Bánh', 'Bịch', 0, ''),
(19, 8, 'Heniken', 'Két', 313000, ''),
(20, 8, 'Heniken', 'Thùng', 362000, ''),
(21, 8, 'Sài gòn đỏ', 'Két', 132000, ''),
(22, 8, 'Sài gòn XK', 'Két', 178000, ''),
(23, 8, 'Sài Gòn XK', 'Thùng', 261500, ''),
(24, 8, 'Bia 333', 'Thùng', 207000, ''),
(25, 8, 'Tiger Bạc', 'Két', 260000, ''),
(26, 8, 'Tiger', 'Két', 238000, ''),
(27, 6, 'Xúc Xích', 'Bịch', 0, ''),
(28, 6, 'CW DOUBLEMINT', 'Hộp', 0, ''),
(29, 6, 'Chả Giò', 'Bịch', 0, ''),
(30, 6, 'Khô Bò', 'Bịch', 0, ''),
(31, 6, 'Mít Sấy', 'Bịch', 0, ''),
(32, 6, 'Đậu Phộng ', 'Bịch', 0, ''),
(34, 9, 'Trái Cây', 'Dĩa', 0, ''),
(35, 9, 'Đậu Phộng sấy', 'Bịch', 0, ''),
(36, 9, 'Đậu Phộng chiên', 'Bịch', 0, ''),
(39, 9, 'Thuốc Craven', 'Cây', 165000, ''),
(40, 9, 'Thuốc 555', 'Cây', 235000, ''),
(43, 9, 'Quẹt gas', 'Hộp', 85000, ''),
(44, 9, 'Đậu Nành', 'Gói', 3000, 'Mua ngoài'),
(45, 11, 'Cơm Cháy', 'Thùng', 350000, 'abc'),
(46, 11, 'Cá Cơm', 'Thùng', 350000, '0'),
(47, 12, 'Ổi', 'Kg', 0, ''),
(48, 12, 'Củ Sắn', 'Kg', 0, ''),
(49, 12, 'Mít', 'Kg', 0, ''),
(50, 12, 'Chôm Chôm', 'Kg', 0, ''),
(51, 12, 'Xoài Thái', 'Kg', 0, ''),
(52, 12, 'Xoài ĐàiLoan', 'Kg', 0, ''),
(53, 12, 'Xoài chua', 'Kg', 0, ''),
(54, 12, 'Mận', 'Kg', 0, ''),
(55, 12, 'Sơ ri', 'Kg', 0, ''),
(56, 12, 'Thơm', 'Kg', 0, ''),
(57, 12, 'Khóm', 'Kg', 0, ''),
(58, 9, 'Khô Mực', 'Con', 0, ''),
(59, 9, 'Khô_Mực', 'Con', 0, ''),
(60, 8, 'Sting', 'Thùng', 173000, ''),
(61, 9, 'Khăn Lạnh', 'Hộp', 27000, ''),
(62, 8, 'Tiger', 'Thùng', 280000, ''),
(63, 8, 'Lavie', 'Thùng', 86000, ''),
(64, 8, 'C2', 'Thùng', 108000, ''),
(65, 9, 'Thuốc Hút', 'Cây', 155000, ''),
(66, 9, 'Bánh tráng rế', 'Bịch', 15000, 'Bánh tráng gói chả giò rế'),
(67, 9, 'Thịt ghẹ', 'Kg', 80000, 'Thịt ghẹ gói chả giò rế'),
(68, 9, 'Khoai cao', 'Kg', 30000, 'Khoai cao gói chả giò rế'),
(69, 8, '7 Up', 'Thùng', 153000, ''),
(70, 8, 'Trà Xanh', 'Thùng', 158000, ''),
(71, 8, 'Red_Bull', 'Thùng', 186000, ''),
(72, 8, 'Pepsi', 'Thùng', 153000, ''),
(73, 8, 'Cam', 'Thùng', 130000, ''),
(74, 8, 'Dr Thanh', 'Thùng', 186000, ''),
(75, 8, 'Nước Yến', 'Thùng', 142000, ''),
(76, 8, 'Sting', 'Thùng', 173000, '');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_session`
--

CREATE TABLE IF NOT EXISTS `demo2_session` (
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
  KEY `demo2_session_3` (`idcustomer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=441 ;

--
-- Contenu de la table `demo2_session`
--

INSERT INTO `demo2_session` (`id`, `idtable`, `iduser`, `idcustomer`, `datetime`, `datetimeend`, `note`, `status`, `discount_value`, `discount_percent`, `surtax`, `payment`, `value`) VALUES
(390, 1, 1, 1, '2013-05-11 22:34:00', '2013-05-12 00:55:00', '', 1, 0, 0, 0, 0, 0),
(438, 1, 1, 1, '2013-09-03 10:30:00', '2013-09-03 14:00:00', '', 0, 0, 0, 0, 0, 491000),
(440, 17, 1, 1, '2013-08-11 01:11:39', '2013-08-11 01:55:00', '', 0, 0, 0, 0, 0, 159000);

-- --------------------------------------------------------

--
-- Structure de la table `demo2_session_detail`
--

CREATE TABLE IF NOT EXISTS `demo2_session_detail` (
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
-- Contenu de la table `demo2_session_detail`
--

INSERT INTO `demo2_session_detail` (`id`, `idsession`, `idcourse`, `count`, `price`) VALUES
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
-- Structure de la table `demo2_store`
--

CREATE TABLE IF NOT EXISTS `demo2_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `demo2_store`
--

INSERT INTO `demo2_store` (`id`, `name`, `note`) VALUES
(1, 'Kho nhà', 'Ghi chú gì đây ?');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_supplier`
--

CREATE TABLE IF NOT EXISTS `demo2_supplier` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `debt` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `demo2_supplier`
--

INSERT INTO `demo2_supplier` (`id`, `name`, `phone`, `address`, `note`, `debt`) VALUES
(1, 'ĐL Nước Đá', '0703456456', 'Trí Phường 4', 'Cung cấp nước đá', 0),
(6, 'Coop Mart', '070', 'Vĩnh Long', 'Cung cấp mọi thứ', 0),
(8, 'Nhà PP Đoan Trang', '0703 822 227 - ', '64/6N Trần Phú P4 TP Vĩnh Long', '', 0),
(9, 'KHÁC', '', '', '', 0),
(11, 'CH Tuấn', '', 'P4, TPVL', 'Cung cấp thực phẩm', 0),
(12, 'Vựa Trái Cây', '', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `demo2_table`
--

CREATE TABLE IF NOT EXISTS `demo2_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iddomain` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iddomain` (`iddomain`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Contenu de la table `demo2_table`
--

INSERT INTO `demo2_table` (`id`, `iddomain`, `name`, `iduser`, `type`) VALUES
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
-- Structure de la table `demo2_term`
--

CREATE TABLE IF NOT EXISTS `demo2_term` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `demo2_term`
--

INSERT INTO `demo2_term` (`id`, `name`, `type`) VALUES
(1, 'Tiền Điện', 0),
(2, 'Tiền Nước', 0),
(3, 'Thuế', 0),
(4, 'Lương Nhân Viên', 0),
(10, 'Tiền Ăn Nhân Viên', 0),
(11, 'CP Khác', 0),
(12, 'Tiền Phụ Cấp', 0);

-- --------------------------------------------------------

--
-- Structure de la table `demo2_term_collect`
--

CREATE TABLE IF NOT EXISTS `demo2_term_collect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `demo2_term_collect`
--

INSERT INTO `demo2_term_collect` (`id`, `name`) VALUES
(2, 'Phụ Phẩm'),
(3, 'Đặc Biệt');

-- --------------------------------------------------------

--
-- Structure de la table `demo2_tracking`
--

CREATE TABLE IF NOT EXISTS `demo2_tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `estate_rate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `demo2_tracking`
--

INSERT INTO `demo2_tracking` (`id`, `date_start`, `date_end`, `estate_rate`) VALUES
(1, '2013-01-01', '2013-01-31', 0),
(2, '2013-02-01', '2013-02-28', 0),
(3, '2013-03-01', '2013-03-31', 0),
(4, '2013-04-01', '2013-04-30', 0),
(5, '2013-05-01', '2013-05-31', 0),
(6, '2013-06-01', '2013-07-31', 0),
(7, '2013-07-01', '2013-07-31', 0);

-- --------------------------------------------------------

--
-- Structure de la table `demo2_tracking_store`
--

CREATE TABLE IF NOT EXISTS `demo2_tracking_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tracking` int(11) NOT NULL,
  `id_resource` int(11) NOT NULL,
  `count_old` int(11) NOT NULL,
  `count_import` int(11) NOT NULL,
  `count_export` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `demo2_unit`
--

CREATE TABLE IF NOT EXISTS `demo2_unit` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Contenu de la table `demo2_unit`
--

INSERT INTO `demo2_unit` (`id`, `name`) VALUES
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
-- Structure de la table `demo2_user`
--

CREATE TABLE IF NOT EXISTS `demo2_user` (
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
-- Contenu de la table `demo2_user`
--

INSERT INTO `demo2_user` (`id`, `name`, `email`, `pass`, `gender`, `note`, `datecreate`, `dateupdate`, `dateactivity`, `type`, `code`) VALUES
(1, 'Demo2', 'demo2111@gmail.com', 'admin123456', 0, ' ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, '');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `demo2_collect_customer`
--
ALTER TABLE `demo2_collect_customer`
  ADD CONSTRAINT `demo2_customer_collect_1` FOREIGN KEY (`idcustomer`) REFERENCES `demo2_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demo2_collect_general`
--
ALTER TABLE `demo2_collect_general`
  ADD CONSTRAINT `demo2_collect_general_1` FOREIGN KEY (`id_term`) REFERENCES `demo2_term_collect` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demo2_course`
--
ALTER TABLE `demo2_course`
  ADD CONSTRAINT `demo2_course_1` FOREIGN KEY (`idcategory`) REFERENCES `demo2_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demo2_order_import`
--
ALTER TABLE `demo2_order_import`
  ADD CONSTRAINT `demo2_order_import_1` FOREIGN KEY (`idsupplier`) REFERENCES `demo2_supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demo2_order_import_detail`
--
ALTER TABLE `demo2_order_import_detail`
  ADD CONSTRAINT `demo2_order_import_detail_1` FOREIGN KEY (`idorder`) REFERENCES `demo2_order_import` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `demo2_order_import_detail_2` FOREIGN KEY (`idresource`) REFERENCES `demo2_resource` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demo2_paid_customer`
--
ALTER TABLE `demo2_paid_customer`
  ADD CONSTRAINT `demo2_customer_paid_1` FOREIGN KEY (`idcustomer`) REFERENCES `demo2_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demo2_paid_general`
--
ALTER TABLE `demo2_paid_general`
  ADD CONSTRAINT `demo2_paid_general_1` FOREIGN KEY (`id_term`) REFERENCES `demo2_term` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demo2_paid_supplier`
--
ALTER TABLE `demo2_paid_supplier`
  ADD CONSTRAINT `demo2_supplier_paid_1` FOREIGN KEY (`idsupplier`) REFERENCES `demo2_supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demo2_r2c`
--
ALTER TABLE `demo2_r2c`
  ADD CONSTRAINT `demo2_r2c_1` FOREIGN KEY (`id_course`) REFERENCES `demo2_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `demo2_r2c_2` FOREIGN KEY (`id_resource`) REFERENCES `demo2_resource` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demo2_resource`
--
ALTER TABLE `demo2_resource`
  ADD CONSTRAINT `demo2_resource_1` FOREIGN KEY (`idsupplier`) REFERENCES `demo2_supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demo2_session`
--
ALTER TABLE `demo2_session`
  ADD CONSTRAINT `demo2_session_1` FOREIGN KEY (`idtable`) REFERENCES `demo2_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `demo2_session_2` FOREIGN KEY (`iduser`) REFERENCES `demo2_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `demo2_session_3` FOREIGN KEY (`idcustomer`) REFERENCES `demo2_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demo2_session_detail`
--
ALTER TABLE `demo2_session_detail`
  ADD CONSTRAINT `demo2_session_detail_1` FOREIGN KEY (`idsession`) REFERENCES `demo2_session` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `demo2_session_detail_2` FOREIGN KEY (`idcourse`) REFERENCES `demo2_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `demo2_table`
--
ALTER TABLE `demo2_table`
  ADD CONSTRAINT `demo2_table_1` FOREIGN KEY (`iddomain`) REFERENCES `demo2_domain` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
