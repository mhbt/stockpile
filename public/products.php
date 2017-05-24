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
                    $fetch_products = "SELECT p_id, UPPER(p_name) name, p_price price, image_path image FROM products WHERE UPPER(p_manufacturer) = '{$_GET['brand']}' AND UPPER(p_category) = '{$_GET['category']}'";
                    //echo $fetch_products;
                    $result = $db->query($fetch_products);
                    $p_count = mysqli_num_rows($result);
                    //echo $p_count;
                    if ($p_count > 0)
                    {
                      for($i = 0; $i < $p_count; $i++)
                      {
                          $product = $result->fetch_assoc();
                          echo "<div class = \"panel panel-default text-center\">
                    <div class = \"panel-heading\">
                        <h4>{$product['name']}</h4>
                    </div>
                    <div class = \"panel-body\">
                        <img src = \"{$product['image']}\">
                    </div>
                    <div class = \"panel-footer\">
                        <h5><b>RS-{$product['price']}/-</b></h5>
                        <a class = \"btn btn-lg btn-danger\" href = \"buy.php?id={$product['p_id']}\">Buy</a>
                    </div>
                </div>";
                      }
                    }
                ?>
        </div>
    </section>
    <footer>
        <div class = "container footer">
            <small>copyrights &copy; stockpile.Inc 2017</small>
        </div>
    </footer>
   
</body>