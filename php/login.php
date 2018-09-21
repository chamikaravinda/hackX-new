<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "roadxpert";
	
	$name= $_POST['name'];
	$contact = $_POST['contact'];
	$address =$_POST['loc']; 
	$email=$_POST['Email'];
	$pwd=$_POST['Password'];
	
	$cat=$_POST['cat'];
	$prepAddr = str_replace(' ','+',$address);
	$geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
	$output= json_decode($geocode);
	$latitude = $output->results[0]->geometry->location->lat;
	$longitude = $output->results[0]->geometry->location->lng;
	
	echo "latitude - ".$latitude;
	echo "longitude - ".$longitude;
	
	
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO reg(name,contact,lon,lat,email,pwd,cat)
	VALUES ($name,$contact,$longitude,$latitude,$email,$pwd,$cat)";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();


	

	


?>