
<?php 
$test = get_url_img('./gallery/pub/');

 ?>

 <div id="slideshow">
   <?php echo $test; ?>
</div>

<script type="text/javascript">

  
  $("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(100)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');

},  3000);

</script>

<style type="text/css">
	
	#slideshow { 
    
}




</style>