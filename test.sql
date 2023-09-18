-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 18 2023 г., 05:10
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Poisk`
--

CREATE TABLE `Poisk` (
  `id` int(16) NOT NULL,
  `headline` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL,
  `newstext` varchar(128) NOT NULL,
  `newsimg` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Poisk`
--

INSERT INTO `Poisk` (`id`, `headline`, `description`, `newstext`, `newsimg`) VALUES
(1, 'Квартира 1', 'квартира двухуровневая', 'Квартира однокомнотная', '/img/Rectangle 22.png'),
(2, 'Квартира 2', 'Квартира двухкомнатная', 'С подвалом', '/img/Rectangle 22.png'),
(3, 'Квартира 3', 'Квартира трехкомнатная', 'Без подвала', '/img/Rectangle 22.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Poisk`
--
ALTER TABLE `Poisk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Poisk`
--
ALTER TABLE `Poisk`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
