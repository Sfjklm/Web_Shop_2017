
<?php
session_start();
if(!isset($_SESSION['status'])||$_SESSION['status']!=3){
	header("location: index.html");
}
?>
<html>
	<head>
		<?php include ('../head.php'); ?>
		 <link rel="stylesheet" type="text/css" href="../css/style2.css">
	</head>
<body>
 <div id="admin">
<a href="additems.php" class="btn btn-success">Add items</a>
<a href="deleteitem.php" class="btn btn-success">Delete items</a>
<a href="updateitem.php" class="btn btn-success">Update items</a>
 
<a href="addnews.php" class="btn btn-success">Add news</a>
<a href="deletenews.php" class="btn btn-success">Delete news</a>
<a href="updatenews.php" class="btn btn-success">Update news</a>
<a href="../logout.php" class=" ">Logout</a>

 </div>


 </body>
</html>