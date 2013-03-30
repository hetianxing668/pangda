<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_session`;");
E_C("CREATE TABLE `pd_session` (
  `sessionid` char(32) NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL,
  `lastvisit` int(10) unsigned NOT NULL DEFAULT '0',
  `roleid` tinyint(3) unsigned DEFAULT '0',
  `groupid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `m` char(20) NOT NULL,
  `c` char(20) NOT NULL,
  `a` char(20) NOT NULL,
  `data` char(255) NOT NULL,
  PRIMARY KEY (`sessionid`),
  KEY `lastvisit` (`lastvisit`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `pd_session` values('99291bc4a657374c92e0734111e93bbd','1','127.0.0.1','1364659105','1','0','admin','index','public_session_life','code|s:4:\"fhls\";userid|s:1:\"1\";roleid|s:1:\"1\";pc_hash|s:6:\"xRMUbT\";lock_screen|i:0;');");
E_D("replace into `pd_session` values('9e7265e71f12c8708a8c54c207e93b8a','1','127.0.0.1','1364658346','1','0','content','content','add','code|s:4:\"unvn\";userid|s:1:\"1\";roleid|s:1:\"1\";pc_hash|s:6:\"5TUXWW\";lock_screen|i:0;');");

require("../../inc/footer.php");
?>