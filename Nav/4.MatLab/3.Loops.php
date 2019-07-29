<?php
$title= "Catia Getting Started";
require_once '../../headerTEST.php' ;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="..\..\Stylesheets\matLoop_style.css">
</head>
<body>
	<h1>Loops</h1>
	<h2>While</h2>
	<div class="content">
		<br>
		<p>
			While loops are used to repeatedly execute a code as long as the underlying condition stays true.
			<br>
			They follow the format:
		</p>
		<p class="mat_text">
			define variable;
			<br>
			<span style="color:blue;">while</span> (statement)
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; code;
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; increment;
			<br>
			<span style="color:blue;">end</span>
		</p>
		<br>
		<p>
			Here we are using the following code:
		</p>
		<p class="mat_text">
			x = 1;
			<br>
			<span style="color:blue;">while</span> (x <= 5)
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; fprintf(<span style="color: #DB06E5;">'The value of x is %i\n'</span>, x);
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; x = x + 1;
			<br>
			<span style="color:blue;">end</span>
		</p>
		<br>
		<p>
			This gives a result in the command window of:
		</p>
		<p class="mat_text">
			The value of x is 1
			<br>
			The value of x is 2
			<br>
			The value of x is 3
			<br>
			The value of x is 4
			<br>
			The value of x is 5
		</p>
		<br>
		<p>
			N.B. The <span style="font-family: 'Courier New', Courier, monospace; color: #DB06E5;">%i</span> means that the number should be an integer and <span style="font-family: 'Courier New', Courier, monospace; color: #DB06E5;">\n</span> signifies a linebreak. On the otherhand, the <span style="font-family: 'Courier New', Courier, monospace;">, x</span> determines which variable this applies to. This is not specific to the while loop and is not needed for mathematical operations.
		</p>
		<br>
	</div>
	<h2 class="headers">For</h2>
		<div class="content">
		<br>
		<p>
			For loops are used execute a code for a set number of times. As such, unlike the while loop, the variable should not be pre-defined and no increment is needed
			<br>
			They follow the format:
		</p>
		<p class="mat_text">
			<span style="color:blue;">for</span> (variable = [lower limit:increment:upper limit])
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; code;
			<br>
			<span style="color:blue;">end</span>
		</p>
		<br>
		<p>
			Here we are using the following code:
		</p>
		<p class="mat_text">
			<span style="color:blue;">for</span> (x = [1:1:5])
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; fprintf(<span style="color: #DB06E5;">'The value of x is %i\n'</span>, x);
			<br>
			<span style="color:blue;">end</span>
		</p>
		<br>
		<p>
			This gives a result in the command window of:
		</p>
		<p class="mat_text">
			The value of x is 1
			<br>
			The value of x is 2
			<br>
			The value of x is 3
			<br>
			The value of x is 4
			<br>
			The value of x is 5
		</p>
		<br>
		</div>
	<h2 class="headers">Nested</h2>
		<div class="content">
		<br>
		<p>
			Nested loops are just a combination of multiple loops contained within one another. 
			<br><br>
			They do not follow a particular format since they can come in various forms. As such the following code is only an example of a nested loop designed to print all prime numbers between 1 and 20:
		</p>
		<br>
		<p class="mat_text">
			<span style="color:blue;">for</span> (x = [2:1:20])
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">for</span> (y = [2:1:20])
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">if</span> (~mod(x,y))
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">break</span>
			<br> 
			&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <span style="color:blue;">end</span>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">end</span>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">if</span> (y > (x/y))
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; fprintf(<span style="color: #DB06E5;">'%i is a prime number\n'</span>, x);
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">end</span>
			<br>
			<span style="color:blue;">end</span>
		</p>
		<br>
		<p>
			This gives a result in the command window of:
		</p>
		<br>
		<p class="mat_text">
			2 is a prime number
			<br>
			3 is a prime number
			<br>
			5 is a prime number
			<br>
			7 is a prime number
			<br>
			11 is a prime number
			<br>
			13 is a prime number
			<br>
			17 is a prime number
			<br>
			19 is a prime number
		</p>
		<br>
		</div>
</body>
</html>