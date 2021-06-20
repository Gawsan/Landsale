<?php


$UserID=$_POST['UserID'];
$landtype=$_POST['landtype'];
$landID=$_['landID'];
$password=$_POST['password'];
$email=$_POST['email'];
$phonecode=$_POST['phonecode'];
$phone=$_POST['phone'];

if(!empty($UserID) ||  !empty($landtype)|| !empty($landID)  || !empty($password) || !empty($email) || !empty(phonecode) || !empty($phone)){
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="luckyland";

	//create connection
	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

	if(mysqli_connect_error()){
		die('connect Error('.mysqli_connect_error().')'.mysqli_connect_error());

	}else {
		$SELECT="SELECT email from reservation1 where email=? Limit 1";
		$INSERT="INSERT Into reservation1(UserID,landtype,landID,password,email,phonecode,phone) values(?,?,?,?,?,?,?)";

		//prepare for statement
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->excute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rum=$stmt->num_rows;

		if($rnum==0){
			$stmt->close();

			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("ssssii",$UserID,$landtype,$landID,$password,$email,$phonecode,$phone);
			$stmt->excute();
			echo "your land reserved sucessfully";
		} else{
			echo "someone reserved this land . sorry for the inconvinaice";
		}
		$stmt->close();
		$conn->close();

	}
	
else{
	echo "all field are required";
	die();
}
  



  ?>