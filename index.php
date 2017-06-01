<?php
  if (isset($_COOKIE['username'])) {
    include_once("assets/scripts/php/login_header.php");
  }
else if (isset($_COOKIE['site_manager']))
{
    include_once("assets/scripts/php/admin_login_header.php");
}
  else {
    include_once("assets/scripts/php/visitor_header.php");
  }
 ?>
 <section class = "container-fluid sections-wrapper">
     <!--<?php  var_dump($GLOBALS); ?>-->
     <div class = 'container container-left'>
          <nav>
             <?php include_once("assets/scripts/php/product_category.php"); ?>
             <br>
             <?php
             if (!isset($_COOKIE['username']))
             {
              echo "<a id = \"sign-up\" href= \"sign_up.php\"><button  class = \"btn btn-default btn-long btn-lg\">Sign Up</button></a>";
             }
             ?>
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
     <h2 class = 'text-center'>Try Our Featured Products<bold>!</bold></h2>
         <?php 
                    include "assets/scripts/php/db.php";
                    $fetch_products = "SELECT p_id, UPPER(p_name) name, p_price price, image_path image FROM products WHERE featured = 'y'";
                    //echo $fetch_products;
                    $result = $db->query($fetch_products);
                    $p_count = mysqli_num_rows($result);
                    //echo $p_count;
                    if ($p_count > 0)
                    {
                      for($i = 0; $i < $p_count; $i++)
                      {
                           $product = $result->fetch_assoc();
                          $get_rating = "SELECT AVG(stars) stars FROM rate_products WHERE p_id = {$product['p_id']}";
                          $rating_result = $db->query($get_rating);
                          @ $rating = $rating_result->fetch_assoc();
                          $rating_result->free();
                          $rating = (int) $rating['stars'];
                          echo "<div class = \"panel panel-default text-center\">
                            <div class = \"panel-heading\">
                                <h4>{$product['name']}</h4>
                            </div>
                            <div class = \"panel-body\">
                                <img src = \"{$product['image']}\">
                            </div>
                            <div class = \"panel-footer\"><p>";
                            for ($j = 0; $j < $rating; $j++)
                            {
                                echo "<span class =\"glyphicon glyphicon-star-empty\"></span>";
                            }
                                
                            echo "</p><h5><b>RS-{$product['price']}/-</b></h5>
                                <a class = \"btn btn-lg btn-danger\" href = \"buy.php?id={$product['p_id']}\">Buy</a>
                            </div>
                        </div>";
                      }
                    }
                ?>
     </div>
 </section>
  <?php
    include_once 'assets/scripts/php/footer.php';
   ?>
 </body>
