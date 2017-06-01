<?php
    if (isset($_COOKIE['username']))
    {
        include_once "assets/scripts/php/login_header.php";
    }
    else {
        echo "<a href = \"index.php\">You are required to log-in first!</a>";
        die();
    }
?>
    <section class =  "container-fluid sections-wrapper">
        <section class = "jumbotron user-jumbotron text-center">
            <h2>Pending Shipments</h2>
            <?php
                include_once "assets/scripts/php/db.php";
                $shipments = "SELECT o_id 'ORDER ID', o_status DELIVERED, o_date DATE FROM product_order "
                    . "WHERE c_id = '{$_COOKIE['username']}' AND o_status = 'no' ";
            //echo $purchase_history;
            $result = $db->query($shipments);
            $data = $result->fetch_assoc();
            $count = mysqli_num_rows($result);
            echo "<p>Total Shipments So Far : {$count}</p>";
            ?>
            <table class="table table-hover table-responsive">
                <thead>
                  <tr>
                    <?php 
                      if( $count > 0)
                      {
                          foreach ($data as $key => $value) 
                          {
                              echo "<th class = \"text-center\">{$key}</th>";
                          }
                      }
                      ?>
                  </tr>
                </thead>
                <tbody>
                  
                    <?php
                        if( $count > 0)
                        {
                            for ( $i = 0; $i < $count; $i++)
                            {
                              echo "<tr>";
                              foreach ($data as $key => $value) 
                              {
                                  echo "<td>{$value}</td>";
                              }
                              echo "<td><a class = \"li-orange\" href = 'order_details.php?order_id={$data['ORDER ID']}'>View</a></td>";
                              $data = $result->fetch_assoc();
                              echo "</a></tr>";
                            }
                        }
                        else 
                        {
                           echo "<small>No Pending shipments!.</small>";
                        }
                    ?>
                      
                </tbody>
              </table>

        </section>
        
<?php
    include_once 'assets/scripts/php/footer.php';
   ?>
</body>