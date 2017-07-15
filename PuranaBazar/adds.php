<!--
To change this template, choose Tools | Templates
and open the template in the editor.
admin : saurav1432
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Show Ad</title>
        <link rel="stylesheet" href="css/adds.css">
        
    </head>
    <?php include 'header_adds.php';?>
    <body ng-app="friendapp" ng-controller="friendctrl"  style="background-image: url(img/back/brickwall.png);">
         <!--header file including search function-->
         <div style="padding-left:10%;padding-right:10%;">
         <!--<div style="background-image: url(img/back/school.png); ">-->
        
      
        <?php
        // put your code here
            $file = $_GET['par'];
            //echo $file;
            $user='root';
            $pass='';
            $database='kiet_bazar_sample';
            $conn=new mysqli('localhost', $user, $pass, $database) or die("Unable to connect");
            //echo("Great work");
            $sql="Select DISTINCT * from postadd_table where CATEGORY='$file' ORDER BY WHENADDED DESC" ;
            $result=$conn->query($sql);
            $emparray = array();
            while($row=$result->fetch_assoc())
            {
                $emparray[] = $row;
                //$pk=$row["PK"];
                //$tag=$row["TAGLINE"];
                //$price =$row["PRICE"];
                $str = json_encode($emparray); // str is JSON object
                //echo $str;
           }
           ?>
           <script>
           app.controller("friendctrl", function($scope){
           $scope.friends= <?php echo $str; ?>;
           })
           
           </script>
           
           <div id="adds_top"  ng-repeat="friend in friends |filter:search"   ' style="background-image: url(img/back/cork-wallet.png);">
           <!--<div id="adds_top" ng-repeat="friend in friends |filter:search" style="background-image: url(img/back/retina_wood.png); ">-->
           <!--<div class="col-md-10 col-xs-12 col-md-offset-1" style="background-image: url(img/back/cork-wallet.png);">-->
           <a href="show_add_modified.php?par=<?php echo'{{friend.PK}}' ?>" class="adds_firsthref">
           
           <table border="0" id="adds_first" onmouseover="this.style.background='lightblue';" onmouseout="this.style.backgroundImage='url(img/back/cork-wallet.png)' ">
           <tr>
           <td class="adds_firstTD"><center><img src="upload/{{friend.PIC1}}" width="150px" height="150px"/></center></td>
           <td class="adds_middleTD">
           <table border="0">
           <tr><td class="adds_trone">{{friend.TAGLINE}}<br><br>
           </h2><font size="2">CATEGORY - {{friend.CATEGORY}}</font></td></tr>
           <tr><td class="adds_trtwo">{{friend.HOSTEL}}</td></tr>
           <tr><td class="adds_trthree">{{friend.DATE_ADD}}</td></tr>
           </table>
           </td>
           <td class="adds_lastTD"><center><img src="img/rupee.png" height="21" width="21">&nbsp;{{friend.PRICE}}</center></td>
           </tr>
           </table>   
           </a>
        </div>
   
         </div>  </div>
    </body>
    <?php include 'footer.php';?>
    
</html>
