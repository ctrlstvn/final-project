"use strike"
window.onload = pageLoad;
function pageLoad(){
	document.getElementById("submit").onclick=submitcheck;
}
function submitcheck()
{
		//Email
		var Email = document.getElementById("Email").value;
		if (Email =="")
		{
		alert("Email is empty");
		return false;
		}
		
		//security
		var security = document.getElementById("security").value;
		if (security =="")
		{
		alert("security is empty");
		return false;
		}
}