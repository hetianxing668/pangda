<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_alumni_data`;");
E_C("CREATE TABLE `pd_alumni_data` (
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
  `major` varchar(255) NOT NULL DEFAULT '',
  `enddate` date DEFAULT NULL,
  `jydw` varchar(255) NOT NULL DEFAULT '',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `pd_alumni_data` values('1','洗洗就发汽车美容护理会所','0','','0','10000','','0','1','','汽车装具美容','2010-06-20','洗洗就发汽车美容护理会所');");
E_D("replace into `pd_alumni_data` values('2','洗洗就发汽车美容护理会所','0','','0','10000','','0','1','','车装具美容','2010-06-20','洗洗就发汽车美容护理会所');");

require("../../inc/footer.php");
?>