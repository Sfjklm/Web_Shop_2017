 
<link rel="stylesheet" type="text/css" href="css/style2.css">

 <html>
 	<head>
 		    <link href="bootstrap_cheatsheet/css/bootstrap.min.css" rel="stylesheet" media="screen">
 	</head>

<body>
	      <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="home.php">Home</a></li>
          
            <li><a href="about.php">About</a></li>
            <li><a href="about.php?st=1">Locations</a></li>
            <li><a href="about.php?st=2">News</a></li>
            <li><a href="contact.php?st=1">Contact</a></li>
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
 
   

</body>
 </html>
 


    
  