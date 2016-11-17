<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_1`;");
E_C("CREATE TABLE `phome_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_1` values('23','1000010000000026','3dd8c66ec124db707879405955de10dd.jpg','9309','2016-10-06','admin','1475722880','19','1H42M595-0-lp.jpg','1','0','26','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('22','1000010000000026','d0b8168969844644f5be1cf33eb8edc5.jpg','9309','2016-10-06','admin','1475722869','19','1H42M595-0-lp.jpg','1','0','26','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('21','1000010000000024','491f4d6bdf6a4ebd3aa4706340fafb54.jpg','38002','2016-10-05','admin','1475653006','19','2-160G11519435S.jpg','1','0','24','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('20','1000010000000025','028b8448f9c2e2da1d7d1715af79233c.jpg','165964','2016-10-05','admin','1475652970','20','2-160G2092432M6.jpg','1','0','25','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('19','1000010000000025','a12d508f4564cca93eb6aed378963a56.jpg','165964','2016-10-05','admin','1475652864','20','2-160G2092432M6.jpg','1','0','25','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('18','1000010000000024','592c8143d032ba404029f287c86688b5.jpg','38002','2016-10-05','admin','1475652809','19','2-160G11519435S.jpg','1','0','24','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('14','1000010000000020','d080f826a0ed7cb4edb613ba94edc255.jpg','7758','2016-10-05','admin','1475651581','13','1J6104K4-0-lp.jpg','1','0','20','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('13','1000010000000019','47a01d1d8c10331c1056dfe5a2159fef.jpg','232239','2016-10-05','admin','1475651535','12','1-160FGIQV52.jpg','1','0','19','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('16','1000010000000022','1a98be05618e3f42a3741daddfebbdc3.jpg','6660','2016-10-05','admin','1475651648','14','1H92Q5c-0-lp.jpg','1','0','22','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('15','1000010000000021','1334f03cb03e5a5f5bb1702de026cf01.jpg','11770','2016-10-05','admin','1475651612','14','1HP51056-0-lp.jpg','1','0','21','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('24','1000010000000030','f095d766164b82a33418d553659fc82e.jpg','165122','2016-10-08','admin','1475895814','22','1-160FG44021L5.jpg','1','0','30','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('17','1000010000000023','0ab006ca1b664545ba645fcd53869495.jpg','8408','2016-10-05','admin','1475652322','13','1J53TR0-0-lp.jpg','1','0','23','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('25','1000010000000030','b64b1d80f227d3c38427b708d534fd8d.jpg','165122','2016-10-08','admin','1475895828','22','1-160FG44021L5.jpg','1','0','30','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('26','1000010000000031','e70ea4c6bba2713492ada8c4b85505cb.jpg','168205','2016-10-08','admin','1475895859','23','1-160FG4222QW.jpg','1','0','31','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('27','1000010000000031','f45e2b0884bae66f88f6fe561a56aedb.jpg','168205','2016-10-08','admin','1475895872','23','1-160FG4222QW.jpg','1','0','31','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('28','1000010000000029','ed5cfaf1c8ae444888381763489ea315.jpg','38002','2016-10-08','admin','1475910212','21','2-160G11519435S.jpg','1','0','29','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('29','1000010000000032','555a5294d291e13c3b61fcca00a79734.jpg','11770','2016-10-08','admin','1475911157','25','1HP51056-0-lp.jpg','1','0','32','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('30','1000010000000033','b108d82ae64b7876812293f49965c799.jpg','165122','2016-10-08','admin','1475911230','24','1-160FG44021L5.jpg','1','0','33','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('31','1000010000000034','4902487c77789ad48471b0cb0c2bedfa.jpg','108519','2016-10-08','admin','1475911388','26','1-160FG63R11D.jpg','1','0','34','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('32','1000010000000035','8297cacff5cf8c86ef5013f48a3729f9.jpg','108519','2016-10-08','admin','1475911653','27','1-160FG63R11D.jpg','1','0','35','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('33','1000010000000036','5fea35d0825a0b85a623b48ca8c38e4c.jpg','168205','2016-10-08','admin','1475911689','27','1-160FG4222QW.jpg','1','0','36','0','0','0');");
E_D("replace into `phome_enewsfile_1` values('34','1000010000000037','1ddba84e55a19d6fd3ca737ec95bc542.jpg','4141','2016-10-08','admin','1475911751','20','1P312O25-0-lp.jpg','1','0','37','0','0','0');");

@include("../../inc/footer.php");
?>