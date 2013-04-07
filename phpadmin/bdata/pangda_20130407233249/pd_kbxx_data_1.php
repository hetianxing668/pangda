<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_kbxx_data`;");
E_C("CREATE TABLE `pd_kbxx_data` (
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
  `leftnum` varchar(255) NOT NULL DEFAULT '',
  `totalnum` varchar(255) NOT NULL DEFAULT '',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `pd_kbxx_data` values('1','<span class=\"sp_txt\">汽车检测与运营工程师[技能+大专]</span>','0','','0','10000','','0','1','','100','100');");
E_D("replace into `pd_kbxx_data` values('2','<span class=\"sp_txt\">汽车检测与运营工程师[技能+中专]</span>','0','','0','10000','','0','1','','100','100');");
E_D("replace into `pd_kbxx_data` values('3','<span class=\"sp_txt\">汽车商务与管理[2+1大中专连读]</span>','0','','0','10000','','0','1','','100','100');");
E_D("replace into `pd_kbxx_data` values('4','<span class=\"sp_txt\">汽车检测与维修高级技师[实训+技能]</span>','0','','0','10000','','0','1','','100','100');");
E_D("replace into `pd_kbxx_data` values('5','<span class=\"sp_txt\">汽车4S维修高级技师[一年纯技能]</span>','0','','0','10000','','0','1','','100','100');");
E_D("replace into `pd_kbxx_data` values('6','<span class=\"sp_txt\">汽车4S维修高级技师[一年纯技能]</span>','0','','0','10000','','0','1','','100','100');");
E_D("replace into `pd_kbxx_data` values('7','<span class=\"sp_txt\">汽车维修与运营工程师[技能+中专]</span>','0','','0','10000','','0','1','','100','100');");

require("../../inc/footer.php");
?>