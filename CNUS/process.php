<?php
include_once 'config.php';

?>
<?php

$firstname =$_POST["fname"];
$lastname=$_POST["lname"];
$phonenumber=$_POST["pno"];
$email=$_POST["email"];
$Message=$_POST["tarea"];

$sql="INSERT INTO contact(id,userName,lastName,phoneNo,email,message)values('','$firstname','$lastname','$phonenumber','$email','$Message')";

if(mysqli_query($connn,$sql)){
    echo"<script>alert('Values inserted ')</script>";
    
}else{
    echo"<script>alert('Error inserting data')</script>";
}


mysqli_close($connn);


?>