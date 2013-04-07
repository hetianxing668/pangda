<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_job`;");
E_C("CREATE TABLE `pd_job` (
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `pd_job` values('1','20','0','院校合作部---项目主管','','','院校 合作 项目','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=20&id=1','0','99','1','0','admin','1365132547','1365132599');");
E_D("replace into `pd_job` values('2','20','0','教学管理部——课程研发师','','','教学管理 —— 课程','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=20&id=2','0','99','1','0','admin','1365132632','1365132673');");
E_D("replace into `pd_job` values('3','20','0','学术质量部——教学主管','','','学术 质量 ——','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=20&id=3','0','99','1','0','admin','1365132680','1365132711');");
E_D("replace into `pd_job` values('4','20','0','教学管理部——资深讲师(奔驰)','','','教学管理 —— 资深','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=20&id=4','0','99','1','0','admin','1365132847','1365132895');");
E_D("replace into `pd_job` values('5','20','0','资深讲师(宝马)','','','资深 讲师 宝马','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=20&id=5','0','99','1','0','admin','1365132898','1365132942');");
E_D("replace into `pd_job` values('6','20','0','资深讲师（奥迪）','','','资深 讲师 奥迪','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=20&id=6','0','99','1','0','admin','1365132944','1365132986');");
E_D("replace into `pd_job` values('7','20','0','资深讲师（大众）','','','资深 讲师 （','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=20&id=7','0','99','1','0','admin','1365132989','1365133029');");
E_D("replace into `pd_job` values('8','20','0','行政部----德语翻译','','','行政 ---- 德语','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=20&id=8','0','99','1','0','admin','1365133031','1365133072');");
E_D("replace into `pd_job` values('9','20','0','英语翻译','','','英语翻译','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=20&id=9','0','99','1','0','admin','1365133074','1365133108');");

require("../../inc/footer.php");
?>