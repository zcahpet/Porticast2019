<?php
$title= "Catia Getting Started";
require_once '../../headerTEST.php' ;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="..\..\Stylesheets\matMatrix_style.css">
</head>
<body>
	<h1>Matrices</h1>
	<h2>Matrices on MatLab</h2>
	<div class="content">
		<p>
			An <b>array</b> is a collection of numbers or strings (text) and matrices are simply 2-dimentional arrays. Matlab 'understands' every parametre as a matrix. Even single numbers (e.g. x = 1) and vectors (e.g. v = [1 3 2]) are taken as <b>1-by-1</b> and (in this example) <b>1-by-3</b> matrices.
			<br><br>
	</div>
	<h2 class="headers">Creating Matrices</h2>
	<div class="content">
		<p>
			Entering matrices on Matlab is fairly easy. They are input by entering a list of numbers separated by commas (,) for elements on a same row and semi-colons (;) for elements on the next row. 
			<br>
			As such, inputting:
		</p>
		<p class="mat_text">
			A = [1, 2, 3; 4, 5, 6; 7, 8, 9];
			<br>
			B = [10, 11, 12; 13, 14, 15; 16, 17, 18];
		</p>
		<p>
			Gives:
		</p>
		<p class="mat_text">
			A = 
			<br>
			&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp; 2 &nbsp;&nbsp; 3
			<br>
			&nbsp;&nbsp;&nbsp; 4 &nbsp;&nbsp; 5 &nbsp;&nbsp; 6
			<br>
			&nbsp;&nbsp;&nbsp; 7 &nbsp;&nbsp; 8 &nbsp;&nbsp; 9
			<br><br>
				B = 
			<br>
			&nbsp;&nbsp;&nbsp; 10 &nbsp; 11 &nbsp; 12
			<br>
			&nbsp;&nbsp;&nbsp; 13 &nbsp; 14 &nbsp; 15
			<br>
			&nbsp;&nbsp;&nbsp; 16 &nbsp; 17 &nbsp; 18
		</p>
		<br>
		<p>
			It is possible to <b>concatenate</b> matrices (link smaller matrices to make a bigger one) as such:
		</p>
		<p class="mat_text">
			C = [A ; B];
		</p>
		<br>
		<p>
			Which gives:
		</p>
		<p class="mat_text">
			C = 
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp; 2 &nbsp;&nbsp; 3
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; 4 &nbsp;&nbsp; 5 &nbsp;&nbsp; 6
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; 7 &nbsp;&nbsp; 8 &nbsp;&nbsp; 9
			<br>
			&nbsp;&nbsp;&nbsp; 10 &nbsp; 11 &nbsp; 12
			<br>
			&nbsp;&nbsp;&nbsp; 13 &nbsp; 14 &nbsp; 15
			<br>
			&nbsp;&nbsp;&nbsp; 16 &nbsp; 17 &nbsp; 18
		</p>
		<br><br>
		<p>
			It is also possible to create matrices using the incremental notation seen earlier in order to save time by not having to write out each individual value:
		</p>
		<p class="mat_text">
			D = [100: -11: 50; 45: -11: 0];
		</p>
		<p>
			This gives a 2-by-5 matrix between 100 and 0 of increments -11:
		</p>
		<p class="mat_text">
			D = 
			<br>
			&nbsp;&nbsp;&nbsp; 100 &nbsp;&nbsp; 89 &nbsp;&nbsp; 78 &nbsp;&nbsp; 67 &nbsp;&nbsp; 56
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp; 45 &nbsp;&nbsp; 34 &nbsp;&nbsp; 23 &nbsp;&nbsp; 12 &nbsp;&nbsp&nbsp; 1
			<br>
		</p>
		<div id="short">
			<p>
				When creating matrices, further shortcuts include
			</p>
			<div id="short1">
				<p>
					<br>
					The identity matrix:
				</p>
				<p class="mat_text">
					E = eye(3)
					<br><br>
					E = 
					<br>
					&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp; 0 &nbsp;&nbsp; 0
					<br>
					&nbsp;&nbsp;&nbsp; 0 &nbsp;&nbsp; 1 &nbsp;&nbsp; 0
					<br>
					&nbsp;&nbsp;&nbsp; 0 &nbsp;&nbsp; 0 &nbsp;&nbsp; 1
				</p>
			</div>
			<div id="short2">
				<p>
					<br>
					The zeroes matrix:
				</p>
				<p class="mat_text">
					F = zeroes(3)
					<br><br>
					F = 
					<br>
					&nbsp;&nbsp;&nbsp; 0 &nbsp;&nbsp; 0 &nbsp;&nbsp; 0
					<br>
					&nbsp;&nbsp;&nbsp; 0 &nbsp;&nbsp; 0 &nbsp;&nbsp; 0
					<br>
					&nbsp;&nbsp;&nbsp; 0 &nbsp;&nbsp; 0 &nbsp;&nbsp; 0
				</p>
			</div>
			<div id="short3">
				<p>
					<br>
					The ones matrix:
				</p>
					<p class="mat_text">
					G = ones(3)
					<br><br>
					G = 
					<br>
					&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp; 1 &nbsp;&nbsp; 1
					<br>
					&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp; 1 &nbsp;&nbsp; 1
					<br>
					&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp; 1 &nbsp;&nbsp; 1
					<br>
				</p>
			</div>
		</div>
	</div>
	<h2 class="headers">Indexing</h2>
	<div class="content">
		<p>
			Consider the matrix:
		</p>
		<p class="mat_text">
			A = [1, 2, 3; 4, 5, 6; 7, 8, 9];
		</p>
		<p>
			Written as:
		</p>
		<p class="mat_text">
			A = 
			<br>
			&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp; 2 &nbsp;&nbsp; 3
			<br>
			&nbsp;&nbsp;&nbsp; 4 &nbsp;&nbsp; 5 &nbsp;&nbsp; 6
			<br>
			&nbsp;&nbsp;&nbsp; 7 &nbsp;&nbsp; 8 &nbsp;&nbsp; 9
			<br>
		</p>
		<br>
		<p>
			1. <u>Selecting the element in row 2 and column 3</u>:
		</p>
		<p class="mat_text">
			<br>
			A(2,3)
		</p>
		<p>
			<br>
			Which returns:
		</p>
		<p class="mat_text">
			<br>
			ans = 
			<br>
			&nbsp;&nbsp;&nbsp; 6
		</p>
		<p>
			2. <u>Selecting the element in rows 1 to 2 and column 2 to 3</u>:
		</p>
		<p class="mat_text">
			<br>
			A(1:2,2:3)
		</p>
		<p>
			<br>
			Which returns:
		</p>
		<p class="mat_text">
			<br>
			ans = 
			<br>
			&nbsp;&nbsp;&nbsp; 2 &nbsp;&nbsp; 3 
			<br>
			&nbsp;&nbsp;&nbsp; 5 &nbsp;&nbsp; 6
		</p>
		<p>
			<br>
			3. <u>Selecting the first row</u>:
		</p>
		<p class="mat_text">
			<br>
			A(1,:)
		</p>
		<p>
			<br>
			Which returns:
		</p>
		<p class="mat_text">
			<br>
			ans = 
			<br>
			&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp; 2 &nbsp;&nbsp; 3
		</p>
		<p>
			<br>
			4. <u>Selecting the third column</u>:
		</p>
		<p class="mat_text">
			<br>
			A(:,3)
		</p>
		<p>
			<br>
			Which returns:
		</p>
		<p class="mat_text">
			<br>
			ans = 
			<br>
			&nbsp;&nbsp;&nbsp; 3
			<br>
			&nbsp;&nbsp;&nbsp; 6
			<br>
			&nbsp;&nbsp;&nbsp; 9
			<br>
		</p>
		<p>
			5. <u>Selecting the element of index '4'</u>:
			<br><br>
		</p>
		<p class="mat_text">
			<br>
			A(4)
		</p>
		<p>
			<br>
			Which returns:
		</p>
		<p class="mat_text">
			<br>
			ans = 
			<br>
			&nbsp;&nbsp;&nbsp; 2
		</p>
		<p>
			<br>
			N.B. MatLab indexes from 1 (not 0, unlike many other languages) and down each column. As such, in matrix A, the numbers 1, 4, 7 and 2 respectively have indices of 1, 2, 3 and 4. It is also possible of selecting multiple elements based on their indices using &nbsp;<span style="font-family: 'Courier New', Courier, monospace;">A(index_1, index_2, ..., index_n)</span>.
		</p>
		<br>
	</div>
</body>
</html>