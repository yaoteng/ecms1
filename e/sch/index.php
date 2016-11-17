<?php
require("../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../class/db_sql.php");
require("../data/dbcache/class.php");
require LoadLang("pub/fun.php");
require("../class/schallfun.php");
$link=db_connect();
$empire=new mysqlquery();
eCheckCloseMods('sch');//关闭模块
$searchtime=time();
$totalnum=(int)$_GET['totalnum'];
$firstsearch=0;
if($totalnum<1)
{
	$firstsearch=1;
	//搜索间隔
	$lastsearchtime=(int)getcvar('lastschalltime');
	if($lastsearchtime)
	{
		if($searchtime-$lastsearchtime<$public_r[schalltime])
		{
			printerror('SchallOutTime','',1);
		}
	}
	//设置最后搜索时间
	esetcookie('lastschalltime',$searchtime,$searchtime+3600*24);
}
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$page_line=$public_r['schallpagenum'];//每页显示链接数
$line=$public_r['schallnum'];//每页显示记录数
$offset=$start+$page*$line;//总偏移量
//编码
$iconv='';
$char='';
$targetchar='';
if($ecms_config['sets']['pagechar']!='gb2312')
{
	include_once(ECMS_PATH.'e/class/doiconv.php');
	$iconv=new Chinese('');
	$char=$ecms_config['sets']['pagechar']=='big5'?'BIG5':'UTF8';
	$targetchar='GB2312';
}
$schallr=ReturnSearchAllSql($_GET);
require("../data/dbcache/SearchAllTb.php");
$keyboard=$schallr['keyboard'];
$query="select id,classid from {$dbtbpre}enewssearchall where ".$schallr['where'];
if($totalnum<1)
{
	$totalquery="select count(*) as total from {$dbtbpre}enewssearchall where ".$schallr['where'];
	$num=$empire->gettotal($totalquery);
	if(empty($num))
	{
		printerror('SchallNotRecord','',1);
	}
}
else
{
	$num=$totalnum;
}
$search=$schallr['search']."&totalnum=".$num;
$query.=" order by infotime desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['SearchAllNav'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$keyboard?> 搜索结果 - Powered by EmpireCMS</title>
<LINK rel="stylesheet" type="text/css" href="/ecms/css/default2.css">
<LINK rel="stylesheet" type="text/css" href="/ecms/css/lanrenzhijia.css">
<link href="/ecms/css/home.css" rel="stylesheet" />
</head>
<body>
<div id=wrap>
<div id=header>
    <div class=hd_top>
        <div class=hd_top_lt>
        <img src="/ecms/images/logo.jpg"/>
        </div>
        <div class=hd_top_ri>
           <div class=top_ri_top>
           <img src = "/ecms/images/top_ri_top.jpg"/>
           </div>
           <div class=top_ri_bottom>
             <form action="/ecms/e/search/index.php" name="formsearch" method="post">
            <input type="hidden" name="show" value="title" />
            <input name="keyboard" id="keyword" value="search" onfocus="this.value='';"  type="text" class="input_tx" />
            <input type="submit" value="" name="Submit" id="SubmitAll" style="width:40px">
            </form>
           </div>
        </div>
    </div>
     <div class=nav>
    <ul class="nav_list">
         <li class="drop-menu-effect"><a href="/ecms">首页</a></li>
         

       [e:loop={"select classid,classname,classpath   from [!db.pre!]enewsclass where bclassid=0 and showclass=0 order by    myorder limit 8",20,24,0}]
        
           <li class="drop-menu-effect"><a href="<?=$public_r[newsurl]?><?=$bqr[classpath]?>" title="<?=$bqr[classname]?>" target="_self" ><?=$bqr[classname]?></a>
           <ul class="submenu">

            [e:loop={"select classid,classname,classpath from [!db.pre!]enewsclass where bclassid='$bqr[classid]' order by myorder limit 5",20,24,0}]
              <li><a href="<?=$public_r[newsurl]?><?=$bqr2[classpath]?>" title="<?=$bqr2[classname]?>" target="_self" ><?=$bqr2[classname]?></a></li>
            [/e:loop]

           </ul>
            </li>

       [/e:loop]
   
  
    </ul>
  </div>
  </div>
