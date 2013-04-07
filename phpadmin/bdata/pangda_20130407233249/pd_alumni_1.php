<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_alumni`;");
E_C("CREATE TABLE `pd_alumni` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` varchar(80) NOT NULL DEFAULT '',
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `pd_alumni` values('1','37','0','李令涛','','http://localhost.pangda.com/uploadfile/2013/0401/img_student_1.jpg','','洗洗就发汽车美容护理会所','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=37&id=1','0','99','1','0','admin','1364736829','1364832058');");
E_D("replace into `pd_alumni` values('2','37','0','张雪松','','http://localhost.pangda.com/uploadfile/2013/0401/img_student_2.jpg','','洗洗就发汽车美容护理会所','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=37&id=2','0','99','1','0','admin','1364736992','1364832040');");

require("../../inc/footer.php");
?>