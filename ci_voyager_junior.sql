-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 04:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_voyager_junior`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(126, 1537646878, '::1', 'AePcf'),
(127, 1537646974, '::1', 'Ydu9B'),
(128, 1537646989, '::1', 'Hf6g2'),
(129, 1537647091, '::1', 'cBXDx'),
(130, 1537647185, '::1', 'mYvZD'),
(131, 1537647200, '::1', 'CB7PP'),
(132, 1537647227, '::1', 'RDYzq'),
(133, 1537647379, '::1', 'k3aMW'),
(134, 1537647414, '::1', '5hrZn'),
(135, 1537647531, '::1', 'BGPWV'),
(136, 1537647636, '::1', 'B2DNE'),
(137, 1537647687, '::1', 'zqvmr'),
(138, 1537647704, '::1', 'c3YTf'),
(139, 1537648822, '::1', '45YpQ'),
(140, 1537648858, '::1', 'hMBZp'),
(141, 1537648878, '::1', 'JXt4Q'),
(142, 1537648885, '::1', 'f2n4h'),
(143, 1537648911, '::1', 'Q7a9C'),
(144, 1537648927, '::1', 'mqda9'),
(145, 1537648955, '::1', 'Lu2tz'),
(146, 1537649338, '::1', '9Psp4'),
(147, 1537649792, '::1', 'HnG42'),
(148, 1537649901, '::1', 'Lqynf'),
(149, 1537649932, '::1', 'w5swK'),
(150, 1537649948, '::1', 'Gd658'),
(151, 1537650294, '::1', 'DTDqx'),
(152, 1537650335, '::1', 'SpPYL'),
(153, 1537650394, '::1', '9h8Sa'),
(154, 1537650463, '::1', 'kdUSs'),
(155, 1537650577, '::1', 'sGRCS'),
(156, 1537650590, '::1', '56US7'),
(157, 1537650620, '::1', 'h4Xub'),
(158, 1537650628, '::1', 'pyr3q'),
(159, 1537650659, '::1', 'HG2VV'),
(160, 1537650729, '::1', '3FQud'),
(161, 1537650740, '::1', 'XXYku'),
(162, 1537650746, '::1', 'swEhW'),
(163, 1537650759, '::1', 'Twmgu'),
(164, 1537650780, '::1', 'd34ER'),
(165, 1537650788, '::1', '9SbHH'),
(166, 1537650802, '::1', 'n9QSn'),
(167, 1537650808, '::1', 'V3nmm'),
(168, 1537650867, '::1', 'bkRLC'),
(169, 1537650901, '::1', 'zJCBc'),
(170, 1537650931, '::1', 'bxdcx'),
(171, 1537650935, '::1', 'BwSUF'),
(172, 1537650937, '::1', 'ASKGr'),
(173, 1537650947, '::1', '3M9Pq'),
(174, 1537650990, '::1', 'EajzK'),
(175, 1537650996, '::1', '6teC7'),
(176, 1537651121, '::1', 'yCXCN'),
(177, 1537651127, '::1', '2vJyA'),
(178, 1537651207, '::1', 'H3QPg'),
(179, 1537651218, '::1', 'TQy9T'),
(180, 1537651533, '::1', 'aYrGg'),
(181, 1537651600, '::1', 'zdcuW'),
(182, 1537651616, '::1', 'uMPXa'),
(183, 1537651629, '::1', 'XLTb7'),
(184, 1537651716, '::1', 'Q7uNg'),
(185, 1537651753, '::1', 'Qq5nZ'),
(186, 1537651770, '::1', 'M3Ppz'),
(187, 1537651788, '::1', 'enDek'),
(188, 1537651797, '::1', 'MTftc'),
(189, 1537651828, '::1', 'HwCuW'),
(190, 1537651852, '::1', 'WHGkw'),
(191, 1537651931, '::1', 'jX72k'),
(192, 1537651946, '::1', 'M4egj'),
(193, 1537651979, '::1', 'rGf8F'),
(194, 1537651985, '::1', 'HKy3u'),
(195, 1537652044, '::1', 'csJH8'),
(196, 1537652071, '::1', 'LVvQh'),
(197, 1537652076, '::1', 'D47mn'),
(198, 1537652103, '::1', 'a22c4'),
(199, 1537652117, '::1', 'UPNsq'),
(200, 1537652130, '::1', 'TY2Lf'),
(201, 1537652642, '::1', 'CUqA6'),
(202, 1537652984, '::1', 'vf3F2'),
(203, 1537653047, '::1', 'xwwLm'),
(204, 1537653246, '::1', '9LJvs'),
(205, 1537653270, '::1', '3fa8A'),
(206, 1537653283, '::1', 'zAQPF'),
(207, 1537653367, '::1', '8Rcte'),
(208, 1537653410, '::1', '8KTeg'),
(209, 1537653422, '::1', 'pjZ2W'),
(210, 1537653433, '::1', 'MqsdZ'),
(211, 1537653477, '::1', 'y3ZKV'),
(212, 1537653926, '::1', 'Dja4k'),
(213, 1537653949, '::1', 'jTbrK'),
(214, 1537653960, '::1', 'LYLyX'),
(215, 1537653988, '::1', 'SpvBk'),
(216, 1537654015, '::1', 'yRLzE'),
(217, 1537654033, '::1', 'yBSn3'),
(218, 1537654179, '::1', 'p28Yp'),
(219, 1537654207, '::1', 'LfDpm'),
(220, 1537654226, '::1', 'wuAVD'),
(221, 1537654284, '::1', 'XLD72'),
(222, 1537654296, '::1', 'gxWCX'),
(223, 1537654314, '::1', 'AqYEk'),
(224, 1537654956, '::1', 'sGGp6'),
(225, 1537654971, '::1', 'dsBZd'),
(226, 1537655388, '::1', 'rjmVW');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  `tbl_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`, `tbl_id`) VALUES
('ir8q2bvsaidq6a9mfrnu14ns7n3hlt9m', '::1', 1549638924, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534393633383839363b6c616e6775616765737c613a313a7b733a373a22656e676c697368223b733a373a22456e676c697368223b7d6c616e67756167657c733a373a22656e676c697368223b6c6f676765645f696e7c613a31303a7b733a323a226964223b733a313a2231223b733a383a22757365726e616d65223b733a353a2261646d696e223b733a31303a2266697273745f6e616d65223b733a343a2253697465223b733a393a226c6173745f6e616d65223b733a31333a2241646d696e6973747261746f72223b733a353a22656d61696c223b733a31353a2261646d696e4061646d696e2e636f6d223b733a383a226c616e6775616765223b733a373a22656e676c697368223b733a383a2269735f61646d696e223b733a313a2231223b733a363a22737461747573223b733a313a2231223b733a373a2263726561746564223b733a31393a22323031332d30312d30312030303a30303a3030223b733a373a2275706461746564223b733a31393a22323031382d30392d32322032323a32383a3134223b7d72656665727265727c733a37393a22687474703a2f2f6c6f63616c686f73742f766f79616765725f6a756e696f722f61646d696e2f67616c6c6572793f736f72743d6964266469723d617363266c696d69743d3230266f66667365743d30223b, 29),
('9525n4ockcj0se0ksf2btv2cf4d1jdf5', '::1', 1550159576, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535303135393537363b6c616e6775616765737c613a313a7b733a373a22656e676c697368223b733a373a22456e676c697368223b7d6c616e67756167657c733a373a22656e676c697368223b6c6f676765645f696e7c613a31303a7b733a323a226964223b733a313a2231223b733a383a22757365726e616d65223b733a353a2261646d696e223b733a31303a2266697273745f6e616d65223b733a343a2253697465223b733a393a226c6173745f6e616d65223b733a31333a2241646d696e6973747261746f72223b733a353a22656d61696c223b733a31353a2261646d696e4061646d696e2e636f6d223b733a383a226c616e6775616765223b733a373a22656e676c697368223b733a383a2269735f61646d696e223b733a313a2231223b733a363a22737461747573223b733a313a2231223b733a373a2263726561746564223b733a31393a22323031332d30312d30312030303a30303a3030223b733a373a2275706461746564223b733a31393a22323031382d30392d32322032323a32383a3134223b7d72656665727265727c733a37383a22687474703a2f2f6c6f63616c686f73742f766f79616765725f6a756e696f722f61646d696e2f696d616765733f736f72743d6964266469723d617363266c696d69743d3230266f66667365743d30223b, 41);

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(256) NOT NULL,
  `title` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL,
  `read` datetime DEFAULT NULL,
  `read_by` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `name`, `email`, `title`, `message`, `created`, `read`, `read_by`) VALUES
(4, 'Quon Barber', 'xotegagy@mailinator.com', 'Enim quos reprehenderit inventore et id', 'Dolorum autem eos est quidem dolor', '2018-09-20 15:31:57', NULL, NULL),
(5, 'Noah West', 'pema@mailinator.com', 'Reiciendis veritatis tenetur voluptas reprehenderit suscipit', 'Id dolores laboriosam necessitatibus in est et et enim doloribus tempor cumque sunt qui exercitation', '2018-09-20 15:33:20', NULL, NULL),
(6, 'Claudia Francis', 'zipolehe@mailinator.net', 'Beatae ad quis nostrud tempora voluptatem', 'Optio vitae cupiditate do aperiam aliqua Nesciunt', '2018-09-20 15:38:58', NULL, NULL),
(7, 'Wynne Garrett', 'cakesoxi@mailinator.com', 'Atque in velit in beatae aliquip est error totam esse minim ut sit quia reprehenderit consequatur', 'Veniam nemo velit velit saepe nobis quo esse aut velit quibusdam eum quam ut et', '2018-09-20 15:40:07', NULL, NULL),
(8, 'Jael Walter', 'bulu@mailinator.com', 'Illo est modi sed qua', 'Dolore exercitationem quia atque sed obcaecati enim', '2018-09-22 23:35:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `deleted` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `slug`, `description`, `created`, `updated`, `status`, `deleted`) VALUES
(1, 'Mara Shepard678', 'Irure-test', 'Perferendis providen', '2019-01-22 21:35:44', '2019-01-23 10:03:17', 1, 1),
(2, 'Oliver Santiago', 'Totam-y12sss', 'Illo provident q', '2019-01-22 22:00:45', '2019-01-23 16:01:41', 1, 0),
(3, 'Carlos Morgan', 'Sit sint ipsum ali', 'Commodo ut explicabo', '2019-01-22 22:04:27', '2019-01-22 22:04:27', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `deleted` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `path`, `notes`, `created`, `updated`, `status`, `deleted`) VALUES
(1, '1549619954_08.jpg', 'C:/xampp/htdocs/voyager_junior/uploads/Feb_2019/', 'Test', '2019-02-07 21:59:15', '2019-02-07 21:59:15', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `ip` varchar(20) NOT NULL,
  `attempt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`ip`, `attempt`) VALUES
