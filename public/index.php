<?php
  if (isset($_COOKIE['username'])) {
    include_once("../assets/scripts/php/login_header.php");
  }
  else {
    include_once("../assets/scripts/php/visitor_header.php");
  }
 ?>
 <section class = "container-fluid sections-wrapper">
     <!--<?php  var_dump($GLOBALS); ?>-->
     <div class = 'container container-left'>
          <nav>
             <ul class = 'nav nav-stacked  li-orange'>
                 <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" data-placement = "right"href="#">Mobile
                         <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                       <li><a href="products.html">Samsung</a></li>
                       <li><a href="products.html">Apple</a></li>
                       <li><a href="products.html">Nokia</a></li>
                     </ul>
                   </li>
                 <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" data-placement = "right"href="#">Mobile
                         <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                       <li><a href="#">Samsung</a></li>
                       <li><a href="#">Apple</a></li>
                       <li><a href="#">Nokia</a></li>
                     </ul>
                   </li>
                 <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" data-placement = "right"href="#">Mobile
                         <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                       <li><a href="#">Samsung</a></li>
                       <li><a href="#">Apple</a></li>
                       <li><a href="#">Nokia</a></li>
                     </ul>
                   </li>
                 <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" data-placement = "right"href="#">Mobile
                         <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                       <li><a href="#">Samsung</a></li>
                       <li><a href="#">Apple</a></li>
                       <li><a href="#">Nokia</a></li>
                     </ul>
                   </li>
                 <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" data-placement = "right"href="#">Mobile
                         <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                       <li><a href="#">Samsung</a></li>
                       <li><a href="#">Apple</a></li>
                       <li><a href="#">Nokia</a></li>
                     </ul>
                   </li>
                 <br>
                 <a id = "sign-up" href= "sign_up.php"><button  class = "btn btn-default btn-long btn-lg">Sign Up</button></a>
             </ul>
         </nav>
     </div>
 <div class = 'container container-right'>
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 <!-- Indicators -->
                 <ol class="carousel-indicators">
                   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

             <!-- Wrapper for slides -->
                 <div class="carousel-inner" role="listbox">
                   <div class="item active">
                     <img src="http://www.wepostmag.com/wp-content/uploads/2015/12/shooping.jpg" alt="Chania" width="460" height="200">
                   </div>

                   <div class="item">
                     <img src="https://www.hotelzurpost.info/wp-content/uploads/2015/11/shooping_sightseeing.jpg" alt="Chania" width="460" height="200">
                   </div>
                     <div class="item">
                     <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ8_XhdS51_FmvFB1So-rJ7iz7yLMShJQ00jc3BqSejAou-ceV8LQ" alt="Chania" width="460" height="200">
                       </div>
                     <!-- Left and right controls -->
                     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                       <span class="sr-only">Previous</span>
                     </a>
                     <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                       <span class="sr-only">Next</span>
                     </a>
                 </div>

             </div>
         </div>

 <div class = "container container-right featured-products">
     <h2 class = 'text-center'>Try Our Featured <span class = "glyphicon glyphicon-flag"></span>roducts<bold>!</bold></h2>
     <div class = "row">
         <div class = "col-sm-3">
             <div class = "panel panel-default text-center">
                 <div class = "panel-heading">
                     <h1>Product</h1>
                 </div>
                 <div class = "panel-body">
                     <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS70QOkeuTKhgCcVBdT39WRq7nytV2jhZnPSA9MReUX0DSJoIz-">
                 </div>
                 <div class = "panel-footer">
                     <h3> $90</h3>
                     <button class = "btn btn-lg btn-danger">Buy</button>
                 </div>
             </div>
             </div>
             <div class = "col-sm-3">
             <div class = "panel panel-default text-center">
                 <div class = "panel-heading">
                     <h1>Product</h1>
                 </div>
                 <div class = "panel-body">
                     <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS70QOkeuTKhgCcVBdT39WRq7nytV2jhZnPSA9MReUX0DSJoIz-">
                 </div>
                 <div class = "panel-footer">
                     <h3> $90</h3>
                     <button class = "btn btn-lg btn-danger">Buy</button>
                 </div>
             </div>
             </div>
         <div class = "col-sm-3">
             <div class = "panel panel-default text-center">
                 <div class = "panel-heading">
                     <h1>Product</h1>
                 </div>
                 <div class = "panel-body">
                     <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS70QOkeuTKhgCcVBdT39WRq7nytV2jhZnPSA9MReUX0DSJoIz-">
                 </div>
                 <div class = "panel-footer">
                     <h3> $90</h3>
                     <button class = "btn btn-lg btn-danger">Buy</button>
                 </div>
             </div>
             </div>
         <div class = "col-sm-3">
             <div class = "panel panel-default text-center">
                 <div class = "panel-heading">
                     <h1>Product</h1>
                 </div>
                 <div class = "panel-body">
                     <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS70QOkeuTKhgCcVBdT39WRq7nytV2jhZnPSA9MReUX0DSJoIz-">
                 </div>
                 <div class = "panel-footer">
                     <h3> $90</h3>
                     <button class = "btn btn-lg btn-danger">Buy</button>
                 </div>
             </div>
             </div>

         </div>
     <div class = "row">
         <div class = "col-sm-3">
             <div class = "panel panel-default text-center">
                 <div class = "panel-heading">
                     <h1>Product</h1>
                 </div>
                 <div class = "panel-body">
                     <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS70QOkeuTKhgCcVBdT39WRq7nytV2jhZnPSA9MReUX0DSJoIz-">
                 </div>
                 <div class = "panel-footer">
                     <h3> $90</h3>
                     <button class = "btn btn-lg btn-danger">Buy</button>
                 </div>
             </div>
             </div>
             <div class = "col-sm-3">
             <div class = "panel panel-default text-center">
                 <div class = "panel-heading">
                     <h1>Product</h1>
                 </div>
                 <div class = "panel-body">
                     <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS70QOkeuTKhgCcVBdT39WRq7nytV2jhZnPSA9MReUX0DSJoIz-">
                 </div>
                 <div class = "panel-footer">
                     <h3> $90</h3>
                     <button class = "btn btn-lg btn-danger">Buy</button>
                 </div>
             </div>
             </div>
         <div class = "col-sm-3">
             <div class = "panel panel-default text-center">
                 <div class = "panel-heading">
                     <h1>Product</h1>
                 </div>
                 <div class = "panel-body">
                     <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS70QOkeuTKhgCcVBdT39WRq7nytV2jhZnPSA9MReUX0DSJoIz-">
                 </div>
                 <div class = "panel-footer">
                     <h3> $90</h3>
                     <button class = "btn btn-lg btn-danger">Buy</button>
                 </div>
             </div>
             </div>
         <div class = "col-sm-3">
             <div class = "panel panel-default text-center">
                 <div class = "panel-heading">
                     <h1>Product</h1>
                 </div>
                 <div class = "panel-body">
                     <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS70QOkeuTKhgCcVBdT39WRq7nytV2jhZnPSA9MReUX0DSJoIz-">
                 </div>
                 <div class = "panel-footer">
                     <h3> $90</h3>
                     <button class = "btn btn-lg btn-danger">Buy</button>
                 </div>
             </div>
             </div>

         </div>
     </div>
 </section>
  <?php
    include_once '../assets/scripts/php/footer.php';
   ?>
 </body>
