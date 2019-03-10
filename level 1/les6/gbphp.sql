-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 08 2019 г., 22:18
-- Версия сервера: 5.7.11
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gbphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `click` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id`, `path`, `size`, `name`, `click`) VALUES
(1, '/img/', 1, '1.jpg', 3),
(2, '/img/', 1, '2.jpg', 1),
(3, '/img/', 1, '3.jpg', 1),
(4, '/img/', 1, '4.jpg', 8),
(5, '/img/', 1, '5.jpg', 2),
(6, '/img/', 1, '6.jpg', 1),
(7, '/img/', 1, '7.jpg', 5),
(8, '/img/', 1, '8.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `fio` varchar(50) NOT NULL DEFAULT 'anonimus',
  `login` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Время создания записи',
  `count` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `login`, `password`, `date`, `count`) VALUES
(21, 'anonimus', 'admin', '123', '2019-03-08 17:48:12', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
