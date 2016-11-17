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
<LINK rel="stylesheet" type="text/css" href="css/default.css">
<LINK rel="stylesheet" type="text/css" href="css/lanrenzhijia.css">

</head>
<body>
<div id="wrap">
 <!--头部导航开始-->
 <div id=header>
    <div class=hd_top>
        <div class=hd_top_lt>
        <img src="images/logo.jpg"/>
        </div>
        <div class=hd_top_ri>
           <div class=top_ri_top>
           <img src = "images/top_ri_top.jpg"/>
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
if($bqr[classid] != '23' ){
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
<?php
}
?>
</ul>
</li>

<?php
}
}
?>   
    </ul>
  </div>
  </div>
<script src="js/jquery.min.js"></script>
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
 <!--头部导航结束-->
 <div class="datu">
<script>
function getStyle(obj,name)
{
	if(obj.currentStyle)
	{
		return obj.currentStyle[name]
	}
	else
	{
		return getComputedStyle(obj,false)[name]
	}
}

function getByClass(oParent,nClass)
{
	var eLe = oParent.getElementsByTagName('*');
	var aRrent  = [];
	for(var i=0; i<eLe.length; i++)
	{
		if(eLe[i].className == nClass)
		{
			aRrent.push(eLe[i]);
		}
	}
	return aRrent;
}

function startMove(obj,att,add)
{
	clearInterval(obj.timer)
	obj.timer = setInterval(function(){
	   var cutt = 0 ;
	   if(att=='opacity')
	   {
		   cutt = Math.round(parseFloat(getStyle(obj,att)));
	   }
	   else
	   {
		   cutt = Math.round(parseInt(getStyle(obj,att)));
	   }
	   var speed = (add-cutt)/4;
	   speed = speed>0?Math.ceil(speed):Math.floor(speed);
	   if(cutt==add)
	   {
		   clearInterval(obj.timer)
	   }
	   else
	   {
		   if(att=='opacity')
		   {
			   obj.style.opacity = (cutt+speed)/100;
			   obj.style.filter = 'alpha(opacity:'+(cutt+speed)+')';
		   }
		   else
		   {
			   obj.style[att] = cutt+speed+'px';
		   }
	   }
	   
	},30)
}

  window.onload = function()
  {
	  var oDiv = document.getElementById('playBox');
	  var oPre = getByClass(oDiv,'pre')[0];
	  var oNext = getByClass(oDiv,'next')[0];
	  var oUlBig = getByClass(oDiv,'oUlplay')[0];
	  var aBigLi = oUlBig.getElementsByTagName('li');
	  var oDivSmall = getByClass(oDiv,'smalltitle')[0]
	  var aLiSmall = oDivSmall.getElementsByTagName('li');
	  var hdnav=document.getElementsByClassName('hd_nav');
	 // var hdnav_li=hdnav.getElementsByTagName('ul li');
	  console.info(hdnav);
	  function tab()
	  {
	     for(var i=0; i<aLiSmall.length; i++)
	     {
		    aLiSmall[i].className = '';
	     }
	     aLiSmall[now].className = 'thistitle'
	     startMove(oUlBig,'left',-(now*aBigLi[0].offsetWidth))
	  }
	  var now = 0;
	  for(var i=0; i<aLiSmall.length; i++)
	  {
		  aLiSmall[i].index = i;
		  aLiSmall[i].onclick = function()
		  {
			  now = this.index;
			  tab();
		  }
	 }
	  oPre.onclick = function()
	  {
		  now--
		  if(now ==-1)
		  {
			  now = aBigLi.length;
		  }
		   tab();
	  }
	   oNext.onclick = function()
	  {
		   now++
		  if(now ==aBigLi.length)
		  {
			  now = 0;
		  }
		  tab();
	  }
	  var timer = setInterval(oNext.onclick,5000) //滚动间隔时间设置
	  oDiv.onmouseover = function()
	  {
		  clearInterval(timer)
	  }
	   oDiv.onmouseout = function()
	  {
		  timer = setInterval(oNext.onclick,5000) //滚动间隔时间设置
	  }
  }
