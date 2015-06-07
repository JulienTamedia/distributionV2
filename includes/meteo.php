<meta http-equiv="refresh" content="600">
<?php 
$json = file_get_contents('http://www.prevision-meteo.ch/services/json/la-sarraz');
$json = json_decode($json);
 ?>

 <?php 
 echo '<div id="current_day">';
  echo $json->city_info->name;
  echo '/';
  echo $json->current_condition->tmp;
  echo '°';
  echo '<img src="'.$json->fcst_day_0->icon_big.'"/>';
echo '</div>';
echo '<div class="day_after"><p>';
  echo trim(substr($json->fcst_day_1->day_short, 0, -2));
  echo '/';
  echo $json->fcst_day_1->tmax;
  echo '</p><img src="'.$json->fcst_day_1->icon.'"/>';
echo '</div>';
echo '<div class="day_after"><p>';
  echo trim(substr($json->fcst_day_2->day_short, 0, -2));
  echo '/';
  echo $json->fcst_day_2->tmax;
  echo '</p><img src="'.$json->fcst_day_2->icon.'"/>';
echo '</div>';
echo '<div class="day_after"><p>';
  echo trim(substr($json->fcst_day_3->day_short, 0, -2));
  echo '/';
  echo $json->fcst_day_3->tmax;
  echo '</p><img src="'.$json->fcst_day_3->icon.'"/>';
echo '</div>';

  ?>



<style>
@import url(http://fonts.googleapis.com/css?family=Quicksand);

*{
	margin: 0;
	padding:0;
	font-family:'Quicksand';
    font-style: normal;
    font-weight: normal;
    text-transform: uppercase;
    color: white;

}

.day_after{
display: inline-block;
  margin: 2px 30px 2px 30px;
  text-align: center;

}

#current_day {
  display: inline-block;
}
div{
  
}

			#current_day	img{
        height: 70px;
          width: auto;
        margin-right: 45px;
			}

      .day_after  img{
        height: 50px;
          width: auto;
          filter: grayscale(1);
        -webkit-filter: grayscale(1);
        -moz-filter: grayscale(1);
        -o-filter: grayscale(1);
        -ms-filter: grayscale(1);
      }


      p{

      }
</style>



