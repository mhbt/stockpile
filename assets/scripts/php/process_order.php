<?php
    if (isset($_POST['buy']))
    {
        include_once "db.php";
        $p_id = $_GET['id'];
        $quantity = $_POST['quantity'];
        $username = $_COOKIE['username'];
        $update_qoh = "UPDATE products SET p_qoh = (p_qoh - {$quantity}) WHERE p_id =  {$p_id}";
        $db->query($update_qoh);
        $check_orders = "SELECT o_id FROM product_order WHERE c_id = '{$username}'";
        $result = $db->query($check_orders);
        $count = mysqli_num_rows($result);
        $result->free();
        //echo $count;
        $order = $username . ($count + 1);
        $fill_order = "INSERT INTO product_order (o_name,o_status,o_date,c_id) VALUES ('{$order}','no',curdate(),'{$username}')";
        $result =$db->query($fill_order);
        //echo $result;
        $pull_order_id = "SELECT o_id FROM product_order WHERE o_name = '{$order}'";
        $result = $db->query($pull_order_id);
        $o_id = $result->fetch_assoc();
        $o_id = $o_id['o_id'];
        //echo $o_id;
        $result->free();
        $fill_product = "INSERT INTO customer_order VALUES ({$o_id},{$p_id},{$quantity})";
        $result =$db->query($fill_product);
        //echo $result;
        header("Location:../../../public/pending_shipments.php");
        
    }
    
?>