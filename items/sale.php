 

<link rel="stylesheet" type="text/css" href="css/style2.css">

<div class="baner">
<img src="img/Untitled design 1.jpg" alt="" width="1100" >
</div>
 <?php
 $conn = mysqli_connect('localhost','root','','webshop'); 
  $q = mysqli_query($conn,"select * from items where sale = 2");
while($rw=mysqli_fetch_object($q)){ 
?>
<div class="col-md-2 column productbox">
    <div><h2><?php echo "$rw->brand" ?></h2></div>


     <img src="img_items/<?php echo $rw->img; ?>" class="img-responsive"> 

    <div class="producttitle"><a href="home.php?cid=2&mid=<?php echo $rw->id; ?>"><?php echo $rw->name; ?></div>

    <div class="productprice"><div class="pull-right"><a href="home.php?cid=2&mid=<?php echo $rw->id; ?>" class="btn btn-danger btn-sm" role="button">BUY</a></div><div class="pricetext">$<?php echo $rw->price; ?></div></div>
</div>
 
 
   <?php  } ?>

 