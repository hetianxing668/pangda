<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_teachers_data`;");
E_C("CREATE TABLE `pd_teachers_data` (
  `id` mediumint(8) unsigned DEFAULT '0',
  `content` mediumtext NOT NULL,
  `readpoint` smallint(5) unsigned NOT NULL DEFAULT '0',
  `groupids_view` varchar(100) NOT NULL,
  `paginationtype` tinyint(1) NOT NULL,
  `maxcharperpage` mediumint(6) NOT NULL,
  `template` varchar(30) NOT NULL,
  `paytype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `allow_comment` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `relation` varchar(255) NOT NULL DEFAULT '',
  `jxln` mediumtext NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `pd_teachers_data` values('1','夫君子之行，静以修身，俭以养德，非淡泊无以明志，非宁静无以致远。','0','','0','10000','','0','1','','夫君子之行，静以修身，俭以养德，非淡泊无以明志，非宁静无以致远。');");
E_D("replace into `pd_teachers_data` values('2','因材施教，按照企业标准培养学生，为学生的发展铺路搭桥。','0','','0','10000','','0','1','','因材施教，按照企业标准培养学生，为学生的发展铺路搭桥。');");

require("../../inc/footer.php");
?>