<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet/less" type="text/css" href="./assets/css/style.less">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Include jQuery Mobile stylesheets -->
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<!-- Include the jQuery library -->
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<!-- Include the jQuery Mobile library -->
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="./assets/js/less.js" type="text/javascript"></script>
	<title>
		Distribution
	</title
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
	</div>
	<div class="small" id="jeunesse">
		<?php include('./includes/jeunesse.php');?>
	</div>

	</div>
	<div class="ui-block-c panel fifty" id="village"><?php include('./includes/village.php') ?></div>
</div>
<div class="ui-grid-b" id="row3">
	<div class="ui-block-a panel twenty" id="diapo"><div id="carre"></div> <?php include('./includes/diapo.php') ?></div>
	<div class="ui-block-b panel fifty" id="concours"><?php include('./includes/concours.php') ?></div>
	<div class="ui-block-c panel ten">
		<div class="small" id="restaurant">
			<?php include('./includes/restaurant.php') ?>
		</div>
		<div class="small" id="abbo">
			<?php include('./includes/abbo.php'); ?>

		</div>
	</div>
</div>
</body>
</html>
