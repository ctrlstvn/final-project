<?php
  session_start(); 
   if(!(isset($_SESSION['login_user']))){
      header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="EN">
<head>

	<title> My Availability </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="form.css" />
</head>
<body>

 <?php 
    #connect to mysql database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","steven16","steven16","steven16");

	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");

	$login_session=$_SESSION['login_user'];

    //Construct query 
    $constructed_query = "SELECT * FROM schedule WHERE username= '$login_session'";

	//execute query 
	$result = mysqli_query ($db, $constructed_query);
	  if (! $result) {
	     print("Error - query could not be executed");
		$error = mysqli_error();
		print "<p>$error</p>";
		exit;

	  }

	?>
     <h3> My selected availability is: </h3>
     <table border = "1" width="500">
		<tr>
		    <th width="100">Class</th>
			<th width="100">Day</th>
			<th width="100">Time</th>
	    </tr>
		</table>
    <?php

    $result = mysqli_query($db, $constructed_query);
    while ($row_array = mysqli_fetch_array ($result))
      {

 ?>

<table border = "1" width="500">
<tr>
    <th width="100"> <?php echo "$row_array[class_title]";?> </th>
	<th width="100"> <?php echo "$row_array[week_day]";?> </th>
	<th width="100" class="green"> <?php echo"$row_array[available_time]"; ?> </th>

</tr>
</table>

<?php 
     
    }
?>

<br /> <br/>
<a href="changeavailable.php" class = "buttons"> Change my availability </a>
<a class= "buttons" href="profile.php"> Home </a>  <br /> <br/>

</body>
</html>