<?php
$title= "Catia Tool Guides";
?>

<html>
 
<head>
 	<link rel="stylesheet" type="text/css" href="Stylesheets\tools.css">
</head>
 
<body>
	<div id="background">
		<article>
			<ol class='nav_alphabet'>
				<li class='alphabet_item'><a href='#A'>A</a></li>
				<li class='alphabet_inactive'><a href='#B'>B</a></li>
				<li class='alphabet_item'><a href='#C'>C</a></li>
				<li class='alphabet_item'><a href='#D'>D</a></li>
				<li class='alphabet_inactive'><a href='#E'>E</a></li>
				<li class='alphabet_item'><a href='#F'>F</a></li>
				<li class='alphabet_item'><a href='#G'>G</a></li>
				<li class='alphabet_item'><a href='#H'>H</a></li>
				<li class='alphabet_item'><a href='#I'>I</a></li>
				<li class='alphabet_inactive'><a href='#J'>J</a></li>
				<li class='alphabet_inactive'><a href='#K'>K</a></li>
				<li class='alphabet_item'><a href='#L'>L</a></li>
				<li class='alphabet_item'><a href='#M'>M</a></li>
				<li class='alphabet_inactive'><a href='#N'>N</a></li>
				<li class='alphabet_inactive'><a href='#O'>O</a></li>
				<li class='alphabet_item'><a href='#P'>P</a></li>
				<li class='alphabet_inactive'><a href='#Q'>Q</a></li>
				<li class='alphabet_item'><a href='#R'>R</a></li>
				<li class='alphabet_item'><a href='#S'>S</a></li>
				<li class='alphabet_item'><a href='#T'>T</a></li>
				<li class='alphabet_item'><a href='#U'>U</a></li>
				<li class='alphabet_inactive'><a href='#V'>V</a></li>
				<li class='alphabet_item'><a href='#W'>W</a></li>
				<li class='alphabet_inactive'><a href='#X'>X</a></li>
				<li class='alphabet_inactive'><a href='#Y'>Y</a></li>
				<li class='alphabet_inactive'><a href='#Z'>Z</a></li>
			</ol> 
			<div class='alphabet_index' id='A'>
				<h1>A</h1>
				<?php
				$c_tools =["Add"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='C'>
				<h1>C</h1>
				<?php
				$c_tools =["Chamfer","Constraint Definition","Circular Pattern","Close Surface"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='D'>
				<h1>D</h1>
				<?php
				$c_tools =["Dynamic Sectioning"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='F'>
				<h1>F</h1>
				<?php
				$c_tools =["Fillet Radius"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='G'>
				<h1>G</h1>
				<?php
				$c_tools =["Groove"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='H'>
				<h1>H</h1>
				<?php
				$c_tools =["Hole"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='I'>
				<h1>I</h1>
				<?php
				$c_tools =["Intersect"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='L'>
				<h1>L</h1>
				<?php
				$c_tools =["Line"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='M'>
				<h1>M</h1>
				<?php
				$c_tools =["Mirror", "Multi-Section Solid"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='P'>
				<h1>P</h1>
				<?php
				$c_tools =["Pad", "Plane", "Pocket", "Points"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='R'>
				<h1>R</h1>
				<?php
				$c_tools =["Remove", "Rectangular Pattern"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='S'>
				<h1>S</h1>
				<?php
				$c_tools =["Scaling", "Shaft", "Shell", "Sketch Solving Status", "Split"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='T'>
				<h1>T</h1>
				<?php
				$c_tools =["Thickness", "Thick Profile", "Thick Surface", "Translation", "Trim"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='U'>
				<h1>U</h1>
				<?php
				$c_tools =["User Pattern"];
				create_toolguide_list($c_tools);
				?>
			</div>
			<div class='alphabet_index' id='W'>
				<h1>W</h1>
				<?php
				$c_tools =["Wall Thickness Analysis"];
				create_toolguide_list($c_tools);
				?>
			</div>
  		</article>
	</div>
</body>
 
</html>