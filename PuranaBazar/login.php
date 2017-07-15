<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/newLogIn.css">
       
       
    </head>
    <?php include 'header.php';?>
    <body style="background-image: url(img/back/brickwall.png);">
         <center><h3><font color="blue"><u>Log In</u></font></h3></center>
            <div style="padding-left:17%;padding-right:10%;">
            <?php 
            if( $_SERVER["REQUEST_METHOD"] == "POST" )
            {
                $email = $_POST["mail"];
                $password = $_POST["password"];
            
                $user = "root";
                $pass = '';
                $database = "kiet_bazar_sample";
                $conn = new mysqli('localhost', $user, $pass, $database) or die ("Unable to Connect");
        
                $sql = "SELECT * FROM register_table";
                $result=$conn->query($sql);
                $flag = 0;
                while($row=$result->fetch_assoc())
                {
                    $email_tab=$row["EMAIL"];
                    $name=$row["NAME"];
                    $pass_tab=$row["PASSWORD"];
                    if(strcmp( $email, $email_tab) == 0){
                        if( strcmp($password, $pass_tab) == 0){
                            $_SESSION["name"]=$name;
                            $_SESSION["email"]=$email;
                            $flag = 1;
                            //echo"<font color='green' size='4'> Welcome </font>";
                            echo "<script>alert('You are Log in successfully')</script>";
                            echo"<script>window.location='index.php'</script>";
                        }
                     }
                }
                if($flag == 0){
                     echo"<font color='red' size='4'> Wrong Combination of Email and Password </font>";
                }
             }
            ?>
	     
      
       <br>
        <div class="container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST" autocomplete="on" name="login" onsubmit="return validate()" class="form-horizontal col-md-4 col-md-offset-3" style="background-image: url(img/back/cork-wallet.png);" id="formlog" >
                <br><br>
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-4 control-label" id="mail">Email:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="mail" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-md-4 control-label">Password:</label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-5">
                        <div class="checkbox">
                            <label>
                              <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
              </div>
                  <div class="form-group">
                        <div class="col-md-offset-3 col-md-7">
                              <div id="logid" onmouseover="this.style.background='lightblue';" onmouseout="this.style.background='lightgray';">
                                  <center> <input type="submit" class="btn-primary" value="Log In" /> </center>
                              </div>
                        </div>
                    </div>
              <div class="form-group">
                  <a href="https://www.google.co.in" class="none" onmouseover="style.color='red'" onmouseout="style.color='blue'"><label class="col-md-5 col-xs-8 col-md-offset-1 control-label">Unable to Login</label></a>
                  <a href="register.php" class="none" onmouseover="style.color='red'" onmouseout="style.color='blue'"><label class="col-md-3 col-xs-3 col-md-offset-3 control-label">Register</label></a>
              </div>
              <div class="form-group">
                  <a href="#" class="none" onmouseover="style.color='red'" onmouseout="style.color='blue'"><label class="col-md-8 col-xs-12 col-md-offset-2 control-label">LogIn With Phone & OTP</label></a>
              </div>
        </form>
        </div>
        
        <br><br>
        
        <div class="container">
            <div class="col-md-4 col-md-offset-3" style="background-image: url(img/back/restaurant.png);" id="bot">
                <center><label>Log In using your Facebook account</label></center>
                    <div class="col-md-offset-3 col-md-6">
                        <div id="concfb" onmouseover="this.style.background='lightblue';" onmouseout="this.style.background='lightgray';"><a href="www.facebook.com" class="none"><font id="f">facebook</font></a></div>
                    </div>
            </div> 
        </div>
        <br><br>
        
        <div class="container">
            <div class="col-md-4 col-xs-12 col-md-offset-3">
                <font style="color:black;">By Logging in , you accept our</font> <a id="none" href="#" onmouseover="style.color='red'" onmouseout="style.color='blue'">Terms & Conditions</a>
            </div>
        </div><br>
		
    </div>
    </body>
    <?php include 'footer.php';?>
</html>
