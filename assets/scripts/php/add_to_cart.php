 <?php 
    session_start();
    if(isset($_SESSION['cart'])) {
        //code
    }
    else {
        $_SESSION['cart'] = array();
        $_SESSION['quantity'] = array(); 
    }
    if (isset($_POST['id'], $_POST['quantity']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $_SESSION['cart'][$id]= $name;
        $_SESSION['quantity'][$id]= $quantity;
        include_once "db.php";
        $update_qoh = "UPDATE products SET p_qoh = (p_qoh - {$_POST['quantity']}) WHERE p_id =  {$_POST['id']}";
        $db->query($update_qoh);
        echo "Added To Cart";
    }
 
 ?>