<body>
	<div id="background">
		<article>
			<h1>Mirror Tool</h1>
			<p>
			<b>
				The Mirror tool is used to duplicate a feature/body along a plane of symmetry.
			</b>
				<br>
				<br>
				To perform this function, select the feature/body that needs to be duplicated:
				<br>
				<img class="tools_image" src="Tools/Tools_Images/Mirror/mirror_body.png">
				<br>
				Click on the Mirror icon:
				<br>
				<img class="tools_image" src="Tools/Tools_Images/Mirror/mirror_icon.gif">
				<br>
				Finally, select the Mirroring Element (plane of symmetry) that you wish to mirror it about and click OK:
				<br>
				<img class="tools_image" src="Tools/Tools_Images/Mirror/mirror_box.png">
				<br>
				It is also possible to mirror just a single feature or group of features of a PartBody rather than the whole thing. To do this, use the “Define In Work Object” option (explained here) to exclude the part that you do not want to mirror.
				<br>
				This has been done below by mirroring the PartBody whilst excluding the hole.
				<br>
				<img class="tools_image" src="Tools/Tools_Images/Mirror/mirror_result.png">
			</p>
	</article>
	</div>
</body>
</html>
<body>
	<div id="background">
		<article>
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
		
			<h2>The Tree</h2>
				<p>The tree is one of the most important and helpful features in CATIA. It stores all the information about the part you have created. So it is useful for detecting what tools you have used to create the part, and where, if any, issues lie in the part. Hence, it is important to label key features in your tree, because when working with large assemblies, the tree can become very large, making it harder to navigate. A large tree of an impeller in a casing is shown below:</p>
				<img src="Images\Catia\tree.png" width="280px">
			<h3>Deactivate Feature</h3>
				<p>In the tree you can deactivate features, this is used because you may want to try another feature on the part to see how it changes, or to ‘hide’ certain features to make it easier to see the whole part. To do this, right click on the feature on the tree, then find deactivate, it may be in a sub menu, accept the default options.</p>
				<img src="Images\Catia\deactiv.png" width="280px">
				<p>The feature will then have a sign appear on top of it in the tree, indicating it is deactivated.</p>
				<img src="Images\Catia\blades.png" width="280px">
				<p>The effect of deactivating the circular pattern is shown below.
				<br>
				From:</p>
				<img src="Images\Catia\before.png" width="280px">
				<p>To:</p>
				<img src="Images\Catia\after.png" width="280px">
				<p>To activate the feature, the same procedure applies and you will see the feature reappear on the part.</p>
				<img src="Images\Catia\activ.png" width="280px">
			<h3>Define In Work Object</h3>
				<p>If you have forgotten to add a feature that should have been created earlier in the build, you can use this tool to add the feature. This allows you to add new features to the tree, and allows you to make sure they don’t end up at the bottom of the tree since it may not be the best place for it. To use this tool, Right click on the feature in the tree you wish to be the “In Work Object”.</p>
				<img src="Images\Catia\inwork.png" width="280px">
				<p>The part build will return to this position.
				<br>
				From:</p>
				<img src="Images\Catia\before2.png" width="280px">
				<p>To:</p>
				<img src="Images\Catia\after2.png" width="280px">
				<p>Note the Defined In Work Object is underlined to show that it is the current feature in the build. Now you can create a new sketch or add new features to the part at this stage of the part build. The new features will appear in the tree at this stage of the build, not at the end. Finally, you can revert to the end of the part build to continue modelling. Either select the final feature in the CATIA tree and Define In Work Object, or do the same on the part body.</p>
				<img src="Images\Catia\final.png" width="280px">
		
			<h2>Main Tools</h2>
		
			<h2>Lost Toolbars</h2>
				<p>A common query among new CATIA users is how to restore lost toolbars. To do this you must first click on tools on the menu bar and select the “customise…” option.</p>
				<img src="Images\Catia\custom.png" width="280px">
				<p>Then switch to the “Toolbars” tab and click on “Restore all contents…” and “Restore position”. Close the dialog box and you’re all set!</p>
				<img src="Images\Catia\restore.png" width="280px">
	</article>
	</div>
</body>
</html>
