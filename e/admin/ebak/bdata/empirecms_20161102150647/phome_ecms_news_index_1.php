<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('1','7','1','1475206920','1475206997','1475206997','1');");
E_D("replace into `phome_ecms_news_index` values('2','8','1','1475207697','1475207720','1475207720','1');");
E_D("replace into `phome_ecms_news_index` values('3','9','1','1475207727','1475207744','1475207744','1');");
E_D("replace into `phome_ecms_news_index` values('4','10','1','1475207748','1475207776','1475207776','1');");
E_D("replace into `phome_ecms_news_index` values('5','11','1','1475207781','1475207797','1475207797','1');");
E_D("replace into `phome_ecms_news_index` values('24','19','1','1475652780','1475652827','1477985788','1');");
E_D("replace into `phome_ecms_news_index` values('25','20','1','1475652834','1475652895','1477985805','1');");
E_D("replace into `phome_ecms_news_index` values('21','14','1','1475651595','1475651617','1477983717','1');");
E_D("replace into `phome_ecms_news_index` values('20','13','1','1475651563','1475651587','1476083576','1');");
E_D("replace into `phome_ecms_news_index` values('19','12','1','1475651464','1475651551','1477983674','1');");
E_D("replace into `phome_ecms_news_index` values('22','14','1','1475651619','1475651653','1477983709','1');");
E_D("replace into `phome_ecms_news_index` values('23','13','1','1475652301','1475652326','1477983688','1');");
E_D("replace into `phome_ecms_news_index` values('26','19','1','1475722825','1475722885','1477985779','1');");
E_D("replace into `phome_ecms_news_index` values('27','15','1','1475723997','1475724078','1475724078','1');");
E_D("replace into `phome_ecms_news_index` values('28','16','1','1475724082','1475724131','1475724131','1');");
E_D("replace into `phome_ecms_news_index` values('29','21','1','1475895715','1475895768','1477983732','1');");
E_D("replace into `phome_ecms_news_index` values('30','22','1','1475895780','1475895838','1477984602','1');");
E_D("replace into `phome_ecms_news_index` values('31','23','1','1475895843','1475895877','1477985495','1');");
E_D("replace into `phome_ecms_news_index` values('32','25','1','1475911132','1475911166','1477983772','1');");
E_D("replace into `phome_ecms_news_index` values('33','24','1','1475911206','1475911237','1477983746','1');");
E_D("replace into `phome_ecms_news_index` values('34','26','1','1475911358','1475911396','1477984826','1');");
E_D("replace into `phome_ecms_news_index` values('35','27','1','1475911624','1475911661','1477985482','1');");
E_D("replace into `phome_ecms_news_index` values('36','27','1','1475911663','1475911696','1477985473','1');");
E_D("replace into `phome_ecms_news_index` values('37','20','1','1475911721','1475911758','1477985797','1');");

@include("../../inc/footer.php");
?>