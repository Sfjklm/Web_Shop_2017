<?php   require ('connectdb.php'); ?>

  
<?php 
if (isset($_POST['submit'])) {
	$searchq = $_POST['pretraga'];
    $searchq = preg_replace("#[^0-9a-z]#i","", $searchq);
 

    $query = mysqli_query($conn,"SELECT * FROM items WHERE name LIKE '%$searchq%' or brand LIKE '%$searchq%'") or die("nema nista!");

   
    $count = mysqli_num_rows($query);
    if($count == 0){
    	echo "nema patika sa takvim imenom";
    }else{
         while ($row = mysqli_fetch_array($query)) {
         	$name = array($row ['name']) ;
            $img = array($row ['img']);
            $brand = array($row ['brand']);
            $link = array($row ['id']);
            serialize($link);
              foreach ($img as $slike) {
                echo '<div id="pretraga"><img src="img_items/'.$slike.'" width="99" height="99"> ';
               }

               foreach ($name as $ime) {
                    echo '<p><b>'.$ime.'</b></p>';

               }
            
                  foreach ($brand as $brend) {
                    echo '<h3><b>'.$brend.'</b></h3> ';

               }
                  foreach ($link as $linkic) {
                    echo '<a href="home.php?cid=1&mid='.$linkic.'"><h6>See this item</h6></a></div>';

               }
 
 
         }

    }
 
 }
 


 ?>
 