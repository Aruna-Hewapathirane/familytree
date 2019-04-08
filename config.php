<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	
  //$db = mysqli_connect("localhost","my_user","my_password","my_db");
  //$db = mysqli_connect("localhost","aruna","aruna","track");
	$db = mysqli_connect('localhost', 'c257053_track', 'track', 'c257053_track');

	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		//echo "Connected to TRACK";
	}
	
	$ip=$_SERVER['REMOTE_ADDR'];
	
	$browser=$_SERVER['HTTP_USER_AGENT'];	
	
	$time=date("l jS \of F Y h:i:s A") ;
	
	
	
	//	$site="HenryMama";
	
		$name=$_COOKIE["name"];
		$section=$_COOKIE["section"];
		
		//echo $name;
		//echo $section;
	

 $sql = "INSERT INTO liyanage (ip,time, browser, name, section) VALUES ('$ip','$time', '$browser','$name' ,'$section')";

// uncomment when debugging
  
            if (mysqli_query($db, $sql)) {
  //             echo "New record created successfully";
            } else {
    //           echo "Error: " . $sql . "" . mysqli_error($db);
            }

	                           
	

	mysqli_close($db);
?>
