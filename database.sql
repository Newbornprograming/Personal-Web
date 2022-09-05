SET TIME_ZONE = "+07:00";
SET FOREIGN_KEY_CHECKS = OFF;

START TRANSACTION;

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `phone` VARCHAR(13) NOT NULL,
  `gender` SMALLINT(1) NOT NULL,
  `birth_date` DATE NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `customer_id` INT(11) NOT NULL,
  `type` SMALLINT(1) NOT NULL,
  `title` VARCHAR(50) NOT NULL,
  `status` SMALLINT(1) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  CONSTRAINT `FK_CustomerOrder` FOREIGN KEY (`customer_id`) REFERENCES `customers`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

COMMIT;
SET FOREIGN_KEY_CHECKS = ON;