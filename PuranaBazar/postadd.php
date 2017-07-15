<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Post Your Add Here</title>
   
    <script type="text/javascript" src="JS/validation.js"></script>
</head>
<?php include 'header.php';?>
<body style="background-image: url(img/back/brickwall.png);">
<!--<body style="background-image: url(img/speaker.jpg);" >-->
    <div style="padding-left:10%;padding-right:10%;" >
   <?php 
           
            if($_SERVER["REQUEST_METHOD"]=="POST"){
            $target_dir = "C:/xampp/htdocs/PuranaBazar/upload/";
            
            $target_file1 = $target_dir .basename($_FILES["fileChooser"]["name"]);
            $target_file2 = $target_dir .basename($_FILES["fileChooser1"]["name"]);
            $target_file3 = $target_dir .basename($_FILES["fileChooser2"]["name"]);
            move_uploaded_file($_FILES["fileChooser"]["tmp_name"], $target_file1);
            move_uploaded_file($_FILES["fileChooser1"]["tmp_name"], $target_file2);
            move_uploaded_file($_FILES["fileChooser2"]["tmp_name"], $target_file3);
            // image save in DB
            $image1=basename( $_FILES["fileChooser"]["name"]); // used to store the filename in a variable
            $image2=basename( $_FILES["fileChooser1"]["name"]);
            $image3=basename( $_FILES["fileChooser2"]["name"]);
            
            $tag=$_POST["tag"];
            $name=$_POST["name"];
            $fsp=$_POST["fsp"];
            $mob=$_POST["mobNo"];
            $email=$_POST["email"];
            $hostel=$_POST["hostel"];
            $room=$_POST["room"];
            $category=$_POST["category"];
            $price=$_POST["price"];
            $description=$_POST["description"];
            date_default_timezone_set("Asia/Kolkata");
            $date = date("d-M-Y") ;
           
            $user='root';
            $pass='';
            $database='kiet_bazar_sample';
            $conn=new mysqli('localhost', $user, $pass, $database) or die("Unable to connect");
            $sql="INSERT INTO postadd_table(EMAIL, TAGLINE, NAME, FSP, ROOM_NO, MOBILE_NO, HOSTEL, CATEGORY, PRICE, PIC1, PIC2, PIC3, DESCRIPTION, DATE_ADD, WHENADDED) VALUES ('".$email."', '".$tag."', '".$name."', '".$fsp."', '".$room."', '".$mob."', '".$hostel."', '".$category."', '".$price."', '".$image1."' , '".$image2."' , '".$image3."', '".$description."', '".$date."', NOW() )";
            
            //$conn->query($sql);
            if($conn->query($sql)) {
                echo"<script>alert('DETAILS SAVED')</script>";
            } 
            else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
            } 
             ?> 
    
    <div style="padding-left:10%;padding-right:10%;" class="container">
           <div class="col-md-10 col-xs-12 col-md-offset-1" style="background-image: url(img/back/cork-wallet.png);">
           <br>
                <center><h3><font color="blue"><u>POST YOUR ADD</u></font></h3></center>
                <br><br>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-horizontal col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1" method="post" enctype="multipart/form-data" onsubmit="return checkValidation()" autocomplete="on" name="postadd" novalidate="novalidate">
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-label" id="lb">TAG-LINE *:</label>
                        <div class="col-md-6">
                            <input type="test" class="form-control" name="tag" placeholder="Tag line for add" ng-model="tag" ng-minlength="10" ng-maxlength="100" size="30" autofocus="on" required>
                        </div>
                        <br><br>
                        <div class="col-md-6 col-md-offset-3">
                            <span style="color:red" ng-show="postadd.tag.$dirty && postadd.tag.$invalid">
                            <span ng-show="postadd.tag.$error.required">Tag Line is required.</span>
                            <span ng-show="postadd.tag.$error.minlength">Tag Line Is Too Sort.</span>
                            <span ng-show="postadd.tag.$error.maxlength">Tag Line Is Too Long.</span>
                            </span>                            
                        </div>
                </div>
                
                <br>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-label" id="lb">NAME *:</label>
                        <div class="col-md-6">
                            <input type="test" class="form-control" name="name" ng-model="name" pattern="[a-zA-Z\s]{1,50}" placeholder="Type Name Here" required>
                        </div>
                        <br><br>
                        <div class="col-md-6 col-md-offset-3">
                            <span style="color:red" ng-show="postadd.name.$dirty && postadd.name.$invalid">
                            <span ng-show="postadd.name.$error.required">Name is required.</span>
                            <span ng-show="postadd.name.$error.pattern">Please enter a valid name.</span>
                            </span>                            
                        </div>
                </div>
                
                <br>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-label" id="lb">FOR SECURITY PURPOSE *:</label>
                    <label class="radio-inline">
                        <input type="radio" name="fsp" id="inlineRadio1" value="Show Name"> Show Name
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="fsp" id="inlineRadio2" value="Not Show Name"> Not Show Name
                    </label>
                </div>
                
                <br>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-label" id="lb">MOBILE NO *:</label>
                        <div class="col-md-6">
                            <input type="test" class="form-control" placeholder="Type 10 digit mobile number" name="mobNo" ng-model="mobNo" pattern="[1-9]{1}[0-9]{9}" required>
                        </div>
                        <br><br>
                        <div class="col-md-6 col-md-offset-3">
                            <span style="color:red" ng-show="postadd.mobNo.$dirty && postadd.mobNo.$invalid">
                            <span ng-show="postadd.mobNo.$error.required">Number is required.</span>
                            <span ng-show="postadd.mobNo.$error.pattern">Invalid number.</span>
                            </span>                            
                        </div>
                </div>
                
                <br>
                
                 <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-label" id="lb">E-MAIL ID *:</label>
                        <div class="col-md-6">
                            <input type="test" class="form-control" placeholder="Type Id here" name="email" ng-model="email" ng-pattern="/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z]{2,4}$/" required/>
                        </div>
                        <br><br>
                        <div class="col-md-6 col-md-offset-3">
                            <span style="color:red" ng-show="postadd.email.$dirty && postadd.email.$invalid">
                            <span ng-show="postadd.email.$error.required">Email is required.</span>
                            <span ng-show="postadd.email.$error.pattern">Invalid Email id.</span>
                            </span>                            
                        </div>
                 </div>
                 
                 <br>
                 
                 <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-label" id="lb">HOSTEL *:</label>
                        <div class="col-md-6">
                            <select name="hostel" class="form-control">
                                  <option value="-1" disabled="on" selected>--------------- Select ---------------</option>
                                  <option ng-value="">GARGI</option>
                                  <option ng-value="">SARASWATI</option>
                                  <option ng-value="">TAGORE</option>
                                  <option ng-value="">VIVEKANAND</option>
                                  <option ng-value="">ARYABHATT</option>
                                  <option ng-value="">ATITHI</option>
                                  <option ng-value="">CHANDRAGUPTA</option>
                                  <option ng-value="">OTHERS</option>
                            </select>
                        </div>
                 </div>
                 
                 <br>
                 
                 <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-label" id="lb">ROOM NO *:</label>
                        <div class="col-md-6">
                            <input type="test" class="form-control" placeholder="Type Room.NO" name="room">
                        </div>
                 </div>
                
                <br>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-label" id="lb">CATEGORY *:</label>
                        <div class="col-md-6">
                            <select name="category" class="form-control" required>
                                  <option value="-1" disabled="on" selected>--------------- Select ---------------</option>
                                  <option value="COOLER">COOLER</option>
                                  <option value="BOOKS">BOOKS</option>
                                  <option value="MATTRESS">MATTRESS</option>
                                  <option value="MOBILES AND ACCESSORIES">MOBILE & ACCESSORIES</option>
                                  <option value="ELECTRONICS AND ACCESSORIES">ELECTRONIC & ACCESSORIES</option>
                                  <option value="OTHERS">OTHERS</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-xs-12">
                             <img src="img/cat_cooler.png" width="30" height="30">
                             <img src="img/cat_bed.png" width="30" height="30">
                             <img src="img/cat_mob.png" width="30" height="30">
                             <img src="img/cat_book.png" width="30" height="30">   
                        </div>
                 </div>
                 
                 <br>
                 
                 <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-label" id="lb">PRICE *:</label>
                        <div class="col-md-6">
                            <input type="test" class="form-control" placeholder="Price of product" name="price" ng-model="price" pattern="[1-9]{1}[0-9]{0,4}" required>
                        </div>
                        <br><br>
                        <div class="col-md-6 col-md-offset-3">
                            <span style="color:red" ng-show="postadd.price.$dirty && postadd.price.$invalid">
                            <span ng-show="postadd.price.$error.required">Price is required.</span>
                            <span ng-show="postadd.price.$error.pattern">Invalid Price.</span>
                            </span>                            
                        </div>
                </div>
                 
