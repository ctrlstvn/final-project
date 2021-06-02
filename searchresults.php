<?php


  $class = $_GET['class'];
  $helpOption = $_GET['help'];




  $db = mysqli_connect("studentdb-maria.gl.umbc.edu","steven16","steven16","steven16");

  if (mysqli_connect_errno()){

    exit("Error - could not connect to MySQL");

  }

  if(preg_match("/Tutors/",$helpOption)){

    $selectquery = "SELECT * FROM schedule WHERE class_title='$class'";
    $result = mysqli_query($db, $selectquery);

    $num_rows = mysqli_num_rows($result);

    if($num_rows == 0){
    echo "No tutors available for this class";
      exit;
    }

    for($i=0; $i < $num_rows; $i++){

  $row = mysqli_fetch_array($result);
  echo "Tutor Name: $row[tutor_name] <br> Weekday: $row[week_day] <br> Email Address: $row[email_address] <br> Available Time: $row[available_time] <br> <br>";


  }

}

  else if(preg_match("/Resources/",$helpOption)){

    $selectquery = "SELECT * FROM resources WHERE class_title='$class'";
    $result = mysqli_query($db, $selectquery);

    $num_rows = mysqli_num_rows($result);

    if($num_rows == 0){
    echo "No resources have been shared for this class yet";
      exit;
    }

  for($i=0; $i < $num_rows; $i++){

  $row = mysqli_fetch_array($result);
  echo "Class: $row[class_title] <br> Resource: $row[resource_description] <br> Link: $row[resource_link] <br> <br> <br>";

 }

 }


 else{
   exit;
 }

   ?>
