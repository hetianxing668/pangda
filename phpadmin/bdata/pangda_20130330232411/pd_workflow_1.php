<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_workflow`;");
E_C("CREATE TABLE `pd_workflow` (
  `workflowid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `steps` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `workname` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `setting` text NOT NULL,
  `flag` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`workflowid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `pd_workflow` values('1','1','1','一级审核','审核一次','','0');");
E_D("replace into `pd_workflow` values('2','1','2','二级审核','审核两次','','0');");
E_D("replace into `pd_workflow` values('3','1','3','三级审核','审核三次','','0');");
E_D("replace into `pd_workflow` values('4','1','4','四级审核','四级审核','','0');");

require("../../inc/footer.php");
?>