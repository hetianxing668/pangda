<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_position_data`;");
E_C("CREATE TABLE `pd_position_data` (
  `id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `posid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `module` char(20) DEFAULT NULL,
  `modelid` smallint(6) unsigned DEFAULT '0',
  `thumb` tinyint(1) NOT NULL DEFAULT '0',
  `data` mediumtext,
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '1',
  `listorder` mediumint(8) DEFAULT '0',
  `expiration` int(10) NOT NULL,
  `extention` char(30) DEFAULT NULL,
  `synedit` tinyint(1) DEFAULT '0',
  KEY `posid` (`posid`),
  KEY `listorder` (`listorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `pd_position_data` values('120','22','2','content','1','1','array (\n  ''title'' => ''【爱哈密网】山东万通：学习为就业，就业靠技能'',\n  ''description'' => '' 如今，随着就业压力的逐渐增大，结构性供需矛盾的现象明显。各地纷纷采取措施，解决就业供需问题。多地为促进求职者就业，纷纷进行就业...'',\n  ''thumb'' => ''uploadfile/2013/0330/22-13021ZR249591.jpg'',\n  ''inputtime'' => ''1364658120'',\n  ''style'' => '''',\n)','1','120','0',NULL,'0');");
E_D("replace into `pd_position_data` values('119','22','2','content','1','1','array (\n  ''title'' => ''国内顶级汽修专家阚有波专场讲座即将开启'',\n  ''description'' => ''\r\n 山东万通汽修学校作为汽修职业教育的领航者，一直注重培养实用型汽修专业人才，为鼓励万通学子努力学习，促进万通学子与汽修业界名人零...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-13022209450Y00.jpg'',\n  ''inputtime'' => ''1364658120'',\n  ''style'' => '''',\n)','1','119','0',NULL,'0');");
E_D("replace into `pd_position_data` values('118','22','2','content','1','1','array (\n  ''title'' => ''奋斗人生，因梦想而精彩'',\n  ''description'' => ''\n\n 每一个人都渴望改变自己，可是更多的人却让这种想法夭折在了路上，没有为了落实自己的梦想而去坚持、去努力、去奋斗。《城市，有我奋斗...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-13021ZRG0c6.jpg'',\n  ''style'' => '''',\n)','1','118','0',NULL,'0');");
E_D("replace into `pd_position_data` values('117','22','2','content','1','1','array (\n  ''title'' => ''四新特色之新理念：以生为本促发展'',\n  ''description'' => ''\n\n\n\n\n 万通汽修教育新专业紧紧围绕全面施行分层教育、依据特点因材施教、循序渐进阶段达标、实训实战工学结合这四个全新理念系统全面的开...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-13021FR003X1.jpg'',\n  ''style'' => '''',\n)','1','117','0',NULL,'0');");
E_D("replace into `pd_position_data` values('116','22','2','content','1','1','array (\n  ''title'' => ''汽修大师巡讲万通 行业盛宴即将开启'',\n  ''description'' => ''\n\n\n 创新是学校发展的源动力，万通汽修教育为与国际汽车发展前沿技术接轨，提升办学水平和教学质量，每年都会邀请国内顶级汽修专家在万通...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-130222164254E1.jpg'',\n  ''style'' => '''',\n)','1','116','0',NULL,'0');");
E_D("replace into `pd_position_data` values('115','22','2','content','1','1','array (\n  ''title'' => ''《陈凌澜的突围》：青春领航 逐梦未来'',\n  ''description'' => ''\n\n 在大多数人的心目中，最奢侈也是最美好的梦想，便是周游世界。陈凌澜，他实现了。小时候，对世界的认知还很懵懂的陈凌澜在地球仪上展开...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-13021FRIBD.jpg'',\n  ''style'' => '''',\n)','1','115','0',NULL,'0');");
E_D("replace into `pd_position_data` values('200','23','2','content','1','1','array (\n  ''title'' => ''【泸州网】热烈祝贺山东万通被评为济南市职业技能培训定点机构'',\n  ''description'' => ''\n\n\n\n 近年来，山东万通汽修学校在各级领导的关心和支持下，取得了长足的进步和发展，在新的一年里更是取得了突破性的进展。2013年初，在济...'',\n  ''thumb'' => ''uploadfile/2013/0330/15-13022409500Q63.jpg'',\n  ''style'' => '''',\n)','1','200','0',NULL,'0');");
E_D("replace into `pd_position_data` values('199','23','2','content','1','1','array (\n  ''title'' => ''【中国企业新闻网】就业好招生难 看山东万通如何度过发展瓶颈'',\n  ''description'' => ''\n\n\n\n 据调查显示，我国高职院校毕业生的就业率已连续两年高于普通本科院校。但与此同时，职业教育招生难的问题却依然严峻。在很多大学生为...'',\n  ''thumb'' => ''uploadfile/2013/0330/15-1303250T910147.jpg'',\n  ''style'' => '''',\n)','1','199','0',NULL,'0');");
E_D("replace into `pd_position_data` values('198','23','2','content','1','1','array (\n  ''title'' => ''【中国企业新闻网】客座教授唐祖谦为万通学子进行创业培训'',\n  ''description'' => ''\n\n\n\n 为了帮助更多有创业想法的万通学子理清创业思路，增强创业能力，提高创业成功率，2013年3月26日，山东万通汽修学校客座教授唐祖谦为...'',\n  ''thumb'' => ''uploadfile/2013/0330/15-13032Z9300Ec.jpg'',\n  ''style'' => '''',\n)','1','198','0',NULL,'0');");
E_D("replace into `pd_position_data` values('197','23','2','content','1','1','array (\n  ''title'' => ''找工作 实力比长相更重要'',\n  ''description'' => ''\n\n 说到求职，良好的形象是求职者展现给企业的第一个层面。如果能够给主考官留下一个好印象，在一定程度上会增大录取的可能性。因此网络上...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-1301110S134648.jpg'',\n  ''style'' => '''',\n)','1','197','0',NULL,'0');");
E_D("replace into `pd_position_data` values('196','23','2','content','1','1','array (\n  ''title'' => ''2013 万通7大新专业成就汽修行业新贵'',\n  ''description'' => ''\n\n 当前汽车行业产销两旺，供求高速增长，以汽修、保养为主的汽车后服务产业人才缺口不断扩大。为培养全新汽修创新性人才，构建学生知识、...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-1301150T622E4.jpg'',\n  ''style'' => '''',\n)','1','196','0',NULL,'0');");
E_D("replace into `pd_position_data` values('195','23','2','content','1','1','array (\n  ''title'' => ''【中华网】年底热评 你的专业是所谓的“高富帅”吗？'',\n  ''description'' => ''\n\n 随着2012年的即将结束，今年的毕业生就业热潮也在逐渐地进入尾声。不少同学开始在网上晒起了自己的offer： 工作易找、薪水高的专业被...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-13010FZ953942.jpg'',\n  ''style'' => '''',\n)','1','195','0',NULL,'0');");
E_D("replace into `pd_position_data` values('180','24','2','content','1','1','array (\n  ''title'' => ''【中国产经网】汽车保养攻略 如何用最少的钱办最多的事'',\n  ''description'' => ''\n\n 当车辆使用一定年限或行驶一定里程后就会进入维修期，费用就相对高一些。如何才能在确保质量的前提下节省汽车维修保养费用呢？对此，记...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-1301120S024Q9.jpg'',\n  ''style'' => '''',\n)','1','180','0',NULL,'0');");
E_D("replace into `pd_position_data` values('179','24','2','content','1','1','array (\n  ''title'' => ''汽车知识讲堂：盘点常见的汽车伪故障'',\n  ''description'' => ''\n\n 近年来，随着科学技术的飞速发展，新材料、新技术、新工艺的广泛使用，汽车的设计制造水平大大提高，汽车故障的不解体检测诊断技术日臻...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-130114142202647.jpg'',\n  ''style'' => '''',\n)','1','179','0',NULL,'0');");
E_D("replace into `pd_position_data` values('178','24','2','content','1','1','array (\n  ''title'' => ''雨后爱车保养 专家来支招'',\n  ''description'' => ''\n\n 下雨天，车主一般有小心驾驶的意识，但对于雨后汽车的养护却不太注意。事实上，雨后汽车保养很重要，山东万通汽修学校的汽车专家董素贞...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-13011FQ54X04.jpg'',\n  ''style'' => '''',\n)','1','178','0',NULL,'0');");
E_D("replace into `pd_position_data` values('177','24','2','content','1','1','array (\n  ''title'' => ''【汉网】学热门汽修 实现更高质量就业'',\n  ''description'' => ''\n\n 如今，很多的大学生面临着就业难的问题。而与之形成鲜明对比的则是职校生非常吃香，未毕业就已经找到了就业的岗位。看到职校学生们娴熟...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-1301210R61a24.jpg'',\n  ''style'' => '''',\n)','1','177','0',NULL,'0');");
E_D("replace into `pd_position_data` values('176','24','2','content','1','1','array (\n  ''title'' => ''年末人才争夺战 汽修蓝领更吃香'',\n  ''description'' => ''\n\n 年底将至，不少单位开始了人才的争夺战。在这场战争中，有的企业是因为员工的紧缺，而有的则是为了新一年企业的发展储备力量。在这一过...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-13011PRU4120.jpg'',\n  ''style'' => '''',\n)','1','176','0',NULL,'0');");
E_D("replace into `pd_position_data` values('175','24','2','content','1','1','array (\n  ''title'' => ''专家讲解新车驾驶八项注意'',\n  ''description'' => ''\n\n 春节用车高峰临近，对于许多刚刚购入新车的车主来说，如何在返乡途中正确驾驶汽车成为了他们最关注的问题。对此，我们咨询了山东万通汽...'',\n  ''thumb'' => ''uploadfile/2013/0330/28-1301220R231X9.jpg'',\n  ''style'' => '''',\n)','1','175','0',NULL,'0');");
E_D("replace into `pd_position_data` values('1','32','2','content','3','1','array (\n  ''title'' => ''教学楼一角'',\n  ''description'' => ''校园一角'',\n  ''thumb'' => ''http://localhost.pangda.com/uploadfile/2013/0401/img_school_1.jpg'',\n  ''inputtime'' => ''1364737075'',\n  ''style'' => '''',\n)','1','1','0',NULL,'0');");
E_D("replace into `pd_position_data` values('3','33','2','content','3','1','array (\n  ''title'' => ''校园小花园'',\n  ''description'' => ''校园小花园'',\n  ''thumb'' => ''http://localhost.pangda.com/uploadfile/2013/0401/img_school_3.jpg'',\n  ''inputtime'' => ''1364737217'',\n  ''style'' => '''',\n)','1','3','0',NULL,'0');");
E_D("replace into `pd_position_data` values('2','34','2','content','3','1','array (\n  ''title'' => ''展厅一角'',\n  ''description'' => ''展厅一角'',\n  ''thumb'' => ''http://localhost.pangda.com/uploadfile/2013/0401/img_school_2.jpg'',\n  ''inputtime'' => ''1364737158'',\n  ''style'' => '''',\n)','1','2','0',NULL,'0');");
E_D("replace into `pd_position_data` values('4','35','2','content','3','1','array (\n  ''title'' => ''理论授课教室'',\n  ''description'' => ''理论授课教室'',\n  ''thumb'' => ''http://localhost.pangda.com/uploadfile/2013/0401/img_school_4.jpg'',\n  ''inputtime'' => ''1364737291'',\n  ''style'' => '''',\n)','1','4','0',NULL,'0');");
E_D("replace into `pd_position_data` values('4','36','15','content','16','1','array (\n  ''title'' => ''汽车行业世界500强日本企业考察高级研修班'',\n  ''videourl'' => ''http://player.youku.com/player.php/sid/XMzAwMDgzNDQw/v.swf'',\n  ''description'' => ''汽车行业世界500强日本企业考察高级研修班'',\n  ''thumb'' => ''http://localhost.pangda.com/uploadfile/2013/0404/20130404095804790.jpg'',\n  ''inputtime'' => ''1365083662'',\n  ''style'' => '''',\n)','1','4','0',NULL,'0');");

require("../../inc/footer.php");
?>