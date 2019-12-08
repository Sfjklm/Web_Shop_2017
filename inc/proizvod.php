<?php

$id = $_GET['mid'];
 $conn = mysqli_connect('localhost','root','','webshop'); 
  $q = mysqli_query($conn,"select * from items where id = $id");
while($rw=mysqli_fetch_object($q)){ 
?>

<head>
	
	
</head>
<div class="container-fluid">
    <div class="content-wrapper">	
		<div class="item-container">	
		 
				<div class="col-md-12">
					<div class="product col-md-3 service-image-left">
                    
						<center>
							<img id="item-display" src="img_items/<?php echo $rw->img; ?>" alt=""></img>
						</center>
					</div>
					
				 
				</div>
					
				<div class="col-md-7">
					<div class="product-title"><h2><?php echo $rw->brand ?></h2></div>
					<div class="product-desc"> <h3><?php echo $rw->name; ?></h3></div>
				 
					<hr>
					<div class="product-price"> <p><b>Price:</b> <b>$<?php echo $rw->price; ?> </p></div>
					<div class="product-stock">In Stock</div>
					<hr>
					 
						<form action="inc/shopping_cart.php" method="post"> 
			 <input type="hidden" name="mid" value="<?php echo $rw->id; ?>" />
			<input type="number" name="quantity" value="1" /> 
             <input type="submit" value="add" />




			</form>
					 
				 
			</div> 
		</div>
		<div class="container-fluid">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
					 
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
							<section class="container product-info">
							 <?php echo $rw->description; ?> 
							</section>			  
						</div>
					<div class="tab-pane fade" id="service-two">
						
						<section class="container">
						<h3 style="color:Fuchsia;  ;"><?php echo $rw->subcategory; ?> </h3>
						</section>
						
					</div>
				 
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>

<?php }; ?>
 