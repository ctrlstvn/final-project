<?php  session_start();
   if(!(isset($_SESSION['login_user']))){
      header("location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="form.css" title="style" />

</head>
<body>
<?php
  
	#connect to mysql database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","steven16","steven16","steven16");

	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");


	$about = htmlspecialchars($_POST['about']);
    $education = htmlspecialchars($_POST['education']);
    $subject = htmlspecialchars($_POST['subject']);

    $about = mysqli_real_escape_string($db,$about);
    $education = mysqli_real_escape_string($db,$education);
    $subject = mysqli_real_escape_string($db,$subject);
    $login_session=$_SESSION['login_user'];
    //$profile= $_POST['profileID'];
    
     
	$constructed_query ="UPDATE profile SET about='$about',
											education='$education',
											subjects='$subject' 
											WHERE username='$login_session'";
	$result = mysqli_query($db, $constructed_query);

  
   header("location: profile.php");
	
?>


</body>
</html>
