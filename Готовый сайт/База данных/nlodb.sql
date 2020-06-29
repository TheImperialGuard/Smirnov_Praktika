-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 29 2020 г., 14:08
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nlodb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Мебель'),
(3, 'Одежда'),
(4, 'Детские товары'),
(5, 'Телефоны и планшеты'),
(8, 'Компьютерная техника'),
(10, 'Спортивные товары');

-- --------------------------------------------------------

--
-- Структура таблицы `fav`
--

CREATE TABLE `fav` (
  `fav_item` int(11) NOT NULL,
  `fav_user` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `fav`
--

INSERT INTO `fav` (`fav_item`, `fav_user`, `id`) VALUES
(7, 11, 2),
(6, 11, 4),
(12, 10, 6),
(13, 12, 7),
(10, 10, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int(255) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_cost` int(100) NOT NULL,
  `item_category` varchar(50) NOT NULL,
  `item_podcategory` varchar(50) NOT NULL,
  `item_text` varchar(1000) NOT NULL,
  `item_user` varchar(50) NOT NULL,
  `item_user_phone` varchar(22) NOT NULL,
  `item_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `item_name`, `item_cost`, `item_category`, `item_podcategory`, `item_text`, `item_user`, `item_user_phone`, `item_image`) VALUES
(6, 'Тестовый товар', 500, '1', '5', 'Это тестовый товар. Он крутой.\r\nКупите его, пожошта.', '10', '+7(981)-378-42-95', '2172-product-silo.png'),
(7, 'Комод', 300, '1', '14', 'Оч крутой комод, новый. 2х2 метра, 3 ящика.', '12', '+7(222)-322-22-33', 'LAAT-i_gunship.png'),
(8, 'Хлеб', 68, '8', '31', 'Хлеб хлебный из хлебного магазина с хлебопекарного завода', '13', '+7(911)-911-89-98', 'sPZI7isLeKM.jpg'),
(9, 'Штурмовики', 501, '4', '20', 'Отборные штурмовики из 501-го легиона готовы вступить в бой с вашим неприятелем в любую минуту. Только в хорошие руки', '11', '+7(929)-911-22-33', 'клоны2.jpg'),
(10, 'Питер Квилл', 5, '5', '23', 'Питер Квилл (почти новый). Срочно нужно продать, или останется без дома. Цена договорная!!!', '10', '+7(981)-378-42-95', 'i.jpg'),
(11, 'Materwelon', 6000, '3', '17', 'Materwelon', '13', '+7(911)-911-89-98', 'L6xpKyPpvzg.jpg'),
(12, 'Патрик', 527, '4', '9', 'Очень хороший Патрик, который умеет сидеть на полу', '12', '+7(222)-322-22-33', '2Jm-MGK2Sto.jpg'),
(13, 'Какой-то дед', 0, '3', '16', 'Нашел его у себя в гараже, не знаю, что с ним делать. Помогите!', '10', '+7(981)-378-42-95', '282234.jpg'),
(15, 'Су-34', 10000, '3', '16', 'Утенок, умеет летать.', '10', '+7(981)-378-42-95', '20111217170828_1.png');

-- --------------------------------------------------------

--
-- Структура таблицы `podcategory`
--

CREATE TABLE `podcategory` (
  `id` int(11) NOT NULL,
  `podcategory_name` varchar(50) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `podcategory`
--

INSERT INTO `podcategory` (`id`, `podcategory_name`, `parent`) VALUES
(5, 'Диваны', 1),
(6, 'Столы', 1),
(7, 'Штаны', 3),
(8, 'Юбки', 3),
(9, 'Игрушки', 4),
(11, 'Коляски', 4),
(12, 'Кровати', 1),
(13, 'Стулья', 1),
(14, 'Тумбы', 1),
(15, 'Футболки', 3),
(16, 'Головные уборы', 3),
(17, 'Обувь', 3),
(18, 'Рубашки', 3),
(19, 'Шорты', 3),
(20, 'Автокресла', 4),
(21, 'Мобильные телефоны', 5),
(22, 'Планшеты', 5),
(23, 'Умные часы', 5),
(24, 'Чехлы', 5),
(25, 'Аксессуары', 5),
(26, 'Ноутбуки', 8),
(27, 'Компьютеры', 8),
(28, 'Мониторы', 8),
(29, 'Клавиатуры', 8),
(30, 'Мыши', 8),
(31, 'Накопители данных', 8),
(32, 'Велосипеды', 10),
(33, 'Лыжи', 10),
(34, 'Товары для фитнеса', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_surname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(22) DEFAULT NULL,
  `user_city` varchar(50) DEFAULT NULL,
  `user_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user_password`, `user_name`, `user_surname`, `user_email`, `user_phone`, `user_city`, `user_status`) VALUES
(10, '$2y$10$Ed0TPIBdWFxucQahCgtRqOsBAyKsxOxTCgH1ICdruUNwU0T6cbjIq', 'Тони', 'Карк', 'Stark@gmail.com', '+7(981)-378-42-95', NULL, 2),
(11, '$2y$10$UNgtz662JMa.6rtPOzQdW.VDEahb0SHGoR4u4H5o9zAAR2tpmd04C', 'Дарт', 'Вейдер', 'DarkSide@gmail.com', '+7(929)-911-22-33', 'Пермь', 1),
(12, '$2y$10$vxnNd7HU3ib73Kq0Tz2UNuk8CSMj4CmIhW90kKFBPIxorIVs9SWL.', 'Чучундра', 'Кваскова', 'Chucha@mail.ru', '+7(222)-322-22-33', 'Анапа', 1),
(13, '$2y$10$UXeN7Ecv7Lv8UcOduUSsdeT30rEo/HXAIwX7Hfk58WJJWN2TqHNrm', 'Идан', 'Мирнов', 'dandan@mail.ru', '+7(911)-911-89-98', 'Вологда', 1),
(14, '$2y$10$EMmdPRm3Nog2sB//DQXCHuoXb6360Dd.WVGGXZ.WnX6OkbP8v5OhK', 'Тест', 'Тестович', 'test@mail.ru', '+7(911)-921-89-98', 'Москва', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `podcategory`
--
ALTER TABLE `podcategory`
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
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `fav`
--
ALTER TABLE `fav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `podcategory`
--
ALTER TABLE `podcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
