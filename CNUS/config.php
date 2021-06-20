<?php
$servername="localhost";
$username="root";
$password="";
$dbname="luckyland";

//create a connection
 $connn= new mysqli($servername,$username,$password,$dbname);

 //check connection
 if($connn->connect_error)
 {
     die("The connection was failed :".$connn->connect_error);

 }
 echo "The connection was succesful";



?>