<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_teachers`;");
E_C("CREATE TABLE `pd_teachers` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` varchar(20) NOT NULL DEFAULT '',
  `style` char(24) NOT NULL DEFAULT '',
  `thumb` char(100) NOT NULL DEFAULT '',
  `keywords` char(40) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `pd_teachers` values('1','8','0','曹伟鹏','','http://localhost.pangda.com/uploadfile/2013/0401/img_teacher_1.jpg','','汽车基础底盘','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=8&id=1','0','99','1','0','admin','1364736504','1364831752');");
E_D("replace into `pd_teachers` values('2','8','0','付文立','','http://localhost.pangda.com/uploadfile/2013/0401/img_teacher_2.jpg','','汽车美容','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=8&id=2','0','99','1','0','admin','1364736537','1364831772');");

require("../../inc/footer.php");
?>