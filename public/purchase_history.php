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
            <h2>Your Details</h2>
            <?php
                include_once "../assets/scripts/php/db.php";
                $purchase_history = "SELECT * FROM product_order "
                    . "WHERE c_id = '{$_COOKIE['username']}' ";
            echo $purchase_history;
            $result = $db->query($purchase_history);
            $data = $result->fetch_assoc();
            $count = mysqli_num_rows($result);
            echo "<p>Total Purchases : {$count}</p>";
            ?>
            <table class="table table-hover table-responsive">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Firstname</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Anna</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Debbie</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>John</td>
                  </tr>
                </tbody>
              </table>

        </section>
        
<?php
    include_once '../assets/scripts/php/footer.php';
   ?>
</body>