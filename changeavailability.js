"Use Strict";
window.onload = pageLoad;


function pageLoad(){
	document.getElementById("submit").onclick= messages;
	document.getElementById("colorB").onmouseover = showImportance;
	document.getElementById("colorB").onmouseout = showImportance;
}

function messages () {
		var txt = confirm("Are you sure you want to delete this availability?");
		if (txt == true) 
		    return true;
		 else 
		    return false;
    }

function showImportance () {
	var text = document.getElementById("colorB");
	if (event.type == "mouseover"){
		text.style.color= "red";
	    text.style.fontSize = '18pt'
	   }
	else {
		text.style.color="white";
	    text.style.fontSize = '14pt'
	}

}














//alert("works");