<?php



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


echo "<nav> <ul>";
create_nav(SERVER_ROOT.'Nav');
echo "</ul> </nav>";

?>