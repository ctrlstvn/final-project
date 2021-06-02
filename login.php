<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="form.css" />
</head>
<body>

<?php
   session_start(); //start session
   
   $db = mysqli_connect("studentdb-maria.gl.umbc.edu","steven16","steven16","steven16");
   $user=htmlspecialchars($_POST['username']);
   $pass=htmlspecialchars($_POST['password']);

   $user=mysqli_real_escape_string($db, $user);
   $pass=mysqli_real_escape_string($db, $pass);

   $constructed_query = "SELECT * FROM Register WHERE username='$user' AND Password='$pass'";
   $result = mysqli_query($db, $constructed_query);
    
   $num_rows = mysqli_num_rows($result);
  

   if((!$user=="") && (!$pass=="")){
   if($num_rows==1){
   	 $_SESSION['login_user']=$user;
   	 header("location: profile.php");
   	 
   }

   else{
   	print("Incorrect username or password, try again!");
   }
 }

 else{
 	print("Please complete the required fields!");
 }


 ?>
 <br/>
 <a href = index.php> Click here to go back!
</body>
</html>