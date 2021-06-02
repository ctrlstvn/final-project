<?php
  session_start(); 
   if(!(isset($_SESSION['login_user']))){
      header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="EN">
<head>

  <title> Schedule </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="form.css" />
</head>
<body>

 <?php 
  #connect to mysql database
  $db = mysqli_connect("studentdb-maria.gl.umbc.edu","steven16","steven16","steven16");

  if (mysqli_connect_errno())
    exit("Error - could not connect to MySQL");

  #obtain the parameters from the scheduleform.html form using the post array 
  $tutorID = htmlspecialchars($_POST['tutor_name']);
  $email = htmlspecialchars($_POST['email_address']);
  $classTitle = htmlspecialchars($_POST['class_title']);
  $availability = htmlspecialchars($_POST['week_day']);
  $time = htmlspecialchars($_POST['available_time']);
  
  $tutorID = mysqli_real_escape_string($db, $tutorID);  
  $email = mysqli_real_escape_string($db, $email);  
  $classTitle = mysqli_real_escape_string($db, $classTitle); 
  $availability = mysqli_real_escape_string($db, $availability);   
  $time = mysqli_real_escape_string($db, $time);  
  $login_session=$_SESSION['login_user'];
 
  //Construct query 
  $constructed_query = "SELECT * FROM schedule WHERE class_title = '$classTitle' 
                        AND week_day = '$availability'
                        AND available_time  = '$time' 
                        AND username = '$login_session'";
  
  //execute query 
  $result = mysqli_query($db, $constructed_query);
  
  if(! $result){
    print("Error - query could not be executed");
    $error = mysqli_error();
    print "<p> . $error . </p>";
    exit;
  }

 $num_rows = mysqli_num_rows($result);
 if((!empty($tutorID)) && (!empty($email)) && (!empty($classTitle))) {
 if($num_rows > 0) {
  
  ?>

  <div class="scheduleForm">
  <P> <?php echo "You have already scheduled a tutoring session for class <strong> $classTitle </strong>, <strong> $availability </stong> from <strong> $time </strong> <br/>"; ?></P>
  </div>

  <?php 
       
   }
   else {
      //insert data from the form into the database 
      $constructed_query = "INSERT INTO schedule (username, tutor_name, email_address, class_title, week_day, available_time) VALUES ('$login_session', '$tutorID', '$email', '$classTitle', '$availability', '$time')";

  //execute query 
  $result = mysqli_query ($db, $constructed_query);
  if (! $result) {
     print("Error - query could not be executed");
  $error = mysqli_error();
  print "<p>$error</p>";
  exit;
      
  }
 
  ?>
  <div class="scheduleForm">
  <p> <?php echo "Thank you <strong> $tutorID </strong> for selecting your availability 
        for class: <strong> $classTitle </strong> <br/>
        Your selected availability is: <br/>
        Day of the week: <strong> $availability </strong> <br/>
        Time of the day: <strong> $time </strong> <br/>"; ?> </p>
   </div>
  
  <?php
    
    } 
   }

   else {
  ?>

  <div class="scheduleForm">
  <p> <?php echo "You haven't entered all information on the form.
      Please go back and re-enter."; ?> </p>
  </div>

  <?php

   }

  ?>
  
  <br /> <br/>
  <a href="scheduleform.php" class = "buttons" id="colorA"> Go back and create a new schedule </a> 
  <a class="buttons" href="profile.php"> Home </a>  <br /> <br/>

 </body>
 </html>

