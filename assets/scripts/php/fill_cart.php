<?php 
    session_start();
// This file serves the purpose of fillilng the shopping cart
    if(isset($_GET['command'],$_SESSION['cart']))
    {
        if ($_GET['command'] == "count")
        {
            echo sizeof($_SESSION['cart']);
        }
        else if ($_GET['command'] == "p_enlist")
        {
            foreach ($_SESSION['cart'] as $p_id => $p_name)
            {
                echo "<div class = \"item\"><p class = \"item-name left\">{$p_name} ({$_SESSION['quantity'][$p_id]})</p> <button onclick = \"lift_product({$p_id}); count_products(); list_products(); calc_cost(); return false;\" class = \"btn btn-xs  item-remove right\"><span class = \"glyphicon glyphicon-remove\"></span</button></div>";
            }
        }
        else if ($_GET['command'] == "p_cost")
        {
            include_once "db.php";
            $cost = 0;
            $p_ids = AS_IN();
            //echo $p_ids;
            $query = "SELECT p_id,p_price FROM products WHERE p_id IN ($p_ids)";
            @ $result = $db->query($query);
            @ $result_count = mysqli_num_rows($result);
            for ($i = 0; $i < $result_count; $i++)
            {
                $data = $result->fetch_assoc();
                $curr_id = $data['p_id'];
                $curr_price = $data['p_price'];
                $cost += $curr_price * $_SESSION['quantity'][$curr_id];
            }
            echo "Total: RS-{$cost}/-";
        }
        else if ($_GET['command'] == "p_lift"){
            $p_id = $_GET['id'];
             include_once "db.php";
            $update_qoh = "UPDATE products SET p_qoh = (p_qoh + {$_SESSION['quantity'][$p_id]}) WHERE p_id =  {$p_id}";
            $db->query($update_qoh);
            unset($_SESSION['cart'][$p_id]);
            unset($_SESSION['quantity'][$p_id]);
        }
        else {
            echo "";
        }
    }
    else {
         if ($_GET['command'] == "count")
        {
            echo 0;
        }
        else if ($_GET['command'] == "p_enlist")
        {
            
        }
        else if ($_GET['command'] == "p_cost")
        {
            $cost = 0;
            echo "Total: RS-{$cost}/-";
        }
        else if ($_GET['command'] == "p_lift"){
        }
    }
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