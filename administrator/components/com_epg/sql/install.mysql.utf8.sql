CREATE TABLE IF NOT EXISTS `#__epg` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`file` VARCHAR(255)  NOT NULL ,
`title` VARCHAR(255)  NOT NULL ,
`channel` VARCHAR(255)  NOT NULL ,
`channelid` INT(14)  NOT NULL ,
`starting` DATE NOT NULL ,
`ending` DATE NOT NULL ,
`langauge` VARCHAR(255)  NOT NULL ,
`country` VARCHAR(255)  NOT NULL ,
`rating` VARCHAR(255)  NOT NULL ,
`actor` VARCHAR(255)  NOT NULL ,
`year` VARCHAR(255)  NOT NULL ,
`director` VARCHAR(255)  NOT NULL ,
`description` TEXT NOT NULL ,
`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`created_by` INT(11)  NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8_general_ci;

