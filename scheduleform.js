"Use Stric";
window.onload = pageLoad;


function pageLoad(){
	document.getElementById("submitA").onclick = checkData;
	document.getElementById("bigText").onclick = changeIt;
    $("department").onchange = showClasses;
}

function changeIt() {

var text = document.getElementById('textArea');
 
if(bigText.checked) {
		text.style.fontSize = "18pt";
	}
	
	else {
	    text.style.fontSize = "14pt";

  }
}

function showClasses(){
  var department = $("department").value;
  new Ajax.Request("departments.php",
  {
     method: "get",
     parameters: {type:department},
     onSuccess: ajaxSuccess,
     onFailure: ajaxFailure
  }
  	);

}

function ajaxSuccess(ajax){
var res = ajax.responseText.split("<br />");
	var str;
	
	str="<select id=\"titles\" name=\"class_title\">";
	//Create a select box with options of classes for the user:

	for (var i =0; i < res.length; i++){
		if(res[i] != "")
		{
			str=str + "<option value=\""+res[i]+"\">"+res[i]+"</option>";
		}
	}
	str = str + "</select>";

	document.getElementById("classes").innerHTML = str;
}

function ajaxFailure(){
	alert("Ajax request failed");
}


//check for only letters on the user's name:
function checkData(){
	var firstname = document.getElementById("name").value;
	var pattern1 = /^[a-z]+$/i;
	var result = pattern1.test(firstname);

	//test if empty: 
	if (firstname == ""){
		alert("You did not enter a name. Please enter one");
		document.getElementById("name").select();
		return false; 
	}

	//now test patters: 
	if (result == false) {
		alert("Please enter only letters for your name");
		document.getElementById("name").select();
		return false; 

	}

//Check for a valid email from the user: 
      var email = document.getElementById("email").value;
      var pattern2 = /^[A-Za-z_0-9]+@[a-z]+\.[A-Za-z]+$/i;
      var result2 = pattern2.test(email);
       
      //test if empty: 
      if (email == ""){
        alert("You did not enter an email. Please enter one");
        document.getElementById("email").select();
        return false; 
        }
       
       //now test patterns: 
      if (result2 == false) {
        alert("Please enter a valid email in order to be contacted by a student");
        document.getElementById("email").select();
        return false; 

      }

}
