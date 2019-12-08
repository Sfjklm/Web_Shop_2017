
<?php
session_start();
$pagetitle = 'HOME';

if (!isset($_SESSION['user'])) {
  header('Location: login.php?status=login');
}else{
?>  

 



 
 


<!DOCTYPE html>

<html>
<head>
<head>
<title><?php echo $pagetitle; ?></title>
<link rel="icon" type="" href="img/favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
 
	

<div id="wrapper">

<div id="header">  <!--header start-->


<?php 
  include ('header.php'); 
  ?>








</div>  <!--header end-->


<div id="navigation">  <!--navigacija-->
 <?php include ('navigation.php');?>
</div>  <!--navigacija end-->


<div id="sidebar">  <!--sidebar--> 
 <?php include ('sidebar.php');?>
</div> 

<div id="sredina">   <!--sredina-->
 

 
   <?php  

if (isset($_GET['sc']) and $_GET['sc'] = 1) {
  include ('inc/shopping_cart.php');
}
 

if (isset($_GET['cid']) and isset($_GET['mid'])) {
    include ('inc/proizvod.php');

 }else {


    ?>


    <?php  
    $default_page = (isset($_GET['cid']))?$_GET['cid']:8;  
    $pages = array(
      "1"=>"sneakers.php",
      "2"=>"sale.php",
      "3"=>"tshirts.php",
      "4"=>"search.php",
      "5"=>"wsneakers.php",
      "6"=>"dresses.php",
      "7"=>"wsale.php",
      "8"=>"new.php",
   
    );
    if(isset($pages[$default_page])){
    include "items/" . $pages[$default_page];
    }
    }
    ?> 

</div>

 
 

<div id="footer"> 
 <?php include ('footer.php');?>
 </div>

</div>
 

</body>
</html>


<?php } ?>
 












 