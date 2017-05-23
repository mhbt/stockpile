<section class = "jumbotron admin-jumbotron text-center">
            <h2>Product Details</h2>
            <?php
                include_once "../assets/scripts/php/db.php";
                if (isset($_POST["submit"]))
                {
                    $product = addslashes(strtolower(trim($_POST['product'])));
                    $manufacturer = (strtolower(trim($_POST['manufacturer'])));
                    $quantity = addslashes(strtolower(trim($_POST['quantity'])));
                    
                    $request = "INSERT INTO request (c_id,p_name,p_manufacturer,p_quantity) VALUES ('{$_COOKIE['username']}','{$product}', '{$manufacturer}', {$quantity})";
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
                    include_once "../assets/scripts/php/add_product_form.php";
                }
            ?>
        </section>
