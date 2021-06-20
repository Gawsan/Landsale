<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stytable.css">
    <title>User profile</title>
</head>
<body>
<div class="tbl">
    <table class="table"  >
        <form action="" method="POST">
        <tr>
        <th colspan="4"><strong>User details</strong></th>
        </tr>
        <tr>
            <td>ID: <input type="text" name="id"> </td>
            </tr>
         <tr>
         <td>First name: <input type="text" name="fname"> </td>
         </tr>
         <td>Last name:<input type="text" name="lname"></td>
         </tr>
         <tr>
         <td colspan="2">Email: <input type="text" name="email"></td>
         </tr>
         <tr>
         <td colspan="2">Phone number: <input type="text" name="pno" ></td>
         </tr>
         <tr>
         <td colspan="2">User name:<input type="text" name="uname"></td>
         </tr>
         <tr>
         <td colspan="2">Password:<input type="text"  name="pass"></td>
         </tr>
         <tr>
         <td colspan="2"></td>
         </tr>
         <tr>
             <td><input class="btn1" name="submit" type="submit"></input></td>
         </tr>
        </form>

    </div>  
         
    </table>

    
    
</body>
</html>
<?php
$connection=mysqli_connect("localhost","root","",);
$db=mysqli_select_db($connection,"user_pro");

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $query="UPDATE user SET F_name='$_POST[fname]',L_name='$_POST[lname]',Email='$_POST[email]',Pno='$_POST[pno]',User_name='$_POST[uname]',Password='$_POST[pass]' WHERE id='$_POST[id]' ";
    $query_run=mysqli_query($connection,$query);
   

    if($query_run){
        echo '<script type=text/javascript>alert("DATA UPDATED") </script>';
    }else{
        echo '<script type=text/javascript>alert("DATA NOT UPDATED") </script>';
    }


}
?>