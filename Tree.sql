-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 05 2019 г., 20:48
-- Версия сервера: 5.7.27-0ubuntu0.16.04.1
-- Версия PHP: 7.0.33-0ubuntu0.16.04.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tree`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Tree`
--

CREATE TABLE `Tree` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `left_key` int(10) NOT NULL DEFAULT '0',
  `right_key` int(10) NOT NULL DEFAULT '0',
  `level` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Tree`
--

INSERT INTO `Tree` (`id`, `name`, `left_key`, `right_key`, `level`) VALUES
(1, 'Техника', 1, 30, 1),
(2, 'Военная', 2, 13, 2),
(3, 'Самолеты', 3, 6, 3),
(4, 'Танки', 7, 10, 3),
(5, 'Ракеты', 11, 12, 3),
(6, 'Бытовая', 14, 19, 2),
(7, 'Микроволновка', 15, 16, 3),
(8, 'Стиральная машина', 17, 18, 3),
(9, 'Автотехника', 20, 25, 2),
(10, 'Легковые авто', 21, 22, 3),
(11, 'Мотоциклы', 23, 24, 3),
(12, 'Т-34', 8, 9, 4),
(13, 'Промышленная', 26, 29, 2),
(14, 'Станки', 27, 28, 3),
(15, 'Су-24', 4, 5, 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Tree`
--
ALTER TABLE `Tree`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Tree`
--
ALTER TABLE `Tree`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
