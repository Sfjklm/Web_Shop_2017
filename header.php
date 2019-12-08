 


<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">


<div id="logo">
<a href="index.php"><img src="img/logo.png" alt="logo"></a> <!--logo shopa-->
</div>

   <!--social-->   
<div id="social">
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
 
 <div class="text-center center-block"> 
         
 <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
 <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
 <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
 <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>
   
   <!--social-->    
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">           
</div>
 
 
 
<?php 

if (!isset($_SESSION['user']['name'])) {
     
?>


<div id="login"> 

<a href="login.php?status=login" class="btn btn-primary btn-default">
<span class="glyphicon glyphicon-log-in"></span> Login </a>       
<a href="login.php?status=register" class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-user"></span> Register</a>
</div>

 <?php }else {

  ?> 
<a class="logout" href="logout.php"><button>LOG OUT</button></a>
 <?php } ?> 


  <div id="usermsg">
 <?php
 if (isset($_SESSION['user'])) {
  

  $hour = date('G');
  $user = $_SESSION['user']['name'];

if ($hour < 12) {
  echo "Good Morning"." ".$user;
}
if ($hour > 11 and $hour < 18) {
  echo "Good Afternoon"." ".$user;
}
if ($hour > 18) {
  echo "Good night"." ".$user;
} 
}
?>
 
<?php if (isset($_SESSION['user'])){
  ?>
<br>
<a href="inc/shopping_cart.php">Your cart</a>

<?php  	} ?>   


</div>




 