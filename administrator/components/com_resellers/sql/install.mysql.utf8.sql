CREATE TABLE IF NOT EXISTS `#__resellers` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`created_by` INT(11)  NOT NULL ,
`name` VARCHAR(255)  NOT NULL ,
`phone` VARCHAR(255)  NOT NULL ,
`email` VARCHAR(255)  NOT NULL ,
`country` VARCHAR(255)  NOT NULL ,
`longitude` VARCHAR(255)  NOT NULL ,
`latitude` VARCHAR(255)  NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8_general_ci;

