-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2014 at 01:46 PM
-- Server version: 5.6.17-debug-log
-- PHP Version: 5.5.12

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
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`ctg_id` int(11) NOT NULL,
  `ctg_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ctg_id`, `ctg_name`) VALUES
(1, 'Máy tính'),
(2, 'Tin học'),
(3, 'Giáo dục'),
(4, 'Ẩm thực'),
(5, 'Điện thoại'),
(6, 'Xe máy'),
(7, 'Ôtô'),
(8, 'Đồ gỗ'),
(9, 'Giải khát');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
`loc_id` int(11) NOT NULL,
  `loc_user_id` int(11) NOT NULL,
  `loc_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loc_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loc_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loc_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loc_category_id` int(11) NOT NULL,
  `loc_avatar` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `loc_province_id` int(11) NOT NULL,
  `loc_coordination` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `loc_icon` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `loc_brief` text COLLATE utf8_unicode_ci NOT NULL,
  `loc_detail` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `loc_user_id`, `loc_name`, `loc_address`, `loc_phone`, `loc_email`, `loc_category_id`, `loc_avatar`, `loc_province_id`, `loc_coordination`, `loc_icon`, `loc_brief`, `loc_detail`) VALUES
(1, 1, 'Quốc tử giámmmm', 'Ngõ 25, Lương Thế Vinh, Thanh Xuân (Sau đh Hà Nội)', 'example@email.com', '', 1, '', 24, '21.027424, 105.832716', 'http://localhost/public/200_flat_icons/png/64px/16.png', 'BRIEF: Lorem ipsum dolor sit amet', '<h1>Chuy&ecirc;n kinh doanh RAM laptop</h1>\n\n<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="http://en.wikipedia.org/wiki/Neil_Armstrong">Neil Armstrong</a> and <a href="http://en.wikipedia.org/wiki/Buzz_Aldrin">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>\n\n<p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)">Michael Collins</a>, piloted the <a href="http://en.wikipedia.org/wiki/Apollo_Command/Service_Module">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>\n\n<h2>Broadcasting and <em>quotes</em> <a id="quotes" name="quotes"></a></h2>\n\n<p>Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:</p>\n\n<blockquote>\n<p>One small step for [a] man, one giant leap for mankind.</p>\n</blockquote>\n\n<p>Apollo 11 effectively ended the <a href="http://en.wikipedia.org/wiki/Space_Race">Space Race</a> and fulfilled a national goal proposed in 1961 by the late U.S. President <a href="http://en.wikipedia.org/wiki/John_F._Kennedy">John F. Kennedy</a> in a speech before the United States Congress:</p>\n\n<blockquote>\n<p>[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.</p>\n</blockquote>\n\n<h2>Technical details <a id="tech-details" name="tech-details"></a></h2>\n\n<table align="right" border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse">\n	<caption><strong>Mission crew</strong></caption>\n	<thead>\n		<tr>\n			<th scope="col">Position</th>\n			<th scope="col">Astronaut</th>\n		</tr>\n	</thead>\n	<tbody>\n		<tr>\n			<td>Commander</td>\n			<td>Neil A. Armstrong</td>\n		</tr>\n		<tr>\n			<td>Command Module Pilot</td>\n			<td>Michael Collins</td>\n		</tr>\n		<tr>\n			<td>Lunar Module Pilot</td>\n			<td>Edwin &quot;Buzz&quot; E. Aldrin, Jr.</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Launched by a <strong>Saturn V</strong> rocket from <a href="http://en.wikipedia.org/wiki/Kennedy_Space_Center">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="http://en.wikipedia.org/wiki/NASA">NASA</a>&#39;s Apollo program. The Apollo spacecraft had three parts:</p>\n\n<ol>\n	<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>\n	<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>\n	<li><strong>Lunar Module</strong> for landing on the Moon.</li>\n</ol>\n\n<p>After being sent to the Moon by the Saturn V&#39;s upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="http://en.wikipedia.org/wiki/Mare_Tranquillitatis">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="http://en.wikipedia.org/wiki/Pacific_Ocean">Pacific Ocean</a> on July 24.</p>\n\n<hr />\n<p><small>Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a></small></p>\n'),
(2, 1, 'Bệnh viện 108', 'Ngõ 15, Lương Thế Vinh, Thanh Xuân (Sau đh Hà Nội)', '+84 4 3733 6431', '', 9, '', 6, '21.018904, 105.859667', 'http://localhost/public/200_flat_icons/png/64px/20.png', 'BRIEF: Lorem ipsum dolor sit amet', '<p>DETAIL: Lorem ipsum dolor sit amet</p>\r\n'),
(4, 1, 'Bộ quốc phòng', 'Ngõ 15, Lương Thế Vinh, Thanh Xuân (Sau đh Hà Nội)', '', 'example@email.com', 1, '', 1, '21.033913, 105.842671', 'http://localhost/public/200_flat_icons/png/64px/1.png', 'BRIEF: Lorem ipsum dolor sit amet', 'DETAIL: Lorem ipsum dolor sit amet'),
(5, 1, 'Bến xe bus số 23', 'Gần 97 hoàng cầu', '+84 4 3733 6431', 'example@email.com', 1, '', 5, '21.019377, 105.825094', 'http://localhost/public/200_flat_icons/png/64px/153.png', 'Sơ lược', '<h1><strong>Đ&acirc;y l&agrave; bến</strong> xe bus</h1>\r\n'),
(6, 2, 'Bể bơi Liễu Giai', 'Ngõ 9 Văn Cao, Liễu Giai, Hoàn Kiếm', '', 'example@email.com', 1, '', 9, '21.038035, 105.818265', 'http://localhost/public/200_flat_icons/png/64px/19.png', 'Bể bơi xịn vcđ luôn', ''),
(7, 2, 'Đền Trung Nha', 'Nghĩa Đô, Hà Nội, Vietnam', '+84 4 3733 6431', '', 1, '', 1, '21.045536, 105.801350', 'http://localhost/public/200_flat_icons/png/64px/1.png', '<p style>Rất đẹp</p>', ''),
(8, 2, 'Ngoc Son Temple', 'Đinh Tiên Hoàng Hàng Trống, Hoàn Kiếm', '', 'example@email.com', 1, '', 1, '21.030683, 105.852400', 'http://localhost/public/200_flat_icons/png/64px/44.png', 'Cầu Thê Húc cong cong như con tôm dẫn vào đền Ngọc Sơn', '<h1>Ngoc Son Temple</h1>\n\n<p>Cầu Th&ecirc; H&uacute;c cong cong như con t&ocirc;m dẫn v&agrave;o đền Ngọc Sơn</p>\n'),
(9, 2, 'Trường THCS Cát Linh', 'Đống Đa', '+84 4 3733 6431', '', 3, '', 24, '21.029063,105.829341', 'http://localhost/public/200_flat_icons/png/64px/69.png', '', ''),
(10, 1, 'adsfasdf', 'ádasdasd', 'ádasd', 'ádasd', 3, '', 1, '21.018891, 105.841212', 'http://localhost/public/200_flat_icons/png/64px/88.png', 'ádadsasd', '<h1>&aacute;dasdsadasd</h1>\r\n'),
(11, 1, 'Cong vien thong nhat', 'ádasdasdasdasd', '', 'asdasdasd@asdfasdf.com', 3, '', 12, '21.010919, 105.841255', 'http://localhost/public/200_flat_icons/png/64px/57.png', '', ''),
(12, 2, 'asdasdasd', 'asdasdasd', 'asdasd', 'asdasd', 3, '', 1, '21.018210, 105.827608', 'http://localhost/public/200_flat_icons/png/64px/120.png', 'adasdadasd', '<h1>assdasdasdasdasd</h1>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
`prv_id` int(11) NOT NULL,
  `prv_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prv_coordination` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`prv_id`, `prv_name`, `prv_coordination`) VALUES
