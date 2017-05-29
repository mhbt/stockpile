<!DOCTYPE html>
<html>
    <head lang = "en">
        <title>Order Reciept</title>
        <meta charset = "utf-8">
        <link href = "../assets/styles/reciept.css" type = "text/css" rel = "stylesheet">
    </head>
    <body>
<?php
    include "../assets/scripts/php/db.php";
    $order_details = "SELECT o_name 'Order', o_status 'Delivered', o_date 'Date' FROM product_order WHERE o_id = '{$_GET['order_id']}'";
    $order_result = $db->query($order_details);
    $order_data = $order_result->fetch_assoc();
    $product_details = "SELECT p_id, p_sold FROM customer_order WHERE o_id = '{$_GET['order_id']}'";
    $product_result = $db->query($product_details);
    $product_data = $product_result->fetch_assoc();
    $product = "SELECT p_name Name, p_category Category, p_manufacturer Manufacturer, p_price Price FROM products where p_id = '{$product_data['p_id']}'";
    $product_result = $db->query($product);
    $product = $product_result->fetch_assoc();
    echo "<h1>CUSTOMER RECIEPT</h1><hr>";
    echo "<ul>";
    foreach ($order_data as $key => $value)
    {
        echo "<li>{$key} : {$value} </li>";
    }
     echo "</ul>";
    echo "<table><th>";
    echo "<tr>";
    foreach ($product as $key => $value)
    {
        echo "<td>$key</td>";
    }
    echo "<td>Quantity Bought</td>";
    echo "</tr>";
    echo "</th>";
    echo "<tbody>";
    echo "<tr>";
    foreach ($product as $key => $value)
    {
        echo "<td>$value</td>";
    }
    echo "<td>{$product_data['p_sold']}</td>";
    echo "</tr>";
    echo "<table>";
 ?>
    </body>
 </html>