<div id="background">
<article>
<h1> Star CCM Glossary </h1>

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
['term'=>'Surface Remesher', 'description'=>"This function divides the mesh into lots of triangles, helping to improve the overall quality of an existing surface and optimising it for the mesh volume models (normally required for geometries that have been imported from CAD models or created in 3D-CAD)."],
['term'=>'Surface Wrapper', 'description'=>"Surface wrapping can help close holes, gaps and mismatches as well as simplifying the surface geometry by removing unwanted detail. Usually surface wrapping is used alongside surface remesher to provide a high quality starting surface for the volume meshers."],
['term'=>'Base Size', 'description'=>"The Base Size is a characteristic dimension of the model that you set before using any relative values."],
['term'=>'CAD Projection', 'description'=>"Allows you to turn on or off the Project to CAD option. Activating this option allows vertices to be projected back to the imported CAD surface at the end of the wrapping process, resulting in a surface definition closer to the original. By default, the Project to CAD property is activated."],
['term'=>'Number of Prism Layers', 'description'=>"The number of prism layers used for the boundaries. The prism layer mesh model is used with a core volume mesh to generate orthogonal prismatic cells next to wall surfaces or boundaries. This layer of cells is necessary to improve the accuracy of the flow solution."],
['term'=>'Prism Layer Stretching Geometric Progression', 'description'=>"When a geometric progression is used for the stretching function, the Stretch Factor is the ratio of the thickness of a cell layer to the thickness of the preceding layer.
<br> Default value is 1.5. Value between 1.2 and 1.5 recommended, although any value greater than or equal to 1 is valid."],
['term'=>'Prism Layer Stretching Hyperbolic Tangent', 'description'=>"When the stretching function is set to hyperbolic tangent, the stretch factor becomes a parameter that applies within the stretching function. The actual size ratio between cell layers is not a constant, but is determined by the distribution function.
<br> Default value is 0.5 within default controls and 1.5 within custom surface controls. Value between 2 and 5 recommended, although any value greater than 1 is valid."],
['term'=>'Prism Layer Thickness', 'description'=>"The Wall Thickness option sets the thickness of the layer that is immediately next to the wall boundary (called the near wall layer)."],
['term'=>'Surface Curvature', 'description'=>"Allows the specification of the number of triangles that are produced on curved surfaces."],
['term'=>'Basic Curvature', 'description'=>"Sets the initial number of points on a circular edge"],
['term'=>'Pts/circle value', 'description'=>"Increases the resultant triangulation in curved areas of the geometry."],
['term'=>'Surface Size', 'description'=>"This control determines the method by which the surface size is defined. For the surface wrapper and surface remesher, it determines the face and edge sizes. For the trimmed cell mesher, it determines the edge size of the cells next to the surface."],
['term'=>'Relative to base', 'description'=>"Specifies that the surface sizes are a percentage of the Base Size"],
['term'=>'Absolute Min and Target', 'description'=>"Specifies that the surface sizes are absolute values."],
['term'=>'Size Min and Target', 'description'=>"The mesher aims for face edges that meet the target size, regardless of the local face size of the input surface. Where there is mesh refinement, the face edges do not go below the minimum size."],
['term'=>'Size Min and Max', 'description'=>"The mesher aims for faces edges that meet current local triangle size of the input surface. Where the local triangle size exceeds the minimum or maximum size, the mesh is refined or coarsened. Where there is mesh refinement, the face edges do not go below the minimum size."],
['term'=>'Size Min only', 'description'=>"The mesher aims for faces edges that meet current local triangle size of the input surface. Where the local triangle size is less than the minimum size, the mesh is coarsened. Where there is mesh refinement, the face edges do not go below the minimum size."],
['term'=>'Advancing Layer Mesher', 'description'=>"The advancing layer mesher generates layers of prismatic cells around the surfaces of regions and fills the remaining void with polyhedral cells. This mesher first generates a polygonal surface mesh and then advances this mesh into the region volume to form cell layers. Some advantages of this approach are a conformal match on either side of an interface, and the ability to generate thicker and more uniform cell layers.
<br> The extent and characteristics of the near-wall cell layers are user-defined. In this respect, the advancing layer mesher is a stand-alone volume mesher — it is not the same as the prism layer model. For this reason, no other volume meshers are compulsory after selecting the advancing layer meshing model.
<br> The prismatic cell layers help capture the boundary layer, turbulence effects, and heat transfer near wall boundaries. Prismatic cell layers can also be projected on non-extrusion boundaries such as inlets, outlets, and symmetry planes. The polyhedral core mesh provides a balanced solution for meshing complex geometries and is relatively quick to generate. This approach makes the advancing layer mesher suitable for various applications."],
['term'=>'Polyhedral Mesher', 'description'=>"Polyhedral meshes provide a balanced solution for complex mesh generation problems.
<br> They are relatively easy and efficient to build, requiring no more surface preparation than the equivalent tetrahedral mesh. They also contain approximately five times fewer cells than a tetrahedral mesh for a given starting surface. Multi-region meshes with a conformal mesh interface are allowed.
<br> The polyhedral meshing model utilizes an arbitrary polyhedral cell shape in order to build the core mesh. In STAR-CCM+, a special dualization scheme is used to create the polyhedral mesh from an underlying tetrahedral mesh, which is automatically created as part of the process. The polyhedral cells that are created typically have an average of 14 cell faces."],
['term'=>'Tetrahedral Mesher', 'description'=>"Tetrahedral meshes provide an efficient and simple solution for complex mesh generation problems.
<br>Out of the three provided models, the tetrahedral is the fastest and uses the least amount of memory for a given number of cells. Multi-part or multi-region meshes with a conformal mesh interface are allowed.
<br>The tetrahedral meshing model utilizes the tetrahedral cell shape in order to build the core mesh. In STAR-CCM+, the Delaunay method is used to construct the mesh, which iteratively inserts points into the domain, forming high-quality tetrahedral in the process. The resulting mesh strictly conforms to the triangulation of the surface at the domain boundary, so the quality of the original surface mesh must be good to ensure a good quality volume mesh."],
['term'=>'Thin Mesher', 'description'=>"The thin meshers are used to generate a prismatic type volume mesh for thin regions. However, the prismatic type mesh is only produced in portions of the geometry that the mesher recognizes as thin. Thick or bulk portions of the same geometry are meshed with polyhedral cells.
<br>The different portions of mesh are joined continuously without abrupt changes in the mesh between the bulk and thin portions of the geometry.
<br> Select the Thin Mesher for geometries that have no other region surrounding them and are predominantly thin or have thin structures included in them. The Thin Mesher is used to generate a prismatic type mesh throughout the thin portions of the geometry instead of using other core volume meshers."],
['term'=>'Embedded Thin Mesher', 'description'=>"Select the Embedded Thin Mesher for geometries that are entirely contained within another region and are predominantly thin or have thin structures included in them."],
['term'=>'Trimmer Mesher', 'description'=>"The trimmed cell mesher provides a robust and efficient method of producing a high-quality grid for both simple and complex mesh generation problems.
<br> The trimmed cell mesher is available for both the Parts Based Meshing (PBM) and Region Based Meshing (RBM) approaches.
<br>By default, the trimmer meshing model utilizes a template mesh that is constructed from hexahedral cells from which it cuts or trims the core mesh using the starting input surface. The template mesh contains refinement that is based on the local surface mesh size and local refinement controls. Growth parameters can be used to control the transitioning of the mesh cell sizes from small to large both at the surface and far field. A maximum and/or minimum cell size can be supplied as well to control the upper and lower cell size bounds. The template can be aligned in any direction in a user specified cartesian coordinate system."],
['term'=>'Extruder Mesher', 'description'=>"The extruder meshing model, when activated and enabled for a specific boundary, performs an additional volume meshing step once the core mesh and, optionally, the prism layer mesh, has been generated.
<br>Based on supplied values for the number of layers, extrusion magnitude and stretching, the volume mesh is extruded from the specified boundary either in the normal or specified direction, extending the original domain."],
['term'=>'Prism Layer Mesher', 'description'=>"The prism layer mesh model is used with a core volume mesh to generate orthogonal prismatic cells next to wall surfaces or boundaries. This layer of cells is necessary to improve the accuracy of the flow solution."],
['term'=>'Generalised Cylinder Mesher', 'description'=>"The generalized cylinder mesher is used with the polyhedral volume mesher to generate an extruded mesh along the length of parts that are considered to be generalized cylinders.
<br>Using extruded prismatic cells reduces the overall cell count and improves the rate of convergence in some cases. In order to apply the generalized cylinder mesher, candidate cylinders must be defined in separate boundaries. A tool is provided with the mesher that can automatically detect which boundaries are suitable for generalized cylinder meshing, and the properties of the generalized cylinder model are set at the boundary level. The generalized cylinder mesher can be used with the prism layer mesher.
<br>The generalized cylinder mesher is best suited to cases where there are roughly cylindrical sections of geometry, and the direction of flow is parallel to the vessel wall, for example flow down pipes. Such cases can be solved more efficiently by using cells that are oriented to the direction of the fluid flow."],
['term'=>'Target Surface Size', 'description'=>"This value specifies the edge length that the mesher aims for in the absence of any mesh refinement. You can specify the target surface size as relative or absolute. Decreasing the target surface size generates more refined and detailed surface mesh. However, this refinement increases the CPU time and size of the surface mesh."],
['term'=>'Mesh Density', 'description'=>""],
['term'=>'', 'description'=>"When using the tetrahedral or polyhedral meshing models, a volume growth and/or density factor can be used to increase or decrease the mesh density, both globally and on a local basis. The Density value (1.0 by default) can be used to change the overall density of the mesh everywhere in the bulk volume. Increasing the value to say 2.0 would approximately double the number of cells that are generated while decreasing it to 0.5 would approximately halve the number of cells"],
['term'=>'Growth Factor', 'description'=>"The Growth Factor can be used to increase or decrease the mesh density of the core mesh by changing the rate at which cells grow from coarse to fine areas. In other words, it affects the grading of the mesh in a localised fashion where finer surface cells exist. Increasing the value above the default of 1.0 would mean that the cell size would grow faster, resulting in fewer cells. Conversely, decreasing the value below 1.0 would make the cell size grow more slowly, resulting in more cells being created."],
['term'=>'Tet/Poly Volume Bending (RBM)', 'description'=>"The global volume blending factor can be used to control the mesh density transition when volumetric controls overlap or are in close proximity to the surface mesh boundary or interface. This blending factor avoids sharp transitions in mesh density in these areas which could lead to numerical instability during the analysis."],
['term'=>'Blending Factor', 'description'=>"The default Blending Factor of 1.0 provides a reasonable transition in mesh density between the cell size that is used for the volumetric control and the surface mesh size. Decreasing the value (to say 0.5) provides a smoother transition by making the local mesh size closer to the boundary/interface surface meshing size. Such a value results in fewer cells in the core mesh (assuming that the volumetric control uses a cell size smaller than the boundary/interface triangle edge size). Increasing the value (to say 1.5) provides a sharper transition by making the local mesh size closer to the volumetric control mesh size. Such a value results in more cells in the core mesh (again assuming that the volumetric control uses a cell size smaller than the boundary/interface triangle edge size). Note that the volume blending factor has little or no effect on the core mesh if the volumetric control is far away from the surface boundaries. It can also be used to control the mesh density transition between two or more neighbouring or overlapping volumetric controls which use different cell sizes."],
['term'=>'Featured Angle', 'description'=>"Provides an angle setting for which feature curves are generated during the wrapping process. In general, pre-existing feature curves in the imported surface are ignored in preference to feature curves that are generated during the wrapping process. The only exception is when the feature curves are on a flat surface and define a surface detail of some kind (such as an imprint). Decreasing the Angle value increases the number of feature edges that the wrapping process generates."],
['term'=>'Wrapper Scale Factor', 'description'=>"This control scales all refinement sizes (for example, surface size and volumetric controls) by a common factor during the surface wrapping process. This facility allows you to generate a wrapped surface with different controls to the other meshers, so that you can generate a finer surface mesh without running the wrapper independently. It also allows quick and easy alteration of all the surface wrapper controls."],
['term'=>'Wrapper Scale Percentage', 'description'=>"Specifies the scale factor by which all surface wrapper controls are scaled. A higher or lower value results in a coarser or finer mesh respectively."],
['term'=>'Segregated Flow', 'description'=>"Segregated flow splits the velocity and pressure component and calculates them separately. It then is linked together with a predictor-corrector approach. This model is the most effective in constant-density flows. It can handle mildly compressible flows and low Rayleigh number natural convection, it isn’t suitable for shock-capturing, high Mach number, and high Rayleigh-number applications."],
['term'=>'Coupled Flow', 'description'=>"Coupled Flow model takes into account the conversation equations for mass, momentum and energy simultaneously using a pseudo-time-marching approach. Coupled flow model uses more CPU but gives more accurate results. Another advantage is that with coupled flow, the CPU time scales linearly with cell count, in other words the convergence rate does not deteriorate as the mesh is refined."],
['term'=>'K-epsilon Model', 'description'=>"A K-Epsilon turbulence model is a two-equation model in which transport equations are solved for the turbulent kinetic energy  and its dissipation rate."],
['term'=>'K-Omega Model', 'description'=>"The K-Omega model is a two-equation model that is an alternative to the K-Epsilon model. The transport equations that are solved are for the turbulent kinetic energy K and a quantity called ω, which is defined as the specific dissipation rate, that is, the dissipation rate per unit turbulent kinetic energy (ω-ɛ/k)."],
['term'=>'Turbulent Intensity', 'description'=>"Turbulence intensity is a measure of the root mean square of the local velocity fluctuations relative to the mean or reference velocity."],
['term'=>'Turbulent Velocity Scale', 'description'=>"This initial condition value is used for estimating the initial turbulent kinetic energy."],
['term'=>'Wall Law', 'description'=>"A wall law is a mathematical description of mean flow quantities, such as velocity, temperature and species concentration, in turbulent boundary layers."],

];

create_glossary($data);

?>



</div>
</article>
</div>