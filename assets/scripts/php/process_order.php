<?php
    if (isset($_POST['buy']))
    {
        include_once "db.php";
        $id = $_GET['id'];
        $quantity = $_POST['quantity'];
        $username = $_COOKIE['username'];
        $fill_order = "INSERT INTO product_order (o_status,o_date,c_id) VALUES ('no',curdate(),'{$username}')";
        $result =$db->query($fill_order);
        echo $result;
        //$fill_product = "INSERT INTO customer_order"
        
    }
?>