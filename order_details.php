<?php
  session_start();
  if (isset($_SESSION['username'])) {
  }
  else {
      echo "<a href = \"index.php\">Login To see order details</a>";
      die();
  }
 ?> 

<!DOCTYPE html>
<html>
    <head lang = "en">
        <title>Order Reciept</title>
        <meta charset = "utf-8">
        <link href = "assets/styles/reciept.css" type = "text/css" rel = "stylesheet">
    </head>
    <body>
<?php
    include "assets/scripts/php/db.php";
    $order_details = "SELECT o_name 'Order', o_status 'Dispatched', o_date 'Date' FROM product_order WHERE o_id = '{$_GET['order_id']}'";
    $order_result = $db->query($order_details);
    $order_data = $order_result->fetch_assoc();
    echo "<h1>CUSTOMER RECIEPT</h1><hr>";
    echo "<ul>";
    foreach ($order_data as $key => $value)
    {
        echo "<li>{$key} : {$value} </li>";
    }
    echo "</ul>";
    $product_details = "SELECT p_id, p_sold FROM customer_order WHERE o_id = '{$_GET['order_id']}'";
    $product_details_result = $db->query($product_details);
    $product_count = mysqli_num_rows($product_details_result);
    echo "<table class = \" table table-responsive\">";
    echo "<tr>";
    $product = "SELECT p_name Name, p_category Category, p_manufacturer Manufacturer, p_price Price FROM products where p_id = 26";
    $product= $db->query($product);
    $product = $product->fetch_assoc();
    foreach ($product as $key => $value)
    {
        echo "<th>$key</th>";
    }
    echo "<th>Quantity Bought</th>";
    echo "</tr>";
    echo "<tbody>";
     $total_cost= 0;
    for($i = 0; $i < $product_count; $i++)
    {
        $product_data = $product_details_result->fetch_assoc();
        echo "<tr>";
        $product = "SELECT p_name Name, p_category Category, p_manufacturer Manufacturer, p_price Price FROM products where p_id = {$product_data['p_id']}";
        $product_result = $db->query($product);
        $product = $product_result->fetch_assoc();
        $total_cost += $product_data['p_sold'] * $product['Price'];
        foreach ($product as $key => $value)
        {
            echo "<td>$value</td>";
            
        }
        echo "<td>{$product_data['p_sold']}</td>";
        echo "</tr>";
        
    }
    
    echo "<tr><td colspan = 4>Total Payable Amount in (RS)</td> <td>{$total_cost}/-</td></tr>";
    echo "<table>";

    function AS_IN()
    {
        $in = "";
        foreach($_SESSION['cart'] as $p_id => $p_name)
        {
            $in.= ",{$p_id}";
        }
        $in = substr($in,1);
        return $in;
    }
 ?>
 <a href = "purchase_history.php">Go to Purchase History..</a>
    </body>
 </html>