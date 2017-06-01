<?php
    include_once "assets/scripts/php/db.php";
    //fetch orders
    $order_query = "SELECT * FROM product_order WHERE UPPER(o_status) = 'NO'";
    $order_result = $db->query($order_query);
    $order_count = mysqli_num_rows($order_result);
    
?>
<section class = "jumborton ordermanager-jumbotron">
<?php
    for ( $i = 0; $i < $order_count; $i++)
    {        
        $order = $order_result->fetch_assoc();
        $customer_query = "SELECT UPPER(concat(c_fname, \" \", c_lname)) name, c_phone_no phone FROM customer WHERE username = '{$order['c_id']}'";
        $customer_result = $db->query($customer_query);
        $customer = $customer_result->fetch_assoc();
        $address_query = "SELECT UPPER(concat(house_no,\",\", street_no,\",\", city,\",\", state,\",\", country)) res FROM customer_address WHERE a_id = '{$order['c_id']}'";
        $address_result = $db->query($address_query);
        $address = $address_result->fetch_assoc();
        echo " <section class = \"jumbotron order-jumbotron\">
        <h5 class = \"heading-orange\">Order : {$order['o_id']}</h5>
        <p><ul class = \"order-inf\">
        <li>Ticket ID: {$order['o_name']}</li>
        <li>Issue Date: {$order['o_date']}</li>
        </ul>
        <ul class = \"customer-inf\">
        <li>Name: {$customer['name']}</li>
        <li>Phone: {$customer['phone']}</li>
        </ul></p>
        <p> <span class = \"glyphicon glyphicon-road\"> </span> Address : <small>{$address['res']}</small></p>";
        $products_query = "SELECT p_id, p_sold FROM customer_order WHERE o_id = {$order['o_id']}";
        $product_result = $db->query($products_query);
        $product_count = mysqli_num_rows($product_result);
        $details_query = "SELECT p_name NAME , p_category CATEGORY, p_manufacturer BRAND, p_price PRICE FROM products WHERE p_id = 25";
        $details_result = $db->query($details_query);
        $details = $details_result->fetch_assoc();
        $details_result->free();
        echo "<table class=\"table table-hover table-responsive\">";
        echo "<tr>";
        foreach($details as $key => $value)
        {
            echo "<td>{$key}</td>";
        }
        echo "<td>QUANTITY</td>";
        //echo "<td>DESCRIPTION</td>";
        echo "</tr>";
        echo "<tbody>";
        for ($j = 0; $j < $product_count; $j++)
        {
            $product = $product_result->fetch_assoc();
            //for this product, the product details
            $details_query = "SELECT p_name NAME , p_category CATEGORY, p_manufacturer BRAND, p_price PRICE FROM products where p_id = '{$product['p_id']}'";
            $details_result = $db->query($details_query);
            $details = $details_result->fetch_assoc();
            echo "<tr class = \"tbody\">";
            foreach($details as $key => $value)
            {
                echo "<td>{$value}</td>";
            }
            echo "<td>{$product['p_sold']}</td>";
            echo "</tr>";
            
        }
        echo "<tbody>";
        echo "</table>";
        echo "<form method = \"POST\" action = \"assets/scripts/php/dispatch.php\"><input name = \"o_id\" value ={$order['o_id']} \"\" type = \"text\" class = \"hidden\"><input class = \"btn btn-warning\" name = \"submit\"type = \"submit\" value = \"Confirm Dispatch\"></form>";
        echo "</section>";
    }
?>
</section