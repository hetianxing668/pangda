<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_attachment`;");
E_C("CREATE TABLE `pd_attachment` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module` char(15) NOT NULL,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filename` char(50) NOT NULL,
  `filepath` char(200) NOT NULL,
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `fileext` char(10) NOT NULL,
  `isimage` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isthumb` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `uploadtime` int(10) unsigned NOT NULL DEFAULT '0',
  `uploadip` char(15) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `authcode` char(32) NOT NULL,
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `authcode` (`authcode`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `pd_attachment` values('1','content','0','chinamap.jpg','2013/0331/20130331113003776.jpg','181068','jpg','1','0','0','1','1364743802','127.0.0.1','0','152fa4e4cc736c9cf7b02cd1fc73814e','1');");
E_D("replace into `pd_attachment` values('2','content','36','video_03.jpg','2013/0404/20130404040416229.jpg','48818','jpg','1','0','0','1','1365062655','127.0.0.1','1','72def17f436a15e27321abd78c32cced','1');");
E_D("replace into `pd_attachment` values('3','content','36','video_02.jpg','2013/0404/20130404040435877.jpg','36746','jpg','1','0','0','1','1365062675','127.0.0.1','1','00838f7d109c11ac2867e0e257ad6da1','1');");
E_D("replace into `pd_attachment` values('4','content','36','video_01.jpg','2013/0404/20130404040458786.jpg','48948','jpg','1','0','0','1','1365062698','127.0.0.1','1','c1988841d89013915b009e57f4204ad3','1');");
E_D("replace into `pd_attachment` values('5','content','36','video_04.jpg','2013/0404/20130404095804790.jpg','36122','jpg','1','0','0','1','1365083884','127.0.0.1','1','f1d02c302071f7e302d561e711073088','1');");
E_D("replace into `pd_attachment` values('6','content','36','video_05.jpg','2013/0404/20130404100011415.jpg','42629','jpg','1','0','0','1','1365084011','127.0.0.1','1','77ab07ed10c5cc57f06d8a5897f09a0c','1');");
E_D("replace into `pd_attachment` values('7','content','13','guangxirenwen.rar','2013/0405/20130405052925754.rar','6318','rar','0','0','0','1','1365154165','127.0.0.1','1','49939079241235d6306c12caa4c24098','1');");

require("../../inc/footer.php");
?>