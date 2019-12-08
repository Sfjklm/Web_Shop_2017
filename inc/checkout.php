<?php
 
include ('../connectdb.php');
$pagetitle = "Checkout";
?>

 
 <div id="sredina">
 <div id="veci">
 	






<?php
if(isset($_POST['btnCheckout'])){
	$name = $_POST['tbName'];
	$address = $_POST['tbAddress'];
	 
	if(!isset($_SESSION['card'])||empty($_SESSION['card'])){
		echo "Empty cart";
	} else {
		$cardcontent = json_encode($_SESSION['card']);
		$q = "insert into orders values (null,'{$name}','{$address}','{$cardcontent}')";
		mysqli_query($conn,$q);
		$_SESSION['card']=array();
		echo "Order was sent";
	}
}


?>

<div id="checkout">
<form action="" method="post">
Name: <input type="text" name="tbName" /><br />
Address: <textarea name="tbAddress" ></textarea><br />
<input type="submit" name="btnCheckout" />
</form>
 </div>
</div>	