<div id="background">
<article>
<h1> Icon Index</h1>

<div class ="glossary">

	<div class ="row">
		<div class ="col1">
			<h4>Function</h4>
			<br>
			<br>
		</div>
		<div class ="col1">
			<h4>Icon</h4>
		</div>
		<div class ="col2">
			<h4>Description</h4>
		</div>
	</div>

<?php

$data=[
['function'=>'New Simulation', 'description'=>"Creates a new simulation"],
['function'=>'Load Simulation', 'description'=>"Opens an existing simulation"],
['function'=>'Save', 'description'=>"Saves all the simulations you have open"],
['function'=>'Copy', 'description'=>"Copies the object you selected to the clipboard"],
['function'=>'Paste', 'description'=>"Pastes the object you previously copied from the clipboard to the active area"],
['function'=>'Play Macro', 'description'=>"Plays your already existing macro"],
['function'=>'Start Recording', 'description'=>"Starts a recording a new macro you wish to create"],
['function'=>'Pause Recording', 'description'=>"Pauses the recording of the macro you are recording"],
['function'=>'Stop Recording', 'description'=>"Stops recording the macro"],
['function'=>'Import Surface', 'description'=>"Imports ‘surface data’ for generating a mesh. Basically imports an object from your cad software."],
['function'=>'Launch Surface Repair', 'description'=>"When you import an object to Star CCM+, it might not import perfectly and that would affect the mesh, so this tool can be used to fix that. It can also be used to create areas/surfaces of interest such as inlets and outlets."],
['function'=>'Clear Generated Meshes', 'description'=>"Clears all previously generated meshes in Star CCM+."],
['function'=>'Initialise Meshing', 'description'=>"Creates an initial surface mesh on the model"],
['function'=>'Generate Surface Mesh', 'description'=>"Starts generating a surface mesh"],
['function'=>'Generate Volume Mesh', 'description'=>"Starts generating a volume mesh"],
['function'=>'Initialise Solution', 'description'=>"Initialises the solution. During solution initialization, each model that is activated in the simulation is instructed to allocate storage for its solution data. The data is then set according to the specified initial values for the model."],
['function'=>'Step', 'description'=>"Carries out one complete iteration and then stops."],
['function'=>'Run', 'description'=>"Iterates until it fulfils the number of steps set by the user."],
['function'=>'Stop Iterating', 'description'=>"Stops iterating"],
['function'=>'Create or Open Scenes', 'description'=>"Allows you to create or open a scene of your choice."],
['function'=>'Reset View', 'description'=>"Restores the view to a zoom factor such that the model takes up most of the display."],
['function'=>'Rotate', 'description'=>"Rotates the view around a focal point that your most recent mouse click in the display sets."],
['function'=>'Rubberband Zoom', 'description'=>"Allows you to zoom to a specific area in the display by clicking two points that define the opposing corners of the zoomed area."],
['function'=>'Save-Restore-Select views', 'description'=>"Opens a drop-down menu that allows you to set, save or restore a view."],
['function'=>'Previous View', 'description'=>"Reverses the latest change to the view."],
['function'=>'Next View', 'description'=>"Repeats a change that was subjected to the Previous View command."],
['function'=>'Make Scene Transparent', 'description'=>"Makes all parts transparent so that you can see all of them from any angle, and overrides the opacity settings of all the displayers in the scene."],
['function'=>'Plane Section', 'description'=>"Allows you to create a plane section derived part, which is normal to the view, by clicking two points in the display."],
['function'=>'Measure Distance', 'description'=>"Allows you to measure a distance."],
['function'=>'Play or Pause animation in active scenes', 'description'=>"This toggles between playing the scene animation and pausing it."],
['function'=>'Stop Animation in Active Scene', 'description'=>"This stops the animation in the scene."],
['function'=>'Single Step Animation Backwards in Active Scene', 'description'=>"Goes backwards in the animation by 1 frame."],
['function'=>'Single Step Animation Forwards in Active Scene', 'description'=>"Goes forward in the animation by 1 frame."],
['function'=>'Write a movie of the animation in open scene', 'description'=>"Records the animation onto a video file."],
['function'=>'Rubberband select', 'description'=>"Selects a specific area in the display by clicking two points that define the opposing corners of the area. Press <Esc> to cancel."],
['function'=>'Zone select', 'description'=>"This lets you draw a zone by clicking and dragging to create a series of connected points. Objects within that zone are selected. Press <Esc> to cancel."],
['function'=>'Selection Filter', 'description'=>"Provides options for selecting volumes, surfaces, or curves with either the rubberband or zone tool"],
];

create_STAR_icon($data);


?>


</div>
</article>
</div>