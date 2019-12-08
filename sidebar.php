 
<div id="logodva">
 <a href="#"><img src="img/Untitled design 2.jpg" alt="" ></a>
</div>

 <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    </span>MAN'S</a>
                </h4>
              </div>


              <div id="collapseOne" class="panel-collapse collapse in">
                <ul class="list-group">

                   <!--dinamicki meni -->
                      <?php              
                    include ('connectdb.php');
                    

                  $q = mysqli_query($conn,"select * from subcategory where category = '1'");


                  while ($rw=mysqli_fetch_object($q)) {
          ?>
                 <li class="list-group-item"><span class=" "></span><a href="home.php?cid=<?php echo $rw->id; ?>"><?php   echo $rw->subcategory;  ?></a></li>
               <?php  }  ?>     
             
 
        
             
                      <!--dinamicki meni za muskarce end-->

                  <!--dinamicki meni za zene -->
                </ul>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicons glyphicons-old-man">  
                    </span>WOMAN</a>
                </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse">
                <div class="list-group">
                  <h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <ul class="list-group">

                   <?php
                  $q = mysqli_query($conn,"select * from subcategory where category = '2' ");


                  while ($rw=mysqli_fetch_object($q)) {
                     ?>
                 <li class="list-group-item"><span class=" "></span><a href="home.php?cid=<?php echo $rw->id; ?>"><?php   echo $rw->subcategory;  ?></a></li>
               <?php  }  ?>     
             
                     <!--dinamicki meni za zene end-->

                 </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span >
                    </span>NEW</a>
                </h4>
              </div>
              <div id="collapseFive" class="panel-collapse collapse">
                <div class="list-group">
                   <?php
                  $q = mysqli_query($conn,"select * from subcategory where category = '3' ");


                  while ($rw=mysqli_fetch_object($q)) {
                     ?>
                 <li class="list-group-item"><span class=" "></span><a href="home.php?cid=<?php echo $rw->id; ?>"><?php   echo $rw->subcategory;  ?></a></li>
               <?php  }  ?> 
                
                </div>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
<div id="logotri">
 
 <a href="www.goolge.com"><img src="img/Untitled design 4.jpg " alt="" height="210px" width="240px"></a>
  <a href="www.goolge.com"><img src="img/Untitled design (6).jpg" alt="" height="210px" width="240px"></a>
</div>
 


    <style>

    img {
      margin-left: 15px;
      margin-bottom: 15px;
      padding-left: 5px;
    }
      
      #accordion .glyphicon { margin-right:10px; }
      .panel-collapse>.list-group .list-group-item:first-child {border-top-right-radius: 0;border-top-left-radius: 0;}
      .panel-collapse>.list-group .list-group-item {border-width: 1px 0;}
      .panel-collapse>.list-group {margin-bottom: 0;}
      .panel-collapse .list-group-item {border-radius:0;}

      .panel-collapse .list-group .list-group {margin: 0;margin-top: 10px;}
      .panel-collapse .list-group-item li.list-group-item {margin: 0 -15px;border-top: 1px solid #ddd !important;border-bottom: 0;padding-left: 30px;}
      .panel-collapse .list-group-item li.list-group-item:last-child {padding-bottom: 0;}

      .panel-collapse div.list-group div.list-group{margin: 0;}
      .panel-collapse div.list-group .list-group a.list-group-item {border-top: 1px solid #ddd !important;border-bottom: 0;padding-left: 30px;}
      .panel-collapse .list-group-item li.list-group-item {border-top: 1px solid #DDD !important;}
      </style>