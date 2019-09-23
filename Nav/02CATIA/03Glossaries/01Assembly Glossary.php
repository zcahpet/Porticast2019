<div id="background">
<article>
<h1> Assembly Glossary </h1>

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
['term'=>'Active Component', 'description'=>"A certain component of the product that is the in work object i.e. currently being edited. The part name will be highlighted in the specification tree."],
['term'=>'Angle Constraint', 'description'=>"A constraint that defines the angle between 2 geometric elements."],
['term'=>'Bill of Material', 'description'=>"Data list about properties of components contained in the active component."],
['term'=>'Child Component', 'description'=>"Component derived from another component"],
['term'=>'Coincidence Constraint', 'description'=>"A constraint used to coincide 2 elements"],
['term'=>'Component', 'description'=>"A part in an assembly. It has characteristics about how it is integrated in an assembly."],
['term'=>'Constraint', 'description'=>"A geometrical or dimensional relation between geometric elements of components."],
['term'=>'Contact Constraint', 'description'=>"A constrain used to stick two surfaces together"],
['term'=>'Fixed Component', 'description'=>"A component with no degree of freedom - locked into its position and orientation."],
['term'=>'Leaf Component', 'description'=>"Last component at the end of each branch of the specification tree."],
['term'=>'Manipulation', 'description'=>"Freehand translation or rotation of a component using a mouse."],
['term'=>'Offset Constraint', 'description'=>"A constraint used to define the distance between 2 geometric elements."],
['term'=>'Parent Component', 'description'=>"A component from which child components are derived from."],
['term'=>'Part', 'description'=>"A 3D entity imported from Part Design."],
['term'=>'Product', 'description'=>"A 3D entity containing several components / parts, also know as an assembly"],
['term'=>'Reference', 'description'=>"Product or part with its own characteristics"],
['term'=>'Snap', 'description'=>"Projects a geometry element onto another one."],
['term'=>'Subassembly', 'description'=>"An assembly contained within another assembly."],
['term'=>'Update', 'description'=>"Bring up to date the assembly; will include any changes made to components and relationship between components."],
];

create_glossary($data);

?>



</div>
</article>
</div>