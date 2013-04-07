<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_picture`;");
E_C("CREATE TABLE `pd_picture` (
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `pd_picture` values('1','10','0','教学楼一角','','http://localhost.pangda.com/uploadfile/2013/0401/img_school_1.jpg','教学楼 一角','校园一角','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=10&id=1','0','99','1','0','admin','1364737075','1364912697');");
E_D("replace into `pd_picture` values('2','10','0','展厅一角','','http://localhost.pangda.com/uploadfile/2013/0401/img_school_2.jpg','展厅 一角','展厅一角','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=10&id=2','0','99','1','0','admin','1364737158','1364912687');");
E_D("replace into `pd_picture` values('3','10','0','校园小花园','','http://localhost.pangda.com/uploadfile/2013/0401/img_school_3.jpg','校园 小 花园','校园小花园','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=10&id=3','0','99','1','0','admin','1364737217','1364912677');");
E_D("replace into `pd_picture` values('4','10','0','理论授课教室','','http://localhost.pangda.com/uploadfile/2013/0401/img_school_4.jpg','理论 授课 教室','理论授课教室','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=10&id=4','0','99','1','0','admin','1364737291','1364912667');");
E_D("replace into `pd_picture` values('5','10','0','理论授课教室','','http://localhost.pangda.com/uploadfile/2013/0401/img_school_5.jpg','理论 授课 教室','理论授课教室','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=10&id=5','0','99','1','0','admin','1364737338','1364827186');");

require("../../inc/footer.php");
?>