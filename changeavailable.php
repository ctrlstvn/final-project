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
    <script type = "text/javascript"  src = "changeavailability.js" >
    </script>


  </head>
<body>

   <h1>Change Availability </h1>
   <div class="scheduleForm">
   <form name="order" action="changeavailability.php" method="POST">
    <p> Please enter the availability you wish to delete </p>
             
    <p> Enter your old availability: </p>
    <div id="colorB"> Select the class you wish to delete <select name="class_title">
            <option value="IS450">IS450</option>
            <option value="IS448"/>IS448</option>
            <option value="IS247"/>IS247</option>
             <option value="IS310"/>IS310</option>
            <option value="ECON100"/>ECON100</option>
            <option value="ECON101"/>ECON101</option>
            <option value="ECON102"/>ECON102</option>
            <option value="BIOL101"/>BIOL101</option>
            <option value="BIOL102"/>BIOL102</option>
            <option value="BIOL103"/>BIOL103</option>
            </select> 
            <br /> <br /> 

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
      </div> 
      <br /> <br />                    
      <input class = "buttons" type="submit" value="Submit" id="submit"/>
      <a class= "buttons" href="profile.php"> Home </a>  <br /> <br/>
      </form>
      </div>
</body>
</html>