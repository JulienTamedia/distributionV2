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

  echo $json->fcst_day_1->day_short;
  echo '/';
  echo $json->fcst_day_1->tmax;
  echo '<img src="'.$json->fcst_day_1->icon.'"/>';

  echo $json->fcst_day_2->day_short;
  echo '/';
  echo $json->fcst_day_2->tmax;
  echo '<img src="'.$json->fcst_day_2->icon.'"/>';

  echo $json->fcst_day_3->day_short;
  echo '/';
  echo $json->fcst_day_3->tmax;
  echo '<img src="'.$json->fcst_day_3->icon.'"/>';

  echo $json->fcst_day_4->day_short;
  echo '/';
  echo $json->fcst_day_4->tmax;
  echo '<img src="'.$json->fcst_day_4->icon.'"/>';
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



