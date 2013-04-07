<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_form_zxbm`;");
E_C("CREATE TABLE `pd_form_zxbm` (
  `dataid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `userid` mediumint(8) unsigned NOT NULL,
  `username` varchar(20) NOT NULL,
  `datetime` int(10) unsigned NOT NULL,
  `ip` char(15) NOT NULL,
  `uname` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(4) NOT NULL DEFAULT '0',
  `hometel` varchar(255) NOT NULL DEFAULT '',
  `zhuanye` tinyint(4) NOT NULL DEFAULT '0',
  `qq` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `beizhu` mediumtext NOT NULL,
  PRIMARY KEY (`dataid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `pd_form_zxbm` values('1','0','','1365260783','127.0.0.1','张二小','1','15215326852','3','53268528','53268528@qq.com','重庆市九龙坡区石桥铺一城精英国际','就读贵校有哪些要求');");
E_D("replace into `pd_form_zxbm` values('2','0','','1365261262','127.0.0.1','张瑞佳','0','15215326852','5','53268528','53268528@qq.com','重庆市九龙坡区石桥铺一城精英国际','贵校专业靠谱么？');");

require("../../inc/footer.php");
?>