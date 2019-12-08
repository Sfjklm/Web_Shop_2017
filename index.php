
<?php
session_start();
$pagetitle = "Web Shop";

?>


<!DOCTYPE html>

<html>
<head>
<?php include ('head.php'); ?>
	
</head>
<body>
 
<div id="wrapper">

<div id="header">  <!--header start-->
 <?php include ('header.php');?>
</div>  <!--header end-->


<div id="navigation">  <!--navigacija-->
 <?php include ('navigation.php');?>
</div>  <!--navigacija end-->


<div id="sidebar">  <!--sidebar--> 
 <?php include ('sidebar.php');?>
</div>   





<div id="sredina">   <!--sredina-->

 
<?php  include ('sredina.php'); ?>
 
<?php include ('items/new.php');?>
   


</div>   <!--sredina end--> 

 <div id="footer"> 
<?php include ('footer.php');?>
</div>

 


</div>
 

</body>
</html>

 













 