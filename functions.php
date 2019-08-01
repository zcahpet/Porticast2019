<?php

function the_title() {
	global $title;
	echo "Porticast : $title" ;
}

function create_nav($directory){
	chdir($directory);
	foreach (glob('*') as $fname) {
		$folder = $directory.'/'.$fname;
		$cheat = substr($directory, 25).'/';
		$path_parts = pathinfo($folder);
		if (empty($path_parts['extension'])){
			$title = substr($fname, 2);
			echo '<li> <a href="#">'.$title.'</a> <ul>';
			create_nav($folder);
			echo '</ul> </li>';
		} else {
			$name = substr($fname, 2,-4);
			echo '<li> <a href="'.$cheat.$fname.'">'.$name.'</a></li>';
		}
	};
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

function create_navTEST($directory){
	chdir($directory);
	foreach (glob('*') as $fname) {
		$folder = $directory.'/'.$fname;
		$cheat = substr($directory, 25).'/';
		$path_parts = pathinfo($folder);
		if (empty($path_parts['extension'])){
			$pretitle = substr($fname, 2);
			//$title = after('-',$pretitle);
			echo '<li> <a href="#">'.$pretitle.'</a> <ul>';
			create_navTEST($folder);
			echo '</ul> </li>';
		} else {
			$name = substr($fname, 2,-4);
			$pname = after('Nav/',$directory);
			echo '<li> <a href="'.SERVER_ADR.'?package='.$pname.'&pagename='.$fname.'">'.$name.'</a></li>';
		}
	};
}

?>