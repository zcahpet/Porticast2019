/*function check(){

	//Setting a new variable to count the score
	var score=0;

	//Setting the answers array
	var answers = ["Ensure battery is removed","Loosen the chuck","Place bit in chuck","Tighten the chuck","Replace the battery","Check if bit is centred"];
	

	//Comparing answers
	for (var i=0; i<answers.length; i++){
		var num = i+1
		if (document.getElementById("Step"+num).value==answers[i]){
			score++
		}

	}
	
	//Revealing how many were correct
	document.getElementById("TotalCorrect").style.visibility = "visible";
	document.getElementById("TotalCorrect").innerHTML = "You got "+score+" correct."

	//Calculating time taken
	var e = new Date();
	quizTime.end = e;
	var timetaken =(quizTime.end - quizTime.start)/1000 ;
	document.getElementById("Time").style.visibility = "visible";
	
	//If else statement in case the quiz takes longer than a minute
	if (timetaken>60){
		var seconds = timetaken%60;
		var minutes = (timetaken - seconds)/60;
		document.getElementById("Time").innerHTML = "You took " + minutes.toString() +" minutes " + seconds.toFixed(2) + " seconds.";
	} else {
		document.getElementById("Time").innerHTML = "You took " + timetaken.toString() + " seconds.";
	}

	//Hiding the finish button and showing the reset button
	document.getElementById("Finish").style.visibility="hidden";
	document.getElementById("Reset").style.visibility="visible";
}*/





//Creating an empty variable in order to time the quiz 
var quizTime = {};
var questions = [question1,question2,question3, question4];
var question1 =["What can the Rock smell?","What he is cooking","Skunk","Nothing"];
var question2 = ["How old am I?","Ancient","50","21"];
var q3answers = ["Remove the battery","Loosen the chuck","Put the bit in the chuck","Tighten the chuck","Replace the battery","Check the bit is centred"];
var question3 = ["How do you change the drill bit on a cordless drill?", q3answers];

var question4=["What does the fox say?","Nothing", "Everything", "Hey there"];



/*//Function which launches the quiz
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
	var answers = ["Ensure battery is removed","Loosen the chuck","Place bit in chuck","Tighten the chuck","Replace the battery","Check if bit is centred"];
	steppedQ(answers);
}*/


// Function used to reset the quiz questions
function reset(){
	// Hides the questions
	document.getElementById("TimedQuestion").style.visibility = "hidden";

	//Resets and hides the Time
	document.getElementById("Time").style.visibility = "hidden";
	document.getElementById("Time").innerHTML = "";

	//Resets and hides the statement saying how many correct
	document.getElementById("TotalCorrect").style.visibility = "hidden";
	document.getElementById("TotalCorrect").innerHTML = "";

	//Hides reset button and shows start button 
	document.getElementById("Reset").style.visibility="hidden";
	document.getElementById("start").style.visibility="visible";

	//Clears the answers
	document.getElementById("Questions").innerHTML= "";
}


//Function which is used to randomly sort an array
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






//Function which launches the quiz
function start(questionsArray){
	//Start timing quiz
	var d = new Date();
	quizTime.start =d;

	//Show quiz and finish button
	document.getElementById("TimedQuestion").style.visibility = "visible";
	document.getElementById("Finish").style.visibility="visible";

	//Hide the start button
	document.getElementById("start").style.visibility="hidden";

	
	
	for (var i=0; i < questionsArray.length; i++){
		var questionArray = questionsArray[i];
		if (questionArray[1].constructor===Array){
			steppedQ(questionArray,i);

		} else {
			normalQ(questionArray,i);
		}
	}
}



function finish(questionsArray){

	 //Setting a new variable to count the score
	var score=0;

	//Comparing answers
	for (var i=0; i<questionsArray.length; i++){
		var questionArray = questionsArray[i];
		if (questionArray[1].constructor===Array){
			var answersArray = questionArray[1];
			


			for (var j=0; j<answersArray.length;j++){
				if(document.getElementById("Question"+i).getElementsByClassName("Stepped")[j].value==answersArray[j]){
					score++
				} 
			}

		} else {
			if(document.getElementById("Question"+i).value==questionArray[1]){
				score ++
			}
		}
	}



	//Revealing how many were correct
	document.getElementById("TotalCorrect").style.visibility = "visible";
	document.getElementById("TotalCorrect").innerHTML = "You got "+score+" correct."

	
	//Calculating time taken
	var e = new Date();
	quizTime.end = e;
	var timetaken =(quizTime.end - quizTime.start)/1000 ;
	document.getElementById("Time").style.visibility = "visible";
	
	//If else statement in case the quiz takes longer than a minute
	if (timetaken>60){
		var seconds = timetaken%60;
		var minutes = (timetaken - seconds)/60;
		document.getElementById("Time").innerHTML = "You took " + minutes.toString() +" minutes " + seconds.toFixed(2) + " seconds.";
	} else {
		document.getElementById("Time").innerHTML = "You took " + timetaken.toString() + " seconds.";
	}

	//Hiding the finish button and showing the reset button
	document.getElementById("Finish").style.visibility="hidden";
	document.getElementById("Reset").style.visibility="visible";

}






function normalQ (questionArray, qNumber){
	document.getElementById("TimedQuestion").style.visibility = "visible";
	

	//Creates the quesiton variable and the answers array 
	var qText =  document.createTextNode(questionArray[0]);
	var answers = questionArray.slice(1,questionArray.length);
	shuffle(answers);
	var qNum = "Question"+qNumber


	var q = document.createElement("h1");
	q.appendChild(qText);
	document.getElementById("Questions").appendChild(q);
	
	//Creating the form required to form the dropdown for the options
	var select =document.createElement("select");
	select.setAttribute("name",qNum);
	select.setAttribute("id",qNum);
	document.getElementById("Questions").appendChild(select);
	
	//Creating an initial empty choice
	var blank =document.createElement("option");
	document.getElementById(qNum).appendChild(blank);

	//Looping through the answers randomly to create the dropdown options
	for (var j=0;j< answers.length;j++){
		//Creating the option
		var choice =document.createElement("option");
		choice.setAttribute = ("value",answers[j]);
		var answer = document.createTextNode(answers[j]);
		choice.appendChild(answer);
		document.getElementById(qNum).appendChild(choice);
		}	
}


function steppedQ (questionArray, qNum){

	
	var question =  document.createTextNode(questionArray[0]);
	var qNumber = "Question"+qNum;
			
	var qDiv = document.createElement("div");
	qDiv.setAttribute("id",qNumber);
	document.getElementById("Questions").appendChild(qDiv);

	var q = document.createElement("h1");
	q.appendChild(question);
	document.getElementById(qNumber).appendChild(q);



	var answersArray =  JSON.parse((JSON.stringify(questionArray[1])));

	for (var i=1 ; i<=answersArray.length; i++){
		//Randomise the order of the answers
		shuffle(answersArray);
		//Create the Step Title
		var title =document.createElement("h2");
		var step = "Step"+i
		var tText = document.createTextNode(step);
		title.appendChild(tText);
		document.getElementById(qNumber).appendChild(title);

		//Creating the form required to form the dropdown for the options
		var select =document.createElement("select");
		select.setAttribute("name",step);
		select.setAttribute("id",step);
		select.setAttribute("class","stepped")
		document.getElementById(qNumber).appendChild(select);

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