<script src="/ecms/js/jquery.min.js"></script>
<script>
function dropMenu(obj){
		$(obj).each(function(){
			var theSpan = $(this);
			var theMenu = theSpan.find(".submenu");
			var tarHeight = theMenu.height();
			theMenu.css({height:0,opacity:0});
			
			var t1;
			
			function expand() {
				clearTimeout(t1);
				theSpan.find('a').addClass("selected");
				theMenu.stop().show().animate({height:tarHeight,opacity:1},200);
			}
			
			function collapse() {
				clearTimeout(t1);
				t1 = setTimeout(function(){
					theSpan.find('a').removeClass("selected");
					theMenu.stop().animate({height:0,opacity:0},200,function(){
						$(this).css({display:"none"});
					});
				}, 250);
			}
			
			theSpan.hover(expand, collapse);
			theMenu.hover(expand, collapse);
		});
	}

$(document).ready(function(){
	
	dropMenu(".drop-menu-effect");

});
</script>

	
		
			
			
					<form action='/ecms/e/search/index.php' method="post" name="search_news" id="search_news">
								<input type="hidden" name="show" value="title" />
								
						</form>
						
<?php
$no=$offset;
$subnum=120;
$formatdate="Y-m-d H:i:s";
while($r=$empire->fetch($sql))
{
	$tbname=$class_r[$r[classid]]['tbname'];
	if(empty($tbname))
	{
		continue;
	}
	$titlefield=$schalltb_r[$tbname]['titlefield'];
	$smalltextfield=$schalltb_r[$tbname]['smalltextfield'];
	$infor=$empire->fetch1("select id,classid,titlepic,newstime,isurl,titleurl,".$titlefield.",".$smalltextfield." from {$dbtbpre}ecms_".$tbname." where id='$r[id]' limit 1");
	if(empty($infor['id']))
	{
		continue;
	}
	$no++;
	$titleurl=sys_ReturnBqTitleLink($infor);
	$titlepic=$infor['titlepic']?$infor['titlepic']:$public_r['newsurl']."e/data/images/notimg.gif";
	$smalltext=SubSchallSmalltext($infor[$smalltextfield],$subnum);
	$title=DoReplaceFontRed($infor[$titlefield],$keyboard);
	$smalltext=DoReplaceFontRed($smalltext,$keyboard);
	$newstime=date($formatdate,$infor['newstime']);
?>

						<!--list.var1-->
						
<?php
}
db_close();
$empire=null;
?>

						
<!-- 页脚 -->
<div id =footer>
<div class=footer_main>
      <ul>
        <li>
           <dl>
               <dt>
                 <a href="/ecms/guanyukuichuang">关于奎创</a>
               </dt>
               <dd>
                 <a href="/ecms/guanyukuichuang/gongsijianjie">公司简介</a>
               </dd>
               <dd>
               <a href="/ecms/guanyukuichuang/gongsilicheng">公司历程</a>
               </dd>
               <dd>
               <a href="/ecms/guanyukuichuang/qiyewenhua">企业文化</a>
               </dd>
               <dd>
               <a href="/ecms/guanyukuichuang/rongyuzizhi">荣誉资质</a>
               </dd>
               <dd>
               <a href="/ecms/guanyukuichuang/yuangongfengcai">员工风采</a>
               </dd>
           </dl>
           
        </li>
        <li>
         <dl>
               <dt>
                 <a href="/ecms/xinwenzhongxin">新闻中心</a>
               </dt>
               <dd>
                 <a href="/ecms/xinwenzhongxin/gongsixinwen">公司新闻</a>
               </dd>
               <dd>
               <a href="/ecms/xinwenzhongxin/xingyezixun">行业资讯</a>
               </dd>
               <dd>
               <a href="/ecms/xinwenzhongxin/meitibaodao">媒体报道</a>
               </dd>

           </dl>
        </li>
        <li>
           <dl>
               <dt>
                 <a href="/ecms/lianxiwomen">联系我们</a>
               </dt>
               <dd>
                 <a href="/ecms/lianxiwomen/lianxifangshi">联系方式</a>
               </dd>
               <dd>
               <a href="/ecms/lianxiwomen/rencaizhaopin">人才招聘</a>
               </dd>
               
               </dd>
           </dl>
        </li>
      </ul>
      <div class="web">
        <img src="/ecms/images/qr.jpg"/>
      </div>
   </div>
</div>
<div id =end>
      <li class="end-title"><a href="/ecms">Copyright@广东奎创科技发展有限公司</a><a href="/ecms">&nbsp;www.kuic.com.cn</a><a href="/ecms">&nbsp;粤ICP备11013686号</a></li>
</div>
</div>
</body>
</html>