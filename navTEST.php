<?php

require_once 'config.php';


chdir(SERVER_ROOT);


$tabs = scandir(Nav, 0);
$unwanted = array('.','..','.DS_Store',);

// Forming a nested array which functions as the file directory

foreach($tabs as $tab){
	if(!in_array($tab, $unwanted)){
		//$nav[]= $tab;
		$dir = 'Nav/'.$tab;
		$pages = scandir($dir,0);
		foreach($pages as $page){
			if(!in_array($page,$unwanted)){
				$menu[$tab][]=$page;
			}
		};
	}
};
unset($tab);


//Code which creates the list

echo "<nav> <ul>";
foreach($menu as $header => $options){
	$title= substr($header, 2);
	echo '<li> <a href="#">'.$title.'</a> <ul>';	
	for ($i=0;$i<count($options);$i++){
		$rest = substr($options[$i], 2,-4);
		echo '<li> <a href="/Porticast2019/Nav/'.$header.'/'.$options[$i].'">'.$rest.'</a></li>';
	};	
	echo '</ul></li>';
};
echo "</ul> </nav>";


/*foreach ($nav as $select) {
	$dir = 'Nav/'.$select;
	$pagez = scandir($dir,0);
	foreach($pagez as $p){
		if(!in_array($p,$unwanted)){
			$menu[$select][]= $p ;
		}
	};
}; */

?>