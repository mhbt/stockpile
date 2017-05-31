<?php
    include_once "db.php";
    //var_dump ($_POST);
    if(isset($_POST['submit'])){
         $order_dispatched = "UPDATE product_order SET o_status = 'yes' WHERE o_id = {$_POST['o_id']}";   
         //echo $db->query($order_dispatched);
         
    }
    //header("Location:../../../public/order.php?view=orders");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset= "utf-8">
        <meta http-equiv="refresh" content="0;URL='../../../public/order.php?view=orders'" />  
    </head>
</html>