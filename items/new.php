<link rel="stylesheet" type="text/css" href="css/style2.css">
<?php

include ('connectdb.php');

 $sale = 2;
 ?>
<div id="latest">
 <h2>CHECK OUT OUR LATEST PRODUCTS</h2>
</div>
<?php
  $q = mysqli_query($conn,"select * from items ORDER BY id desc limit 6 ");
while($rw=mysqli_fetch_object($q)){
	?>

<div class="col-md-2 column productbox">
    <div><h5><b><?php echo "$rw->brand" ?></b></h5></div>


     <img src="img_items/<?php echo $rw->img; ?>" class="img-responsive"> 

    <div class="producttitle"><a href="home.php?cid=2&mid=<?php echo $rw->id; ?>"><?php echo $rw->name; ?></div>

    <div class="productprice"><div class="pull-right"><a href="home.php?cid=2&mid=<?php echo $rw->id; ?>" class="btn btn-danger btn-sm" role="button">BUY</a></div><div class="pricetext"><?php echo $rw->price; ?></div></div>
</div>
 


<?php
} ?>

