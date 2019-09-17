<?php
$title= "Catia Getting Started";
?>


<body>
	<div id="background">
	<article>
		<h1>Matrices</h1>
		<h2>Matrix Operators</h2>
		
			<p>
				Consider the matrix:
			</p>
			<p class="mat_text">
				A = [1, 0, 5; 2, 1, 6; 3, 4, 0];
			</p>
			<p>
				Written as:
			</p>
			<p class="mat_text">
				A = 
				<br>
				&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp; 0 &nbsp;&nbsp; 5
				<br>
				&nbsp;&nbsp;&nbsp; 2 &nbsp;&nbsp; 1 &nbsp;&nbsp; 6
				<br>
				&nbsp;&nbsp;&nbsp; 3 &nbsp;&nbsp; 4 &nbsp;&nbsp; 0
			</p>
			<br>
			
				<p>
					There are many useful tool to manipulate matrices on Matlab. Some include:
				</p>

				<div class = "row">
				<div class="col6">
					<p>
						<br>
						<u>The inverse matrix</u>:
					</p>
					<p class="mat_text">
						B = inv(A)
						<br><br>
						E = 
						<br>
						&nbsp;&nbsp; -24 &nbsp;&nbsp; 20 &nbsp; -5
						<br>
						&nbsp;&nbsp;&nbsp; 18 &nbsp; -15 &nbsp;&nbsp; 4
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 5 &nbsp;&nbsp; -4 &nbsp;&nbsp; 1
					</p>
				</div>
				<div class="col6">
					<p>
						<br>
						<u>The transpose matrix</u>:
					</p>
					<p class="mat_text">
						C = A'
						<br><br>
						C = 
						<br>
						&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp; 2 &nbsp;&nbsp; 3
						<br>
						&nbsp;&nbsp;&nbsp; 0 &nbsp;&nbsp; 1 &nbsp;&nbsp; 4
						<br>
						&nbsp;&nbsp;&nbsp; 5 &nbsp;&nbsp; 6 &nbsp;&nbsp; 0
					</p>
				</div>
			</div>


			<div class="row">
				<div class="col6">
					<p>
						<br>
						<u>The determinant</u>:
					</p>
					<p class="mat_text">
						det(A)
						<br><br>
						ans = 
						<br>
						&nbsp;&nbsp;&nbsp; 1 
					</p>
				</div>
				<div class="col6">
					<p>
						<br>
						<u>The eigenvalues and eigenvectors</u>:
					</p>
					<p class="mat_text">
						[V, D] = eig(A)
						<br><br>
						V = 
						<br>
						&nbsp;&nbsp;&nbsp; -0.4529 &nbsp; -0.7899 &nbsp;&nbsp; -0.5484
						<br>
						&nbsp;&nbsp;&nbsp; -0.6883 &nbsp;&nbsp; 0.5914 &nbsp;&nbsp; -0.4820
						<br>
						&nbsp;&nbsp;&nbsp; -0.5667 &nbsp;&nbsp; 0.1621 &nbsp;&nbsp;&nbsp; 0.6833
						<br>
						D = 
						<br>
						&nbsp;&nbsp;&nbsp; 7.2560 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0 &nbsp;&nbsp; -0.0264 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0 &nbsp;&nbsp; -5.2297
					</p>
				</div>
			</div>
					<p>
						<br>
						Where V is the matrix of columnar eigenvectors and D is a diagonal matrix of eigenvalues corresponding to each eigenvector.
					</p>
					<br>
		<hr>
		<h2 >Matrix Calculations</h2>
		
			<p>
				Consider the following matrices
			</p>
			<p class="mat_text">
				A = [1, 2; 3, 4];
				<br>
				B = [5, 6; 7, 8];
				<br><br>
				A = 
				<br>
				&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp; 2 
				<br>
				&nbsp;&nbsp;&nbsp; 3 &nbsp;&nbsp; 4 
				<br><br>
					B = 
				<br>
				&nbsp;&nbsp;&nbsp; 5 &nbsp; 6
				<br>
				&nbsp;&nbsp;&nbsp; 7 &nbsp; 8
			</p>
			<div class="row">
				<div class="col6">
					<p>
						<br>
						<u>Addition</u>:
					</p>
					<p class="mat_text">
						A + B
						<br><br>
						ans = 
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 6 &nbsp;&nbsp; 8
						<br>
						&nbsp;&nbsp;&nbsp; 10 &nbsp; 23
						<br>
					</p>
				</div>
				<div class="col6">
					<p>
						<br>
						<u>Subtraction</u>:
					</p>
					<p class="mat_text">
						B - A
						<br><br>
						ans = 
						<br>
						&nbsp;&nbsp;&nbsp; 4 &nbsp;&nbsp; 4
						<br>
						&nbsp;&nbsp;&nbsp; 4 &nbsp;&nbsp; 4
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col6">
					<p>
						<br>
						<u>Multiplication</u>:
					</p>
					<p class="mat_text">
						A * B
						<br><br>
						ans = 
						<br>
						&nbsp;&nbsp;&nbsp; 19 &nbsp;&nbsp; 22
						<br>
						&nbsp;&nbsp;&nbsp; 43 &nbsp;&nbsp; 50
					</p>
				</div>
				<div class="col6">
					<p>
						<br>
						<u>Division</u>:
					</p>
					<p class="mat_text">
						B / A
						<br><br>
						ans = 
						<br>
						&nbsp;&nbsp;&nbsp; -1 &nbsp;&nbsp; 2
						<br>
						&nbsp;&nbsp;&nbsp; -2 &nbsp;&nbsp; 3
					</p>
				</div>
					<p>
						<br>
						N.B. As with normal matrix multiplication, A*B &#8800; B*A.
					</p>
					<br>
			</div>
			<div class="row">
				<div class="col6">
					<p>
						<br>
						<u>Element-Wise Multiplication</u>:
					</p>
					<p class="mat_text">
						A .* B
						<br><br>
						ans = 
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 5 &nbsp;&nbsp; 12
						<br>
						&nbsp;&nbsp;&nbsp; 21 &nbsp;&nbsp; 32
					</p>
				</div>
				<div class="col6">
					<p>
						<br>
						<u>Element-Wise Division</u>:
					</p>
					<p class="mat_text">
						B ./ A
						<br><br>
						ans = 
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 &nbsp;&nbsp; 3
						<br>
						&nbsp;&nbsp;&nbsp; 7/3 &nbsp;&nbsp; 2
					</p>
				</div>
			</div>
					<p>
						<br>
						The dot (.) means 'element-wise'. As such, the elements in the first matrix are multiplied or divided by the elements in the other matrix with the same indices and, therefore, the matrices need to be of similar size.
					</p>
					<br>
			
			<div class="row">
				<div class="col6">
					<p>
						<br>
						<u>Exponents</u>:
					</p>
					<p class="mat_text">
						A ^ 2
						<br><br>
						ans = 
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 7 &nbsp;&nbsp; 10
						<br>
						&nbsp;&nbsp;&nbsp; 15 &nbsp;&nbsp; 22
					</p>
				</div>
				<div class="col6">
					<p>
						<br>
						<u>Element-Wise Exponents</u>:
					</p>
					<p class="mat_text">
						A .^ 2
						<br><br>
						ans = 
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 1 &nbsp;&nbsp; 4
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 9 &nbsp; 16
					</p>
				</div>
			</div>
					<p>
						<br>
						In the first case, the matrix A is timed by itself. In the second case, each element is timed by itself individually. 
					</p>
					<br>
			
			<div class="row">
				<div class="col6">
					<p>
						<br>
						<u>Dot Product</u>:
					</p>
					<p class="mat_text">
						dot(A,B)
						<br><br>
						ans = 
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 26 &nbsp; 44
					</p>
				</div>
				<div class="col6">
					<p>
						<br>
						<u>Cross Product</u>:
					</p>
					<p>
						<span style="font-family: 'Courier New', Courier, monospace;">cross(A,B)</span>
						<br><br>
						(Only performable on matrices with 
						<br>
						at least one dimension of length 3.)
					</p>
				</div>
			</div>
					<p>
						<br>
						These are vectors operation and these matrices, as mentionned in 'Getting Started', are treated as collections of vectors.
					</p>
					<br>
		
		
	</article>	
	</div>
</body>
</html>