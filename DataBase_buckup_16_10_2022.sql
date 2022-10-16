-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.24-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных cookbook
DROP DATABASE IF EXISTS `cookbook`;
CREATE DATABASE IF NOT EXISTS `cookbook` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `cookbook`;

-- Дамп структуры для таблица cookbook.author
DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы cookbook.author: ~5 rows (приблизительно)
DELETE FROM `author`;
INSERT INTO `author` (`id`, `name`) VALUES
	(1, 'Иван'),
	(2, 'Василии'),
	(3, 'Антон'),
	(4, 'Петр'),
	(5, 'Семен');

-- Дамп структуры для таблица cookbook.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category_image_file` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы cookbook.category: ~4 rows (приблизительно)
DELETE FROM `category`;
INSERT INTO `category` (`id`, `name`, `description`, `category_image_file`) VALUES
	(1, 'первое', 'первое', '1.png'),
	(2, 'второе', 'второе', '2.png'),
	(3, 'закуски', 'закуски', '3.png'),
	(4, 'напитки', 'напитки', '4.png');

-- Дамп структуры для таблица cookbook.ingredient
DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `isComplex` tinyint(1) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы cookbook.ingredient: ~6 rows (приблизительно)
DELETE FROM `ingredient`;
INSERT INTO `ingredient` (`id`, `name`, `isComplex`, `parent_id`) VALUES
	(1, 'яйцо', NULL, NULL),
	(2, 'перец', NULL, NULL),
	(3, 'соль', NULL, NULL),
	(4, 'сахар', NULL, NULL),
	(5, 'шоколад', NULL, NULL),
	(6, 'экстракт ванили', NULL, NULL);

-- Дамп структуры для таблица cookbook.measure
DROP TABLE IF EXISTS `measure`;
CREATE TABLE IF NOT EXISTS `measure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы cookbook.measure: ~7 rows (приблизительно)
DELETE FROM `measure`;
INSERT INTO `measure` (`id`, `name`) VALUES
	(1, 'грамм'),
	(2, 'штук'),
	(3, 'чашка'),
	(4, 'чайная лоджка'),
	(5, 'столовая ложка'),
	(6, 'пучёк'),
	(7, 'по вкусу');

-- Дамп структуры для таблица cookbook.recipe
DROP TABLE IF EXISTS `recipe`;
CREATE TABLE IF NOT EXISTS `recipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `instructions` varchar(500) DEFAULT NULL,
  `image_file_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы cookbook.recipe: ~2 rows (приблизительно)
DELETE FROM `recipe`;
INSERT INTO `recipe` (`id`, `name`, `description`, `instructions`, `image_file_name`) VALUES
	(1, 'Вареное Яйцо', 'Одно варенное яйцо', 'Добавьте яцо в холодную воду и ожидайте приготовления', '1.png'),
	(2, 'Яичница в перцах', 'Оригинальная идея для завтрака - яичница в перце.', 'Приготовить все ингредиенты. Перцы вымыть.cookbook  Нарезать перец колечками толщиной 1,5 см и очистить от семян и перегородок. ', '2.png');

-- Дамп структуры для таблица cookbook.recipecategory
DROP TABLE IF EXISTS `recipecategory`;
CREATE TABLE IF NOT EXISTS `recipecategory` (
  `recipe_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  KEY `fk_recipe_rc` (`recipe_id`),
  KEY `fk_category_rc` (`category_id`),
  CONSTRAINT `fk_category_rc` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `fk_recipe_rc` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы cookbook.recipecategory: ~2 rows (приблизительно)
DELETE FROM `recipecategory`;
INSERT INTO `recipecategory` (`recipe_id`, `category_id`) VALUES
	(1, 2),
	(2, 2);

-- Дамп структуры для таблица cookbook.recipeingredient
DROP TABLE IF EXISTS `recipeingredient`;
CREATE TABLE IF NOT EXISTS `recipeingredient` (
  `recipe_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL,
  `measure_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  KEY `fk_recipe` (`recipe_id`),
  KEY `fk_ingredient` (`ingredient_id`),
  KEY `fk_measure` (`measure_id`),
  CONSTRAINT `fk_ingredient` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`id`),
  CONSTRAINT `fk_measure` FOREIGN KEY (`measure_id`) REFERENCES `measure` (`id`),
  CONSTRAINT `fk_recipe` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы cookbook.recipeingredient: ~5 rows (приблизительно)
DELETE FROM `recipeingredient`;
INSERT INTO `recipeingredient` (`recipe_id`, `ingredient_id`, `measure_id`, `amount`) VALUES
	(1, 1, 2, 1),
	(2, 1, 2, 3),
	(2, 2, 2, 1),
	(2, 3, 1, 2),
	(2, 4, 1, 1);

-- Дамп структуры для таблица cookbook.recipe_statistic_info
DROP TABLE IF EXISTS `recipe_statistic_info`;
CREATE TABLE IF NOT EXISTS `recipe_statistic_info` (
  `recipe_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `viewers_counter` int(11) NOT NULL,
  `comments_count` int(11) NOT NULL,
  `likes_count` int(11) NOT NULL,
  KEY `fk_recipe_ra` (`recipe_id`),
  KEY `fk_author_ra` (`author_id`),
  CONSTRAINT `fk_author_ra` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`),
  CONSTRAINT `fk_recipe_ra` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Дамп данных таблицы cookbook.recipe_statistic_info: ~2 rows (приблизительно)
DELETE FROM `recipe_statistic_info`;
INSERT INTO `recipe_statistic_info` (`recipe_id`, `author_id`, `viewers_counter`, `comments_count`, `likes_count`) VALUES
	(1, 1, 2, 10, 12),
	(2, 2, 2, 10, 12);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
