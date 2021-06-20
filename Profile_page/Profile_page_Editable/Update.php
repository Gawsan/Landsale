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
    
        <form action="" method="POST">
        
        <strong class="head">User details</strong><br><br>
        
           ID: <input type="text" name="id">
         
         First name: <input type="text" name="fname" > 
        
         Last name:<input type="text" name="lname">
         
         Email: <input type="text" name="email">
         
         Phone number: <input type="text" name="pno">
        
         User name:<input type="text" name="uname">
         
          Password:<input type="text" name="pass" >
        
         
         
            <input type="submit" class="btn1" name="update">
         
        </form>

    </div>  
         
    

    
    
</body>
</html>
<?php
$connection=mysqli_connect("localhost","root","");         ///we can use external file as well like config.php
$db=mysqli_select_db($connection,'user_pro');


if(isset($_POST['update'])){
    $ID=$_POST['id'];
    $query="UPDATE 'user' SET F_name='$_POST[fname]',L_name='$_POST[lname]',Email='$_POST[email]',Pno='$_POST[pno]',User_name='$_POST[uname]',Password='$_POST[pass]' where ID='$_POST[id]'";
      $query_run=mysqli_query($connection,$query);

      if($query_run){
          echo'<script type="text/javascript">alert("Data has been updated") </script>';
      }
      else{
          echo'<script type="text/javascript">alert("Data not updated") </script>';
      }
}

?>