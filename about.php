<?php session_start(); ?>
<?php
 switch (isset($_GET['st'])) {
      case '1':
          $pagetitle = "Location";
          break;
          case '2':
          $pagetitle = "News";
          break;
      default:
          $pagetitle = "About us";
          break;
    }

    ?>
        

<!DOCTYPE html>

<html>
 <?php include ('head.php'); ?>
<body>
 
	

<div id="wrapper">

<div id="header">  <!--header start-->
 <?php include ('header.php');?>
</div>  <!--header end-->


<div id="navigation">  <!--navigacija-->
 <?php include ('navigation.php');?>
</div>  <!--navigacija end-->
 
<div class="about">
 <?php  
    $page = (isset($_GET['st']))?$_GET['st']:0;  
    $pages = array(
      "1"=>"location.php",
      "2"=>"news.php",
  
    );
    if(isset($pages[$page])){
    include "inc/" . $pages[$page];
    }
    else {


   
    ?> 	
  
   






<p>
What is Lorem Ipsum?

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</p>
<?php  }; ?>
 </div>


 
 
<div id="footer"> 
 <?php include ('footer.php');?>
 </div>

</div>
 

</body>
</html>


 