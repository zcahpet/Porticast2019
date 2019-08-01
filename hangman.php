<!DOCTYPE html>
<html t="0x31" i="YA-9517" v="1.60">
    <head>
        <title>Hangman (Game)</title>
        <link rel="stylesheet" type="text/css" href="Stylesheets/hang2_style.css">
        <script type="text/javascript">var word = [["Tim Baker", "That game you are playing right now."], ["Neila Jurado Pontes", "About the creator of this game."], ["Tom Peach", "Markup language for creating Web pages."], ["Will Newton", "Wep page styles"], ["Federico Bosi", "The lecturer went to CalTech."], ["Adam Wojcik", "The lecturer has an MA in Archaeology and Classics."], ["Manish Tiwari", "The lecturer's research focuses on physics of small scale transport phenomena."], ["Paul Fromme", "A company that everyone can code for fun and share."], ["Helen Czerski", "The lecturer is also a TV presenter."], ["Ramanarayanan Balachandran", "A lot of text in the a file."],["Abel Nyamapfene", "There school kids go to."], ["Matthew Gaston", "Usain bolt."], ["Ryo Torii", "var hw = 'Hello World';"], ["Helge Wurdemann", "The lecturer plays drums"], ["Andrea Ducci", "The lecturer is UK Delegate on the European Federation of Chemical Engineers"], ["Kai Luo", "Super Mario like to get."], ["Eral Bele", "14:12 or 14pm"], ["Gaetano Burriesci", "A clock that only use 0 or 1."], ["Silvia Schievano", "Link from Zelda have on the hand."], ["Ian Eames", "Not boy but ?"], ["Paul Hellier", "Not girl but ?"], ["Ali Abolfathi", "Other name as girl."], ["Liwei Guo", "Other name as boy."], ["Sunny Bains", "Something you've always on you."]]

// Game keyboard
var tastatur = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"

// Game memory
var select = 0
var wordLeft = []
var fail = 0

// Web-page onload
window.onload = function() {
    gId("moveKeybord").addEventListener('touchmove', function(e) {
        wH = window.innerHeight
        tY = e.touches[0].clientY
        eL = gId("tastatur")
        resY = wH - tY - eL.offsetHeight
        if(resY < 0) {
            resY = 0
        } else if(resY > wH / 2) {
            resY = wH / 2
        }
        eL.style.bottom = resY + "px"
    }, false)
    createTastur()
}

// Start game
function startGame() {
    gId("home").className = "h"
    gId("result").className = "h"
    newGame()
}

// New game
function newGame() {
    clearTastatur()
    clearPlayer()
    createWord()
}

// Clear keyboard
function clearTastatur() {
    var e = document.getElementsByClassName("b")
    for(a = 0; a < e.length; a++) {
        e[a].setAttribute("data", "")
    }
}

// Clear player
function clearPlayer() {
    fail = 0
    wordLeft = []
    gId("g0").setAttribute("data", "false")
    gId("g1").setAttribute("data", "false")
    gId("g2").setAttribute("data", "false")
    gId("g3").setAttribute("data", "false")
    gId("g4").setAttribute("data", "false")
    gId("g5").setAttribute("data", "false")
    gId("g5").setAttribute("r", "false")
    gId("g5").setAttribute("l", "false")
    gId("g6").setAttribute("data", "false")
    gId("g6").setAttribute("l", "false")
    gId("g6").setAttribute("r", "false")
    gId("hintButton").setAttribute("data", "false")
    gId("hint").style.display = "none"
}

// Get new word
function createWord() {
    var d = gId("letter")
    d.innerHTML = ""
    select = Math.floor(Math.random() * word.length)
    for(a = 0; a < word[select][0].length; a++) {
        var x = word[select][0][a].toUpperCase()
        var b = document.createElement("span")
        b.className = "l" + (x == " " ? " ls" : "")
        b.innerHTML = "&nbsp"
        b.id = "l" + a;
        d.appendChild(b)
        
        if(x != " ") {
            if(wordLeft.indexOf(x) == -1) {
                wordLeft.push(x)
            }
        }
    }
}

// Create keyboard
function createTastur() {
    var tas = gId("keybord")
    tas.innerHTML = ""
    for(a = 0; a < tastatur.length; a++) {
        var b = document.createElement("span")
        b.className = "b"
        b.innerText = tastatur[a]
        b.setAttribute("data", "")
        b.onclick = function() {
            bTas(this)
        }
        tas.appendChild(b)
    }
}

