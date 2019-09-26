<div id="background">
	<article>
		<h1>Using STAR CCM</h1>
		<h2> Creating and Editing Scenes </h2>
		<p> Scenes are graphics used to help the user visualise the geometry, mesh and the ‘solution’ variables. Scenes are a key feature of this program, and it is something you need to familiarise yourself with as it very useful to grasp what is being show.</p>
		<p>A Geometry scene is used to view the object, its regions and surfaces.</p>
		<p> A Mesh scene is used to see the surface and volume mesh. It is important to view the mesh to see its construction of a body and how accurately it represent an object. </p>
		<p> A Scalar scene displays fields of variables across the body. It helps visualise the distribution of fields such as pressure across a body.</p>
		<p>A Vector scene displays vector fields across the body.</p>
		<p>If you expand the scenes node on the main tree, you should see a list of other nodes (related to the scenes you have created) which lead to other sub-trees. If you expand one of those nodes, you should find a displayers sub-tree which is used to select the geometry (scalar and vector for scalar and vector scenes respectively) and its outline which are visible in the graphics pane. The part node in Geometry, Scalar and Vector allows you to select the objects visible in the scene. The part node in Outline can also represent the surface appearance.</p>
		<p> Another function of Scalar is that it also allows you to select the scalar field function and its presentation and Vector can similarly allow you to select the vector function and its appearance.</p>
		<p> The attributes sub-tree is used to customise the view in the graphics window, from changing the background colour to the scene lighting.</p>
		<br>
		<div class="row">
			<div class="col1"></div>
			<div class="col5">
				<img src="Images\STAR CCM\USE-1.png">
			</div>
			<div class="col5">
				<img src="Images\STAR CCM\USE-2.png">
			</div>
			<div class="col1"></div>
		</div>
		<br>
		<p>If you want to have a combined scene, for example, a scalar and vector scene in one you can right click on the displayers node and then hover over New Displayer to choose a scene you wish to add on the current one.</p>
		<img src="Images\STAR CCM\USE-3.png">

		<h2> Changing Views </h2>
		<h3> Changing Views (Object)</h3>
		<p>In the graphics window, you may want to rotate the view to be in line with the axis system or to have an isometric view of the object. In this case, the Save-Restore-Select views tool is very useful. As stated in its title, it can save and restore views that you want to re-use as well as select other projection views.</p>
		<img src="Images\STAR CCM\USE-4.png">
		<p>The icon for the tool is located in the toolbar, and looks like a camera with an arrow below it.</p>
		<p>The Projection Mode refers to the way in which the object is portrayed in the graphics window. In Parallel Projection, the object looks like ‘a technical drawing style’, whereas with Perspective Projection, the object looks ‘realistic’ as if you were looking at the object in real life.</p>
		<img src="Images\STAR CCM\USE-5.png">
		<p>Views correspond to a certain orientation of the object. The lines next to the view refer to the axis orientation and correspond to the X, Y and Z axes.</p>
		<img src="Images\STAR CCM\USE-6.png">
		<p>To rotate the object, click on the icon that looks like this. Each arrow corresponds to a rotation in that direction.</p>
		<img src="Images\STAR CCM\USE-7.png">
		<p>If you move the object a lot, and it is hard to retrieve its original view, then click on the reset view icon, and it will restore the view to its original state.</p>
		<img src="Images\STAR CCM\USE-8.png">
		<p>To zoom into a particular part of the object, you can use Rubberband Zoom. When using the tool, click on two points, which are the opposite diagonal points of a rectangle. The area in the rectangle, which will appear, will be zoomed in.</p>
		<img src="Images\STAR CCM\USE-9.png">
		<p>To go back to previous views, or return to a present view, the arrow keys can be used to do so.</p>
		<img src="Images\STAR CCM\USE-13.png"> <br>
		<img src="Images\STAR CCM\USE-14.png">
		<p>To see within the object or part, use the make scene transparent tool to do so. This shows the outline of the geometry but makes the colour of surface translucent so as to see through the object.</p>
		<img src="Images\STAR CCM\USE-15.png">
		<p>The Hide all meshes button hides the mesh from the scene.</p>
		<img src="Images\STAR CCM\USE-16.png">
		<br>
		<p> The following is a table showing some helpful keyboard shortcuts</p>
		<div class="glossary">
			<div class="row">
				<div class="col2">
					<h4>Key</h4>
					<br><br>
				</div>
				<div class="col2">
					<h4>Shortcut</h4>
				</div>
			</div>

<?php

$data=[
['term'=>'R','description'=>"reset the view"],
['term'=>'T','description'=>"top view"],
['term'=>'S','description'=>"side view"],
['term'=>'F','description'=>"front view"],
['term'=>'C','description'=>"flips the view of the body about the vertical axis"],
['term'=>'H','description'=>"fit the view"],
['term'=>'Shift + X','description'=>"rotate the view by 10 degrees about the x-axis (positive direction)"],
['term'=>'Shift + Y','description'=>"rotate the view by 10 degrees about the y-axis (positive direction)"],
['term'=>'Shift + Z','description'=>"rotate the view by 10 degrees about the z-axis (positive direction)"],
['term'=>'X','description'=>"rotate the view by 10 degrees about the x-axis (negative direction)"],
['term'=>'Y','description'=>"rotate the view by 10 degrees about the y-axis (negative direction)"],
['term'=>'Z','description'=>"rotate the view by 10 degrees about the z-axis (negative direction)"],
['term'=>'Shift + Left Mouse Button','description'=>"‘rolls’ the object about an axis"],
];

create_glossary($data);
?>

		</div>
		<br>
		

		<h3> Changing Views (Plots)</h3>
		<p>The Create/Open plots tool, as stated in its title, allows you to create new plots as well as open plots in the graphics window.</p>
		<img src="Images\STAR CCM\USE-20.png">
		<p>The Fit plot view rescales the plot to fit the whole graph in the scene. An example of its use is when you zoom into the graph significantly to see a specific value, and you want to return to see the overview of the graph.</p>
		<img src="Images\STAR CCM\USE-22.png">
		<p>Zoom selected plot is a tool used to zoom into the graph, it is useful if you want to focus on a certain area, since you may find mouse scroll imprecise. When using this tool, you can click on the area of interest and it will zoom into it. Or you can click, hold and drag to create an area where the scene will be zoomed into.</p>
		<p>Pan selected plot is a tool which when selected allows you to pan through the plot. To use this tool, hold the left mouse button, and then drag the mouse to the area of interest.</p>
		<img src="Images\STAR CCM\USE-26.png">


		<h2> How to Access the User Guide and Tutorial</h2>
		<p>This is a quick tutorial to show you how to open up the STAR CCM+ user guide and tutorial.</p>
		<img src="Images\STAR CCM\USE-29.png">
		<p>There are two ways to do it; through the program and through your file explorer. To do it through the program, you have to first click ‘Help’ on the menu bar and then tutorial guide.</p>
		<p>A window should then open up in your default browser. If it opens up in Internet explorer, the pop up shown below may block the content and all you have to do is click on allow blocked content and you’re there.</p>
		<p>Alternatively, you may choose to find a pdf of the user guide through the file explorer. The tutorial guide should be located here : C:\Program Files\CD-adapco\STAR-CCM+9.02.005-R8\doc\UserGuide_9.02</p>

	</article>
</div>