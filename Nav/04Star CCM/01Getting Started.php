<div id ="background">
	<article>
		<h1>Getting Started</h1>

		<h2>Saving CAD Parts as .stp or .igs Files</h2>
		<p>Depending on your Star CCM+ License, you may need to convert your CAD file to an STP or IGS file in order for it to be recognised.</p>
		<p>To do this CATIA, open up your CATIA model and go on File, then save as.</p>
		<img src="Images\STAR CCM\START-1.png" width="280px">
		<p>Then in the drop down menu, on ‘Save as type’, choose either STP or IGS. There aren’t specific advantages over importing STP or IGS models into STAR CCM+, but STP is normally preferred. Then click Save.</p>
		<img src="Images\STAR CCM\START-2.png" width="280px">

		<h2>Opening Star CCM+ and the Interface</h2>
		<p>This is a quick tutorial to show you how to open STAR CCM+ and explains the interface.</p>
		<p>You can either open STAR CCM+ through the start menu (the easy ways) or through your program files. To do it through the start menu, click on the windows button and either, search STAR CCM+ which should immediately bring up the program, or after having clicked on the start button, click on “All Programs” then “CD-adapco” and the program should show up again. You can alternatively search through your program files to find it by first going to “My Computer”/”Computer” and following the route shown below and double click on starccmw.</p>
		<img src="Images\STAR CCM\START-3.png" width="280px">
		<p>It may take some time to load so don’t open it more than once out of frustration if you find that it is stuck at the splash screen shown below for a while.</p>
		<img src="Images\STAR CCM\START-4.png" width="280px">
		<p>Now load up a simulation. The window to the very left is called the explorer pane. This is where you’ll find the tree and where you’ll be able to introduce new functions and change them. The window below it is the properties window and this is where you’ll be able to change values of your mesh, physics, initial conditions etc.</p>
		<p>To the top right you have the graphics window which is where you can generate scenes to see the object under examination, the mesh applied, residuals from the simulation, etc. Below it you will find the output window. This will display useful information such as the number of cells on your mesh, the number of iterations the simulation has gone through, the pressure drop, etc.</p>

		<h2> Using the Mouse </h2>
		<p>Zooming - Use scroll to zoom in and out </p>
		<p>Panning - Hold the right mouse button and drag while hodling</p>
		<p>Rotating - Hold the left mouse button and then drag while holding. The centre of rotation is the point where you firstly hold the right click at. </p>
		<img src="Images\STAR CCM\START-5.png" width="280px">

		<h2>The Tree</h2>
		<p>The tree is a vital tool to understand when using Star-CCM+. It is displayed in the explorer pane (the window on the top left). It’s key use is to help you set parameters of your simulation and create ways to record key data. Here is a table explaining the common nodes </p>
		<div class="glossary">
			<div class ="row">
				<div class ="col2">
					<h4>Term</h4>
					<br>
					<br>
				</div>
				<div class ="col2">
					<h4>Description</h4>
				</div>
			</div>

<?php

