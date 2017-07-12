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
            <h2>Your Details</h2>
            <?php
                include_once "assets/scripts/php/db.php";
                $user_details = "SELECT u.username  USERNAME,  u.email EMAIL,  upper(concat(c.c_fname, ' ',c.c_lname)) NAME,  upper(concat(house_no,',',street_no,',',city,',',state,',',country)) ADDRESS FROM user u, customer c, customer_address a "
                    . "WHERE u.username = '{$_COOKIE['username']}' "
                        . "AND c.username = '{$_COOKIE['username']}' "
                            . "AND a.a_id = '{$_COOKIE['username']}'";
            //echo $user_details;
            $result = $db->query($user_details);
            $data = $result->fetch_assoc();
            ?>
            <table class="table table-hover table-responsive">
                <tbody>
                  <?php
                    foreach($data as $key => $value)
                    {
                      echo "<tr><td>{$key}</td><td>{$value}</td>";
                    }       
                    ?>
                </tbody>
              </table>

        </section>
        
<?php
    include_once 'assets/scripts/php/footer.php';
   ?>
</body>