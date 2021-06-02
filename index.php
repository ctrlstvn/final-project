<?php
  session_start(); 
   if((isset($_SESSION['login_user']))){
      header("location: profile.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="form.css" title="style" />
<script type = "text/javascript"  src = "login.js" >
    </script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
<meta charset="utf-8">

</head>
<body class="center">
<h1>LOGIN</h1>

<form action= "login.php" method="post">
<p>
<img src = "umbc.jpg" alt = "Profile picture" width="70"/>	
<br />
Username <br />
<input type = "text" name = "username" size = "25" maxlength="25" id="username"/><br />
Password <br />
<input type = "password" name = "password" size = "25" maxlength="25" id="password" /> <br/>
<span id="msg"></span><br/>
</p>
<a href="forgot.html">Forgot Password?</a>
<br />
<input class= "buttons" type="submit" value="Login" id="submit"/>
</form>



</body>
</html>
