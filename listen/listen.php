<?php

# header("location: /direct");
include "../assets.php";
generateHeader("SPEP Audio Stream", True);
?>
<audio style="width:100%" controls autoplay="autoplay"><source src="http://mc.spepchurch.org:8000/listen" type="audio/mp3">Your browser does not support the audio element. Please <a href="http://mc.spepchurch.org:8000/listen.m3u">click here</a> to download the playlist.</audio>
<img src="./SPEP%20Audio%20Stream.png" width=100%/>

<div style="font-size: 24pt">Please Note:</div>
<div>This is the same audio stream as always, it's just in your browser now. If you want
to use whatever method you were using before, <a href="http://mc.spepchurch.org:8000/listen.m3u">click here</a>.</div>
<div>If you're using iOS, you will have to click the "play" button near the top left of this page. All other platforms will automatically start playing.</div>
<!--
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

<?php include "../give.php"; ?> 
<?php generateFooter(True); ?> 
