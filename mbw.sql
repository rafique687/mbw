-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 04:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` int(255) NOT NULL,
  `state` int(255) NOT NULL,
  `city` int(255) NOT NULL,
  `zipcode` int(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `email`, `mobile`, `status`, `first_name`, `last_name`, `address`, `country`, `state`, `city`, `zipcode`, `pic`) VALUES
(1, 'admin@gmail.com', '123456', 'admin@admin.com', '8502863077', 0, 'Mobile Battery', 'World', '122, Maa Bhagawati Nagar, Balsamand, Jodhpur, Rajasthan 342026', 1, 1, 0, 342026, 'user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_setting`
--

CREATE TABLE `admin_setting` (
  `id` int(225) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1 COMMENT '1active/0dactive',
  `createdate` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_setting`
--

INSERT INTO `admin_setting` (`id`, `title`, `icon`, `logo`, `active`, `createdate`, `modified`) VALUES
(1, 'iFresh', 'ifreshLogo', 'ifreshLogo.png', 1, '2020-09-05', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `bannerid` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `textt` varchar(255) NOT NULL,
  `banner_section` text NOT NULL,
  `bannerstatus` int(1) NOT NULL DEFAULT 1 COMMENT '1enable,0disable',
  `bannerpic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`bannerid`, `title`, `textt`, `banner_section`, `bannerstatus`, `bannerpic`) VALUES
(59, 'banner1', 'banner1', 'home', 1, 'homebanner1.jpg'),
(60, 'banner2', 'banner2', 'home', 1, 'homebanner2.jpg'),
(61, 'about', 'about', 'about', 1, 'abour.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `ctid` int(255) NOT NULL,
  `cntid` int(255) NOT NULL,
  `stid` int(255) NOT NULL,
  `cityname` varchar(255) NOT NULL,
  `city_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ctid`, `cntid`, `stid`, `cityname`, `city_status`) VALUES
