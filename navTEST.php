<?php

chdir(SERVER_ROOT);


$tabs = scandir(Nav, 0);
$unwanted = array('.','..','.DS_Store','Home');


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


?>

