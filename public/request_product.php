<?php
    if (isset($_COOKIE['username']))
    {
        include_once "../assets/scripts/php/login_header.php";
    }
    else {
        echo "<a href = \"index.php\">You are required to log-in first!</a>";
    }
?>
    <section class =  "container-fluid sections-wrapper">
        <section class = "jumbotron user-jumbotron text-center">
            <h2>Request Details</h2>
            <?php
                include_once "../assets/scripts/php/db.php";
                if (isset($_POST["submit"]))
                {
                    $product = addslashes(strtolower(trim($_POST['product'])));
                    $manufacturer = (strtolower(trim($_POST['manufacturer'])));
                    $quantity = addslashes(strtolower(trim($_POST['quantity'])));
                    
                    $request = "INSERT INTO request VALUES (1,'{$_COOKIE['username']}','{$product}', '{$manufacturer}', '{$quantity}')";
                    echo $request;
                    $success = $db->query($request);
                    if( $success)
                    {
                        echo "<p>Your Request is submitted successfully!</p>";
                    }
                    else
                    {
                        echo "<p>Your Request had undergone a problem!</p>";
                    }
                    
                }
                else
                {
                    include_once "../assets/scripts/php/request_form.php";
                }
            ?>
        </section>
        
<?php
    include_once '../assets/scripts/php/footer.php';
   ?>
</body>