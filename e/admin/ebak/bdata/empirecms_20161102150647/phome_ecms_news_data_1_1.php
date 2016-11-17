<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_data_1`;");
E_C("CREATE TABLE `phome_ecms_news_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `writer` varchar(30) NOT NULL DEFAULT '',
  `befrom` varchar(60) NOT NULL DEFAULT '',
  `newstext` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_data_1` values('1','7','','1','0','0','0','','','','<p>广东奎创科技发展有限公司成立于1999年，注册资金1000万。共有员工40多名，高级职称3名，中级以上职称8名。公司秉承中华商道和融共赢的传统理念，以品质和品牌为发展动能，努力打造一流的精英团队，增强质量意识，提高全员素质，承担更多的社会责任。奎创坚持&ldquo;源于品质、重在服务&rdquo;的宗旨；信守&ldquo;质量优、效率高、服务好&rdquo;的经营理念。 <br />\r\n奎创历经16年诚信创业，逐步壮大，已发展成为一家跨领域综合型企业。自2014年起公司集中资源投入城市空间立体绿化项目发展，并力求创新发展成为该行业全国知名企业。<br />\r\n奎创在汕头大学与工学院合作建立&ldquo;绿色建筑实验室&rdquo;，开展绿色建筑的研发工作；在广州郊区与广东建筑职业技术学院作作建立&ldquo;绿色建筑实践基地&rdquo;，开展绿色建筑工程的设计、施工及维护方面的实践研究；在汕头市潮阳区建立&ldquo;绿色建筑&mdash;&mdash;育苗科研基地&rdquo;，开展应用于建筑立体绿化的育苗科研活动。<br />\r\n奎创系中国建筑节能协会理事单位、（2015）中国创新创业大赛广东赛区总决赛优胜企业、广东省守合同重信用企业、汕头市承诺诚信单位、汕头市私营企业协会理事单位、公司已通过ISO9001国际认证，持有贰级&ldquo;广东省安全技术防范系统设计、施工、维修资格证&rdquo;和叁级&ldquo;信息系统集成及服务资质证书&rdquo;、&ldquo;涉密信息系统集成（乙级）&rdquo;资质。<br />\r\n纳四海人才，汇团队智慧，励精图治，共创辉煌！<br />\r\n&nbsp;</p>');");
E_D("replace into `phome_ecms_news_data_1` values('2','8','','1','10','0','0','','','','<p>公司历程</p>');");
E_D("replace into `phome_ecms_news_data_1` values('3','9','','1','10','0','0','','','','<p>企业文化</p>');");
E_D("replace into `phome_ecms_news_data_1` values('4','10','','1','0','0','0','','','','<p>荣誉资质</p>');");
E_D("replace into `phome_ecms_news_data_1` values('5','11','','1','0','0','0','','','','<p>员工风采</p>');");
E_D("replace into `phome_ecms_news_data_1` values('25','20','','1','13','0','0','','','','<p><img alt=\\\\\"2-160G2092432M6.jpg\\\\\" width=\\\\\"600\\\\\" height=\\\\\"402\\\\\" src=\\\\\"/ecms/d/file/chenggonganli/xinxijicheng/2016-10-05/028b8448f9c2e2da1d7d1715af79233c.jpg\\\\\" />信息集成</p>');");
E_D("replace into `phome_ecms_news_data_1` values('24','19','','1','13','0','0','','','','<p>系统集成1</p>\r\n<p><img alt=\\\\\"2-160G11519435S.jpg\\\\\" width=\\\\\"325\\\\\" height=\\\\\"249\\\\\" src=\\\\\"/ecms/d/file/chenggonganli/jiankongxitong/2016-10-05/491f4d6bdf6a4ebd3aa4706340fafb54.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('19','12','','1','0','0','0','','','','<p><img alt=\\\\\"1-160FGIQV52.jpg\\\\\" width=\\\\\"1920\\\\\" height=\\\\\"600\\\\\" src=\\\\\"/ecms/d/file/xinwenzhongxin/gongsixinwen/2016-10-05/47a01d1d8c10331c1056dfe5a2159fef.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('20','13','','1','0','0','0','','','','<p><img src=\\\\\"/ecms/d/file/xinwenzhongxin/xingyezixun/2016-10-05/d080f826a0ed7cb4edb613ba94edc255.jpg\\\\\" alt=\\\\\"1J6104K4-0-lp.jpg\\\\\" width=\\\\\"184\\\\\" height=\\\\\"180\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('21','14','','1','0','0','0','','','','<p><img alt=\\\\\"1HP51056-0-lp.jpg\\\\\" width=\\\\\"240\\\\\" height=\\\\\"135\\\\\" src=\\\\\"/ecms/d/file/xinwenzhongxin/meitibaodao/2016-10-05/1334f03cb03e5a5f5bb1702de026cf01.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('22','14','','1','0','0','0','','','','<p><img alt=\\\\\"1H92Q5c-0-lp.jpg\\\\\" width=\\\\\"240\\\\\" height=\\\\\"100\\\\\" src=\\\\\"/ecms/d/file/xinwenzhongxin/meitibaodao/2016-10-05/1a98be05618e3f42a3741daddfebbdc3.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('23','13','','1','0','0','0','','','','<p><img alt=\\\\\"1J53TR0-0-lp.jpg\\\\\" width=\\\\\"240\\\\\" height=\\\\\"144\\\\\" src=\\\\\"/ecms/d/file/xinwenzhongxin/xingyezixun/2016-10-05/0ab006ca1b664545ba645fcd53869495.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('26','19','','1','13','0','0','','','','<p><img alt=\\\\\"1H42M595-0-lp.jpg\\\\\" width=\\\\\"240\\\\\" height=\\\\\"154\\\\\" src=\\\\\"/ecms/d/file/chenggonganli/jiankongxitong/2016-10-06/3dd8c66ec124db707879405955de10dd.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('27','15','','1','0','0','0','','','','<p>联系方式：</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 广东省汕头市潮阳区府东庄2幢902</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>');");
E_D("replace into `phome_ecms_news_data_1` values('28','16','','1','0','0','0','','','','<p>人才招聘</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>');");
E_D("replace into `phome_ecms_news_data_1` values('29','21','','1','10','0','0','','','','<p><img alt=\\\\\"2-160G11519435S.jpg\\\\\" width=\\\\\"325\\\\\" height=\\\\\"249\\\\\" src=\\\\\"/ecms/d/file/zhuyingyewu/product1/2016-10-08/ed5cfaf1c8ae444888381763489ea315.jpg\\\\\" />产品中心1</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 立体绿化</p>');");
E_D("replace into `phome_ecms_news_data_1` values('30','22','','1','12','0','0','','','','<p><img alt=\\\\\"1-160FG44021L5.jpg\\\\\" width=\\\\\"1920\\\\\" height=\\\\\"600\\\\\" src=\\\\\"/ecms/d/file/chanpinzhongxin/products2/2016-10-08/b64b1d80f227d3c38427b708d534fd8d.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('31','23','','1','12','0','0','','','','<p><img alt=\\\\\"1-160FG4222QW.jpg\\\\\" width=\\\\\"1920\\\\\" height=\\\\\"600\\\\\" src=\\\\\"/ecms/d/file/chanpinzhongxin/products3/2016-10-08/f45e2b0884bae66f88f6fe561a56aedb.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('32','25','','1','10','0','0','','','','<p>主营业务1<img alt=\\\\\"1HP51056-0-lp.jpg\\\\\" width=\\\\\"240\\\\\" height=\\\\\"135\\\\\" src=\\\\\"/ecms/d/file/zhuyingyewu/business2/2016-10-08/555a5294d291e13c3b61fcca00a79734.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('33','24','','1','0','0','0','','','','<p>主营业务1<img alt=\\\\\"1-160FG44021L5.jpg\\\\\" width=\\\\\"1920\\\\\" height=\\\\\"600\\\\\" src=\\\\\"/ecms/d/file/zhuyingyewu/business1/2016-10-08/b108d82ae64b7876812293f49965c799.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('34','26','','1','12','0','0','','','','<p>产品中心<img alt=\\\\\"1-160FG63R11D.jpg\\\\\" width=\\\\\"1920\\\\\" height=\\\\\"600\\\\\" src=\\\\\"/ecms/d/file/chanpinzhongxin/product4/2016-10-08/4902487c77789ad48471b0cb0c2bedfa.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('35','27','','1','13','0','0','','','','<p><img alt=\\\\\"1-160FG63R11D.jpg\\\\\" width=\\\\\"1920\\\\\" height=\\\\\"600\\\\\" src=\\\\\"/ecms/d/file/chenggonganli/information/2016-10-08/8297cacff5cf8c86ef5013f48a3729f9.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('36','27','','1','13','0','0','','','','<p><img alt=\\\\\"1-160FG4222QW.jpg\\\\\" width=\\\\\"1920\\\\\" height=\\\\\"600\\\\\" src=\\\\\"/ecms/d/file/chenggonganli/information/2016-10-08/5fea35d0825a0b85a623b48ca8c38e4c.jpg\\\\\" /></p>');");
E_D("replace into `phome_ecms_news_data_1` values('37','20','','1','13','0','0','','','','<p><img alt=\\\\\"1P312O25-0-lp.jpg\\\\\" width=\\\\\"240\\\\\" height=\\\\\"133\\\\\" src=\\\\\"/ecms/d/file/chenggonganli/xinxijicheng/2016-10-08/1ddba84e55a19d6fd3ca737ec95bc542.jpg\\\\\" /></p>');");

@include("../../inc/footer.php");
?>