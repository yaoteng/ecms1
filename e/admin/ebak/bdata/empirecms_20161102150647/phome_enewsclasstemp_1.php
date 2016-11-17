<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclasstemp`;");
E_C("CREATE TABLE `phome_enewsclasstemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(30) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclasstemp` values('1','通用一级栏目模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>奎创科技</title>\r\n<LINK rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/default.css\\\\\">\r\n<LINK rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/lanrenzhijia.css\\\\\">\r\n<link href=\\\\\"[!--news.url--]css/home.css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n</head>\r\n<body>\r\n<div id=wrap>\r\n[!--temp.header--]\r\n\r\n[!--temp.footer--]\r\n</div>\r\n</body>\r\n</html>','0');");
E_D("replace into `phome_enewsclasstemp` values('4','封面2','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>奎创科技</title>\r\n<LINK rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/default2.css\\\\\">\r\n<LINK rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/lanrenzhijia.css\\\\\">\r\n<link href=\\\\\"[!--news.url--]css/home.css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n</head>\r\n<body>\r\n<div id=wrap>\r\n[!--temp.header--]\r\n<div class=\\\\\"jjfadatu\\\\\">\r\n  <div class=\\\\\"tu\\\\\"><img src=\\\\\"[!--news.url--]images/lxwm.jpg\\\\\" border=\\\\\"0\\\\\"/></div>\r\n</div>\r\n<div class=\\\\\"hnewstt\\\\\">\r\n     <div class=\\\\\"title\\\\\"><a href=\\\\\"ecms/guanyukuichuang/\\\\\" title=\\\\\"关于奎创\\\\\"><img src=\\\\\"[!--news.url--]images/aboutt.png\\\\\"></a></div>\r\n\r\n</div>\r\n<div class=\\\\\"clear\\\\\"></div>\r\n<!-- nr开始--->\r\n<div id=\\\\\"nr\\\\\"> \r\n  \r\n  <!-- nrleft开始--->\r\n  <div id=\\\\\"nrleft\\\\\">\r\n    <div class=\\\\\"aboutus\\\\\">\r\n      [e:loop={15,1,0,0}]\r\n      <?php\r\n\$fr=\$empire->fetch1(\\\\\"select newstext from {\$dbtbpre}ecms_news_data_{\$bqr[stb]} where id=\\\\''\$bqr[id]\\\\''\\\\\");\r\n?>\r\n<?=\$fr[newstext]?>\r\n     \r\n     [/e:loop]\r\n      </div>\r\n    <div class=\\\\\"blank20\\\\\"></div>\r\n  </div>\r\n  <!-- nrleft结束---> \r\n  \r\n  <!-- nrright开始--->\r\n  <div id=\\\\\"nrright\\\\\">\r\n    <div class=\\\\\"dh\\\\\">\r\n     <ul>\r\n            <?\r\n      \$fcr=explode(\\\\''|\\\\'',\$class_r[\$GLOBALS[navclassid]][featherclass]);\r\n       \$topbclassid=\$fcr[1]?\$fcr[1]:\$GLOBALS[navclassid];//取得当前栏目的一级栏目ID\r\n?>\r\n     [e:loop={\\\\\"select classid,classname,classpath from [!db.pre!]enewsclass where bclassid = \\\\''\$topbclassid\\\\'' order by classid\\\\\",0,24,0}]\r\n<li><a href=\\\\\"<?=\$public_r[newsurl].\$bqr[classpath]?>/\\\\\"><?=\$bqr[classname]?></a></li>\r\n[/e:loop]          </ul>\r\n    </div>\r\n  </div>\r\n  \r\n  <!-- nrright结束---> \r\n  \r\n</div>\r\n</div>\r\n<!-- nr结束---> \r\n<!-- 左右div高度对齐---> \r\n\r\n<!-- 左右div高度对齐--->\r\n<div class=\\\\\"clear blank20\\\\\"></div>\r\n[!--temp.footer--]\r\n</div>\r\n</body>\r\n</html>','0');");
E_D("replace into `phome_enewsclasstemp` values('3','封面1','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>奎创科技</title>\r\n<LINK rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/default2.css\\\\\">\r\n<LINK rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/lanrenzhijia.css\\\\\">\r\n<link href=\\\\\"[!--news.url--]css/home.css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n</head>\r\n<body>\r\n<div id=wrap>\r\n[!--temp.header--]\r\n<div class=\\\\\"jjfadatu\\\\\">\r\n  <div class=\\\\\"tu\\\\\"><img src=\\\\\"[!--news.url--]images/gykc.jpg\\\\\" border=\\\\\"0\\\\\"/></div>\r\n</div>\r\n<div class=\\\\\"hnewstt\\\\\">\r\n     <div class=\\\\\"title\\\\\"><a href=\\\\\"ecms/guanyukuichuang/\\\\\" title=\\\\\"关于奎创\\\\\"><img src=\\\\\"[!--news.url--]images/aboutt.png\\\\\"></a></div>\r\n \r\n</div>\r\n<div class=\\\\\"clear\\\\\"></div>\r\n<!-- nr开始--->\r\n<div id=\\\\\"nr\\\\\"> \r\n  \r\n  <!-- nrleft开始--->\r\n  <div id=\\\\\"nrleft\\\\\">\r\n    <div class=\\\\\"aboutus\\\\\">\r\n      [e:loop={7,1,0,0}]\r\n      <?php\r\n\$fr=\$empire->fetch1(\\\\\"select newstext from {\$dbtbpre}ecms_news_data_{\$bqr[stb]} where id=\\\\''\$bqr[id]\\\\''\\\\\");\r\n?>\r\n<?=\$fr[newstext]?>\r\n     \r\n     [/e:loop]\r\n      </div>\r\n    <div class=\\\\\"blank20\\\\\"></div>\r\n  </div>\r\n  <!-- nrleft结束---> \r\n  \r\n  <!-- nrright开始--->\r\n  <div id=\\\\\"nrright\\\\\">\r\n    <div class=\\\\\"dh\\\\\">\r\n     <ul>\r\n            <?\r\n      \$fcr=explode(\\\\''|\\\\'',\$class_r[\$GLOBALS[navclassid]][featherclass]);\r\n       \$topbclassid=\$fcr[1]?\$fcr[1]:\$GLOBALS[navclassid];//取得当前栏目的一级栏目ID\r\n?>\r\n     [e:loop={\\\\\"select classid,classname,classpath from [!db.pre!]enewsclass where bclassid = \\\\''\$topbclassid\\\\'' order by classid\\\\\",0,24,0}]\r\n<li><a href=\\\\\"<?=\$public_r[newsurl].\$bqr[classpath]?>/\\\\\"><?=\$bqr[classname]?></a></li>\r\n[/e:loop]          </ul>\r\n    </div>\r\n  </div>\r\n  \r\n  <!-- nrright结束---> \r\n  \r\n</div>\r\n</div>\r\n<!-- nr结束---> \r\n<!-- 左右div高度对齐---> \r\n\r\n<!-- 左右div高度对齐--->\r\n<div class=\\\\\"clear blank20\\\\\"></div>\r\n[!--temp.footer--]\r\n</div>\r\n</body>\r\n</html>','0');");
E_D("replace into `phome_enewsclasstemp` values('2','分类信息一级栏目模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--pagetitle--] - Powered by EmpireCMS</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"channle\\\\\">\r\n[!--temp.header--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td class=\\\\\"news_list\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n<tr>\r\n<td>您当前的位置：[!--newsnav--]</td>\r\n</tr>\r\n</table>\r\n[listsonclass]\\\\''selfinfo\\\\'',5,38,0,0,7,0,0[/listsonclass]</td>\r\n<td class=\\\\\"sider\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>分类信息搜索</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><form action=\\\\\"[!--news.url--]e/search/index.php\\\\\" method=\\\\\"post\\\\\" name=\\\\\"searchform\\\\\" id=\\\\\"searchform\\\\\">\r\n<table width=\\\\\"98%\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"6\\\\\">\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"tbname\\\\\" value=\\\\\"info\\\\\">\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"tempid\\\\\" value=\\\\\"1\\\\\">\r\n<tr>\r\n<td><input name=\\\\\"keyboard\\\\\" type=\\\\\"text\\\\\" class=\\\\\"inputText\\\\\" id=\\\\\"keyboard\\\\\" size=\\\\\"18\\\\\" />\r\n<select name=\\\\\"show\\\\\">\r\n<option value=\\\\\"title,smalltext,myarea\\\\\" selected=\\\\\"selected\\\\\">不限</option>\r\n<option value=\\\\\"title\\\\\">信息标题</option>\r\n<option value=\\\\\"smalltext\\\\\">信息内容</option>\r\n<option value=\\\\\"myarea\\\\\">所在地</option>\r\n</select></td>\r\n</tr>\r\n<tr>\r\n<td><select name=\\\\\"classid\\\\\">\r\n<option value=\\\\''9\\\\''>所有分类</option>\r\n<option value=\\\\''10\\\\''>|-房屋信息</option>\r\n<option value=\\\\''11\\\\'' >&nbsp;&nbsp;|-房屋求租</option>\r\n<option value=\\\\''12\\\\'' >&nbsp;&nbsp;|-房屋出租</option>\r\n<option value=\\\\''13\\\\'' >&nbsp;&nbsp;|-房屋求购</option>\r\n<option value=\\\\''14\\\\'' >&nbsp;&nbsp;|-房屋出售</option>\r\n<option value=\\\\''15\\\\'' >&nbsp;&nbsp;|-办公用房</option>\r\n<option value=\\\\''16\\\\'' >&nbsp;&nbsp;|-旺铺门面</option>\r\n<option value=\\\\''17\\\\''>|-跳蚤市场</option>\r\n<option value=\\\\''18\\\\'' >&nbsp;&nbsp;|-电脑配件</option>\r\n<option value=\\\\''19\\\\'' >&nbsp;&nbsp;|-电器数码</option>\r\n<option value=\\\\''20\\\\'' >&nbsp;&nbsp;|-通讯产品</option>\r\n<option value=\\\\''21\\\\'' >&nbsp;&nbsp;|-居家用品</option>\r\n<option value=\\\\''22\\\\''>|-同城生活</option>\r\n<option value=\\\\''23\\\\'' >&nbsp;&nbsp;|-本地新闻</option>\r\n<option value=\\\\''24\\\\'' >&nbsp;&nbsp;|-购物打折</option>\r\n<option value=\\\\''25\\\\'' >&nbsp;&nbsp;|-旅游活动</option>\r\n<option value=\\\\''26\\\\'' >&nbsp;&nbsp;|-便民告示</option>\r\n<option value=\\\\''27\\\\''>|-求职招聘</option>\r\n<option value=\\\\''28\\\\'' >&nbsp;&nbsp;|-工程技术</option>\r\n<option value=\\\\''29\\\\'' >&nbsp;&nbsp;|-财务会计</option>\r\n<option value=\\\\''30\\\\'' >&nbsp;&nbsp;|-餐饮行业</option>\r\n<option value=\\\\''31\\\\'' >&nbsp;&nbsp;|-经营管理</option>\r\n</select>\r\n<input name=\\\\\"Submit2\\\\\" type=\\\\\"image\\\\\" value=\\\\\"搜索\\\\\" src=\\\\\"[!--news.url--]skin/default/images/search.gif\\\\\" />　\r\n[<a href=\\\\\"[!--news.url--]e/DoInfo/ChangeClass.php?mid=8\\\\\" target=\\\\\"_blank\\\\\">发布信息</a>]</td>\r\n</tr>\r\n</table>\r\n</form></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>地区导航</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[!--temp.infoarea--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>分类导航</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[!--temp.infoclassnav--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>热门点击</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ol class=\\\\\"rank\\\\\">\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,40,0,1,10,0[/ecmsinfo] \r\n</ol></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0');");
E_D("replace into `phome_enewsclasstemp` values('5','封面3','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>奎创科技</title>\r\n<LINK rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/default2.css\\\\\">\r\n<LINK rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" href=\\\\\"[!--news.url--]css/lanrenzhijia.css\\\\\">\r\n<link href=\\\\\"[!--news.url--]css/home.css\\\\\" rel=\\\\\"stylesheet\\\\\" />\r\n</head>\r\n<body>\r\n<div id=wrap>\r\n[!--temp.header--]\r\n<div class=\\\\\"jjfadatu\\\\\">\r\n  <div class=\\\\\"tu\\\\\"><img src=\\\\\"[!--news.url--]images/zyyw.jpg\\\\\" border=\\\\\"0\\\\\"/></div>\r\n</div>\r\n<div class=\\\\\"hnewstt\\\\\">\r\n     <div class=\\\\\"title\\\\\"><a href=\\\\\"ecms/chanpinzhongxin/\\\\\" title=\\\\\"主营业务\\\\\"><img src=\\\\\"[!--news.url--]images/title-two.jpg\\\\\"></a></div>\r\n</div>\r\n<div class=\\\\\"clear\\\\\"></div>\r\n<!-- nr开始--->\r\n<div id=\\\\\"nr\\\\\"> \r\n  \r\n  <!-- nrleft开始--->\r\n  <div id=\\\\\"nrleft\\\\\">\r\n    <div class=\\\\\"aboutus2\\\\\">\r\n      [e:loop={21,1,0,0}]\r\n      <?php\r\n\$fr=\$empire->fetch1(\\\\\"select newstext from {\$dbtbpre}ecms_news_data_{\$bqr[stb]} where id=\\\\''\$bqr[id]\\\\''\\\\\");\r\n?>\r\n<?=\$fr[newstext]?>\r\n     \r\n     [/e:loop]\r\n      </div>\r\n    <div class=\\\\\"blank20\\\\\"></div>\r\n  </div>\r\n  <!-- nrleft结束---> \r\n  \r\n  <!-- nrright开始--->\r\n  <div id=\\\\\"nrright\\\\\">\r\n    <div class=\\\\\"dh2\\\\\">\r\n     <ul>\r\n            <?\r\n      \$fcr=explode(\\\\''|\\\\'',\$class_r[\$GLOBALS[navclassid]][featherclass]);\r\n       \$topbclassid=\$fcr[1]?\$fcr[1]:\$GLOBALS[navclassid];//取得当前栏目的一级栏目ID\r\n?>\r\n     [e:loop={\\\\\"select classid,classname,classpath from [!db.pre!]enewsclass where bclassid = \\\\''\$topbclassid\\\\'' order by classid\\\\\",0,24,0}]\r\n<li><a href=\\\\\"<?=\$public_r[newsurl].\$bqr[classpath]?>/\\\\\"><?=\$bqr[classname]?></a></li>\r\n[/e:loop]          </ul>\r\n    </div>\r\n  </div>\r\n  \r\n  <!-- nrright结束---> \r\n  \r\n</div>\r\n</div>\r\n<!-- nr结束---> \r\n<!-- 左右div高度对齐---> \r\n\r\n<!-- 左右div高度对齐--->\r\n<div class=\\\\\"clear blank20\\\\\"></div>\r\n[!--temp.footer--]\r\n</div>\r\n</body>\r\n</html>','0');");

@include("../../inc/footer.php");
?>