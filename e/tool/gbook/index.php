<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//分类id
$bid=(int)$_GET['bid'];
$gbr=$empire->fetch1("select bid,bname,groupid from {$dbtbpre}enewsgbookclass where bid='$bid'");
if(empty($gbr['bid']))
{
	printerror("EmptyGbook","",1);
}
//权限
if($gbr['groupid'])
{
	include("../../member/class/user.php");
	$user=islogin();
	include("../../data/dbcache/MemberLevel.php");
	if($level_r[$gbr[groupid]][level]>$level_r[$user[groupid]][level])
	{
		echo"<script>alert('您的会员级别不足(".$level_r[$gbr[groupid]][groupname].")，没有权限提交信息!');history.go(-1);</script>";
		exit();
	}
}
esetcookie("gbookbid",$bid,0);
$bname=$gbr['bname'];
$search="&bid=$bid";
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=$public_r['gb_num'];//每页显示条数
$page_line=10;//每页显示链接数
$offset=$start+$page*$line;//总偏移量
$totalnum=(int)$_GET['totalnum'];
if($totalnum>0)
{
	$num=$totalnum;
}
else
{
	$totalquery="select count(*) as total from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
	$num=$empire->gettotal($totalquery);//取得总条数
}
$search.="&totalnum=$num";
$query="select lyid,name,email,`mycall`,lytime,lytext,retext from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
$query=$query." order by lyid desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['saygbook'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言板 - Powered by EmpireCMS</title>
<meta name="keywords" content="<?=$bname?>" />
<meta name="description" content="<?=$bname?>" />
<link href="/ecms/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/ecms/skin/default/js/tabs.js"></script>
</head>
<body class="listpage">
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
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="list_content"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>现在的位置：<a href=../../../>首页</a>&nbsp;>&nbsp;<?=$bname?>
</td>
</tr>
</table><table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
	<tr>
		<td><table width="100%" border="0" cellpadding="3" cellspacing="2">
			<tr>
				<td align="center" bgcolor="#E1EFFB"><strong><?=$bname?></strong></td>
			</tr>
			<tr>
				<td align="left" valign="top"><table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
						<tr>
							<td height="100%" valign="top" bgcolor="#FFFFFF"> 
<?
while($r=$empire->fetch($sql))
{
	$r['retext']=nl2br($r[retext]);
	$r['lytext']=nl2br($r[lytext]);
?>

								<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#F4F9FD" class="tableborder">
										<tr class="header">
											<td width="55%" height="23">发布者: <?=$r[name]?> </td>
											<td width="45%">发布时间: <?=$r[lytime]?> </td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="23" colspan="2"><table border="0" width="100%" cellspacing="1" cellpadding="8" bgcolor='#cccccc'>
													<tr>
														<td width='100%' bgcolor='#FFFFFF' style='word-break:break-all'> <?=$r[lytext]?> </td>
													</tr>
												</table>
												
<?
if($r[retext])
{
?>

												<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
													<tr>
														<td><img src="../../data/images/regb.gif" width="18" height="18" /><strong><font color="#FF0000">回复:</font></strong> <?=$r[retext]?> </td>
													</tr>
												</table>
												
<?
}
?> </td>
										</tr>
									</table>
								<br />
								
<?
}
?>

								<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1">
									<tr>
										<td>分页: <?=$listpage?></td>
									</tr>
								</table>
								<form action="../../enews/index.php" method="post" name="form1" id="form1">
									<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1"class="tableborder">
										<tr class="header">
											<td colspan="2" bgcolor="#F4F9FD"><strong>请您留言:</strong></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td width="20%">姓名:</td>
											<td width="722" height="23"><input name="name" type="text" id="name" />
												*</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>联系邮箱:</td>
											<td height="23"><input name="email" type="text" id="email" />
												*</td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>联系电话:</td>
											<td height="23"><input name="mycall" type="text" id="mycall" /></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td>留言内容(*):</td>
											<td height="23"><textarea name="lytext" cols="60" rows="12" id="lytext"></textarea></td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="23">&nbsp;</td>
											<td height="23"><input type="submit" name="Submit3" value="提交" />
											<input type="reset" name="Submit22" value="重置" />
											<input name="enews" type="hidden" id="enews" value="AddGbook" /></td>
										</tr>
									</table>
								</form></td>
						</tr>
				</table></td>
			</tr>
		</table></td>
	</tr>
</table></td>
</tr>
</table>
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
</body>
</html>
<?php
db_close();
$empire=null;
?>