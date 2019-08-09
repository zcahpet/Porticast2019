<?php
$title= "Matlab Getting Started";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Stylesheets/matStart_style.css">
</head>
<body>
	<div id="main">
		<h1>Getting Started</h1>
		<div class="content" id="interface">
			<h2>Matlab Interface</h2>
				<img src="Images/Matlab/interface.png" class="pic">
				<p>
					1. <u>The Script</u>: This is where the code is typed. Here we have simply defined a variable "var" and assigned to it the value of 2 + 3. Then, we display the value of the variable on line 2. The semi-colons (;) at the end tell Matlab that this row of code is finished. 
					<br><br>
					2. <u>The Command Window</u>: This is where the output is displayed. Here, as we suppressed the output of line 1 with a semi-colon, only the disp(var) creates an output which shows the value of 5.
					<br><br>
					3. <u>The Workspace</u>: This is where all the variable, arrays, vectors and matrices are stored. Depending on their size, they will be displayed. For large values, an approximation or the dimensions will be shown instead.
					<br><br>
					4. <u>The Toolbar</u>: This is where all the useful tools are stored. It allows the user to Run the code as well as saving and opening files and many other commands.
				</p>
		</div>
		<h2 class="headers">Basic Code</h2>
			<div class="content" id="basics">
				<img src="Images/Matlab/basics.png" class="pic">
				<p>
					Here are some of the basic yet most useful operators on Matlab:
					<br><br>
					1. + - * / : The "sum", "subtract", "multiply" and "divide" operators.
					<br><br>
					2. cos() and sin() : The cosine and sine operators. Matlab can also do tan(), acos(), asin(), atan() and hyperbolic functions cosh(), sinh() and tanh().
					<br>
					N.B.These operators are in radians and need to be spelt cos<u>d</u>() and sin<u>d</u>() if degrees are used.
					<br><br>
					3. ^ : The caret symbol used to raise a number to a given exponential power.
					<br><br>
					4. sqrt() : Stands for <u>sq</u>uare <u>r</u>oo<u>t</u> and gives such number.
					<br><br>
					5. exp() : Stands for <u>exp</u>onential and gives e raised to the given power.
					<br>
					N.B. Matlab can process imaginary numbers.
					<br><br>
					6. log() : Gives the natural <u>log</u>arithm of the given number
					<br><br>
					7. abs() : Gives the <u>abs</u>olute value of a variable.
					<br><br>
					N.B. The values here are displayed in the command window as their output was not suppressed using a semi-colon at the end of the line. Otherwise, each variable and its assigned value can be seen in the workspace.
					<br><br>
				</p>
			</div>
		<h2 class="headers">Plotting</h2>
		<br>
			<h3>Plotting Points</h3>
			<div class="content" id="graph1">
				<p>
					Plotting specific points on Matlab is easy and follows the format:
				</p>
					<br>
				<p class="mat_text">
					plot(X, Y, <span style="color: #DB06E5;">'style'</span>, X2, Y2, <span style="color: #DB06E5;">'style_2'</span>, ..., Xn, Yn, <span style="color: #DB06E5;">'style_n'</span>);
				</p>
				<p>
					<br>
					Where:
					<br>
					X are the x values
					<br>
					Y are the y values
					<br>
					style represents the way the points appears on the graph. 'x' for a cross, '.' for a dot etc...
					<br>
					N.B. We do not need toput a semi-colon at the end of the 'plot' line as it will show a graph either way. Yet, it is good practice to end each statement with a semi-colon unless wanted otherwise.
					<br><br>
					Here we are using the following code:
					<br>
				</p>
				<p class="mat_text">
					plot(1, 2, <span style="color: #DB06E5;">'x'</span>, 1, 3, <span style="color: #DB06E5;">'x'</span>, 2, 3,<span style="color: #DB06E5;">'x'</span>, 2, 1, <span style="color: #DB06E5;">'x'</span>);
				</p>
				<br>
				<img src="Images/Matlab/points.png" id="graph_points">
			</div>
			<br>
			<h3>Plotting 2D Graphs</h3>
			<div class="content" id="graph2">
				<p>
					Plotting 2D graphs on Matlab follows the format:
				</p>
					<br>
				<p class="mat_text">
					x = [lower limit:increment:upper limit];
					<br>
					y = function of x;
					<br>
					plot(X, Y, <span style="color: #DB06E5;">'style'</span>);
				</p>
				<p>
					N.B. Here the style is optional and might be better left as empty in order to get a continuous line as opposed to each individual point on the line.
				</p>
				<br>
				<p>
					Here we are using the following code:
				</p>
				<p class="mat_text">
					x = [0:0.1:4*pi];
					<br>
					y = sin(x);
					<br>
					plot(x, y);
				</p>
				<br>
				<img src="Images/Matlab/wave.png" id="graph_2d">
			</div>
			<br>
			<h3>Plotting 3D Graphs</h3>
			<div class="content" id="graph3">
				<p>
					Plotting 3D graphs on Matlab follows the format:
				</p>
					<br>
				<p class="mat_text">
					[x, y] = meshgrid[lower limit:increment:upper limit];
					<br>
					z = function of x and y;
					<br>
					surf(x, y, z);
					<br><br>
				</p>
				<p>
					Here we are using the following code:
				</p>
				<p class="mat_text">
					[x, y] = meshgrid(-5:0.1:5);
					<br>
					z = x.^2 - y.^2;
					<br>
					surf(x, y, z);
					<br>
					shading <span style="color: #DB06E5;">interp</span>;
					<br><br>
				</p>
				<p>
					N.B. <span style="font-family: 'Courier New', Courier, monospace;"> shading <span style="color: #DB06E5;"> interp </span></span> is not needed but removes the gridlines to give a smoother look to the graph. Also, as x and y are matrices of size 101 x 101, the '.' tells Matlab to multiply element-wise as opposed to multiply them as matrices. 
				</p>
				<br>
				<img src="Images/Matlab/surf.png" id="graph_3d">
				<br><br>
				<p id="conclusion">
					Finally, it is worth noting that there are other types of plots such as contour plots, quiver plots etc.. which might be useful. However, this is a basic introduction to Matlab plots and therefore not the right place to introduce those.
				</p>
			</div>
	</div>
</body>
</html>

<?php
require_once '../../footer.php';
?>
