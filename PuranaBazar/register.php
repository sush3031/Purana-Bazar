<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/newregister.css">
    <title>Register </title>
</head>
<?php include 'header.php';?>
<body style="background-image: url(img/back/brickwall.png);">


   
    <?php
    if( $_SERVER["REQUEST_METHOD"] == "POST" )
    {
        $email = $_POST["phone&mail"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $r_password = $_POST["repeat_password"];
        //echo $name;
        if(strcmp($password, $r_password) != 0){
            echo"<font color='red' size='5'> <center>Password should be same </center></font>";
            //echo"<script>window.location='register.php'</script>";
        }
        else{
            
        $user = "root";
        $pass = '';
        $database = "kiet_bazar_sample";
        $conn = new mysqli('localhost', $user, $pass, $database) or die ("Unable to Connect");
        
        $sql = "INSERT into register_table (EMAIL, NAME, PASSWORD) VALUES ('".$email."', '".$name."', '".$password."')";
       
        if ( $conn->query($sql)){
            //echo "New record created successfully";
            echo"<script>alert('DETAILS SAVED')</script>";
            echo"<script>window.location='login.php'</script>";
        } 
        else 
        {
            echo"<font color='red' size='5'> <center>User Already Registered </center></font>";
            //echo"<script>alert('User Already Registered')</script>";
            //echo"<script>window.location='#'</script>";
        }
        }  
    }
    
    ?>    
        
          <div style="padding-left:17%;padding-right:10%;"> 
        <div class="container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="on" name="register" onsubmit="return validate()" class="form-horizontal col-md-6 col-xs-8 col-md-offset-2 col-xs-offset-1" style="background-image: url(img/back/cork-wallet.png);" id="formRegister" >
                <br>
                <center><h3><font color="blue"><u>Register</u></font></h3></center>
                <br><br>
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-4 control-label" id="mail">Email:</label>
                        <div class="col-md-8">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="phone&mail" required autofocus>
                        </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-4 control-label" id="mail">Name:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="name" name="name" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-4 control-label" id="mail">Password:</label>
                        <div class="col-md-8">
                            <input type="password" class="form-control" id="inputEmail3" placeholder="password" name="password" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-4 control-label" id="mail">Repeat Password:</label>
                        <div class="col-md-8">
                            <input type="password" class="form-control" id="inputEmail3" placeholder="repeat password" name="repeat_password" required>
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-10">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox"> By registering in app , you accept our <a id="none" href="#" onmouseover="style.color='red'" onmouseout="style.color='blue'">Terms & Conditions</a>
                        </label>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                 <div class="col-md-4 col-md-offset-4">
                     <input type="submit" class="styled-button-8" value="Register" onmouseover="this.style.background='blue';" onmouseout="this.style.background='#5B74A8';"/> 
                 </div>
            </div>
            </form>
    </div>
	<br>
        </div>
</body>
<?php include 'footer.php';?>
</html>