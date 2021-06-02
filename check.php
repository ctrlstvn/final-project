<?php

$db = mysqli_connect("studentdb-maria.gl.umbc.edu","steven16","steven16","steven16");

  if (mysqli_connect_errno())
    exit("Error - could not connect to MySQL");

$user=$_GET["username"];
$pass=$_GET["password"];

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

    $arr[]="$row_array[username]";
    $arr2[]="$row_array[Password]";
   }


if ((!in_array($user,$arr)) || (!in_array($pass,$arr2)) ) 
{
	$response="Wrong username/password";
}
else{
  $response="Correct Username/Password";
}
echo $response;
?>
