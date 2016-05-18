-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 18 2016 г., 18:28
-- Версия сервера: 10.1.8-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(6) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(40) NOT NULL,
  `price` int(10) NOT NULL,
  `about` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `brand`, `model`, `price`, `about`, `image`, `category`) VALUES
(9, 'Tablet', 'Tablet2', 123, 'Tablet 2', 'tablet.jpg', 'tablet'),
(10, 'ÐÐ«Ð’', 'Ð’Ð«Ð', 100, 'Ñ„Ð²Ñ‹Ð°', 'sony.jpg', 'Ð§ÐµÑ…Ð¾Ð»'),
(13, '', '', 0, '', 'a5.jpg', ''),
(16, 'LG', 'K10', 200, 'ÐÐÐ™Ð”Ð˜ Ð¡Ð’ÐžÐ™ Ð¡ÐžÐ‘Ð¡Ð¢Ð’Ð•ÐÐÐ«Ð™ Ð¡Ð¢Ð˜Ð›Ð¬', 'k.jpg', 'smart'),
(17, 'Samsung', 'Galaxy S6', 400, 'Ð¤Ð»Ð°Ð³Ð¼Ð°Ð½ÑÐºÐ¸Ð¹ ÑÐ¼Ð°Ñ€Ñ‚Ñ„Ð¾Ð½ Samsung Galaxy S6 Ð¾Ð±Ð»Ð°Ð´Ð°ÐµÑ‚ ÑÐ»ÐµÐ³Ð°Ð½Ñ‚Ð½Ñ‹Ð¼', 'GetPhoto.jpg', 'smart'),
(21, 'HTC', 'ONE M9', 400, 'Ð¡ÐµÑ€Ð²Ð¸Ñ HTC BlinkFeed Ñ€Ð°Ð±Ð¾Ñ‚Ð°ÐµÑ‚ Ð½Ð°Ð¿Ð¾Ð´Ð¾Ð±Ð¸Ðµ Google Now', 'GetPhoto (1).jpg', 'smart'),
(22, 'Iphone', '5 SE', 400, 'ÐŸÑ€ÐµÐ´ÑÑ‚Ð°Ð²Ð»ÑÐµÐ¼ iPhone SE â€“ ÑÐ°Ð¼Ñ‹Ð¹ Ð¼Ð¾Ñ‰Ð½Ñ‹Ð¹ 4â€‘Ð´ÑŽÐ¹Ð¼Ð¾Ð²Ñ‹Ð¹ ÑÐ¼Ð°Ñ€Ñ‚Ñ„Ð¾Ð½ Ð² Ð¸ÑÑ‚Ð¾Ñ€Ð¸Ð¸', 'GetPhoto (2).jpg', 'smart'),
(23, '', 'Micromax X1800 (Black)', 50, '', 'GetPhoto (3).jpg', 'mobile'),
(24, '', ' Micromax X2420 (Black champagne)', 70, '', 'GetPhoto (4).jpg', 'mobile'),
(25, '', 'Samsung Gear S2 white', 300, '', 'GetPhoto (1).png', 'gadjet'),
(26, '', 'Samsung Gear S2 white', 300, '', 'GetPhoto (1).png', 'gadget'),
(27, '', 'Ð½Ð°ÑƒÑˆÐ½Ð¸ÐºÐ¸ Beats BT ON SOL2 RED ', 350, '', 'GetPhoto (5).jpg', 'accessory'),
(28, '', 'Apple iPad Pro Wi-Fi 32GB Space Gray', 600, '', 'GetPhoto (6).jpg', 'tablet'),
(29, 'eqweq', 'wdse', 0, 'sdds', 'a5.jpg', 'smart');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `tel` int(20) NOT NULL,
  `bill` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `box` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `tel`, `bill`, `email`, `password`, `box`) VALUES
(1, 'ADMIN', '', 0, 0, 'admin', '123', 'a:3:{i:0;s:2:"14";i:1;s:2:"16";i:2;s:2:"14";}'),
(3, 'Anuar', 'Zak', 123, 0, '123', '123', 'a:4:{i:0;s:2:"22";i:1;s:2:"21";i:2;s:2:"27";i:3;s:2:"22";}'),
(6, 'Orazbai', 'Ualesh', 1231234, 0, 'orazbay@mail.ru', '123', 'a:1:{i:0;s:2:"26";}'),
(7, 'Orabay', 'Ualesh', 2147483647, 0, 'qwwqewqe', '123', 'a:1:{i:0;s:2:"16";}'),
(8, 'Rauan', 'Satanbek', 2147483647, 0, 'rauan_51', '123456789', 'a:1:{i:0;s:2:"17";}');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
