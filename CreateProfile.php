<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="form.css" title="style" />
</head>
<body>
<?php

    session_start();
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

if ((isset($about) && (!empty($about))) &&
	(isset($education) && (!empty($education)))&&
	(isset($subject) && (!empty($subject))))
{
	
	$constructed_query = "INSERT INTO profile (`about`, `education` ,`subjects`,											`username`)
						              VALUES ('$about','$education','$subject','$login_session')";
	$result = mysqli_query($db, $constructed_query);
	header("location: profile.php");

}
else
{
	echo ("Fill all the blank text boxes");
}
	
?>


</body>
</html>
