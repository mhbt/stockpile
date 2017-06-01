<?php
  if (isset($_COOKIE['username'])) {
    include_once("../assets/scripts/php/login_header.php");
      if (!isset($_GET['id']))
      {
          die("<a href = \"index.php\">Select Product to rate it first!</a>");
      }
     $p_id = $_GET['id'];
  }
else
{
  die("<a href = \"index.php\">Login First to rate a product! Happy Rating...</a> "); 
}
?>
<br>
<section class = "container-fluid sections-wrapper">
<div class = "container-fluid" >
        <div class = "jumbotron rate-jumbotron">
            <?php
                if (isset($_POST['submit']))
                {
                    $c_id = $_COOKIE['username'];
                    $rating = $_POST['rating'];
                    include_once("../assets/scripts/php/db.php");
                    $delete_prev_rating = "DELETE FROM rate_products WHERE c_id = '{$c_id}' AND p_id = {$p_id}";
                    $db->query($delete_prev_rating);
                    $rate_it = "INSERT INTO rate_products (c_id,p_id,stars) VALUES ('$c_id', $p_id, $rating)";
                    $success = $db->query($rate_it);
                    if ($success) { $success = "Product Rated Successfully.";}
                    echo "<h6 class = \"heading-orange-less-pm\">$success</h6>";
                    echo "<a class = \"heading-orange-less-pm\" href = \"buy.php?id={$p_id}\"><small>Redirect to buy page?</small></a>";
                }
                else
                {
                    include_once("../assets/scripts/php/db.php");
                    $product = "SELECT p_name, image_path image FROM products WHERE p_id = {$p_id}";
                    $result = $db->query($product);
                    $data = $result->fetch_assoc();
                    echo "<h5 class = \"heading-orange-less-pm\">{$data['p_name']}<h5>";
                    echo "<img class = \"img  img-responsive\" src =\"{$data['image']}\">";
                    echo "<form method = \"POST\" action = \"rate.php?id={$p_id}\">
                    <input class = \"form-control\" name = \"rating\" type = \"number\" min = 0 max = 5 placeholder = \"Your Rating (1-5)\" required>
                    <input class = \"btn btn-warning\" name = \"submit\" type = \"submit\" value = \"Rate\">
                     </form>";
                }
             ?>
        </div>
    
</div>
</section>