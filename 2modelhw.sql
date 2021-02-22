-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 11 2021 г., 09:03
-- Версия сервера: 5.6.47-log
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `2modelhw`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id_com` int(5) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id_com`, `fio`, `email`, `text`, `date`) VALUES
(4, '1', '1@1.ru', 'ss', '2021-02-09 04:53:30'),
(6, 'Я', '1@!.com', 'Запиши!', '2021-02-11 04:05:51');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `img`, `description`, `price`) VALUES
(1, 'Товар №1', '1.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores quo perferendis nisi facilis tempora. Vero sunt voluptatum, minima cupiditate nam molestiae asperiores eius quidem hic veritatis sapiente dolor commodi sequi. Perferendis obcaecati, nesciunt odit magni reiciendis ullam earum ipsa, amet eaque repudiandae, repellat numquam quod. Tempora ratione accusantium velit est error, corrupti sint nobis! Quaerat hic ullam dolorum magni et sit? Fugiat ullam adipisci quod laudantium rem in tempore quam ducimus ipsam temporibus ad quisquam nesciunt ut porro modi atque, vero hic culpa sint soluta animi! Dolor voluptatem omnis magnam dolore sapiente vero, qui facere, sint dicta eos aliquid quaerat, rem earum rerum natus minus reiciendis tempore pariatur illo accusantium perspiciatis accusamus. Quos magni neque labore totam, ratione quaerat, sint nulla vel corrupti, ab iure laudantium autem recusandae deleniti voluptatibus quae porro maiores nisi cupiditate soluta tempore natus voluptate assumenda? Delectus libero, adipisci laboriosam voluptatem nemo et iste rerum quidem maxime, voluptate reiciendis quasi tempora consequuntur sequi expedita amet! Facilis corporis iste alias, ipsum eligendi distinctio sapiente possimus quas. ', 20000),
(2, 'Товар №2', '1.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores quo perferendis nisi facilis tempora. Vero sunt voluptatum, minima cupiditate nam molestiae asperiores eius quidem hic veritatis sapiente dolor commodi sequi. Perferendis obcaecati, nesciunt odit magni reiciendis ullam earum ipsa, amet eaque repudiandae, repellat numquam quod. Tempora ratione accusantium velit est error, corrupti sint nobis! Quaerat hic ullam dolorum magni et sit? Fugiat ullam adipisci quod laudantium rem in tempore quam ducimus ipsam temporibus ad quisquam nesciunt ut porro modi atque, vero hic culpa sint soluta animi! Dolor voluptatem omnis magnam dolore sapiente vero, qui facere, sint dicta eos aliquid quaerat, rem earum rerum natus minus reiciendis tempore pariatur illo accusantium perspiciatis accusamus. Quos magni neque labore totam, ratione quaerat, sint nulla vel corrupti, ab iure laudantium autem recusandae deleniti voluptatibus quae porro maiores nisi cupiditate soluta tempore natus voluptate assumenda? Delectus libero, adipisci laboriosam voluptatem nemo et iste rerum quidem maxime, voluptate reiciendis quasi tempora consequuntur sequi expedita amet! Facilis corporis iste alias, ipsum eligendi distinctio sapiente possimus quas. ', 10000),
(3, 'Товар №3', '1.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores quo perferendis nisi facilis tempora. Vero sunt voluptatum, minima cupiditate nam molestiae asperiores eius quidem hic veritatis sapiente dolor commodi sequi. Perferendis obcaecati, nesciunt odit magni reiciendis ullam earum ipsa, amet eaque repudiandae, repellat numquam quod. Tempora ratione accusantium velit est error, corrupti sint nobis! Quaerat hic ullam dolorum magni et sit? Fugiat ullam adipisci quod laudantium rem in tempore quam ducimus ipsam temporibus ad quisquam nesciunt ut porro modi atque, vero hic culpa sint soluta animi! Dolor voluptatem omnis magnam dolore sapiente vero, qui facere, sint dicta eos aliquid quaerat, rem earum rerum natus minus reiciendis tempore pariatur illo accusantium perspiciatis accusamus. Quos magni neque labore totam, ratione quaerat, sint nulla vel corrupti, ab iure laudantium autem recusandae deleniti voluptatibus quae porro maiores nisi cupiditate soluta tempore natus voluptate assumenda? Delectus libero, adipisci laboriosam voluptatem nemo et iste rerum quidem maxime, voluptate reiciendis quasi tempora consequuntur sequi expedita amet! Facilis corporis iste alias, ipsum eligendi distinctio sapiente possimus quas. ', 30000),
(4, 'Товар №4', '1.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores quo perferendis nisi facilis tempora. Vero sunt voluptatum, minima cupiditate nam molestiae asperiores eius quidem hic veritatis sapiente dolor commodi sequi. Perferendis obcaecati, nesciunt odit magni reiciendis ullam earum ipsa, amet eaque repudiandae, repellat numquam quod. Tempora ratione accusantium velit est error, corrupti sint nobis! Quaerat hic ullam dolorum magni et sit? Fugiat ullam adipisci quod laudantium rem in tempore quam ducimus ipsam temporibus ad quisquam nesciunt ut porro modi atque, vero hic culpa sint soluta animi! Dolor voluptatem omnis magnam dolore sapiente vero, qui facere, sint dicta eos aliquid quaerat, rem earum rerum natus minus reiciendis tempore pariatur illo accusantium perspiciatis accusamus. Quos magni neque labore totam, ratione quaerat, sint nulla vel corrupti, ab iure laudantium autem recusandae deleniti voluptatibus quae porro maiores nisi cupiditate soluta tempore natus voluptate assumenda? Delectus libero, adipisci laboriosam voluptatem nemo et iste rerum quidem maxime, voluptate reiciendis quasi tempora consequuntur sequi expedita amet! Facilis corporis iste alias, ipsum eligendi distinctio sapiente possimus quas. ', 15000);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_order` text NOT NULL,
  `status_order` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `date_order`, `status_order`) VALUES
(1, 13, '14/01/2021', 'Активен'),
(2, 13, '14/01/2021', 'Активен'),
(3, 13, '14/01/2021', 'Активен'),
(4, 27, '14/01/2021', 'Активен'),
(5, 30, '21/01/2021', 'Активен'),
(6, 28, '22/01/2021', 'Активен'),
(7, 28, '02/02/2021', 'Активен'),
(8, 28, '02/02/2021', 'Активен'),
(9, 28, '02/02/2021', 'Активен'),
(10, 28, '02/02/2021', 'Активен');

-- --------------------------------------------------------

--
-- Структура таблицы `order_goods`
--

CREATE TABLE `order_goods` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `good_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_goods`
--

INSERT INTO `order_goods` (`id`, `id_order`, `id_good`, `good_count`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 2, 3, 2),
(4, 2, 2, 1),
(5, 3, 2, 2),
(6, 3, 3, 1),
(7, 4, 32, 3),
(8, 4, 2, 2),
(9, 5, 3, 1),
(10, 6, 1, 2),
(11, 7, 2, 3),
(12, 8, 1, 1),
(13, 9, 1, 1),
(14, 10, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`) VALUES
(13, 'Андрей', 'user', 'ee32c060ac0caa70b04e25091bbc11eeee11cbb19052e40b07aac0ca060c23ee'),
(27, 'Елена', 'user2', '0273a989784c1a55bec79106b36d85e77e58d63b60197ceb55a1c487989a3720'),
(28, 'Admin', 'admin', '3cf108a4e0a498347a5a75a792f2321221232f297a57a5a743894a0e4a801fc3'),
(30, 'm', 'm', 'b1051a9d8893542362ad09051775f8f66f8f57715090da2632453988d9a1501b'),
(31, 'ad', 'ad', '50687ab93de9638f4c97b649735fa325523af537946b79c4f8369ed39ba78605');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_com`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `order_goods`
--
ALTER TABLE `order_goods`
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
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id_com` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `order_goods`
--
ALTER TABLE `order_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
