<?php 
//Ce fichier contient toutes les fonctions php utilisé pour la partie front

function get_url_img($path){
$content = '';
if(is_dir($path)){
$folder = $path;
$link = dir($folder);
while ($entry = $link->read()) {
	
	if(@getimagesize($path.$entry)){
	$content .= '
	<div>
	<img src="'.$path.$entry.'">
	</div>
	';
}
}
}else{
	//si on ne trouve pas le dossier ou si le dossier est vide on retourne false
	return false;
}

return $content;
}