<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_star_data`;");
E_C("CREATE TABLE `pd_star_data` (
  `id` mediumint(8) unsigned DEFAULT '0',
  `content` text NOT NULL,
  `readpoint` smallint(5) unsigned NOT NULL DEFAULT '0',
  `groupids_view` varchar(100) NOT NULL,
  `paginationtype` tinyint(1) NOT NULL,
  `maxcharperpage` mediumint(6) NOT NULL,
  `template` varchar(30) NOT NULL,
  `paytype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `allow_comment` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `relation` varchar(255) NOT NULL DEFAULT '',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `pd_star_data` values('1','','0','','0','10000','','0','1','');");
E_D("replace into `pd_star_data` values('2','','0','','0','10000','','0','1','');");
E_D("replace into `pd_star_data` values('3','','0','','0','10000','','0','1','');");
E_D("replace into `pd_star_data` values('4','','0','','0','10000','','0','1','');");
E_D("replace into `pd_star_data` values('5','','0','','0','10000','','0','1','');");
E_D("replace into `pd_star_data` values('6','','0','','0','10000','','0','1','');");
E_D("replace into `pd_star_data` values('7','','0','','0','10000','','0','1','');");
E_D("replace into `pd_star_data` values('8','','0','','0','10000','','0','1','');");
E_D("replace into `pd_star_data` values('9','','0','','0','10000','','0','1','');");
E_D("replace into `pd_star_data` values('10','','0','','0','10000','','0','1','');");
E_D("replace into `pd_star_data` values('11','','0','','0','10000','','0','1','');");
E_D("replace into `pd_star_data` values('12','','0','','0','10000','','0','1','');");
E_D("replace into `pd_star_data` values('13','','0','','0','10000','','0','1','');");

require("../../inc/footer.php");
?>