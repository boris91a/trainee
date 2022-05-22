-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 22 2022 г., 15:21
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nixeducation`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `header` varchar(255) NOT NULL,
  `p_content` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `author_id` int NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `moderate` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `header`, `p_content`, `picture`, `author_id`, `date`, `moderate`) VALUES
(1, 'Some post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at consequatur eius eligendi enim, iusto modi, molestias mollitia nesciunt non perspiciatis repudiandae, sapiente tempora temporibus unde voluptatem voluptates. Aspernatur, temporibus?', 'post1.jpg', 1, '2022-05-21 18:07:48', 0),
(2, 'Second post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet consectetur deserunt eum explicabo fuga itaque, labore magnam molestias nostrum odit officia praesentium quaerat quia quo ratione sapiente sed soluta.', 'post2.jpg', 1, '2022-05-20 20:01:48', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `verification_token` varchar(255) NOT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `avatar`, `reg_date`, `verification_token`, `status`) VALUES
(1, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@te.st', '', '2022-05-21 22:43:32', '', 1),
(2, 'test1', '5a105e8b9d40e1329780d62ea2265d8a', 'test1@ser', NULL, '2022-05-21 23:45:52', '5fc92f13db1286c6b8a8e9b4fa8b6da6', NULL),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin', NULL, '2022-05-22 11:54:10', 'c0e024d9200b5705bc4804722636378a', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
