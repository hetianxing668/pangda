<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_page`;");
E_C("CREATE TABLE `pd_page` (
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `title` varchar(160) NOT NULL,
  `style` varchar(24) NOT NULL,
  `keywords` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `template` varchar(30) NOT NULL,
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `catid` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `pd_page` values('16','庞大荣誉',';','庞大 荣誉','<img alt=\"\" src=\"/statics/pangda/images/img_honor_01.jpg\" /><br />\r\n<img alt=\"\" src=\"/statics/pangda/images/img_honor_02.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_honor_03.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_honor_04.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_honor_05.jpg\" style=\"width: 742px; height: 193px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_honor_06.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_honor_07.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_honor_08.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_honor_09.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_honor_10.jpg\" />','','0');");
E_D("replace into `pd_page` values('15','学校概况',';','学校 概况','<img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_01.jpg\" style=\"width: 750px; height: 196px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_02.jpg\" style=\"width: 750px; height: 195px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_03.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_04.jpg\" style=\"width: 750px; height: 195px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_05.jpg\" style=\"width: 750px; height: 196px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_06.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_07.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_08.jpg\" style=\"width: 750px; height: 196px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_09.jpg\" style=\"width: 750px; height: 195px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_10.jpg\" style=\"width: 750px; height: 196px;\" />','','0');");
E_D("replace into `pd_page` values('17','领导关怀',';','领导 关怀','领导关怀','','0');");
E_D("replace into `pd_page` values('18','庞大4S店图片',';','庞大 4S 店','庞大4S店图片','','0');");
E_D("replace into `pd_page` values('7','就业分配',';','就业 分配','<img alt=\"\" height=\"616\" src=\"http://localhost.pangda.com/uploadfile/2013/0331/20130331113003776.jpg\" width=\"720\" />','','0');");
E_D("replace into `pd_page` values('19','庞大汽车产业文化园',';','庞大 汽车产业 文化园','庞大汽车产业文化园','','0');");
E_D("replace into `pd_page` values('25','关于我们',';','关于我们','庞大中锐汽车学院是庞大汽贸集团与中锐教育集团携手打造的国际化、现代化、企业化的汽车服务人才培养基地，实施订单招生、定向培养、定岗就业，为庞大汽贸集团等国内大型汽车经销商集团','','0');");
E_D("replace into `pd_page` values('43','高中生就业解决方案',';','高中生 就业 解决方案','<span id=\"current_pos\"><span id=\"current_pos_attr\">高中生就业解决方案</span></span>','','0');");
E_D("replace into `pd_page` values('1','学校概况',';','学校 概况','<img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_01.jpg\" style=\"width: 750px; height: 196px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_02.jpg\" style=\"width: 750px; height: 195px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_03.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_04.jpg\" style=\"width: 750px; height: 195px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_05.jpg\" style=\"width: 750px; height: 196px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_06.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_07.jpg\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_08.jpg\" style=\"width: 750px; height: 196px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_09.jpg\" style=\"width: 750px; height: 195px;\" /><img alt=\"\" src=\"/statics/pangda/images/img_gaikuang_10.jpg\" style=\"width: 750px; height: 196px;\" />','','0');");
E_D("replace into `pd_page` values('44','中职生就业成才计划',';','中职 就业 成才','中职生就业成才计划','','0');");
E_D("replace into `pd_page` values('45','大学生就业解决方案',';','大学生 就业 解决方案','大学生就业解决方案','','0');");
E_D("replace into `pd_page` values('46','在职人员充电解决方案',';','在职人员 充电 解决方案','在职人员充电解决方案','','0');");
E_D("replace into `pd_page` values('47','学历自考就业解决方案',';','学历 自考 就业','学历自考就业解决方案','','0');");

require("../../inc/footer.php");
?>