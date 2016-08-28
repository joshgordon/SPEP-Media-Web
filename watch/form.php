<h1>Video Stream</h1> 

<?php include "../snow.php"; ?>

<form action="//stream.spepmedia.com/submit.php" method="post" id="survey">

<!--
<div class="alert alert-danger"><b>Notice</b> Prayernet has been postponed due to inclement weather. Stay safe and warm, and hope to see you next week!</div>
-->

<p> Thanks for watching online. Please take a second to let us know 
    how many people are watching with you today. This will help us serve
    our online community better. Thank you for your time. </p> 
<input type="radio" name="viewers" value=1 checked>1<br> 
<input type="radio" name="viewers" value=2>2<br> 
<input type="radio" name="viewers" value=3>3<br> 
<input type="radio" name="viewers" value=4>4<br> 
<input type="radio" name="viewers" value=5>5 or more.<br />
<input type="hidden" name="media" value="watch">    

<p> If you have any issues with the webcasts, or any other comments or 
    concerns, please fill them into this box. </p> 
<textarea name="comments" form="survey" class="styled"></textarea> 
<br> 


<button class="btn btn-lg btn-primary" type="submit"> Watch Now</button> 
</form> 
