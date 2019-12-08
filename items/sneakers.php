 
<link rel="stylesheet" type="text/css" href="css/style2.css">
<?php
 
$pagetitle = "Web Shop - Sneakers"; 
?>
 
<div class="baner">
<img src="img/Untitled design 1.jpg" alt="" width="1100" >
</div>
<div id="sneakers"> 


 
 <?php
$page =(isset($_GET['page']))?$_GET['page']:1;
if ($page=="" or $page=="1") {
	$page =0;
}else{
	$page = ($page*5)-5;
}
 $conn = mysqli_connect('localhost','root','','webshop'); 
  $q = mysqli_query($conn,"select * from items where subcategory = 1 limit $page ,12");
while($rw=mysqli_fetch_object($q)){ 
?>
<div class="col-md-2 column productbox">
    <div><h2><?php echo "$rw->brand" ?></h2></div>


     <img src="img_items/<?php echo $rw->img; ?>" class="img-responsive"> 

    <div class="producttitle"><a href="home.php?cid=2&mid=<?php echo $rw->id; ?>"><?php echo $rw->name; ?></div>

    <div class="productprice"><div class="pull-right"><a href="home.php?cid=2&mid=<?php echo $rw->id; ?>" class="btn btn-danger btn-sm" role="button">BUY</a></div><div class="pricetext">$<?php echo $rw->price; ?></div></div>
</div>
 
 
   <?php  } ?>

  </div>
 <?php 
 
$cou = mysqli_num_rows($q);
 
$a = $cou/5;
 

for ($b=1; $b<=$a; $b++) { 
 ?>

 <a href="home.php?cid=1&page=<?php echo $b; ?>"><h2 style="float: left;"><?php echo $b." "; ?></h2></a>
 


<?php  

}

?>




 