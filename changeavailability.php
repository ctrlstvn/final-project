<?php
  session_start(); 
   if(!(isset($_SESSION['login_user']))){
      header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="EN">
<head>
  <title> New Availability </title>
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
  $classTitle = htmlspecialchars($_POST['class_title']);
  $availability = htmlspecialchars($_POST['week_day']);
  $time = htmlspecialchars($_POST['available_time']);
  
  $classTitle = mysqli_real_escape_string($db, $classTitle); 
  $availability = mysqli_real_escape_string($db, $availability);   
  $time = mysqli_real_escape_string($db, $time);  
  $login_session=$_SESSION['login_user']; 

  
  //Construct query 
  $constructed_query = "SELECT * FROM schedule WHERE  class_title = '$classTitle' AND week_day = '$availability'  AND available_time  = '$time' AND username = '$login_session'";
                       
  
  //execute query 
  $result = mysqli_query($db, $constructed_query);
  
  if(! $result){
    print("Error - query could not be executed");
    $error = mysqli_error();
    print "<p> . $error . </p>";
    exit;
  }
 
$num_rows = mysqli_num_rows($result);
if($num_rows == 0) {
  
  ?>

  <div class="scheduleForm">
  <P> <?php echo "You do not have a tutoring session scheduled for class <strong> $classTitle </strong>, <strong> $availability </stong> from <strong> $time </strong> <br/>"; ?></P>
  </div>

<?php 

  }
   else {
      //insert data from the form into the database 
      $constructed_query = "DELETE FROM schedule WHERE  class_title = '$classTitle' AND week_day = '$availability'  AND available_time  = '$time' AND username = '$login_session'";

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
  <p> <?php echo "You have successfully deleted your availability!"; ?>  
  <a href="scheduleform.php" class= "link" > Click here to add a new availability </a> 
  </p>
   </div>
  
  <?php
    
    } 
   

   ?>
  
  <br /> <br/>
  <a href="changeavailable.php" class = "buttons"> Go back </a>
  <a  class= "buttons" href="profile.php" > Home </a>  <br /> <br/>

 </body>
 </html>

