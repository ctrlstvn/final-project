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


  <h1> Search </h1>

  <form name = "search" method = "post" action ="searchresults.php">

    Select Class:
    <select name = "class_title" id = "class_title">
      <option value = 0> -- </option>
      <option value="BIOL101"/>BIOL101</option>
      <option value="BIOL102"/>BIOL102</option>
      <option value="BIOL103"/>BIOL103</option>
      <option value="ECON100"/>ECON100</option>
      <option value="ECON101"/>ECON101</option>
      <option value="ECON102"/>ECON102</option>
      <option value="IS247"/>IS247</option>
      <option value="IS310"/>IS310</option>
      <option value="IS448"/>IS448</option>
      <option value="IS450">IS450</option>
    </select>

    <br/>

    Looking for Tutoring or Resources?
    <select name = "help" id = "help">
      <option value = 0> -- </option>
      <option value ="Tutors"> Tutoring </option>
      <option value ="Resources"> Resources </option>
    </select>

    <br/>
    <br/>


  </form>

  <p id = "input"> </p>

  <p>
    <br/>
    <br/>

    <a href = "profile.php" class = "buttons" id = "button"> Go Home </a>

    <a href = "alltutors.php" class = "buttons" id = "button2"> View All Tutors</a>
  </p>


</body>

</html>
