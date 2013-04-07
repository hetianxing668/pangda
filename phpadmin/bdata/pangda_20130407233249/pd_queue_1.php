<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_queue`;");
E_C("CREATE TABLE `pd_queue` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` char(5) DEFAULT NULL,
  `siteid` smallint(5) unsigned DEFAULT '0',
  `path` varchar(100) DEFAULT NULL,
  `status1` tinyint(1) DEFAULT '0',
  `status2` tinyint(1) DEFAULT '0',
  `status3` tinyint(1) DEFAULT '0',
  `status4` tinyint(1) DEFAULT '0',
  `times` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `siteid` (`siteid`),
  KEY `times` (`times`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `pd_queue` values('15','add','1','/html/about/culture/index.html','0','0','0','0','1365259584');");
E_D("replace into `pd_queue` values('14','add','1','/html/about/jyfp/index.html','0','0','0','0','1365259584');");
E_D("replace into `pd_queue` values('13','add','1','/html/about/4s/index.html','0','0','0','0','1365259583');");
E_D("replace into `pd_queue` values('12','add','1','/html/about/care/index.html','0','0','0','0','1365259583');");
E_D("replace into `pd_queue` values('11','add','1','/html/about/honor/index.html','0','0','0','0','1365259582');");
E_D("replace into `pd_queue` values('10','add','1','/html//about/index.html','0','0','0','0','1365259581');");
E_D("replace into `pd_queue` values('9','edit','1','/index.html','0','0','0','0','1365154189');");
E_D("replace into `pd_queue` values('16','add','1','/html/about/gywm/index.html','0','0','0','0','1365259585');");
E_D("replace into `pd_queue` values('17','add','1','/html//baoming/index.html','0','0','0','0','1365261207');");

require("../../inc/footer.php");
?>