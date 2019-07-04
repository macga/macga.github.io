<!-- 외부로그인 -->
<?
$_zb_url = "http://macga.com/bbs/";
$_zb_path = "/home/hosting_users/zrocker/www/bbs/";
include $_zb_path."outlogin.php";
?>
<!-- 외부로그인 끝 -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>맥가닷컴 [WWW.MACGA.COM 2ND A.O.D]</title>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<meta http-equiv="imagetoolbar" content="no">
<link href="bbs/style.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->
</script>
<!-- 레이어보이기소스 -->
<script language="JavaScript">
var visible = 1;
function layer_view(){
 if(visible){
  document.all.Layer.style.visibility = "hidden";
  visible = 0;
 } else {
  document.all.Layer.style.visibility = "visible";
  visible = 1;
 }
 
}
</script>
<!-- 레이어보이기소스끝 -->
<script language="JavaScript" src="/header.js"></script>
</head>

<body bgcolor="#000000" leftmargin="0" topmargin="0" onLoad="MM_preloadImages('/images/img_copyright_b_02.gif','/images/img_copyright_b_04.gif','/images/img_copyright_b_06.gif')" oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="61" align="center">
      <?php require_once('top.php'); ?>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" class="copyright" style="background-image: url(/images/img_main_bg.gif); background-repeat:repeat-x"><table width="990" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
          </td>
        </tr>
      </table>
      <table width="990" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="300" valign="top"><table width="100%" height="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><div id="_NSID_">
              <!--<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="300" height="435">
                <param name="movie" value="/flash/f05.swf">
                <param name="quality" value="high">
                <embed src="/flash/f05.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="300" height="435"></embed></object>-->
            </div>
            <script> _ws_(_NSID_); </script></td>
              </tr>
            </table></td>
          <td width="670" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="18"><img src="/images/img_helpdesk_02.gif" width="670" height="18"></td>
              </tr>
              <tr> 
                <td align="center" bgcolor="#000000"><table width="610" border="0" cellspacing="0" cellpadding="0">
                        <tr> 
                        <td><img src="/images/title_login.gif" width="610" height="32"></td>
                      </tr>
                      <tr> 
                        <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="100">&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="center"><? print_outlogin("login", 1, 10) ?></td>
                            </tr>
                            <tr>
                              <td height="140">&nbsp;</td>
                            </tr>
                          </table></td>
                      </tr>
                                      </table> </td>
              </tr>
            </table></td>
          <td width="20" valign="top"><table width="100%" height="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><img src="/images/img_helpdesk_03.gif" width="20" height="435"></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="1" bgcolor="2A3133"></td>
  </tr>
  <tr>
    <td height="39" align="center">
      <?php require_once('bottom.php'); ?>
    </td>
  </tr>
</table>
</body>
</html>
