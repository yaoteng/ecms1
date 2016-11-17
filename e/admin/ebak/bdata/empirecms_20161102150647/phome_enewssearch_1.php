<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearch`;");
E_C("CREATE TABLE `phome_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearch` values('1','产','1476083848','title','5','192.168.1.98','','1','newstime','0','de9d368fbd3bb0f4ffae7a7a6e930c2c','news','0','0',' and ((title LIKE ''%产%''))','0');");
E_D("replace into `phome_enewssearch` values('2','新','1476157610','title','1','127.0.0.1','','28','newstime','0','5aaae2f4831bc295a518815cb904f902','news','0','0',' and ((title LIKE ''%新%''))','0');");
E_D("replace into `phome_enewssearch` values('3','行','1476158056','title','3','192.168.1.71','','7','newstime','0','1f9f230e93d716151fba0656b49051c0','news','0','0',' and ((title LIKE ''%行%''))','0');");
E_D("replace into `phome_enewssearch` values('4','系统集成','1476233631','title','3','127.0.0.1','','1','newstime','0','2b9eb2d0863185557866907faed56ed8','news','0','0',' and ((title LIKE ''%系统集成%''))','0');");
E_D("replace into `phome_enewssearch` values('5','产品','1476525362','title','5','127.0.0.1','','1','newstime','0','73c2dce8448fd4cc0abc1d68764649c9','news','0','0',' and ((title LIKE ''%产品%''))','0');");

@include("../../inc/footer.php");
?>