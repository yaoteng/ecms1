<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news`;");
E_C("CREATE TABLE `phome_ecms_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `smalltext` char(255) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news` values('1','7','0','1','0','0','2016-09-30','1','1','admin','0','0','0','0','0','0','0','1475206997','1475206997','1','0','0','','/ecms/guanyukuichuang/gongsijianjie/2016-09-30/1.html','1','1','1','','公司简介','1475206920','','','广东奎创科技发展有限公司成立于1999年，注册资金1000万。共有员工40多名，高级职称3名，中级以上职称8名。公司秉承中华商道和融共赢的传统理念，以品质和品牌为发展动能，努力打造一','0');");
E_D("replace into `phome_ecms_news` values('2','8','0','0','0','0','2016-09-30','2','1','admin','0','0','0','0','0','0','0','1475207720','1475207720','1','0','0','','/ecms/guanyukuichuang/gongsilicheng/2016-09-30/2.html','1','1','1','','公司历程','1475207697','','','公司历程','0');");
E_D("replace into `phome_ecms_news` values('3','9','0','0','0','0','2016-09-30','3','1','admin','0','0','0','0','0','0','0','1475207744','1475207744','1','0','0','','/ecms/guanyukuichuang/qiyewenhua/2016-09-30/3.html','1','1','1','','企业文化','1475207727','','','企业文化','0');");
E_D("replace into `phome_ecms_news` values('4','10','0','0','0','0','2016-09-30','4','1','admin','0','0','0','0','0','0','0','1475207776','1475207776','1','0','0','','/ecms/guanyukuichuang/rongyuzizhi/2016-09-30/4.html','1','1','1','','荣誉资质','1475207748','','','荣誉资质','0');");
E_D("replace into `phome_ecms_news` values('5','11','0','0','0','0','2016-09-30','5','1','admin','0','0','0','0','0','0','0','1475207797','1475207797','1','0','0','','/ecms/guanyukuichuang/yuangongfengcai/2016-09-30/5.html','1','1','1','','员工风采','1475207781','','','员工风采','0');");
E_D("replace into `phome_ecms_news` values('24','19','0','0','0','0','2016-10-05','24','1','admin','0','0','1','0','0','0','0','1475652827','1477985788','1','0','0','','/ecms/chenggonganli/jiankongxitong/2016-10-05/24.html','1','1','1','','系统集成1','1475652780','/ecms/d/file/chenggonganli/jiankongxitong/2016-10-05/592c8143d032ba404029f287c86688b5.jpg','','系统集成1','0');");
E_D("replace into `phome_ecms_news` values('25','20','0','0','0','0','2016-10-05','25','1','admin','0','0','1','0','0','0','0','1475652895','1477985805','1','0','0','','/ecms/chenggonganli/xinxijicheng/2016-10-05/25.html','1','1','1','','信息集成','1475652834','/ecms/d/file/chenggonganli/xinxijicheng/2016-10-05/a12d508f4564cca93eb6aed378963a56.jpg','','信息集成','0');");
E_D("replace into `phome_ecms_news` values('21','14','0','0','0','0','2016-10-05','21','1','admin','0','0','1','0','0','0','0','1475651617','1477983717','1','0','0','','/ecms/xinwenzhongxin/meitibaodao/2016-10-05/21.html','1','1','1','','媒体报道1','1475651595','/ecms/d/file/xinwenzhongxin/meitibaodao/2016-10-05/1334f03cb03e5a5f5bb1702de026cf01.jpg','','','0');");
E_D("replace into `phome_ecms_news` values('20','13','0','0','0','0','2016-10-05','20','1','admin','0','0','1','0','0','0','0','1475651587','1476083576','1','0','0','','/ecms/xinwenzhongxin/xingyezixun/2016-10-05/20.html','1','1','1','','行业资讯1','1475651563','/ecms/d/file/xinwenzhongxin/xingyezixun/2016-10-05/d080f826a0ed7cb4edb613ba94edc255.jpg','','','0');");
E_D("replace into `phome_ecms_news` values('19','12','0','0','0','0','2016-10-05','19','1','admin','0','0','1','0','0','0','0','1475651551','1477983674','1','0','0','','/ecms/xinwenzhongxin/gongsixinwen/2016-10-05/19.html','1','1','1','','公司新闻1','1475651464','/ecms/d/file/xinwenzhongxin/gongsixinwen/2016-10-05/47a01d1d8c10331c1056dfe5a2159fef.jpg','','','0');");
E_D("replace into `phome_ecms_news` values('22','14','0','0','0','0','2016-10-05','22','1','admin','0','0','1','0','0','0','0','1475651653','1477983709','1','0','0','','/ecms/xinwenzhongxin/meitibaodao/2016-10-05/22.html','1','1','1','','行业资讯2','1475651619','/ecms/d/file/xinwenzhongxin/meitibaodao/2016-10-05/1a98be05618e3f42a3741daddfebbdc3.jpg','','','0');");
E_D("replace into `phome_ecms_news` values('23','13','0','0','0','0','2016-10-05','23','1','admin','0','0','1','0','0','0','0','1475652326','1477983688','1','0','0','','/ecms/xinwenzhongxin/xingyezixun/2016-10-05/23.html','1','1','1','','行业资讯3','1475652301','/ecms/d/file/xinwenzhongxin/xingyezixun/2016-10-05/0ab006ca1b664545ba645fcd53869495.jpg','','','0');");
E_D("replace into `phome_ecms_news` values('26','19','0','0','0','0','2016-10-06','26','1','admin','0','0','1','0','0','0','0','1475722885','1477985779','1','0','0','','/ecms/chenggonganli/jiankongxitong/2016-10-06/26.html','1','1','1','','监控系统','1475722825','/ecms/d/file/chenggonganli/jiankongxitong/2016-10-06/d0b8168969844644f5be1cf33eb8edc5.jpg','','','0');");
E_D("replace into `phome_ecms_news` values('27','15','0','0','0','0','2016-10-06','27','1','admin','0','0','0','0','0','0','0','1475724078','1475724078','1','0','0','','/ecms/lianxiwomen/lianxifangshi/2016-10-06/27.html','1','1','1','','联系方式','1475723997','','','联系方式：        广东省汕头市潮阳区府东庄2幢902','0');");
E_D("replace into `phome_ecms_news` values('28','16','0','0','0','0','2016-10-06','28','1','admin','0','0','0','0','0','0','0','1475724131','1475724131','1','0','0','','/ecms/lianxiwomen/rencaizhaopin/2016-10-06/28.html','1','1','1','','人才招聘','1475724082','','','人才招聘','0');");
E_D("replace into `phome_ecms_news` values('29','21','0','0','0','0','2016-10-08','29','1','admin','0','0','1','0','0','0','0','1475895768','1477983732','1','0','0','','/ecms/zhuyingyewu/product1/2016-10-08/29.html','1','1','1','','产品中心1','1475895715','/ecms/d/file/zhuyingyewu/product1/2016-10-08/ed5cfaf1c8ae444888381763489ea315.jpg','','产品中心1        立体绿化','0');");
E_D("replace into `phome_ecms_news` values('30','22','0','0','0','0','2016-10-08','30','1','admin','0','0','1','0','0','0','0','1475895838','1477984602','1','0','0','','/ecms/chanpinzhongxin/products2/2016-10-08/30.html','1','1','1','','产品中心2','1475895780','/ecms/d/file/chanpinzhongxin/products2/2016-10-08/f095d766164b82a33418d553659fc82e.jpg','','','0');");
E_D("replace into `phome_ecms_news` values('31','23','0','0','0','0','2016-10-08','31','1','admin','0','0','1','0','0','0','0','1475895877','1477985495','1','0','0','','/ecms/chanpinzhongxin/products3/2016-10-08/31.html','1','1','1','','产品中心3','1475895843','/ecms/d/file/chanpinzhongxin/products3/2016-10-08/e70ea4c6bba2713492ada8c4b85505cb.jpg','','','0');");
E_D("replace into `phome_ecms_news` values('32','25','0','0','0','0','2016-10-08','32','1','admin','0','0','1','0','0','0','0','1475911166','1477983772','1','0','0','','/ecms/zhuyingyewu/business2/2016-10-08/32.html','1','1','1','','主营业务1','1475911132','/ecms/d/file/zhuyingyewu/business2/2016-10-08/555a5294d291e13c3b61fcca00a79734.jpg','','主营业务1','0');");
E_D("replace into `phome_ecms_news` values('33','24','0','0','0','0','2016-10-08','33','1','admin','0','0','1','0','0','0','0','1475911237','1477983746','1','0','0','','/ecms/zhuyingyewu/business1/2016-10-08/33.html','1','1','1','','主营业务2','1475911206','/ecms/d/file/zhuyingyewu/business1/2016-10-08/b108d82ae64b7876812293f49965c799.jpg','','主营业务1','0');");
E_D("replace into `phome_ecms_news` values('34','26','0','0','0','0','2016-10-08','34','1','admin','0','0','1','0','0','0','0','1475911396','1477984826','1','0','0','','/ecms/chanpinzhongxin/product4/2016-10-08/34.html','1','1','1','','产品中心4','1475911358','/ecms/d/file/chanpinzhongxin/product4/2016-10-08/4902487c77789ad48471b0cb0c2bedfa.jpg','','产品中心','0');");
E_D("replace into `phome_ecms_news` values('35','27','0','0','0','0','2016-10-08','35','1','admin','0','0','1','0','0','0','0','1475911661','1477985482','1','0','0','','/ecms/chenggonganli/information/2016-10-08/35.html','1','1','1','','系统集成2','1475911624','/ecms/d/file/chenggonganli/information/2016-10-08/8297cacff5cf8c86ef5013f48a3729f9.jpg','','','0');");
E_D("replace into `phome_ecms_news` values('36','27','0','0','0','0','2016-10-08','36','1','admin','0','0','1','0','0','0','0','1475911696','1477985473','1','0','0','','/ecms/chenggonganli/information/2016-10-08/36.html','1','1','1','','产品集成1','1475911663','/ecms/d/file/chenggonganli/information/2016-10-08/5fea35d0825a0b85a623b48ca8c38e4c.jpg','','','0');");
E_D("replace into `phome_ecms_news` values('37','20','0','0','0','0','2016-10-08','37','1','admin','0','0','1','0','0','0','0','1475911758','1477985797','1','0','0','','/ecms/chenggonganli/xinxijicheng/2016-10-08/37.html','1','1','1','','系统集成1','1475911721','/ecms/d/file/chenggonganli/xinxijicheng/2016-10-08/1ddba84e55a19d6fd3ca737ec95bc542.jpg','','','0');");

@include("../../inc/footer.php");
?>