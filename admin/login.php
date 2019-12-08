<?php
include ('../connectdb.php');
?>

<?php

if(!isset($_POST['username'])||!isset($_POST['password'])){
	die("invalid parameters");

}	
$username = $_POST['username'];
$password = $_POST['password'];  
$username = str_replace("'","",$username);
$username = str_replace("-","",$username);
$password = str_replace("'","",$password);
$password = str_replace("-","",$password);

  
$q = "select * from users where name='$username' and password='$password'";
 
$res = mysqli_query($conn,$q);
$user = mysqli_fetch_object($res);
 

if($user){
	session_start();
	$_SESSION['status']  = 3;
	header("location: index.php"); 

  
 } else {
	echo "Invalid user";
}


	


 