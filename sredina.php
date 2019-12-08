



 <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/2.jpg">
                <div class="carousel-caption">
      <h3><a href="home.php">Shop Now</a></h3> 
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                     </p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="img/3.jpg">
                <div class="carousel-caption">
                    <h3>
                        SALE 50%</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="img/4.jpg">
                <div class="carousel-caption">
                    <h3>
                        <a href="">SHOP NOW</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="img/1.jpg">
                <div class="carousel-caption">
                    <h3>
                        SALE 40%-90%</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut la </p>
                </div>
            </div>
            <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-justified">
            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">SALE<small>Check latest products on sale</small></a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#">Free shipping<small>Shop now and qualify for free shipping</small></a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="#">Online order<small>It's easier to shop</small></a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#">New line<small>New line on sale </small></a></li>
        </ul>
    </div>
 
    <style>
 

img {
border-radius: 15px;

}
#myCarousel .nav a small
{
    display: block;
}
#myCarousel .nav
{
    background: #eee;
}
.nav-justified > li > a
{
    border-radius: 0px;
}
.nav-pills>li[data-slide-to="0"].active a { background-color: #16a085; }
.nav-pills>li[data-slide-to="1"].active a { background-color: #e67e22; }
.nav-pills>li[data-slide-to="2"].active a { background-color: #2980b9; }
.nav-pills>li[data-slide-to="3"].active a { background-color: #8e44ad; }

#stvari {
  padding-top: 20px;
  padding-left: 20px;
  margin-top: 30px;

}




    </style>

    <script>
      
      $(document).ready( function() {
    $('#myCarousel').carousel({
      interval:   4000
  });
  
  var clickEvent = false;
  $('#myCarousel').on('click', '.nav a', function() {
      clickEvent = true;
      $('.nav li').removeClass('active');
      $(this).parent().addClass('active');    
  }).on('slid.bs.carousel', function(e) {
    if(!clickEvent) {
      var count = $('.nav').children().length -1;
      var current = $('.nav li.active');
      current.removeClass('active').next().addClass('active');
      var id = parseInt(current.data('slide-to'));
      if(count == id) {
        $('.nav li').first().addClass('active');  
      }
    }
    clickEvent = false;
  });
});
    </script>

