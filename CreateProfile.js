"use strice"
window.onload = pageLoad;
function pageLoad()
{
	document.getElementById("submit").onclick=submitcheck;
}

function submitcheck()
{
	//about
	var about = document.getElementById("about").value;
		if (about =="")
		{
		alert("about is empty");
		return false;
		}	 
		
    //education
		var education = document.getElementById("education").value;
		if (education =="")
		{
		alert("education is empty");
		return false;
		}	
		
	//subject	
		var subject = document.getElementById("subject").value;
		if (subject =="")
		{
		alert("subject is empty");
		return false;
		}
}