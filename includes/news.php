<img id="plume" alt="plume" src="./assets/img/plumes.png">


<?php 

$articles = array();
	$rssURL = "http://www.24heures.ch/vaud-regions/rss.html";
    $article = file_get_contents($rssURL);
    $x = new SimpleXmlElement($article);
     
     
    foreach($x->channel->item as $entry) {
         $articles[] = "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
    }



$content = "";

for ($i=0; $i <= 4 ; $i++) { 
	$content.= $articles[$i];
}

?>

<ul>
	
<?php echo $content; ?>

</ul>