<?php

# header("location: /direct");
include "../assets.php";
generateHeader("Video Stream", True);
?>

<div id="boxcast-widget-heiodbxfv6howljomxxr"></div><script type="text/javascript" charset="utf-8">(function(d, s, c, o) {var js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];var h = (('https:' == document.location.protocol) ? 'https:' : 'http:');js.src = h + '//js.boxcast.com/v3.min.js';js.onload = function() { boxcast.noConflict()('#boxcast-widget-'+c).loadChannel(c, o); };js.charset = 'utf-8';fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'heiodbxfv6howljomxxr', {"showTitle":0,"showDescription":0,"showHighlights":0,"showRelated":false,"defaultVideo":"closest","market":"church","showCountdown":true,"autoplay":true}));</script>
<!--
<div style="font-size: 24pt">Please Note:</div>
<div>We are testing a new streaming system. In our own testing, we have 
found it to work fantastically. If you are having issues, please try another 
browser (We've found <a href="https://getfirefox.com">Firefox</a> and
<a href="https://google.com/chrome">Google Chrome</a> to work well. If that
doesn't fix it, feel free to 
<a href="http://spepchurch.org/contactus/contact_media.html">let us know</a>
so we can work to fix your issues.</div>
-->
<div>
  If you have issues, please <a href="http://spepchurch.org/contactus/contact_media.html">let us know</a>.
</div>
<!--<div>If you would like to go back to the old site, you can do so by clicking
<a href="http://www.ustream.tv/embed/11308704">here</a>. Note that this is a
temporary fix, and will not be available for much longer. Therefore, it is 
imperative for you to let us know what issues you are having so we can fix
them.</div>-->

<?php include "../give.php"; ?> 

<?php generateFooter(True); ?> 
