<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Index Page</title>
        <link rel="stylesheet" href="css/index_css.css">
        <link rel="stylesheet" href="css/w3.css.css">
        <script src="JS/slider.js"></script>
        
    </head>
     <?php   include 'header.php';?>    
    
    <body style="background-image: url(img/back/brickwall.png);" >
    <!--<body style="background-image: url(img/speaker.jpg);" >-->
    <div style="padding-left:10%;padding-right:10%;" class="row " >
    <?php  $file; ?>
    
    <div style="margin-top:50px;" class="col-md-7" >
	<div class=" container-fluid" style="background-image: url(img/back/cork-wallet.png);    padding-left:13%;padding-top:3%; padding-bottom:3%;">
        <!--<div class=""  style="background-image: url(img/back/sprinkles.png); padding-left:10%; padding-top:3%; padding-bottom:3%;">-->
        <!--<div class=""  style="background-image: url(img/back/retina_wood.png); padding-left:5%; padding-top:3%; padding-bottom:3%;">-->
        <!--<div class=""   >-->
        
         <div style="margin-bottom:40px;" class="row " >
         <?php $file="COOLER" ;?>   
	 <div class="col-md-3 col-md-offset-0 ">
	  <div class="image">
          <a href="adds.php?par=<?php echo$file ?>" ><img  class="img-responsive"  src= "img/cooler.png" height="80px" width="80px" alt="cooler"></a><br>
          <a style="color:black;padding-left:10px;" href="">COOLER</a>          
        </div>
        </div>
	<?php $file="BOOKS" ;?>	
        <div class="col-md-3 col-md-offset-1 ">
	  <div  class="image">
        <a href="adds.php?par=<?php echo$file ?>" >  <img  class=" img-responsive" src= "img/book.png" height="80px" width="80px" alt="books"></a><br>
        <a style="color:black;padding-left:18px;" href="">BOOKS</a>          
        </div>
       </div>
        <?php $file="MATTRESS" ;?>
       <div class="col-md-3 col-md-offset-1">
	  <div  class="image">
         <a href="adds.php?par=<?php echo$file ?>" > <img  class=" img-responsive" src= "img/mattress.png" height="80px" width="80px" alt="imattress.png"></a><br>
        <a style="color:black;padding-left:6px;" href="">MATTRESS</a>          
        </div>
       </div>
            
         </div><br><br>
     <div class=" row">
    <?php $file="MOBILES AND ACCESSORIES" ;?>    
     <div class="col-md-3 col-md-offset-0">
	  <div class="image">
         <a href="adds.php?par=<?php echo$file ?>" > <img  class="img-responsive" src= "img/mob.png" height="80px" width="80px" alt="cooler"></a><br>
        <a style="color:black;padding-left:15px;" href="">MOBILE ACCESSORIES</a>       
        </div>
     </div>
         <?php $file="ELECTRONICS AND ACCESSORIES" ;?>	
     <div class="col-md-3 col-md-offset-1 ">
	  <div  class="image">
              <a href="adds.php?par=<?php echo$file ?>" > <img  class="img-responsivel" src= "img/speakers1.png" height="80px" width="80px" alt="books"></a><br><br>
        <a style="color:black;padding-left:5px;" href="">ELECTRONIC ACCESSORIES</a>        
        </div>
     </div>
     <?php $file="OTHERS" ;?>    
     <div class="col-md-3 col-md-offset-1">
            <div  class="image">
        <a href="adds.php?par=<?php echo$file ?>" >  <img  class="img-responsive" src= "img/other.png" height="80px" width="80px" alt="imattress.png"></a><br>
       <a style="color:black;padding-left:18px;" href="">OTHERS</a>         
        </div>  
    </div>
         
     </div>
     </div>
    </div>
        <!--SLIDER-->
        
     <div class="col-md-3 col-md-offset-2">
     <div class="">
         <br><br><br><br>     
             <div>
             <div class="w3-content w3-section"  >
                <table border="0"><tr><td>
                <img class="mySlides w3-animate-fading" src="img/add1.jpg" width="210" height="250">
                <img class="mySlides w3-animate-fading" src="img/add2.jpg" width="210" height="250">
                <img class="mySlides w3-animate-fading" src="img/add3.jpg" width="210" height="250">
                <img class="mySlides w3-animate-fading" src="img/add4.jpg" width="210" height="250">
                </td></tr></table>
             </div>
             </div>
             <br><br><br>  
             <div class="image">
                 <img class="img-responsive" src="img/old_things.jpg" width="360" height="100">
             </div>
              
         </div>
     </div>
     </div>
    <br>
   
	</body>
        
         <!--FOOTER-->
        <?php include 'footer.php'; ?>
	</html>