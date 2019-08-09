<?php

/* 
This is your "apex"; all the pages will load from this point.
Attempts to find the name of the page from the URL; a GET variable. If not, reverts to the home page. If unknown page is sent, sends an error, as this shouldn't happen normally!
This also acts as a very simple "Access Control List". However basic, it's a good thing to get used to as it's very handy when it comes to implementing logins / security. It's all about having a single point to administer which content is loaded, rather than relying on each page to import functions / security.
Could also be split into two GET variables; "package name" (Catia, Matlab, Wicklow etc) and "page name" (Homepage, Quiz etc), but kept simple for now!
*/

// Call in your configuration file. Good to keep separate as in time this may get quite large and have DB passwords in etc
require_once 'config.php';

// Get page name from URL
if (array_key_exists('page', $_GET)){
    $PageName = $_GET['page'];
}else{
    $PageName = 'Homepage';
}

echo "<html>";



// Print header
require SERVER_ROOT.'header.php';

// Depending on page name constant, set from URL, import a page
switch($PageName){
    case 'Homepage':
        require SERVER_ROOT.'Nav/01Home.php';
        break;

    case 'Nav/01Catia/video':
    case 'Nav/02Matlab/video':
    	if (array_key_exists('vidid', $_GET) && is_numeric($_GET['vidid'])){
            $VidID = $_GET['vidid'];
        }else{
            $VidID = 1;
        }

        SERVER_ROOT.'pages/Video.php';
    	break;


    default:
        if (substr($PageName, 0, 3) != "Nav"){
            trigger_error('Stop hacking us'.substr($PageName, 0, 3), E_USER_ERROR);
        } 
        require SERVER_ROOT.$PageName;
}




echo "</body>";
echo "</html>";
?>