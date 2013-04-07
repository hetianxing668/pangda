<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_job_data`;");
E_C("CREATE TABLE `pd_job_data` (
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
  `gwzz` mediumtext NOT NULL,
  `rzyq` mediumtext NOT NULL,
  `num` varchar(255) NOT NULL DEFAULT '',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `pd_job_data` values('1','','0','','0','10000','','0','1','','<p>1、负责区域渠道的开拓，实现公司培训产品的高校推广；</p>\r\n<p>2、策划和组织相关市场活动。</p>\r\n<p>3、负责院校合作商务谈判签约</p>\r\n<p>4、负责院校合作招生宣传</p>\r\n','<p>1、大专以上学历，具有3年以上市场及销售工作经验；</p>\r\n<p>2、具备一定的业务拓展能力,负责区域市场的开发及渠道维护；</p>\r\n<p>3、表达能力强，能进行公开课的演讲；</p>\r\n<p>4、具有亲和力，积极主动的工作态度、乐于学习；</p>\r\n<p>4、有教育培训咨询、项目推广相关经历者优先；</p>\r\n<p>5、能够适应经常出差。</p>\r\n','10');");
E_D("replace into `pd_job_data` values('2','','0','','0','10000','','0','1','','<p>1、课程的研发和优化提升，教案的整理和编写；</p>\r\n<p>2、负责课程实施效果的整体评估，并根据评估结果提出课程调整改进的建议和方案。</p>\r\n<p>3、具备敏锐的商业信息的搜集与处理能力，参与市场上同类客户的调研工作，分析竞争对手情况，不断改进课程内容设计。</p>\r\n<p>4、开发及整合教师资源，提升讲师课程及学员之间的契合度。</p>\r\n<p>5、使公司课程特色性强，体系完整并具有较强的逻辑性，增加课程表现形式及差异性。</p>\r\n<p>6、开展教学研究活动，随时关注国内外高端培训市场动向，主导新课程的可行性研究工作，不断更新教学内容，改进教学方法。</p>\r\n','<p>1、硕士以上学历，三年以上课程研发领域工作经验；</p>\r\n<p>2 、具备丰富的课程开发经验，熟悉课程开发和培训实施流程；</p>\r\n<p>3 、深入了解国际教育项目的教学标准和课程评价标准；</p>\r\n<p>4 、善于沟通合作，学习能力强，有创新意识；</p>\r\n<p>5 、热爱教育培训行业，具有高度的工作热情、强烈的责任感和敬业精神；</p>\r\n<p>6 、具有国内外大中型教育培训企业工作经验，了解培训和课程开发工作实际操作流程者优先；</p>\r\n<p>7 、具有外资机构培训经验者优先,，有混合式课程开发和实施经验者优先；</p>\r\n<p>8 、精通德语、有汽车教育行业相关工作经验者优先。</p>\r\n','10');");
E_D("replace into `pd_job_data` values('3','','0','','0','10000','','0','1','','<p>1、负责整体教学质量的监控，教学进度的制定、推进、跟踪和协调；</p>\r\n<p>2、负责审核教学计划并监督实施，课程建设评估，组织教学绩效考核；</p>\r\n<p>3、负责教师授课效果评估和教学反馈工作的统计；</p>\r\n<p>4、负责对每学期的教学效果进行测评，提出提高方案。</p>\r\n','<p>1、大学以上学历，教育学专业或师范学专业，有相关工作经验；</p>\r\n<p>2、身体健康，热爱教育事业，敬业责任感强；</p>\r\n<p>3、有较强的教学组织管理能力，良好的人际协调和沟通能力和较强的责任心；</p>\r\n<p>4、具有创新能力和团队凝聚能力；5、具有教学经验和从事过教学管理工作者优先。</p>\r\n','1');");
E_D("replace into `pd_job_data` values('4','','0','','0','10000','','0','1','','1、主讲奔驰车型构造、原理、及检测维修技术的实践课程；<br />\r\n2、组织安排学生的实训课，指导学生规范操作。','1、汽车检测与维修、汽车运用工程专业本科以上学历；<br />\r\n2、具备实际维修能力---汽车发动机、变速器等总成的修理技能；日常保养项目精细作业技能。<br />\r\n3、具备培训技能---课堂授课技能、指导维修培训技能。<br />\r\n4、具备设备操作技能---汽车检测仪使用技能、车间维修设备使用技能;<br />\r\n5、八年以上汽车维修工作经验；<br />\r\n6、普通话标准，有强烈的责任心及敬业精神，热爱教育事业。<br />\r\n','若干');");
E_D("replace into `pd_job_data` values('5','','0','','0','10000','','0','1','','1、主讲宝马车型构造、原理、及检测维修技术的实践课程；<br />\r\n2、组织安排学生的实训课，指导学生规范操作。<br />\r\n','1、汽车检测与维修、汽车运用工程专业本科以上学历；<br />\r\n2、具备实际维修能力---汽车发动机、变速器等总成的修理技能；日常保养项目精细作业技能。<br />\r\n3、具备培训技能---课堂授课技能、指导维修培训技能。<br />\r\n4、具备设备操作技能---汽车检测仪使用技能、车间维修设备使用技能<br />\r\n5、八年以上汽车维修工作经验；<br />\r\n6、普通话标准，有强烈的责任心及敬业精神，热爱教育事业<br />\r\n','若干');");
E_D("replace into `pd_job_data` values('6','','0','','0','10000','','0','1','','1、主讲奥迪车型构造、原理、及检测维修技术的实践课程；<br />\r\n2、组织安排学生的实训课，指导学生规范操作。<br />\r\n','1、汽车检测与维修、汽车运用工程专业本科以上学历；<br />\r\n2、具备实际维修能力---汽车发动机、变速器等总成的修理技能；日常保养项目精细作业技能。<br />\r\n3、具备培训技能---课堂授课技能、指导维修培训技能。<br />\r\n4、具备设备操作技能---汽车检测仪使用技能、车间维修设备使用技能<br />\r\n5、八年以上汽车维修工作经验；<br />\r\n6、普通话标准，有强烈的责任心及敬业精神，热爱教育事业。<br />\r\n','若干');");
E_D("replace into `pd_job_data` values('7','','0','','0','10000','','0','1','','1、主讲大众车型构造、原理、及检测维修技术的实践课程；<br />\r\n2、组织安排学生的实训课，指导学生规范操作。<br />\r\n','1、汽车检测与维修、汽车运用工程专业本科以上学历；<br />\r\n2、具备实际维修能力---汽车发动机、变速器等总成的修理技能；日常保养项目精细作业技能。<br />\r\n3、具备培训技能---课堂授课技能、指导维修培训技能。<br />\r\n4、具备设备操作技能---汽车检测仪使用技能、车间维修设备使用技能<br />\r\n5、八年以上汽车维修工作经验；<br />\r\n6、普通话标准，有强烈的责任心及敬业精神，热爱教育事业。<br />\r\n','若干');");
E_D("replace into `pd_job_data` values('8','','0','','0','10000','','0','1','','1、为公司德方专家在国内巡讲，督导工作做随行翻译。<br />\r\n2、德国教材翻译','1、有职业教育或与汽车相关工作经验能够适应出差；<br />\r\n2、本科及以上学历，德语专业八级；<br />\r\n3 、能独立完成专业笔译及口译工作，具有较强的自我学习能力；<br />\r\n4 、具备良好的文字表达及沟通合作能力；<br />\r\n5 、具有国外留学经历或工作经验者优先 。<br />\r\n','2');");
E_D("replace into `pd_job_data` values('9','','0','','0','10000','','0','1','','1、翻译英语汽车专业教材及外国专家随行翻译。<br />\r\n2、英语教材翻译','1 、有相关汽车行业英语翻译工作经验；<br />\r\n2、大学本科或以上学历，英语专业八级；<br />\r\n3、具备良好的文字表达及沟通合作能力；<br />\r\n4、能够适应经常出差<br />\r\n','2');");

require("../../inc/footer.php");
?>