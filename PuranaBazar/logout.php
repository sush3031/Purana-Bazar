<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        if(isset($_SESSION["name"])){
            session_destroy();
            echo "<script>alert('You are Logged out successfully')</script>";
            echo"<script> window.location='index.php'</script>";
            exit();
        }
        ?>
    </body>
</html>
