<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_picture_data`;");
E_C("CREATE TABLE `pd_picture_data` (
  `id` mediumint(8) unsigned DEFAULT '0',
  `content` text NOT NULL,
  `readpoint` smallint(5) unsigned NOT NULL DEFAULT '0',
  `groupids_view` varchar(100) NOT NULL,
  `paginationtype` tinyint(1) NOT NULL,
  `maxcharperpage` mediumint(6) NOT NULL,
  `template` varchar(30) NOT NULL,
  `paytype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `relation` varchar(255) NOT NULL DEFAULT '',
  `pictureurls` mediumtext NOT NULL,
  `copyfrom` varchar(255) NOT NULL DEFAULT '',
  `allow_comment` tinyint(1) unsigned NOT NULL DEFAULT '1',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `pd_picture_data` values('1','教学楼一角','0','','0','10000','','0','','array (\n)','|0','1');");
E_D("replace into `pd_picture_data` values('2','展厅一角','0','','0','10000','','0','','array (\n)','|1','1');");
E_D("replace into `pd_picture_data` values('3','校园小花园','0','','0','10000','','0','','array (\n)','|0','1');");
E_D("replace into `pd_picture_data` values('4','理论授课教室','0','','0','10000','','0','','array (\n)','|0','1');");
E_D("replace into `pd_picture_data` values('5','理论授课教室','0','','0','10000','','0','','array (\n)','|0','1');");

require("../../inc/footer.php");
?>