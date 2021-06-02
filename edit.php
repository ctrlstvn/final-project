<?php
  session_start(); 
   if(!(isset($_SESSION['login_user']))){
      header("location: index.php");  
}
?>

<!DOCTYPE html>
<html lang="EN">
    <head>
        <title>Edit Profile</title>
		<link rel="stylesheet" type="text/css" href="form.css"/>
		<script type = "text/javascript"  src = "editFocus.js" ></script>
 		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
    </head>
    <body>

        <h1>Edit Profile</h1>
		<form name="editProfile" id="edit" action="editProfile.php" method="post">
        <dl> 
            <dt class="bottomh">About Me</dt>
            <br/>
			<dd>
			<textarea rows="20" cols="80" name="about" id="about"></textarea>
			</dd>
			<dt class="bottomh">Education</dt>
			<br/>
			<dd>
			<textarea rows="20" cols="80" name="education" id="education"></textarea>
			</dd>
			<dt class="bottomh">Subjects</dt>
			<br/>
			<dd>
			<textarea rows="20" cols="80" name="subject" id="subject"></textarea>
			</dd>
		</dl>	
			<input class="buttons" type="submit" value="Submit" id="submit"/>
		</form>
    </body>
</html>