(1, 0, 1, 'jodhpur', 1),
(2, 0, 1, 'jaipur', 1),
(5, 1, 2, 'Surat', 1),
(6, 1, 2, 'Ahemdabad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `name`, `url`, `logo`, `status`) VALUES
(14, 'Mohammad Rafique', 'http://dsaf/fgdsafgl', 'clie.png', 1),
(15, 'belimo', 'http://dsaf/fgdsafgl', 'dd.png', 1),
(16, 'client3', 'http://dsaf/fgdsafglh', 'ddg.png', 1),
(17, 'client3', 'http://dsaf/fgdsafglh', 'ff.png', 1),
(18, 'cli4', 'http://dsaf/fgdsafglh', 'gg.png', 1),
(20, 'Mohammad', 'http://dsaf/fgdsafgl', 'hhggg.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contry`
--

CREATE TABLE `contry` (
  `contryid` int(255) NOT NULL,
  `contry` varchar(255) NOT NULL,
  `country_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contry`
--

INSERT INTO `contry` (`contryid`, `contry`, `country_status`) VALUES
(1, 'India', 2),
(2, 'Nepal', 1),
(3, 'bhootan', 1),
(4, 'america', 0),
(5, 'best sub produ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cutomar_details`
--

CREATE TABLE `cutomar_details` (
  `cust_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `mobilealt` varchar(255) NOT NULL,
  `countryid` int(255) NOT NULL,
  `stateid` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` int(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cutomar_details`
--

INSERT INTO `cutomar_details` (`cust_id`, `first_name`, `last_name`, `dob`, `email`, `mobile`, `mobilealt`, `countryid`, `stateid`, `city`, `zipcode`, `address`) VALUES
(17, 'mr', 'khan', '2020-09-11', 'khan.arbani@gmail.com', '9001979342', '9001979342', 1, 1, '1', 344022, 'fdsaknf fasfd		'),
(19, 'Mohammad', 'Rafique', '2020-10-12', 'info.rafique687@gmail.com', '9799184788', '9799184788', 1, 1, '1', 340022, 'asdfklanfn');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_photo` varchar(255) NOT NULL,
  `upload_video` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `event_name`, `description`, `event_date`, `event_photo`, `upload_video`, `video_url`, `status`) VALUES
(43, 'Anual Function', 'fdsa', '2020-11-06', 'anual.jpg,diwa.jpg,imagesff.jpg', '', '', 1),
(44, 'dpawali', 'dsaf', '2020-11-05', 'anual.jpg,fffg.jpg,diwa.jpg,fff.jpg,fffg.jpg', '', '', 1),
(45, 'offiicial party', 'fdsa', '2020-11-05', 'off4.jpg,of2.jpg,office.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `evencteidd` int(255) NOT NULL,
  `parent_cateid` int(255) NOT NULL,
  `eventvideo_photo_url` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1active,0inactive',
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`evencteidd`, `parent_cateid`, `eventvideo_photo_url`, `status`, `title`) VALUES
(2, 40, 'imagesff.jpg,imagess.jpg,of2.jpg,off4.jpg', 1, 'Anual functio0n'),
(3, 41, 'anual.jpg,diwa.jpg,fffg.jpg', 1, 'Deepawali'),
(4, 42, 'imagesff.jpg,imagess.jpg,of2.jpg,off4.jpg,office.jpg', 1, 'fg');

-- --------------------------------------------------------

--
-- Table structure for table `inquety`
--

CREATE TABLE `inquety` (
  `inquryid` int(255) NOT NULL,
  `inqury_name` varchar(255) NOT NULL,
  `inquery_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `inquery_date` date NOT NULL,
  `reply_status` int(1) NOT NULL DEFAULT 1 COMMENT '1not reply,2 replyed',
  `replygetid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquety`
--

INSERT INTO `inquety` (`inquryid`, `inqury_name`, `inquery_email`, `subject`, `message`, `inquery_date`, `reply_status`, `replygetid`) VALUES
(29, 'fsssssssssssds', 'dfs@gmal.com', '', 'dfasfsagsf', '2021-11-12', 1, 0),
(30, 'fsssssssssssds', 'dfs@gmal.com', '', 'dfasfsagsf', '2021-11-12', 1, 0),
(31, 'fsssssssssssds', 'dfs@gmal.com', '', 'dfasfsagsf', '2021-11-12', 1, 0),
(32, 'df', 'fda@ddf.oc', '', 'afdasfasdf', '2021-11-12', 1, 0),
(33, 'vzg', 'da@fjjk.com', '', 'flwwhajfhjahfdksj', '2021-11-12', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(255) NOT NULL,
  `root_cate` int(255) NOT NULL,
  `sub_cate` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_status` int(1) NOT NULL DEFAULT 1 COMMENT '1active/2deactive/0delete',
  `item_pic` varchar(255) NOT NULL,
  `shortdescription` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `mrp` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `perunit` int(255) NOT NULL DEFAULT 1,
  `unit` text NOT NULL,
  `offer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `root_cate`, `sub_cate`, `item_name`, `item_status`, `item_pic`, `shortdescription`, `description`, `mrp`, `price`, `perunit`, `unit`, `offer`) VALUES
(1, 1, 2, 'OPPO A-5', 1, 'oppbattry.jpg', '', 'All Type  Batteries Available for oppo', '1999', '399', 1, 'Piece', 'no'),
(2, 3, 4, 'Vivo', 1, 'oppbattry.jpg', '', 'fdsahkhkdf	', '', '250', 1, 'Piece', 'no'),
(3, 5, 6, 'Micromax Keypad Phone ( BL-5C )', 1, 'MICROMAXBAT.jpeg,\r\n\r\n    DETAIL.jpeg', '', 'FOR Micromax Keypad Phone Battery ( BL-5C ) (PREMIUM QUALITY)		', '', '257', 1, 'Piece', 'yes'),
(4, 11, 12, 'GIONEE P5L BL-G2300Z', 0, '\r\n\r\n    GIONEE.jpeg,\r\n\r\n    GIONEE.jpeg,\r\n\r\n    GIONEE.jpeg,\r\n\r\n    GIONEE.jpeg', '', 'Brand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nFOR GIONEE P5L BL-G2300Z (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(5, 3, 4, 'FOR OPPOk', 1, 'oppoproduct.jpg', '', 'hhhjkkkkkkkkkk	', '', '2090', 1, 'Piece', 'no'),
(6, 18, 19, 'LYF Wind 5 - 365870ARE', 1, 'LYF.jpeg', 'Brand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nLYF Wind 5 - 365870ARE (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'LYF Wind 5 - 365870ARE (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '215', 1, 'Piece', 'yes'),
(7, 20, 21, 'Karbonn A1 Indian VSUSP1500AA (PREMIUM QUALITY)', 1, 'KARBONN.jpeg', 'Product Details\r\nBrand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nFOR Karbonn A1 Indian VSUSP1500AA (ORIGINAL TESTED BACKUP GUARANTEED 100%) (PREMIUM QUALITY)\r\n\r\n', 'Karbonn A1 Indian VSUSP1500AA (PREMIUM QUALITY)', '1699', '257', 1, 'Piece', 'yes'),
(8, 13, 14, 'FOR GIONEE P5L BL-G2300Z', 0, 'GIONEE.jpeg', 'Product Details\r\nBrand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nFOR GIONEE P5L BL-G2300Z (ORIGINAL TESTED BACKUP GUARANTEED 100%)\r\n\r\n', 'FOR GIONEE P5L BL-G2300Z (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(9, 22, 23, 'Lava A67 ( LEB075 ) - Original Tested 100% Backup Guaranteed', 1, 'LAVA.jpeg,\r\n\r\n    DETAIL.jpeg', 'Product Details\r\nBrand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nFOR Lava A67 ( LEB075 ) (Original Tested 100% Backup Guaranteed)', ' Lava A67 ( LEB075 ) - Original Tested 100% Backup Guaranteed', '1299', '229', 1, 'Piece', 'no'),
(10, 18, 19, 'FOR LYF Wind 5 - 365870ARE, WIND5 (PREMIUM QUALITY)', 1, 'LYF2.jpeg', 'Product Details\r\nBrand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nLYF Wind 5 - 365870ARE (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR LYF Wind 5 - 365870ARE, WIND5 (PREMIUM QUALITY)', '', '215', 1, 'Piece', 'yes'),
(11, 24, 25, 'FOR Panasonic Eluga i2 /KLB210N340 (PREMIUM QUALITY)', 1, 'PANAS.jpeg', 'Product Details\r\nBrand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nFOR Panasonic Eluga i2 /KLB210N340 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Panasonic Eluga i2 /KLB210N340 (PREMIUM QUALITY)', '', '257', 1, 'Piece', 'yes'),
(12, 18, 19, 'FOR LYF Water 10 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LYF3.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR LYF Water 10 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR LYF Water 10 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '215', 1, 'Piece', 'yes'),
(13, 5, 6, 'FOR MICROMAX X725 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'MICRO725.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR MICROMAX X725 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR MICROMAX X725 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '215', 1, 'Piece', 'yes'),
(14, 5, 6, 'FOR Micromax Q383 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'MICROQ383.jpeg', 'Product Details \r\nBrand : MOBILE BATTERY WORLD \r\nMultipack : 1 \r\nFOR MICROMAX X725 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Micromax Q383 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(15, 5, 6, 'FOR MICROMAX Bharat 3 Q437 (PREMIUM QUALITY) Battery', 1, 'MICRO487.jpeg', 'Product Details \r\nBrand : MOBILE BATTERY WORLD Multipack : 1 \r\nFOR MICROMAX Bharat 3 Q437 (PREMIUM QUALITY) Battery', 'FOR MICROMAX Bharat 3 Q437 (PREMIUM QUALITY) Battery', '', '257', 1, 'Piece', 'yes'),
(16, 26, 27, 'FOR LG G3 - 3000mAh, BL53YH (BL-53YH) PREMIUM QUALITY BATTERY', 1, 'LG.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR LG G3 - 3000mAh, BL53YH (BL-53YH) (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR LG G3 - 3000mAh, BL53YH (BL-53YH) PREMIUM QUALITY BATTERY', '', '257', 1, 'Piece', 'yes'),
(17, 9, 10, 'FOR LAVA Z61 / LBP13000045 / 3000mAh (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LAVAZ61.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR LAVA Z61 / LBP13000045 / 3000mAh (PREMIUM QUALITY)', 'FOR LAVA Z61 / LBP13000045 / 3000mAh (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(18, 9, 10, 'FOR LAVA LEB024 (QUALITY CHECKED)', 1, 'LAVALEB02.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR LAVA LEB024 (QUALITY CHECKED)', 'FOR LAVA LEB024 (QUALITY CHECKED)', '', '180', 1, 'Piece', 'yes'),
(19, 9, 10, 'FOR Lava LEB027, LAVA 5C 800 mAh (PREMIUM QUALITY)', 1, 'LAVALEB027.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Lava LEB027, LAVA 5C 800 mAh (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Lava LEB027, LAVA 5C 800 mAh (PREMIUM QUALITY)', '', '257', 1, 'Piece', 'yes'),
(20, 28, 29, 'FOR Samsung Galaxy J5 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'SAMSUNGGAL.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Samsung Galaxy J5 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Samsung Galaxy J5 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(21, 24, 25, 'FOR Panasonic P55 Novo DESP2500AA (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'PANASONICP55.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Panasonic P55 Novo DESP2500AA (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Panasonic P55 Novo DESP2500AA (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(22, 30, 31, 'FOR Lenovo K3 Note Battery, BL243 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LENEVO.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Lenovo K3 Note, BL243 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Lenovo K3 Note Battery, BL243 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(23, 32, 33, 'FOR NOKIA BL-4U BL4U E66 C5-03 5530 5730 5250 210 300 305 306 308 309 311 501 503 (PREMIUM QUALITY)', 1, 'NOKIABL04.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR NOKIA BL-4U BL4U E66 C5-03 5530 5730 5250 210 300 305 306 308 309 311 501 503 (PREMIUM QUALITY)', 'FOR NOKIA BL-4U BL4U E66 C5-03 5530 5730 5250 210 300 305 306 308 309 311 501 503 (PREMIUM QUALITY)', '', '151', 1, 'Piece', 'yes'),
(24, 32, 33, 'FOR Nokia BV-6A 8110 4G / Banana 2060 3060 5250 C5-03 (PREMIUM QUALITY)', 1, 'NOKIABV-6A.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Nokia BV-6A 8110 4G / Banana 2060 3060 5250 C5-03 (PREMIUM QUALITY)', 'FOR Nokia BV-6A 8110 4G / Banana 2060 3060 5250 C5-03 (PREMIUM QUALITY)', '', '180', 1, 'Piece', 'yes'),
(25, 32, 33, 'FOR NOKIA 230, 220, 225, 3310, BL-4UL - 1200 mAh (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, '', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR NOKIA 230, 220, 225, 3310, BL-4UL - 1200 mAh (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR NOKIA 230, 220, 225, 3310, BL-4UL - 1200 mAh (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '166', 1, 'Piece', 'yes'),
(26, 32, 33, 'FOR Nokia Asha, 201 Asha, 302 Asha, 5228, 5230, 5230, 5232, 5233, 5235, 5800, 5800 Navigation Edition, 5800 Xpressmusic, 5800I Xpressmusic, 5802 Xpressmusic, C3-00, Lumia 520, N900, X1-01, X6-00 16Gb, X6-00 8Gb, X6-00, NOKIA BL-5J (PREMIUM QUALITY)', 1, 'NOKIABL5J.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Nokia Asha, 201 Asha, 302 Asha, 5228, 5230, 5230, 5232, 5233, 5235, 5800, 5800 Navigation Edition, 5800 Xpressmusic, 5800I Xpressmusic, 5802 Xpressmusic, C3-00, Lumia 520, N900, X1-01, ', 'FOR Nokia Asha, 201 Asha, 302 Asha, 5228, 5230, 5230, 5232, 5233, 5235, 5800, 5800 Navigation Edition, 5800 Xpressmusic, 5800I Xpressmusic, 5802 Xpressmusic, C3-00, Lumia 520, N900, X1-01, X6-00 16Gb, X6-00 8Gb, X6-00, NOKIA BL-5J (PREMIUM QUALITY)', '', '151', 1, 'Piece', 'yes'),
(27, 30, 31, 'FOR Lenovo Vibe K5 and K5 Plus -BL-259, BL 259 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LENOVOBL259.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Lenovo Vibe K5 and K5 Plus -BL-259, BL 259 (PREMIUM QUALITY)', 'FOR Lenovo Vibe K5 and K5 Plus -BL-259, BL 259 (PREMIUM QUALITY)', '', '257', 1, 'Piece', 'yes'),
(28, 32, 33, 'FOR NOKIA BP-4L E52 E55 E61 E61i E63 E71 E71X E72 E55 E61i E63 E71 E90 E90i N810 MBT-5979 (PREMIUM QUALITY)', 1, 'NOKIABL4L.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR NOKIA BP-4L E52 E55 E61 E61i E63 E71 E71X E72 E55 E61i E63 E71 E90 E90i N810 MBT-5979 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR NOKIA BP-4L E52 E55 E61 E61i E63 E71 E71X E72 E55 E61i E63 E71 E90 E90i N810 MBT-5979 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '151', 1, 'Piece', 'yes'),
(29, 32, 33, 'FOR Nokia BL-4D E5, E7, N8, N97 Mini, 702T, T7, N950 (PREMIUM QUALITY)', 1, 'NOKIABL4D.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Nokia BL-4D E5, E7, N8, N97 Mini, 702T, T7, N950 (ORIGINAL TESTED BACKUP GUARANTEED 100%)\r\n\r\n', 'FOR Nokia BL-4D E5, E7, N8, N97 Mini, 702T, T7, N950 (ORIGINAL TESTED BACKUP GUARANTEED 100%)\r\n', '', '141', 1, 'Piece', 'yes'),
(30, 34, 35, 'FOR Xiaomi Redmi 3 / Redmi 4X -BM47 (PREMIUM QUALITY)', 1, 'MIBM47.jpeg', 'Product Details\r\nBrand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nFOR Xiaomi Redmi 3 / Redmi 4X -BM47 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Xiaomi Redmi 3 / Redmi 4X -BM47 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(31, 32, 33, 'FOR Nokia 2.2 HQ510Battery', 1, '\r\n\r\n    NOKIA HQ510.jpeg,', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Nokia 2.2 HQ510 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Nokia 2.2 HQ510 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '307', 1, 'Piece', 'yes'),
(32, 13, 14, 'FOR Gionee X1 (PREMIUM QUALITY)', 1, 'GIONEE X1.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Gionee X1 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Gionee X1 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(33, 13, 14, 'Battery FOR Gionee X1 (BL-G030W) (PREMIUM QUALITY)', 1, 'BL60.jpeg,ssss.jpg,\r\n\r\n    02.jpg,', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR FOR Gionee X1 (BL-G030W) (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR FOR Gionee X1 (BL-G030W) (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '310', 1, 'Piece', 'yes'),
(34, 28, 29, 'FOR Samsung Guru (800 mAh) AB463446BU (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'SAMSUNGGURU.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Samsung Guru (800 mAh) AB463446BU (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Samsung Guru (800 mAh) AB463446BU (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '180', 1, 'Piece', 'yes'),
(35, 28, 29, 'FOR Samsung Galaxy S3 Neo GT-i9300i (PREMIUM QUALITY)', 1, 'S3NEO.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Samsung Galaxy S3 Neo GT-i9300i (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Samsung Galaxy S3 Neo GT-i9300i (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(36, 9, 10, 'FOR Lava P7 / Lava Iris 810 / LEB104 (PREMIUM QUALITY) battery', 1, 'LAVAP7.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Lava P7 / Lava Iris 810 / LEB104 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Lava P7 / Lava Iris 810 / LEB104 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '215', 1, 'Piece', 'yes'),
(37, 5, 6, 'FOR Micromax X 740 (Champagne) (PREMIUM QUALITY)', 1, 'MICROX740.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Micromax X 740 (Champagne) (PREMIUM QUALITY)\r\n\r\n', 'FOR Micromax X 740 (Champagne) (PREMIUM QUALITY)', '', '215', 1, 'Kg', 'yes'),
(38, 24, 25, 'FOR PANASONIC P71 / KLB210N340 (PREMIUM QUALITY)', 1, 'PANASO.jpeg', 'Product Details\r\nBrand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nFOR PANASONIC P71 / KLB210N340 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR PANASONIC P71 / KLB210N340 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(39, 28, 29, 'FOR SAMSUNG METRO SM-B313E-B312E.L700-S3650-C3322I-C3322 (PREMIUM QUALITY)', 1, 'SAM1.jpeg', 'Product Details\r\nBrand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nFOR SAMSUNG METRO SM-B313E-B312E.L700-S3650-C3322I-C3322 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR SAMSUNG METRO SM-B313E-B312E.L700-S3650-C3322I-C3322 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '180', 1, 'Kg', 'yes'),
(40, 13, 14, 'FOR GIONEE L700 (PREMIUM QUALITY) Battery', 1, 'GIO1.jpeg', 'Product Details\r\nBrand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nFOR GIONEE L700 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR GIONEE L700 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '215', 1, 'Kg', 'yes'),
(41, 36, 37, 'FOR Lephone W7 (BLF-PW12i) (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LEPHONE.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR Lephone W7 (BLF-PW12i) (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Lephone W7 (BLF-PW12i) (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(42, 38, 39, 'FOR ITEL P32/A44 Power/A52/P51/P33 Plus BL-38AI (PREMIUM QUALITY', 1, 'ITEL.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nITEL P32/A44 Power/A52/P51/P33 Plus BL-38AI (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'ITEL P32/A44 Power/A52/P51/P33 Plus BL-38AI (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '457', 1, 'Piece', 'yes'),
(43, 26, 27, 'FOR LG Q-6 (BL-T33) (PREMIUM QUALITY)', 1, 'LG1.jpeg', 'Product Details\r\nBrand : MOBILE BATTERY WORLD\r\n\r\nMultipack : 1\r\n\r\nFOR LG Q-6 (BL-T33) (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR LG Q-6 (BL-T33) (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '600', '457', 1, 'Kg', 'yes'),
(44, 18, 19, 'FOR LYF Flame 7, LS-4006 (PREMIUM QUALITY)', 1, 'LYF1.jpeg', 'Product Details\r\nBrand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nFOR LYF Flame 7, LS-4006 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR LYF Flame 7, LS-4006 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '257', 1, 'Piece', 'yes'),
(45, 36, 37, 'FOR Lephone P1 BLF-P1 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LEPHO1.jpeg', 'Product Details\r\nBrand : TECHQPMENT\r\n\r\nMultipack : 1\r\n\r\nFOR Lephone P1 BLF-P1 (ORIGINAL TESTED BACKUP GUARANTEED 100%)\r\n\r\n', 'FOR Lephone P1 BLF-P1 (ORIGINAL TESTED BACKUP GUARANTEED 100%)\r\n', '', '257', 1, 'Piece', 'yes'),
(46, 40, 41, 'FOR JIO LYF Jio F90m Jio F101K/F61F/F81E/F30C/F90M/LF-2403N/F120B/F41T/F50Y/F220B/F210Q/LF2402/F221S/F211S (PREMIUM QUALITY)', 1, 'JIO1.jpeg', 'PRODUCT Description : FOR JIO LYF Jio F90m Jio F101K/F61F/F81E/F30C/F90M/LF-2403N/F120B/F41T/F50Y/F220B/F210Q/LF2402/F221S/F211S (PREMIUM QUALITY)\r\nBRAND: ZILIQ', 'FOR JIO LYF Jio F90m Jio F101K/F61F/F81E/F30C/F90M/LF-2403N/F120B/F41T/F50Y/F220B/F210Q/LF2402/F221S/F211S (PREMIUM QUALITY)', '', '215', 1, 'Piece', 'yes'),
(47, 42, 43, 'FOR Huawei HONOR Y5 / Y6 honor4 HB4342A1RBC (PREMIUM QUALITY)', 1, 'HAUWAI1.jpeg', 'FOR Huawei HONOR Y5 / Y6 honor4 HB4342A1RBC (PREMIUM QUALITY)\r\nBRAND: ZILIQ', 'Multipack : 1\r\n\r\nFOR Huawei HONOR Y5 / Y6 honor4 HB4342A1RBC (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '357', 1, 'Piece', 'yes'),
(48, 38, 39, 'FOR ITEL IT 2163 / IT 5022 / IT 5023 / Keypad Phone (BL-5C / BL5C) PREMIUM QUALITY', 1, 'ITEL2.jpeg', 'FOR ITEL IT 2163 / IT 5022 / IT 5023 / Keypad Phone (BL-5C / BL5C) PREMIUM QUALITY\r\nBRAND: ZILIQ', 'Multipack : 1\r\n\r\nFOR ITEL IT 2163 / IT 5022 / IT 5023 / Keypad Phone (BL-5C / BL5C) (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '180', 1, 'Piece', 'yes'),
(49, 30, 31, 'FOR Lenovo Vibe K5 and K5 Plus -BL-259, BL 259 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 0, 'LENEVO2.jpeg', 'FOR Lenovo Vibe K5 and K5 Plus -BL-259, BL 259 (ORIGINAL TESTED BACKUP GUARANTEED 100%)\r\nBRAND: ZILIQ', 'Multipack : 1\r\n\r\nFOR Lenovo Vibe K5 and K5 Plus -BL-259, BL 259 (PREMIUM QUALITY)', '', '357', 1, 'Piece', 'yes'),
(50, 32, 33, 'FOR NOKIA BP-6M,6233 6280 6288 9300 N73 N93 3250 9300 9300i (PREMIUM QUALITY) Battery', 1, 'NOKIA2.jpeg', 'FOR NOKIA BP-6M,6233 6280 6288 9300 N73 N93 3250 9300 9300i (PREMIUM QUALITY) Battery\r\n\r\nBRAND: ZILIQ', 'Multipack : 1\r\n\r\nFOR NOKIA BP-6M,6233 6280 6288 9300 N73 N93 3250 9300 9300i (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '407', 1, 'Piece', 'yes'),
(51, 3, 4, 'FOR VIVO Y31L / Y28L (BK-B-77) ORIGINAL TESTED BACKUP GUARANTEED 100% battery', 1, 'VIVO2.jpeg', 'FOR VIVO Y31L / Y28L (BK-B-77) ORIGINAL TESTED BACKUP GUARANTEED 100% battery\r\n\r\nBRAND: ZILIQ', 'Multipack : 1\r\n\r\nFOR VIVO Y31L / Y28L (BK-B-77) ORIGINAL TESTED BACKUP GUARANTEED 100%', '', '357', 1, 'Piece', 'yes'),
(52, 5, 6, 'FOR MICROMAX Q4002 ACBIR20M15 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'MICRO1.jpeg', 'FOR MICROMAX Q4002 ACBIR20M15 (ORIGINAL TESTED BACKUP GUARANTEED 100%)\r\n\r\nBRAND: MICROMAX', 'Multipack : 1\r\n\r\nFOR MICROMAX Q4002 ACBIR20M15 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '357', 1, 'Piece', 'yes'),
(53, 9, 10, 'FOR LAVA Z50, LBP12000029 (PREMIUM QUALITY)', 1, 'LAVA2.jpeg', 'FOR LAVA Z50, LBP12000029 (PREMIUM QUALITY)\r\nBRAND : ZILIQ', 'Multipack : 1\r\n\r\nFOR LAVA Z50, LBP12000029 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '307', 1, 'Piece', 'yes'),
(54, 13, 14, 'FOR Gionee P7 Max BL-G030Y (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'GIONEE2.jpeg', 'FOR Gionee P7 Max BL-G030Y (ORIGINAL TESTED BACKUP GUARANTEED 100%)\r\nBRAND: ZILIQ', 'Multipack : 1\r\n\r\nFOR Gionee P7 Max BL-G030Y (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '357', 1, 'Piece', 'yes'),
(55, 36, 37, 'FOR LEPHONE W2, BLF-PW2H 1500 mAh (PREMIUM QUALITY) Battery', 1, 'LEPHON1.jpeg', 'FOR LEPHONE W2, BLF-PW2H 1500 mAh (PREMIUM QUALITY) Battery\r\nBRAND: ZILIQ', 'Multipack : 1\r\n\r\nFOR LEPHONE W2, BLF-PW2H 1500 mAh (PREMIUM QUALITY)', '', '357', 1, 'Piece', 'yes'),
(56, 38, 39, 'FOR ITEL BL-25Bi BL25BI It5600 5600 It5606 5606 Power 400 It5620 5620 It5616 5616 It5622 5622 It5602 5602 (PREMIUM QUALITY', 1, 'ITEL3.jpeg', 'FOR ITEL BL-25Bi BL25BI It5600 5600 It5606 5606 Power 400 It5620 5620 It5616 5616 It5622 5622 It5602 5602 (PREMIUM QUALITY\r\n\r\nBRAND: ZILIQ', 'Multipack : 1\r\n\r\nFOR ITEL BL-25Bi BL25BI It5600 5600 It5606 5606 Power 400 It5620 5620 It5616 5616 It5622 5622 It5602 5602 (PREMIUM QUALITY', '', '257', 1, 'Piece', 'yes'),
(57, 5, 6, 'FOR MICROMAX Q386 ACBIR25M01 (PREMIUM QUALITY)', 1, 'MICRO2.jpeg', 'FOR MICROMAX Q386 ACBIR25M01 (PREMIUM QUALITY)\r\n', 'Multipack : 1\r\n\r\nFOR MICROMAX Q386 ACBIR25M01 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '357', 1, 'Piece', 'yes'),
(58, 13, 14, 'FOR GIONEE P7 , G2300X (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'GIONEE3.jpeg', 'FOR GIONEE P7 , G2300X (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'Multipack : 1\r\n\r\nFOR GIONEE P7 , G2300X (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '407', 1, 'Piece', 'yes'),
(59, 44, 45, 'FOR Intex Aqua Elyt Dual BR24010EUL (PREMIUM QUALITY) Battery', 1, 'INTEX2.jpeg', 'FOR Intex Aqua Elyt Dual BR24010EUL (PREMIUM QUALITY) Battery', 'Multipack : 1\r\n\r\nFOR Intex Aqua Elyt Dual BR24010EUL (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '407', 1, 'Piece', 'yes'),
(60, 18, 19, 'FOR LYF FLAME 7S BATTERY(PREMIUM QUALITY)', 1, 'LYF2.jpeg', 'FOR LYF FLAME 7S BATTERY(PREMIUM QUALITY)', 'Multipack : 1\r\n\r\nFOR LYF FLAME 7S (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '407', 1, 'Piece', 'yes'),
(61, 32, 33, 'FOR NOKIA BL-5C (1020 mAh) (PREMIUM QUALITY)', 1, 'NOKIA1.jpeg', 'FOR NOKIA BL-5C (1020 mAh) (PREMIUM QUALITY)', 'Multipack : 1\r\n\r\nFOR Nokia C1 100, 101, 110, 114, 1100, 1101, 1110, 1112, 1200, 1208, 1209, 1600, 1616, 1650, 1680 classic, 1800, Asha 202, Asha 203, Asha 205, 207, 208, 2300, 2310, 2323 classic, 2330 classic, 2600, 2610, 2626, 2700 classic, 2710 Navigati', '', '215', 1, 'Piece', 'yes'),
(62, 40, 41, 'FOR JIO ALL KEYPAD MOBILE PHONE BATTERY', 1, 'JIO2.jpeg', 'FOR JIO ALL KEYPAD MOBILE PHONE BATTERY', 'FOR JIO ALL KEYPAD MOBILE PHONE BATTERY', '', '215', 1, 'Piece', 'yes'),
(63, 38, 39, 'FOR ITEL IT 5231, IT 5232, IT 5233, ITEL IT-7100, 5040, IT-5320:: IT-5250 BL-19CI (PREMIUM QUALITY)', 1, 'ITEL4.jpeg', 'FOR ITEL IT 5231, IT 5232, IT 5233, ITEL IT-7100, 5040, IT-5320:: IT-5250 BL-19CI (PREMIUM QUALITY)', 'FOR ITEL IT 5231, IT 5232, IT 5233, ITEL IT-7100, 5040, IT-5320:: IT-5250 BL-19CI (PREMIUM QUALITY)', '', '307', 1, 'Piece', 'yes'),
(64, 20, 21, 'FOR Karbonn K9 / K7 / K9 Plus / K9+ / K9N / KT7 (PREMIUM QUALITY)', 1, 'KARBONN2.jpeg', 'FOR Karbonn K9 / K7 / K9 Plus / K9+ / K9N / KT7 (PREMIUM QUALITY)', 'FOR Karbonn K9 / K7 / K9 Plus / K9+ / K9N / KT7 (PREMIUM QUALITY)', '', '257', 1, 'Piece', 'yes'),
(65, 30, 31, 'FOR Lenovo A2010 /A1000 BL253 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LENOVO2.jpeg', 'FOR Lenovo A2010 /A1000 BL253 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Lenovo A2010 /A1000 BL253 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '407', 1, 'Piece', 'yes'),
(66, 9, 10, 'FOR LAVA Z60 And Z80 And P7 Plus (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LAVA3.jpeg', 'FOR LAVA Z60 And Z80 And P7 Plus (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR LAVA Z60 And Z80 And P7 Plus (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '407', 1, 'Piece', 'yes'),
(67, 13, 14, 'FOR Gionee F103 Pro BL-G024A 2400mAh (PREMIUM QUALITY)', 1, 'GIONEE4.jpeg', 'FOR Gionee F103 Pro BL-G024A 2400mAh (PREMIUM QUALITY)', 'FOR Gionee F103 Pro BL-G024A 2400mAh (PREMIUM QUALITY)', '', '357', 1, 'Piece', 'yes'),
(68, 5, 6, 'FOR MICROMAX X725, X770, X920 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'MICRO3.jpeg', 'FOR MICROMAX X725, X770, X920 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR MICROMAX X725, X770, X920 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '307', 1, 'Piece', 'yes'),
(69, 28, 29, 'FOR SAMSUNG GALAXY J2 / J200G / 2000mAh (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'SAM2.jpeg', 'FOR SAMSUNG GALAXY J2 / J200G / 2000mAh (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR SAMSUNG GALAXY J2 / J200G / 2000mAh (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '283', 1, 'Piece', 'yes'),
(70, 20, 21, 'FOR KARBONN K9 KAVACH (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'KARBON2.jpeg', 'FOR KARBONN K9 KAVACH (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR KARBONN K9 KAVACH (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '357', 1, 'Piece', 'yes'),
(71, 20, 21, 'FOR KARBONN K9 vista (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'KARBON3.jpeg', 'FOR KARBONN K9 vista (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR KARBONN K9 vista (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '357', 1, 'Kg', 'yes'),
(72, 46, 47, 'FOR Tecno Camon SKY2 IN1 Pro / Tecno i5 (BL-30VT, BL 30VT) ORIGINAL TESTED BACKUP GUARANTEED 100%', 1, 'TECNO1.jpeg', 'FOR Tecno Camon SKY2 IN1 Pro / Tecno i5 (BL-30VT, BL 30VT) ORIGINAL TESTED BACKUP GUARANTEED 100%', 'FOR Tecno Camon SKY2 IN1 Pro / Tecno i5 (BL-30VT, BL 30VT) ORIGINAL TESTED BACKUP GUARANTEED 100%', '', '457', 1, 'Piece', 'yes'),
(73, 46, 47, 'FOR Tecno Camon I Air 2+ / Tecno Camon I Click IN6 / Tecno Camon i2X / Tecno Camon 11 Pro CF8 / Tecno Camon CM CA6 / Tecno Camon i2 / Tecno Camon 11 / Tecno Camon i2 ID5A / Tecno ID3K / BL-36BT BL 36 BT (PREMIUM QUALITY)', 1, 'TECNO2.jpeg', 'FOR Tecno Camon I Air 2+ / Tecno Camon I Click IN6 / Tecno Camon i2X / Tecno Camon 11 Pro CF8 / Tecno Camon CM CA6 / Tecno Camon i2 / Tecno Camon 11 / Tecno Camon i2 ID5A / Tecno ID3K / BL-36BT BL 36 BT (PREMIUM QUALITY)', 'FOR Tecno Camon I Air 2+ / Tecno Camon I Click IN6 / Tecno Camon i2X / Tecno Camon 11 Pro CF8 / Tecno Camon CM CA6 / Tecno Camon i2 / Tecno Camon 11 / Tecno Camon i2 ID5A / Tecno ID3K / BL-36BT BL 36 BT (PREMIUM QUALITY)', '', '407', 1, 'Piece', 'yes'),
(74, 5, 6, 'FOR Micromax Q4202 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'MICRO6.jpeg', 'FOR Micromax Q4202 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Micromax Q4202 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '357', 1, 'Piece', 'yes'),
(75, 48, 49, 'FOR HTC Desire 620G 620 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'HTC2.jpeg', 'FOR HTC Desire 620G 620 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR HTC Desire 620G 620 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '357', 1, 'Piece', 'yes'),
(76, 30, 31, 'FOR Lenovo BL-242, A6000, A6000 Plus (PREMIUM QUALITY)', 1, 'LENOVO5.jpeg', 'FOR Lenovo BL-242, A6000, A6000 Plus (PREMIUM QUALITY)', 'FOR Lenovo BL-242, A6000, A6000 Plus (PREMIUM QUALITY)', '', '357', 1, 'Piece', 'yes'),
(77, 9, 10, 'FOR LAVA Z70 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LAVA5.jpeg', 'FOR LAVA Z70 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR LAVA Z70 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '307', 1, 'Piece', 'yes'),
(78, 24, 25, 'FOR PANASONIC Eluga Prime DWSP2500EPR (PREMIUM AQALITY)', 1, 'PANA3.jpeg', 'FOR PANASONIC Eluga Prime DWSP2500EPR (PREMIUM AQALITY)', 'FOR PANASONIC Eluga Prime DWSP2500EPR (PREMIUM AQALITY)', '', '357', 1, 'Piece', 'yes'),
(79, 38, 39, 'FOR ITEL BL-24EI / IT 1508 / A 41 / A 40 / A 44 Pro / A 41 Plus / A 44 / A 44Air / A46 / L5502 / L5503 / IT1508 Plus (PREMUM QUALITY)', 1, 'ITEL5.jpeg', 'FOR ITEL BL-24EI / IT 1508 / A 41 / A 40 / A 44 Pro / A 41 Plus / A 44 / A 44Air / A46 / L5502 / L5503 / IT1508 Plus (PREMUM QUALITY)', 'FOR ITEL BL-24EI / IT 1508 / A 41 / A 40 / A 44 Pro / A 41 Plus / A 44 / A 44Air / A46 / L5502 / L5503 / IT1508 Plus (PREMUM QUALITY)', '', '307', 1, 'Piece', 'yes'),
(80, 46, 47, 'FOR Tecno Spark Go / Tecno Spark 4 Air / KC1 / KC1J BL-29BT (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'TECNO3.jpeg', 'FOR Tecno Spark Go / Tecno Spark 4 Air / KC1 / KC1J BL-29BT (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Tecno Spark Go / Tecno Spark 4 Air / KC1 / KC1J BL-29BT (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '407', 1, 'Piece', 'yes'),
(81, 36, 37, 'FOR Lephone W2, (BLP-PW2i) PREMIUM QUALITY', 1, 'LEPHONE3.jpeg', 'FOR Lephone W2, (BLP-PW2i) PREMIUM QUALITY', 'FOR Lephone W2, (BLP-PW2i) PREMIUM QUALITY', '', '307', 1, 'Piece', 'yes'),
(82, 20, 21, 'FOR Karbonn K9 VIRAT 4G K9 VIRAAT, VSUSP2800AA (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'KARBON5.jpeg', 'FOR Karbonn K9 VIRAT 4G K9 VIRAAT, VSUSP2800AA (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Karbonn K9 VIRAT 4G K9 VIRAAT, VSUSP2800AA (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '357', 1, 'Piece', 'yes'),
(83, 38, 39, 'FOR ITEL IT 1407 IT1407 IT5230 1409, ITEL BL-15BI, BL 15BI (PREMIUM QUALITY) Battery', 1, 'ITEL6.jpeg', 'FOR ITEL IT 1407 IT1407 IT5230 1409, ITEL BL-15BI, BL 15BI (PREMIUM QUALITY) Battery', 'FOR ITEL IT 1407 IT1407 IT5230 1409, ITEL BL-15BI, BL 15BI (PREMIUM QUALITY) Battery', '', '307', 1, 'Piece', 'yes'),
(84, 9, 10, 'FOR Lava A44, 550, 560 LEB107 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LAVA4.jpeg', 'FOR Lava A44, 550, 560 LEB107 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Lava A44, 550, 560 LEB107 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '307', 1, 'Piece', 'yes'),
(85, 9, 10, 'FOR LAVA A59 / A68 LEB073 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LAVA6.jpeg', 'FOR LAVA A59 / A68 LEB073 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR LAVA A59 / A68 LEB073 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '307', 1, 'Piece', 'yes'),
(86, 5, 6, 'FOR MICROMAX YU ACE 5014 4100 mAh Model - ACBPR40Y01 (PREMIUM QUALITY )', 1, 'MICRO7.jpeg', 'FOR MICROMAX YU ACE 5014 4100 mAh Model - ACBPR40Y01 (PREMIUM QUALITY )', 'FOR MICROMAX YU ACE 5014 4100 mAh Model - ACBPR40Y01 (PREMIUM QUALITY )', '', '607', 1, 'Piece', 'yes'),
(87, 34, 35, 'FOR Mi Xiaomi Redmi Note 5 (BN44) (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'MI1.jpeg', 'FOR Mi Xiaomi Redmi Note 5 (BN44) (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Mi Xiaomi Redmi Note 5 (BN44) (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '357', 1, 'Piece', 'yes'),
(88, 34, 35, 'FOR XIAOMI MI REDMI 4A BN30 3120mAh (PREMIUM QUALITY)', 1, 'MI2.jpeg', 'FOR XIAOMI MI REDMI 4A BN30 3120mAh (PREMIUM QUALITY)', 'FOR XIAOMI MI REDMI 4A BN30 3120mAh (PREMIUM QUALITY)', '', '357', 1, 'Piece', 'yes'),
(89, 28, 29, 'FOR Samsung Galaxy On8 EB-BJ710CBN 3300mAh (PREMIUM QUALITY)', 1, 'SAM3.jpeg', 'FOR Samsung Galaxy On8 EB-BJ710CBN 3300mAh (PREMIUM QUALITY)', 'FOR Samsung Galaxy On8 EB-BJ710CBN 3300mAh (PREMIUM QUALITY)', '', '407', 1, 'Piece', 'yes'),
(90, 28, 29, 'FOR SAMASUNG GALAXY J7 / SM J700F/DD (PREMIUM QUALITY)', 1, 'SAM4.jpeg', 'FOR SAMASUNG GALAXY J7 / SM J700F/DD (PREMIUM QUALITY)', 'FOR SAMASUNG GALAXY J7 / SM J700F/DD (PREMIUM QUALITY)', '', '357', 1, 'Piece', 'yes'),
(91, 28, 29, 'FOR Samsung J7 NXT SM-J701F/DS (PREMIUM QUALITY) New Collections Of Battery', 1, 'SAM5.jpeg', 'FOR Samsung J7 NXT SM-J701F/DS (PREMIUM QUALITY) New Collections Of Battery', 'FOR Samsung J7 NXT SM-J701F/DS (PREMIUM QUALITY) New Collections Of Battery', '', '357', 1, 'Piece', 'yes'),
(92, 9, 10, 'FOR Lava Iris Atom 2X, LAVA LEB040 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LAVA7.jpeg', 'FOR Lava Iris Atom 2X, LAVA LEB040 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Lava Iris Atom 2X, LAVA LEB040 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '357', 1, 'Piece', 'yes'),
(93, 9, 10, 'FOR Lava A97 A76 A88 A71 X17 4G LEB060 LEB059 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'LAVA8.jpeg', 'FOR Lava A97 A76 A88 A71 X17 4G LEB060 LEB059 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR Lava A97 A76 A88 A71 X17 4G LEB060 LEB059 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '407', 1, 'Piece', 'yes'),
(94, 40, 41, 'FOR Jio FI 3 / Jio Fi 4 / Jio 4G Router / SCUD-MFB260001 (PREMIUM QUALITY)', 1, 'JIO4.jpeg', 'FOR Jio FI 3 / Jio Fi 4 / Jio 4G Router / SCUD-MFB260001 (PREMIUM QUALITY)', 'FOR Jio FI 3 / Jio Fi 4 / Jio 4G Router / SCUD-MFB260001 (PREMIUM QUALITY)', '', '407', 1, 'Piece', 'yes'),
(95, 46, 47, 'FOR Tecno i3/ i3 Pro, BL-30UT (ORIGINAL TESTED BACKUP GUARANTEED 100%) Battery', 1, 'TECNO6.jpeg', 'FOR Tecno i3/ i3 Pro, BL-30UT (ORIGINAL TESTED BACKUP GUARANTEED 100%) Battery', 'FOR Tecno i3/ i3 Pro, BL-30UT (ORIGINAL TESTED BACKUP GUARANTEED 100%) Battery', '', '407', 1, 'Piece', 'yes'),
(96, 5, 6, 'FOR MICROMAX X920 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 1, 'MICRO8.jpeg', 'FOR MICROMAX X920 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', 'FOR MICROMAX X920 (ORIGINAL TESTED BACKUP GUARANTEED 100%)', '', '307', 1, 'Piece', 'yes'),
(97, 18, 19, ' LYF Flame 8 & Flame1 / RLC01A 2000MAh (PREMIUM QUALITY)', 1, 'LYF4.jpeg', 'FOR LYF Flame 8 & Flame1 / RLC01A 2000MAh (PREMIUM QUALITY)', 'LYF Flame 8 & Flame1 / RLC01A 2000MAh (PREMIUM QUALITY)', '1699', '349', 1, 'Piece', 'no'),
(98, 32, 33, 'NOKIA BL-5CT 6600 7210 7230 3720 5220 6303 6730 C6-1 C5-00 C3-01 (PREMIUM QUALITY)', 2, 'NOKIA4.jpeg', 'FOR NOKIA BL-5CT 6600 7210 7230 3720 5220 6303 6730 C6-1 C5-00 C3-01 (PREMIUM QUALITY)', 'NOKIA BL-5CT 6600 7210 7230 3720 5220 6303 6730 C6-1 C5-00 C3-01 (PREMIUM QUALITY)', '1299', '199', 1, 'Piece', 'no'),
(99, 3, 4, 'copy demo vivo', 2, 'Hydrangeas.jpg', 'cmkdsacbmnabmndbsbnasmb', 'cdsbcbsmabdmnsadcf', '700', '500', 1, 'Piece', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `sucribid` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `mailsentstatus` int(1) NOT NULL DEFAULT 0,
  `sucrib_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`sucribid`, `mail`, `status`, `mailsentstatus`, `sucrib_date`) VALUES
(1, 'khan.arbani@gmail.com', 1, 0, '2020-12-09'),
(2, 'info.rafique687@gmail.com', 1, 0, '2020-12-09'),
(4, 'in@gja.com', 1, 0, '2020-12-09'),
(5, '9799184788', 1, 0, '2020-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `sts_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`sts_id`, `status`) VALUES
(1, 'Proccessed'),
(2, 'shipped'),
(3, 'delivered'),
(4, 'returnd'),
(5, 'cancel');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `orderid` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `total_item` int(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `place_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `delevery_status` int(2) NOT NULL,
  `payment_status` int(1) NOT NULL DEFAULT 0 COMMENT '0no pay,1pay',
  `paid_method` varchar(255) NOT NULL,
  `razorpay_payment_id` varchar(255) NOT NULL,
  `addressid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`orderid`, `customer_id`, `total_item`, `grand_total`, `place_date`, `delevery_status`, `payment_status`, `paid_method`, `razorpay_payment_id`, `addressid`) VALUES
(1, 192, 3, '10590', '2021-11-03 07:41:47', 0, 0, 'online', '', 'paota'),
(2, 192, 1, '2000', '2021-11-03 07:47:01', 0, 0, 'online', 'pay_IH3N4k07Zt80Ik', 'paota'),
(3, 192, 2, '4500', '2021-11-03 10:23:49', 0, 0, 'online', 'pay_IH62h8lro3hzxF', 'paota'),
(4, 227, 1, '772', '2021-11-11 10:16:11', 2, 0, 'COD', '', '12222'),
(5, 227, 2, '15000', '2021-11-12 07:51:50', 0, 0, 'COD', '', '12222'),
(6, 227, 1, '1500', '2021-11-12 08:05:34', 0, 0, 'COD', '', '12222');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(255) NOT NULL,
  `parent_id` int(255) NOT NULL DEFAULT 0 COMMENT '0 mean main product',
  `main_cate` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_pic` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1active,2inactive,0delete',
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `parent_id`, `main_cate`, `product_name`, `product_pic`, `status`, `description`) VALUES
(1, 0, 0, 'OPPO', 'oppoproduct.jpg', 1, 'all OPPO Battery Available'),
(2, 1, 1, 'OPPO', 'oppoproduct.jpg', 1, 'OPPO'),
(3, 0, 0, 'VIVO', 'viivo.jpg', 1, 'All Vivo Battery'),
(4, 3, 3, 'VIVO', 'viivo.jpg', 1, 'VIVO'),
(5, 0, 0, 'MICROMAX', '14.jpg', 1, 'For Micromax'),
(6, 5, 5, 'MICROMAX', '14.jpg', 1, 'For Micromax'),
(7, 0, 0, 'LAVA', '    01.jpg,    01.jpg,    01.jpg,', 0, 'FOR LAVA'),
(8, 7, 7, 'LAVA', '01.jpg', 1, 'FOR LAVA'),
(9, 0, 0, 'LAVA', '01.jpg', 1, 'FOR LAVA'),
(10, 9, 9, 'LAVA', '01.jpg', 1, 'FOR LAVA'),
(11, 0, 0, 'GIONEE', '    02.jpg,    02.jpg,', 0, 'FOR GIONEE'),
(12, 11, 11, 'GIONEE', '    02.jpg,', 1, 'FOR GIONEE'),
(13, 0, 0, 'GIONEE', '02.jpg', 1, 'FOR GIONEE'),
(14, 13, 13, 'GIONEE', '02.jpg', 1, 'FOR GIONEE'),
(15, 0, 0, 'LYF', '21 (1).jpg', 0, 'FOR LYF'),
(16, 0, 0, 'LYF', '21 (1).jpg', 0, 'FOE LYF'),
(17, 16, 16, 'LYF', '    21 (1).jpg,21 (1).jpg', 1, 'FOR LYF'),
(18, 0, 0, 'LYF', '    lyfe.jpg,', 1, 'FOR LYF'),
(19, 18, 18, 'LYF', '    lyfe.jpg,', 1, 'FOR LYF'),
(20, 0, 0, 'KARBONN', 'KARBONN.jpg', 1, 'Karbonn'),
(21, 20, 20, 'KARBONN', 'KARBONN.jpg', 1, 'Karbonn '),
(22, 0, 0, 'LAVA', 'LAVA.jpg', 0, 'FOR Lava A67 ( LEB075 )'),
(23, 22, 22, 'FOR LAVA MOBILE', 'LAVA.jpg', 0, 'FOR Lava A67 ( LEB075 )'),
(24, 0, 0, 'PANASONIC', '    panasonica.jpg,', 1, 'FOR PANASONIC'),
(25, 24, 24, 'PANASONIC', '    panasonica.jpg,', 1, 'FOR PANASONIC MOBILES'),
(26, 0, 0, 'LG', 'LG.jpg', 1, 'FOR LG MOBILE'),
(27, 26, 26, 'LG', 'LG.jpg', 1, 'FOR LG MOBILE'),
(28, 0, 0, 'SAMSUNG', 'SAMSUNG.jpg', 1, 'FOR SAMSUNG'),
(29, 28, 28, 'SAMSUNG', 'SAMSUNG.jpg', 1, 'FOR SAMSUNG'),
(30, 0, 0, 'LENOVO', 'LENOVO.jpg', 1, 'FOR LENOVO'),
(31, 30, 30, 'LENOVO', 'LENOVO.jpg', 1, 'FOR LENOVO'),
(32, 0, 0, 'NOKIA', 'NOKIA.jpg', 1, 'FOR NOKIA'),
(33, 32, 32, 'NOKIA', 'NOKIA.jpg', 1, 'FOR NOKIA'),
(34, 0, 0, 'MI', 'MI.jpg', 1, 'FOR MI'),
(35, 34, 34, 'MI', 'MI.jpg', 1, 'FOR MI'),
(36, 0, 0, 'LEPHONE', 'LEPHONE.jpg', 1, 'FOR LEPHONE'),
(37, 36, 36, 'LEPHONE', 'LEPHONE.jpg', 1, 'FOR LEPHONE'),
(38, 0, 0, 'ITEL', 'ITEL.jpg', 1, 'FOR ITEL'),
(39, 38, 38, 'ITEL', 'ITEL.jpg', 1, 'FOR ITEL'),
(40, 0, 0, 'JIO', 'JIO.jpg', 1, 'FOR JIO'),
(41, 40, 40, 'JIO', 'JIO.jpg', 1, 'FOR JIO BATTERY'),
(42, 0, 0, 'HAUWEI', 'HAUWAI.jpg', 1, 'FOR HAUWEI'),
(43, 42, 42, 'HAUWEI', 'HAUWAI.jpg', 1, 'FOR HAUWEI'),
(44, 0, 0, 'INTEX', 'INTEX.jpg', 1, 'FOR INTEX'),
(45, 44, 44, 'INTEX', 'INTEX.jpg', 1, 'FOR INTEX'),
(46, 0, 0, 'TECNO', 'TECNO.jpg', 1, 'FOR TECNO'),
(47, 46, 46, 'TECNO', '    tecnoa.jpg,', 1, 'FOR TECNO'),
(48, 0, 0, 'HTC', 'HTC.jpg', 1, 'HTC'),
(49, 48, 48, 'HTC', 'HTC.jpg', 1, 'HTC'),
(50, 0, 0, 'MOTOROLA', 'MOTORO.jpg', 1, 'FOR MOTOROLA'),
(51, 50, 50, 'MOTOROLA', 'MOTORO.jpg', 1, 'FOR MOTOROLA');

-- --------------------------------------------------------

--
-- Table structure for table `products_order`
--

CREATE TABLE `products_order` (
  `prod_orderid` int(255) NOT NULL,
  `fnorder_id` int(255) NOT NULL,
  `ord_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `prod_name` varchar(255) NOT NULL,
  `prod_qty` int(255) NOT NULL,
  `unit_price` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `dl_status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_order`
--

INSERT INTO `products_order` (`prod_orderid`, `fnorder_id`, `ord_date`, `prod_name`, `prod_qty`, `unit_price`, `total_price`, `dl_status`) VALUES
(1, 1, '0000-00-00 00:00:00', 'iPhone7', 1, '2090', '2090', 0),
(2, 1, '0000-00-00 00:00:00', 'OPPO', 2, '2000', '4000', 0),
(3, 1, '0000-00-00 00:00:00', ' Xiaomi Redmi 1S', 3, '1500', '4500', 0),
(4, 2, '2021-11-03 07:47:01', 'OPPO', 1, '2000', '2000', 0),
(5, 3, '2021-11-03 10:23:49', 'Samsung Galaxy G130', 1, '500', '500', 0),
(6, 3, '2021-11-03 10:23:49', 'OPPO', 2, '2000', '4000', 0),
(7, 4, '2021-11-11 10:16:13', 'VIVI Y53', 1, '772', '772', 0),
(8, 5, '2021-11-12 07:51:50', ' Xiaomi Redmi 1S', 2, '1500', '3000', 0),
(9, 5, '2021-11-12 07:51:50', 'OPPO', 6, '2000', '12000', 0),
(10, 6, '2021-11-12 08:05:34', ' Xiaomi Redmi 1S', 1, '1500', '1500', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `reg_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '1verified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`reg_id`, `name`, `mobile`, `email`, `password`, `otp`, `status`) VALUES
(222, '', '9001979342', '', '', '4972', 0),
(223, '', '9799184788', '', '', '5464', 0),
(224, '', '9001979345', '', '', '7992', 0),
(227, 'Tasleem Rafique', '9799184799', 'khan.arbani@gmail.com', '222222222', '0', 0),
(228, 'sarik', '9221212141', 'fsakj@gmail.com', '4444444444', '0', 0),
(229, '', '9001979340', '', '', '9816', 0),
(230, '', '9799184700', '', '', '5668', 0),
(231, 'sarikl', '9001111112', 'fsakj@gmail.com', '6666666666', '0', 0),
(232, '', '9166854602', '', '', '3878', 0),
(233, '', '8888888888', '', '', '7818', 0),
(234, '', '7777777777', '', '', '5627', 0),
(235, 'Tasleem Rafique', '9332323656', 'khan.arbani@gmail.com', '222222222', '0', 0),
(236, '', '9414561447', '', '', '7335', 0),
(237, '', '9466775501', '', '', '7511', 0),
(238, '', '9461133000', '', '', '7360', 0),
(239, 'mohammad Rafique', '9001979333', 'info.rafique687@gmail.com', 'Rafique786', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `send_maildetails`
--

CREATE TABLE `send_maildetails` (
  `mail_id` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `mailreceiver` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `send_maildetails`
--

INSERT INTO `send_maildetails` (`mail_id`, `subject`, `message`, `attachment`, `date`, `mailreceiver`) VALUES
(1, 'test', 'fdsjalfjakfkjajsfklj', 'dsfsd', '2020-09-12', 'rafiq@gnail.com,alihasan@gmail.com,iniyaz@gmail.com'),
(2, 'test2', 'ters2 fjdslafulksajf', 'fdsaf', '2020-09-30', 'fdsafasdfas@gmnia.com,ra@gmail.com,kk@gmial.com'),
(3, 'pppppppppd', '<p>gsdfg</p>\r\n', '', '2020-09-28', 'info.rafique687@gmail.com,khan.arbani@gmail.com'),
(4, 'database', '<p>fdsaf</p>\r\n', '', '2020-09-28', 'khan.arbani@gmail.com,info.rafique687@gmail.com'),
(5, 'with pic', '<p>sd</p>\r\n', 'apple-touch-icon.png', '2020-09-28', 'khan.arbani@gmail.com,info.rafique687@gmail.com'),
(6, 'fdaf', '<p>fdas</p>\r\n', '', '2020-09-28', 'khan.arbani@gmail.com,info.rafique687@gmail.com'),
(7, 'testing', '<p>dfsg</p>\r\n', '', '2020-10-10', 'khan.arbani@gmail.com'),
(8, 'fs', '<p>fdsa</p>\r\n', '', '2020-10-10', 'info.rafique687@gmail.com'),
(9, 'fs', '<p>fdsa</p>\r\n', '', '2020-10-10', 'info.rafique687@gmail.com'),
(10, 'dfsa', '<p>fdsaf</p>\r\n', '', '2020-10-10', 'info.rafique687@gmail.com,khan.arbani@gmail.com,'),
(11, 'testing', '<p>ghhhhhh</p>\r\n', '', '2020-10-13', 'info.rafique687@gmail.com,fdkasj@df.com,');

-- --------------------------------------------------------

--
-- Table structure for table `send_mailsubscriber`
--

CREATE TABLE `send_mailsubscriber` (
  `mail_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `mailreceiver` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `send_mailsubscriber`
--

INSERT INTO `send_mailsubscriber` (`mail_id`, `subject`, `message`, `attachment`, `date`, `mailreceiver`) VALUES
(1, 'subcriber test mail', '<p>hi,</p>\r\n\r\n<p>all subscriber</p>\r\n', '', '2020-12-09', '0000-00-00'),
(2, 'subcriber test mail', '<p>hi,</p>\r\n\r\n<p>all subscriber</p>\r\n', '', '2020-12-09', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(255) NOT NULL,
  `sevices_name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `service_des` varchar(255) NOT NULL,
  `service_status` varchar(255) NOT NULL,
  `service_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `sevices_name`, `icon`, `service_des`, `service_status`, `service_pic`) VALUES
(1, 'Accounting', 'fa fa-money', 'Equity trading refers to the purchase or sale of a company’s stocks through major stock exchanges like the NSE (National Stock Exchanges) and BSE (Bombay Stock Exchanges). Companies open their shares to the public in the equity market, allowing you to buy', '1', 'account.jpg,account.jpg,pic.jpg,Accounting.jpg,incometax.jpg,service1.jpg'),
(2, 'GST', 'fa fa-calculator', 'How about availing 100% service value while utilizing only 10% capital? That’s the beauty of derivative market. Derivative instruments derive their value from underlying assets which can be Equity, Indices, Currency or Commodity. In derivative market we c', '1', 'dd.jpg,dd.jpg,gst (1).jpg,pics.jpg,service2.jpg'),
(3, 'Income Tax', 'fa fa-tax icon', 'Commodities have emerged as the next best option for investors, after stocks and bonds. The commodity market trades in the primary economic sector rather than manufactured goods. Some of the popular commodities include gold, silver, oil, wheat, etc. With', '1', 'incometax.jpg,taxx.jpg,photo (1).jpg,service3.jpg'),
(4, 'Web Development & Designing', 'fa fa-code', 'Currency trading, as its name suggests, refers to the purchase and sale of different currencies in the world. The Foreign Exchange or Forex, the world’s largest financial market, allows investors to trade currencies in volume. The most traded currencies i', '1', 'webdesign.png,webdesign.png,service4.jpg'),
(5, 'Mobile App Development', 'fa fa-android', 'Mobile is reigning the once web-powered online industry. Sharing the momentum, we at Adiyogi, create mobile applications that stand out in the industry for its design as well as user engagement. We love to work with you to make your dream project a realit', '1', 'app.png,app.png,soft.png,webdesign.png'),
(6, 'Digital Marketing', 'fa fa-bullhorn', 'As a Digital Marketing company, we offer Technical SEO Audits, Search Engine Optimization Strategies, Google AdWords Advertising (Search Engine Marketing, Pay Per Click Management & Video Advertising), Social Media Strategies, and Creative Content Resulti', '1', 'soft.png,soft.png,Social media post.jpg,3.jpg,Social media post.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `setting_table`
--

CREATE TABLE `setting_table` (
  `sessting_id` int(255) NOT NULL,
  `section_id` int(255) NOT NULL DEFAULT 1,
  `field_name` varchar(255) NOT NULL,
  `field_value` varchar(5000) NOT NULL,
  `field_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting_table`
--

INSERT INTO `setting_table` (`sessting_id`, `section_id`, `field_name`, `field_value`, `field_type`) VALUES
(1, 1, 'Site name', 'Mobile Battery world', 'text'),
(2, 1, 'Mobile', '8502863077', 'text'),
(3, 1, 'Email', 'info@mobilebatteryworld.com', 'text'),
(4, 1, 'Logo', 'logozmbw.png', 'file'),
(5, 1, 'Fevicon', 'fevi.png', 'file'),
(15, 2, 'Title', 'About Us', 'text'),
(16, 2, 'SEO Meta', '', 'text'),
(19, 2, 'Short Description', 'ZILIQ- MOBILE BATTERY WORLD', 'textarea'),
(20, 2, 'About', '<p>A well-established brand founded in 2020, Selling original quality Polymer ion Mobile battery as well as Lithium ion Mobile Battery with 1000+ variety of models supplying high strength products all over India. Mobile batteries of all brands are available at factory rate as we are the exporter, importer and service provider at pan India. Keeping the market demand in eyes we never compromise with the product quality, its packaging, its performance, responsible price and the delivery time.</p>\r\n', 'fck'),
(23, 3, 'Title', 'Terma and condition Title', 'text'),
(24, 3, 'SEO Meta Key', 'Key words', 'tex'),
(25, 3, 'Shord Description', 'ACCESSING, BROWSING OR OTHERWISE USING THE SITE INDICATES YOUR AGREEMENT TO ALL THE TERMS AND CONDITIONS UNDER THESE TERMS OF USE, SO PLEASE READ THE TERMS OF USE CAREFULLY BEFORE PROCEEDING. By impliedly or expressly accepting these Terms of Use, You also accept and agree to be bound by ZILIQ Mobile Battery World Policies as amended from time to time.', 'textarea'),
(26, 3, 'Content', '<p><strong>ACCESSING, BROWSING OR OTHERWISE USING THE SITE INDICATES YOUR AGREEMENT TO ALL THE TERMS AND CONDITIONS UNDER THESE TERMS OF USE, SO PLEASE READ THE TERMS OF USE CAREFULLY BEFORE PROCEEDING.&nbsp;</strong>By impliedly or expressly accepting these Terms of Use, You also accept and agree to be bound by ZILIQ&nbsp;Mobile Battery World Policies as amended from time to time.</p>\r\n\r\n<p><strong>REGISTRATION &nbsp;POLICY</strong>&nbsp;</p>\r\n\r\n<p>Services and use of the Website is available only to persons who can form legally binding contracts under Indian Contract Act, 1872. Persons who are &quot;incompetent to contract&quot; within the meaning of the Indian Contract Act, 1872 including minors, un-discharged insolvents etc. are not eligible to use the Website. If you are a minor i.e. under the age of 18 years, you shall not register as a User of the Ziliq Mobile Battery World website and shall not transact on or use the website. As a minor if you wish to use or transact on website, such use or transaction may be made by your legal guardian or parents on the Website. Ziliq Mobile Battery World reserves the right to terminate your membership and / or refuse to provide you with access to the Website if it is brought to Yortrolley&#39;s notice or if it is Found that you are under the age of 18 years.</p>\r\n\r\n<p><strong>ACCOUNT &nbsp;POLICY</strong>&nbsp;</p>\r\n\r\n<p>If You access this Website, You shall be responsible for maintaining the confidentiality of your user name or user id&nbsp;and Password and You shall be responsible for all activities that occur under your user id&nbsp;and Password. You agree that if You provide any information that is untrue, inaccurate, not current or incomplete or We have reasonable grounds to suspect that such information is untrue, inaccurate, not current or incomplete, or not in accordance with the this Terms of Use, We shall have the right to indefinitely suspend or terminate or block access of your membership on the Website and refuse to provide You with access to the Website.</p>\r\n\r\n<p><strong>TRANSACTION &nbsp;POLICY</strong></p>\r\n\r\n<p>ZILIQ&nbsp;Mobile Battery World is not and can&#39;t be a party to or control in any manner any transaction between the Website&#39;s Users.&nbsp;</p>\r\n\r\n<p>ZILIQ&nbsp;Mobile Battery World have a right to cancel any such order placed by the Buyer, at its sole discretion and the Buyer shall be intimated of the same by way of an email/SMS.&nbsp;Any transaction price paid by Buyer in case of such cancellation by Seller, shall be refunded to the Buyer. Further, the Seller may cancel an order wherein the quantities exceed the typical individual consumption. This applies both to the number of products ordered within a single order and the placing of several orders for the same product where the individual orders comprise a quantity that exceeds the typical individual consumption. What comprises a typical individual&#39;s consumption quantity limit shall be based on various factors and at the sole discretion of the Seller and may vary from individual to individual.</p>\r\n\r\n<p><strong>CHARGES Policy</strong></p>\r\n\r\n<p>Membership on the Website is free for buyers. ZILIQ&nbsp;Mobile Battery World does not charge any fee for browsing and buying on the Website. Ziliq Mobile Battery World reserves the right to change its Fee Policy from time to time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>USE OF THIS WEBSITE</strong></p>\r\n\r\n<p>You agree, undertake and confirm that Your use of Website shall be strictly governed by the following binding principles:</p>\r\n\r\n<ol>\r\n	<li>You shall not host, display, upload, modify, publish, transmit, update or share any information which:</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>belongs to another person and to which You does not have any right to.</li>\r\n	<li>is misleading in any way;</li>\r\n	<li>is patently offensive to the online community, such as sexually explicit content, or content that promotes obscenity, paedophilia, racism, bigotry, hatred or physical harm of any kind against any group or individual;</li>\r\n	<li>harasses or advocates harassment of another person;</li>\r\n	<li>involves the transmission of &quot;junk mail&quot;, &quot;chain letters&quot;, or unsolicited mass mailing or &quot;spamming&quot;;</li>\r\n	<li>promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libellous;</li>\r\n	<li>infringes upon or violates any third party&#39;s rights [including, but not limited to, intellectual property rights, rights of privacy (including without limitation unauthorized disclosure of a person&#39;s name, email address, physical address or phone number) or rights of publicity];</li>\r\n	<li>contains restricted or password-only access pages, or hidden pages or images (those not linked to or from another</li>\r\n	<li>provides material that exploits people in a sexual, violent or otherwise inappropriate manner or solicits personal information from anyone;accessible page);</li>\r\n	<li>contains video, photographs, or ', 'fck'),
(27, 4, 'Privacy Policy', 'Privacy policy title', 'text'),
(29, 4, 'SEO script', 'This cookie policy applies to all websites and applications for mobile devices belonging to Ziliq Mobile Battery World.', 'text'),
(30, 4, 'short Description', 'This cookie policy applies to all websites and applications for mobile devices belonging to Ziliq Mobile Battery World.', 'textarea'),
(31, 4, 'content', '<p>This cookie policy applies to all websites and applications for mobile devices belonging to ZILIQ&nbsp;Mobile Battery World.<br />\r\nBy using websites and applications you agree to store cookies in accordance with the Cookie Policy. If you don&#39;t agree to our cookie usage, you should change your browser settings in a suitable manner, or exit the webpage.</p>\r\n\r\n<p><strong>What are cookies?</strong><br />\r\nCookies are small files that are saved and stored on your computer, tablet or smartphone when you visit different web pages. A cookie typically contains the name of the website from where it comes from, cookie &quot;life expectancy&quot; (existence time), and a randomly generated unique number used to identify the browser that connects with the web page</p>\r\n\r\n<p><strong>Why do we use cookies?</strong><br />\r\nZILIQ&nbsp;Mobile Battery World uses cookies for various purposes:&nbsp;web pages and applications run faster and will be easier to use, also in order to fit the content and advertisements to customer&#39;s expectations and interests, to collect anonymous, aggregated statistics that help to improve the functionality and content of web pages and applications. Using cookies in the described above manner never identifies the user&#39;s identity.</p>\r\n', 'fck'),
(32, 5, 'Title', 'service title', 'text'),
(33, 5, 'Seo  Meta Script', 'seo key word', 'text'),
(34, 5, 'Short Descripton', 'We Provide a full range of Website Design Services, eCommerce Solutions, Content Management Systems (CMS), Search Engine Optimisation (SEO), Social Media and Web Solutions for any business, anywhere.\r\nWe Provid High Quality and cost effective Services.\r\nW', 'textarea'),
(35, 5, 'Content', '<p>Our agreements with certain business customers may contain provisions about the collection, use, storage and disposal of information collected through the Services and offline. If a provision of a customer agreement conflicts or otherwise is inconsiste', 'fck'),
(36, 6, 'Face Book Url', 'https://www.facebook.com/mobilebatteryword', 'text'),
(37, 6, 'Instagram', 'https://instagram.com/ziliq_mobile_battery_world?utm_medium=copy_link', 'text'),
(38, 6, 'LinkedIn', 'linkedin.com/mobilebatteryword', 'text'),
(39, 6, 'Twitter', 'twitter.com/mobilebatteryword', 'text'),
(40, 6, 'Google+', '', 'text'),
(41, 7, 'Home Title', 'What we Do', 'text'),
(42, 7, 'Home Short Description', 'As a concept, trade marketing is completely misunderstood. Yet it\'s incredibly important, so today I\'m going to explain what trade marketing is, why it’s important, who uses it and how.\r\nI\'ll cover trade marketing examples, tools and techniques, plus help', 'textarea'),
(43, 1, 'Location', '122, Maa Bhagwati Nagar,Balsamand,Jodhpur,342026(Raj.)', 'textarea'),
(44, 1, 'Map Location', '						https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3575.7118917916114!2d73.03239411503283!3d26.335827183379408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2fdb1b4819b78cb4!2zMjbCsDIwJzA5LjAiTiA3M8KwMDInMDQuNSJF!5e0!3m2!1sen!2sin!4v1638606915758!5m2!1sen!2sin															', 'textarea'),
(45, 1, 'Live Chat', '																																																																																				', 'textarea'),
(46, 8, 'faq', 'fdaf', 'fck'),
(47, 6, 'Play Store', 'play store download', 'text'),
(48, 6, 'apple store', 'store download ', 'text'),
(49, 9, 'title', 'Mobile Battery World', 'text'),
(50, 9, 'Meta Key', 'Mobile Battery World,All type of Mobile Battery', 'text'),
(51, 9, 'Key Description', 'Battery World', 'textarea'),
(52, 9, 'Content', '<p>Mobile Battery World Provid all Varriaty Of Battery</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'fck');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `stateid` int(255) NOT NULL,
  `contery_id` int(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `state_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `contery_id`, `state`, `state_status`) VALUES
(1, 1, 'Rajasthan', 1),
(2, 1, 'Gujrat', 1),
(3, 1, 'punjab', 1),
(4, 1, 'hariyaana', 1),
(5, 1, 'Rajasthann', 1),
(6, 1, 'Rajasthanc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sumary`
--

CREATE TABLE `sumary` (
  `sumry_id` int(255) NOT NULL,
  `main_orderid` int(255) NOT NULL,
  `total_item` int(255) NOT NULL,
  `grand-total` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `dp` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `name`, `designation`, `dp`, `twitter`, `facebook`, `instagram`, `linkedin`, `status`) VALUES
(1, 'Mohammad Rafique', 'developer', '5b7ad435200000420034abec.jpeg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(2, 'piyush sharma', ' android devloper', '1483514496-9388.jpg', '  twiter', '  facebook', '  insta', '  in', 0),
(3, 'Mohammad Rafiquegf', 'developer', '1483514496-9388.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(4, 'Mohammad ', 'developer', '', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(5, 'Mohammad ', 'developer', '5b7ad435200000420034abec.jpeg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(6, 'Dharmendra sir', 'Mean Devloper', 'team-1.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(7, 'Dharmendra sir', 'Mean Devloper', 'team-3.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(8, 'Dharmendra sir', 'Mean Devloper', 'team-1.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(9, 'piyush sharma', ' android devloper', 'team-3.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(10, 'Nikhil', 'Nodjs', 'services-4.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(11, 'Mohammad Rafique', 'Php Devloper', 'team-1.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(12, 'Nikhil', 'Nodjs', 'team-3.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(13, 'Nikhil', 'Nodjs', 'team-1.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(14, 'Dharmendra sir', 'Mean Devloper', 'tm1.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 1),
(15, 'Nikhil', 'Nodjs', 'tm2.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 1),
(16, 'Nikhil', 'Nodjs', 'tm4.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 1),
(17, 'Nikhil', 'Nodjs', 'tm1.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `textsmessage`
--

CREATE TABLE `textsmessage` (
  `sms_id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `customerno` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `textsmessage`
--

INSERT INTO `textsmessage` (`sms_id`, `message`, `customerno`, `date`) VALUES
(1, '										\r\n	dsaff															', '9001979342,9799184788', '2020-09-12'),
(2, '										\r\n			dvsf													', '9001979342,9799184788', '2020-09-12'),
(3, '										\r\n							cc									', '9001979342,9799184788', '2020-09-28'),
(4, '										\r\n	fdsafkjgjhsagdfhgsfa															', '9001212145,8552525654,', '2020-10-12'),
(5, '			adfsaf							\r\n																', '8221212525,7441412458,', '2020-10-12'),
(6, '										\r\n			fdsa													', '9223333333,', '2020-10-12'),
(7, '				czc						\r\n																', '9001212352,', '2020-10-12'),
(8, '										\r\n			gfh													', '9799184788,9001979342', '2020-10-13'),
(9, 'safdsa', '9001212145,9001979342', '2020-10-13'),
(10, 'gfdsf														', '9799184788,9001979342', '2020-10-13'),
(11, ',mjnbmnb', '  9001979342', '2020-10-13'),
(12, '										\r\n		ttrthg																\r\n																								', '9799184788,9001979342', '2020-10-13'),
(13, 'vdsg', '9799184788,9001979342', '2020-10-13'),
(14, 'dsg', 'info.rafique687@gmail.com', '2020-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `adr_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` int(255) NOT NULL,
  `state` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` int(255) NOT NULL,
  `position` int(255) NOT NULL,
  `default_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`adr_id`, `user_id`, `address`, `country`, `state`, `city`, `zipcode`, `position`, `default_address`) VALUES
(179, 156, 'paota man ji ka hatha', 0, 0, 'jodhpur', 342001, 0, '1'),
(180, 192, 'paota', 0, 0, 'jodhpur', 342001, 0, '1'),
(181, 192, 'paota maan ji ka hattha', 0, 0, 'jodhpur', 342001, 0, '1'),
(182, 192, 'paota kkkk', 0, 0, 'jodhpur', 342001, 0, '1'),
(183, 192, 'paota l;kl;kd;lkvdflkds', 0, 0, 'jodhpur', 342001, 0, '1'),
(184, 227, '12222', 0, 0, 'JODHPUR', 344022, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `whatsmessage`
--

CREATE TABLE `whatsmessage` (
  `whatapp_id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `attach` varchar(255) NOT NULL,
  `customerno` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `whatsmessage`
--

INSERT INTO `whatsmessage` (`whatapp_id`, `message`, `attach`, `customerno`, `date`) VALUES
(1, '			fgsdjgkjsfhg							\r\n																', 'xyz.file', '9799184788,9001979342', '2020-09-12'),
(2, '			fgsdjgkjsfhg							\r\n																', 'xyz.file', '9799184788,9001979342', '2020-09-12'),
(3, '			fgsdjgkjsfhg							\r\n																', 'xyz.file', '9799184788,9001979342', '2020-09-12'),
(4, '			fgsdjgkjsfhg							\r\n																', 'xyz.file', '9799184788,9001979342', '2020-09-12'),
(5, '			sgdsfg							\r\n																', 'xyz.file', '9799184788,9001979342', '2020-09-12'),
(6, '	csdsf									\r\n																', 'xyz.file', '9001979342,9799184788', '2020-09-12'),
(7, '										\r\n		dsfa														', 'xyz.file', '9001979342,9799184788', '2020-09-12'),
(8, '										\r\n	dfs															', 'xyz.file', '9001979342,9799184788', '2020-09-12'),
(9, '				gfdgd						\r\n																', 'xyz.file', '9001979342', '2020-10-10'),
(10, '										\r\n			adfsfa													', 'xyz.file', '9001212425,7445254578,', '2020-10-12'),
(11, '					fasf					\r\n																', 'xyz.file', '9001212545,', '2020-10-12'),
(12, 'fasfas', 'xyz.file', '', '2020-10-12'),
(13, 'frkfguya', 'xyz.file', '9001979342,7441212456,', '2020-10-12'),
(14, 'fdasf', 'xyz.file', '9001979342,8552121256,', '2020-10-12'),
(15, 'hgf', 'xyz.file', '9001979342,', '2020-10-12'),
(16, '										\r\n																', 'xyz.file', 'info.rafique687@gmail.com,khan.arbani@gmail.com', '2020-10-13'),
(17, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(18, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(19, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(20, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(21, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(22, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(23, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(24, '			hghf							\r\n																		\r\n																								', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(25, 'dsafjlkjfljlk', 'xyz.file', '9001979342,8552525654', '2020-10-13'),
(26, 'fdsajkfj							\r\n																', '', '9799184788,9001979342', '2020-10-13'),
(27, 'kkk', '', '9001979342', '2020-10-13'),
(28, 'gggg', '', '  9001979342', '2020-10-13'),
(29, 'fdsaf', '', '9799184788,9001979342', '2020-10-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_setting`
--
ALTER TABLE `admin_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bannerid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ctid`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contry`
--
ALTER TABLE `contry`
  ADD PRIMARY KEY (`contryid`);

--
-- Indexes for table `cutomar_details`
--
ALTER TABLE `cutomar_details`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`evencteidd`);

--
-- Indexes for table `inquety`
--
ALTER TABLE `inquety`
  ADD PRIMARY KEY (`inquryid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`sucribid`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`sts_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `products_order`
--
ALTER TABLE `products_order`
  ADD PRIMARY KEY (`prod_orderid`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `send_maildetails`
--
ALTER TABLE `send_maildetails`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `send_mailsubscriber`
--
ALTER TABLE `send_mailsubscriber`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `setting_table`
--
ALTER TABLE `setting_table`
  ADD PRIMARY KEY (`sessting_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateid`);

--
-- Indexes for table `sumary`
--
ALTER TABLE `sumary`
  ADD PRIMARY KEY (`sumry_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `textsmessage`
--
ALTER TABLE `textsmessage`
  ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`adr_id`);

--
-- Indexes for table `whatsmessage`
--
ALTER TABLE `whatsmessage`
  ADD PRIMARY KEY (`whatapp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_setting`
--
ALTER TABLE `admin_setting`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `bannerid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `ctid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contry`
--
ALTER TABLE `contry`
  MODIFY `contryid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cutomar_details`
--
ALTER TABLE `cutomar_details`
  MODIFY `cust_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `evencteidd` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inquety`
--
ALTER TABLE `inquety`
  MODIFY `inquryid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `sucribid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `sts_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `orderid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `products_order`
--
ALTER TABLE `products_order`
  MODIFY `prod_orderid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `reg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `send_maildetails`
--
ALTER TABLE `send_maildetails`
  MODIFY `mail_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `send_mailsubscriber`
--
ALTER TABLE `send_mailsubscriber`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting_table`
--
ALTER TABLE `setting_table`
  MODIFY `sessting_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stateid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sumary`
--
ALTER TABLE `sumary`
  MODIFY `sumry_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `textsmessage`
--
ALTER TABLE `textsmessage`
  MODIFY `sms_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `adr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `whatsmessage`
--
ALTER TABLE `whatsmessage`
  MODIFY `whatapp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
