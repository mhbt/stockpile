<section class = "jumbotron admin-jumbotron text-center">
    <h2 class = "heading-orange">Requests</h2>
    <?php
        include_once "db.php";
        $request_query= "SELECT * FROM request";
        $result=$db->query($request_query);
        $request_count = mysqli_num_rows($result);
        if ($request_count < 1)
        {
            echo "<p>You have no request/s.</p>";
            die();
        }
        ?>
    <table class = "table table-responsive table-hover">
    <tr>
    <th>Product Name</th><th>Manufacturer</th><th>Quantity</th><th>By</th><th>To Do</th>
    </tr>
    <?php
    while($req=$result->fetch_assoc()){
        ?>
    <tr>
    <td><?php echo strtoupper($req["p_name"]);
    ?>
    </td>
    <td><?php echo strtoupper($req["p_manufacturer"]);
    ?></td>
    <td><?php echo $req["p_quantity"];
    ?></td>
    <td><?php echo $req["c_id"];
    ?></td>
    <td><a href =<?php echo"assets/scripts/php/delete_request.php?request={$req['req_id']}"; ?>>delete</a></td>
    </tr>
    <?php 
    }?>
    </table>
</section>