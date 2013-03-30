<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_admin_role`;");
E_C("CREATE TABLE `pd_admin_role` (
  `roleid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `rolename` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `disabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`roleid`),
  KEY `listorder` (`listorder`),
  KEY `disabled` (`disabled`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `pd_admin_role` values('1','超级管理员','超级管理员','0','0');");
E_D("replace into `pd_admin_role` values('2','站点管理员','站点管理员','0','0');");
E_D("replace into `pd_admin_role` values('3','运营总监','运营总监','1','0');");
E_D("replace into `pd_admin_role` values('4','总编','总编','5','0');");
E_D("replace into `pd_admin_role` values('5','编辑','编辑','1','0');");
E_D("replace into `pd_admin_role` values('7','发布人员','发布人员','0','0');");

require("../../inc/footer.php");
?>