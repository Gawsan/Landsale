<?php
$servername="localhost";
$username="root";
$password="";
$dbname="db_contact"; 

///creating connection

$connec=new mysqli($servername,$username,$password,$dbname);


//checking connection
if($connec->connect_error)
{
    die("The coennection was failed: ".$connec->connect_error);
}
echo"The connection was succesfull!";

?>