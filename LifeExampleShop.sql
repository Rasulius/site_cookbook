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

-- Дамп данных таблицы lifeexampleshop.dishes: 4 rows
DELETE FROM `dishes`;
/*!40000 ALTER TABLE `dishes` DISABLE KEYS */;
INSERT INTO `dishes` (`id`, `name`, `image`, `url`) VALUES
	(1, 'Первое', '1.jpg', '1'),
	(2, 'Основное', '2.jpg', '2'),
	(3, 'Напитки', '3.jpg', '3'),
	(4, 'Закуски', '4.jpg', '4');
/*!40000 ALTER TABLE `dishes` ENABLE KEYS */;

-- Дамп данных таблицы lifeexampleshop.product: 6 rows
DELETE FROM `product`;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `name`, `price`) VALUES
	(1, 'Компьютерная мышь', '299'),
	(2, 'Монитор', '4399'),
	(3, 'Клавиатура', '299'),
	(4, 'Колонки', '499'),
	(5, 'Системный блок', '8799'),
	(6, 'Роутер', '1299');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Дамп данных таблицы lifeexampleshop.recipes: 2 rows
DELETE FROM `recipes`;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` (`id`, `name`, `image`, `type`, `url`) VALUES
	(1, 'суп гороховый', 'sup_gorohovii_v_multivarke-53149 (1).jpg', 1, ''),
	(2, 'борщ', 'c9d2bb313db8b87514773c9937dd81d4.jpeg', 1, '');
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
