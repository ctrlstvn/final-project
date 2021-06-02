window.onload = pageLoad;



function pageLoad() {
    $("class_title").onchange = update;
    $("help").onchange = update;
    $("button").onmousedown = color;
    $("button").onmouseup=  color;
    $("button2").onmousedown = color2;
    $("button2").onmouseup= color2;
    $("class_title").onmouseenter = size;
    $("class_title").onmouseleave = size;
    $("help").onmouseenter= size2;
    $("help").onmouseleave= size2;


}


function update(){

  var classTitle = $("class_title").value;
  var helpChoice = $("help").value;

  if (classTitle == 0 || helpChoice == 0) {

     var output = "No selection made";
    $("input").innerHTML = output;
    return false;

  }

else{

  new Ajax.Request( "searchresults.php",
  {
    method: "get",
    parameters: {class:classTitle,help:helpChoice},
    onSuccess: displayTable,
    onFailure:error
  }
  );


}

}

function displayTable(ajax){

  $("input").innerHTML = ajax.responseText;

  var classT = $("class_title").value;
  var string = classT.substr(0, 2);
  var inner = $("input");

  if(string == "IS"){

    inner.style.color="pink";
  }

  else if (string == "BI"){
    inner.style.color="red";

  }

  else if (string == "EC"){
    inner.style.color="orange";
  }

  else{
    inner.style.color="green";
  }

}

function error(){
  alert("Error");
}

function color(){

  var button = $("button");

  if(event.type == "mousedown"){
    button.style.backgroundColor='pink';
    button.style.color='purple';
  }

  else {
    button.style.backgroundColor='orange';
    button.style.color='grey';
  }
}

function color2(){

  var button = $("button2");

  if(event.type == "mousedown"){
    button.style.backgroundColor='pink';
    button.style.color='purple';
  }

  else {
    button.style.backgroundColor='orange';
    button.style.color='grey';
  }
}

function size(){

  var classTitle = $("class_title");

  if(event.type == "mouseenter"){
     classTitle.style.fontSize = "20pt";
  }

  else {
    classTitle.style.fontSize='11pt';
  }
}

function size2(){

  var help = $("help");

  if(event.type == "mouseenter"){
     help.style.fontSize = "20pt";
  }

  else {
    help.style.fontSize='11pt';
  }
}