('::1', '2019-02-14 18:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` text,
  `menu_position` int(11) DEFAULT NULL,
  `menu_style` text,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_position`, `menu_style`, `status`) VALUES
(1, 'Admin', 1, NULL, 1),
(2, 'Category', 2, NULL, 1),
(17, 'Footer Menu', 3, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_content`
--

CREATE TABLE `menu_content` (
  `menu_content_id` int(11) NOT NULL,
  `content_type` text,
  `content_id` int(11) DEFAULT NULL,
  `menu_position` int(11) DEFAULT NULL,
  `menu_lavel` varchar(222) DEFAULT NULL,
  `link_url` varchar(250) DEFAULT NULL,
  `slug` text,
  `parents_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_content`
--

INSERT INTO `menu_content` (`menu_content_id`, `content_type`, `content_id`, `menu_position`, `menu_lavel`, `link_url`, `slug`, `parents_id`, `menu_id`, `status`) VALUES
(1, 'categories', 1, 5, 'আন্তর্জাতিক', '', 'International', 0, 1, 1),
(4, 'categories', 4, 14, ' প্রযুক্তি', '', 'Technology', 0, 1, 1),
(9, 'categories', 17, 9, 'খেলা', '', 'Sports', 0, 1, 1),
(11, 'categories', 1, 3, 'আন্তর্জাতিক', '', 'International', 0, 2, 1),
(16, 'categories', 6, 4, 'সম্পাদক নির্বাচিত', '', 'Editor-Choice', 0, 2, 1),
(23, 'links', 1, 4, 'SITEMAP', 'http://demonewspaper.bdtask.com/DemoNewsPaper-v1.5/sitemap.xml', NULL, 0, 17, 1),
(32, 'pages', 1, 1, 'ABOUT US', NULL, 'About-us', NULL, 17, 1),
(33, 'pages', 2, 2, 'PRIVACY POLICY', NULL, 'PRIVACY-POLICY', NULL, 17, 1),
(34, 'pages', 3, 3, 'TERMS OF USE', NULL, 'TERMS-OF', NULL, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `deleted` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created`, `updated`, `deleted`) VALUES
(1, 0, 'Hello World', 'Hang the', 'Yar Meta Description', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', '1', '2018-10-04 03:55:24', '2019-01-23 10:01:42', 1),
(2, 0, 'Beatae sit nisi reic123', 'Ut ut necessitatibus', 'Pariatur Inventore', NULL, 'Ullam reprehenderit', 'Pariatur Inventore', 'Est qui reiciendis', '1', '2019-01-21 22:48:09', '2019-01-23 07:16:56', 1),
(3, 0, 'Quos ut dolor ad al', 'At est exercitationab', 'Similique ab possimu', NULL, 'test21', 'Similique ab possimu', 'Autem doloribus enim', '1', '2019-01-21 22:49:07', '2019-01-21 22:49:07', 0),
(4, 0, 'My Page', 'Excepteur', '                  <div style=\"text-align: center;\"><span style=\"font-size: 0.9375rem;\">#php echo \'php echo test\' php#</span></div><div class=\"container-fluid text-center bg-grey\">\r\n  <h2>Portfolio223</h2><br>\r\n  <h4>What we have created</h4>\r\n  <div class=\"row text-center\">\r\n    <div class=\"col-sm-4\">\r\n      <div class=\"thumbnail\">\r\n        \r\n        <p><img src=\"https://cdn.pixabay.com/photo/2018/11/29/21/19/hamburg-3846525_960_720.jpg\" style=\"width: 100%;\"><strong><br></strong></p><p><strong>Paris</strong></p>\r\n        <p>Yes, we built Paris</p>\r\n      </div>\r\n    </div>\r\n    <div class=\"col-sm-4\">\r\n      <div class=\"thumbnail\">\r\n        \r\n        <p><img style=\"width: 100%;\" src=\"https://image.shutterstock.com/image-photo/unesco-world-cultural-heritage-speicherstadt-450w-1242947317.jpg\"><strong><br></strong></p><p><strong>New York</strong></p>\r\n        <p>We built New York</p>\r\n      </div>\r\n    </div>\r\n    <div class=\"col-sm-4\">\r\n      <div class=\"thumbnail\">\r\n        \r\n        <p><img style=\"width:100%;\" src=\"https://cdn.pixabay.com/photo/2013/05/28/20/30/city-114290_960_720.jpg\"><strong><br></strong></p><p><strong>San Francisco</strong></p>\r\n        <p>Yes, San Fran is ours</p>\r\n      </div>\r\n    </div>\r\n  </div>\r\n</div>                                                                                                                                                                                                                                                            ', NULL, 'my-page', 'Eos12', 'Cupidatat', '1', '2019-01-21 22:50:39', '2019-01-21 22:50:39', 0),
(5, 0, 'nTest', 'nTest', '<p>                                nTestnTestnTestnTest</p>', NULL, 'nTest', 'nTest', 'nTest', '1', '2019-02-07 03:57:57', '2019-02-07 03:57:57', 0),
(6, 0, 'test', 'test', 'TESTTESTTESTTESTTESTTEST', NULL, 'terst', 'test', 'test', '1', '2019-02-07 21:40:38', '2019-02-07 21:40:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `background_img` varchar(255) NOT NULL,
  `path` varchar(500) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` varchar(255) DEFAULT NULL,
  `deleted` tinyint(2) NOT NULL DEFAULT '0',
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `sub_heading`, `heading`, `background_img`, `path`, `created`, `updated`, `deleted`, `status`) VALUES
(1, 'test', 'test', 'download.jpg', 'uploads/Feb_2019/download.jpg', '2019-02-07 22:10:54', '2019-02-08 04:10:54', 0, 1),
(2, 'Seo', 'Search Engines', '1550156621_14.jpg', 'uploads/Feb_2019/1550156621_14.jpg', '2019-02-14 03:03:41', '2019-02-14 09:03:41', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `input_type` enum('input','textarea','radio','dropdown','timezones','file') CHARACTER SET latin1 NOT NULL,
  `options` text COMMENT 'Use for radio and dropdown: key|value on each line',
  `is_numeric` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'forces numeric keypad on mobile devices',
  `show_editor` enum('0','1') NOT NULL DEFAULT '0',
  `input_size` enum('large','medium','small') DEFAULT NULL,
  `translate` enum('0','1') NOT NULL DEFAULT '0',
  `help_text` varchar(256) DEFAULT NULL,
  `validation` varchar(128) NOT NULL,
  `sort_order` tinyint(3) UNSIGNED NOT NULL,
  `label` varchar(128) NOT NULL,
  `value` text COMMENT 'If translate is 1, just start with your default language',
  `last_update` datetime DEFAULT NULL,
  `updated_by` int(11) UNSIGNED DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'general',
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `input_type`, `options`, `is_numeric`, `show_editor`, `input_size`, `translate`, `help_text`, `validation`, `sort_order`, `label`, `value`, `last_update`, `updated_by`, `type`, `deleted`) VALUES
(1, 'site_name', 'input', NULL, '0', '0', 'large', '0', NULL, 'required|trim|min_length[3]|max_length[128]', 10, 'Site Name', 'Electra', '2019-02-14 21:44:18', 1, 'general', 0),
(3, 'meta_keywords', 'input', NULL, '0', '0', 'large', '0', 'Comma-seperated list of site keywords', 'trim', 20, 'Meta Keywords', 'these, are, keywords', '2019-02-14 21:44:18', 1, 'general', 0),
(4, 'meta_description', 'textarea', NULL, '0', '0', 'large', '0', 'Short description describing your site.', 'trim', 30, 'Meta Description', 'This is the site description.', '2019-02-14 21:44:18', 1, 'general', 0),
(5, 'site_email', 'input', NULL, '0', '0', 'medium', '0', 'Email address all emails will be sent from.', 'required|trim|valid_email', 40, 'Site Email', 'email@yourdomain.com', '2019-02-14 21:44:18', 1, 'contact', 0),
(7, 'welcome_message', 'textarea', NULL, '0', '1', 'large', '1', 'Message to display on home page.', 'trim', 70, 'Welcome message', '<h1 style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 4px; border: none; outline: 0px; vertical-align: baseline;\"><font face=\"Ek Mukta, sans-serif\"><b>Have a project in mind?</b></font></h1><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 4px; border: none; outline: 0px; vertical-align: baseline;\"><font face=\"Ek Mukta, sans-serif\">You can reach us by email!<br></font><font face=\"Ek Mukta, sans-serif\">Based in London. We push boundaries trough thinking not just about your brand, your website, or your digital marketing but how all of the digital elements of your business work togheter.</font></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 4px; border: none; outline: 0px; vertical-align: baseline;\"><font face=\"Ek Mukta, sans-serif\"><b><br></b></font><font face=\"Ek Mukta, sans-serif\"><b>Through our best-in-class techniques and bespoke growth plans we assess digital problems and put in place strategies that lead to commercial success.</b></font></p>', '2019-02-14 21:44:18', 1, 'general', 0),
(8, 'contact', 'input', NULL, '0', '0', NULL, '0', 'Your Contact Info', '', 30, 'Contact Info', '', '2019-02-14 21:44:18', 1, 'contact', 0),
(9, 'owner_name', 'input', NULL, '0', '0', NULL, '0', NULL, '', 1, 'Owner Name', 'Masud Rana', '2019-02-14 21:44:18', 1, 'general', 0),
(10, 'owner_mobile', 'input', NULL, '0', '0', NULL, '0', 'Owner Contact Number', '', 2, 'Contact Number', '+880714587993', '2019-02-14 21:44:18', 1, 'contact', 0),
(11, 'facebook', 'input', NULL, '0', '0', NULL, '0', 'Fb Link', '', 0, 'Facebook', 'https://www.facebook.com/', '2019-02-14 21:44:18', 1, 'social', 0),
(12, 'twitter', 'input', NULL, '0', '0', NULL, '0', 'Twitter Link', '', 0, 'Twitter ', '#', '2019-02-14 21:44:18', 1, 'social', 0),
(13, 'instagram', 'input', NULL, '0', '0', NULL, '0', 'Instagram Link', '', 0, 'Instagram', '#', '2019-02-14 21:44:18', 1, 'social', 0),
(14, 'address', 'textarea', NULL, '0', '0', NULL, '0', NULL, '', 0, 'Address', 'Zindabazar, Sylhet', '2019-02-14 21:44:18', 1, 'contact', 0),
(15, 'per_page_limit', 'input', NULL, '0', '0', NULL, '0', 'per_page_limit', '', 50, 'per_page_limit', '20', '2019-02-14 21:44:18', 1, 'general', 0),
(19, 'template', 'dropdown', 'default|Default\r\ndefault_2018|2018', '0', '0', NULL, '0', 'Website Theme', '', 0, 'Theme', 'default_2018', '2019-02-14 21:44:18', 1, 'general', 0),
(20, 'logo1', 'file', '', '0', '0', NULL, '0', NULL, '', 0, 'Logo', 'uploads/logo/Feb_2019/logo1.png', '2019-02-14 18:39:29', 1, 'general', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `background_img` varchar(255) NOT NULL,
  `path` varchar(500) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` varchar(255) DEFAULT NULL,
  `deleted` tinyint(2) NOT NULL DEFAULT '0',
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `sub_heading`, `heading`, `background_img`, `path`, `created`, `updated`, `deleted`, `status`) VALUES
(1, 'test', 'test', 'thumb-1920-911816.png', 'uploads/sliders/Feb_2019/thumb-1920-911816.png', '2019-02-07 22:10:54', '2019-02-08 04:10:54', 0, 1),
(2, 'test123', 'test123', 'beach-1236581_960_720.jpg', 'uploads/sliders/Feb_2019/beach-1236581_960_720.jpg', '2019-02-14 00:46:29', '2019-02-14 06:46:29', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(256) NOT NULL,
  `language` varchar(64) DEFAULT NULL,
  `is_admin` enum('0','1') NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `deleted` enum('0','1') NOT NULL DEFAULT '0',
  `validation_code` varchar(50) DEFAULT NULL COMMENT 'Temporary code for opt-in registration',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `profile_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `first_name`, `last_name`, `email`, `language`, `is_admin`, `status`, `deleted`, `validation_code`, `created`, `updated`, `profile_img`) VALUES
(1, 'admin', 'ce516f215aa468c376736c9013e8b663f7b3c06226a87739bc6b32882f9278349a721ea725a156eecf9e3c1868904a77e4d42c783e0287a0909a8bbb97e1525f', '66cb0ab1d9efe250b46e28ecb45eb33b3609f1efda37547409a113a2b84c3f94b6a0e738acc391e2dfa718676aa55adead05fcb12d2e32aee379e190511a3252', 'Site', 'Administrator', 'admin@admin.com', 'english', '1', '1', '0', NULL, '2013-01-01 00:00:00', '2018-09-22 22:28:14', 'admin1537648094.jpeg'),
(2, 'johndoe', '4e8ece39c9905fe6989022a7747d2c67d90582cdf483d762905f026b3f2328dbc019acf59f77a57472228933c33429de859210a3c6b2976234501462994cf73c', 'a876126be616f492fa9ff8fb554eadffb8e43ed9faef8e1070c2508d76c57b1613899ceb97972f7959c4c05617ce36e25ba63787a8bd3f183680863c687a7c12', 'John', 'Doe', 'john@doe.com', 'english', '0', '0', '1', NULL, '2013-01-01 00:00:00', '2019-01-23 13:11:25', NULL),
(3, 'rahynoxori', 'ab8ce45c74c2efc513baac7f02cc3836a87acaaf26a43b28e8a656f03443fda92db4e2dfaa488120bb9d0065a1a9e3577a1c6633cb220fee58bcbea3445ff256', 'cda829ac751e44c9d89a5a5a4da8b7f626f8284351fb82ae5c830927251998d81548bdcb3e987bc2d40ec324e156dbc188ac06d3a1b32a88cbecc4878b29736b', 'Medge', 'Buckner', 'fogopiqymu@mailinator.com', 'english', '0', '0', '1', NULL, '2019-01-15 15:11:20', '2019-01-15 15:11:29', NULL),
(4, 'maxytor', '1bfe67addb9252e773d744961cc473a4bd2572821fc563ab6d3b2141c06f595896908893d5b4dc3befd02f6c6dfced142fd8b6858a452c36bbca142cadc104f3', '48860ba2d002c7566bec138f40ee3b6ce4b1b9645ecc7238cfa3832c4e5063dc4e921898073bc6d52a02c0c20fdeab33e18d9916c5d286ea45ad811eb765d04e', 'Adrienne', 'Carpenter', 'viki@mailinator.com', 'english', '0', '1', '0', NULL, '2019-01-21 15:54:26', '2019-01-21 15:54:26', NULL),
(7, 'test123', '968b805bacd0b61b25b81d439024cd514c1836fb840833f0c760667bf91d154ddbe8b2ca354a39649447b491362973c3d05344e04eb5f02eaaf6b30f38f15818', '113237fa06126343e16d21363d84dd7e33fb976cc78aa40dd3ee8ee20425ab0cede9c61ca65eb7d23f326ff46f3edf7bed09b681f705e972274f1c388f08f871', 'Emery', 'Byers', 'test@test.com', 'english', '0', '1', '0', '06d56e38832ea9fb5d1956ab62e9ea08e5d2aebf', '2019-01-22 10:52:35', '2019-01-22 11:30:48', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`tbl_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `title` (`title`),
  ADD KEY `created` (`created`),
  ADD KEY `read` (`read`),
  ADD KEY `read_by` (`read_by`),
  ADD KEY `email` (`email`(78));

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menu_content`
--
ALTER TABLE `menu_content`
  ADD PRIMARY KEY (`menu_content_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  MODIFY `tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menu_content`
--
ALTER TABLE `menu_content`
  MODIFY `menu_content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
