<?php
    session_start();
    if (isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
        include_once "db.php";
        $check_orders = "SELECT o_id FROM product_order WHERE c_id = '{$username}'";
        $result = $db->query($check_orders);
        $count = mysqli_num_rows($result);
        $result->free();
        $order = $username . ($count + 1);
        $fill_order = "INSERT INTO product_order (o_name,o_status,o_date,c_id) VALUES ('{$order}','no',curdate(),'{$username}')";
        $result =$db->query($fill_order);
        $pull_order_id = "SELECT o_id FROM product_order WHERE o_name = '{$order}'";
        $result = $db->query($pull_order_id);
        $o_id = $result->fetch_assoc();
        $o_id = $o_id['o_id'];
        $result->free();
        foreach ($_SESSION['cart'] as $p_id => $p_name)
        {
            $quantity = $_SESSION['quantity'][$p_id];
            $fill_product = "INSERT INTO customer_order VALUES ({$o_id},{$p_id},{$quantity})";
            $result =$db->query($fill_product);
        }
        unset($_SESSION['cart']);
        unset($_SESSION['qunatity']);
        $_SESSION['cart'] = array();
        $_SESSION['quantity'] = array();
        header("Location:../../../order_details.php?order_id={$o_id}");
    }
?>