</script>
   <div id="playBox">
    <div class="pre"></div>
    <div class="next"></div>
    <div class="smalltitle">
      <ul>
        <li class="thistitle"></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <ul class="oUlplay">
    
    <li><a href="#" target="_blank"><img src="images/datu.jpg" /></a></li>
   <li><a href="#" target="_blank"><img src="images/datu.jpg" /></a></li>
   <li><a href="#" target="_blank"><img src="images/datu.jpg" /></a></li>
   <li><a href="#" target="_blank"><img src="images/datu.jpg" /></a></li>
    </ul>
</div>
</div>
<div class="clear"></div>
<div id="main">
  <div class="main-type">
     <div class="main-one">
        <div class="one-top">
        <img src="images/four.jpg"/>
        </div>
     <script src="js/foucs.js"></script>
<div class="hbrand">
   <ul>
     <li>
       <div class="leftbox">
           <div id="focus">
        <ul>
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,5,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li><a href="<?=$bqsr['titleurl']?>" target="_blank">
                <img src="<?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>" /></a></li>
           
        <?php
}
}
?>
        </ul>
    </div>
       </div></li>
     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,7,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>

        <li>
         <div class="rightbox">
            <a href="<?=$bqsr['titleurl']?>"><img src="images/li-little.png"/>&nbsp;&nbsp;<?=esub($bqr[title],30)?></a></div>
      </li>
      <li>
         <div class="time">
            <?=date('Y-m-d',$bqr[newstime])?></div>
      </li>
     <?php
}
}
?>
         
     </ul>
   <ul>
      <div class="click"><a href="/ecms/xinwenzhongxin" title="更多品牌新闻">查看更多</a></div>
   </ul>
</div>
     
     </div>
     <div class="main-two">
        <img src="images/two.jpg"/>
  <ul>
     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,3,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                   <li>
           <div>
               <a href="<?=$bqsr['titleurl']?>">
                   <img src="<?=$bqr['titlepic']?>"/>
                </a>
                <br />
                <ul><li style="margin:10px 2.5%;list-style-type:disc ;color: red;"><a href="<?=$bqsr['titleurl']?>" style="color: black;font-size: 14px"><?=$bqr['title']?></a></li></ul>
           </div>
        </li>
     <?php
}
}
?>
  </ul>
 

</table>
     </div>
     <div class="main-three">
      
        <img src="images/three.jpg"/>
    
  <ul>

     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,3,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <li>
           <div>
               <a href="<?=$bqsr['titleurl']?>">
                   <img src="<?=$bqr['titlepic']?>"/>
                </a>
                <br />
                <ul><li style="margin:10px 2.5%;list-style-type:disc ;color: red;"><a href="<?=$bqsr['titleurl']?>" style="color: black;font-size: 14px"><?=$bqr['title']?></a></li></ul>
           </div>
        </li>
     <?php
}
}
?>
  </ul>
 

</table>
     </div>
     <div class="main-four">
      <img src="images/one.jpg"/>
      <ul>
         <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
         <li>
           <div>
               <a href="<?=$bqsr['titleurl']?>">
                   <img src="<?=$bqr['titlepic']?>"/>
                </a>
                <br />
                <ul><li style="margin:10px 2.5%;list-style-type:disc ;color: red;"><a href="<?=$bqsr['titleurl']?>" style="color: black;font-size: 14px"><?=$bqr['title']?></a></li></ul>
           </div>
        </li>
         <?php
}
}
?>
        </ul>
      <li class="more"> <a href="/ecms/chenggonganli">查看更多</a></li>
    </div>
  </div>
</div>
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
               <a href="/ecms/lianxiwomen">联系我们</a></dt>
               <dd>
               <a href="/ecms/lianxiwomen/lianxifangshi">联系方式</a></dd>
               <dd>
               <a href="/ecms/lianxiwomen/rencaizhaopin">人才招聘</a>
               </dd>
               
               </dd>
           </dl>
        </li>
        
      </ul>
      <div class="web">
        <img src="images/qr.jpg"/>
      </div>
   </div>
   
</div>
<div id =end>
   <li class="end-title"><a href="/ecms">Copyright@广东奎创科技发展有限公司</a><a href="/ecms">&nbsp;www.kuic.com.cn</a><a href="/ecms">&nbsp;粤ICP备11013686号</a></li>
</div>
</div>
</body>
</html>