<!--                 <br>-->
                 
                 <div class="form-group">
                     <label for="inputEmail3" class="col-md-3 control-label" id="lb">UPLOAD 2 PICS *:</label>
                     <div class="col-md-6 col-xs-12">
                         <input type="file" name="fileChooser" id="fileChooser" accept="image/*" onchange="readURL(this);" required/>
                         <input type="file" name="fileChooser1" id="fileChooser1" accept="image/*" onchange="readURL1(this)" required/>
                         <input type="file" name="fileChooser2" id="fileChooser2" accept="image/*" onchange="readURL2(this)"/>
                     </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-label" id="lb"></label>
                    <div class="col-md-9">
                            <div class="col-md-3 col-xs-12"><img src="#" id="blah" alt="Your 1st Image" width="100px" height="70px"></div>
                            <div class="col-md-3 col-xs-12"><img src="#" id="blah1" alt="Your 2nd Image" width="100px" height="70px"></div>
                            <div class="col-md-3 col-xs-12"><img src="#" id="blah2" alt="Your 3rd Image" width="100px" height="70px"></div>
                    </div>
                </div>
                
                <br>
                
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-3 control-label" id="lb">Description *:</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="description" rows="4" ng-model="description" placeholder="Include The Brand Model Age any Any Other details if required..." ng-minlength="10" ng-maxlength="2000" required></textarea>
                        </div>
                        <br><br>
                        <div class="col-md-6 col-md-offset-3">
                            <span style="color:red" ng-show="postadd.description.$dirty && postadd.description.$invalid">
                            <span ng-show="postadd.description.$error.required">Description is required.</span>
                            <span ng-show="postadd.description.$error.minlength">Description Is Too Sort.</span>
                            <span ng-show="postadd.description.$error.maxlength">Description Is Too Long.</span>
                            </span>                            
                        </div>
                </div>
                
                <br>
                
                <div class="col-md-8 col-md-offset-2">
                    By clicking 'Submit' you agree to our <a href="#" onmouseover="style.color='red'" onmouseout="style.color='blue'">Terms & Conditions</a>
                </div>
                
                <br><br><br>
                
                <div class="form-group">
                    <center><input type="submit" id="bt" class="styled-button-8" value="SUBMIT" onmouseover="this.style.background='blue'" onmouseout="this.style.background='#25A6E1'"/></center>
                </div>
                <br><br><br>
            </form>
            </div>
    </div></div>
    <?php include 'footer.php';?>
</body>
</html>