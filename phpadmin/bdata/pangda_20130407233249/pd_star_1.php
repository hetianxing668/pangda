<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_star`;");
E_C("CREATE TABLE `pd_star` (
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `pd_star` values('1','39','0','恭喜4S应用专业 李某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=1','0','99','1','0','admin','1365087492','1365087509');");
E_D("replace into `pd_star` values('2','39','0','恭喜4S应用专业 王某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=2','0','99','1','0','admin','1365087532','1365087541');");
E_D("replace into `pd_star` values('3','39','0','恭喜4S应用专业 张某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=3','0','99','1','0','admin','1365087546','1365087553');");
E_D("replace into `pd_star` values('4','39','0','恭喜4S应用专业 赵某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=4','0','99','1','0','admin','1365087557','1365087565');");
E_D("replace into `pd_star` values('5','39','0','恭喜4S应用专业 钱某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=5','0','99','1','0','admin','1365087568','1365087577');");
E_D("replace into `pd_star` values('6','39','0','恭喜4S应用专业 孙某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=6','0','99','1','0','admin','1365087579','1365087587');");
E_D("replace into `pd_star` values('7','39','0','恭喜4S应用专业 于某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=7','0','99','1','0','admin','1365087589','1365087597');");
E_D("replace into `pd_star` values('8','39','0','恭喜4S应用专业 谭某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=8','0','99','1','0','admin','1365087599','1365087608');");
E_D("replace into `pd_star` values('9','39','0','恭喜4S应用专业 赖某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=9','0','99','1','0','admin','1365087610','1365087617');");
E_D("replace into `pd_star` values('10','39','0','恭喜4S应用专业 吴某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=10','0','99','1','0','admin','1365087619','1365087625');");
E_D("replace into `pd_star` values('11','39','0','恭喜4S应用专业 朱某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=11','0','99','1','0','admin','1365087627','1365087636');");
E_D("replace into `pd_star` values('12','39','0','恭喜4S应用专业 陈某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=12','0','99','1','0','admin','1365087638','1365087644');");
E_D("replace into `pd_star` values('13','39','0','恭喜4S应用专业 涂某某 成功就业','','','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=39&id=13','0','99','1','0','admin','1365087647','1365087656');");

require("../../inc/footer.php");
?>