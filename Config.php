<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="luckyland";


// Create connection conn is conection object
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    //connection failed 
die("Connection failed: " . $conn->connect_error);
}

?>