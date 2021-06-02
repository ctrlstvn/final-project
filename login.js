window.onload = pageLoad;

function pageLoad(){
   $("password").onblur = validate;
}
function validate() {

var user = $("username").value;
var pass = $("password").value;
	
if((user=="") || ((pass==""))){
	alert("Please complete all the fields!")
	return false;
}
else{
new Ajax.Request("check.php", 
	{ 
		method: "get", 
		parameters: {username:user,password:pass},
		onSuccess: displayResult,
		onFailure: displayFailureMessage
	} 
	);
}

function displayResult(ajax){

    $("msg").innerHTML = ajax.responseText;
    return false;
	 	
}

function displayFailureMessage(){
	alert('ajax request failed');
}
}