-- Adminer 4.5.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category_id` int(11) unsigned DEFAULT NULL,
  `price` float unsigned NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` tinyint(1) NOT NULL DEFAULT '1',
  `is_recommended` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2018-08-31 10:30:13

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category_id` int(11) unsigned DEFAULT NULL,
  `price` float unsigned NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` tinyint(1) NOT NULL DEFAULT '1',
  `is_recommended` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) unsigned NOT NULL DEFAULT '2',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone_number` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Adminer 4.5.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `orders` (`id`, `user_id`, `order_date`, `products`, `status`) VALUES
(2,	1,	'2018-02-05 12:24:17',	'\"[{\\\"Id\\\":\\\"4\\\",\\\"Product\\\":\\\"Blue\\u00a0cat\\\",\\\"Price\\\":\\\"333\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"4.jpg\\\"}]\"',	4),
(3,	1,	'2018-03-15 12:32:03',	'\"[{\\\"Id\\\":\\\"32\\\",\\\"Product\\\":\\\"New\\u00a0cat\\\",\\\"Price\\\":\\\"444\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"\\/media\\/files_5aa797d585cab.png\\\"},{\\\"Id\\\":\\\"31\\\",\\\"Product\\\":\\\"My\\u00a0cat\\\",\\\"Price\\\":\\\"100\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"\\/media\\/files_5aa7941eb7670.jpg\\\"},{\\\"Id\\\":\\\"33\\\",\\\"Product\\\":\\\"My\\u00a0car\\\",\\\"Price\\\":\\\"345\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"\\/media\\/files_5aa7a7acae907.jpg\\\"}]\"',	1),
(4,	1,	'2018-03-20 10:02:55',	'\"[{\\\"Id\\\":\\\"33\\\",\\\"Product\\\":\\\"My\\u00a0car\\\",\\\"Price\\\":\\\"345\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"\\/media\\/files_5aa7a7acae907.jpg\\\"},{\\\"Id\\\":\\\"32\\\",\\\"Product\\\":\\\"New\\u00a0cat\\\",\\\"Price\\\":\\\"444\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"\\/media\\/files_5aa797d585cab.png\\\"}]\"',	1),
(5,	1,	'2018-03-20 10:03:59',	'\"[{\\\"Id\\\":\\\"31\\\",\\\"Product\\\":\\\"My\\u00a0cat\\\",\\\"Price\\\":\\\"100\\\",\\\"Quantity\\\":\\\"3\\\",\\\"Picture\\\":\\\"\\/media\\/files_5aa7941eb7670.jpg\\\"}]\"',	1);

-- 2018-09-14 15:31:16


-- Adminer 4.5.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `permissions` (`id`, `name`) VALUES
(1,	'can_create');

DROP TABLE IF EXISTS `role_permission`;
CREATE TABLE `role_permission` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  KEY `role_id` (`role_id`),
  KEY `permission_id` (`permission_id`),
  CONSTRAINT `role_permission_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `role_permission_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2018-09-14 20:59:21