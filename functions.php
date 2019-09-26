<?php

function print_page_title() {
	echo "Porticast : " ;

	if (!isset($_GET["page"])) {
		echo 'Home';
	} elseif ($_GET["page"]=="Tools" && isset($_GET["tool"])) {
		echo substr($_GET["tool"], 0,-4)." Tool";
	} else{
		$stem =  substr($_GET['page'],6,-4);
		switch ($stem) {
			case 'Home':
				echo $stem ;
				break;
			
			default:
				$package = before('/',$stem);
				echo $package ;
				$page = substr(after_last ('/',$stem),2);
				echo ' ' . $page ;
				break;
		}
	}
}



function create_video_list($data){
	foreach ($data as $video) {

		echo '<div class="row"> <div class="col12">
			<h3 class="videotitle" id="pillar">'.$video['video_title'].'</h3>
		</div>
		</div>
		<div class="row">
			
			<div class="col9">
				<div class="video">
					<iframe width="580" height="326" src=https://youtube.com/embed/'.$video['id'].' frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
				<div class="col3">
					<p>' .$video['description'].'</p> </div> </div> ';
	}

}


function create_glossary($data){
	foreach ($data as $entry){
		echo '<div class ="row">
				<div class ="col2">
					<p>'.$entry['term'].'</p>
				</div>
				<div class ="col2">
					<p>'.$entry['description'].'</p>
				</div>
				</div>';



	}

}

function create_icon_index($data){
	foreach ($data as $entry){
		echo '<div class ="row">
		<div class ="col1">
			<p>'.$entry['function'].'</p>
		</div>
		<div class ="col1">
			<img src="Images/Icons/Catia/'.$entry['function'].'.png" width="40px">
		</div>
		<div class ="col1">
			<p>'.$entry['location'].'</p>
		</div>
		<div class ="col1">
			<p>'.$entry['tutorial'].'</p>
		</div>
		</div>';
	}
}


function create_toolguide_list($tools){
	foreach ($tools as $tool) {
		echo '<a href="'.SERVER_ADR.'?page=Tools&tool='.urlencode($tool.".php").'">'.$tool.'</a><br>';
	}
}



function create_STAR_icon($data){
	foreach ($data as $entry) {
		echo '<div class ="row">
		<div class ="col1">
			<p>'.$entry['function'].'</p>
		</div>
		<div class ="col1">
			<img src="Images/Icons/STAR/'.$entry['function'].'.png" width="40px">
		</div>
		<div class ="col2">
			<p>'.$entry['description'].'</p>
		</div>
		</div>';
	}
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