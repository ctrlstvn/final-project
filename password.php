<!DOCTYPE html>
<html lang="EN">
  <head> 
	<title>password recover</title>
	<link rel="stylesheet" type="text/css" href="form.css" />
	<meta charset="utf-8">

  </head>
  <body>
    <p>
<?php
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","steven16","steven16","steven16");
	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");
	
	$emailss = htmlspecialchars($_POST['Emails']);
	$mysecurity = htmlspecialchars($_POST['security']);
	
	$emailss = mysqli_real_escape_string($db,$emailss); 
	$mysecurity = mysqli_real_escape_string($db,$mysecurity);
	
	if ((isset($emailss) && (!empty($emailss))) &&
		(isset($mysecurity) && (!empty($mysecurity))))
	{
		$constructed_query = "SELECT * FROM Register WHERE Email = '$emailss' and security = '$mysecurity'";
		$result = mysqli_query($db, $constructed_query);
		$num_rows = mysqli_num_rows($result);
		if(!empty($num_rows))
		{
			if (!$num_rows)
			{
			echo ("no employee matching your query");
			}
			else
			{
				while($row_array = mysqli_fetch_array($result))
				{
				echo ("Your password is: $row_array[Password]" );
				}
			}
		}
		else
		{
			echo(" your is not in the record ");
		}
	}
	else
	{
		echo(" please fill all the information");
	}
?>
		</p>
	</body>
</html>
