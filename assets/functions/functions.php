<?php 
//Ce fichier contient toutes les fonctions php utilisé pour la partie front

function generate_div_img($path){
	$content = '';
	if(is_dir($path)){
		$folder = $path;
		$link = dir($folder);
		while ($entry = $link->read()) {

			if(@getimagesize($path.$entry)){
			$content .= '
			<li>
			    <img src="'.$path.$entry.'" width="350px" height="auto">
			</li>
			';
			}
		}
	}else{
	//si on ne trouve pas le dossier ou si le dossier est vide on retourne false
	return false;
	}

	return $content;
}

