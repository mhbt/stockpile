<?php
  if (isset($_COOKIE['username'])) {
    include_once("../assets/scripts/php/login_header.php");
      if (!isset($_GET['id']))
      {
          die("<a href = \"index.php\">Select Product to buy first</a>");
      }
     $id = $_GET['id'];
    include_once("../assets/scripts/php/db.php");
      $fetch_product = "SELECT UPPER(p_name) name, p_price price, image_path image, p_qoh FROM products WHERE p_id = {$id}";
      //$fetch_descriptions = "SELECT d_id, UPPER(p_color) color, UPPER(p_spec) FROM description WHERE p_id = {$id}";
      $result = $db->query($fetch_product);
    
      if (!mysqli_num_rows($result) > 0)
      {
          die("database query failed");
      }
      $product = $result->fetch_assoc();
  }
else
{
  die("<a href = \"index.php\">Login First to buy a product! Happy Shoping...</a> "); 
}
?>
<br>
<section class = "container-fluid sections-wrapper">
<div class = "container-fluid" >
    <section class = "jumbotron admin-jumbotron">
        <div class = "container thumbnail">
           <?php echo "<img src =\"{$product['image']}\" class = \"img img-responsive\" width = 200px height = 200px>";
            echo "<div class = \"caption\"><p>{$product['name']}</p></div>";
            echo "<div class = \"caption\"><p>Price: RS-{$product['price']}/-</p></div>";
            ?>
        </div>
        <form class = "form-inline" method = "POST" action = "http://localhost/stockpile/assets/scripts/php/process_order.php?<?php echo "id=$id";?>">
            <div class = "input-group">
                <label>Product Qunatity : &nbsp;&nbsp;</label>
                <input class = "" name = "quantity" type="number" value = 1 max =<?php echo "{$product['p_qoh']}" ?>>
                
            </div>
            &nbsp;
            <div class = "input-group">
                <input class = "btn btn-default" name = "buy" type="submit" value ="Buy">
                
            </div>
        </form>

    </section>
    
</div>
</section>