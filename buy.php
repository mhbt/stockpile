<?php
  session_start();
  if (isset($_SESSION['username'])) {
    include_once("assets/scripts/php/login_header.php");
     if (!isset($_GET['id']))
      {
          die("<a href = \"index.php\">Select Product to buy first</a>");
      }
     $id = $_GET['id'];
    include_once("assets/scripts/php/db.php");
      $fetch_product = "SELECT UPPER(p_name) name, p_price price, image_path image, p_qoh FROM products WHERE p_id = {$id}";
      //$fetch_descriptions = "SELECT d_id, UPPER(p_color) color, UPPER(p_spec) FROM description WHERE p_id = {$id}";
      $result = $db->query($fetch_product);
    
      if (!mysqli_num_rows($result) > 0)
      {
          die("database query failed");
      }
      $product = $result->fetch_assoc();
  }
// else if (isset($_COOKIE['site_manager']))
// {
//     include_once("assets/scripts/php/admin_login_header.php");
// }
  else {
    die("<a href = \"index.php\">Login First to buy a product! Happy Shoping...</a> "); 
  }
 ?>
<br>
<section class = "container-fluid sections-wrapper">
<div class = "container-fluid" >
    <section class = "jumbotron admin-jumbotron">
    <div class = "container thumbnail">
        <div class = "row">
            <div class = "col-sm-4">
            </div>

            <div class = "col-sm-4">
            <?php echo "<img src =\"{$product['image']}\" class = \"img img-responsive img-thumbnail\" width = \"200\" height = \"200\">"; ?>
                <?php

                echo "<div class = \"\"><p>{$product['name']}</p></div>";
                echo "<div class = \"\"><p>Price: RS-{$product['price']}/-</p></div>";
                ?>
            </div>
            <div class = "col-sm-4">
               
            </div>
        </div>
        </div>
        <form class = "form-inline" method = "POST" action = "assets/scripts/php/process_order.php?<?php echo "id=$id";?>">
            <div class = "input-group">
                <label>Product Qunatity (<?php echo "{$product['p_qoh']}" ?> available): &nbsp;&nbsp;</label>
                <input class = "" name = "quantity" type="number" value = 1 max =<?php echo "{$product['p_qoh']}" ?>>
            </div>
            &nbsp;
            <div class = "input-group">
                <input class = "btn btn-default" name = "buy" type="submit" value ="Buy"<?php if($product['p_qoh'] < 1) echo "disabled"?>>
            </div>
            <div class = "input-group">
                <a href = <?php echo"rate.php?id={$id}"; ?>>Rate It </a>
                
            </div>
        </form>

    </section>
    
</div>
</section>