-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2014 at 10:08 PM
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
  `loc_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loc_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loc_category` int(11) NOT NULL,
  `loc_avatar` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `loc_province_id` int(11) NOT NULL,
  `loc_coordination` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `loc_icon` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `loc_brief` text COLLATE utf8_unicode_ci NOT NULL,
  `loc_detail` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`loc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `loc_user_id`, `loc_name`, `loc_address`, `loc_phone`, `loc_email`, `loc_category`, `loc_avatar`, `loc_province_id`, `loc_coordination`, `loc_icon`, `loc_brief`, `loc_detail`) VALUES
(1, 0, 'Quốc tử giámmmm', 'Ngõ 25, Lương Thế Vinh, Thanh Xuân (Sau đh Hà Nội)', '', '', 0, '', 24, '21.027424, 105.832716', 'http://localhost/public/200_flat_icons/png/64px/16.png', 'BRIEF: Lorem ipsum dolor sit amet', '<h1>Chuy&ecirc;n kinh doanh RAM laptop</h1>\n\n<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="http://en.wikipedia.org/wiki/Neil_Armstrong">Neil Armstrong</a> and <a href="http://en.wikipedia.org/wiki/Buzz_Aldrin">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>\n\n<p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)">Michael Collins</a>, piloted the <a href="http://en.wikipedia.org/wiki/Apollo_Command/Service_Module">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>\n\n<h2>Broadcasting and <em>quotes</em> <a id="quotes" name="quotes"></a></h2>\n\n<p>Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:</p>\n\n<blockquote>\n<p>One small step for [a] man, one giant leap for mankind.</p>\n</blockquote>\n\n<p>Apollo 11 effectively ended the <a href="http://en.wikipedia.org/wiki/Space_Race">Space Race</a> and fulfilled a national goal proposed in 1961 by the late U.S. President <a href="http://en.wikipedia.org/wiki/John_F._Kennedy">John F. Kennedy</a> in a speech before the United States Congress:</p>\n\n<blockquote>\n<p>[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.</p>\n</blockquote>\n\n<h2>Technical details <a id="tech-details" name="tech-details"></a></h2>\n\n<table align="right" border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse">\n	<caption><strong>Mission crew</strong></caption>\n	<thead>\n		<tr>\n			<th scope="col">Position</th>\n			<th scope="col">Astronaut</th>\n		</tr>\n	</thead>\n	<tbody>\n		<tr>\n			<td>Commander</td>\n			<td>Neil A. Armstrong</td>\n		</tr>\n		<tr>\n			<td>Command Module Pilot</td>\n			<td>Michael Collins</td>\n		</tr>\n		<tr>\n			<td>Lunar Module Pilot</td>\n			<td>Edwin &quot;Buzz&quot; E. Aldrin, Jr.</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Launched by a <strong>Saturn V</strong> rocket from <a href="http://en.wikipedia.org/wiki/Kennedy_Space_Center">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="http://en.wikipedia.org/wiki/NASA">NASA</a>&#39;s Apollo program. The Apollo spacecraft had three parts:</p>\n\n<ol>\n	<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>\n	<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>\n	<li><strong>Lunar Module</strong> for landing on the Moon.</li>\n</ol>\n\n<p>After being sent to the Moon by the Saturn V&#39;s upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="http://en.wikipedia.org/wiki/Mare_Tranquillitatis">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="http://en.wikipedia.org/wiki/Pacific_Ocean">Pacific Ocean</a> on July 24.</p>\n\n<hr />\n<p><small>Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a></small></p>\n'),
(2, 0, 'Bệnh viện 108', 'Ngõ 15, Lương Thế Vinh, Thanh Xuân (Sau đh Hà Nội)', '', '', 0, '', 0, '21.018904, 105.859667', 'http://localhost/public/200_flat_icons/png/64px/20.png', 'BRIEF: Lorem ipsum dolor sit amet', 'DETAIL: Lorem ipsum dolor sit amet'),
(4, 0, 'Bộ quốc phòng', 'Ngõ 15, Lương Thế Vinh, Thanh Xuân (Sau đh Hà Nội)', '', '', 0, '', 0, '21.033913, 105.842671', 'http://localhost/public/200_flat_icons/png/64px/1.png', 'BRIEF: Lorem ipsum dolor sit amet', 'DETAIL: Lorem ipsum dolor sit amet'),
(5, 0, 'Bến xe bus số 23', 'Gần 97 hoàng cầu', '', '', 0, '', 5, '21.019377, 105.825094', 'http://localhost/public/200_flat_icons/png/64px/153.png', 'Sơ lược', '<h2>Đ&acirc;y l&agrave; bến xe bus</h2>\n'),
(6, 0, 'Bể bơi Liễu Giai', 'Ngõ 9 Văn Cao, Liễu Giai, Hoàn Kiếm', '', '', 0, '', 9, '21.038035, 105.818265', 'http://localhost/public/200_flat_icons/png/64px/19.png', 'Bể bơi xịn vcđ luôn', ''),
(7, 0, 'Đền Trung Nha', 'Nghĩa Đô, Hà Nội, Vietnam', '', '', 0, '', 1, '21.045536, 105.801350', 'http://localhost/public/200_flat_icons/png/64px/1.png', '<p style>Rất đẹp</p>', ''),
(8, 0, 'Ngoc Son Temple', 'Đinh Tiên Hoàng Hàng Trống, Hoàn Kiếm', '', '', 0, '', 1, '21.030683, 105.852400', 'http://localhost/resource/icon/200_flat_icons/png/64px/44.png', 'Cầu Thê Húc cong cong như con tôm dẫn vào đền Ngọc Sơn', '<h1>Ngoc Son Temple</h1>\n\n<p>Cầu Th&ecirc; H&uacute;c cong cong như con t&ocirc;m dẫn v&agrave;o đền Ngọc Sơn</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `prv_id` int(11) NOT NULL AUTO_INCREMENT,
  `prv_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prv_coordination` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`prv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`prv_id`, `prv_name`, `prv_coordination`) VALUES
