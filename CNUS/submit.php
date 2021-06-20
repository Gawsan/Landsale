<?php

//Linking the configuration file
$con=new mysqli("localhost","root","","agentreq");
// Check connection
		if($con->connect_error){
			die("Connection failed: " . $con->connect_error);
		}
	$aname = $_POST["A-name"];
	$fname = $_POST["F-name"];
	$lname = $_POST["L-name"];
	$uid = $_POST["User-ID"];
	$umail= $_POST["email"];
	$phonenum = $_POST["phone-number"];
	$slectdate = $_POST["date"];
	$services = $_POST["services"];
	$details = $_POST["details"];
	
	$sql= "INSERT INTO agentrqform (Agent_Name,First_name,Last_name,Email,M_number,Selected_Date,Services,Details,User_ID) VALUES ('$aname','$fname','$lname','$umail','$phonenum','$slectdate','$services','$details','$uid')";
	
		if($con->query($sql)){
			echo "<script>alert('Inserted successfully')</script>";
		}
		else{
			echo "Error:". $con->error;
		}
$con->close();

?>

