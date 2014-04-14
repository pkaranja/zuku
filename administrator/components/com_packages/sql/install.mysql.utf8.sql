CREATE TABLE IF NOT EXISTS `#__packages` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`packagename` VARCHAR(255)  NOT NULL ,
`icon` VARCHAR(255)  NOT NULL ,
`price` VARCHAR(255)  NOT NULL ,
`description` TEXT NOT NULL ,
`offer` VARCHAR(255)  NOT NULL ,
`product` VARCHAR(255)  NOT NULL ,
`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`created_by` INT(11)  NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8_general_ci;

