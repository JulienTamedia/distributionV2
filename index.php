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
		<div class="ui-block-a"><div class="ui-bar ui-bar-a" id ="epaper">
			<div class="layer">
			<center>
					<h1 id="texte_epaper">
					Les informations quotidiennes <br /> <b>en un clin d'oeil</b>
				</h1>
				<img id="img_epaper" src="./assets/img/doigts.png">
				</center> 
			</div>
		</div></div>
	</div>
<div class="ui-grid-b panel" id="row2">
	<div class="ui-block-a" id="news"><?php Include('./includes/news.php'); ?></div>
	<div class="ui-block-b">Block B</div>
	<div class="ui-block-c">Block C</div>
</div>
</body>
</html>