<meta http-equiv="refresh" content="600">
<?php 
$json = file_get_contents('http://www.prevision-meteo.ch/services/json/la-sarraz');
$json = json_decode($json);
 ?>

 <?php 
  echo $json->city_info->name;
  echo '/';
  echo $json->current_condition->tmp;
  echo '°';
  echo '<img src="'.$json->fcst_day_0->icon_big.'"/>';
  ?>



<style>
@import url(http://fonts.googleapis.com/css?family=Quicksand);
*{
	margin: 0;
	padding:0;
	font-family:'Quicksand', sans-serif;
    font-style: normal;
    font-weight: normal;
    text-transform: uppercase;
}

				img{
				height: 50%;
				width: auto;
			}
</style>



