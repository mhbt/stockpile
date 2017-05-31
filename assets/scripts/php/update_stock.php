<?php //var_dump($_POST);
    include_once "db.php";
    $query = "UPDATE products SET p_qoh = p_qoh + {$_POST['quantity_added']} WHERE p_id = {$_POST['product_id']}";
    echo $db->query($query);
    header('Refresh:0; URL=../../../public/order.php?view=stock');

 ?>