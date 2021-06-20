<!--for login-->

<?php

include_once('config.php');

?>


<?php
    if(isset($_POST['login']))
    {
        session_start();	
        
        
        $success="";
        $error="";

        if(empty($_POST['username']) || empty($_POST['password']))
            {
	            $error="Please enter all the details !!";
            }
        
        else
        {
                $name=$_POST['username'];
                $password=$_POST['password'];	

                $sql="SELECT * FROM login  WHERE User_Id='$name' AND Password='$password'";

                $result=mysqli_query($conn,$sql) or die("Some thing wrong in your query");

                if(!$row = mysqli_fetch_assoc($result))

                    {   
                        echo"<script>if (confirm('Your password or user name  is wrong do you like to try again')){
                            window.location.href ='Login.php';
                        }
                        else{
                            window.location.href ='index.html'

                        }
                            </script>";
                        $error = "You have entered wrong Email or password";
                    }
                 else
                    {	                   
                        $_SESSION['name']=$name;
			                                
                            echo "<script>alert('you logged in')</script>";
                            header("location:afterlogin.php");
                             $success="Login Successful !!! <br> Welcome !!";
                             setcookie("name","");
                             setcookie("password","");                
                    }
        }
        
    }
?>
 <?php
                if(isset($error))
                {
                    echo $error;
                }
                if(isset($success))
                {
                    echo $success;
                }


            ?>