$data=[
['term'=>'Geometry','description'=>"The Geometry tree is where you can find and edit the models you have imported in for analysis."],
['term'=>'3D-CAD Models','description'=>"In this section, one can create 3D CAD parts which can be used within the simulation. This can consist of making a body to help with analyses, or even creating a bounding box to act as a domain."],
['term'=>'Parts','description'=>"This node is where all the parts that have been created and/or imported are located. It also provides an alternative (and more simplified) method of creating new parts."],
['term'=>'Descriptions','description'=>"Gives a list of all the parts in the object which can be split up or combined due to Boolean operations"],
['term'=>'Operations','description'=>"This node allows you to select a number of operations to carry out ranging from automated meshes to creating an imprint. It is best to experiment with these functions as they may prove to be very useful. Automated meshing can be very helpful when you’re confused about what mesh models to use."],
['term'=>'Continua','description'=>"The continua contains both the physics and mesh models that can be applied to one or more regions. Continua have no geometric definition associated with them."],
['term'=>'Mesh','description'=>"The mesh continuum is a selection of meshing models that are applied to a region. When mesh continuum is applied to a region, the region is discretized according to the models so that calculations can be run on them."],
['term'=>'Mesh Models','description'=>"Mesh models can be created in many different methods, note that different modelling methods are more suitable for different applications. Here you will find the models that have been selected for the simulation you are running."],
['term'=>'Mesh Reference Values','description'=>"After the modelling method is selected for the mesh, you can adjust the global mesh definition by changing the reference values of the parameters under this node."],
['term'=>'Mesh Volumetric Controls','description'=>"This function allows you to select a specific region where separate mesh conditions can be set."],
['term'=>'Physics','description'=>"A physics continuum contains the models used to simulate the flow of the chosen fluid (such as air, water, etc.)"],
['term'=>'Physics Models','description'=>"The physics in the simulation used for the fluid can be modelled and calculated differently depending on the purpose of the simulation. Under this node you will find the physics models used for the simulation."],
['term'=>'Physics Reference Values','description'=>"Depending on the models chosen, you can adjust the reference values of the fluid in order to recreate a real life situation. For example, if you were modelling a pipe under water, you might want to change the reference pressure from 1 atmosphere to the required pressure."],
['term'=>'Physics Initial Conditions','description'=>"Initial conditions of the fluid before the simulation can specified here."],
['term'=>'Regions','description'=>"Regions are volume domains (or areas in a two-dimensional case) in space that are completely surrounded by boundaries. They are not necessarily contiguous, and are discretized by a conformal mesh consisting of connected faces, cells and vertices.
<br> Regions are created either when a volume mesh is imported, or when a surface is imported without using geometry parts. Each region is given a unique name during the import process, but it can be renamed. One region is joined to another using an interface, so that information can be passed between them. Boundaries are not shared between regions. If more than one region have been assigned to a single object,  different mesh and physics conditions."],
['term'=>'Boundaries','description'=>"Boundaries are surfaces (or lines in a two-dimensional case) that completely surround and define a region. Each boundary has a corresponding node in the simulation tree, and has its own properties and pop-up menu."],
['term'=>'Feature Curves','description'=>"Feature curves can be automatically created for a given set of boundaries by marking edges using different criteria. Curves can be created for a single boundary or multiple boundaries simultaneously. Thereafter, further feature curves can be manually added or the original set can be edited so that the exact edge curve definition is obtained."],
['term'=>'Mesh Conditions','description'=>"This is where the mesh conditions for different regions can be changed to suit the needs of the simulation. This can be useful when a shape is simple in one area and doesn’t need that many cells but complex in other parts where the mesh needs to be especially refined."],
['term'=>'Physics Conditions','description'=>"Similarly to ‘Mesh Conditions’ different physics conditions can be selected for different regions of the object."],
['term'=>'Physics Values','description'=>"Allows the user to set some of the physical values of the system for example, velocity."],
['term'=>'Derived Parts','description'=>"A derived part is used to analyse the data. You can derive a plane, streamlines, probes, etc. depending on the analysis needed."],
['term'=>'Solver','description'=>"Gives the user a choice of how they wish the iterator to solve."],
['term'=>'Stopping Criteria','description'=>"This is the criteria specified before the simulation is stopped automatically."],
['term'=>'Maximum Steps','description'=>"The maximum amount of iterations until the simulation comes to an automatic stop."],
['term'=>'Stop File','description'=>"The Stop File criterion allows you to specify the pathname of a file (named ABORT by default) that, once in place, causes the solver to stop. This action can be useful for stopping a batch job, for example."],
['term'=>'Solution Histories','description'=>"History of your previous solutions."],
['term'=>'Solution Views','description'=>"Allows you to view details of the solution such as how much time it takes, the time step and the number of iterations."],
['term'=>'Reports','description'=>"To monitor an aspect of the simulation, for example drag, you will need to set up a report for the drag so that STAR CCM+ can monitor it. Under the reports folder you will find all the reports that have been created for the simulation."],
['term'=>'Monitors','description'=>"This provides methods of monitoring your solution."],
['term'=>'Plots','description'=>"Monitors log and plot the results of the aspects that are being measured from the reports"],
['term'=>'Scenes','description'=>"Scenes creates a visualisation in a specific style. A Geometry Scene displays the geometric model, a mesh scene displays the mesh model, etc."],
['term'=>'Representations','description'=>"Representations help you keep track of the surface and volume meshes that STAR-CCM+ uses as part of the meshing and simulation setup process. Several different representations are available."],
['term'=>'Tools','description'=>"Contains a variety of functions which can improve the accuracy and presentation of the simulation."],
];

create_glossary($data);
?>

		</div>



	</article>
</div>