<?php

$tabs = scandir(Nav, 0);
$unwanted = array('.','..','.DS_Store','Home');
$nav[] = "Home";

foreach($tabs as $tab){
	if(!in_array($tab, $unwanted)){
		$nav[]= $tab;
	}
};
unset($tab);

foreach ($nav as $select) {
	$dir = 'Nav/'.$select;
	$pagez = scandir($dir,0);
	foreach($pagez as $p){
		if(!in_array($p,$unwanted)){
			$menu[$select][]= $p ;
		}
	};
}; 


echo "<nav> <ul>";
foreach($menu as $title => $options){
	echo '<li> <a href="#">'.$title.'</a> <ul>';	

	for ($i=0;$i<count($options);$i++){
		$rest = substr($options[$i], 0,-4);
		echo '<li> <a href="/Porticast2019/Nav/'.$title.'/'.$options[$i].'">'.$rest.'</a></li>';
	};	
	echo '</ul></li>';
};
echo "</nav> </ul>";


?>

