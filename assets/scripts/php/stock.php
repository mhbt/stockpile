
        <section class = "jumbotron admin-jumbotron text-center">
            <h2 class = "heading-orange">Inventory</h2>
            <?php
                include_once "assets/scripts/php/db.php";
                $product = "SELECT p_id 'Product ID', upper(p_name) 'Product Name', upper(p_category) 'Category', upper(p_manufacturer) 'Manufacturer', p_price 'Price', p_qoh Quantity FROM products";
            $result = $db->query($product);
            $data = $result->fetch_assoc();
            $count = mysqli_num_rows($result);
            echo "<p>Total Products In Inventory : {$count}</p>";
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
                          echo "<th class = \"text-center\">Add To Quantity <small>(relative)</small></th>";
                          echo "<th class = \"text-center\">Update Stock</th>";
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
                                if ($data['Quantity'] < 1) echo "<tr class = \"bg-red\">";
                                else echo "<tr>";
                              foreach ($data as $key => $value) 
                              {
                                  echo "<td>{$value}</td>";
                              }
                              echo "<form method = \"POST\" action = \"assets/scripts/php/update_stock.php\">";
                              echo "<td><input name = \"quantity_added\" type = \"number\" class = \"form-control\" required></td>";
                              echo "<td hidden><input name = \"product_id\" type = \"number\" class = \"form-control\" value = \"{$data['Product ID']}\" hidden></td>";
                              echo "<td><input name = \"update\" type = \"submit\" class = \"form-control btn btn-danger\" value = \"Update\"></td>";
                              echo "</form>";
                              $data = $result->fetch_assoc();
                              echo "</a></tr>";
                            }
                        }
                        else 
                        {
                           echo "<small>No Product Found!.</small>";
                        }
                    ?>
                      
                </tbody>
              </table>

        </section>
</body>