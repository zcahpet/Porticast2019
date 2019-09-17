<?php 

$title= "Wicklow Quiz";
?>

<div id="background">
<article>
	<h1> Quiz </h1>
	<input id="start" type="button" value="Go" onclick="start(questions);"> 
	<div id="TimedQuestion">
	<form id="Questions">
	</form>
	</div>
	<br>
	<input id="Finish" type="button" value = "Finito" onclick="finish(questions);">
	<input id="Reset" type="button" value = "Reset" onclick="reset()">
	
	<p id="TotalCorrect"></p>
	<p id="Time"></p>

</article>
</div>



</body>

</html>

<script> 
	var questions = [question1,question2,question3, question4];
	var question1 =["What can the Rock smell?","What he is cooking","Skunk","Nothing"];
	var question2 = ["How old am I?","Ancient","50","21"];
	var q3answers = ["Remove the battery","Loosen the chuck","Put the bit in the chuck","Tighten the chuck","Replace the battery","Check the bit is centred"];
	var question3 = ["How do you change the drill bit on a cordless drill?", q3answers];
	var question4=["What does the fox say?","Nothing", "Everything", "Hey there"];</script>

<script src="main.js">
</script>







