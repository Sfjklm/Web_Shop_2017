







<div id="news">
<?php $conn = mysqli_connect('localhost','root','','webshop'); 
  $q = mysqli_query($conn,"select * from news");
while($rw=mysqli_fetch_object($q)){
?>
<h2><?php echo $rw->title;?></h2>
<p><?php echo $rw->text;?> </p>
<img src="img/<?php echo $rw->img; ?>" alt="image" width='99' height='99'>


<?php 
}
 ?>

 </div>