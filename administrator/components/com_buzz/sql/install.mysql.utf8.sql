CREATE TABLE IF NOT EXISTS `#__buzz` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`title` VARCHAR(255)  NOT NULL ,
`country` VARCHAR(255)  NOT NULL ,
`langauge` VARCHAR(255)  NOT NULL ,
`show` VARCHAR(255)  NOT NULL ,
`image` VARCHAR(255)  NOT NULL ,
`story` TEXT NOT NULL ,
`created_by` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`checked_out` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`ordering` INT(11)  NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8_general_ci;

