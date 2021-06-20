<?php
$servername="localhost";
$username="root";
$password="";
$db_name="user_pro";

//creating a connection
$connec=new mysqli($servername,$username,$password,$db_name);

///checking the connection
if($connec->connect_error){
    die("The connection has some error".$connec->connect_error);
}
echo"connection was succesful!";




?>