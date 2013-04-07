<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_major`;");
E_C("CREATE TABLE `pd_major` (
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
E_D("replace into `pd_major` values('1','6','0','汽车营销方向','','http://localhost.pangda.com/uploadfile/2013/0404/img_zysz_01.jpg','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=6&id=1','0','99','1','0','admin','1364713806','1365153150');");
E_D("replace into `pd_major` values('2','6','0','汽车售后方向','','http://localhost.pangda.com/uploadfile/2013/0404/img_zysz_02.jpg','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=6&id=2','0','99','1','0','admin','1364713877','1365153182');");
E_D("replace into `pd_major` values('3','6','0','钣金喷漆技师方向','','http://localhost.pangda.com/uploadfile/2013/0404/img_zysz_01.jpg','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=6&id=3','0','99','1','0','admin','1364713925','1365153197');");
E_D("replace into `pd_major` values('4','6','0','汽车美容技师方向','','http://localhost.pangda.com/uploadfile/2013/0404/img_zysz_02.jpg','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=6&id=4','0','99','1','0','admin','1364713970','1365153211');");
E_D("replace into `pd_major` values('5','6','0','汽车4S店经营管理方向','','http://localhost.pangda.com/uploadfile/2013/0404/img_zysz_01.jpg','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=6&id=5','0','99','1','0','admin','1364714001','1365153224');");
E_D("replace into `pd_major` values('6','6','0','二手车经营师方向','','http://localhost.pangda.com/uploadfile/2013/0404/img_zysz_02.jpg','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=6&id=6','0','99','1','0','admin','1364714050','1365153240');");
E_D("replace into `pd_major` values('7','6','0','汽车保险理赔技师方向','','http://localhost.pangda.com/uploadfile/2013/0404/img_zysz_01.jpg','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=6&id=7','0','99','1','0','admin','1364714319','1365153253');");
E_D("replace into `pd_major` values('8','6','0','汽车检测与维修技师方向','','http://localhost.pangda.com/uploadfile/2013/0404/img_zysz_02.jpg','','','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=6&id=8','0','99','1','0','admin','1364714373','1365153266');");

require("../../inc/footer.php");
?>