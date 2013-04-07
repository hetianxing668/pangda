<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_scvideo_data`;");
E_C("CREATE TABLE `pd_scvideo_data` (
  `id` mediumint(8) unsigned DEFAULT '0',
  `content` text NOT NULL,
  `readpoint` smallint(5) unsigned NOT NULL DEFAULT '0',
  `groupids_view` varchar(100) NOT NULL,
  `paginationtype` tinyint(1) NOT NULL,
  `maxcharperpage` mediumint(6) NOT NULL,
  `template` varchar(30) NOT NULL,
  `paytype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `allow_comment` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `relation` varchar(255) NOT NULL DEFAULT '',
  `videourl` varchar(255) NOT NULL DEFAULT '',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `pd_scvideo_data` values('1','梅赛德斯-奔驰 庞大汽贸集团&middot;福建戴姆勒&mdash;&mdash;北京庞大汽车','0','','0','10000','','0','1','','http://player.youku.com/player.php/sid/XMjk3ODU4ODk2/v.swf');");
E_D("replace into `pd_scvideo_data` values('2','承德庞大汽车城我的工作单位','0','','0','10000','','0','1','','http://player.youku.com/player.php/sid/XMTg5OTIwOTcy/v.swf');");
E_D("replace into `pd_scvideo_data` values('4','汽车行业世界500强日本企业考察高级研修班','0','','0','10000','','0','1','','http://player.youku.com/player.php/sid/XMzAwMDgzNDQw/v.swf');");
E_D("replace into `pd_scvideo_data` values('3','庞大集团落户沈阳大浑南 即将隆重登场','0','','0','10000','','0','1','','http://player.youku.com/player.php/sid/XMjM1NTA2OTcy/v.swf');");
E_D("replace into `pd_scvideo_data` values('5','长城汽车企业宣传片','0','','0','10000','','0','1','','http://player.youku.com/player.php/sid/XNDUwMDA0NTQ4/v.swf');");

require("../../inc/footer.php");
?>