(1, 'An Giang', ''),
(2, 'Bà Rịa - Vũng Tàu', ''),
(3, 'Bình Dương', ''),
(4, 'Bình Phước', ''),
(5, 'Bình Thuận', ''),
(6, 'Bình Định', ''),
(7, 'Bạc Liêu', ''),
(8, 'Bắc Giang', ''),
(9, 'Bắc Kạn', ''),
(10, 'Bắc Ninh', ''),
(11, 'Bến Tre', ''),
(12, 'Cao Bằng', ''),
(13, 'Cà Mau', ''),
(14, 'Cần Thơ', ''),
(15, 'Điện Biên', ''),
(16, 'Đà Nẵng', ''),
(17, 'Đắk Lắk', ''),
(18, 'Đắk Nông', ''),
(19, 'Đồng Nai', ''),
(20, 'Đồng Tháp', ''),
(21, 'Gia Lai', ''),
(22, 'Hà Giang', ''),
(23, 'Hà Nam', ''),
(24, 'Hà Nội', ''),
(25, 'Hà Tĩnh', ''),
(26, 'Hòa Bình', ''),
(27, 'Hưng Yên', ''),
(28, 'Hải Dương', ''),
(29, 'Hải Phòng', ''),
(30, 'Hậu Giang', ''),
(31, 'Khánh Hòa', ''),
(32, 'Kiên Giang', ''),
(33, 'Kon Tum', ''),
(34, 'Lai Châu', ''),
(35, 'Long An', ''),
(36, 'Lào Cai', ''),
(37, 'Lâm Đồng', ''),
(38, 'Lạng Sơn', ''),
(39, 'Nam Định', ''),
(40, 'Nghệ An', ''),
(41, 'Ninh Bình', ''),
(42, 'Ninh Thuận', ''),
(43, 'Phú Thọ', ''),
(44, 'Phú Yên', ''),
(45, 'Quảng Bình', ''),
(46, 'Quảng Nam', ''),
(47, 'Quảng Ngãi', ''),
(48, 'Quảng Ninh', ''),
(49, 'Quảng Trị', ''),
(50, 'Sóc Trăng', ''),
(51, 'Sơn La', ''),
(52, 'Thanh Hóa', ''),
(53, 'Thái Bình', ''),
(54, 'Thái Nguyên', ''),
(55, 'Thừa Thiên Huế', ''),
(56, 'Tiền Giang', ''),
(57, 'TP HCM', ''),
(58, 'Trà Vinh', ''),
(59, 'Tuyên Quang', ''),
(60, 'Tây Ninh', ''),
(61, 'Vĩnh Long', ''),
(62, 'Vĩnh Phúc', ''),
(63, 'Yên Bái', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_username` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `usr_password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `usr_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usr_display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`usr_id`),
  UNIQUE KEY `usr_id` (`usr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
