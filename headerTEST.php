<?php 
require_once 'config.php';
?>




<head>
	<title> <?php the_title(); ?></title>
	<link rel="stylesheet" type = "text/css" href="style.css"  />
</head>

<body>

	<header>
		<div id="banner">
			<img src="Images/Banner.png" alt="error" width=100%/>
			<a id="UCLHome" href="https://www.ucl.ac.uk" target="_blank"></a>
		</div>

			
		<?php
		echo '<nav><ul>';
		create_nav('Nav'); 
		echo '</ul></nav>';
		?>
		
	</header


	





