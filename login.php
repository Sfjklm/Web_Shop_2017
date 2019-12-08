 
 
<?php
$pagetitle = "Login/Register";
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
 


<?php if (isset($_GET['status']) AND $_GET['status']== 'login') {


 ?>
  
 

 <div id="formalg">

<form action="process.php" method="post" class="form-signin">       
            <h3 style="color:HotPink;" class="form-signin-heading">Welcome Back! Please Sign In</h3>
              <hr class="colorgraph"><br>
              
              <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required="" autofocus="" />
              <input type="password" class="form-control" name="password" placeholder="Password" required=""/>            
             <input type="hidden" name="form_id" value="login">

              <button class="btn btn-lg btn-primary btn-block"  name="login_submit" value="Login" type="submit">Login</button>   <h3>U not register yet? <a href="login.php?status=register" class="btn btn-default"><span class="glyphicon glyphicon-info-sign"></span> Register Now</a>
</form>     

</div>

<?php } else { ?>
 
<div id="formalg">  
 
<form class="form-signin" action='process.php' method="POST">
  
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->

      <label class="control-label"  for="name">Username</label>
      <div class="controls">
        <input type="text" id="name" name="name" placeholder="Username" class="input-xlarge">
      </div>
    </div>

    <div class="control-group">

      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="E-mail" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password"  name="password" id="password" placeholder="" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password"  name="password_2" id="password_2" placeholder="" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <input type="hidden" name="form_id" value="register">
     <input type="submit" name="register_submit" value="register">
      </div>
    </div>
   
</form>
</div>

<?php } ?>
 

<div id="footer"> 
 <?php include ('footer.php');?>
 </div>

</div>
</body>
</html>