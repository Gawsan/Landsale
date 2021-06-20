<?php
include_once "config.php";
?>



<?php
$uid = $_POST["f5"];
$fname = $_POST["f1"];
$lname = $_POST["f2"];
$email = $_POST["f3"];
$pno = $_POST["f4"];
$pwd = $_POST["f6"];


$sql ="INSERT INTO customer(Sequence, Customer_Id, Customer_Name, Customer_surename, email, Customer_pno, Customer_password) VALUES ('','$uid','$fname','$lname','$email','$pno','$pwd')";


if(mysqli_query($conn , $sql )) {
	echo " customer details registered sucessfully!!";
}
else{		
	echo "<script>alert('Register not successed')</script>";
}

?>

<?php
$uid = $_POST["f5"];
$pwd = $_POST["f6"];

$sql ="INSERT INTO login(Sequence, User_Id, Password) VALUES ('','$uid','$pwd') ";

if(mysqli_query($conn , $sql )) {
	echo " login details registered sucessfully!!";
}
else{		
	echo "<script>alert('Register not successed')</script>";
}

mysqli_close($conn);

?>