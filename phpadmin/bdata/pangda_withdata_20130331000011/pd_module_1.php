<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_module`;");
E_C("CREATE TABLE `pd_module` (
  `module` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `url` varchar(50) NOT NULL,
  `iscore` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `version` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL,
  `setting` mediumtext NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `disabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `installdate` date NOT NULL DEFAULT '0000-00-00',
  `updatedate` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `pd_module` values('admin','admin','','1','1.0','','array (\n  ''admin_email'' => ''phpcms@phpcms.cn'',\n  ''adminaccessip'' => ''0'',\n  ''maxloginfailedtimes'' => ''8'',\n  ''maxiplockedtime'' => ''15'',\n  ''minrefreshtime'' => ''2'',\n  ''mail_type'' => ''1'',\n  ''mail_server'' => ''smtp.qq.com'',\n  ''mail_port'' => ''25'',\n  ''mail_user'' => ''phpcms.cn@foxmail.com'',\n  ''mail_auth'' => ''1'',\n  ''mail_from'' => ''phpcms.cn@foxmail.com'',\n  ''mail_password'' => '''',\n  ''errorlog_size'' => ''20'',\n)','0','0','2010-10-18','2010-10-18');");
E_D("replace into `pd_module` values('member','会员','','1','1.0','','array (\n  ''allowregister'' => ''1'',\n  ''choosemodel'' => ''1'',\n  ''enablemailcheck'' => ''0'',\n  ''registerverify'' => ''0'',\n  ''showapppoint'' => ''0'',\n  ''rmb_point_rate'' => ''10'',\n  ''defualtpoint'' => ''0'',\n  ''defualtamount'' => ''0'',\n  ''showregprotocol'' => ''0'',\n  ''regprotocol'' => ''		 欢迎您注册成为phpcms用户\r\n请仔细阅读下面的协议，只有接受协议才能继续进行注册。 \r\n1．服务条款的确认和接纳\r\n　　phpcms用户服务的所有权和运作权归phpcms拥有。phpcms所提供的服务将按照有关章程、服务条款和操作规则严格执行。用户通过注册程序点击“我同意” 按钮，即表示用户与phpcms达成协议并接受所有的服务条款。\r\n2． phpcms服务简介\r\n　　phpcms通过国际互联网为用户提供新闻及文章浏览、图片浏览、软件下载、网上留言和BBS论坛等服务。\r\n　　用户必须： \r\n　　1)购置设备，包括个人电脑一台、调制解调器一个及配备上网装置。 \r\n　　2)个人上网和支付与此服务有关的电话费用、网络费用。\r\n　　用户同意： \r\n　　1)提供及时、详尽及准确的个人资料。 \r\n　　2)不断更新注册资料，符合及时、详尽、准确的要求。所有原始键入的资料将引用为注册资料。 \r\n　　3)用户同意遵守《中华人民共和国保守国家秘密法》、《中华人民共和国计算机信息系统安全保护条例》、《计算机软件保护条例》等有关计算机及互联网规定的法律和法规、实施办法。在任何情况下，phpcms合理地认为用户的行为可能违反上述法律、法规，phpcms可以在任何时候，不经事先通知终止向该用户提供服务。用户应了解国际互联网的无国界性，应特别注意遵守当地所有有关的法律和法规。\r\n3． 服务条款的修改\r\n　　phpcms会不定时地修改服务条款，服务条款一旦发生变动，将会在相关页面上提示修改内容。如果您同意改动，则再一次点击“我同意”按钮。 如果您不接受，则及时取消您的用户使用服务资格。\r\n4． 服务修订\r\n　　phpcms保留随时修改或中断服务而不需知照用户的权利。phpcms行使修改或中断服务的权利，不需对用户或第三方负责。\r\n5． 用户隐私制度\r\n　　尊重用户个人隐私是phpcms的 基本政策。phpcms不会公开、编辑或透露用户的注册信息，除非有法律许可要求，或phpcms在诚信的基础上认为透露这些信息在以下三种情况是必要的： \r\n　　1)遵守有关法律规定，遵从合法服务程序。 \r\n　　2)保持维护phpcms的商标所有权。 \r\n　　3)在紧急情况下竭力维护用户个人和社会大众的隐私安全。 \r\n　　4)符合其他相关的要求。 \r\n6．用户的帐号，密码和安全性\r\n　　一旦注册成功成为phpcms用户，您将得到一个密码和帐号。如果您不保管好自己的帐号和密码安全，将对因此产生的后果负全部责任。另外，每个用户都要对其帐户中的所有活动和事件负全责。您可随时根据指示改变您的密码，也可以结束旧的帐户重开一个新帐户。用户同意若发现任何非法使用用户帐号或安全漏洞的情况，立即通知phpcms。\r\n7． 免责条款\r\n　　用户明确同意网站服务的使用由用户个人承担风险。 　　 \r\n　　phpcms不作任何类型的担保，不担保服务一定能满足用户的要求，也不担保服务不会受中断，对服务的及时性，安全性，出错发生都不作担保。用户理解并接受：任何通过phpcms服务取得的信息资料的可靠性取决于用户自己，用户自己承担所有风险和责任。 \r\n8．有限责任\r\n　　phpcms对任何直接、间接、偶然、特殊及继起的损害不负责任。\r\n9． 不提供零售和商业性服务 \r\n　　用户使用网站服务的权利是个人的。用户只能是一个单独的个体而不能是一个公司或实体商业性组织。用户承诺不经phpcms同意，不能利用网站服务进行销售或其他商业用途。\r\n10．用户责任 \r\n　　用户单独承担传输内容的责任。用户必须遵循： \r\n　　1)从中国境内向外传输技术性资料时必须符合中国有关法规。 \r\n　　2)使用网站服务不作非法用途。 \r\n　　3)不干扰或混乱网络服务。 \r\n　　4)不在论坛BBS或留言簿发表任何与政治相关的信息。 \r\n　　5)遵守所有使用网站服务的网络协议、规定、程序和惯例。\r\n　　6)不得利用本站危害国家安全、泄露国家秘密，不得侵犯国家社会集体的和公民的合法权益。\r\n　　7)不得利用本站制作、复制和传播下列信息： \r\n　　　1、煽动抗拒、破坏宪法和法律、行政法规实施的；\r\n　　　2、煽动颠覆国家政权，推翻社会主义制度的；\r\n　　　3、煽动分裂国家、破坏国家统一的；\r\n　　　4、煽动民族仇恨、民族歧视，破坏民族团结的；\r\n　　　5、捏造或者歪曲事实，散布谣言，扰乱社会秩序的；\r\n　　　6、宣扬封建迷信、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的；\r\n　　　7、公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的；\r\n　　　8、损害国家机关信誉的；\r\n　　　9、其他违反宪法和法律行政法规的；\r\n　　　10、进行商业广告行为的。\r\n　　用户不能传输任何教唆他人构成犯罪行为的资料；不能传输长国内不利条件和涉及国家安全的资料；不能传输任何不符合当地法规、国家法律和国际法 律的资料。未经许可而非法进入其它电脑系统是禁止的。若用户的行为不符合以上的条款，phpcms将取消用户服务帐号。\r\n11．网站内容的所有权\r\n　　phpcms定义的内容包括：文字、软件、声音、相片、录象、图表；在广告中全部内容；电子邮件的全部内容；phpcms为用户提供的商业信息。所有这些内容受版权、商标、标签和其它财产所有权法律的保护。所以，用户只能在phpcms和广告商授权下才能使用这些内容，而不能擅自复制、篡改这些内容、或创造与内容有关的派生产品。\r\n12．附加信息服务\r\n　　用户在享用phpcms提供的免费服务的同时，同意接受phpcms提供的各类附加信息服务。\r\n13．解释权\r\n　　本注册协议的解释权归phpcms所有。如果其中有任何条款与国家的有关法律相抵触，则以国家法律的明文规定为准。 '',\n  ''registerverifymessage'' => '' 欢迎您注册成为phpcms用户，您的账号需要邮箱认证，点击下面链接进行认证：{click}\r\n或者将网址复制到浏览器：{url}'',\n  ''forgetpassword'' => '' phpcms密码找回，请在一小时内点击下面链接进行操作：{click}\r\n或者将网址复制到浏览器：{url}'',\n)','0','0','2010-09-06','2010-09-06');");
E_D("replace into `pd_module` values('pay','支付','','1','1.0','','','0','0','2010-09-06','2010-09-06');");
E_D("replace into `pd_module` values('digg','顶一下','','0','1.0','','','0','0','2010-09-06','2010-09-06');");
E_D("replace into `pd_module` values('special','专题','','0','1.0','','','0','0','2010-09-06','2010-09-06');");
E_D("replace into `pd_module` values('content','内容模块','','1','1.0','','','0','0','2010-09-06','2010-09-06');");
E_D("replace into `pd_module` values('search','全站搜索','','0','1.0','','array (\n  ''fulltextenble'' => ''1'',\n  ''relationenble'' => ''1'',\n  ''suggestenable'' => ''1'',\n  ''sphinxenable'' => ''0'',\n  ''sphinxhost'' => ''10.228.134.102'',\n  ''sphinxport'' => ''9312'',\n)','0','0','2010-09-06','2010-09-06');");
E_D("replace into `pd_module` values('scan','木马扫描','scan','0','1.0','','','0','0','2010-09-01','2010-09-06');");
E_D("replace into `pd_module` values('attachment','附件','attachment','1','1.0','','','0','0','2010-09-01','2010-09-06');");
E_D("replace into `pd_module` values('block','碎片','','1','1.0','','','0','0','2010-09-01','2010-09-06');");
E_D("replace into `pd_module` values('collection','采集模块','collection','1','1.0','','','0','0','2010-09-01','2010-09-06');");
E_D("replace into `pd_module` values('dbsource','数据源','','1','','','','0','0','2010-09-01','2010-09-06');");
E_D("replace into `pd_module` values('template','模板风格','','1','1.0','','','0','0','2010-09-01','2010-09-06');");
E_D("replace into `pd_module` values('release','发布点','','1','1.0','','','0','0','2010-09-01','2010-09-06');");
E_D("replace into `pd_module` values('cnzz','CNZZ统计','cnzz/','0','1.0','CNZZ统计','','0','0','2010-09-15','2010-09-15');");
E_D("replace into `pd_module` values('video','视频库','','0','1.0','','','0','0','2012-09-28','2012-09-28');");
E_D("replace into `pd_module` values('announce','公告','announce/','0','1.0','公告','','0','0','2013-03-30','2013-03-30');");
E_D("replace into `pd_module` values('comment','评论','comment/','0','1.0','评论','','0','0','2013-03-30','2013-03-30');");
E_D("replace into `pd_module` values('link','友情链接','','0','1.0','','array (\n  1 => \n  array (\n    ''is_post'' => ''1'',\n    ''enablecheckcode'' => ''0'',\n  ),\n)','0','0','2010-09-06','2010-09-06');");
E_D("replace into `pd_module` values('vote','投票','','0','1.0','','array (\r\n  1 => \r\n  array (\r\n    ''default_style'' => ''default'',\r\n    ''vote_tp_template'' => ''vote_tp'',\r\n    ''allowguest'' => ''1'',\r\n    ''enabled'' => ''1'',\r\n    ''interval'' => ''1'',\r\n    ''credit'' => ''1'',\r\n  ),\r\n)','0','0','2010-09-06','2010-09-06');");
E_D("replace into `pd_module` values('message','短消息','','0','1.0','','','0','0','2010-09-06','2010-09-06');");
E_D("replace into `pd_module` values('mood','新闻心情','mood/','0','1.0','新闻心情','','0','0','2013-03-30','2013-03-30');");
E_D("replace into `pd_module` values('poster','广告模块','poster/','0','1.0','广告模块','','0','0','2013-03-30','2013-03-30');");
E_D("replace into `pd_module` values('formguide','表单向导','formguide/','0','1.0','formguide','array (\n  ''allowmultisubmit'' => ''1'',\n  ''interval'' => ''30'',\n  ''allowunreg'' => ''0'',\n  ''mailmessage'' => ''用户向我们提交了表单数据，赶快去看看吧。'',\n)','0','0','2010-10-20','2010-10-20');");
E_D("replace into `pd_module` values('wap','手机门户','wap/','0','1.0','手机门户','','0','0','2013-03-30','2013-03-30');");
E_D("replace into `pd_module` values('upgrade','在线升级','','0','1.0','','','0','0','2011-05-18','2011-05-18');");
E_D("replace into `pd_module` values('tag','标签向导','tag/','0','1.0','标签向导','','0','0','2013-03-30','2013-03-30');");
E_D("replace into `pd_module` values('sms','短信平台','sms/','0','1.0','短信平台','','0','0','2011-09-02','2011-09-02');");

require("../../inc/footer.php");
?>