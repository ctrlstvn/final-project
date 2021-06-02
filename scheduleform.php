<?php
  session_start(); 
   if(!(isset($_SESSION['login_user']))){
      header("location: index.php");
}
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title> Scheduling Form </title>
		<link href="form.css" type="text/css" rel="stylesheet">
		<script type = "text/javascript"  src = "scheduleform.js" > </script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>




	</head>
<body>

   <h1>Tutoring Schedule </h1>
   <div class="scheduleForm" id="textArea">
   <form name="order" action="schedule.php" method="POST">  

   Select a UMBC department:
		<select id="department" name="departments">
			<option value="IS" selected="selected">Information Systems</option>
			<option value="BIO">Biological Sciences</option>
			<option value="ECON">Economics</option>
		</select><br/>   

   	Select the class you wish to tutor:
		<div id="classes">
			<!--zip codes should go into this select box -->
			<select id="titles" name="class_title" >
					<option value="">..</option>
			</select>
		</div>
		<br/>

		
			<p> Select your availability to tutor: </p> 

			            Day of the week <select name="week_day">
						<option value="Monday">Monday</option>
						<option value="Tuesday"/>Tuesday</option>
						<option value="Wednesday"/>Wednesday</option>
						<option value="Thursday"/>Thursday</option>
						<option value="Friday"/>Friday</option>
						<option value="Saturday"/>Saturday</option>
						<option value="Sunday"/>Sunday</option>
						</select> 
					 	<br /> <br /> 

						From <select name="available_time">
						<option value="8:00 am to 9:00 am">8:00 am to 9:00 am </option>
						<option value="9:00 am to 10:00 am"/>9:00 am to 10:00 am</option>
						<option value="10:00 am to 11:00 am"/>10:00 am to 11:00 am</option>
						<option value="11:00 am to 12:00 pm"/>11:00 am to 12:00 pm</option>
						<option value="12:00 pm to 1:00 pm"/>12:00 pm to 1:00 pm</option>
						<option value="1:00 pm to 2:00 pm"/>1:00 pm to 2:00 pm</option>
						<option value="2:00 pm to 3:00 pm"/>2:00 pm to 3:00 pm</option>
						<option value="4:00 pm to 5:00 pm"/>4:00 pm to 5:00 pm</option>
						<option value="5:00 pm to 6:00 pm"/>5:00 pm to 6:00 pm</option>
						<option value="6:00 pm to 7:00 pm"/>6:00 pm to 7:00 pm</option>
						<option value="7:00 pm to 8:00 pm"/>7:00 pm to 8:00 pm</option>
						<option value="8:00 pm to 9:00 pm"/>8:00 pm to 9:00 pm</option>
						<option value="9:00 pm to 10:00 pm"/>9:00 pm to 10:00 pm</option>
						<option value="10:00 pm to 11:00 pm"/>10:00 pm to 11:00 pm</option>
						<option value="11:00 pm to 12:00 am"/>11:00 pm to 12:00 am</option>
						</select> 
						
                        <br /> <br /> 
            <P> Please enter your contact information: </P> 
            Enter your name: <input type="text" name="tutor_name" id="name"><br /> <br /> 
            Enter your email address: <input type="text" name="email_address" id="email"><br /> <br /> 
            <input type="checkbox" value="Enlarge Text" name="bling" id="bigText"/> Enlarge Text 
                
			<input class = "buttons" type="submit" value="Submit" id="submitA"/> <br /> <br/>
			</form>
            </div>

            <br/><br/>
            <a class= "buttons" href="profile.php"> Home </a>  <br /> <br/>
</body>
</html>