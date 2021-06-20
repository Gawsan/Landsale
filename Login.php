

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Assert\Stylesheet\Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>

    <div class="close">
       <a href="index.html"><i class="fa fa-times" aria-hidden="true"></i></a> 

    </div>


    <div class="background">
      
        <div class="content">
            <header>LOGIN</header>
            <form action="forlogin.php" method="POST">
                <div class="box brake">
                    <span class="fa fa-user"></span>
                    <input type="text" placeholder="Username" required name="username">
                    </div>
                    <div class="box brake">
                        <span class="fa fa-lock"></span>
                        <input id="pass" type="password" placeholder="password"class="pasd" required name="password">
                        <span id="hideshow" class="show" onclick="test()">Show</span>
                        </div>
                        <div class="forgot">
                            <a href="#">Forgot password</a>
                        </div>
                        <div class="box brake">
                            
                            <input type="submit" value="LOGIN" name="login">
                            
                        </div>
                            <div class="signup">
                                <a href="Signup.html">sign up now</a>
                            </div>
                </div>
            </form>
        </div>
      </div>
      <script>
       
        function test() {
            var pass = document.getElementById("pass");
            var hideshow = document.getElementById("hideshow");
            if (pass.type=="text") {
                pass.type="password"
                hideshow.innerHTML = "show";
            }
            else {
                pass.type = "text";
                hideshow.innerHTML = "hide";
            }
        }

      </script>


    
    
</body>


</html>


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