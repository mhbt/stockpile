<?php
  session_start();
  if (isset($_SESSION['username'])) {
    include_once("assets/scripts/php/login_header.php");
  }
   else {
        echo "<a href = \"index.php\">You are required to log-in first!</a>";
        die();
    }
 ?> 
    <section class =  "container-fluid sections-wrapper">
        <section class = "jumbotron user-jumbotron text-center">
            <h2>Request Details</h2>
            <?php
                include_once "assets/scripts/php/db.php";
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
                    include_once "assets/scripts/php/request_form.php";
                }
            ?>
        </section>
</section>
<?php
    include_once 'assets/scripts/php/footer.php';
   ?>
</body>