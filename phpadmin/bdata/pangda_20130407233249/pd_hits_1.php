<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pd_hits`;");
E_C("CREATE TABLE `pd_hits` (
  `hitsid` char(30) NOT NULL,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  `yesterdayviews` int(10) unsigned NOT NULL DEFAULT '0',
  `dayviews` int(10) unsigned NOT NULL DEFAULT '0',
  `weekviews` int(10) unsigned NOT NULL DEFAULT '0',
  `monthviews` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`hitsid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `pd_hits` values('c-1-1','22','1','0','1','1','1','1364708357');");
E_D("replace into `pd_hits` values('c-1-2','22','1','0','1','1','1','1364708406');");
E_D("replace into `pd_hits` values('c-1-3','22','2','0','2','2','2','1364708622');");
E_D("replace into `pd_hits` values('c-1-4','22','0','0','0','0','0','1364658054');");
E_D("replace into `pd_hits` values('c-1-5','22','0','0','0','0','0','1364658055');");
E_D("replace into `pd_hits` values('c-1-6','22','0','0','0','0','0','1364658055');");
E_D("replace into `pd_hits` values('c-1-7','22','0','0','0','0','0','1364658057');");
E_D("replace into `pd_hits` values('c-1-8','22','0','0','0','0','0','1364658057');");
E_D("replace into `pd_hits` values('c-1-9','22','0','0','0','0','0','1364658059');");
E_D("replace into `pd_hits` values('c-1-10','22','0','0','0','0','0','1364658060');");
E_D("replace into `pd_hits` values('c-1-11','22','0','0','0','0','0','1364658061');");
E_D("replace into `pd_hits` values('c-1-12','22','1','0','1','1','1','1364708351');");
E_D("replace into `pd_hits` values('c-1-13','22','0','0','0','0','0','1364658062');");
E_D("replace into `pd_hits` values('c-1-14','22','0','0','0','0','0','1364658063');");
E_D("replace into `pd_hits` values('c-1-15','22','0','0','0','0','0','1364658063');");
E_D("replace into `pd_hits` values('c-1-16','22','0','0','0','0','0','1364658063');");
E_D("replace into `pd_hits` values('c-1-17','22','0','0','0','0','0','1364658065');");
E_D("replace into `pd_hits` values('c-1-18','22','0','0','0','0','0','1364658065');");
E_D("replace into `pd_hits` values('c-1-19','22','0','0','0','0','0','1364658065');");
E_D("replace into `pd_hits` values('c-1-20','22','0','0','0','0','0','1364658066');");
E_D("replace into `pd_hits` values('c-1-21','22','0','0','0','0','0','1364658066');");
E_D("replace into `pd_hits` values('c-1-22','22','0','0','0','0','0','1364658067');");
E_D("replace into `pd_hits` values('c-1-23','22','0','0','0','0','0','1364658068');");
E_D("replace into `pd_hits` values('c-1-24','22','0','0','0','0','0','1364658068');");
E_D("replace into `pd_hits` values('c-1-25','22','0','0','0','0','0','1364658069');");
E_D("replace into `pd_hits` values('c-1-26','22','0','0','0','0','0','1364658070');");
E_D("replace into `pd_hits` values('c-1-27','22','0','0','0','0','0','1364658071');");
E_D("replace into `pd_hits` values('c-1-28','22','0','0','0','0','0','1364658071');");
E_D("replace into `pd_hits` values('c-1-29','22','0','0','0','0','0','1364658071');");
E_D("replace into `pd_hits` values('c-1-30','22','0','0','0','0','0','1364658072');");
E_D("replace into `pd_hits` values('c-1-31','22','0','0','0','0','0','1364658073');");
E_D("replace into `pd_hits` values('c-1-32','22','0','0','0','0','0','1364658073');");
E_D("replace into `pd_hits` values('c-1-33','22','0','0','0','0','0','1364658074');");
E_D("replace into `pd_hits` values('c-1-34','22','0','0','0','0','0','1364658075');");
E_D("replace into `pd_hits` values('c-1-35','22','0','0','0','0','0','1364658075');");
E_D("replace into `pd_hits` values('c-1-36','22','0','0','0','0','0','1364658076');");
E_D("replace into `pd_hits` values('c-1-37','22','0','0','0','0','0','1364658077');");
E_D("replace into `pd_hits` values('c-1-38','22','0','0','0','0','0','1364658077');");
E_D("replace into `pd_hits` values('c-1-39','22','0','0','0','0','0','1364658078');");
E_D("replace into `pd_hits` values('c-1-40','22','0','0','0','0','0','1364658079');");
E_D("replace into `pd_hits` values('c-1-41','22','0','0','0','0','0','1364658080');");
E_D("replace into `pd_hits` values('c-1-42','22','0','0','0','0','0','1364658080');");
E_D("replace into `pd_hits` values('c-1-43','22','0','0','0','0','0','1364658081');");
E_D("replace into `pd_hits` values('c-1-44','22','0','0','0','0','0','1364658082');");
E_D("replace into `pd_hits` values('c-1-45','22','0','0','0','0','0','1364658083');");
E_D("replace into `pd_hits` values('c-1-46','22','0','0','0','0','0','1364658084');");
E_D("replace into `pd_hits` values('c-1-47','22','0','0','0','0','0','1364658084');");
E_D("replace into `pd_hits` values('c-1-48','22','0','0','0','0','0','1364658085');");
E_D("replace into `pd_hits` values('c-1-49','22','0','0','0','0','0','1364658088');");
E_D("replace into `pd_hits` values('c-1-50','22','0','0','0','0','0','1364658088');");
E_D("replace into `pd_hits` values('c-1-51','22','0','0','0','0','0','1364658089');");
E_D("replace into `pd_hits` values('c-1-52','22','0','0','0','0','0','1364658090');");
E_D("replace into `pd_hits` values('c-1-53','22','0','0','0','0','0','1364658090');");
E_D("replace into `pd_hits` values('c-1-54','22','0','0','0','0','0','1364658091');");
E_D("replace into `pd_hits` values('c-1-55','22','0','0','0','0','0','1364658092');");
E_D("replace into `pd_hits` values('c-1-56','22','0','0','0','0','0','1364658092');");
E_D("replace into `pd_hits` values('c-1-57','22','0','0','0','0','0','1364658093');");
E_D("replace into `pd_hits` values('c-1-58','22','0','0','0','0','0','1364658093');");
E_D("replace into `pd_hits` values('c-1-59','22','0','0','0','0','0','1364658093');");
E_D("replace into `pd_hits` values('c-1-60','22','0','0','0','0','0','1364658094');");
E_D("replace into `pd_hits` values('c-1-61','22','0','0','0','0','0','1364658095');");
E_D("replace into `pd_hits` values('c-1-62','22','0','0','0','0','0','1364658095');");
E_D("replace into `pd_hits` values('c-1-63','22','0','0','0','0','0','1364658096');");
E_D("replace into `pd_hits` values('c-1-64','22','0','0','0','0','0','1364658096');");
E_D("replace into `pd_hits` values('c-1-65','22','0','0','0','0','0','1364658097');");
E_D("replace into `pd_hits` values('c-1-66','22','0','0','0','0','0','1364658098');");
E_D("replace into `pd_hits` values('c-1-67','22','0','0','0','0','0','1364658099');");
E_D("replace into `pd_hits` values('c-1-68','22','0','0','0','0','0','1364658099');");
E_D("replace into `pd_hits` values('c-1-69','22','0','0','0','0','0','1364658100');");
E_D("replace into `pd_hits` values('c-1-70','22','0','0','0','0','0','1364658100');");
E_D("replace into `pd_hits` values('c-1-71','22','0','0','0','0','0','1364658101');");
E_D("replace into `pd_hits` values('c-1-72','22','0','0','0','0','0','1364658101');");
E_D("replace into `pd_hits` values('c-1-73','22','0','0','0','0','0','1364658102');");
E_D("replace into `pd_hits` values('c-1-74','22','0','0','0','0','0','1364658103');");
E_D("replace into `pd_hits` values('c-1-75','22','0','0','0','0','0','1364658103');");
E_D("replace into `pd_hits` values('c-1-76','22','0','0','0','0','0','1364658103');");
E_D("replace into `pd_hits` values('c-1-77','22','0','0','0','0','0','1364658104');");
E_D("replace into `pd_hits` values('c-1-78','22','0','0','0','0','0','1364658105');");
E_D("replace into `pd_hits` values('c-1-79','22','0','0','0','0','0','1364658105');");
E_D("replace into `pd_hits` values('c-1-80','22','0','0','0','0','0','1364658106');");
E_D("replace into `pd_hits` values('c-1-81','22','0','0','0','0','0','1364658107');");
E_D("replace into `pd_hits` values('c-1-82','22','0','0','0','0','0','1364658107');");
E_D("replace into `pd_hits` values('c-1-83','22','0','0','0','0','0','1364658108');");
E_D("replace into `pd_hits` values('c-1-84','22','0','0','0','0','0','1364658109');");
E_D("replace into `pd_hits` values('c-1-85','22','0','0','0','0','0','1364658110');");
E_D("replace into `pd_hits` values('c-1-86','22','0','0','0','0','0','1364658110');");
E_D("replace into `pd_hits` values('c-1-87','22','0','0','0','0','0','1364658111');");
E_D("replace into `pd_hits` values('c-1-88','22','0','0','0','0','0','1364658112');");
E_D("replace into `pd_hits` values('c-1-89','22','0','0','0','0','0','1364658113');");
E_D("replace into `pd_hits` values('c-1-90','22','0','0','0','0','0','1364658114');");
E_D("replace into `pd_hits` values('c-1-91','22','0','0','0','0','0','1364658114');");
E_D("replace into `pd_hits` values('c-1-92','22','0','0','0','0','0','1364658115');");
E_D("replace into `pd_hits` values('c-1-93','22','0','0','0','0','0','1364658116');");
E_D("replace into `pd_hits` values('c-1-94','22','0','0','0','0','0','1364658117');");
E_D("replace into `pd_hits` values('c-1-95','22','0','0','0','0','0','1364658117');");
E_D("replace into `pd_hits` values('c-1-96','22','1','0','1','1','1','1364726583');");
E_D("replace into `pd_hits` values('c-1-97','22','0','0','0','0','0','1364658119');");
E_D("replace into `pd_hits` values('c-1-98','22','0','0','0','0','0','1364658122');");
E_D("replace into `pd_hits` values('c-1-99','22','0','0','0','0','0','1364658122');");
E_D("replace into `pd_hits` values('c-1-100','22','0','0','0','0','0','1364658123');");
E_D("replace into `pd_hits` values('c-1-101','22','0','0','0','0','0','1364658123');");
E_D("replace into `pd_hits` values('c-1-102','22','0','0','0','0','0','1364658123');");
E_D("replace into `pd_hits` values('c-1-103','22','1','0','1','1','1','1364726579');");
E_D("replace into `pd_hits` values('c-1-104','22','0','0','0','0','0','1364658125');");
E_D("replace into `pd_hits` values('c-1-105','22','0','0','0','0','0','1364658125');");
E_D("replace into `pd_hits` values('c-1-106','22','0','0','0','0','0','1364658126');");
E_D("replace into `pd_hits` values('c-1-107','22','0','0','0','0','0','1364658126');");
E_D("replace into `pd_hits` values('c-1-108','22','2','0','2','2','2','1364739646');");
E_D("replace into `pd_hits` values('c-1-109','22','4','0','4','4','4','1364739659');");
E_D("replace into `pd_hits` values('c-1-110','22','3','0','3','3','3','1364739686');");
E_D("replace into `pd_hits` values('c-1-111','22','1','0','1','1','1','1364739702');");
E_D("replace into `pd_hits` values('c-1-112','22','0','0','0','0','0','1364658129');");
E_D("replace into `pd_hits` values('c-1-113','22','0','0','0','0','0','1364658130');");
E_D("replace into `pd_hits` values('c-1-114','22','0','0','0','0','0','1364658131');");
E_D("replace into `pd_hits` values('c-1-115','22','9','0','9','9','9','1364737923');");
E_D("replace into `pd_hits` values('c-1-116','22','2','0','2','2','2','1364726562');");
E_D("replace into `pd_hits` values('c-1-117','22','7','0','7','7','7','1364739100');");
E_D("replace into `pd_hits` values('c-1-118','22','5','0','5','5','5','1364738031');");
E_D("replace into `pd_hits` values('c-1-119','22','12','11','1','1','1','1364824655');");
E_D("replace into `pd_hits` values('c-1-120','22','6','0','6','6','6','1364739109');");
E_D("replace into `pd_hits` values('c-1-121','22','0','0','0','0','0','1364658135');");
E_D("replace into `pd_hits` values('c-1-122','22','0','0','0','0','0','1364658135');");
E_D("replace into `pd_hits` values('c-1-123','22','0','0','0','0','0','1364658136');");
E_D("replace into `pd_hits` values('c-1-124','22','0','0','0','0','0','1364658137');");
E_D("replace into `pd_hits` values('c-1-125','22','0','0','0','0','0','1364658137');");
E_D("replace into `pd_hits` values('c-1-126','22','0','0','0','0','0','1364658138');");
E_D("replace into `pd_hits` values('c-1-127','22','0','0','0','0','0','1364658139');");
E_D("replace into `pd_hits` values('c-1-128','22','0','0','0','0','0','1364658140');");
E_D("replace into `pd_hits` values('c-1-129','22','0','0','0','0','0','1364658141');");
E_D("replace into `pd_hits` values('c-1-130','22','0','0','0','0','0','1364658141');");
E_D("replace into `pd_hits` values('c-1-131','22','0','0','0','0','0','1364658142');");
E_D("replace into `pd_hits` values('c-1-132','22','0','0','0','0','0','1364658143');");
E_D("replace into `pd_hits` values('c-1-133','22','0','0','0','0','0','1364658144');");
E_D("replace into `pd_hits` values('c-1-134','22','0','0','0','0','0','1364658144');");
E_D("replace into `pd_hits` values('c-1-135','22','0','0','0','0','0','1364658145');");
E_D("replace into `pd_hits` values('c-1-136','22','0','0','0','0','0','1364658146');");
E_D("replace into `pd_hits` values('c-1-137','22','0','0','0','0','0','1364658147');");
E_D("replace into `pd_hits` values('c-1-138','22','0','0','0','0','0','1364658147');");
E_D("replace into `pd_hits` values('c-1-139','22','0','0','0','0','0','1364658148');");
E_D("replace into `pd_hits` values('c-1-140','22','0','0','0','0','0','1364658149');");
E_D("replace into `pd_hits` values('c-1-141','22','0','0','0','0','0','1364658150');");
E_D("replace into `pd_hits` values('c-1-142','22','0','0','0','0','0','1364658151');");
E_D("replace into `pd_hits` values('c-1-143','22','0','0','0','0','0','1364658151');");
E_D("replace into `pd_hits` values('c-1-144','22','0','0','0','0','0','1364658152');");
E_D("replace into `pd_hits` values('c-1-145','22','0','0','0','0','0','1364658153');");
E_D("replace into `pd_hits` values('c-1-146','22','0','0','0','0','0','1364658154');");
E_D("replace into `pd_hits` values('c-1-147','22','0','0','0','0','0','1364658155');");
E_D("replace into `pd_hits` values('c-1-148','22','0','0','0','0','0','1364658157');");
E_D("replace into `pd_hits` values('c-1-149','22','0','0','0','0','0','1364658158');");
E_D("replace into `pd_hits` values('c-1-150','22','0','0','0','0','0','1364658158');");
E_D("replace into `pd_hits` values('c-1-151','22','0','0','0','0','0','1364658159');");
E_D("replace into `pd_hits` values('c-1-152','22','0','0','0','0','0','1364658160');");
E_D("replace into `pd_hits` values('c-1-153','22','0','0','0','0','0','1364658160');");
E_D("replace into `pd_hits` values('c-1-154','22','0','0','0','0','0','1364658161');");
E_D("replace into `pd_hits` values('c-1-155','22','0','0','0','0','0','1364658161');");
E_D("replace into `pd_hits` values('c-1-156','22','0','0','0','0','0','1364658162');");
E_D("replace into `pd_hits` values('c-1-157','22','0','0','0','0','0','1364658162');");
E_D("replace into `pd_hits` values('c-1-158','22','0','0','0','0','0','1364658163');");
E_D("replace into `pd_hits` values('c-1-159','22','0','0','0','0','0','1364658163');");
E_D("replace into `pd_hits` values('c-1-160','22','0','0','0','0','0','1364658164');");
E_D("replace into `pd_hits` values('c-1-161','22','0','0','0','0','0','1364658164');");
E_D("replace into `pd_hits` values('c-1-162','22','0','0','0','0','0','1364658165');");
E_D("replace into `pd_hits` values('c-1-163','22','0','0','0','0','0','1364658166');");
E_D("replace into `pd_hits` values('c-1-164','22','0','0','0','0','0','1364658167');");
E_D("replace into `pd_hits` values('c-1-165','22','0','0','0','0','0','1364658167');");
E_D("replace into `pd_hits` values('c-1-166','22','0','0','0','0','0','1364658168');");
E_D("replace into `pd_hits` values('c-1-167','22','0','0','0','0','0','1364658169');");
E_D("replace into `pd_hits` values('c-1-168','22','0','0','0','0','0','1364658169');");
E_D("replace into `pd_hits` values('c-1-169','22','0','0','0','0','0','1364658169');");
E_D("replace into `pd_hits` values('c-1-170','22','0','0','0','0','0','1364658170');");
E_D("replace into `pd_hits` values('c-1-171','22','1','0','1','1','1','1364725416');");
E_D("replace into `pd_hits` values('c-1-172','22','0','0','0','0','0','1364658171');");
E_D("replace into `pd_hits` values('c-1-173','22','0','0','0','0','0','1364658172');");
E_D("replace into `pd_hits` values('c-1-174','22','0','0','0','0','0','1364658172');");
E_D("replace into `pd_hits` values('c-1-175','22','1','0','1','1','1','1365083440');");
E_D("replace into `pd_hits` values('c-1-176','22','1','0','1','1','1','1365083432');");
E_D("replace into `pd_hits` values('c-1-177','22','1','0','1','1','1','1365083409');");
E_D("replace into `pd_hits` values('c-1-178','22','2','0','2','2','2','1364911472');");
E_D("replace into `pd_hits` values('c-1-179','22','0','0','0','0','0','1364658176');");
E_D("replace into `pd_hits` values('c-1-180','22','1','0','1','1','1','1364721859');");
E_D("replace into `pd_hits` values('c-1-181','22','0','0','0','0','0','1364658178');");
E_D("replace into `pd_hits` values('c-1-182','22','0','0','0','0','0','1364658179');");
E_D("replace into `pd_hits` values('c-1-183','22','0','0','0','0','0','1364658179');");
E_D("replace into `pd_hits` values('c-1-184','22','0','0','0','0','0','1364658180');");
E_D("replace into `pd_hits` values('c-1-185','22','0','0','0','0','0','1364658181');");
E_D("replace into `pd_hits` values('c-1-186','22','0','0','0','0','0','1364658182');");
E_D("replace into `pd_hits` values('c-1-187','22','0','0','0','0','0','1364658183');");
E_D("replace into `pd_hits` values('c-1-188','22','0','0','0','0','0','1364658183');");
E_D("replace into `pd_hits` values('c-1-189','22','0','0','0','0','0','1364658184');");
E_D("replace into `pd_hits` values('c-1-190','22','0','0','0','0','0','1364658185');");
E_D("replace into `pd_hits` values('c-1-191','22','2','0','2','2','2','1364738572');");
E_D("replace into `pd_hits` values('c-1-192','22','0','0','0','0','0','1364658186');");
E_D("replace into `pd_hits` values('c-1-193','22','0','0','0','0','0','1364658187');");
E_D("replace into `pd_hits` values('c-1-194','22','0','0','0','0','0','1364658188');");
E_D("replace into `pd_hits` values('c-1-195','22','0','0','0','0','0','1364658189');");
E_D("replace into `pd_hits` values('c-1-196','22','0','0','0','0','0','1364658189');");
E_D("replace into `pd_hits` values('c-1-197','22','0','0','0','0','0','1364658190');");
E_D("replace into `pd_hits` values('c-1-198','22','0','0','0','0','0','1364658343');");
E_D("replace into `pd_hits` values('c-1-199','22','1','0','1','1','1','1364708119');");
E_D("replace into `pd_hits` values('c-1-200','22','10','0','10','10','10','1364721657');");
E_D("replace into `pd_hits` values('c-15-1','27','0','0','0','0','0','1364710409');");
E_D("replace into `pd_hits` values('c-15-2','27','0','0','0','0','0','1364710456');");
E_D("replace into `pd_hits` values('c-15-3','27','0','0','0','0','0','1364710494');");
E_D("replace into `pd_hits` values('c-15-4','27','0','0','0','0','0','1364710513');");
E_D("replace into `pd_hits` values('c-15-5','28','0','0','0','0','0','1364710539');");
E_D("replace into `pd_hits` values('c-15-6','29','0','0','0','0','0','1364710565');");
E_D("replace into `pd_hits` values('c-15-7','29','0','0','0','0','0','1364710591');");
E_D("replace into `pd_hits` values('c-12-1','6','0','0','0','0','0','1364713848');");
E_D("replace into `pd_hits` values('c-12-2','6','0','0','0','0','0','1364713910');");
E_D("replace into `pd_hits` values('c-12-3','6','0','0','0','0','0','1364713968');");
E_D("replace into `pd_hits` values('c-12-4','6','0','0','0','0','0','1364713999');");
E_D("replace into `pd_hits` values('c-12-5','6','0','0','0','0','0','1364714048');");
E_D("replace into `pd_hits` values('c-12-6','6','0','0','0','0','0','1364714315');");
E_D("replace into `pd_hits` values('c-12-7','6','0','0','0','0','0','1364714371');");
E_D("replace into `pd_hits` values('c-12-8','6','0','0','0','0','0','1364714415');");
E_D("replace into `pd_hits` values('c-19-1','38','1','0','1','1','1','1365057712');");
E_D("replace into `pd_hits` values('c-19-2','38','1','0','1','1','1','1365057717');");
E_D("replace into `pd_hits` values('c-19-3','38','2','0','2','2','2','1365057722');");
E_D("replace into `pd_hits` values('c-19-4','38','0','0','0','0','0','1364717206');");
E_D("replace into `pd_hits` values('c-19-5','38','0','0','0','0','0','1364717230');");
E_D("replace into `pd_hits` values('c-19-6','38','0','0','0','0','0','1364717654');");
E_D("replace into `pd_hits` values('c-19-7','38','0','0','0','0','0','1364717761');");
E_D("replace into `pd_hits` values('c-19-8','38','0','0','0','0','0','1364717797');");
E_D("replace into `pd_hits` values('c-13-1','8','4','0','1','4','4','1365153527');");
E_D("replace into `pd_hits` values('c-13-2','8','4','1','1','2','2','1365153523');");
E_D("replace into `pd_hits` values('c-14-1','37','0','0','0','0','0','1364736903');");
E_D("replace into `pd_hits` values('c-14-2','37','0','0','0','0','0','1364737029');");
E_D("replace into `pd_hits` values('c-3-1','10','4','3','1','4','4','1365132056');");
E_D("replace into `pd_hits` values('c-3-2','10','2','0','1','2','2','1365056971');");
E_D("replace into `pd_hits` values('c-3-3','10','1','0','1','1','1','1365057753');");
E_D("replace into `pd_hits` values('c-3-4','10','0','0','0','0','0','1364737335');");
E_D("replace into `pd_hits` values('c-3-5','10','2','0','2','2','2','1365053617');");
E_D("replace into `pd_hits` values('c-17-1','41','0','0','0','0','0','1364830046');");
E_D("replace into `pd_hits` values('c-17-2','41','0','0','0','0','0','1364830095');");
E_D("replace into `pd_hits` values('c-17-3','41','0','0','0','0','0','1364830596');");
E_D("replace into `pd_hits` values('c-17-4','41','0','0','0','0','0','1364830611');");
E_D("replace into `pd_hits` values('c-17-5','41','0','0','0','0','0','1364830622');");
E_D("replace into `pd_hits` values('c-16-1','36','4','0','4','4','4','1365062570');");
E_D("replace into `pd_hits` values('c-16-2','36','2','0','2','2','2','1365063087');");
E_D("replace into `pd_hits` values('c-16-3','36','10','0','10','10','10','1365062407');");
E_D("replace into `pd_hits` values('c-16-4','36','1','0','1','1','1','1365083836');");
E_D("replace into `pd_hits` values('c-16-5','36','1','0','1','1','1','1365083979');");
E_D("replace into `pd_hits` values('c-20-1','39','0','0','0','0','0','1365087509');");
E_D("replace into `pd_hits` values('c-20-2','39','0','0','0','0','0','1365087541');");
E_D("replace into `pd_hits` values('c-20-3','39','0','0','0','0','0','1365087553');");
E_D("replace into `pd_hits` values('c-20-4','39','0','0','0','0','0','1365087565');");
E_D("replace into `pd_hits` values('c-20-5','39','0','0','0','0','0','1365087577');");
E_D("replace into `pd_hits` values('c-20-6','39','0','0','0','0','0','1365087587');");
E_D("replace into `pd_hits` values('c-20-7','39','0','0','0','0','0','1365087597');");
E_D("replace into `pd_hits` values('c-20-8','39','0','0','0','0','0','1365087608');");
E_D("replace into `pd_hits` values('c-20-9','39','0','0','0','0','0','1365087617');");
E_D("replace into `pd_hits` values('c-20-10','39','0','0','0','0','0','1365087625');");
E_D("replace into `pd_hits` values('c-20-11','39','0','0','0','0','0','1365087636');");
E_D("replace into `pd_hits` values('c-20-12','39','0','0','0','0','0','1365087644');");
E_D("replace into `pd_hits` values('c-20-13','39','0','0','0','0','0','1365087656');");
E_D("replace into `pd_hits` values('c-18-1','20','0','0','0','0','0','1365132599');");
E_D("replace into `pd_hits` values('c-18-2','20','0','0','0','0','0','1365132673');");
E_D("replace into `pd_hits` values('c-18-3','20','0','0','0','0','0','1365132711');");
E_D("replace into `pd_hits` values('c-18-4','20','0','0','0','0','0','1365132895');");
E_D("replace into `pd_hits` values('c-18-5','20','0','0','0','0','0','1365132942');");
E_D("replace into `pd_hits` values('c-18-6','20','0','0','0','0','0','1365132986');");
E_D("replace into `pd_hits` values('c-18-7','20','0','0','0','0','0','1365133029');");
E_D("replace into `pd_hits` values('c-18-8','20','0','0','0','0','0','1365133072');");
E_D("replace into `pd_hits` values('c-18-9','20','0','0','0','0','0','1365133108');");
E_D("replace into `pd_hits` values('c-1-201','9','0','0','0','0','0','1365153902');");
E_D("replace into `pd_hits` values('c-1-202','11','0','0','0','0','0','1365153953');");
E_D("replace into `pd_hits` values('c-2-1','13','2','0','2','2','2','1365155482');");

require("../../inc/footer.php");
?>