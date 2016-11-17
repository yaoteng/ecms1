<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>奎创科技</title>
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
         

  <?php
   $ecms_bq_sql=sys_ReturnEcmsLoopBq('select classid,classname,classpath   from [!db.pre!]enewsclass where bclassid=0 and showclass=0 order by    myorder limit 8',20,24,0); $bqno=0;
while($bqr=$empire->fetch($ecms_bq_sql))
{
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;

?>

<li class="drop-menu-effect"><a href="<?=$public_r[newsurl]?><?=$bqr[classpath]?>" title="<?=$bqr[classname]?>" target="_self" ><?=$bqr[classname]?></a>
<ul class="submenu">
<?php
$ecms_bq_sql2=sys_ReturnEcmsLoopBq("select classid,classname,classpath from [!db.pre!]enewsclass where bclassid='$bqr[classid]' order by myorder limit 5",20,24,0);
$bqno2=0;
while($bqr2=$empire->fetch($ecms_bq_sql2))
{
$bqsr2=sys_ReturnEcmsLoopStext($bqr2);
$bqno2++;
?>
<li><a href="<?=$public_r[newsurl]?><?=$bqr2[classpath]?>" title="<?=$bqr2[classname]?>" target="_self" ><?=$bqr2[classname]?></a></li>
<?
}
?>
</ul>
</li>

<?
}
?>   
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
<div class="jjfadatu">
  <div class="tu"><img src="/ecms/images/zyyw.jpg" border="0"/></div>
</div>
<div class="hnewstt">
     <div class="title"><a href="ecms/chanpinzhongxin/" title="主营业务"><img src="/ecms/images/title-two.jpg"></a></div>
</div>
<div class="clear"></div>
<!-- nr开始--->
<div id="nr"> 
  
  <!-- nrleft开始--->
  <div id="nrleft">
    <div class="aboutus2">
      <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(21,1,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <?php
$fr=$empire->fetch1("select newstext from {$dbtbpre}ecms_news_data_{$bqr[stb]} where id='$bqr[id]'");
?>
<?=$fr[newstext]?>
     
     <?php
}
}
?>
      </div>
    <div class="blank20"></div>
  </div>
  <!-- nrleft结束---> 
  
  <!-- nrright开始--->
  <div id="nrright">
    <div class="dh2">
     <ul>
            <?
      $fcr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
       $topbclassid=$fcr[1]?$fcr[1]:$GLOBALS[navclassid];//取得当前栏目的一级栏目ID
?>
     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classpath from [!db.pre!]enewsclass where bclassid = '$topbclassid' order by classid",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a href="<?=$public_r[newsurl].$bqr[classpath]?>/"><?=$bqr[classname]?></a></li>
<?php
}
}
?>          </ul>
    </div>
  </div>
  
  <!-- nrright结束---> 
  
</div>
</div>
<!-- nr结束---> 
<!-- 左右div高度对齐---> 

<!-- 左右div高度对齐--->
<div class="clear blank20"></div>
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