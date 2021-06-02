<?php

$db = mysqli_connect("studentdb-maria.gl.umbc.edu","steven16","steven16","steven16");

  if (mysqli_connect_errno())
    exit("Error - could not connect to MySQL");

$q=$_GET["Email"];

$constructed_query = "SELECT * FROM Register";

//execute query 
$result = mysqli_query($db, $constructed_query);
  
  if(! $result){
    print("Error - query could not be executed");
    $error = mysqli_error();
    print "<p> . $error . </p>";
    exit;
  }
$result = mysqli_query($db, $constructed_query); 
while ($row_array = mysqli_fetch_array ($result))
      {

//Insert all the values of the username column into the array!! 
$arr[]="$row_array[Email]";
 
 }

//#retrieve value of parameter by name 'username' and store the value in the local variable $q


if (in_array($q,$arr)) 
{
	$response="taken";
}
else{
	$response = "available";
}
echo $response;

?>
