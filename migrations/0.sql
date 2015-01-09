# INITIAL ADMIN DB
# This is the schema of the system module database as of 09/01/2015
CREATE TABLE `nails_app_notification` (`id` int(11) unsigned NOT NULL AUTO_INCREMENT, `grouping` varchar(100) NOT NULL, `key` varchar(50) DEFAULT NULL, `value` text, PRIMARY KEY (`id`), KEY `grouping` (`grouping`), KEY `grouping_2` (`grouping`,`key`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `nails_app_setting`;
CREATE TABLE `nails_app_setting` (`id` int(11) unsigned NOT NULL AUTO_INCREMENT, `grouping` varchar(100) NOT NULL, `key` varchar(50) DEFAULT NULL, `value` text, `is_encrypted` tinyint(1) unsigned NOT NULL DEFAULT '0', PRIMARY KEY (`id`), KEY `grouping` (`grouping`), KEY `grouping_2` (`grouping`,`key`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;