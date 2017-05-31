<section class = "jumbotron admin-jumbotron text-center">
    <?php
        include_once "db.php";
        $sales_total= "SELECT sum( p.p_price * o.p_sold) revenue FROM products p, customer_order o WHERE p.p_id= o.p_id";
        $result=$db->query($sales_total);
        $sales_total = $result->fetch_assoc();
        $sales = "SELECT p.p_name product, p.p_price 'unit price',sum(o.p_sold) quantity, sum(p.p_price * o.p_sold) 'sale price' FROM products p, customer_order o WHERE p.p_id= o.p_id GROUP BY p.p_name";
        $result->free();
        $result = $db->query($sales);
        if (mysqli_num_rows($result) < 1)
        {
            echo "<p>You Have No Sales.</p>";
        }

    ?>
    <h2 class = "heading-orange">Sales <?php echo "Total: {$sales_total['revenue']}/-"; ?></h2>
    <table class = "table table-responsive table-hover">
    <tr>
    <th>Product Name</th><th>Unit Price</th><th>Quantity</th><th>Sales Price</th>
    </tr>
    <?php
    while($req=$result->fetch_assoc()){
        ?>
    <tr>
    <td><?php echo strtoupper($req["product"]);
    ?>
    </td>
    <td><?php echo strtoupper($req["unit price"]);
    ?></td>
    <td><?php echo $req["quantity"];
    ?></td>
    <td><?php echo $req["sale price"];
    ?></td>
    </tr>
    <?php 
    }?>
    </table>
</section>