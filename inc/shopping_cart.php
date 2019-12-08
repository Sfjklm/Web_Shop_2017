<?php
session_start();
include ('../connectdb.php');
$pagetitle = "Order";
?>
 
<!DOCTYPE html>

<html>
<head>
<title><?php echo $pagetitle; ?></title>
<link rel="icon" type="" href="../img/favicon.ico" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/style2.css">
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
 
  <div id="wrapper">

<div id="header">  <!--header start-->
<div id="logo">
<a href="../index.php"><img src="../img/logo.png" alt="logo"></a> <!--logo shopa-->
</div>
 <?php 

if (!isset($_SESSION['user']['name'])) {
     
?>


<div id="login"> 

<a href="../login.php?status=login" class="btn btn-primary btn-default">
<span class="glyphicon glyphicon-log-in"></span> Login </a>       
<a href="../login.php?status=register" class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-user"></span> Register</a>
</div>

 <?php }else {

  ?> 
<a class="logout" href="../logout.php"><button>LOG OUT</button></a>
 <?php } ?> 

</div>  <!--header end-->
<div id="navigation">  <!--navigacija-->
<div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../home.php">Home</a></li>
          
            <li><a href="../about.php">About</a></li>
            <li><a href="../about.php?st=1">Locations</a></li>
            <li><a href="../about.php?st=2">News</a></li>
            <li><a href="../contact.php?st=1">Contact</a></li>
            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse3">


            <form class="navbar-form navbar-right" role="search" method="post" action="home.php?cid=4" >
              <div class="form-group">
                <input type="text" class="form-control" placeholder="search" name="pretraga" />
              </div>
              <button type="submit" class="btn btn-danger" name="submit"><span class="glyphicon glyphicon-search" s></span></button>
            </form>
          </div>
        </div> 
</div>  <!--navigacija end-->
 
 <div id="sredina">
 <div id="veci">

<?php if (isset($_GET['check']) and $_GET['check'] == 1){
include ('checkout.php');

	}else{

	?>	
	


 
<?php

if(!isset($_SESSION['card'])){
		$_SESSION['card'] = array();
}
if(isset($_POST['mid'])&&isset($_POST['quantity'])){ 
	if(isset($_SESSION['card'][$_POST['mid']])){
		$_SESSION['card'][$_POST['mid']]+=$_POST['quantity'];
	} else {
		$_SESSION['card'][$_POST['mid']]=$_POST['quantity'];
	} 
	if($_SESSION['card'][$_POST['mid']]<=0){
		unset($_SESSION['card'][$_POST['mid']]);
	}
}
if(empty($_SESSION['card'])){
	echo "card is empty";
	return;
}
$sneakers = array_keys($_SESSION['card']);
$sn_string = implode(",",$sneakers);
 
$q = mysqli_query($conn,"select * from items where id in ({$sn_string})");
while($rw=mysqli_fetch_object($q)){ 
?>

<div> 
 <table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<img src="../img_items/<?php echo $rw->img; ?>" class="img-responsive" height="99" width="99"> 
										<h4 class="nomargin"><a href="../home.php?cid=1&mid=<?php echo $rw->id; ?>"><?php echo $rw->name; ?></a></h4>
										<p><?php echo $rw->description; ?> </p>
									</div>
								</div>
							</td>
							<td data-th="Price"><?php echo $rw->price; ?></td>
							<td data-th="Quantity">
								<input type="text" class="form-control text-center" value=<?php echo $_SESSION['card'][$rw->id]; ?>>
							</td>

							<?php $total=$_SESSION['card'][$rw->id] * $rw->price; ?>
							<td data-th="Subtotal" class="text-center"><?php echo $total; ?></td>

							<td class="actions" data-th="">

							<!-- DELETE -->
								  <a href="shopping_cart.php?action=delete&id=<?php echo $rw->id; ?>">X</a> 							
							</td>
						</tr>
					</tbody>
				 
						 <?php }  } ?>
						<tr>
							<td><a href="../home.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong><?php echo $total; ?></strong></td>
							<td><a href="?check=1.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
				 
				</table>
 </div>


 
   
 </div>
</div> 
</div>

<div id="footer">
<?php include ('../footer.php');?>
</div>	

</body>
</html> 


<?php 
if(isset($_GET["action"]))  
 {  
      if($_GET["action"] = "delete")  
      {  
           foreach($_SESSION["card"] as $keys => $values)  
           {  
                if($_GET['id'] == $keys)  
                {  
                     unset($_SESSION["card"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="shopping_cart.php"</script>';  
                }  
           }  
      }  
 }   ?>

	
 