<?php
require_once 'connection.php';
session_start();

?>



<?php

if(isset($_POST['update']))
{

    $id=$_POST["id"];
    $firstname =$_POST["fname"];
    $lastname=$_POST["lname"];
    $email=$_POST["email"];
    $phonenumber=$_POST["pno"];
    $username=$_POST["uname"];
    $password=$_POST["pass"];
    

    $query="UPDATE user SET F_name='$firstname',L_name='$lastname',Email='$email',Pno='$phonenumber',User_name='$username',Password='$password' WHERE ID='$id'";
    $result=mysqli_query($connec,$query);

    


if($result){
    echo"<script>alert('values were updated')</script>";
    
}else{
    echo"<script>alert('Error inserting data')</script>";
}


mysqli_close($connec);
}

?>