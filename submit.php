
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title>submit </title>
<link rel="stylesheet" type="text/css" href="form.css" title="style" />
<meta charset="utf-8">

</head>
<body>
<?php
 session_start();
$db = mysqli_connect("studentdb-maria.gl.umbc.edu","steven16","steven16","steven16");
	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");
		
			
	$lastname = htmlspecialchars($_POST['Last_name']);
	$firstname = htmlspecialchars($_POST['First_name']);
	$user = htmlspecialchars($_POST['User_name']);
	$emailss = htmlspecialchars($_POST['Emails']);
	$emailss2 = htmlspecialchars($_POST['Emails2']);
	$mypassword = htmlspecialchars($_POST['mypass']);
	$mypassword2 = htmlspecialchars($_POST['mypass2']);
	$schoolname = htmlspecialchars($_POST['school']);
	$mysecurity = htmlspecialchars($_POST['security']);
	

	$lastname = mysqli_real_escape_string($db,$lastname);
	$firstname = mysqli_real_escape_string($db,$firstname);
	$user = mysqli_real_escape_string($db,$user);
	$emailss = mysqli_real_escape_string($db,$emailss); 
	$mypassword = mysqli_real_escape_string($db,$mypassword);
	$schoolname = mysqli_real_escape_string($db,$schoolname);
	$mysecurity = mysqli_real_escape_string($db,$mysecurity);

	if ((isset($emailss) && (!empty($emailss))) &&
		(isset($emailss2) && (!empty($emailss2)))&&
		(isset($mypassword) && (!empty($mypassword)))&&
		(isset($mypassword2) && (!empty($mypassword2)))&&
		(isset($lastname) && (!empty($lastname)))&&
		(isset($firstname) && (!empty($firstname)))&&
		(isset($user) && (!empty($user)))&&
		(isset($schoolname) && (!empty($schoolname)))&&
		(isset($mysecurity) && (!empty($mysecurity))))
	{
		
		if ($emailss == $emailss2)
		{
			if(preg_match("/^[a-zA-Z0-9._-]+@[a-z]+\.[a-z]+$/" ,$emailss ))
			{
				$constructed_query2 = "SELECT * FROM Register WHERE username='$user' or Email = '$emailss'";
				$result1 = mysqli_query($db, $constructed_query2);
				$row_array = mysqli_fetch_array($result1);
			  if (empty($row_array))
				{
					if($mypassword == $mypassword2)
					{
						if(preg_match("/^[a-zA-Z0-9._#$@-]{7,}$/" ,$mypassword ))
						{
							
							$constructed_query = "INSERT INTO `Register`(`Last_Name`, `First_Name` ,`username`, `Email`, `Password`,`School`,`security`)
						                                     	VALUES ('$lastname','$firstname','$user','$emailss','$mypassword','$schoolname','$mysecurity')";
							$result = mysqli_query($db, $constructed_query);
							$_SESSION['login_user']=$user;

?>
							<h1> Successful Submission</h1>
							<div class="homepage">
							<p> You have successfully created an account!!<br/>
							Click on profile button to visit your profile </P>
							<form action="create.php"  method="Post">
							<button class ="buttons">profile</button>
							</form>
<?php
						}
						else
						{
?>							
					<div class="scheduleForm">
					<p>	pasword is invalid format. Please make sure you have at list 8 charachter</p>
					<a class="link" href='register.html'>click here</a>
					<p> to return to the registration page</p>
					</div>
<?php	
					}
					}
					else 
					{
						
					
?>
					<div class="scheduleForm">
					<p>password is not matching , please re-enter the password</p>
					<a class="link" href='register.html'>click here</a>
					<p> to return to the registration page</p>
					</div>
<?php
					}
				}
			  else
			   { 
			   ?>
					<div class="scheduleForm">
					<p>this email or user name is been used before. please enter a different user name or email</p>
					<a class="link" href='register.html'>click here</a>
					<p> to return to the registration page</p>
					</div>
<?php
			   }
			}
			else
			{
			
				?>					
				<div class="scheduleForm">
					<p>invalid Email format please renter</p>
					<a class="link" href='register.html'>click here</a>
					<p> to return to the registration page</p>
					</div>
<?php
			}	
		}
		else
		{
?>
					<div class="scheduleForm">
					<p>Email is not matching, please re-enter the email</p>
					<a class="link" href='register.html'>click here</a>
					<p> to return to the registration page</p>
					</div>
<?php
		}
	}
	else
	{	
?>
					<div class="scheduleForm">
					<p>please fill all the the text box</p>
					<a class="link" href='register.html'>click here</a>
					<p> to return to the registration page</p>
					</div>
<?php
					}
?>
</div>
</body>
</html>
