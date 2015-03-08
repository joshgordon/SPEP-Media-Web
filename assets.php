<?PHP

function generateHeader($title, $bare=False)
{
?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/cross.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name=viewport content="width=230, initial-scale=1" /> 
    <title><?php echo $title;?></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<meta name="" content="Severna Park Evangelical Presbyterian church, Jesus mends" />
<meta name="Description" content="Severna Park Evangelical Presbyterian Church is a place where Jesus mends broken lives" />
<meta name="Keywords" content="Severna Park, Evangelical, Presbyterian, Church, Jesus, mends, good news" />
<!--Google Analytics-->
<?php 
if ($_SERVER['HTTP_HOST'] == "watch.spepmedia.com") { 
  ?> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47721127-2', 'spepmedia.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
<?php } elseif ($_SERVER['HTTP_HOST'] == "listen.spepmedia.com") { ?> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47721127-3', 'spepmedia.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
<?php } elseif ($_SERVER['HTTP_HOST'] == "podcast.spepmedia.com") { ?> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47721127-1', 'spepmedia.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script> 
<?php } ?> 
<style> 
textarea.styled { 
  width: 100%; 
  height: 120px; 
  border: 3px solid #ccc; 
  padding: 5px; 
  margin-bottom: 7px; 
  font-family: Tahoma, sans-serif; 
}

input[type="radio"] { 
  margin-right: 15px; 
}

</style>

</head>
<body>
<div class="container-fluid"> 
  <div class="row"> 
    <div class="col-lg-6 col-lg-offset-3">
      <a href="http://spepchurch.org/"><img src="//spepchurch.com/assets/images/headertop.jpg" width=100% alt="SPEP banner image" /></a>
    </div>
  </div>
  <div class="row">
     <div class="col-lg-6 col-lg-offset-3">
<?php } 
////////////////////////////////////////////////////////////////////////////////
function generateFooter($bare=False)
{ 
?>
      <hr>
</div></div> 
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
</div> 
</body>
<!-- InstanceEnd --></html>
<?php
} 
?> 
