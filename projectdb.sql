-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.20
-- PHP Version: 5.5.15

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
-- Структура на таблица `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` smallint(5) NOT NULL,
  `comment` varchar(2000) CHARACTER SET utf8 NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` smallint(5) NOT NULL,
  `picture_id` smallint(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
`id` smallint(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `massage` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Схема на данните от таблица `contacts`
--

INSERT INTO `contacts` (`id`, `username`, `email`, `massage`, `date`) VALUES
(1, 'adsadsads', '', '', '2015-05-29 08:05:13'),
(2, 'adjfdsdfj', '', 'sadsaadsasdss', '2015-05-29 08:05:20'),
(3, 'asdasdasdsadas', '', 'asdasdsaasdads', '2015-05-29 08:05:38'),
(4, '???????', '', '?????????????????????', '2015-05-29 08:06:14'),
(5, 'sadasasdads', 'sdasdadsa', 'asdsdadasads', '2015-05-29 08:06:32'),
(6, 'dasadsa', 'asdsdaasd', 'asddsaads', '2015-05-29 08:07:48'),
(7, 'dasdassa', 'asdd', 'asdsdaas', '2015-05-29 08:08:10'),
(8, 'zxssad', 'sadasasd', 'asdsaads', '2015-05-29 08:10:00'),
(9, 'zxssad', 'sadasasd', 'asdsaads', '2015-05-29 08:10:22'),
(10, 'asdas', 'example23@abv.bg', 'dassadsdaasd', '2015-05-29 08:24:28'),
(11, 'adsadads', 'example23@abv.bg', 'dasadssdasadadsasddas', '2015-05-29 08:24:49'),
(12, '?????', 'example21@abv.bg', 'Lorem Ipsum ? ??????????? ???????? ?????, ????????? ? ???????????? ? ????????????? ?????????. Lorem Ipsum ? ???????????? ???????? ?? ????? 1500 ??????, ?????? ?????????? ??????? ????? ??????? ?????????? ????? ? ?? ?????????, ?? ?? ???????? ? ??? ????? ? ???????? ????????. ???? ????? ?? ???? ? ?????? ?????? ?? 5 ????, ?? ? ???????? ? ? ????????????? ?? ?????????? ??????? ???? ? ??????? ????? ??? ???????. ????????????? ? ???? 60?? ?????? ?? 20?? ??? ??? ?????????? ?? Letraset ?????, ????????? Lore', '2015-05-29 08:38:18'),
(13, 'adssdaasd', 'example23@abv.bg', 'adssaasdasdasdasdads', '2015-05-29 08:39:26'),
(14, 'eads', 'example23@abv.bg', 'asdadssadads', '2015-05-29 08:40:27'),
(15, 'dasddas', 'example23@abv.bg', 'asdadsadsasd', '2015-05-29 08:42:52'),
(16, 'asdasd', 'example23@abv.bg', 'asdsasasdasdads', '2015-05-29 08:44:40'),
(17, 'adssdaasd', 'example21@abv.bg', 'asdsadsa', '2015-05-29 08:47:23'),
(18, 'dasddas', 'example21@abv.bg', 'asdsdaasd', '2015-05-29 08:48:10'),
(19, 'dasddas', 'example21@abv.bg', 'asdsdaasd', '2015-05-29 08:53:57'),
(20, 'easdas', 'example23@abv.bg', 'fdssfdsddfsdfds', '2015-05-29 08:54:57'),
(21, 'easdas', 'example23@abv.bg', 'fdssfdsddfsdfds', '2015-05-29 08:55:09'),
(22, 'easdas', 'example23@abv.bg', 'fdssfdsddfsdfds', '2015-05-29 08:55:41'),
(23, 'easdas', 'example23@abv.bg', 'fdssfdsddfsdfds', '2015-05-29 08:55:47'),
(24, 'asdasa', 'example22@abv.bg', 'afdsdsfdssdf', '2015-05-29 08:55:51'),
(25, 'asdasa', 'example22@abv.bg', 'afdsdsfdssdf', '2015-05-29 08:56:01'),
(26, 'asdasa', 'example22@abv.bg', 'afdsdsfdssdf', '2015-05-29 08:56:07'),
(27, 'asdasa', 'example22@abv.bg', 'afdsdsfdssdf', '2015-05-29 08:56:13'),
(28, 'asdasa', 'example22@abv.bg', 'afdsdsfdssdf', '2015-05-29 08:56:17'),
(29, 'asdasa', 'example22@abv.bg', 'afdsdsfdssdf', '2015-05-29 08:56:21'),
(30, 'asdasa', 'example22@abv.bg', 'afdsdsfdssdf', '2015-05-29 08:56:27'),
(31, 'asdasa', 'example22@abv.bg', 'afdsdsfdssdf', '2015-05-29 08:56:39'),
(32, 'asdasa', 'example22@abv.bg', 'afdsdsfdssdf', '2015-05-29 08:56:45'),
(33, 'asdasa', 'example22@abv.bg', 'afdsdsfdssdf', '2015-05-29 08:56:49');

-- --------------------------------------------------------

--
-- Структура на таблица `pics`
--

CREATE TABLE IF NOT EXISTS `pics` (
`id` smallint(5) NOT NULL,
  `pic_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pic_upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category_id` smallint(5) DEFAULT NULL,
  `user_id` smallint(5) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Схема на данните от таблица `pics`
--

INSERT INTO `pics` (`id`, `pic_name`, `pic_upload_date`, `category_id`, `user_id`) VALUES
(1, '6.jpg', '2015-06-04 09:28:26', 4, 2),
(2, '3.jpg', '2015-06-04 09:28:26', 4, 2),
(4, '4.jpg', '2015-06-04 09:28:26', 3, 2),
(5, '2.jpg', '2015-06-04 09:28:26', 3, 2),
(13, '1.png', '2015-06-04 09:28:26', 4, 2),
(14, '5.jpg', '2015-06-04 09:28:26', 2, 2),
(20, '7.jpg', '2015-06-04 09:28:26', 4, 2),
(21, 'Arch2o-Synthesis-Design-+-Architecture-SDA-51.jpg', '2015-06-04 09:27:53', 3, 2),
(23, 'hd-architecture-building-4.jpeg', '2015-06-04 09:27:47', 5, 2),
(25, 'Pearl-Architecture.jpg', '2015-06-04 09:27:40', 3, 2),
(26, 'Sydney_Opera_House_Sails_edit02_adj.JPG', '2015-06-04 09:27:31', 2, 2),
(28, 'xlarge_1_doh3_3cf42.jpg', '2015-06-04 09:27:25', 2, 2),
(30, 'Commercial-Building.jpg', '2015-06-04 09:27:19', 1, 2),
(49, 'Testing.jpg', '2015-06-04 09:27:12', 2, 2),
(57, 'under_construction.png', '2015-06-04 07:59:12', 1, 1),
(66, 'PC.jpg', '2015-06-04 08:59:53', 1, 17),
(67, 'funnny-2.jpg', '2015-06-04 09:34:10', 1, 17),
(68, 'adYmQA2_700b.jpg', '2015-06-04 09:35:38', 1, 15),
(69, 'ap0WGGD_700b_v1.jpg', '2015-06-04 09:36:08', 3, 15),
(71, 'a1eGm36_700b.jpg', '2015-06-04 09:37:17', 3, 16),
(72, 'aQ40eLe_700b_v2.jpg', '2015-06-04 09:38:51', 3, 18),
(73, 'avgY2xb_700b.jpg', '2015-06-04 09:39:23', 3, 18),
(74, 'agvPGnK_700b_v1.jpg', '2015-06-04 09:50:08', 3, 18),
(75, 'ae0LXrq_700b_v1.jpg', '2015-06-04 09:50:57', 3, 18);

-- --------------------------------------------------------

--
-- Структура на таблица `pic_category`
--

CREATE TABLE IF NOT EXISTS `pic_category` (
`id` smallint(5) NOT NULL,
  `category_name` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Схема на данните от таблица `pic_category`
--

INSERT INTO `pic_category` (`id`, `category_name`) VALUES
(1, 'Забавни'),
(2, 'Абстрактни'),
(3, 'Интересни'),
(4, 'Пейзажи'),
(5, 'Други');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` smallint(5) unsigned NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `role` int(1) NOT NULL DEFAULT '2',
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `datereg`) VALUES
(1, 'admin', 'admin', 1, 'admin@email.com', '2015-06-05 07:25:08'),
(2, 'user', 'password', 2, 'example21@abv.bg', '2015-06-05 07:25:08'),
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
(38, 'user14', 'password', 2, 'example21@abv.bg', '2015-06-05 07:35:08');

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
MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `pics`
--
ALTER TABLE `pics`
MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `pic_category`
--
ALTER TABLE `pic_category`
MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`picture_id`) REFERENCES `pics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения за таблица `pics`
--
ALTER TABLE `pics`
ADD CONSTRAINT `pics_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `pic_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pics_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
