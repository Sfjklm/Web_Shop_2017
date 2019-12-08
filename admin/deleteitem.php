 <?php 
session_start();
include("../connectdb.php");
if(!isset($_SESSION['status'])||$_SESSION['status']!=3){
	header("location: index.html");
 
 }
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style2.css">
<form  method="post" action="unos.php" enctype="multipart/form-data" >
<table align="center">
 <div id="unos">
<h1><strong>DELETE ITEMS</strong></h1>

<tr>
<td><span class="style3">Category</span></td>
<td>
<select name="cat" id="cat" onChange="showUser(this.value)">
<option value=''>Select One</option><?php
$q=mysqli_query( $conn,"SELECT * FROM category ");
while($n=mysqli_fetch_array($q)){
echo "<option value=".$n['id_cat'].">".$n['category']."</option>";
}
?>
    

 </td>
</tr>