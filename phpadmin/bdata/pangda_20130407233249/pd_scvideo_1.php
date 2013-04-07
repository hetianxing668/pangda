<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_scvideo`;");
E_C("CREATE TABLE `pd_scvideo` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` char(80) NOT NULL DEFAULT '',
  `style` char(24) NOT NULL DEFAULT '',
  `thumb` char(100) NOT NULL DEFAULT '',
  `keywords` char(40) NOT NULL DEFAULT '',
  `description` char(255) NOT NULL DEFAULT '',
  `posids` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `url` char(100) NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `sysadd` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL,
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `pd_scvideo` values('1','36','0','梅赛德斯-奔驰 庞大汽贸集团·福建戴姆勒——北京庞大汽车','','http://localhost.pangda.com/uploadfile/2013/0404/20130404040416229.jpg','梅赛德斯 奔驰 庞大','梅赛德斯-奔驰 庞大汽贸集团&middot;福建戴姆勒&mdash;&mdash;北京庞大汽车','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=36&id=1','0','99','1','0','admin','1365058867','1365062659');");
E_D("replace into `pd_scvideo` values('2','36','0','承德庞大汽车城我的工作单位','','http://localhost.pangda.com/uploadfile/2013/0404/20130404040435877.jpg','梅赛德斯 奔驰 庞大','承德庞大汽车城我的工作单位','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=36&id=2','0','99','1','0','admin','1365058956','1365062679');");
E_D("replace into `pd_scvideo` values('3','36','0','庞大集团落户沈阳大浑南 即将隆重登场','','http://localhost.pangda.com/uploadfile/2013/0404/20130404040458786.jpg','庞大 集团 落户','庞大集团落户沈阳大浑南 即将隆重登场','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=36&id=3','0','99','1','0','admin','1365059009','1365062701');");
E_D("replace into `pd_scvideo` values('4','36','0','汽车行业世界500强日本企业考察高级研修班','','http://localhost.pangda.com/uploadfile/2013/0404/20130404095804790.jpg','汽车行业 世界 日本','汽车行业世界500强日本企业考察高级研修班','1','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=36&id=4','0','99','1','0','admin','1365083662','1365085563');");
E_D("replace into `pd_scvideo` values('5','36','0','长城汽车企业宣传片','','http://localhost.pangda.com/uploadfile/2013/0404/20130404100011415.jpg','长城汽车 企业宣传 片','长城汽车企业宣传片','0','http://localhost.pangda.com/index.php?m=content&c=index&a=show&catid=36&id=5','0','99','1','0','admin','1365083894','1365084014');");

require("../../inc/footer.php");
?>