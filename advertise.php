<?php
include_once "config.php";
?>


<?php
$dist=$_POST["districts"];
$type=$_POST["ltype"];
$size=$_POST["size"];
$address=$_POST["address"];
$title=$_POST["title"];
$descrit=$_POST["description"];
$price=$_POST["price"];
$name=$_POST["name"];
$pno=$_POST["pno"];
$email=$_POST["email"];

$sql = "INSERT INTO advertisement(Sequence, district, ltype, size, address, title, description, price, ownerName, ownerPno, email) VALUES ('','$dist','$type','$size','$address','$title','$descrit','$price','$name','$pno','$email')";

if(mysqli_query($conn , $sql)){
	echo "Your advertisement details connected sucessfully!!!";
}
else{
	echo "<script>alert('Register not successed')</script>";
}
mysqli_close($conn);
?>