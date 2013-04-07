<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_urlrule`;");
E_C("CREATE TABLE `pd_urlrule` (
  `urlruleid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(15) NOT NULL,
  `file` varchar(20) NOT NULL,
  `ishtml` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `urlrule` varchar(255) NOT NULL,
  `example` varchar(255) NOT NULL,
  PRIMARY KEY (`urlruleid`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8");
E_D("replace into `pd_urlrule` values('1','content','category','0','{\$categorydir}{\$catdir}/index.html|{\$categorydir}{\$catdir}/{\$page}.html','news/china/1000.html');");
E_D("replace into `pd_urlrule` values('6','content','category','0','index.php?m=content&c=index&a=lists&catid={\$catid}|index.php?m=content&c=index&a=lists&catid={\$catid}&page={\$page}','index.php?m=content&c=index&a=lists&catid=1&page=1');");
E_D("replace into `pd_urlrule` values('11','content','show','0','{\$year}/{\$catdir}_{\$month}{\$day}/{\$id}.html|{\$year}/{\$catdir}_{\$month}{\$day}/{\$id}_{\$page}.html','2010/catdir_0720/1_2.html');");
E_D("replace into `pd_urlrule` values('12','content','show','0','{\$categorydir}{\$catdir}/{\$year}/{\$month}{\$day}/{\$id}.html|{\$categorydir}{\$catdir}/{\$year}/{\$month}{\$day}/{\$id}_{\$page}.html','it/product/2010/0720/1_2.html');");
E_D("replace into `pd_urlrule` values('16','content','show','0','index.php?m=content&c=index&a=show&catid={\$catid}&id={\$id}|index.php?m=content&c=index&a=show&catid={\$catid}&id={\$id}&page={\$page}','index.php?m=content&c=index&a=show&catid=1&id=1');");
E_D("replace into `pd_urlrule` values('17','content','show','0','show-{\$catid}-{\$id}-{\$page}.html','show-1-2-1.html');");
E_D("replace into `pd_urlrule` values('18','content','show','0','content-{\$catid}-{\$id}-{\$page}.html','content-1-2-1.html');");
E_D("replace into `pd_urlrule` values('30','content','category','0','list-{\$catid}-{\$page}.html','list-1-1.html');");
E_D("replace into `pd_urlrule` values('31','content','show','1','{\$catdir}/{\$catid}-{\$id}-{\$page}.html','news/1-2-1.html');");
E_D("replace into `pd_urlrule` values('32','content','category','1','{\$catdir}/index.html|{\$catdir}/list-{\$catdir}-{\$page}.html','news/list-news-1.html');");
E_D("replace into `pd_urlrule` values('33','content','category','1','{\$categorydir}{\$catdir}/index.html','/page');");

require("../../inc/footer.php");
?>