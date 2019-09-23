<div id="background">
<article>
<h1> Part Design Glossary </h1>

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
['term'=>'Body', 'description'=>"Inserts new body into the part, as seen on the tree."],
['term'=>'Chamfer', 'description'=>"Creates a slope edge/chamfer feature to the selected edges of the part."],
['term'=>'Constraint', 'description'=>"Creates a geometric or dimension relation between two or more profiles. These relationships are a restriction to the profile."],
['term'=>'Deactivate', 'description'=>"To deactivate the behavior of a feature, visually and geometrically."],
['term'=>'Draft Angle', 'description'=>"A feature provided with a face with an angle by adding or removing material from the product."],
['term'=>'Edge Filler', 'description'=>"Rounding of an interior or exterior corner of the part"],
['term'=>'Groove', 'description'=>"A feature which will cut a specific shape out of the part; this is done by revolving a profile about an axis, which will relate to the material to be removed from the part."],
['term'=>'Hole', 'description'=>"A feature corresponding to an opening through a feature. Holes can be simple, tapered, counterbored, countersunk or counterdrilled."],
['term'=>'Mirror', 'description'=>"A feature created by duplicating a part with a respect to a plane. The duplication is defined by symmetry."],
['term'=>'Pad', 'description'=>"A feature created by extruding a profile."],
['term'=>'Part', 'description'=>"A 3D entity obtained by combining different features."],
['term'=>'Part Body', 'description'=>"A component of a part made of a combination of several features. i.e. comprises of a number of parts."],
['term'=>'Pattern', 'description'=>"A set of similar features repeated in the same part."],
['term'=>'Pocket', 'description'=>"A feature corresponding to an opening through a feature. The shape of the opening is controlled by the 2D sketch/profile that is created by the user."],
['term'=>'Profile', 'description'=>"A closed shape including arcs and lines created by the profile command in sketch."],
['term'=>'Reorder', 'description'=>"An operation that allows rearrangement of creations in the tree to allow a more organised structure."],
['term'=>'Rib', 'description'=>"Creates a rib by sweeping a user-created profile along a center curve."],
['term'=>'Scaling', 'description'=>"Resizes a feature to a percentage of their initial size."],
['term'=>'Shaft', 'description'=>"Creates a 3D body by revolving a sketch about an axis."],
['term'=>'Shell', 'description'=>"Creates a shell out of an existing 3D part by specifying one or more thicknesses."],
['term'=>'Sketch', 'description'=>"Creates a 2D profile on a plane or the surface of an object."],
['term'=>'Slot', 'description'=>"A feature consisting of a passage through a part obtained by sweeping a user defined profile along a center curve."],
['term'=>'Split', 'description'=>"Divides a body into different parts by using a plane or face."],
['term'=>'Stiffener', 'description'=>"A feature used for reinforcing a part body by adding material in between two parts."],
];

create_glossary($data);

?>



</div>
</article>
</div>