// Game check, If show next error / game end
function bTas(a) {
    if(a.getAttribute("data") == "") {
        var x = isExist(a.innerText)
        a.setAttribute("data", x)
        if(x) {
            if(wordLeft.length == 0) {
                gameEnd(true)
            }
        } else {
            showNextFail()
        }
    }
}

// If letter "X" exist
function isExist(e) {
    e = e.toUpperCase()
    var x = wordLeft.indexOf(e)
    if(x != -1) {
        wordLeft.splice(x, 1)
        typeWord(e)
        return true
    }
    return false
}

// Show next fail drawing
function showNextFail() {
    fail++
    switch(fail) {
        case 1:
            gId("g0").setAttribute("data", "true")
            gId("g1").setAttribute("data", "true")
            break;
        
        /*case 2:
            gId("g1").setAttribute("data", "true")
            break;*/
        
        case 2:
            gId("g2").setAttribute("data", "true")
            break;
        
        case 3:
            gId("g3").setAttribute("data", "true")
            gId("hintButton").setAttribute("data", "true")
            break;
        
        case 4:
            gId("g4").setAttribute("data", "true")
            break;
        
        case 5:
            gId("g5").setAttribute("data", "true")
            gId("g5").setAttribute("l", "true")
            gId("g5").setAttribute("r", "true")
            break;
        
        case 6:
            gId("g6").setAttribute("data", "true")
            gId("g6").setAttribute("l", "true")
            gId("g6").setAttribute("r", "true")
            gameEnd(false)
            break;
        
        /*case 8:
            gId("g6").setAttribute("data", "true")
            gId("g6").setAttribute("l", "true")
            gId("g6").setAttribute("r", "true")
            gameEnd(false)
            break;
        
          case 9:
            gId("g6").setAttribute("data", "true")
            gId("g6").setAttribute("l", "true")
            break;
        
        case 10:
            gId("g6").setAttribute("r", "true")
            gameEnd(false)
            break;*/
    }
}

function typeWord(e) {
    for(a = 0; a < word[select][0].length; a++) {
        if(word[select][0][a].toUpperCase() == e) {
            gId("l" + a).innerText = e
        }
    }
}

// Game result
function gameEnd(e) {
    var d = gId("result")
    d.setAttribute("data", e)
    if(e) {
        gId("rT").innerText = "You Win!"
        gId("rM").innerHTML = "Congratulations, you found the lecturer!<br/><br/>Good Job!"
    } else {
        gId("rT").innerText = "You Lose!"
        gId("rM").innerHTML = "The lecturer was <br/><br/>\"" + word[select][0].toUpperCase() + "\"<br/><br/>Better luck next time."
    }
    d.className = ""
}

// Show hint
function hint() {
    gId("hintText").innerText = word[select][1]
    gId("hint").style.display = "block"
}

// Exit hint
function hintExit() {
    gId("hint").style.display = "none"
}

// Get HTML ID element by name
function gId(a) {
    return document.getElementById(a)
}
</script>
    </head>
    <body>
	        <div id="home">
	            <div class="title">Hangman :</div>
                <h3> Mech Eng Lecturers</h3>
	            <div class="button anim" onclick="startGame()">Play</div>
	        </div>
	        <div id="result" class="h">
	            <div class="title" id="rT"></div>
	            <div class="body" id="rM"></div>
	            <div class="button anim" onclick="startGame()">Try Again?</div>
	        </div>
	        <div id="pGame">
	            <div id="letter"></div>
	            <div id="game">
	                <div class="player">
	                    <div class="playerModel">
	                        <div class="head" data="false" id="g4"></div>
	                        <div class="body" data="false" l="false" r="false" id="g5"></div>
	                        <div class="foot" data="false" l="false" r="false" id="g6"></div>
	                    </div>
	                </div>
	                <div class="stang3" data="false" id="g3"></div>
	                <div class="stang2" data="false" id="g2"></div>
	                <div class="stang" data="false" id="g1"></div>
	                <div class="ground" data="false" id="g0"></div>
	                <div class="hintButton" data="false" id="hintButton" onclick="hint()">?</div>
	            </div>
	            <div id="tastatur">
	                <div id="moveKeybord"><div class="marg"></div></div>
	                <div id="keybord"></div>
	            </div>
	            <div class="hint" id="hint">
	                <div class="title">Hint<div class="exit" onclick="hintExit()">X</div></div>
	                <div class="body" id="hintText"></div>
	            </div>
	        </div>

    </body>
</html>
