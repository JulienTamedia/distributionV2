
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

<div class="slideshow">
<ul>
<?php
 
$content = generate_div_img('./gallery/pub/');
       echo $content; 
       ?>
       </ul>
</div>

<style type="text/css">
	.slideshow {
   width: 192px;
   height: 130px;
   overflow: hidden;
   border: 3px solid #F2F2F2;
      overflow: hidden;
}

.slideshow ul {
    /* 4 images donc 4 x 100% */
   width: 900%;
   height: auto;
   padding:0; margin:0;
   list-style: none;

}
.slideshow li {
   float: left;
}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
 
<script type="text/javascript">
   $(function(){
      setInterval(function(){
         $(".slideshow ul").animate({marginLeft:-350},800,function(){
            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
         })
      }, 3500);
   });
</script>
