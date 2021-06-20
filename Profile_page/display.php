
<?php
require 'config.php';
$sql="SELECT ID,F_name,L_name,Email,Pno,User_name from user";
$result=$connec->query($sql);
session_start();

?>
<?php
if(isset($_POST['submit'])){
    header('location:Profile_page\Profile_page_Editable\userprofileEditable.php');
}

?>
<script type="text/javascript">
window.location="Profile_page_Editable\userprofileEditable.php";
</script>



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
        <tr>
        <th colspan="4"><strong>User details</strong></th>
        </tr>
        <?php
         while($row = $result->fetch_assoc()) 
         {

        ?>
        <tr>
            <td colspan="2">ID:<?php echo $row['ID'] ?></td>
        </tr>
         <tr>
         <td>First name:<?php echo $row['F_name'] ?></td>
         <td>Last name:<?php echo $row['L_name'] ?></td>
         </tr>
         <tr>
         <td colspan="2">Email:<?php echo $row['Email'] ?></td>
         </tr>
         <tr>
         <td colspan="2">Phone number:<?php echo $row['Pno'] ?></td>
         </tr>
         <tr>
         <td colspan="2">User name:<?php echo $row['User_name'] ?></td>
         </tr>
        
         <tr>
             <form name="form1" >
             <td><button class="btn" name="update" type="submit" value=""><a href="Profile_page\Profile_page_Editable\userprofileEditable.php">Update</a></button></td>
             </form>
            </tr>
         <?php
         }

         ?>

    </div>  
         
    </table>
    
 </body>
 </html>