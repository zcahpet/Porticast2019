<div id="background">
<article>
<h1> Drawing Glossary </h1>

<div class ="glossary">

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

$data = [
['term'=>'Angle Dimension', 'description'=>"Create an angle dimension between two selected geometries"],
['term'=>'Axis line', 'description'=>"Creates an axis line"],
['term'=>'Axis line and centre line', 'description'=>"Creates an axis line and centre line between two circles"],
['term'=>'Area fill creation', 'description'=>"Create an area fill i.e. hatched line fill in an enclosed area"],
['term'=>'Arrow', 'description'=>"Create a line with an arrow head"],
['term'=>'Chain Dimension', 'description'=>"Dimensions of features that are placed end to end instead of from a datum"],
['term'=>'Cumulate Dimension', 'description'=>"Unlike chain dimension, cumulated dimensions that cumulate from one features to another."],
['term'=>'Chamfered Dimension', 'description'=>"Create a dimension for a chamfer"],
['term'=>'Create Interruption', 'description'=>"To make a break in a dimension lines"],
['term'=>'Clipping View', 'description'=>"Create a circular clip view"],
['term'=>'Clipping View Profile', 'description'=>"Create a circular clip view of a specific profile"],
['term'=>'Centre line', 'description'=>"Create a centre line"],
['term'=>'Centre line with reference', 'description'=>"Create a centre line with reference to a element"],
['term'=>'Dimension', 'description'=>"Creates a dimension of a line or between two line"],
['term'=>'Diameter Dimension', 'description'=>"Creates a diameter dimension of a circle (arc)"],
['term'=>'Detail View', 'description'=>"Create a circular magnified view"],
['term'=>'Detail View Profile', 'description'=>"Create a magnified view of a specific profile shape"],
['term'=>'Front View', 'description'=>"Create Front View of the object"],
['term'=>'Generate Dimension', 'description'=>"Catia generates dimensions automatically"],
['term'=>'Generate Dimension step by step', 'description'=>"Auto Generation of dimension are shown step by step"],
['term'=>'New Sheet', 'description'=>"Create a new drawing sheet (on the same file)"],
['term'=>'Off-Set Section View', 'description'=>"Create a section view"],
['term'=>'Off-Set Section Cut', 'description'=>"Create a section cut"],
['term'=>'Projection View', 'description'=>"Create a projection view"],
['term'=>'Auxiliary View', 'description'=>"Create an auxiliary view"],
['term'=>'Radius Dimension', 'description'=>"Create a radius dimension of a circle (arc)"],
['term'=>'Re-route Dimension', 'description'=>"Re-route a selected dimension to another element"],
['term'=>'Remove Interruption', 'description'=>"Remove interruption created by create interruption"],
['term'=>'Roughness Symbol', 'description'=>"Creates a roughness symbol"],
['term'=>'Stake Dimension', 'description'=>"Dimensions multiple features that with respect to a datum"],
['term'=>'Thread Dimension', 'description'=>"Creates a dimension for a threaded hole"],
['term'=>'Text', 'description'=>"Create a text box"],
['term'=>'Text with Leader', 'description'=>"Create a text box with leader"],
['term'=>'Table', 'description'=>"Create a table"],
['term'=>'Thread', 'description'=>"Create a centre line in a threaded hole"],
['term'=>'Thread with Reference', 'description'=>"Create a centre line in a threaded hole with reference to an element"],
['term'=>'View Creation Wizard', 'description'=>"Customize auto generation of views"],
['term'=>'Welding Symbol', 'description'=>"Create a welding symbol"],
['term'=>'Weld', 'description'=>"Create a weld"],
];

create_glossary($data);

?>



</div>
</article>
</div>