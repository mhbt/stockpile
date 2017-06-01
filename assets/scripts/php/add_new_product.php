<section class = "jumbotron admin-jumbotron text-center">
            <h2>Product Details</h2>
         <?php
                $image_path = "";
                if (isset($_POST["submit"]))
                {
                    include_once "db.php";
                     //moving image to server
                    if (isset($_FILES['file']))
                    {
                        $image_path = "assets/images/products/" . $_FILES['file']['name'];
                        if ($_FILES['file']['size'] > 0)
                        {
                            if($_FILES['file']['size'] < 1024 * 500)
                            {
                               move_uploaded_file($_FILES['file']['tmp_name'],$image_path);
                            }
                            else
                            {
                                echo "<p>Image is more than 5 mb/s</p>";
                                die();
                            }
                        }
                        else
                        {
                            echo "<p>No Image uploaded</p>";
                            die();
                        }
                    }
                        $product = addslashes(strtolower(trim($_POST['product'])));
                        $category = addslashes(strtolower(trim($_POST['category'])));
                        $manufacturer = addslashes(strtolower(trim($_POST['manufacturer'])));
                        $quantity = doubleval($_POST['quantity']);
                        $price = doubleval($_POST['price']);
                        @ $featured = $_POST['featured'];
                        $add = "INSERT INTO products (p_name,p_category,p_manufacturer,p_qoh,p_price,image_path,featured) VALUES ('{$product}','{$category}','{$manufacturer}', {$quantity}, {$price}, '{$image_path}','{$featured}')";
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
                    include_once "assets/scripts/php/add_product_form.php";
                }
            ?>
        </section>
