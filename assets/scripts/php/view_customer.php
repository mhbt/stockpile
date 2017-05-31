<section class = "jumbotron admin-jumbotron text-center">
    <h2 class = "heading-orange">Customers</h2>
    <?php
        include_once "db.php";
        $customer="select * from customer";
        $result=$db->query($customer);
        $customer_count = mysqli_num_rows($result);
        if ($customer_count < 1)
        {
            echo "<p>You have no customer</p>";
            die();
        }
        ?>
    <table class = "table table-responsive table-hover">
    <tr>
    <th>First Name</th><th>Last Name</th><th>Phone</th><th>Username</th>
    </tr>
    <?php
    while($cus=$result->fetch_assoc()){
        ?>
    <tr>
    <td><?php echo strtoupper($cus["c_fname"]);
    ?>
    </td>
    <td><?php echo strtoupper($cus["c_lname"]);
    ?></td>
    <td><?php echo $cus["c_phone_no"];
    ?></td>
    <td><?php echo $cus["username"];
    ?></td>
    </tr>
    <?php 
    }?>
    </table>
</section>