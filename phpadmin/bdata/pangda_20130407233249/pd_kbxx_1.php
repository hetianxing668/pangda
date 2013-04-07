<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_kbxx`;");
E_C("CREATE TABLE `pd_kbxx` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` char(80) NOT NULL DEFAULT '',
  `style` char(24) NOT NULL DEFAULT '',
  `thumb` char(100) NOT NULL DEFAULT '',
  `keywords` char(40) NOT NULL DEFAULT '',
  `description` char(255) NOT NULL DEFAULT '',
  `posids` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `url` char(100) NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `sysadd` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL,
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `pd_kbxx` values('1','27','0','汽车检测与运营工程师[技能+大专]','','','','汽车检测与运营工程师[技能+大专]','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=27&id=1','0','99','1','0','admin','1364710391','1364710409');");
E_D("replace into `pd_kbxx` values('2','27','0','汽车检测与运营工程师[技能+中专]','','','','汽车检测与运营工程师[技能+中专]','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=27&id=2','0','99','1','0','admin','1364710446','1364710456');");
E_D("replace into `pd_kbxx` values('3','27','0','汽车商务与管理[2+1大中专连读]','','','','汽车商务与管理[2+1大中专连读]','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=27&id=3','0','99','1','0','admin','1364710486','1364710494');");
E_D("replace into `pd_kbxx` values('4','27','0','汽车检测与维修高级技师[实训+技能]','','','','汽车检测与维修高级技师[实训+技能]','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=27&id=4','0','99','1','0','admin','1364710506','1364710513');");
E_D("replace into `pd_kbxx` values('5','28','0','汽车4S维修高级技师[一年纯技能]','','','','汽车4S维修高级技师[一年纯技能]','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=28&id=5','0','99','1','0','admin','1364710531','1364710539');");
E_D("replace into `pd_kbxx` values('6','29','0','汽车4S维修高级技师[一年纯技能]','','','','汽车4S维修高级技师[一年纯技能]','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=29&id=6','0','99','1','0','admin','1364710556','1364710565');");
E_D("replace into `pd_kbxx` values('7','29','0','汽车维修与运营工程师[技能+中专]','','','','汽车维修与运营工程师[技能+中专]','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=29&id=7','0','99','1','0','admin','1364710583','1364710591');");

require("../../inc/footer.php");
?>