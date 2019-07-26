<?php
$title= "Home";
require_once '../../headerTEST.php' ;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="..\..\Stylesheets\home_style.css">
	<script type="text/javascript" src="home_script.js"></script>
</head>
<body>
	<h1>Home</h1>
	<div id="intro" class="text">
		<p>
			This website is designed for and used by undergraduate Mechanical Engineering students at UCL. It hosts videos and tutorials for softwares such as CATIA and MatLab as well as the induction videos for the workshop at Wicklow Street. The purpose of the website is to help new students get familiar with the machines, tools and softwares they will use during their time at UCL and beyond.
		</p>
	</div>
	<div>
		<div id="catia" class="text">
			<img src="..\..\images\home\CATIA_logo.png" width="50%">
			<p>
				CATIA is a CAD (Computer Aided Design) software used in many areas of engineering and throughout the industrial world by professionals to make their ideas into digital reality. This then gives an accurate estimate of the real life aesthetics and functionality of the part modelled.
			</p>
		</div>
	</div>
	<div>
		<div id="matlab" class="text">
			<img src="..\..\images\home\MATLAB_logo.png" width="50%">
			<p>
				MatLab (Matrix Laboratory) is a programming language used for matrix manipulation, plotting graphs and many other mathematical applications. It is a useful tool for any engineer and remains relevant today, even decades after its release.
			</p>
		</div>
	</div>
	<div >
		<div id="wicklow" class="text">
			<img src="..\..\images\home\wicklow_img.png" width="50%">
			<p>
				The Wicklow Street workshop opened in 2019 as a space for UCL Mechanical Engineering students to freely work on their projects and for the racing teams to manage an efficient workflow. While it is important to know how to use these machinese both for your time at UCL and what may come after, it is important to recognise the danger they pose if used poorly. These videos aim to provide adequate knowledge of the machines for them to be used safely.
			</p>
		</div>
	</div>
</body>
</html>