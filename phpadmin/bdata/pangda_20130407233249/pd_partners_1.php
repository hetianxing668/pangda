<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_partners`;");
E_C("CREATE TABLE `pd_partners` (
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `pd_partners` values('1','38','0','奔驰','','http://localhost.pangda.com/uploadfile/2013/0401/img_company_1.jpg','奔驰','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=38&id=1','0','99','1','0','admin','1364716899','1364913454');");
E_D("replace into `pd_partners` values('2','38','0','奥迪','','http://localhost.pangda.com/uploadfile/2013/0401/img_company_2.jpg','奥迪','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=38&id=2','0','99','1','0','admin','1364716977','1364913471');");
E_D("replace into `pd_partners` values('3','38','0','阿斯顿马丁','','http://localhost.pangda.com/uploadfile/2013/0401/img_company_3.jpg','阿斯顿马丁','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=38&id=3','0','99','1','0','admin','1364717001','1364913506');");
E_D("replace into `pd_partners` values('4','38','0','巴博斯','','http://localhost.pangda.com/uploadfile/2013/0401/img_company_4.jpg','巴博斯','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=38&id=4','0','99','1','0','admin','1364717045','1364913527');");
E_D("replace into `pd_partners` values('5','38','0','雷克萨斯','','/statics/pangda/images/img_company_5.jpg','雷克萨斯','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=38&id=5','0','99','1','0','admin','1364717209','1364913556');");
E_D("replace into `pd_partners` values('6','38','0','讴歌','','http://localhost.pangda.com/uploadfile/2013/0401/img_company_6.jpg','讴歌','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=38&id=6','0','99','1','0','admin','1364717232','1364913576');");
E_D("replace into `pd_partners` values('7','38','0','捷豹','','http://localhost.pangda.com/uploadfile/2013/0401/img_company_7.jpg','捷豹','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=38&id=7','0','99','1','0','admin','1364717657','1364913592');");
E_D("replace into `pd_partners` values('8','38','0','路虎','','http://localhost.pangda.com/uploadfile/2013/0401/img_company_8.jpg','路虎','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=38&id=8','0','99','1','0','admin','1364717764','1364913607');");

require("../../inc/footer.php");
?>