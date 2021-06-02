<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
  <title> Tutor on Campus </title>
  <link rel="stylesheet" href="form.css">
  <script type="text/javascript" src="search.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>

</head>

<body>

  <?php
  session_start();
  if(!(isset($_SESSION['login_user']))){
  header("location: index.php");
  }

  ?>

  <h1> View All Tutors </h1>

  <table border = "1" width="1000">
 <tr>
  <th width="200">Name</th>
   <th width="200">Day Available</th>
   <th width="200">Class Title</th>
   <th width="200">Contact Information</th>
   <th width="200">Time</th>

   </tr>
 </table>

  <?php


  $db = mysqli_connect("studentdb-maria.gl.umbc.edu","steven16","steven16","steven16");

  if (mysqli_connect_errno()){

    exit("Error - could not connect to MySQL");

  }

  $selectquery = "SELECT * FROM schedule";
  $result = mysqli_query($db, $selectquery);

  $num_rows = mysqli_num_rows($result);

  if($num_rows == 0){
    print("No tutors available for this class");
    exit;
  }

  for($i=0; $i < $num_rows; $i++){

      $row = mysqli_fetch_array($result);

      ?>

      <table border = "1" width="1000">
      <tr>
      <th width="200"> <?php echo "$row[tutor_name]";?> </th>
      <th width="200"> <?php echo "$row[week_day]";?> </th>
      <th width="200"> <?php echo "$row[class_title]";?> </th>
      <th width="200"> <?php echo "$row[email_address]";?> </th>
      <th width="200" class ="green"> <?php echo "$row[available_time]";?> </th>

      </tr>
      </table>

      <?php



}

  ?>

  <p>
    <br/>
    <a class = "buttons" href = "search.php" id ="button3" > Go Back</a>
    <a class = "buttons" href = "profile.php" id ="button4"> Go Home</a>
  </p>

</body>

</html>
