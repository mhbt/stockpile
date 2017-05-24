<?php
      if (isset($_COOKIE['username'])) {
        include_once("../assets/scripts/php/login_header.php");
      }
    else if (isset($_COOKIE['site_manager']))
    {
        include_once("../assets/scripts/php/admin_login_header.php");
    }
      else {
        include_once("../assets/scripts/php/visitor_header.php");
      }
    

 ?>
 <section class = "container-fluid sections-wrapper">
     <!--<?php  var_dump($GLOBALS); ?>-->
     <div class = 'container container-left'>
          <nav>
             <?php include_once("../assets/scripts/php/product_category.php"); ?>
             <br>
             <?php
             if (!isset($_COOKIE['username']))
             {
              echo "<a id = \"sign-up\" href= \"sign_up.php\"><button  class = \"btn btn-default btn-long btn-lg\">Sign Up</button></a>";
             }
             ?>
         </nav>
     </div>
        <div class = "container container-right">
            <nav class = "navbar">
                <div class = "navbar-header navbar-brand">
                    <ul class = "breadcrumb">
                        <li><a href = "index.php"><span class = "glyphicon glyphicon-home"></span></a></li>
                         <li><a href = "products.php?"><?php
                             if (isset($_GET['category']) && isset($_GET['brand']))
                             {
                              echo $_GET['category']. "->".$_GET['brand'];   
                             }
                             ?></a></li>
                    </ul>
                </div>
                <form class="navbar-form navbar-right">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-warning" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
        </nav>
        <!--here will be products-->
            <div class = "container product-list no-pm">
                <?php 
                    include "../assets/scripts/php/db.php";
                    $fetch_products = "SELECT "
                ?>
                
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
    </section>
    <footer>
        <div class = "container footer">
            <small>copyrights &copy; stockpile.Inc 2017</small>
        </div>
    </footer>
   
</body>