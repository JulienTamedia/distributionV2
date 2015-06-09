<?php   
include_once('./assets/functions/functions.php');

 ?>
<!DOCTYPE html>
<html>
<head>
<?php include('./includes/head.php'); ?>
	<title>
		Distribution V 2.0
	</title>
</head>
<body>
<!-- Panel numero 1 qui contient les e-papers-->
	<div id="row1" class="ui-grid-solo panel">
		<div class="ui-block-a"><div class="ui-bar ui-bar-a" id ="epaper"><?php include('./includes/epaper.php'); ?></div></div>
	</div>
<div class="ui-grid-b" id="row2">
	<div class="ui-block-a panel twenty" id="news"><?php Include('./includes/news.php'); ?></div>
	<div class="ui-block-b panel ten">
	<div class="small" id="pub">
	<?php include('./includes/pub.php') ?>
	</div>
	<div class="small" id="jeunesse">
		<?php include('./includes/jeunesse.php');?>
	</div>

	</div>
	<a href="./village.php"><div class="ui-block-c panel fifty" id="village"><?php include('./includes/village.php') ?></div></a>
</div>
<div class="ui-grid-b" id="row3">
	<div class="ui-block-a panel twenty" id="diapo"> <?php include('./includes/diapo.php') ?></div>
	<div class="ui-block-b panel fifty" id="concours"><?php include('./includes/concours.php') ?></div>
	<div class="ui-block-c panel ten">
		<div class="small" id="restaurant">
			<?php include('./includes/restaurant.php') ?>
		</div>
		<div class="small" id="abbo">
		<a href="#"> 	<?php include('./includes/abbo.php'); ?> </a>

		</div>
	</div>
</div>


<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/looper.js"></script>
</body>
</html>
