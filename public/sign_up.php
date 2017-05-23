<!DOCTYPE html>
<head lang = "en">
    <title>Stockpile-sign Up</title>
    <meta charset = "utf-8">
    <meta name ="viewport" content = "width=device-width, initial-scale =1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url("../assets/images/sign_up_background.jpg");
            background-position: center;
            background-size: cover;
        }
        .container {
            width: 50%;
            margin:auto;
            box-shadow: 5px 0px 40px  rgba(0,.7,.1, .9);
            color: Grey !important;
        }
        .jumbotron {
          background-color: rgba(0,0,0,0.05)!important;
        }
        .jumbotron a {
            color:#fff;
        }
        .jumbotron a:hover {
            color: #f4511e;
            text-decoration: none;
        }
        .btn-primary {
            background-color: #fff;
            border-color: #fff;
            color :#f4511e;
        }
        .btn-primary:hover {
            background-color: #f4511e;
            border-color: white;
        }
        .center {
            margin: auto !important;
        }
    </style>
</head>
<body>
    <section class = "container">
        <div class = "jumbotron text-center">
            <h2><a href = "index.php">  STOC<span class = 'glyphicon glyphicon-shopping-cart'></span>PILE</a></h2>
        <?php 
    
            if (isset($_POST["submit"]))
            {
                include_once ("../assets/scripts/php/db.php");
                //getting values from post method _POST;
                $username = strtolower($_POST['username']);
                $password = md5($_POST['password']);
                $email = strtolower($_POST['email']);
                $login_details = "INSERT INTO user VALUES ('{$username}', '{$password}','{$email}', 'customer')";
                
               $fname = strtolower($_POST['fname']);
                $lname = strtolower($_POST['lname']);
                $phone = $_POST['phone'];

                $customer_details = "INSERT INTO customer VALUES ('{$username}', '{$fname}','{$lname}', '{$phone}')";

                $street =strtolower( $_POST['street']);
                $house = strtolower($_POST['house']);
                $city = strtolower($_POST['city']);
                $state = strtolower($_POST['state']);
                $country = strtolower($_POST['country']);
                //confirming if username is available
                $query = "select username from user";
                $result = $db->query($query);
                $row = $result->fetch_assoc();
                $address_details = "INSERT INTO customer_address VALUES ('{$username}', '{$street}','{$house}', '{$city}','{$state}', '{$country}')";
                if ($username == $row['username'])
                {
                    echo("<h2>username is not available</h2>");
                    include_once ("../assets/scripts/php/sign_up_form.php");
                    die ();
                }
                
                $success1 = $db->query($login_details);
                $success2 = $db->query($customer_details);
                $success3 = $db->query($address_details);
                echo "<h2>Welcome to Stockpile. Happy Shopping!</h2>";
                echo "<a href = \"index.php\">Continue to login page...</a>";
            }
            else {
                include_once ("../assets/scripts/php/sign_up_form.php");
            }


        ?>
            
            
        </div>
    </section>
</body>
