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
if (array_key_exists('pagename', $_GET)){
    $PageName = $_GET['pagename'];
}else{
    $PageName = 'Homepage';
}

if (array_key_exists('package', $_GET)){
    $PackageName = $_GET['package'];
}else{
    $PackageName = '';
}

print_r($_GET) ;



define("PAGE_NAME", strtolower($PageName));
define("PACKAGE", strtolower($PackageName));

echo "<html>";

echo PAGE_NAME;
echo '<br>';
echo SERVER_ROOT.$PackageName.$PageName;



// Print header
require SERVER_ROOT.'headerTEST.php';

// Depending on page name constant, set from URL, import a page
switch(PAGE_NAME){
    case '01getting started.php':
    	echo '<h1>hi</h1>';
    	chdir(SERVER_ROOT);
        require '/02CATIA/01Getting%20Started.php';
        break;

    case 'test':
    	echo "hi";
    	break;

    case 'quiz':
        require SERVER_ROOT.'pages/Catia-Quiz.php';
        break;

    case 'faq':
        require SERVER_ROOT.'pages/Catia-FAQ.php';
        break;

    case 'forum':
        require SERVER_ROOT.'pages/Catia-Forum.php';
        break;

    default:
        // Always good to catch a fall through on a switch; you want to see and correct the error
        trigger_error('Unknown page name', E_USER_ERROR);
}




echo "</body>";
echo "</html>";
?>