<?php 
require_once 'config.php';
?>




<head>
	<title> <?php the_title(); ?></title>
	<link rel="stylesheet" type = "text/css" href="/Porticast2019/style.css?version=1"  />
</head>

<body>

	<header>
		<div id="banner">
			<img src="/Porticast2019/images/Banner.png" alt="error" width=100%/>
			<a id="UCLHome" href="https://www.ucl.ac.uk" target="_blank"></a>
		</div>

			
		<?php
		echo '<nav><ul>';
		create_nav(SERVER_ROOT.'Nav'); 
		echo '</ul></nav>';
		?>
		
	</header>


	





