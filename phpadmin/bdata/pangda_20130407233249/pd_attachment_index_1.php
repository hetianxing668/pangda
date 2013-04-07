<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_attachment_index`;");
E_C("CREATE TABLE `pd_attachment_index` (
  `keyid` char(30) NOT NULL,
  `aid` char(10) NOT NULL,
  KEY `keyid` (`keyid`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `pd_attachment_index` values('c-36-1','2');");
E_D("replace into `pd_attachment_index` values('c-36-2','3');");
E_D("replace into `pd_attachment_index` values('c-36-3','4');");
E_D("replace into `pd_attachment_index` values('c-36-4','5');");
E_D("replace into `pd_attachment_index` values('c-36-5','6');");
E_D("replace into `pd_attachment_index` values('c-13-1','7');");

require("../../inc/footer.php");
?>