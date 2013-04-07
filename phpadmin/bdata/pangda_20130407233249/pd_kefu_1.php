<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_kefu`;");
E_C("CREATE TABLE `pd_kefu` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `pd_kefu` values('1','41','0','庞锐商学院学费','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=41&id=1','0','99','1','0','admin','1364830031','1364831147');");
E_D("replace into `pd_kefu` values('2','41','0','庞锐商学院课程','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=41&id=2','0','99','1','0','admin','1364830084','1364831177');");
E_D("replace into `pd_kefu` values('3','41','0','庞锐商学院就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=41&id=3','0','99','1','0','admin','1364830589','1364831200');");
E_D("replace into `pd_kefu` values('4','41','0','庞锐商学院师资','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=41&id=4','0','99','1','0','admin','1364830605','1364831220');");
E_D("replace into `pd_kefu` values('5','41','0','庞锐商学院认证','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=41&id=5','0','99','1','0','admin','1364830616','1364831243');");

require("../../inc/footer.php");
?>