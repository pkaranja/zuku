CREATE TABLE IF NOT EXISTS `#__products` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`name` VARCHAR(255)  NOT NULL ,
`image` VARCHAR(255)  NOT NULL ,
`country` VARCHAR(255)  NOT NULL ,
`language` VARCHAR(255)  NOT NULL ,
`starting_price` VARCHAR(255)  NOT NULL ,
`slogan` VARCHAR(255)  NOT NULL ,
`description` TEXT NOT NULL ,
`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`created_by` INT(11)  NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8_general_ci;

