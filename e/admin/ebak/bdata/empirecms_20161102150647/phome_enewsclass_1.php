<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclass`;");
E_C("CREATE TABLE `phome_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclass` values('1','0','关于奎创','|7|8|9|10|11|','0','25','10','0','0','1','','0','guanyukuichuang','.html','Y-m-d','0','.html','0','1','10','10','10','','0','1','','10','1','1','10','关于奎创','0','2','1','news','0','0','2','2','id DESC','newstime DESC','广东奎创科技发展有限公司成立于1999年，注册资金1000万。共有员工40多名，高级职称3名，中级以上职称8名。公司秉承中华商道和融共赢的传统理念，以品质和品牌为发展动能，努力打造一流的精英团队，增强质量意识，提高全员素质，承担更多的社会责任。奎创坚持“源于品质、重在服务”的宗旨；信守“质量优、效率高、服务好”的经营理念。rn \r\n 奎创历经16年诚信创业，逐步壮大，已发展成为一家跨领域综合型企业。自2014年起公司集中资源投入城市空间立体绿化项目发展，并力求创新发展成为该行业全国知名企业。\r\n奎创在汕头大学与工学院合作建立“绿色建筑实验室”，开展绿色建筑的研发工作；在广州郊区与广东建筑职业技术学院作作建立“绿色建筑实践基地”，开展绿色建筑工程的设计、施工及维护方面的实践研究；在汕头市潮阳区建立“绿色建筑——育苗科研基地”，开展应用于建筑立体绿化的育苗科研活动。rn\r\n 奎创系中国建筑节能协会理事单位、（2015）中国创新创业大赛广东赛区总决赛优胜企业、广东省守合同重信用企业、汕头市承诺诚信单位、汕头市私营企业协会理事单位、公司已通过ISO9001国际认证，持有贰级“广东省安全技术防范系统设计、施工、维修资格证”和叁级“信息系统集成及服务资质证书”、“涉密信息系统集成（乙级）”资质。rn\r\n纳四海人才，汇团队智慧，励精图治，共创辉煌！','','1','0','0','0','0','0','0','','0','0','0','','1','3','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','0','0','1473384090');");
E_D("replace into `phome_enewsclass` values('2','0','新闻中心','|12|13|14|','0','25','10','0','0','9','','0','xinwenzhongxin','.html','Y-m-d','0','.html','0','1','10','10','10','','0','2','','10','1','1','10','新闻中心','1','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','0','0','1473387493');");
E_D("replace into `phome_enewsclass` values('3','0','主营业务','|21|24|25|','0','25','10','0','0','12','','0','zhuyingyewu','.html','Y-m-d','0','.html','0','1','10','10','10','','0','3','','10','1','1','10','主营业务','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','12','5','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','0','0','1473387647');");
E_D("replace into `phome_enewsclass` values('4','0','产品中心','|22|23|26|','0','25','10','0','0','13','','0','chanpinzhongxin','.html','Y-m-d','0','.html','0','1','10','10','10','','0','4','','10','1','1','10','产品中心','1','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','5','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','0','0','1473387680');");
E_D("replace into `phome_enewsclass` values('5','0','成功案例','|19|20|27|','0','25','10','0','0','11','','0','chenggonganli','.html','Y-m-d','0','.html','0','1','10','10','10','','0','5','','10','1','1','10','成功案例','1','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','11','3','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','0','0','1473387711');");
E_D("replace into `phome_enewsclass` values('6','0','联系我们','|15|16|','0','25','10','0','0','14','','0','lianxiwomen','.html','Y-m-d','0','.html','0','1','10','10','10','','0','6','','10','1','1','10','联系我们','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','14','4','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','0','0','1473387731');");
E_D("replace into `phome_enewsclass` values('7','1','公司简介','','0','25','10','10','0','10','|1|','1','guanyukuichuang/gongsijianjie','.html','Y-m-d','0','.html','0','1','10','10','10','','0','101','','10','1','1','10','公司简介','0','2','1','news','0','0','2','2','id DESC','newstime DESC','公司简介','','1','0','0','0','0','0','0','','0','0','0','','10','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','1','1','1473387846');");
E_D("replace into `phome_enewsclass` values('8','1','公司历程','','0','25','10','10','0','10','|1|','1','guanyukuichuang/gongsilicheng','.html','Y-m-d','0','.html','0','1','10','10','10','','0','102','','10','1','1','10','公司历程','0','2','1','news','0','0','2','2','id DESC','newstime DESC','公司历程','','1','0','0','0','0','0','0','','0','0','0','','10','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','1','1','1473387899');");
E_D("replace into `phome_enewsclass` values('9','1','企业文化','','0','25','10','10','0','10','|1|','1','guanyukuichuang/qiyewenhua','.html','Y-m-d','0','.html','0','1','10','10','10','','0','103','','10','1','1','10','企业文化','0','2','1','news','0','0','2','2','id DESC','newstime DESC','企业文化','','1','0','0','0','0','0','0','','0','0','0','','10','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','1','1','1473387943');");
E_D("replace into `phome_enewsclass` values('10','1','荣誉资质','','0','25','10','10','0','10','|1|','1','guanyukuichuang/rongyuzizhi','.html','Y-m-d','0','.html','0','1','10','10','10','','0','104','','10','1','1','10','荣誉资质','0','2','1','news','0','0','2','2','id DESC','newstime DESC','荣誉资质','','1','0','0','0','0','0','0','','0','0','0','','10','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','1','1','1473388055');");
E_D("replace into `phome_enewsclass` values('11','1','员工风采','','0','25','10','10','0','10','|1|','1','guanyukuichuang/yuangongfengcai','.html','Y-m-d','0','.html','0','1','10','10','10','','0','105','','10','1','1','10','员工风采','0','2','1','news','0','0','2','2','id DESC','newstime DESC','员工风采','','1','0','0','0','0','0','0','','0','0','0','','10','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','1','1','1473388135');");
E_D("replace into `phome_enewsclass` values('12','2','公司新闻','','0','25','10','10','0','9','|2|','1','xinwenzhongxin/gongsixinwen','.html','Y-m-d','0','.html','0','1','10','10','10','','0','201','','10','1','1','10','公司新闻','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','1','1','1473388205');");
E_D("replace into `phome_enewsclass` values('13','2','行业资讯','','0','25','10','10','0','9','|2|','1','xinwenzhongxin/xingyezixun','.html','Y-m-d','0','.html','0','1','10','10','10','','0','202','','10','1','1','10','行业资讯','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','2','2','1473388243');");
E_D("replace into `phome_enewsclass` values('14','2','媒体报道','','0','25','10','10','0','9','|2|','1','xinwenzhongxin/meitibaodao','.html','Y-m-d','0','.html','0','1','10','10','10','','0','203','','10','1','1','10','媒体报道','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','9','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','2','2','1473388278');");
E_D("replace into `phome_enewsclass` values('15','6','联系方式','','0','25','10','10','0','14','|6|','1','lianxiwomen/lianxifangshi','.html','Y-m-d','0','.html','0','1','10','10','10','','0','601','','10','1','1','10','联系方式','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','14','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1473388328');");
E_D("replace into `phome_enewsclass` values('16','6','人才招聘','','0','25','10','10','0','14','|6|','1','lianxiwomen/rencaizhaopin','.html','Y-m-d','0','.html','0','1','10','10','10','','0','602','','10','1','1','10','人才招聘','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','14','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1473388368');");
E_D("replace into `phome_enewsclass` values('19','5','监控系统','','0','25','10','13','0','11','|5|','1','chenggonganli/jiankongxitong','.html','Y-m-d','0','.html','0','1','10','10','10','','0','501','','10','1','1','10','监控系统','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1475216839');");
E_D("replace into `phome_enewsclass` values('20','5','信息集成','','0','25','10','13','0','11','|5|','1','chenggonganli/xinxijicheng','.html','Y-m-d','0','.html','0','1','10','10','10','','0','502','','10','1','1','10','信息集成','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1475216880');");
E_D("replace into `phome_enewsclass` values('21','3','产品中心1','','0','25','10','11','0','12','|3|','1','zhuyingyewu/product1','.html','Y-m-d','0','.html','0','1','10','10','10','','0','301','','10','1','1','10','产品中心1','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','12','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','1','1','1475894875');");
E_D("replace into `phome_enewsclass` values('22','4','产品中心2','','0','25','10','12','0','13','|4|','1','chanpinzhongxin/products2','.html','Y-m-d','0','.html','0','1','10','10','10','','0','401','','10','1','1','10','产品中心2','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','1','0','1','','0','0','0','','0','0','1','1','1475895545');");
E_D("replace into `phome_enewsclass` values('23','4','产品中心3','','0','25','10','12','0','13','|4|','1','chanpinzhongxin/products3','.html','Y-m-d','0','.html','0','1','10','10','10','','0','402','','10','1','1','10','产品中心3','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','1','1','1475895632');");
E_D("replace into `phome_enewsclass` values('24','3','主营业务1','','0','25','10','11','0','12','|3|','1','zhuyingyewu/business1','.html','Y-m-d','0','.html','0','1','10','10','10','','0','302','','10','1','1','10','主营业务1','1','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','12','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','1','1','1475911079');");
E_D("replace into `phome_enewsclass` values('25','3','主营业务2','','0','25','10','11','0','12','|3|','1','zhuyingyewu/business2','.html','Y-m-d','0','.html','0','1','10','10','10','','0','303','','10','1','1','10','主营业务2','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','12','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','1','1','1475911124');");
E_D("replace into `phome_enewsclass` values('26','4','产品中心4','','0','25','10','12','0','13','|4|','1','chanpinzhongxin/product4','.html','Y-m-d','0','.html','0','1','10','10','10','','0','403','','10','1','1','10','产品中心4','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','13','1','0','0','0','0','','1','0','0','0','','0','1','0','0','','0','0','0','','0','0','1','1','1475911342');");
E_D("replace into `phome_enewsclass` values('27','5','信息集成2','','0','25','10','13','0','11','|5|','1','chenggonganli/information','.html','Y-m-d','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','信息集成2','0','2','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','11','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1475911611');");

@include("../../inc/footer.php");
?>