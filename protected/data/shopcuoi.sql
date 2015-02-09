-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2015 at 05:22 PM
-- Server version: 5.1.68
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopcuoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `name`, `link`, `date`) VALUES
(1, 'Shop Cuội', 'http://shopcuoi.com', '2014-07-12 11:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `productID` mediumint(9) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `important` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `productID`, `link`, `important`) VALUES
(1, 101, '8.jpg', '1'),
(2, 69, '14.jpg', '1'),
(3, 95, '6.jpg', '1'),
(5, 77, '15.jpg', '1'),
(6, 32, '1.jpg', '1'),
(7, 18, '15.jpg', '1'),
(8, 40, '15.jpg', '1'),
(9, 35, '11.jpg', '1'),
(10, 91, '4.jpg', '1'),
(11, 87, '10.jpg', '1'),
(12, 68, '2.jpg', '1'),
(13, 74, '7.jpg', '1'),
(14, 24, '15.jpg', '1'),
(15, 90, '13.jpg', '1'),
(16, 31, '12.jpg', '1'),
(17, 29, '7.jpg', '1'),
(18, 67, '8.jpg', '1'),
(19, 29, '13.jpg', '1'),
(20, 17, '6.jpg', '1'),
(21, 19, '15.jpg', '1'),
(22, 30, '13.jpg', '1'),
(24, 26, '15.jpg', '1'),
(25, 84, '15.jpg', '1'),
(26, 28, '5.jpg', '1'),
(27, 11, '15.jpg', '1'),
(28, 56, '11.jpg', '1'),
(29, 67, '11.jpg', '1'),
(30, 44, '2.jpg', '1'),
(31, 98, '8.jpg', '1'),
(32, 78, '15.jpg', '1'),
(33, 19, '5.jpg', '1'),
(34, 43, '8.jpg', '1'),
(35, 100, '5.jpg', '1'),
(36, 55, '5.jpg', '1'),
(37, 1, '2.jpg', '1'),
(38, 9, '13.jpg', '1'),
(39, 34, '8.jpg', '1'),
(40, 101, '13.jpg', '1'),
(41, 62, '2.jpg', '1'),
(42, 94, '5.jpg', '1'),
(43, 16, '11.jpg', '1'),
(44, 95, '8.jpg', '1'),
(45, 89, '11.jpg', '1'),
(46, 4, '7.jpg', '1'),
(47, 24, '3.jpg', '1'),
(48, 8, '8.jpg', '1'),
(49, 88, '14.jpg', '1'),
(50, 32, '13.jpg', '1'),
(51, 81, '10.jpg', '1'),
(52, 8, '7.jpg', '1'),
(53, 7, '3.jpg', '1'),
(54, 24, '1.jpg', '1'),
(55, 78, '4.jpg', '1'),
(56, 33, '4.jpg', '1'),
(57, 32, '1.jpg', '1'),
(58, 60, '7.jpg', '1'),
(59, 33, '12.jpg', '1'),
(60, 78, '7.jpg', '1'),
(61, 77, '2.jpg', '1'),
(62, 23, '9.jpg', '1'),
(63, 84, '9.jpg', '1'),
(64, 11, '1.jpg', '1'),
(65, 3, '6.jpg', '1'),
(66, 44, '15.jpg', '1'),
(67, 81, '3.jpg', '1'),
(68, 96, '1.jpg', '1'),
(69, 92, '11.jpg', '1'),
(70, 20, '14.jpg', '1'),
(71, 97, '1.jpg', '1'),
(72, 3, '3.jpg', '1'),
(73, 57, '14.jpg', '1'),
(74, 78, '12.jpg', '1'),
(75, 67, '11.jpg', '1'),
(76, 34, '8.jpg', '1'),
(77, 85, '9.jpg', '1'),
(78, 69, '10.jpg', '1'),
(79, 43, '11.jpg', '1'),
(80, 102, '6.jpg', '1'),
(81, 7, '7.jpg', '1'),
(82, 90, '11.jpg', '1'),
(83, 24, '10.jpg', '1'),
(84, 39, '11.jpg', '1'),
(85, 76, '8.jpg', '1'),
(86, 81, '13.jpg', '1'),
(87, 59, '15.jpg', '1'),
(88, 96, '4.jpg', '1'),
(89, 58, '1.jpg', '1'),
(90, 55, '3.jpg', '1'),
(91, 64, '1.jpg', '1'),
(92, 57, '4.jpg', '1'),
(93, 98, '5.jpg', '1'),
(94, 69, '15.jpg', '1'),
(95, 2, '1.jpg', '1'),
(96, 82, '14.jpg', '1'),
(97, 101, '13.jpg', '1'),
(98, 16, '1.jpg', '1'),
(99, 18, '13.jpg', '1'),
(100, 4, '7.jpg', '1'),
(101, 1, NULL, '1'),
(102, 1, NULL, '1'),
(103, 1, NULL, '1'),
(104, 1, 'PhotoShare.png', '1'),
(105, 1, 'IMG_0458.jpg', '1'),
(106, 1, 'Capture.PNG', '1'),
(107, 1, 'Image.jpg', '1'),
(108, 1, 'PhotoShare.png', '1'),
(109, 1, 'PhotoShare.png', '1'),
(110, 1, 'PhotoShare.png', '1'),
(111, 1, 'PhotoShare.png', '1'),
(112, 1, 'IMG_28062013_171706.png', '1'),
(113, 1, 'IMG_28062013_171706.png', '1'),
(114, 1, 'IMG_28062013_171706.png', '1'),
(115, 1, 'IMG_28062013_171706.png', '1'),
(116, 1, 'IMG_28062013_171706.png', '1'),
(117, 1, 'IMG_28062013_171706.png', '1'),
(118, 1, 'IMG_28062013_171706.png', '1'),
(119, 1, 'IMG_28062013_171706.png', '1'),
(120, 1, 'IMG_28062013_171706.png', '1'),
(170, 105, 'IMG_28062013_171706.png', '1'),
(171, 105, 'Image.jpg', '1'),
(172, 106, '1-1377862490.jpg', '1'),
(173, 106, 'peter-pan-sieu-xinh-trai-cua-man-anh-hollywood-2015.jpg', '1'),
(174, 106, 'dam-doi-cho-me-va-be-don-xuan-va-noel.jpg', '1'),
(176, 6, 'w600.jpg', '1'),
(177, 108, '20140928_130329.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `infopage`
--

CREATE TABLE IF NOT EXISTS `infopage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home` text,
  `album` text,
  `shopping` text,
  `map` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infopage`
--

INSERT INTO `infopage` (`id`, `home`, `album`, `shopping`, `map`) VALUES
(1, '<p>\r\n	ktjkjkdfsdalsdsfdsfs</p>\r\n<p style="text-align: center;">\r\n	<u>df</u></p>\r\n<p style="text-align: center;">\r\n	<span style="background-color:#000;">sdasdasdada</span></p>\r\n', '<p>\r\n	ase</p>\r\n<p>\r\n	dfgfd</p>\r\n<p>\r\n	dfsd</p>\r\n', '<p>\r\n	adfsdf</p>\r\n<p>\r\n	ghjy</p>', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `link`, `content`, `date`) VALUES
(1, 'Người Hà Nội thức trắng đêm những ngày cuối cùng mùa World Cup 2014', 'http://kenh14.vn/xa-hoi/nguoi-ha-noi-thuc-trang-dem-nhung-ngay-cuoi-cung-mua-world-cup-2014-20140708112643708.chn', '<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 20px; background-color: rgb(239, 239, 239);">Chỉ c&ograve;n v&agrave;i ng&agrave;y nữa l&agrave; đến trận chung kết World Cup 2014 được mong chờ nhất suốt 4 năm qua. Sau gần 1 th&aacute;ng ăn - ngủ với b&oacute;ng đ&aacute;, người H&agrave; Nội vẫn giữ nguy&ecirc;n niềm đam m&ecirc; bất tận với giải đấu h&agrave;ng đầu thế giới.</span></p>\r\n', '2014-07-09 00:30:23'),
(2, 'Người yêu cũ của anh trai Bảo Thy: "Anh Bảo luôn rất chiều chuộng bạn gái"', 'http://kenh14.vn/doi-song/nguoi-yeu-cu-cua-anh-trai-bao-thy-anh-bao-la-nguoi-dan-ong-tot-20140708110224170.chn', '<p>\r\n	<span style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px; background-color: rgb(255, 255, 255);">H&ocirc;m qua, c&acirc;u status của Thế Bảo &ndash; anh trai Bảo Thy về&nbsp;</span><a href="http://kenh14.vn/doi-song/anh-trai-bao-thy-khang-dinh-cuoc-tinh-voi-tam-tit-la-sai-lam-lon-nhat-trong-doi-20140708104822938.chn" style="outline: none; border: 0px; margin: 0px; padding: 0px; text-decoration: none; color: rgb(61, 83, 79); font-size: 16px; line-height: 22px; background-color: rgb(255, 255, 255);" target="_blank" title="chuyện tình cảm mà theo anh là sai lầmvới Tâm Tít">chuyện t&igrave;nh cảm m&agrave; theo anh l&agrave; sai lầm với T&acirc;m T&iacute;t</a><span style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px; background-color: rgb(255, 255, 255);">&nbsp;đ&atilde; khiến dư luận kh&ocirc;ng khỏi ngỡ ng&agrave;ng. Trong đ&oacute;, một chi tiết anh c&oacute; nhắc tới con số 200 triệu để t&aacute;n tỉnh c&ocirc; n&agrave;ng hot girl đ&atilde; g&acirc;y &ldquo;s&oacute;ng&rdquo; tr&ecirc;n cộng đồng mạng. Rất nhiều &yacute; kiến cho rằng sau chia tay m&agrave; người con trai kể lể lại những việc n&agrave;y l&agrave; một h&agrave;nh động kh&ocirc;ng đẹp mắt. Nhưng một số kh&aacute;c lại b&agrave;y tỏ quan điểm c&oacute; phần khiển tr&aacute;ch T&acirc;m T&iacute;t rằng t&igrave;nh y&ecirc;u với hot girl kh&ocirc;ng kh&aacute;c n&agrave;o việc &ldquo;đ&agrave;o mỏ&rdquo;. Sự việc c&agrave;ng th&ecirc;m căng thẳng khi rất nhiều người bạn th&acirc;n thiết của cả 2 l&ecirc;n tiếng b&ecirc;nh vực bạn m&igrave;nh.</span></p>\r\n', '2014-07-09 00:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `productCode` varchar(255) DEFAULT NULL,
  `madeOf` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `price` mediumint(9) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productCode`, `madeOf`, `size`, `price`, `status`, `gender`, `type`, `date`) VALUES
(1, '132', '', '', 99449, 'Hàng Giảm Giá', '0', 'Áo', '2014-05-07 04:42:26'),
(2, '328', '', 'M', 97739, 'Hết Hàng', '0', 'Quần', '2014-06-04 03:04:36'),
(3, '189', 'Lanh', '', 92260, 'Hàng Xuân Hè', '0', 'Quần', '2013-12-08 16:32:04'),
(4, '836', '', '', 91730, 'Hàng Giảm Giá', '0', 'Áo', '2014-04-29 10:28:10'),
(5, '699', 'Nilon', 'XL', 92131, 'Hàng Xuân Hè', '0', 'Phụ Kiện Đính Kèm', '2014-12-18 01:31:37'),
(6, '446', 'Lanh', 'L', 95584, 'Hàng Xuân Hè', '0', 'Phụ Kiện Đính Kèm', '2015-06-19 20:11:47'),
(7, '841', '', '', 98825, 'Hàng Xuân Hè', '0', 'Phụ Kiện Đính Kèm', '2014-10-17 01:56:58'),
(8, '405', '', '', 99774, 'Hàng Thu Đông', '0', 'Bộ', '2014-06-08 01:24:54'),
(9, '952', '', '', 91800, 'Hàng Xuân Hè', '0', 'Phụ Kiện Đính Kèm', '2013-08-07 08:08:46'),
(10, '453', '', '', 97187, 'Hàng Xuân Hè', '0', 'Áo', '2013-11-01 16:09:26'),
(11, '141', '', '', 90497, 'Hàng Xuân Hè', '1', 'Quần', '2014-04-27 00:41:41'),
(12, '617', 'Lanh', 'S', 95751, 'Hàng Giảm Giá', '0', 'Phụ Kiện Đính Kèm', '2014-06-20 11:43:41'),
(13, '314', '', '', 92162, 'Hết Hàng', '1', 'Áo', '2015-04-10 21:50:10'),
(14, '872', 'Nilon', '', 97522, 'Hàng Xuân Hè', '1', 'Quần', '2013-06-28 23:00:52'),
(15, '262', 'Cotton', '', 98754, 'Hàng Giảm Giá', '1', 'Quần', '2013-10-06 04:01:45'),
(16, '412', '', 'XL', 93657, 'Hàng Thu Đông', '0', 'Áo', '2014-12-05 18:21:55'),
(17, '348', 'Lanh', 'L', 92558, 'Hàng Xuân Hè', '1', 'Bộ', '2015-02-21 16:45:52'),
(18, '649', 'Nilon', '', 90303, 'Hết Hàng', '1', 'Bộ', '2015-03-27 08:42:10'),
(19, '385', 'Lanh', 'L', 92512, 'Hàng Giảm Giá', '1', 'Bộ', '2013-10-05 14:42:59'),
(20, '524', 'Nilon', 'L', 93323, 'Hàng Giảm Giá', '0', 'Phụ Kiện Đính Kèm', '2015-03-28 03:44:41'),
(21, '457', 'Cotton', '', 99124, 'Hàng Giảm Giá', '0', 'Áo', '2014-08-26 10:51:37'),
(22, '311', 'Cotton', 'XL', 95473, 'Hết Hàng', '0', 'Áo', '2015-05-12 10:18:39'),
(23, '965', 'Cotton', 'L', 91086, 'Hàng Giảm Giá', '1', 'Quần', '2015-03-20 11:23:08'),
(24, '536', '', '', 94000, 'Hàng Xuân Hè', '0', 'Quần', '2015-02-26 18:43:45'),
(25, '816', 'Cotton', '', 94981, 'Hàng Giảm Giá', '0', 'Bộ', '2013-07-04 03:03:32'),
(26, '278', 'Nilon', '', 98524, 'Hàng Giảm Giá', '0', 'Áo', '2013-08-17 15:36:32'),
(27, '939', 'Lanh', '', 98821, 'Hàng Xuân Hè', '0', 'Phụ Kiện Đính Kèm', '2013-12-17 07:32:02'),
(28, '634', 'Nilon', '', 97227, 'Hàng Giảm Giá', '1', 'Quần', '2014-11-04 22:02:41'),
(29, '714', 'Lanh', 'XL', 92058, 'Hàng Giảm Giá', '1', 'Bộ', '2014-11-03 17:11:45'),
(30, '949', '', '', 99641, 'Hết Hàng', '1', 'Quần', '2013-12-19 18:01:24'),
(31, '361', 'Lanh', '', 98041, 'Hàng Giảm Giá', '1', 'Quần', '2013-06-26 23:13:22'),
(32, '677', '', '', 99463, 'Hàng Xuân Hè', '1', 'Phụ Kiện Đính Kèm', '2014-08-31 04:40:41'),
(33, '629', '', '', 91540, 'Hàng Xuân Hè', '0', 'Áo', '2014-03-20 13:44:02'),
(34, '204', '', '', 91443, 'Hàng Xuân Hè', '1', 'Quần', '2014-06-08 02:52:03'),
(35, '151', '', '', 90860, 'Hết Hàng', '0', 'Áo', '2014-10-12 03:21:46'),
(36, '652', '', 'S', 97378, 'Hàng Xuân Hè', '1', 'Quần', '2014-12-07 14:51:53'),
(37, '480', 'Lanh', 'M', 97447, 'Hàng Thu Đông', '0', 'Quần', '2013-12-18 07:59:47'),
(38, '469', 'Cotton', '', 96364, 'Hàng Xuân Hè', '0', 'Quần', '2014-04-22 00:48:17'),
(39, '324', '', '', 97857, 'Hàng Xuân Hè', '0', 'Quần', '2014-07-27 07:00:52'),
(40, '723', 'Nilon', 'S', 93267, 'Hàng Giảm Giá', '1', 'Bộ', '2015-06-17 18:55:28'),
(41, '249', 'Lanh', 'M', 99719, 'Hết Hàng', '1', 'Áo', '2014-07-05 22:48:49'),
(42, '613', '', 'L', 96185, 'Hết Hàng', '0', 'Phụ Kiện Đính Kèm', '2015-04-16 05:27:23'),
(43, '850', '', '', 97976, 'Hàng Xuân Hè', '0', 'Quần', '2015-05-11 00:09:53'),
(44, '188', '', '', 97845, 'Hàng Thu Đông', '0', 'Phụ Kiện Đính Kèm', '2014-10-13 06:03:27'),
(45, '833', '', '', 90548, 'Hết Hàng', '1', 'Quần', '2013-10-04 04:49:46'),
(46, '485', 'Nilon', 'S', 92098, 'Hàng Giảm Giá', '0', 'Bộ', '2014-05-18 10:46:59'),
(47, '830', 'Nilon', 'S', 91619, 'Hết Hàng', '1', 'Bộ', '2013-09-02 13:18:24'),
(48, '594', 'Nilon', 'L', 98756, 'Hết Hàng', '1', 'Phụ Kiện Đính Kèm', '2014-11-19 05:46:43'),
(49, '254', 'Lanh', 'L', 90634, 'Hết Hàng', '0', 'Phụ Kiện Đính Kèm', '2013-11-28 01:13:36'),
(50, '212', 'Lanh', '', 95224, 'Hàng Xuân Hè', '1', 'Áo', '2013-07-14 01:50:34'),
(51, '562', '', 'M', 94365, 'Hàng Giảm Giá', '1', 'Áo', '2015-02-23 04:49:43'),
(52, '202', '', 'XL', 97628, 'Hàng Giảm Giá', '0', 'Phụ Kiện Đính Kèm', '2013-06-28 12:57:45'),
(53, '234', 'Nilon', 'L', 94565, 'Hàng Giảm Giá', '0', 'Áo', '2015-04-07 19:41:04'),
(54, '921', '', 'M', 92843, 'Hết Hàng', '1', 'Phụ Kiện Đính Kèm', '2014-12-09 11:54:57'),
(55, '577', '', 'XL', 96584, 'Hàng Giảm Giá', '1', 'Phụ Kiện Đính Kèm', '2015-03-29 06:49:05'),
(56, '279', 'Cotton', '', 91416, 'Hết Hàng', '1', 'Phụ Kiện Đính Kèm', '2015-06-15 08:41:56'),
(57, '668', 'Nilon', 'L', 94388, 'Hết Hàng', '1', 'Phụ Kiện Đính Kèm', '2015-01-05 16:15:20'),
(58, '902', '', '', 99439, 'Hàng Thu Đông', '1', 'Quần', '2014-07-31 12:47:19'),
(59, '591', '', '', 98159, 'Hết Hàng', '0', 'Phụ Kiện Đính Kèm', '2014-04-24 11:09:52'),
(60, '805', '', 'L', 94526, 'Hết Hàng', '0', 'Quần', '2014-10-19 07:29:34'),
(61, '207', '', '', 92898, 'Hết Hàng', '1', 'Áo', '2014-06-17 13:23:28'),
(62, '163', '', '', 98389, 'Hàng Xuân Hè', '0', 'Áo', '2015-03-05 12:27:56'),
(63, '996', 'Cotton', '', 96198, 'Hàng Giảm Giá', '1', 'Áo', '2014-06-04 03:12:55'),
(64, '555', '', '', 95897, 'Hàng Thu Đông', '0', 'Phụ Kiện Đính Kèm', '2014-06-26 13:52:40'),
(66, '297', '', '', 94866, 'Hết Hàng', '1', 'Bộ', '2015-03-23 10:17:28'),
(67, '605', '', 'M', 91189, 'Hàng Xuân Hè', '0', 'Bộ', '2014-01-01 08:20:11'),
(68, '771', '', 'XL', 96153, 'Hàng Thu Đông', '0', 'Áo', '2015-03-24 00:24:06'),
(69, '703', '', 'M', 95862, 'Hết Hàng', '0', 'Quần', '2015-04-12 20:47:13'),
(70, '623', '', '', 98016, 'Hết Hàng', '1', 'Quần', '2014-07-08 20:38:40'),
(71, '955', '', 'XL', 95858, 'Hàng Xuân Hè', '1', 'Quần', '2014-10-14 02:32:41'),
(72, '994', 'Nilon', 'M', 93561, 'Hàng Giảm Giá', '0', 'Quần', '2014-10-09 20:40:09'),
(73, '763', 'Lanh', '', 96714, 'Hàng Xuân Hè', '1', 'Bộ', '2014-04-08 16:57:59'),
(74, '632', 'Nilon', '', 98276, 'Hàng Giảm Giá', '1', 'Quần', '2014-05-12 12:17:00'),
(75, '614', 'Cotton', '', 90249, 'Hết Hàng', '1', 'Quần', '2014-09-06 03:14:10'),
(76, '979', 'Nilon', 'L', 90372, 'Hàng Giảm Giá', '1', 'Bộ', '2013-10-26 00:03:55'),
(77, '585', '', '', 91269, 'Hàng Giảm Giá', '0', 'Quần', '2015-01-27 07:06:32'),
(78, '448', '', 'XL', 99884, 'Hàng Xuân Hè', '0', 'Áo', '2014-10-11 06:06:54'),
(79, '395', 'Lanh', 'L', 96196, 'Hàng Thu Đông', '0', 'Phụ Kiện Đính Kèm', '2015-03-15 15:04:56'),
(80, '357', 'Cotton', 'L', 99497, 'Hết Hàng', '1', 'Phụ Kiện Đính Kèm', '2015-05-08 16:50:39'),
(81, '828', 'Cotton', 'XL', 92932, 'Hàng Giảm Giá', '0', 'Bộ', '2014-05-24 15:30:49'),
(82, '543', 'Cotton', 'XL', 95407, 'Hàng Thu Đông', '1', 'Quần', '2014-11-08 21:47:16'),
(83, '952', '', '', 91628, 'Hết Hàng', '0', 'Phụ Kiện Đính Kèm', '2014-03-18 07:33:42'),
(84, '788', '', 'M', 93929, 'Hàng Giảm Giá', '0', 'Áo', '2014-07-06 08:55:27'),
(85, '743', '', 'XL', 97176, 'Hết Hàng', '1', 'Bộ', '2014-09-18 09:34:01'),
(86, '440', '', 'L', 93287, 'Hàng Xuân Hè', '1', 'Bộ', '2013-10-15 14:53:52'),
(87, '151', '', '', 99989, 'Hàng Thu Đông', '1', 'Quần', '2013-11-17 06:58:52'),
(88, '238', '', 'L', 97506, 'Hàng Thu Đông', '1', 'Phụ Kiện Đính Kèm', '2014-10-31 02:07:52'),
(89, '481', '', 'M', 92633, 'Hàng Xuân Hè', '1', 'Bộ', '2015-01-05 15:12:05'),
(90, '611', '', 'L', 95466, 'Hết Hàng', '0', 'Bộ', '2013-09-01 01:23:15'),
(91, '261', '', 'S', 90503, 'Hàng Thu Đông', '1', 'Phụ Kiện Đính Kèm', '2014-01-26 19:31:09'),
(92, '197', '', '', 96390, 'Hàng Thu Đông', '1', 'Phụ Kiện Đính Kèm', '2014-08-06 19:36:01'),
(93, '686', 'Lanh', '', 98119, 'Hết Hàng', '1', 'Áo', '2015-02-21 12:22:19'),
(94, '997', 'Nilon', 'L', 98453, 'Hàng Giảm Giá', '0', 'Phụ Kiện Đính Kèm', '2013-08-11 21:48:46'),
(95, '457', 'Lanh', '', 97705, 'Hết Hàng', '0', 'Áo', '2014-06-10 05:56:51'),
(96, '943', 'Cotton', '', 96495, 'Hàng Giảm Giá', '0', 'Bộ', '2014-04-27 20:28:18'),
(97, '932', 'Nilon', 'S', 93894, 'Hàng Thu Đông', '0', 'Phụ Kiện Đính Kèm', '2014-05-21 14:35:03'),
(98, '369', 'Nilon', '', 97372, 'Hàng Giảm Giá', '0', 'Quần', '2014-07-09 12:00:07'),
(99, '125', '', '', 95866, 'Hàng Xuân Hè', '0', 'Phụ Kiện Đính Kèm', '2015-01-03 06:23:04'),
(100, '665', 'Cotton', 'XL', 93070, 'Hàng Thu Đông', '1', 'Bộ', '2014-10-11 03:06:28'),
(101, 'AB12', '', '', NULL, 'Hàng Xuân Hè', '1', 'Váy', NULL),
(105, 'AB34', '', '', NULL, 'Hàng Xuân Hè', '1', 'Quần', NULL),
(106, '1234', '', '', NULL, 'Hàng Xuân Hè', '0', 'Quần', NULL),
(107, '12345', '', '', NULL, 'abc', '1', 'Quần', NULL),
(108, 'ewedw', '', '', NULL, 'Hàng Xuân Hè', '0', 'Quần', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `promote`
--

CREATE TABLE IF NOT EXISTS `promote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promote`
--

INSERT INTO `promote` (`id`, `title`, `content`, `date`) VALUES
(1, 'à vào stt của ng ta bà comt kiểu mặc cho thiên hạ nói sao cũng được', '<p>\r\n	<strong style="margin: 0px; padding: 0px; color: rgb(68, 68, 68); font-family: Tahoma; font-size: 12px; line-height: 16px; background-color: rgb(255, 255, 255);">&nbsp;kệ m&agrave; được &agrave;. Mang c&aacute;i danh l&agrave; bạn th&igrave; cũng im đi, ch&uacute;ng n&oacute; y&ecirc;u nhau, tiền bạc thế n&agrave;o b&agrave; cũng chỉ biết 1 chứ c&oacute; biết hết đ&acirc;u m&agrave; ăn h&ocirc;i. V&agrave;o fb của b&agrave; T&acirc;m thấy mấy đứa bạn b&agrave; ấy n&oacute;i chuyện kiểu mất da.y, b&ecirc;nh vực bạn nhưng kh&ocirc;ng biết c&aacute;ch để m&agrave; ăn n&oacute;i, nh.ục mạ ny cũ của bạn m&igrave;nh th&igrave; th&ocirc;i rồi. Đọc xong m&agrave; m&igrave;nh suy nghĩ l&agrave; l&uacute;c 2 đứa đ&oacute; c&ograve;n đang y&ecirc;u nhau liệu mấy đứa bạn đ&oacute; c&oacute; nhảy v&agrave;o ch.ửi l&agrave; thằng đ&oacute; nh&igrave;n mặt như BĐ, đ&agrave;n &ocirc;ng mặc v&aacute;y kh&ocirc;ng nữa. Đ&uacute;ng l&agrave; to&agrave;n thấy b&egrave; chứ chả thấy bạn. Đứa n&agrave;o cũng cố nhảy v&agrave;o ăn h&ocirc;i lấy t&iacute; tiếng tăm, ch.ửi người kh&aacute;c l&agrave; kh&ocirc;ng phải chuyện của m&igrave;nh m&agrave; cứ đi s.ủa, trong khi đ&oacute; ch&uacute;ng n&oacute; cũng l&agrave;m y chang. B&oacute; tay.</strong></p>\r\n', '2014-07-09 00:56:58'),
(2, 'Ôiiii chị ấy đã phát ngôn rồi đấy hèn chi chị có tiền đi pttm 200tr chị chê ít t', '<div style="outline: none; border: 0px; margin: 0px; padding: 0px; line-height: 22px; color: rgb(51, 51, 51); font-size: 16px; background-color: rgb(255, 255, 255);">\r\n	C&ocirc; viết:&nbsp;<span style="outline: none; border: 0px; margin: 0px; padding: 0px; font-style: italic;">&quot;Đừng bao giờ n&oacute;i xấu người y&ecirc;u cũ v&igrave; điều đ&oacute; chứng tỏ một điều bạn y&ecirc;u phải một người chẳng ra g&igrave; hoặc bạn chẳng ra g&igrave;. L&uacute;c đầu khi thấy T&acirc;m y&ecirc;u anh ấy, m&igrave;nh đ&atilde; ngỡ ng&agrave;ng rồi. Nhưng v&igrave; T&acirc;m y&ecirc;u thật n&ecirc;n m&igrave;nh kh&ocirc;ng c&oacute; &yacute; kiến.</span></div>\r\n<div style="outline: none; border: 0px; margin: 0px; padding: 0px; line-height: 22px; color: rgb(51, 51, 51); font-size: 16px; background-color: rgb(255, 255, 255);">\r\n	<span style="outline: none; border: 0px; margin: 0px; padding: 0px; font-style: italic;"><br />\r\n	</span></div>\r\n<div style="outline: none; border: 0px; margin: 0px; padding: 0px; line-height: 22px; color: rgb(51, 51, 51); font-size: 16px; background-color: rgb(255, 255, 255);">\r\n	<span style="outline: none; border: 0px; margin: 0px; padding: 0px; font-style: italic;">N&oacute;i ra n&oacute;i v&agrave;o th&igrave; kh&ocirc;ng hay lắm, nhưng n&oacute;i thật bỏ ra 200 triệu để y&ecirc;u một người như T&acirc;m th&igrave; hơi &iacute;t. &Yacute; của m&igrave;nh ở đ&acirc;y l&agrave; y&ecirc;u nhau m&agrave; cứ d&ugrave;ng tiền ra để kể th&igrave; 200 triệu qu&aacute; l&agrave; buồn cười. T&acirc;m th&igrave; y&ecirc;u qu&aacute; c&ograve;n anh Bảo th&igrave; vừa chịu chi vừa chiều người y&ecirc;u nữa.</span></div>\r\n<div style="outline: none; border: 0px; margin: 0px; padding: 0px; line-height: 22px; color: rgb(51, 51, 51); font-size: 16px; background-color: rgb(255, 255, 255);">\r\n	<span style="outline: none; border: 0px; margin: 0px; padding: 0px; font-style: italic;"><br />\r\n	</span></div>\r\n<div style="outline: none; border: 0px; margin: 0px; padding: 0px; line-height: 22px; color: rgb(51, 51, 51); font-size: 16px; background-color: rgb(255, 255, 255);">\r\n	<span style="outline: none; border: 0px; margin: 0px; padding: 0px; font-style: italic;">Nếu anh muốn khoe th&igrave; khoe nhiều hơn để lấy tiếng lu&ocirc;n đi anh. Kể lể chỉ d&agrave;nh cho đ&agrave;n b&agrave; con g&aacute;i th&ocirc;i... C&ograve;n đ&agrave;n &ocirc;ng con trai m&agrave; đi kể th&igrave; qu&aacute; ư l&agrave;...&quot;</span></div>\r\n', '2014-07-09 00:57:26'),
(3, 'rong khi sự việc anh trai Bảo Thy viết tâm thư gửi Tâm Tít còn đang là vấn đề đư', '<p>\r\n	<span style="color: rgb(51, 51, 51); font-size: 16px; line-height: 22px; background-color: rgb(255, 255, 255);">Kelly v&agrave; T&acirc;m T&iacute;t đều l&agrave; những hot girl kh&aacute; nổi tiếng v&agrave; th&acirc;n thiết, nhất l&agrave; khi T&acirc;m T&iacute;t bắt đầu chọn S&agrave;i G&ograve;n l&agrave;m nơi ph&aacute;t triển sự nghiệp. Cả hai vẫn thỉnh thoảng gặp gỡ, c&ograve;n c&oacute; những lần dự sự kiện hay đi lưu diễn c&ugrave;ng nhau. Nhiều người cho rằng Kelly đang đứng ở lập trường của T&acirc;m T&iacute;t để l&ecirc;n tiếng b&ecirc;nh vực cho bạn th&acirc;n của m&igrave;nh. B&ecirc;n cạnh đ&oacute; cũng c&oacute; người nghĩ rằng để ph&aacute;n x&eacute;t một sự việc, nếu bản th&acirc;n kh&ocirc;ng phải l&agrave; người trong cuộc th&igrave; cũng n&ecirc;n đứng ở nhiều phương diện, nhiều g&oacute;c độ v&agrave; l&ecirc;n tiếng một c&aacute;ch c&ocirc;ng bằng.</span></p>\r\n', '2014-07-09 00:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cusName` varchar(30) NOT NULL,
  `cusMobile` int(12) NOT NULL,
  `cusEmail` varchar(200) DEFAULT NULL,
  `productStr` varchar(400) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `cusName`, `cusMobile`, `cusEmail`, `productStr`, `status`, `date`) VALUES
(2, 'Linh', 986707132, '', '65,6,43', 1, '2014-07-03 14:25:35'),
(4, 'Linh', 986707132, '', '65,6,43', 1, '2014-07-03 14:26:40'),
(5, 'Linh', 2147483647, '', ',6,43,65', 1, '2014-07-07 00:39:57'),
(6, 'Linh', 986707132, 'linh.nguyen.1992@gmail.com', '42,80,80,69,40,22,43', 0, '2014-07-13 12:29:57'),
(7, 'gdfd', 575656, '', '42,80,80,69,40,22,43,', 0, '2014-07-13 12:30:52'),
(8, '435', 3543535, '', ',6,40', 0, '2014-07-13 18:53:25'),
(9, 'sdfs', 324234, '', ',6,40', 0, '2014-07-13 18:55:26'),
(10, '435345', 3453535, '', ',6,40', 0, '2014-07-13 18:55:55'),
(11, '324324', 4353535, '', ',6,40', 0, '2014-07-13 18:57:32'),
(12, '43453', 3432432, '', ',6', 0, '2014-07-13 19:00:23'),
(13, '324', 43467890, '', ',6', 0, '2014-07-13 19:03:07'),
(14, 'sdf', 32424, '', ',6', 0, '2014-07-13 19:04:21'),
(15, 'sđfs', 3242424, '', ',80,55', 0, '2014-07-13 23:37:08'),
(16, 'ádsa', 3424, '', ',80,55', 0, '2014-07-13 23:39:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
