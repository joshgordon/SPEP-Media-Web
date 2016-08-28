<!--Snow cancellation message... goes here when Church is cancelled...-->

<?php $snow = false;

if ($snow) { ?>

  <!--This is the part that gets enabled in the PHP when it's snowed out.-->
  <style>
  .alert .glyphicon{
    display:table-cell;
      
  }

  .alert div,
  .alert span{
    padding-left: 5px;
    display:table-cell;
  }
</style>

<!--Yes, I am about to load jquery up to do one thing. I'm so sorry...-->
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script type="text/javascript">
$(function() { 
  $('form').css('opacity', 0.3);
});

</script>

  <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign"></span>
    <div>
      <b>Note:</b> SPEP's facilities are closed for Sunday, Januaury 24th, 2016 due to the snow. As a result, 
      we will not be streaming live. A snow service is available on <a href="http://spepchurch.org/assets/Snow/snowService.html" class="alert-link">the Church Website</a>, or feel free to check out something on
      <a href="//archive.spepmedia.com" class="alert-link">The Archive</a> or
      <a href="http://videos.spepmedia.com" class="alert-link">our YouTube channel</a>.
    </div>
  </div>
<?php } ?>
