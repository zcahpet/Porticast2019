<?php

function print_page_title() {
	echo "Porticast : " ;

	if (!isset($_GET["page"])) {
		echo 'Home';
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