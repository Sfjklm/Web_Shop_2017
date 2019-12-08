 
<?php

$conn = mysqli_connect('localhost','root','','webshop'); 

if (isset($_POST["submit"]))  {

$cat=$_POST['cat'];
$subcat=$_POST['subcat'];
$name=$_POST['name'];
$brand=$_POST['brand'];
$img = $_FILES['file']['name'];
$price=$_POST['price'];
$desc=$_POST['description'];
$sale = 1;
 
$target = "../img_items/".basename($_FILES['file']['name']);


 

	 
  if (mysqli_query($conn,"insert into items ( category, subcategory, name, brand, img, price, description,sale ) values ('$cat', '$subcat', '$name', '$brand','$img','$price','$desc','$sale' )" ) === TRUE) 
{

	    move_uploaded_file($_FILES['file']['tmp_name'], $target);
                  

     }
      else
     {
    /* failure */
    printf("Insert failed: %s\n", mysqli_error($conn));
     }

 }

