<html>

<head>

	<title> Porticast: Home</title>
	<link rel="stylesheet" type = "text/css" href="style.css?version=1"  />
	<script src="main.js"></script>

</head>

<body>

	<header>
		<div id="banner">
			<img src="Banner2.png" alt="error" width=100%/>
			<a id="UCLHome" href="https://www.ucl.ac.uk" target="_blank"></a>
		</div>

		<nav>
			<ul>
				<li>
					<a href="index.php"> Home </a>
				</li>
				<li>	
					<a class="selected" href="#">Catia </a> 
					<ul>
						<li><a href="Catia-Home.php">Home</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">Forum</a></li>
						<li><a class="selected" href="#">Quiz</a></li>
					</ul> 
				</li>	
				<li>
					<a href="Wicklow-Home.php"> Wicklow Street Induction </a>
				</li>
				<li>
					<a href="Matlab-Home.php"> Matlab </a>
				</li>
				<li>
					<a   href="Forum-Home.php"> Forum </a>
				</li>
			</ul>
		</nav>
	</header>

	






	<h1> Question 1. In what order should you make an omelette? </h1>
	<br>
	<input id="start" type="button" value="Go" onclick="go();"> 
	<div id="TimedQuestion">
	<form>
		<h2> Step 1 </h2>
		<select name="step0" id="step0">
			<option value="Crack">Cook the eggs </option>
			<option value="Beat">Beat the eggs</option>
			<option value="Cook">Crack the eggs</option>
		</select>
		<h2> Step 2 </h2>
		<select name="step1" id="step1">
			<option value="Crack">Cook the eggs </option>
			<option value="Beat">Beat the eggs</option>
			<option value="Cook">Crack the eggs</option>
		</select>
		<h2> Step 3 </h2>
		<select name="step2" id="step2">
			<option value="Crack">Cook the eggs </option>
			<option value="Beat">Beat the eggs</option>
			<option value="Cook">Crack the eggs</option>
		</select>
	</form>
	</div>
	<br>
	<input id="button" type="button" value = "Finito" onclick="check();">

	<p id="TotalCorrect"></p>


	<footer>
	</footer>

</body>

</html>