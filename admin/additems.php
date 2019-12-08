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
<h1><strong>ADD ITEMS</strong></h1>

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



<tr><td><span class="style3"> Sub Category:</span></td>
<td>
<select name="subcat" id="subcat" onChange="showUser(this.value)">
<option value=''>Select One</option>
<?php
$q=mysqli_query( $conn,"SELECT * FROM subcategory ");
while($n=mysqli_fetch_array($q)){
echo "<option value=".$n['id'].">".$n['subcategory']."</option>";
}
?>
</select>
</td>
</tr>



<tr>
  <td><span class="style3">Name </span></td>
  <td><label>
    <input name="name" type="text" id="name">
  </label></td>
</tr>




<tr>
  <td><span class="style3">Brand </span></td>
  <td><label>
    <input name="brand" type="text" id="brand">
  </label></td>
</tr>

 
 
<tr>
  <td><span class="style3">Image:</span></td>
<td><input name="file" id="file" type="file"></td> 
</tr>




<tr>
  <td><span class="style3">Price:</span></td>
  <td><label>
  <input name="price" type="text" id="price">
  </label></td>
</tr>


<tr>
<td><span class="style3">Description:</span></td>
<td><textarea name="description" cols="35" rows="6"></textarea></td>
</tr>


 
<td  colspan="2" align="center"><input name="submit" type="submit" value="submit"></td>
</tr>

</table>
</form>
  </div>

 