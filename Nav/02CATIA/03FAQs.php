<?php
$title= "Catia FAQs";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Stylesheets\catFaq_style.css">
	<script type="text/javascript" src="Scripts\catFaq_script.js">
	</script>
</head>
<body onload="collapse()">
	<div id="main">
		<h1>FAQs</h1>
		<div id="2D">
			<h3>2D</h3>
			<button class="collapsible" >
				How can I turn off the snap to 	grid function? <br>
			</button>
			<div class="content">
	  			<p>For the line, circle and points, they will snap to grid if the snap-to-grid icon is turned on. Unclicking it will allow them to move freely around the drawing. As for the textbox, the snap to grid option can be turned off by hitting shift. Alternatively you can disable it at option>mechanical design>drafting. Click on the “annotation and Dress-up” tab and unclick snap by default to disable it permanently.</p>
			</div>
			<button class="collapsible" >
				How do I control size of the geometry I created? <br>
			</button>
			<div class="content">
	  			<p>Use a dimension on the geometry, double click on the dimension line and click drive geometry to control the length/radius.</p>
			</div>
			<button class="collapsible" >
				How can I move my value on the dimension line?  <br>
			</button>
			<div class="content">
	  			<p>Go to option>Mechanical Design>Drafting and click on the Manipulator tab. Click on the modification box for move value.</p>
			</div>
			<button class="collapsible" >
				My drawing is no longer linked to my 3D model. What should I do? <br>
			</button>
			<div class="content">
	  			<p>Go to Files>Desk. On this view, right click on the broken link and then click find to locate your 3D CATPart</p>
			</div>
			<button class="collapsible" >
				Why can’t I edit a view that I want to work on? <br>
			</button>
			<div class="content">
	  			<p>The view that you would like to work on is not selected; make sure the view frame is double clicked.  The frame will be red if it is selected.</p>
			</div>
			<button class="collapsible" >
				Why do my lines, points and circles move away with another view that it is not associated with? <br>
			</button>
			<div class="content">
	  			<p>The lines, points and circles are created in another frame. View is selected before any profile is created.</p>
			</div>
			<button class="collapsible" >
				Why is my dimension line coloured? <br>
			</button>
			<div class="content">
	  			<p>The dimension line is coloured due to issues on the drawing or 3D model. You check on Tools>Options>Mechanical Design>Drafting, choose the Dimension tab and scroll all the way down to click the TYPES AND COLORS button. This will tell you what all the colors mean.</p>
			</div>
			<button class="collapsible" >
				Why can’t my line, point or circle snapped onto my drawings?
			</button>
			<div class="content">
	  			<p>This is because the views are not selected.</p>
			</div>
		</div>
		<div id="3D">
			<h3>3D</h3>
			<button class="collapsible" >
				Can I use other file types in CATIA? <br>
			</button>
			<div class="content">
	  			<p>Yes, there a few other file types that CATIA can open. These include .stl .stp .step .dxf . You also have to make sure that you have the right permissions to use these files as you may find that without a correct license the file will not appear.</p>
			</div>
			<button class="collapsible" >
				Why is the tree moving with my mouse instead of the part? <br>
			</button>
			<div class="content">
	  			<p>You will see this issue immediately, since the part will fade to grey. This happens because you may have clicked on the white stem of the tree by accident. So CATIA thinks that you are trying to adjust the tree rather than the part. To fix this, click on the white part of the tree to restore part control.</p>
			</div>
			<button class="collapsible" >			Can I download parts off the internet? <br>
			</button>
			<div class="content">
	  			<p>There are many sites that allow you to download 3D models from their database. Most of the time you will have to sign up in order to do so, but they are usually free services. Communal database sites such as GrabCAD are very useful for experimenting, but it is also worth noting that manufacturer websites such as SKF provide a catalogue from which you can download models to use in CATIA. This can be very useful when creating assemblies in which you need a bearing etc.<br>
				It goes without saying, make sure you credit any downloaded models in your work!</p>
			</div>
			<button class="collapsible" >
				Can I render in CATIA? <br>
			</button>
			<div class="content">
	  			<p>Yes, rendering can be done in CATIA. There is a tool which resembles a camera which can be used to quickly render any part or assembly that you are working on. In order to achieve the best results you may wish to apply a material to your part.</p>
			</div>
			<button class="collapsible" >
				Can I use CATIA without a mouse? <br>
			</button>
			<div class="content">
	  			<p>Yes, you can still drive the software without a mouse but it is much more efficient to use one. It will improve your workflow tremendously and so it is well worth investing in a mouse.</p>
			</div>
			<button class="collapsible" >
				Can I add to an existing part? <br>
			</button>
			<div class="content">
	  			<p>You can add to a sketch which you have previously created without too much trouble; simply go to the sketch in the tree and double click it. As long as your addition does not affect other aspects of the part, you should be ok. If there are other sketches reliant on the sketch you wish to alter, be sure to alter their constraints appropriately.</p>
			</div>
			<button class="collapsible" >
				How do I reset the compass? <br>
			</button>
			<div class="content">
	  			<p>This is an easy fix; select the view tab and then select reset compass. Simple!</p>
			</div>
			<button class="collapsible" >
				How can I see my sketches? <br>
			</button>
			<div class="content">
	  			<p>There is a single button that can quickly toggle between your part and the sketches that you made in the creation of that part. It can be found in the view toolbar and is labelled as “swap visible space”.</p>
			</div>
			<button class="collapsible" >
				How do I apply a material to my part? <br>
			</button>
			<div class="content">
	  			<p>There is a specific toolbar just for this. Simply click it and choose from a list of presets that CATIA has to offer, or alternatively enter your own properties to create a specific material.
	  				<!--<img src="p.png">-->
	  			</p>
			</div>
			<button class="collapsible" >
				How do I snap the compass to an object? <br>
			</button>
			<div class="content">
	  			<p>Simply drag the compass by the red block on to the face that you wish and it will snap on to it automatically. To remove it, reset the compass.
	  				<!--<img src="p.png">-->
	  			</p>
			</div>
			<button class="collapsible" >
				How do I import parts into an assembly? <br>
			</button>
			<div class="content">
	  			<p>There are two ways to do this. If you already have the part open in a separate window you can drag the part from its tree on to the assembly tree. Alternatively go to the insert tab and then click “insert part”.</p>
			</div>
			<button class="collapsible" >
				How do I retrieve parts from an assembly? <br>
			</button>
			<div class="content">
	  			<p>Go on to the assembly tree and right click on the part that you wish to open separately. You should see an extendable panel that says the part name followed by the word “object”. Select this and then use the “Open in New Window” option.
	  				<img src="p.png">
	  			</p>
			</div>
			<button class="collapsible" >
				How do I check the mass my part/assembly? <br>
			</button>
			<div class="content">
	  			<p>The measure tool can be used to do this, whilst also producing values for things such as axial moments of inertia. Before you can do this, you need to apply a material to the part/assembly.
					<img src="p.png">
				</p>
			</div>
			<button class="collapsible" >
				How do I show parameters and values? <br>
			</button>
			<div class="content">
	  			<p>Go to the tools tab and select options. From there go to the “Parameters and Measure” option in the tree menu on the left, and make sure the tree view options are checked.
					<img src="p.png">
				</p>
			</div>
			<button class="collapsible" >
				How do I turn the snap grid on and off in CATIA sketch mode? <br>
			</button>
			<div class="content">
	  			<p>There is a toolbar called sketch tools. If not already displayed, this can be found in the view tab under toolbars. There are two options available; grid and snap to point. These can be toggled on and off simply by clicking them.
	  				<img src="p.png">
	  			</p>
			</div>
			<button class="collapsible" >
				My part tree has disappeared? <br>
			</button>
			<div class="content">
	  			<p>You could have accidentally hit the F3 key. You can use this key to toggle the visibility of the part tree so press it again, or alternatively go to the view tab, and make sure specifications is ticked.
	  				<img src="p.png">
	  			</p>
			</div>
			<button class="collapsible" >
				My part has been greyed out? <br>
			</button>
			<div class="content">
	  			<p>You may have clicked on the tree stem; this causes your part to be deactivated or ‘greyed out’. Simply click on the tree stem again to reactivate your part.
					<img src="p.png">
				</p>
			</div>
			<button class="collapsible" >
				Should I use a pocket or a hole? <br>
			</button>
			<div class="content">
	  			<p>It depends on your application. Visually they will both yield the same result, but a hole will mostly be used when you wish to add a thread. If your purpose is to simply remove material, then a pocket should be used.</p>
			</div>
			<button class="collapsible" >
				Where can I find my toolbars? <br>
			</button>
			<div class="content">
	  			<p>There are so many tools on CATIA that it can become very hectic and hard to find the one you need at times. It may be that there are too many toolbars on one of the side panels which is causing a few others to be hidden. Try moving around individual tools to different areas of the sidebars. However, it could be that the tool itself is not being displayed. To check this, go to the view tab, then toolbars. If the one you want to use is not ticked, then tick it. It is worth noting that a little time spent working on your workbench can help massively with your workflow and use of CATIA, so try to arrange the tools in an order that works for you.
	  				<img src="p.png">
	  			</p>
			</div>
			<button class="collapsible" >
				Where has my axis system gone? <br>
			</button>
			<div class="content">
	  			<p>You may see that as well as disappearing, your axis system is greyed out in the tree. Right click it and you will see an option for hide/show. Toggle this and your axis system should reappear.
	  				<img src="p.png">
	  			</p>
			</div>
			<button class="collapsible" >
				Why is my constraint purple? <br>
			</button>
			<div class="content">
	  			<p>Whilst it is very important to constrain a sketch fully, you have to be careful not to over-constrain it. If you do, the constraint will appear in purple. This is not a problem; it just means that the constraint used is not necessary. Delete it and continue as normal.
	  				<img src="p.png">
	  			</p>
			</div>
		</div>
	</div>
</body>
</html>