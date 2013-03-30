<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_poster`;");
E_C("CREATE TABLE `pd_poster` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `name` varchar(40) NOT NULL,
  `spaceid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` varchar(10) NOT NULL,
  `setting` text NOT NULL,
  `startdate` int(10) unsigned NOT NULL DEFAULT '0',
  `enddate` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `clicks` smallint(5) unsigned NOT NULL DEFAULT '0',
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `disabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `spaceid` (`spaceid`,`siteid`,`disabled`,`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `pd_poster` values('1','1','banner','1','images','array (\n  1 => \n  array (\n    ''linkurl'' => ''http://www.phpcms.cn'',\n    ''imageurl'' => ''http://localhost.pangda.com/uploadfile/poster/2.png'',\n    ''alt'' => '''',\n  ),\n)','1285813808','1446249600','1285813833','0','2','0','0');");
E_D("replace into `pd_poster` values('2','1','phpcmsv9','2','images','array (\n  1 => \n  array (\n    ''linkurl'' => ''http://www.phpcms.cn'',\n    ''imageurl'' => ''http://localhost.pangda.com/statics/images/v9/ad_login.jpg'',\n    ''alt'' => ''phpcms专业建站系统'',\n  ),\n)','1285816298','1446249600','1285816310','0','1','0','0');");
E_D("replace into `pd_poster` values('3','1','phpcms下载推荐','3','images','array (\n  1 => \n  array (\n    ''linkurl'' => ''http://www.phpcms.cn'',\n    ''imageurl'' => ''http://localhost.pangda.com/uploadfile/poster/3.png'',\n    ''alt'' => ''phpcms官方'',\n  ),\n)','1286504815','1446249600','1286504865','0','1','0','0');");
E_D("replace into `pd_poster` values('4','1','phpcms广告','4','images','array (\n  1 => \n  array (\n    ''linkurl'' => ''http://www.phpcms.cn'',\n    ''imageurl'' => ''http://localhost.pangda.com/uploadfile/poster/4.gif'',\n    ''alt'' => ''phpcms官方'',\n  ),\n)','1286505141','1446249600','1286505178','0','0','0','0');");
E_D("replace into `pd_poster` values('5','1','phpcms下载','5','images','array (\n  1 => \n  array (\n    ''linkurl'' => ''http://www.phpcms.cn'',\n    ''imageurl'' => ''http://localhost.pangda.com/uploadfile/poster/5.gif'',\n    ''alt'' => ''官方'',\n  ),\n)','1286509363','1446249600','1286509401','0','0','0','0');");
E_D("replace into `pd_poster` values('6','1','phpcms下载推荐1','6','images','array (\n  1 => \n  array (\n    ''linkurl'' => ''http://www.phpcms.cn'',\n    ''imageurl'' => ''http://localhost.pangda.com/uploadfile/poster/5.gif'',\n    ''alt'' => ''官方'',\n  ),\n)','1286510183','1446249600','1286510227','0','0','0','0');");
E_D("replace into `pd_poster` values('7','1','phpcms下载详情','7','images','array (\n  1 => \n  array (\n    ''linkurl'' => ''http://www.phpcms.cn'',\n    ''imageurl'' => ''http://localhost.pangda.com/uploadfile/poster/5.gif'',\n    ''alt'' => ''官方'',\n  ),\n)','1286510314','1446249600','1286510341','0','0','0','0');");
E_D("replace into `pd_poster` values('8','1','phpcms下载页','8','images','array (\n  1 => \n  array (\n    ''linkurl'' => ''http://www.phpcms.cn'',\n    ''imageurl'' => ''http://localhost.pangda.com/uploadfile/poster/1.jpg'',\n    ''alt'' => ''官方站'',\n  ),\n)','1286522084','1446249600','1286522125','0','0','0','0');");
E_D("replace into `pd_poster` values('9','1','phpcms v9广告','9','images','array (\n  1 => \n  array (\n    ''linkurl'' => ''http://www.phpcms.cn'',\n    ''imageurl'' => ''http://localhost.pangda.com/uploadfile/poster/4.gif'',\n    ''alt'' => '''',\n  ),\n)','1287041759','1446249600','1287041804','0','0','0','0');");
E_D("replace into `pd_poster` values('10','1','phpcms','10','images','array (\n  1 => \n  array (\n    ''linkurl'' => ''http://www.phpcms.cn'',\n    ''imageurl'' => ''http://localhost.pangda.com/uploadfile/poster/6.jpg'',\n    ''alt'' => ''phpcms官方'',\n  ),\n)','1289270509','1446249600','1289270541','1','0','0','0');");

require("../../inc/footer.php");
?>