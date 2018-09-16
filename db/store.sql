-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 16 2018 г., 09:32
-- Версия сервера: 10.1.31-MariaDB
-- Версия PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`) VALUES
(1, 'earth', 1),
(2, 'mars', 1),
(3, 'jupiter', 1),
(4, 'new one', 1),
(5, 'two', 0),
(6, 'Cathy', 0),
(7, 'More then one', 1),
(8, 'More then two', 0),
(9, 'Black Cat', 1),
(10, 'Green Cat', 1),
(11, 'Red Cat', 1),
(12, 'Cool Cat', 1),
(13, 'Grey Cat', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `guestbook`
--

INSERT INTO `guestbook` (`id`, `username`, `email`, `subject`, `comment`, `created_at`) VALUES
(1, 'John', 'john@example.com', 'Subj', 'Hi, It is John Doe', '2018-08-25 09:27:52'),
(2, 'Dou', 'dou@example.com', 'Subj2', 'Hi, It is  Doe John', '2018-08-25 09:29:24'),
(3, 'Test', 'janusnic@gmail.com', 'Hello There', 'Hello cats!', '2018-08-25 09:42:16');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_date`, `products`, `status`) VALUES
(2, 1, '2018-02-05 10:24:17', '\"[{\\\"Id\\\":\\\"4\\\",\\\"Product\\\":\\\"Blue\\u00a0cat\\\",\\\"Price\\\":\\\"333\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"4.jpg\\\"}]\"', 4),
(3, 1, '2018-03-15 10:32:03', '\"[{\\\"Id\\\":\\\"32\\\",\\\"Product\\\":\\\"New\\u00a0cat\\\",\\\"Price\\\":\\\"444\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"\\/media\\/files_5aa797d585cab.png\\\"},{\\\"Id\\\":\\\"31\\\",\\\"Product\\\":\\\"My\\u00a0cat\\\",\\\"Price\\\":\\\"100\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"\\/media\\/files_5aa7941eb7670.jpg\\\"},{\\\"Id\\\":\\\"33\\\",\\\"Product\\\":\\\"My\\u00a0car\\\",\\\"Price\\\":\\\"345\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"\\/media\\/files_5aa7a7acae907.jpg\\\"}]\"', 1),
(4, 1, '2018-03-20 08:02:55', '\"[{\\\"Id\\\":\\\"33\\\",\\\"Product\\\":\\\"My\\u00a0car\\\",\\\"Price\\\":\\\"345\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"\\/media\\/files_5aa7a7acae907.jpg\\\"},{\\\"Id\\\":\\\"32\\\",\\\"Product\\\":\\\"New\\u00a0cat\\\",\\\"Price\\\":\\\"444\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"\\/media\\/files_5aa797d585cab.png\\\"}]\"', 1),
(5, 1, '2018-03-20 08:03:59', '\"[{\\\"Id\\\":\\\"31\\\",\\\"Product\\\":\\\"My\\u00a0cat\\\",\\\"Price\\\":\\\"100\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"\\/media\\/files_5aa7941eb7670.jpg\\\"}]\"', 1),
(6, 1, '2018-09-15 08:55:28', '\"[{\\\"Id\\\":\\\"10\\\",\\\"Product\\\":\\\"Black cat\\\",\\\"Price\\\":\\\"123\\\",\\\"Quantity\\\":\\\"1\\\",\\\"Picture\\\":\\\"\\/media\\/files_5b9387426d0f6.jpg\\\"}]\"', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `name`) VALUES
(1, 'can_create'),
(2, 'can_read'),
(3, 'can_edit'),
(4, 'can_update'),
(5, 'can_delete');

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE `pictures` (
  `id` int(10) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `resource` varchar(50) NOT NULL,
  `resource_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `filename`, `resource`, `resource_id`) VALUES
(2, 'files_5b938604ea187.jpg', 'products', 9),
(3, 'files_5b9387426d0f6.jpg', 'products', 10),
(4, 'files_5b9389b3a1594.jpg', 'products', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `status`, `created_at`) VALUES
(1, 'Обработка ошибок', '', '<p><img src=\"../../../media//files_5b938599361fa.jpg\" alt=\"\" /></p>\r\n<p>&nbsp;</p>\r\n<p>Если ваше приложение не перехватывает исключение PDO конструктора, движок zend выполнит стандартные операции для завершения работы скрипта и вывода обратной трассировки. В этой трассировке будет содержаться детальная информация о соединении с базой данных, включая имя пользователя и пароль. Ответственность за перехват исключений лежит на вас. Перехватить исключение можно явно (с помощью выражения catch), либо неявно, задав глобальный обработчик ошибок функцией set_exception_handler().</p>', 1, '2018-09-01 09:36:19');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `price` float UNSIGNED NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` tinyint(1) NOT NULL DEFAULT '1',
  `is_recommended` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `slug`, `name`, `status`, `category_id`, `price`, `brand`, `description`, `is_new`, `is_recommended`) VALUES
(9, 'test-cat', 'test CAt', 1, 6, 555, 'cats', 'Can Created Posts', 1, 0),
(10, 'black-cat', 'Black cat', 1, 8, 123, 'test', 'Can Created Posts', 1, 0),
(11, 'green-cat', 'Green cat', 1, 1, 234, 'cats', 'Can list users', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'customer');

-- --------------------------------------------------------

--
-- Структура таблицы `role_permission`
--

CREATE TABLE `role_permission` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `role_permission`
--

INSERT INTO `role_permission` (`role_id`, `permission_id`) VALUES
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) UNSIGNED NOT NULL DEFAULT '3',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone_number` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `status`, `first_name`, `last_name`, `phone_number`) VALUES
(1, 'customer', 'customer@my.com', '$2y$12$9.NW9XCJg4pb48Pr1j1hsOKmxwFJVChTQ8A/NU4Gw2hPzAMTqWm3q', 3, 1, 'Test', 'Nic', '12345678'),
(2, 'Test', 'test@my.com', '$2y$10$kOplQivRcH6CU4Fab2vft.UW/52EGzLp4IFg1BMWXPGGBMoFvjrJm', 3, 1, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`(90));

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role_permission`
--
ALTER TABLE `role_permission`
  ADD KEY `role_id` (`role_id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `role_permission`
--
ALTER TABLE `role_permission`
  ADD CONSTRAINT `role_permission_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_permission_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
