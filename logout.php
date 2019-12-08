<?php
 
    session_start();
    unset($_SESSION['user']);
    session_destroy();
    unset($_COOKIE['user']);

 
?>

<?php
session_start();
$pagetitle = "Log out";

?>


<!DOCTYPE html>

<html>
 <?php include ('head.php'); ?>
<body>
 
	

<div id="wrapper">

<div id="header">  <!--header start-->
 <?php include ('header.php');?>
</div>  <!--header end-->


<div id="navigation">  <!--navigacija-->
 <?php include ('navigation.php');?>
</div>  <!--navigacija end-->
 



 <div id="forma">
 <?php 
if (!isset($_SESSION['user'])) {

 echo "<h1><strong>U HAVE BEEN LOGGED OUT</strong></h1>";
 ?>
 <script>setTimeout(function () {
   window.location.href= 'index.php';  

},1200);</script>
   
<?php
 }else {
  die;
 };

?>



 
 </div> <!--forma napraviti kasnije-->


 
 

<div id="footer"> 
 <?php include ('footer.php');?>
 </div>

</div>
 

</body>
</html>
 