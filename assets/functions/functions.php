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
	<div class="item">
            <img src="'.$path.$entry.'" width="100%" height="auto">
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