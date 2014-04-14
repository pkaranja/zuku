CREATE TABLE IF NOT EXISTS `#__shows` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`name` VARCHAR(255)  NOT NULL ,
`image` VARCHAR(255)  NOT NULL ,
`start_time` TIMESTAMP NOT NULL ,
`end_time` TIMESTAMP NOT NULL ,
`days` VARCHAR(255)  NOT NULL ,
`featured` VARCHAR(255)  NOT NULL ,
`channel` VARCHAR(255)  NOT NULL ,
`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`created_by` INT(11)  NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8_general_ci;

