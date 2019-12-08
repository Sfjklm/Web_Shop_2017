 
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
  $q = mysqli_query($conn,"select * from items where category = 2 and subcategory = 5  limit $page ,12");
while($rw=mysqli_fetch_object($q)){ 
?>
<div class="col-md-2 column productbox">
    <div><h5><b><?php echo "$rw->brand" ?><b></h5></div>


     <img src="img_items/<?php echo $rw->img; ?>" class="img-responsive"> 

    <div class="producttitle"><a href="home.php?cid=2&mid=<?php echo $rw->id; ?>"><?php echo $rw->name; ?></div>

    <div class="productprice"><div class="pull-right"><a href="home.php?cid=2&mid=<?php echo $rw->id; ?>" class="btn btn-danger btn-sm" role="button">BUY</a></div><div class="pricetext">$<?php echo $rw->price; ?></div></div>
</div>
 
 
   <?php  } ?>

 