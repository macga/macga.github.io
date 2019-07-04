<?
include "zerocount/dbconn.php3"; 
include "zerocount/zerocounter.php3";
?> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<meta name="keywords" content="맥가,Macga,홈페이지,웹디자인,웹디자이너,컨셉,케릭터,3D,2D,몬스터">
<title>www.Macga.com 3nd - 맥가닷컴</title>
<link href="/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="imagetoolbar" content="no">
<script language="JavaScript" src="/header.js"></script>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:920px;
	height:192px;
	z-index:1;
	display:none;
	
}
#Layer2 {
	position:absolute;
	width:920px;
	height:192px;
	z-index:1;
	display:none;
}
#sub_layer{
	position:absolute;
	width:920px;
	height:192px;
	
	
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  	if ((obj=MM_findObj(args[i]))!=null) { 
		v=args[i+2];
	    if (obj.style) { 
			alert(obj.name+"//"+obj.display+"//"+v);
			obj=obj.style; 
			//v=(v=='')?'display':(v=='none')?'none':v; 
			

		}
		
    	obj.display=v; 
		
	}
}
function MM_showHideLayers2(obn,dis){
	var obj=document.all.sub_layer;
	var sw;
	for(i=0;i<obj.length;i++){
		if(i==obn){
			obj[i].style.display=dis;
		}
	}
	//alert(obj.length);
	//alert(obj[0].style.display+"//"+obj[1].style.display);
}
//-->
</script>
</head>
<body bgcolor="000000" ondragstart="return false" onselectstart="return false">



<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td align="center">
		<table width="920" border="0" cellpadding="0" cellspacing="0" background="/img_images/img_bg_02.gif">
		<tr>
			<td height="29">
			<div id="sub_layer" style="display:none;">
  <table width="100%" height="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000">
    <tr>
      <td height="54" bgcolor="#000000"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="451"><img src="/img_images/board_title_01.gif" width="451" height="54"></td>
            <td>&nbsp;</td>
            <td width="60"><a href="#"><img src="/img_images/btn_close.gif" alt="창닫기" width="50" height="17" border="0" onClick="MM_showHideLayers2(0,'none')"></a></td>
          </tr>
          <tr>
            <td height="1" colspan="3" bgcolor="#212121"></td>
          </tr>
          <tr>
            <td height="10" colspan="3" bgcolor="#000000"></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td align="center" valign="top"><iframe src="/bbs/zboard.php?id=board" width='920' height="488" frameborder="0"></iframe></td>
    </tr>
    <tr>
      <td align="center" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="10" colspan="2" bgcolor="#000000"></td>
          </tr>
          <tr>
            <td height="1" colspan="2" bgcolor="#212121"></td>
          </tr>
          <tr>
            <td height="36" align="center" bgcolor="#000000"><a href="http://creativecommons.org/licenses/by-nc-nd/2.0/kr/" target="_blank" rel="license"> <img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/2.0/kr/80x15.png" /> </a> </td>
            <td align="right" bgcolor="#000000"><img src="/img_images/board_copy_01.gif" width="514" height="26" border="0"></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
<div id="sub_layer" style="display:none;">
  <table width="100%" height="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000">
    <tr>
      <td height="54" bgcolor="#000000"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="451"><img src="/img_images/board_title_01.gif" width="451" height="54"></td>
            <td>&nbsp;</td>
            <td width="60"><a href="#"><img src="/img_images/btn_close.gif" alt="창닫기" width="50" height="17" border="0" onClick="MM_showHideLayers2(1,'none')"></a></td>
          </tr>
          <tr>
            <td height="1" colspan="3" bgcolor="#212121"></td>
          </tr>
          <tr>
            <td height="10" colspan="3" bgcolor="#000000"></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td align="center" valign="top"><iframe src="/bbs/zboard.php?id=portfolio" width='920' height="488" frameborder="0"></iframe></td>
    </tr>
    <tr>
      <td align="center" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="10" colspan="2" bgcolor="#000000"></td>
          </tr>
          <tr>
            <td height="1" colspan="2" bgcolor="#212121"></td>
          </tr>
          <tr>
            <td height="36" align="center" bgcolor="#000000"><a href="http://creativecommons.org/licenses/by-nc-nd/2.0/kr/" target="_blank" rel="license"> <img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/2.0/kr/80x15.png" /> </a> </td>
            <td align="right" bgcolor="#000000"><img src="/img_images/board_copy_01.gif" width="514" height="26" border="0"></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
			<img src="/img_images/img_bg_01.gif" width="920" height="29"></td>
		</tr>
		<tr>
			<td height="480" align="center">
				<script>flash('/flash/m3_00.swf', '870','480','movie')</script>
			</td>
		</tr>
		<tr>
			<td height="29"><img src="/img_images/img_bg_03.gif" width="920" height="29"></td>
		</tr>
		<tr>
			<td>
				<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000">
				<tr>
					<td width="38">&nbsp;</td>
					<td width="150"><a href="/"><img src="/img_images/m3nd_logo.gif" alt="Macga.com 3nd" width="141" height="54" border="0"></a></td>
					<td align="right">
						<table width="96%" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td width="80"><a href="#"><img src="/img_images/btn_portfolio.gif" alt="포트폴리오" width="76" height="18" border="0" onClick="MM_showHideLayers2(1,'')"></a></td>
							<td width="52"><a href="#"><img src="/img_images/btn_board.gif" alt="게시판" width="52" height="18" border="0" onClick="MM_showHideLayers2(0,'')"></a></td>
						    <td align="right"><table border="0" cellpadding="4" cellspacing="0">
                                <tr>
                                  <td><img src="/img_images/counter_01.gif" width="29" height="9"></td>
                                  <td class="counter"><? echo $count[today_hit]; ?></td>
                                  <td><img src="/img_images/counter_02.gif" width="29" height="9"></td>
                                  <td class="counter"><? echo 278531+$count[total_hit]; ?></td>
                                </tr>
                              </table></td>
						</tr>
						</table>
					</td>
					<td width="270" align="right"><img src="/img_images/m3nd_copyright.gif" alt="본 사이트의 저작권을 침해하는 행위를 금지합니다" width="258" height="30" border="0"></td>
					<td width="38">&nbsp;</td>
				</tr>
				</table>
			</td>
		</tr>
	  </table>
	</td>
</tr>
</table>
</body>
</html>