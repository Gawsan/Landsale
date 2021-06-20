<?php
require 'config.php';

$sql="SELECT id,userName,phoneNo,email from contact";
$result=$connec->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledisplay.css">
    <title>Document</title>
</head>
<body>
    <table align="center" border="1px" style="width:600px; line-height=40px;">
    <tr>
        <th colspan="7"> <h2>Customer contact details</h2></th>
    </tr>
    <tr>
        <th>Customer ID</th>
        <th>User Name</th>
        <th>Phone number</th>
        <th>Email</th>

    </tr>
    <?php
    while($row = $result->fetch_assoc()) 
    {
    ?>
    <tr>
     <td><?php echo $row['id'] ?></td>
     <td><?php echo $row['userName'] ?></td>
     <td><?php echo $row['phoneNo']?></td>
     <td><?php echo $row['email']?></td>
    </tr>
    <?php
    }
    ?>
    </table>

    
</body>
</html>