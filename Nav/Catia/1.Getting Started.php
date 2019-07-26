
<?php
$title= "Catia Getting Started";
require_once '../../headerTEST.php' ;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="..\..\Stylesheets\catStart_style.css">
</head>
<body>
	<div class="content">
		<h1>Getting Started</h1>
		<h2>Using the Mouse</h2>
		<h3>Panning</h3>
			<ol type="1">
 				<li>Hold down the scroll wheel</li>
  				<li>Move the mouse</li>
 				<li>The part should move</li>
			</ol>  
		<h3>Zooming</h3>
			<ol type="1">
 				<li>Hold down the scrool wheel</li>
  				<li>Click and release the left or right button on the mouse while holding the wheel down</li>
 				<li>Move the mouse up or down to zoom in or out</li>
			</ol>
		<h3>Rotating</h3>
			<ol type="1">
 				<li>Hold down the scrool wheel</li>
  				<li>Click and hold the left or right button on the mouse while holding the wheel down</li>
 				<li>Move to rotate around</li>
			</ol>
	</div>
	<div class="content">
		<h2>The Tree</h2>
			<p>The tree is one of the most important and helpful features in CATIA. It stores all the information about the part you have created. So it is useful for detecting what tools you have used to create the part, and where, if any, issues lie in the part. Hence, it is important to label key features in your tree, because when working with large assemblies, the tree can become very large, making it harder to navigate. A large tree of an impeller in a casing is shown below:</p>
			<img src="..\..\images\Catia\tree.png" class="pic">
		<h3>Deactivate Feature</h3>
			<p>In the tree you can deactivate features, this is used because you may want to try another feature on the part to see how it changes, or to ‘hide’ certain features to make it easier to see the whole part. To do this, right click on the feature on the tree, then find deactivate, it may be in a sub menu, accept the default options.</p>
			<img src="..\..\images\Catia\deactiv.png" class="pic">
			<p>The feature will then have a sign appear on top of it in the tree, indicating it is deactivated.</p>
			<img src="..\..\images\Catia\blades.png" class="pic">
			<p>The effect of deactivating the circular pattern is shown below.
			<br>
			From:</p>
			<img src="..\..\images\Catia\before.png" class="pic">
			<p>To:</p>
			<img src="..\..\images\Catia\after.png" class="pic">
			<p>To activate the feature, the same procedure applies and you will see the feature reappear on the part.</p>
			<img src="..\..\images\Catia\activ.png" class="pic">
		<h3>Define In Work Object</h3>
			<p>If you have forgotten to add a feature that should have been created earlier in the build, you can use this tool to add the feature. This allows you to add new features to the tree, and allows you to make sure they don’t end up at the bottom of the tree since it may not be the best place for it. To use this tool, Right click on the feature in the tree you wish to be the “In Work Object”.</p>
			<img src="..\..\images\Catia\inwork.png" class="pic">
			<p>The part build will return to this position.
			<br>
			From:</p>
			<img src="..\..\images\Catia\before2.png" class="pic">
			<p>To:</p>
			<img src="..\..\images\Catia\after2.png" class="pic">
			<p>Note the Defined In Work Object is underlined to show that it is the current feature in the build. Now you can create a new sketch or add new features to the part at this stage of the part build. The new features will appear in the tree at this stage of the build, not at the end. Finally, you can revert to the end of the part build to continue modelling. Either select the final feature in the CATIA tree and Define In Work Object, or do the same on the part body.</p>
			<img src="..\..\images\Catia\final.png" class="pic">
	</div>
	<div class="content">
		<h2>Main Tools</h2>
	</div>
	<div class="content">
		<h2>Lost Toolbars</h2>
			<p>A common query among new CATIA users is how to restore lost toolbars. To do this you must first click on tools on the menu bar and select the “customise…” option.</p>
			<img src="..\..\images\Catia\custom.png" class="pic">
			<p>Then switch to the “Toolbars” tab and click on “Restore all contents…” and “Restore position”. Close the dialog box and you’re all set!</p>
			<img src="..\..\images\Catia\restore.png" class="pic">
	</div>
</body>
</html>
