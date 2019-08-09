<?php

function the_title() {
	global $title;
	echo "Porticast : $title" ;
}

function create_nav($directory){
	foreach (scandir(SERVER_ROOT.$directory) as $fname) {
		$folder = $directory.'/'.$fname;

		if (!is_numeric(substr($fname, 0, 2))){
			continue;
		}

		if (is_dir(SERVER_ROOT.$folder)){
			// Is folder
			$title = substr($fname, 2);
			echo '<li> <a href="#">'.$title.'</a> <ul>';
			create_nav($folder);
			echo '</ul> </li>';

		} elseif (strpos($folder, ".php")) {
			// Is page file
			$name = substr($fname, 2,-4);
			echo '<li> <a href="'.SERVER_ADR."?page=".urlencode($folder).'">'.$name.'</a></li>';
		}
	}
}

function after($char, $inthat)
    {
        if (!is_bool(strpos($inthat, $char))){
            return substr($inthat, strpos($inthat,$char)+strlen($char));
        }

        
    };

function after_last ($char, $inthat)
    {
        if (!is_bool(strpos($inthat, $char))){
            return substr($inthat, strrpos($inthat, $char)+strlen($char));
        }
        
    };

function before ($char, $inthat)
    {
        return substr($inthat, 0, strpos($inthat, $char));
    };


?>