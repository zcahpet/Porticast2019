function check(){
	var score=0;
	var answers = [2,1,0]

	for (var i=0; i<3; i++){
		if (document.getElementById("step"+i).selectedIndex==answers[i]){
			score++
		}

	}
	document.getElementById("TotalCorrect").style.visibility = "visible";
	document.getElementById("TotalCorrect").innerHTML = "You got "+score+" correct."

}


function go(){
	var d = new Date();
	document.getElementById("TimedQuestion").style.visibility = "visible";
}