CREATE SCHEMA `mysite_db` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `mysite_db`.`message` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `message` VARCHAR(500) NULL,
  `name` VARCHAR(45) NULL,
  `mail` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));

ALTER TABLE `mysite_db`.`message`  ADD COLUMN `message_date` DATETIME NULL AFTER `mail`;