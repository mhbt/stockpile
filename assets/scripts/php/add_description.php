<section class = "jumbotron admin-jumbotron text-center">
 <?php
        $image_path = "";
        if (isset($_POST["submit"]))
        {
            include_once "db.php";
            $product = addslashes(strtolower(trim($_POST['product'])));
            $category = addslashes(strtolower(trim($_POST['category'])));
            $manufacturer = addslashes(strtolower(trim($_POST['manufacturer'])));
            $quantity = doubleval($_POST['quantity']);
            $price = doubleval($_POST['price']);
            $add = "INSERT INTO products (p_name,p_category,p_manufacturer,p_qoh,p_price,image_path) VALUES ('{$product}','{$category}','{$manufacturer}', {$quantity}, {$price}, '{$image_path}')";
            $success = $db->query($add);
            if( $success)
            {
                echo "<p>Product is added successfully!</p>";
                echo "<a href = \"admin.php?page=add_new_product\">Add  More</a>";
            }
            else
            {
                echo "<p>Product addtion had undergone a problem!</p>";
            }

        }
        else
        {
            include_once "../assets/scripts/php/add_description_form.php";
        }
    ?>
</section>
