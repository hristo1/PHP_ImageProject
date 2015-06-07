-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2015 at 10:19 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` smallint(5) NOT NULL,
  `comment` varchar(2000) CHARACTER SET utf8 NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` smallint(5) NOT NULL,
  `picture_id` smallint(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `comment_date`, `user_id`, `picture_id`) VALUES
(1, 'addsdads', '2015-06-06 17:21:38', 1, 75),
(2, 'dasds\r\n', '2015-06-06 17:23:00', 1, 75),
(3, 'ad', '2015-06-06 17:23:03', 1, 75),
(4, 'asddas', '2015-06-06 17:23:07', 1, 75),
(5, 'adsasd', '2015-06-06 17:23:10', 1, 75),
(6, 'adsas', '2015-06-06 17:23:13', 1, 75),
(7, 'asdsaads', '2015-06-06 17:23:16', 1, 75),
(8, 'adadsdas', '2015-06-06 17:23:20', 1, 75),
(9, 'asddada', '2015-06-06 17:23:23', 1, 75),
(10, 'asdsaads', '2015-06-06 17:23:27', 1, 75),
(14, 'test', '2015-06-07 19:29:25', 1, 87),
(15, 'dfsdfdfdsfsd', '2015-06-07 19:29:41', 39, 87),
(16, 'asddsadas', '2015-06-07 20:06:39', 1, 90),
(17, 'asdadsads', '2015-06-07 20:06:41', 1, 90),
(18, 'asdasdad', '2015-06-07 20:06:42', 1, 90),
(19, 'adssdsadas', '2015-06-07 20:06:44', 1, 90),
(20, 'dadsaasdasd', '2015-06-07 20:06:46', 1, 90),
(21, 'dasdsasdadas', '2015-06-07 20:06:48', 1, 90),
(22, 'sdsadasdasd', '2015-06-07 20:06:49', 1, 90),
(23, 'adsasgffdgdf', '2015-06-07 20:06:52', 1, 90),
(24, 'asdadsadsasd', '2015-06-07 20:06:54', 1, 90);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
`id` smallint(5) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `massage` varchar(500) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `username`, `email`, `massage`, `date`) VALUES
(38, 'someUser', 'example21@abv.bg', 'Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия. Lorem Ipsum е индустриален стандарт от около 1500 година, когато неизвестен печатар взема няколко печатарски букви и ги разбърква, за да напечата с тях книга с примерни шрифтове. Този начин не само е оцелял повече от 5 века, но е навлязъл и в публикуването на електронни издания като е запазен почти без промяна. Популяризиран е през 60те години на 20ти век със издаването на Letraset листи, съдържащи Lore', '2015-06-07 19:42:24'),
(39, 'User342', 'example21@abv.bg', 'asdasdasdsaadsadsads', '2015-06-07 19:52:24'),
(40, 'annoying_orange', 'annoying_orange@mail.com', 'annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange annoying orange anno', '2015-06-07 20:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `pics`
--

CREATE TABLE IF NOT EXISTS `pics` (
`id` smallint(5) NOT NULL,
  `pic_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pic_upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category_id` smallint(5) DEFAULT NULL,
  `user_id` smallint(5) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pics`
--

INSERT INTO `pics` (`id`, `pic_name`, `pic_upload_date`, `category_id`, `user_id`) VALUES
(66, 'PC.jpg', '2015-06-04 08:59:53', 1, 17),
(67, 'funnny-2.jpg', '2015-06-04 09:34:10', 1, 17),
(68, 'adYmQA2_700b.jpg', '2015-06-04 09:35:38', 1, 15),
(69, 'ap0WGGD_700b_v1.jpg', '2015-06-04 09:36:08', 3, 15),
(71, 'a1eGm36_700b.jpg', '2015-06-04 09:37:17', 3, 16),
(72, 'aQ40eLe_700b_v2.jpg', '2015-06-04 09:38:51', 3, 18),
(73, 'avgY2xb_700b.jpg', '2015-06-04 09:39:23', 3, 18),
(74, 'agvPGnK_700b_v1.jpg', '2015-06-04 09:50:08', 3, 18),
(75, 'ae0LXrq_700b_v1.jpg', '2015-06-04 09:50:57', 3, 18),
(76, '1.png', '2015-06-07 19:14:26', 2, 1),
(77, '2.jpg', '2015-06-07 19:14:35', 2, 1),
(78, '6.jpg', '2015-06-07 19:14:43', 2, 1),
(80, 'Pearl-Architecture.jpg', '2015-06-07 19:15:27', 4, 1),
(81, 'test.jpg', '2015-06-07 19:15:51', 5, 1),
(82, '4.jpg', '2015-06-07 19:16:17', 5, 1),
(84, 'Arch2o-Synthesis-Design-+-Architecture-SDA-51.jpg', '2015-06-07 19:20:05', 4, 1),
(87, 'under_construction.png', '2015-06-07 19:21:44', 5, 1),
(90, 'FunnyPart-com-mr_bean_in_avatar.jpg', '2015-06-07 19:31:24', 1, 39);

-- --------------------------------------------------------

--
-- Table structure for table `pic_category`
--

CREATE TABLE IF NOT EXISTS `pic_category` (
`id` smallint(5) NOT NULL,
  `category_name` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pic_category`
--

INSERT INTO `pic_category` (`id`, `category_name`) VALUES
(1, 'Забавни'),
(2, 'Абстрактни'),
(3, 'Интересни'),
(4, 'Пейзажи'),
(5, 'Други');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` smallint(5) unsigned NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `role` int(1) NOT NULL DEFAULT '2',
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `datereg`) VALUES
(1, 'admin', 'admin', 1, 'admin@email.com', '2015-06-05 07:25:08'),
(15, 'user13', 'password', 2, 'example21@abv.bg', '2015-06-05 07:25:08'),
(16, 'user4', 'password', 2, 'example23@abv.bg', '2015-06-05 07:25:08'),
(17, 'example', 'password', 2, 'example21@abv.bg', '2015-06-05 07:25:08'),
(18, 'user333', 'password', 2, 'example23@abv.bg', '2015-06-05 07:25:08'),
(19, 'user6', 'password', 2, 'example23@abv.bg', '2015-06-05 07:25:08'),
(21, 'testuser', 'password', 2, 'example22@abv.bg', '2015-06-05 07:25:08'),
(23, 'user666', 'password', 2, 'example23@abv.bg', '2015-06-05 07:25:08'),
(34, 'user15', 'passwor', 2, 'example21@abv.bg', '2015-06-05 07:25:08'),
(35, 'us16', 'password', 2, 'example21@abv.bg', '2015-06-05 07:25:08'),
(36, 'example22', 'password', 2, 'example21@abv.bg', '2015-06-05 07:25:08'),
(37, 'example223', 'password', 2, 'example21@abv.bg', '2015-06-05 07:25:08'),
(38, 'user14', 'password', 2, 'example21@abv.bg', '2015-06-05 07:35:08'),
(39, 'user', 'password', 2, 'example21@abv.bg', '2015-06-07 19:22:32'),
(40, 'user1234', 'password', 2, 'example23@abv.bg', '2015-06-07 19:55:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`), ADD KEY `picture_id` (`picture_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pics`
--
ALTER TABLE `pics`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `pic_name` (`pic_name`), ADD KEY `category_id` (`category_id`), ADD KEY `user_id` (`user_id`), ADD KEY `id` (`id`);

--
-- Indexes for table `pic_category`
--
ALTER TABLE `pic_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `pics`
--
ALTER TABLE `pics`
MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `pic_category`
--
ALTER TABLE `pic_category`
MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`picture_id`) REFERENCES `pics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pics`
--
ALTER TABLE `pics`
ADD CONSTRAINT `pics_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `pic_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pics_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
