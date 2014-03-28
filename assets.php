<?PHP

function generateHeader($title, $bare=False)
{
?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/cross.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- InstanceBeginEditable name="doctitle" -->
    <title><?php echo $title;?></title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<style type="text/css">
<!--

-->
</style>
<script type="text/javascript">
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
<link href="http://spepchurch.org/assets/styles-conpwr.css" rel="stylesheet" type="text/css" />
<meta name="" content="Severna Park Evangelical Presbyterian church, Jesus mends" />
<meta name="Description" content="Severna Park Evangelical Presbyterian Church is a place where Jesus mends broken lives" />
<meta name="Keywords" content="Severna Park, Evangelical, Presbyterian, Church, Jesus, mends, good news" />
<style type="text/css">
body {
	background-color: #FFF;
}
</style>
<link href="http://spepchurch.org/assets/styles-menu.css" rel="stylesheet" type="text/css" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47721127-1', 'spepmedia.com');
  ga('send', 'pageview');

</script>

</head>

<body onload="MM_preloadImages('http://spepchurch.org/assets/images/searchDown.jpg','http://spepchurch.org/assets/images/member2.png','http://spepchurch.org/assets/images/search2.png')">
<div align="center" id="banner"><a href="http://spepchurch.org/"><img src="http://spepchurch.org/assets/images/headertop.jpg" width="970" height="197" alt="SPEP banner image" /></a><br />
<!--  <script language="JavaScript">
// Advanced Random Images Start
// Copyright 2001-2002 All rights reserved, by Paul Davis - www.kaosweaver.com
  var j,d="",l="",m="",p="",q="",z="",KW_ARI= new Array()
  var oneDay=60*60*24*1000, d=new Date();jk=d.getTimezoneOffset()*60*1000;
  KW_ARI[KW_ARI.length]='http://spepchurch.org/assets/images/header/headerChange1.jpg';
  KW_ARI[KW_ARI.length]='http://spepchurch.org/assets/images/header/headerChange2.jpg';
  KW_ARI[KW_ARI.length]='http://spepchurch.org/assets/images/header/headerChange3.jpg';
  j=(parseInt((d.getTime()-jk)/oneDay))%KW_ARI.length;
  j=(isNaN(j))?0:j;
    document.write("<img src='"+KW_ARI[j]+"'>");

// Advanced Random Images End
  </script>-->
  <!-- KW ARI Image -->
<br />
</div>
<div align="center" id="content">
  <table width="970" border="0" cellspacing="0" id="basic">
    <tr>
     <?php if ($bare) { echo "<!--"; } ?>
      <td width="165" align="left" valign="top" bgcolor="#FFFFFF"><div id="menu">
        <ul>
          <li></li>
          <li></li>
          <li><a href="http://spepchurch.org/index.html">Home</a></li>
          <li><a href="http://spepchurch.org/site_pages/goodNews.html">Got Good News</a></li>
          <li><a href="http://spepchurch.org/site_pages/serviceInfo.html">Join us</a></li>
          <li><a href="http://spepchurch.org/site_pages/calendarEvents.html">Calendar</a></li>
          <li><a href="http://spepchurch.org/site_pages/adultsinfo.html">For adults</a></li>
          <li><a href="http://spepchurch.org/site_pages/children.html">For kids</a></li>
          <li><a href="http://spepchurch.org/site_pages/youthInfo.html">For youth</a></li>
          <li><a href="http://spepchurch.org/site_pages/resources.html">Resources</a><a href="http://spepchurch.org/site_pages/aboutUs.html">About us</a></li>
          <li><a href="http://spepchurch.org/site_pages/contactUs.html">Contact us</a></li>
          <li></li>
          <li> <a href="https://spep.ccbchurch.com/">SPEPconnect </a><br />
          </li></ul>
      </div></td> <?php if ($bare) { echo "-->"; } ?> 
      <td width="11" height="121" align="left" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p></td>
      <td width="610" valign="top"><!-- InstanceBeginEditable name="Content" -->
<?php } 
////////////////////////////////////////////////////////////////////////////////
function generateFooter($bare=False)
{ 
?>
      <hr>
      <!-- InstanceEndEditable --></td>
      <?php if ($bare) { echo "<!--"; } ?><td width="176" height="180" align="left" valign="top" bgcolor="#FFFFFF"><p><a href="http://spepchurch.org/site_pages/searchSite.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('search','','http://spepchurch.org/assets/images/search2.png',1)"><img src="http://spepchurch.org/assets/images/search1.png" alt="search our site" name="search" width="170" height="111" border="0" id="search" /></a><a href="http://spepchurch.org/memberLogin.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('member login','','http://spepchurch.org/assets/images/member2.png',1)"><br />
        <br />
      </a><img src="http://spepchurch.org/assets/images/ourServices.jpg" width="170" height="113" alt="our services" /><strong>&nbsp;&nbsp;&nbsp;</strong><a href="http://listen.spepmedia.com"><strong>Listen</strong></a> &nbsp;&nbsp;or &nbsp;&nbsp;<a href="http://watch.spepmedia.com"><strong>Watch</strong></a><br />
        <span class="whatsthis">We stream Sunday morning services 9:30 &amp; 11:00. Listen to past messages 24/7.</span></p>
        <p align="left"><a href="http://spepchurch.org/assets/misc-html/sermonsLatest.html"><img src="http://spepchurch.org/assets/images/archives.jpg" width="169" height="140" alt="message archives" /><br />
        </a><strong>&nbsp; &nbsp;&nbsp;&nbsp;</strong><a href="http://spepchurch.org/assets/misc-html/sermonsLatest.html"><strong>Audio</strong></a> &nbsp;&nbsp;or &nbsp;&nbsp;<a href="http://videos.spepmedia.com"><strong>Video</strong></a></p>
        <p><strong>Our e-news</strong><br />
          <img src="http://spepchurch.org/assets/images/linkbutton.jpg" width="168" height="55" alt="the link e-news image" /><br />
          <span class="whatsthis"><a href="http://spepchurch.org/SPEPlink.html">Read the latest</a><br />
            </span><span class="whatsthis"><a href="https://spep.ccbchurch.com/form_response.php?id=36">Subscribe</a></span></p>
        <p><a href="searchSite.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('search','','http://spepchurch.org/assets/images/searchDown.jpg',1)"><br />
      </a></p></td><?php if ($bare) { echo "-->"; } ?> 
    </tr>
  </table>
</div>
<div align="center" id="footer">
  <p class="whatsthis"><a href="http://spepchurch.org">Severna Park Evangelical Presbyterian Church</a> &nbsp;- &nbsp;110/114 Ritchie Highway &nbsp;-&nbsp; Pasadena MD 21122 &nbsp;- &nbsp;410.544.5013 &nbsp;&nbsp;&nbsp;&nbsp;</p>
</div>
<span class="whatsthis">
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
</span>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11124023-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
<!-- InstanceEnd --></html>
<?php
} 
?> 
