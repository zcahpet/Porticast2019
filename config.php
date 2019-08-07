<?php
/*
Configuration file, should import all functions and setup all constants common to all scripts
Seems overkill at first but in time will grow and can become complex
*/

/// Sets up constants to be used across every page on the site. By convention, these are in all caps

// The path to the folders on your computer / deployed server. Means you can move your entire project around on the server simply


// The URL of your site. Localhost in development but eventually the real URL.
if (isset($_SERVER['ENVIRO']) && $_SERVER['ENVIRO'] == 'Production'){
	define("SERVER_ADR", "/");
	define("SERVER_ROOT", $_SERVER['DOCUMENT_ROOT']);
}else{
	require_once "devConfig.php";
}

// define("SERVER_ADR", "http://www.portcast.co.uk/");

/// Imports functions, note the use of constants.
require_once SERVER_ROOT.'functions.php';

//devConfig.example.php

?>



