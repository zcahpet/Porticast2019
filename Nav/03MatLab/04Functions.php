<?php
$title= "Catia Getting Started";
?>


<body>
	<div id="background">
	<article>
		<h1>Functions</h1>
		<h2>If</h2>
		
			<br>
			<p>
				The If function is used to conditionally execute statements depen
				<br>
				They follow the format:
			</p>
			<p class="mat_text">
				<span style="color:blue;">if</span> (expression)
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; statement;
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
				y = 2;
				<br>
				<span style="color:blue;">if</span> (y > x)
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; fprintf(<span style="color: #DB06E5;">'y is greater than x'</span>);
				<br>
				<span style="color:blue;">end</span>
			</p>
			<br>
			<p>
				This gives a result in the command window of:
			</p>
			<p class="mat_text">
				y is greater than x
			</p>
			<br>
			<p>
				However, this does not account for the other possibilities. Indeed, if x was greater than y, the command window would not return anything. What if they were equal? Luckily, the if function accounts for that using the 'elseif' and 'else' statements. As such, our code can be modified to look like:
			</p>
			<br>
			<p class="mat_text">
				x = 1;
				<br>
				y = 2;
				<br>
				<span style="color:blue;">if</span> (y > x)
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; disp(<span style="color: #DB06E5;">'y is greater than x'</span>);
				<br>
				<span style="color:blue;">elseif</span> (x > y)
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; disp(<span style="color: #DB06E5;">'x is greater than y'</span>);
				<br>
				<span style="color:blue;">else</span> (y > x)
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; disp(<span style="color: #DB06E5;">'x and y are equal'</span>);
				<br>
				<span style="color:blue;">end</span>
			</p>
			<br>
			<p>
				Now, if the values of x or y are changed, the code will adapt to give an appropriate response to the new situation.
			</p>
		
		<br>
		<hr>
		<h2 >Switch</h2>
		
			<br>
			<p>
				The 'elseif' and 'else' statements are useful but can get a little bit messy when there are a lot of different cases. As such, it might be preferable to use the 'switch' function. 
				<br>
				It follows the format:
			</p>
			<p class="mat_text">
				<span style="color:blue;">switch</span> (variable)
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">case</span> situation_1;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; statement_1;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">case</span> situation_2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; statement_2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">otherwise</span>;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; statement_otherwise;
				<br>
				<span style="color:blue;">end</span>
			</p>
			<br>
			<p>
				Here we are using it in the following code to identify the degree of an expression:
			</p>
			<p class="mat_text">
				syms <span style="color: #DB06E5;">x y</span>;
				<br>
				y = x^2 + 3*x - 5;
				<br>
				z = feval(symengine, <span style="color: #DB06E5;">'degree'</span>, y);
				<br>
				n = int8(z);
				<br>
				<span style="color:blue;">switch</span> n
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">case</span> 0;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; disp(<span style="color: #DB06E5;">'The expression is a constant.'</span>);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">case</span> 1;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; disp(<span style="color: #DB06E5;">'The expression is linear.'</span>);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">case</span> 2;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; disp(<span style="color: #DB06E5;">'The expression is quadratic.'</span>);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">case</span> 3;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; disp(<span style="color: #DB06E5;">'The expression is cubic.'</span>);
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:blue;">otherwise</span>;
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; disp(<span style="color: #DB06E5;">'The expression has a higher degree.'</span>);
				<br>
				<span style="color:blue;">end</span>
			</p>
			<br>
			<p>
				This gives a result in the command window of:
			</p>
			<p class="mat_text">
				The expression is quadratic.
			</p>
			<br>
		
		<hr>
		<h2 >Creating Functions</h2>
		
			<br>
			<p>
				Sometimes, it might be useful to create a function as to avoid typing the same text over and over again. This makes the code more compact and easier to read. It is possible to define your own functions.
				<br>
				They follow the format:
			</p>
			<br>
			<p class="mat_text">
				<span style="color:blue;">function</span> output = name_of_the_function(input)
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; output = expression in terms of input;
				<br>
				<span style="color:blue;">end</span>
			</p>
			<br>
			<p>
				Here we are creating a function which adds 2 to the input and then divides that sum by said input:
			</p>
			<br>
				<p class="mat_text">
				<span style="color:blue;">function</span> y = my_function(x)
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; y = (x + 2) / x;
				<br>
				<span style="color:blue;">end</span>
			</p>
			<br>
			<p>
				It is important to note that files containing functions cannot contain any other code and their name needs to be the name of the function (here my_function). The created function can then be called from the command window of from other files. As such, typing &nbsp; <span style="font-family: 'Courier New', Courier, monospace;"> my_function(10) </span> &nbsp; into a new document returns: 
			</p>
			<br>
			<p class="mat_text">
				ans = 
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp; 1.2
			</p>
			<br>
		
	</article>
	</div>
</body>
</html>