"use strice"
window.onload = pageLoad;
function pageLoad()
{
	$("username").onblur = validateUsername;
	$("Email").onblur = validateemail;
	document.getElementById("submit").onclick=submitcheck;
	document.getElementById("First_name").onblur=focuss;

}
function focuss()
{
	$('First_name').style.backgroundColor="#e9967a";
}
function validateemail()
{

	var valueOfemail = $("Email").value;	

	new Ajax.Request("ajaxsubmit2.php", 
	{ 
		method: "get", 
		parameters: {Email:valueOfemail},
		onSuccess: displayR,
		onFailure: displayF
	} 
	);
}

function displayR(ajax){
	 var E = ajax.responseText;

    $("emailisused").innerHTML = E;

    if(E == 'taken'){
		$('emailisused').style.backgroundColor="red";
		$('emailisused').style.color="white";
		$('emailisused').focus();
		
	}
	else{
		$('emailisused').style.backgroundColor="green";
		$('emailisused').style.color="white";	
	}
	 	
}

function displayF(){
	alert('ajax request failed');
}


function validateUsername()
{

	var valueOfusername = $("username").value;	

	new Ajax.Request("ajaxsubmit.php", 
	{ 
		method: "get", 
		parameters: {username:valueOfusername},
		onSuccess: displayResult,
		onFailure: displayFailureMessage
	} 
	);
}

function displayResult(ajax){
	 var r = ajax.responseText;

    $("msgbox").innerHTML = r;

    if(r == 'taken')
	{
		$('msgbox').style.backgroundColor="red";
		$('msgbox').style.color="white";
		$('msgbox').focus();
		
	}
	else{
		$('msgbox').style.backgroundColor="green";
		$('msgbox').style.color="white";
	}
	 	
}


function displayFailureMessage(){
	alert('ajax request failed');
}

function submitcheck()
{

	// last name
	var Last_name = document.getElementById("Last_name").value;
		if (Last_name =="")
		{
		alert("last name is empty");
		return false;
		}	
	// first name
	var First_name = document.getElementById("First_name").value;
		if (First_name =="")
		{
		alert("first name is empty");
		return false;
		}

	//username
	var User_name = document.getElementById("username").value;
		if (User_name =="")
		{
		alert("username is empty");
		return false;
		}
	
	
	//Email & email 2
	var Email = document.getElementById("Email").value;
	var pattern5= /^[a-zA-Z0-9._-]+@[a-z]+\.[a-z]+$/;
	var result5 = pattern5.test(Email);
	if (Email =="")
		{
		alert("first email is empty");
		return false;
		}
	
	if ( result5 == false)
	{
		alert("Enter email in the right format ex: example@example.com ");
		document.getElementById("Email").select();
		return false;
	}
		
	var Emails2 = document.getElementById("Emails2").value;
	if (Emails2 =="")
		{
		alert("second email is empty");
		return false;
		}		

	if (Email != Emails2)
	{
		alert('Those emails don\'t match!');
		return false;
	} 
	

	//password and password2	
	 var mypass = document.getElementById("mypass").value;
	 var pattern2= /^[a-zA-Z0-9._#$@-]{7,}$/;
	 var result2 = pattern2.test(mypass);
	 if (mypass =="")
		{
		alert("first password is empty");
		return false;
		}	
		
		if (result2 == false)
		{
		alert("password in the wrond format.Minimum 7 character and u only can use ._#$@- ");
		document.getElementById("mypass").select();
		return false;
		}
	
	var mypass2 = document.getElementById("mypass2").value;
		if (mypass2 =="")
		{
		alert("second password is empty");
		return false;
		}	
		
        if (mypass != mypass2) 
		{
            alert("password don't match");
			return false;
        }
		

	//school
	var school = document.getElementById("school").value;
	if (school =="")
		{
		alert("school is empty");
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
