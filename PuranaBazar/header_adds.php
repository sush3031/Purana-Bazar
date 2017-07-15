<!-- admin saurav1432 -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Header Page</title>
        <link rel="stylesheet" href="css/bootstrap1.css">
        <link rel="stylesheet" href="css/search_box.css">
        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="libs/jquery-3.0.0.min.js"></script>
        <script src="libs/bootstrap.min.js"></script>
        <script src="libs/angular.min.js"></script>
        <script src="JS/app.js"></script>
        <script src="JS/controller.js"></script>
       
    </head>
   
 <body ng-app="friendapp" >

<?php session_start(); if(isset($_SESSION["name"])) {?> 
    <!--navigation starts-->
    <nav  class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div style="padding-left:0px;padding-right:0px;"   class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
     
            </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li ><a  style="padding-left:120px;font-size:15px"  href="index.php"  >Home<span class="sr-only" ></span></a></li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Make Request</a></li>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Make A Request For Item</h4>
                </div>
                <form action="request.php" name="request" method="post">    
                <div class="modal-body">
                
            
                <div class="form-group">
                <label for="recipient-name" class="control-label">Name:</label>
                <input type="text"  class="form-control" id="recipient-name" required="" name="name">
                </div>
            
                <div class="form-group">
                <label for="message-text" class="control-label">Email:</label>
                <input type="email" class="form-control" id="recipient-email" required="" name="email">
                </div>
            
                <div class="form-group">
                <label for="message-text" class="control-label">Contact No.:</label>
                <input type="text" maxlength="10"  pattern="[0-9]{10}"class="form-control" id="recipient-mob" required="" name="mob">
                </div>
                <div class="form-group">
                <label for="message-text" class="control-label">Category:</label>
                <!--<input type="text" maxlength="10"  pattern="[0-9]{10}"class="form-control" id="recipient-mob" required="">-->
                <select name="category" class="form-control" required="">
                                  <option value="-1" disabled="on" selected>--------------- Select ---------------</option>
                                  <option value="COOLER">COOLER</option>
                                  <option value="BOOKS">BOOKS</option>
                                  <option value="MATTRESS">MATTRESS</option>
                                  <option value="MOBILES AND ACCESSORIES">MOBILE & ACCESSORIES</option>
                                  <option value="ELECTRONICS AND ACCESSORIES">ELECTRONIC & ACCESSORIES</option>
                                  <option value="OTHERS">OTHERS</option>
                </select>
                </div>
                <div class="form-group">
                <label for="message-text" class="control-label">Request:</label>
                <textarea class="form-control" id="message-text" required="" name="request"></textarea>
                </div>
                </div>
                <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" value="Send Request" class="btn btn-primary">
                </div>
                </form>
                </div>
                </div>
                </div>

            <li style="font-size:15px" ><a href="">Contact<span class="sr-only" >(current)</span></a></li>
            <li><a style="font-size:15px" href="#">Feedback</a></li>
            
        </ul>
        <form class="navbar-form navbar-left">
        </form>
        <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
            <a style="font-size:15px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Hello  ".$_SESSION["name"];?><span class="caret"></span></a>
            <ul class="dropdown-menu" style="font-size:15px">
            <li><a href="history.php">History</a></li>
            <li><a href="logout.php">Logout</a></li>
            <!--<li><a href="#">Something else here</a></li>-->
            <!--<li role="separator" class="divider"></li>-->
            <!--<li><a href="#">Separated link</a></li>-->
            </ul>
            </li>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
<!--navigation ends-->
    
    
 <div style="padding-left:10%;padding-right:10%;" >
     <div  class="row">
        <div class="col-md-2">
            <td> <a href="index.php"><img src="img/site3.png" height="90" width="120"></a></td>
            <td width="60"></td>
        </div>
             
        <div class="col-md-4 col-md-offset-0">
            <td ><br><br><center><font size="7" color="blue">PURANA BAZAR</font></center>
            <center><font size="4" color="red"> A Platform For Selling of Old Things</font></center>
            </td>
        </div>
             
        <div class="col-md-4 col-md-offset-2">
<!--            <div class="right">-->
            <!--<a href="login.php"><button class="dropbtn" type="submit" >MY ACCOUNT </button></a>-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="postadd.php"><button class="styled-button-1"  >SUBMIT A FREE AD</button></a>
            <!--</div>-->
        </div>
 </div>
<div class="row">
        <div class="col-lg-4 col-md-offset-8">
            <form><input type="text" ng-model ="search" id="search" name="search1" placeholder="Search.."></form>
            <!--</div>-->
        </div>
            <!--<br><br><br><br><br><br><br><br>-->
          <div class="col-md-12">
            <div class="h-divider"> </div>
          </div>
            
     </div>
 </div>
    <?php } else{?>
    <!--navigation starts-->
    
  <nav  class="navbar navbar-default">
  <div  class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div style="padding-left:0px;padding-right:0px;"   class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  <li ><a  style="padding-left:120px;font-size:15px"  href="index.php">Home<span class="sr-only" ></span></a></li>
        
        <li><a href=""  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Make Request</a></li>
           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Make A Request For Item</h4>
                </div>
                <form action="request.php" name="request" method="post">    
                <div class="modal-body">
                
            
                <div class="form-group">
                <label for="recipient-name" class="control-label">Name:</label>
                <input type="text"  class="form-control" id="recipient-name" required="" name="name">
                </div>
            
                <div class="form-group">
                <label for="message-text" class="control-label">Email:</label>
                <input type="email" class="form-control" id="recipient-email" required="" name="email">
                </div>
            
                <div class="form-group">
                <label for="message-text" class="control-label">Contact No.:</label>
                <input type="text" maxlength="10"  pattern="[0-9]{10}"class="form-control" id="recipient-mob" required="" name="mob">
                </div>
                <div class="form-group">
                <label for="message-text" class="control-label">Category:</label>
                <!--<input type="text" maxlength="10"  pattern="[0-9]{10}"class="form-control" id="recipient-mob" required="">-->
                <select name="category" class="form-control" required="">
                                  <option value="-1" disabled="on" selected>--------------- Select ---------------</option>
                                  <option value="COOLER">COOLER</option>
                                  <option value="BOOKS">BOOKS</option>
                                  <option value="MATTRESS">MATTRESS</option>
                                  <option value="MOBILES AND ACCESSORIES">MOBILE & ACCESSORIES</option>
                                  <option value="ELECTRONICS AND ACCESSORIES">ELECTRONIC & ACCESSORIES</option>
                                  <option value="OTHERS">OTHERS</option>
                </select>
                </div>
                <div class="form-group">
                <label for="message-text" class="control-label">Request:</label>
                <textarea class="form-control" id="message-text" required="" name="request"></textarea>
                </div>
                </div>
                <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" value="Send Request" class="btn btn-primary">
                </div>
                </form>
                </div>
                </div>
                </div>


        <li style="font-size:15px" ><a href="">Contact<span class="sr-only" >(current)</span></a></li>
        <li><a style="font-size:15px" href="#">Feedback</a></li>
      </ul>
      <form class="navbar-form navbar-left">
       
        
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a style="font-size:15px" href="register.php">Register</a></li>
        <li><a style="font-size:15px" href="login.php">Login</a></li>
<!--        <li class="dropdown">
          <a style="font-size:15px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
          <ul class="dropdown-menu" style="font-size:15px">
            <li><a href="history.php">History</a></li>
            <li><a href="#">Logout</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            </ul>
        </li>-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--navigation ends-->
    
  
         <div style="padding-left:10%;padding-right:10%;" >
     <div  class="row">
        <div class="col-md-2">
            <td> <a href="index.php"><img src="img/site3.png" height="90" width="120"></a></td>
            <td width="60"></td>
        </div>
             
        <div class="col-md-4 col-md-offset-0">
            <td ><br><br><center><font size="7" color="blue">PURANA BAZAR</font></center>
            <center><font size="4" color="red"> A Platform For Selling of Old Things</font></center>
            </td>
        </div>
             
        <div class="col-md-4 col-md-offset-2">
<!--            <div class="right">-->
            <!--<a href="login.php"><button class="dropbtn" type="submit" >MY ACCOUNT </button></a>-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="postadd.php"><button class="styled-button-1"  >SUBMIT A FREE AD</button></a>
            <!--</div>-->
        </div>
 </div>
<div class="row">
        <div class="col-lg-4 col-md-offset-8">
            <form><input type="text" ng-model ="search" id="search" name="search" placeholder="Search.."></form>
            <!--</div>-->
        </div>
            <!--<br><br><br><br><br><br><br><br>-->
          <div class="col-md-12">
            <div class="h-divider"> </div>
          </div>
            
     </div>
 </div>
     
        
    <?php } ?>
    </body>
</html>
