 
<?php
session_start();
$pagetitle = "Contact Us";

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
 
 


 <div class="forma">
<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="contact.php" method="post" name="form">
          <fieldset>
            <legend class="text-center">Contact us</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
                 <!-- phone input-->

                <div class="form-group">
              <label class="col-md-3 control-label" for="phone">Phone number</label>
              <div class="col-md-9">
                <input id="phone" name="phone" type="tel" placeholder="Your phone" class="form-control">
              </div>
            </div>
    
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="msg" name="msg" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <input type="submit" value="Send" name="submit">
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
 
 </div> <!--forma napraviti kasnije-->
 
<div id="footer"> 
 <?php include ('footer.php');?>
 </div>

</div>
 

</body>
</html>



<?php
 if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $msg=$_POST['msg'];


  $to='milosita332@gmail.com'; 
  $subject='Form Submission';
  $message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
  $from = "From: ".$email;

if(($name == '') || ($email == '') || ($msg == '')){ 

        echo "U must fill all fields";

      }
      else{
     
       mail($to, $subject, $message, $from);
      echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
     

  }

  }

 