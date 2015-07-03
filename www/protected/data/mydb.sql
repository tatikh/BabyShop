-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 03 2015 г., 12:53
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `parrent_id` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parrent_id` (`parrent_id`),
  KEY `parrent_id_2` (`parrent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `parrent_id`, `is_delete`) VALUES
(1, 'категории', NULL, 0),
(13, 'одежда', 1, 0),
(14, 'зимняя', 13, 0),
(15, 'игрушки', 1, 0),
(16, 'музыкальные', 15, 0),
(17, 'конструкторы', 15, 0),
(18, 'летняя', 13, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_delete` int(2) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `is_delete`, `product_id`, `comment`) VALUES
(3, 1, 1, 'asdrtyuiop'),
(4, 1, 2, 'asdrtfhyjuki'),
(6, 0, 1, 'фигня...'),
(7, 0, 1, 'авпрпр'),
(8, 0, 5, 'ааавпапа1111'),
(9, 0, 2, 'ывапр'),
(10, 0, 5, 'frfgdgt'),
(11, 1, 2, 'fgfgf'),
(12, 0, 10, 'ewrtyu');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `description`, `price`, `quantity`, `image`) VALUES
(1, 'book', 'sdfghjkl', '12.45', 10, '055914507333e3.jpg'),
(2, 'table', 'sdfrtghyjksdfgj', '123.00', 45, '0558c2d9533d1e.jpg'),
(5, 'pen', 'good', '78.00', 345, '0558abb30432ac.jpg'),
(10, 'pen_1', 'hujikl', '1.00', 1, '0559144ed7aebd.jpg'),
(11, 'pen_2', 'err', '2.00', 22, '0558c2d5fec868.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `login`, `email`, `password`, `role`) VALUES
(1, 'nik', 'nik@mail.com', 'nik123', 'user'),
(2, 'tati', 'tati@mail.com', 'tati123', 'admin'),
(3, 'mmm', 'mmm@mail.com', 'mmm123', 'user'),
(5, 'admin', 'admin@test.com', 'admin', 'admin'),
(8, 'rrr', 'rrr@test.com', 'rrr', 'user'),
(11, 'www', 'www@test.com', 'www1', 'user'),
(14, 'yyy', 'yyy@test.com', 'yyy1', 'user'),
(15, 'ttt', 'tt@ttt.com', 'ttt', 'admin');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD CONSTRAINT `tbl_category_ibfk_1` FOREIGN KEY (`parrent_id`) REFERENCES `tbl_category` (`id`);

--
-- Ограничения внешнего ключа таблицы `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `tbl_comment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
