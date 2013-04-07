<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_type`;");
E_C("CREATE TABLE `pd_type` (
  `typeid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `module` char(15) NOT NULL,
  `modelid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `name` char(30) NOT NULL,
  `parentid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typedir` char(20) NOT NULL,
  `url` char(100) NOT NULL,
  `template` char(30) NOT NULL,
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`typeid`),
  KEY `module` (`module`,`parentid`,`siteid`,`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8");
E_D("replace into `pd_type` values('52','1','search','0','专题','0','special','','','4','专题');");
E_D("replace into `pd_type` values('1','1','search','1','新闻','0','','','','1','新闻模型搜索');");
E_D("replace into `pd_type` values('2','1','search','2','下载','0','','','','3','下载模型搜索');");
E_D("replace into `pd_type` values('3','1','search','3','图片','0','','','','2','图片模型搜索');");
E_D("replace into `pd_type` values('53','1','search','12','专业设置','0','','','','0','');");
E_D("replace into `pd_type` values('54','1','search','13','名师风采','0','','','','0','');");
E_D("replace into `pd_type` values('55','1','search','14','校友会','0','','','','0','');");
E_D("replace into `pd_type` values('56','1','search','15','开班信息','0','','','','0','');");
E_D("replace into `pd_type` values('57','1','search','16','商学院视频','0','','','','0','');");
E_D("replace into `pd_type` values('58','1','search','17','客服在线','0','','','','0','');");
E_D("replace into `pd_type` values('59','1','search','18','人才招聘','0','','','','0','');");
E_D("replace into `pd_type` values('60','1','search','19','合作企业','0','','','','0','');");
E_D("replace into `pd_type` values('61','1','search','20','就业明星','0','','','','0','');");

require("../../inc/footer.php");
?>