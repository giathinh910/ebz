-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2014 at 12:28 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fit_ebz`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `loc_id` int(11) NOT NULL AUTO_INCREMENT,
  `loc_user_id` int(11) NOT NULL,
  `loc_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loc_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loc_province` int(11) NOT NULL,
  `loc_coordination` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `loc_icon` text COLLATE utf8_unicode_ci NOT NULL,
  `loc_brief` text COLLATE utf8_unicode_ci NOT NULL,
  `loc_detail` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`loc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `loc_user_id`, `loc_name`, `loc_address`, `loc_province`, `loc_coordination`, `loc_icon`, `loc_brief`, `loc_detail`) VALUES
(1, 0, 'Quốc tử giám', 'Ngõ 15, Lương Thế Vinh, Thanh Xuân (Sau đh Hà Nội)', 0, '21.027424, 105.832716', 'http://localhost/public/200_flat_icons/png/64px/16.png', 'BRIEF: Lorem ipsum dolor sit amet', 'DETAIL: Lorem ipsum dolor sit amet'),
(2, 0, 'Bệnh viện 108', 'Ngõ 15, Lương Thế Vinh, Thanh Xuân (Sau đh Hà Nội)', 0, '21.018904, 105.859667', 'http://localhost/public/200_flat_icons/png/64px/20.png', 'BRIEF: Lorem ipsum dolor sit amet', 'DETAIL: Lorem ipsum dolor sit amet'),
(3, 0, 'Bệnh viện nhi trung ương', 'Ngõ 15, Lương Thế Vinh, Thanh Xuân (Sau đh Hà Nội)', 0, '21.024673, 105.808683', 'http://localhost/public/200_flat_icons/png/64px/32.png', 'BRIEF: Lorem ipsum dolor sit amet', 'DETAIL: Lorem ipsum dolor sit amet'),
(4, 0, 'Bộ quốc phòng', 'Ngõ 15, Lương Thế Vinh, Thanh Xuân (Sau đh Hà Nội)', 0, '21.033913, 105.842671', 'http://localhost/public/200_flat_icons/png/64px/1.png', 'BRIEF: Lorem ipsum dolor sit amet', 'DETAIL: Lorem ipsum dolor sit amet'),
(5, 0, 'Bến xe bus số 23', 'Gần 97 hoàng cầu', 0, '21.019377, 105.825094', 'http://localhost/public/200_flat_icons/png/64px/153.png', 'Sơ lược', '<h1>Chi tiết</h1>\n'),
(6, 0, 'Bể bơi Liễu Giai', 'Ngõ 9 Văn Cao, Liễu Giai, Hoàn Kiếm', 1, '21.038035, 105.818265', 'http://localhost/public/200_flat_icons/png/64px/19.png', 'Bể bơi xịn vcđ luôn', ''),
(7, 0, 'Đền Trung Nha', 'Nghĩa Đô, Hà Nội, Vietnam', 1, '21.045536, 105.801350', 'http://localhost/public/200_flat_icons/png/64px/1.png', '<p style>Rất đẹp</p>', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