(1, 'An Giang', '10.5692175,105.1747263'),
(2, 'Bà Rịa - Vũng Tàu', '10.5620788,107.2905322'),
(3, 'Bình Dương', '11.1817129,106.6517054'),
(4, 'Bình Phước', '11.7957075,106.9231066'),
(5, 'Bình Thuận', '11.0203476,108.1820045'),
(6, 'Bình Định', '14.1079539,108.9509111'),
(7, 'Bạc Liêu', '9.3248372,105.546933'),
(8, 'Bắc Giang', '21.3737085,106.4573805'),
(9, 'Bắc Kạn', '22.2730975,105.8378774'),
(10, 'Bắc Ninh', '21.1165775,106.1065464'),
(11, 'Bến Tre', '10.0728291,106.4051114'),
(12, 'Cao Bằng', '22.7380159,106.0494085'),
(13, 'Cà Mau', '8.9862048,105.0679811'),
(14, 'Cần Thơ', '10.034187,105.7575703'),
(15, 'Điện Biên', '21.7127875,102.874269'),
(16, 'Đà Nẵng', '16.0466742,108.2064774'),
(17, 'Đắk Lắk', '12.7883934,108.241895'),
(18, 'Đắk Nông', '12.2802889,107.6619205'),
(19, 'Đồng Nai', '11.0818235,107.1637664'),
(20, 'Đồng Tháp', '10.5510161,105.566467'),
(21, 'Gia Lai', '13.7992955,108.1059861'),
(22, 'Hà Giang', '22.7776761,104.9556956'),
(23, 'Hà Nam', '20.5332115,105.9764126'),
(24, 'Hà Nội', '21.0226967,105.8369637'),
(25, 'Hà Tĩnh', '18.3392963,105.8064209'),
(26, 'Hòa Bình', '20.708704,105.3480989'),
(27, 'Hưng Yên', '20.8045265,106.0824145'),
(28, 'Hải Dương', '20.9611725,106.3695309'),
(29, 'Hải Phòng', '20.8467368,106.6987467'),
(30, 'Hậu Giang', '9.7874484,105.6119845'),
(31, 'Khánh Hòa', '12.335078,109.066493'),
(32, 'Kiên Giang', '9.9598595,104.9306084'),
(33, 'Kon Tum', '14.8095334,108.0096185'),
(34, 'Lai Châu', '22.2531053,103.156356'),
(35, 'Long An', '10.7109625,106.1227914'),
(36, 'Lào Cai', '22.3630065,104.0779805'),
(37, 'Lâm Đồng', '11.7659425,107.9995545'),
(38, 'Lạng Sơn', '21.8929554,106.732657'),
(39, 'Nam Định', '20.233981,106.2445123'),
(40, 'Nghệ An', '19.2762305,104.8414515'),
(41, 'Ninh Bình', '20.209028,105.8555065'),
(42, 'Ninh Thuận', '11.7351621,108.8954772'),
(43, 'Phú Thọ', '21.31851,105.1371371'),
(44, 'Phú Yên', '13.1997275,109.0680291'),
(45, 'Quảng Bình', '17.5069475,106.306571'),
(46, 'Quảng Nam', '15.508981,107.9778919'),
(47, 'Quảng Ngãi', '14.9759375,108.6912553'),
(48, 'Quảng Ninh', '21.1909747,107.2566414'),
(49, 'Quảng Trị', '16.733973,106.9708789'),
(50, 'Sóc Trăng', '9.5884627,105.9185214'),
(51, 'Sơn La', '21.303326,104.0923084'),
(52, 'Thanh Hóa', '19.9787457,105.227092'),
(53, 'Thái Bình', '20.5042091,106.3701174'),
(54, 'Thái Nguyên', '21.685938,105.8568484'),
(55, 'Thừa Thiên Huế', '16.3680785,107.604671'),
(56, 'Tiền Giang', '10.400271,106.304068'),
(57, 'TP HCM', '10.768451,106.6943626'),
(58, 'Trà Vinh', '9.8004634,106.2753334'),
(59, 'Tuyên Quang', '22.0980735,105.2229845'),
(60, 'Tây Ninh', '11.3748944,106.1513915'),
(61, 'Vĩnh Long', '10.1095271,105.9838544'),
(62, 'Vĩnh Phúc', '21.339069,105.5563444'),
(63, 'Yên Bái', '21.8092129,104.4941635');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`usr_id` int(11) NOT NULL,
  `usr_username` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `usr_password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `usr_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usr_display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_id`, `usr_username`, `usr_password`, `usr_email`, `usr_display_name`) VALUES
(1, 'buigiathinh', '202cb962ac59075b964b07152d234b70', 'thinhbg@haintheme.com', 'Thinh Bui'),
(2, 'lykhanhquan', '202cb962ac59075b964b07152d234b70', 'quanrua@gmail.com', 'Quan Rua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
 ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
 ADD PRIMARY KEY (`prv_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`usr_id`), ADD UNIQUE KEY `usr_id` (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `ctg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
MODIFY `prv_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
