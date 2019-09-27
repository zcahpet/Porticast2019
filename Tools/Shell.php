<body>
	<div id="background">
		<article>
			<h1>Split Tool</h1>
			<p>
				The shell tool is in the “Dress-Up Feature” toolbar, and looks like this;
				<br>
				<img class="tools_image" src="Tools\Tools_Images\Shell\shell1.png" ;>
				<br>
				The shell tool effectively empties a 3D object and makes it a shell with a user defined thickness. A pre-requisite is a 3D padded solid, to which the shell tool can be applied. Create a similar part to this;
				<br>
				<img class="tools_image" src="Tools\Tools_Images\Shell\shell2.png" ;>
				<br>
				Once this is done, select the shell tool. A dialogue box will appear from which the thickness of the walls can be controlled and the faces that will be removed can also be selected.
				<br>
				<img class="tools_image" src="Tools\Tools_Images\Shell\shell3.png" ;>
				<br>
				Once you press ok, the shell will be created and will appear on the tree;
				<br>
				<img class="tools_image" src="Tools\Tools_Images\Shell\shell4.png" ;>
				<br>
				There are some issues that you could face with this tool on CATIA. If the thickness is larger than half the width of the object, then the shell will self-intersect and CATIA cannot cope with it. The shell will not be made, and a series of error messages will pop-up. Also, very complex geometries sometimes cause problems. You have been warned…
			</p>
	</article>
	</div>
</body>
</html>
