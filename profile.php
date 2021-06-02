<?php
session_start(); 
   if(!(isset($_SESSION['login_user']))){
      header("location: index.php");
}
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="form.css" title="style" />
<script type = "text/javascript"  src = "profile.js" ></script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/scriptaculous.js"></script>

</head>
<body>
<?php
  

	#connect to mysql database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","steven16","steven16","steven16");

	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL"); 
    $login_session=$_SESSION['login_user'];
    $constructed_query = "SELECT * FROM profile WHERE username='$login_session'";
    $printProfile = mysqli_query($db, $constructed_query);
    $num_rows = mysqli_num_rows($printProfile);
	
?>
<a href = "logout.php" class = "buttons"> Log Out </a>

<h1>Tutor on Campus Profile</h1>
<p>
    <span id = 'greatDay' style = "position: absolute; left: 100px; top: 100px; font-size: 20pt"> 
              Have a great day! 
    </span>
</p>

<p class="clearHeader"> </p>
<br/>
<span id="bar">
<div class="head">
<a href="profile.php">Home</a>
<a href="scheduleform.php">Schedule</a>
<a href="search.php">Search</a>
</div>
</span>
<!--<p class="head">Home Tutoring Schedule Resources Search</p>	!-->

<p id="picture">
<img src = "umbc.jpg" alt = "Profile picture" width="100"/>

</p>
<?php echo "Welcome, $login_session!"; ?>
<br/>
<br/>
<a class= "buttons" href="edit.php">Edit Profile</a> <br/>

<h3 class="bottomh">About Me</h3>
<?php
for($row_num = 1; $row_num <= $num_rows; $row_num++){
		$row_array = mysqli_fetch_array($printProfile);
		print("$row_array[about]");
		
		
?>
	<h3 class="bottomh">Education</h3>

<?php print("$row_array[education]"); ?>
    <h3 class="bottomh">Subjects</h3>
 <?php print("$row_array[subjects]");
  }
?>
     
<h3 class="bottomh">Availability</h3>
<a href="myavailability.php" class="buttons"> See my availabilities!</a>

</body>
</html>
