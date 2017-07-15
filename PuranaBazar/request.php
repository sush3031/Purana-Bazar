 <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $name=$_POST["name"];
            $mob=$_POST["mob"];
            $email=$_POST["email"];
            $cat=$_POST["category"];
            $req=$_POST["request"];
            date_default_timezone_set("Asia/Kolkata");
            $date = date("d-M-Y") ;
           
            $user='root';
            $pass='';
            $database='kiet_bazar_sample';
            $conn=new mysqli('localhost', $user, $pass, $database) or die("Unable to connect");
            $sql="INSERT INTO request_table (NAME, EMAIL, MOBILE_NO, CATEGORY, REQUEST, DATE_ADD, WHENADDED) VALUES ('".$name."', '".$email."',  '".$mob."', '".$cat."', '".$req."', '".$date."', NOW() )";
            
            //$conn->query($sql);
            if($conn->query($sql)) {
                echo"<script>alert('REQUEST SAVED')</script>";
                echo"<script>window.location='index.php'</script>";
            } 
            else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
            } 

?>