<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslog` values('1','admin','2016-09-08 17:23:50','127.0.0.1','1','','0','57502');");
E_D("replace into `phome_enewslog` values('2','admin','2016-09-09 09:05:15','127.0.0.1','1','','0','53093');");
E_D("replace into `phome_enewslog` values('3','admin','2016-09-21 11:29:45','127.0.0.1','1','','0','63791');");
E_D("replace into `phome_enewslog` values('4','admin','2016-09-21 11:33:21','127.0.0.1','1','','0','64038');");
E_D("replace into `phome_enewslog` values('5','admin','2016-09-21 11:36:38','127.0.0.1','1','','0','64197');");
E_D("replace into `phome_enewslog` values('6','admin','2016-09-21 15:02:55','127.0.0.1','1','','0','49845');");
E_D("replace into `phome_enewslog` values('7','admin','2016-09-23 09:54:13','127.0.0.1','1','','0','51033');");
E_D("replace into `phome_enewslog` values('8','admin','2016-09-23 11:20:51','127.0.0.1','1','','0','52952');");
E_D("replace into `phome_enewslog` values('9','admin','2016-09-24 11:07:20','127.0.0.1','1','','0','51820');");
E_D("replace into `phome_enewslog` values('10','admin','2016-09-24 12:29:58','127.0.0.1','1','','0','53973');");
E_D("replace into `phome_enewslog` values('11','admin','2016-09-24 13:50:54','127.0.0.1','1','','0','54764');");
E_D("replace into `phome_enewslog` values('12','admin','2016-09-24 14:48:52','127.0.0.1','1','','0','52944');");
E_D("replace into `phome_enewslog` values('13','admin','2016-09-25 11:03:48','127.0.0.1','1','','0','53993');");
E_D("replace into `phome_enewslog` values('14','admin','2016-09-25 11:52:14','127.0.0.1','1','','0','54772');");
E_D("replace into `phome_enewslog` values('15','admin','2016-09-25 14:20:23','127.0.0.1','1','','0','54056');");
E_D("replace into `phome_enewslog` values('16','admin','2016-09-25 14:30:20','127.0.0.1','1','','0','54348');");
E_D("replace into `phome_enewslog` values('17','admin','2016-09-25 14:35:07','127.0.0.1','1','','0','54603');");
E_D("replace into `phome_enewslog` values('18','admin','2016-09-25 14:49:46','127.0.0.1','1','','0','54907');");
E_D("replace into `phome_enewslog` values('19','admin','2016-09-25 15:18:27','127.0.0.1','1','','0','55355');");
E_D("replace into `phome_enewslog` values('20','admin','2016-09-26 10:30:25','127.0.0.1','1','','0','52059');");
E_D("replace into `phome_enewslog` values('21','admin','2016-09-26 12:32:40','127.0.0.1','1','','0','52287');");
E_D("replace into `phome_enewslog` values('22','admin','2016-09-26 15:32:23','127.0.0.1','1','','0','54771');");
E_D("replace into `phome_enewslog` values('23','admin','2016-09-26 16:46:38','127.0.0.1','1','','0','61023');");
E_D("replace into `phome_enewslog` values('24','admin','2016-09-26 17:14:08','127.0.0.1','1','','0','53182');");
E_D("replace into `phome_enewslog` values('25','admin','2016-09-27 09:02:54','127.0.0.1','1','','0','50423');");
E_D("replace into `phome_enewslog` values('26','admin','2016-09-27 10:37:28','127.0.0.1','1','','0','54427');");
E_D("replace into `phome_enewslog` values('27','admin','2016-09-28 14:23:45','127.0.0.1','1','','0','50669');");
E_D("replace into `phome_enewslog` values('28','admin','2016-09-29 16:49:43','127.0.0.1','1','','0','63854');");
E_D("replace into `phome_enewslog` values('29','admin','2016-09-30 09:50:26','127.0.0.1','1','','0','50110');");
E_D("replace into `phome_enewslog` values('30','admin','2016-09-30 11:12:47','127.0.0.1','1','','0','51717');");
E_D("replace into `phome_enewslog` values('31','admin','2016-09-30 11:18:01','127.0.0.1','1','','0','51924');");
E_D("replace into `phome_enewslog` values('32','admin','2016-09-30 11:30:28','127.0.0.1','1','','0','52379');");
E_D("replace into `phome_enewslog` values('33','admin','2016-09-30 11:47:34','192.168.1.98','1','','0','57434');");
E_D("replace into `phome_enewslog` values('34','admin','2016-09-30 11:50:35','127.0.0.1','1','','0','53076');");
E_D("replace into `phome_enewslog` values('35','admin','2016-09-30 16:01:17','127.0.0.1','1','','0','56216');");
E_D("replace into `phome_enewslog` values('36','admin','2016-09-30 17:59:06','127.0.0.1','1','','0','58477');");
E_D("replace into `phome_enewslog` values('37','admin','2016-10-05 09:08:19','127.0.0.1','1','','0','50009');");
E_D("replace into `phome_enewslog` values('38','admin','2016-10-05 11:31:54','127.0.0.1','1','','0','52347');");
E_D("replace into `phome_enewslog` values('39','admin','2016-10-05 14:41:12','127.0.0.1','1','','0','54563');");
E_D("replace into `phome_enewslog` values('40','admin','2016-10-05 18:00:50','127.0.0.1','1','','0','60942');");
E_D("replace into `phome_enewslog` values('41','admin','2016-10-06 10:25:41','127.0.0.1','1','','0','50507');");
E_D("replace into `phome_enewslog` values('42','admin','2016-10-07 16:33:31','127.0.0.1','1','','0','55589');");
E_D("replace into `phome_enewslog` values('43','admin','2016-10-07 17:49:55','127.0.0.1','1','','0','57775');");
E_D("replace into `phome_enewslog` values('44','admin','2016-10-08 08:49:20','127.0.0.1','1','','0','49650');");
E_D("replace into `phome_enewslog` values('45','admin','2016-10-08 11:25:25','127.0.0.1','1','','0','52688');");
E_D("replace into `phome_enewslog` values('46','admin','2016-10-08 16:59:47','127.0.0.1','1','','0','57951');");
E_D("replace into `phome_enewslog` values('47','admin','2016-10-08 17:03:34','127.0.0.1','1','','0','58072');");
E_D("replace into `phome_enewslog` values('48','admin','2016-10-10 09:58:45','127.0.0.1','1','','0','50678');");
E_D("replace into `phome_enewslog` values('49','admin','2016-10-10 14:03:22','127.0.0.1','1','','0','54029');");
E_D("replace into `phome_enewslog` values('50','admin','2016-10-10 15:19:59','192.168.1.98','1','','0','60597');");
E_D("replace into `phome_enewslog` values('51','admin','2016-10-10 15:30:20','127.0.0.1','1','','0','56249');");
E_D("replace into `phome_enewslog` values('52','admin','2016-10-10 17:26:56','127.0.0.1','1','','0','58441');");
E_D("replace into `phome_enewslog` values('53','admin','2016-10-11 08:53:00','127.0.0.1','1','','0','49676');");
E_D("replace into `phome_enewslog` values('54','admin','2016-10-11 09:34:59','127.0.0.1','1','','0','50868');");
E_D("replace into `phome_enewslog` values('55','admin','2016-10-11 09:39:56','127.0.0.1','1','','0','50954');");
E_D("replace into `phome_enewslog` values('56','admin','2016-10-17 16:46:37','127.0.0.1','1','','0','53104');");
E_D("replace into `phome_enewslog` values('57','admin','2016-10-18 16:54:20','127.0.0.1','1','','0','62248');");
E_D("replace into `phome_enewslog` values('58','admin','2016-10-20 14:33:03','127.0.0.1','1','','0','59499');");
E_D("replace into `phome_enewslog` values('59','admin','2016-10-30 15:20:52','127.0.0.1','1','','0','55331');");
E_D("replace into `phome_enewslog` values('60','admin','2016-11-01 10:24:57','192.168.1.107','1','','0','49282');");
E_D("replace into `phome_enewslog` values('61','admin','2016-11-01 14:39:06','192.168.1.107','1','','0','54680');");
E_D("replace into `phome_enewslog` values('62','admin','2016-11-01 15:09:29','192.168.1.107','1','','0','55957');");
E_D("replace into `phome_enewslog` values('63','admin','2016-11-01 15:19:26','192.168.1.107','1','','0','56238');");
E_D("replace into `phome_enewslog` values('64','admin','2016-11-02 14:59:51','192.168.1.107','1','','0','61106');");

@include("../../inc/footer.php");
?>