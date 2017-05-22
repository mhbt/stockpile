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
                $user_details = "SELECT * FROM user "
                    . "WHERE username = '{$_COOKIE['username']}' ";
            //echo $user_details;
            $result = $db->query($user_details);
            $data = $result->fetch_assoc();
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