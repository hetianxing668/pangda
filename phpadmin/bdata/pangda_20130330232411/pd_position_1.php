<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_position`;");
E_C("CREATE TABLE `pd_position` (
  `posid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `modelid` smallint(5) unsigned DEFAULT '0',
  `catid` smallint(5) unsigned DEFAULT '0',
  `name` char(30) NOT NULL DEFAULT '',
  `maxnum` smallint(5) NOT NULL DEFAULT '20',
  `extention` char(100) DEFAULT NULL,
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `thumb` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`posid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `pd_position` values('1','0','0','首页焦点图推荐','20',NULL,'1','1','');");
E_D("replace into `pd_position` values('2','0','0','首页头条推荐','20',NULL,'4','1','');");
E_D("replace into `pd_position` values('13','82','0','栏目页焦点图','20',NULL,'0','1','');");
E_D("replace into `pd_position` values('5','69','0','推荐下载','20',NULL,'0','1','');");
E_D("replace into `pd_position` values('8','30','54','图片频道首页焦点图','20',NULL,'0','1','');");
E_D("replace into `pd_position` values('9','0','0','网站顶部推荐','20',NULL,'0','1','');");
E_D("replace into `pd_position` values('10','0','0','栏目首页推荐','20',NULL,'0','1','');");
E_D("replace into `pd_position` values('12','0','0','首页图片推荐','20',NULL,'0','1','');");
E_D("replace into `pd_position` values('14','0','0','视频首页焦点图','20','','0','1','');");
E_D("replace into `pd_position` values('15','0','0','视频首页头条推荐','20','','0','1','');");
E_D("replace into `pd_position` values('16','0','0','视频首页每日热点','20','','0','1','');");
E_D("replace into `pd_position` values('17','0','0','视频栏目精彩推荐','20','','0','1','');");

require("../../inc/footer.php");
?>