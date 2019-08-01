var quizTime = {};

function check(){

	var score=0;
	var answers = ["Crack the eggs","Beat the eggs","Cook the eggs"];

	for (var i=0; i<3; i++){
		var num = i+1
		if (document.getElementById("Step"+num).value==answers[i]){
			score++
		}

	}
	


	document.getElementById("TotalCorrect").style.visibility = "visible";
	document.getElementById("TotalCorrect").innerHTML = "You got "+score+" correct."
	var e = new Date();
	quizTime.end = e;
	var timetaken =(quizTime.end - quizTime.start)/1000 ;
	document.getElementById("demo").style.visibility = "visible";
	if (timetaken>60){
		var seconds = timetaken%60;
		var minutes = (timetaken - seconds)/60;
		document.getElementById("demo").innerHTML = "You took " + minutes.toString() +" minutes " + seconds.toFixed(2) + " seconds.";
	} else {
		document.getElementById("demo").innerHTML = "You took " + timetaken.toString() + " seconds.";
	}
	document.getElementById("Finish").style.visibility="hidden";
	document.getElementById("Reset").style.visibility="visible";
}


function go(){
	//Start timing quiz
	var d = new Date();
	quizTime.start =d;

	//Show quiz and finish button
	document.getElementById("TimedQuestion").style.visibility = "visible";
	document.getElementById("Finish").style.visibility="visible";

	//Hide the start button
	document.getElementById("start").style.visibility="hidden";
	
	//Create the answers array and then used function to generate the quiz
	var answers = ["Crack the eggs","Beat the eggs","Cook the eggs"];
	steppedQ(answers);
}


function steppedQ (answersArray){
	for (var i=1 ; i<=answersArray.length; i++){
		//Randomise the order of the answers
		shuffle(answersArray);

		//Create the Step Title
		var title =document.createElement("h2");
		var step = "Step"+i
		var tText = document.createTextNode(step);
		title.appendChild(tText);
		document.getElementById("Questions").appendChild(title);

		//Creating the form required to form the dropdown for the options
		var select =document.createElement("select");
		select.setAttribute("name",step);
		select.setAttribute("id",step);
		document.getElementById("Questions").appendChild(select);

		//Creating an initial empty choice
		var blank =document.createElement("option");
		document.getElementById(step).appendChild(blank);
		
		//Looping through the answers randomly to create the dropdown options
		for (var j=0;j< answersArray.length;j++){
			//Creating the option
			var choice =document.createElement("option");
			choice.setAttribute = ("value",answersArray[j]);
			var answer = document.createTextNode(answersArray[j]);
			choice.appendChild(answer);
			document.getElementById(step).appendChild(choice);

		}	
	}
}



function reset(){
	document.getElementById("TimedQuestion").style.visibility = "hidden";
	document.getElementById("demo").style.visibility = "hidden";
	document.getElementById("TotalCorrect").style.visibility = "hidden";
	document.getElementById("demo").innerHTML = "";
	document.getElementById("TotalCorrect").innerHTML = "";
	document.getElementById("Reset").style.visibility="hidden";
	document.getElementById("start").style.visibility="visible";
	document.getElementById("Questions").innerHTML= "";
}


function shuffle(array){
	var currentIndex = array.length, temporaryValue, randomIndex;

	while (0!==currentIndex){
		randomIndex= Math.floor(Math.random()*currentIndex);
		currentIndex -= 1;

		temporaryValue= array[currentIndex];
		array[currentIndex]=array[randomIndex];
		array[randomIndex]=temporaryValue;
	}

	return array;

}


