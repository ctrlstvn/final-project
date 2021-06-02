"use Strict";
window.onload = pageLoad;

function pageLoad(){
	document.getElementById("about").onfocus=changeColor;
	document.getElementById("education").onfocus=changeColor;
	document.getElementById("subject").onfocus=changeColor;

}
function changeColor(){
	document.getElementById("about").style.backgroundColor="#BCF3EE";
	document.getElementById("education").style.backgroundColor="#BCF3EE";
	document.getElementById("subject").style.backgroundColor="#BCF3EE";
}


