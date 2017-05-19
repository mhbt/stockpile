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
<?php 
    
    if (isset($_POST["submit"]))
    {
        include_once ("../assets/scripts/php/db.php");
        
        $login_details = "INSERT INTO "
    }


?>
    <section class = "container">
        <div class = "jumbotron text-center">
            <h2><a href = "index.html">  STOC<span class = 'glyphicon glyphicon-shopping-cart'></span>PILE</a></h2>
        </header>
        <form method = "POST" action = "sign_up.php">
            <field>
                <legend>Sign Up</legend>
                <small>Login Details</small>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name = "username"  type="text" class="form-control"  placeholder="username" required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input name = "password" type="password" class="form-control"  placeholder="password"  required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                    <input name = "confirm_password" type="password" class="form-control"  placeholder="confirm password"  required>
                </div>
                <br>
                  <small>Personal Information</small>
                    <div class="input-group">
                        <span class="input-group-addon">First Name</span>
                        <input name = "fname" type="text" class="form-control"  placeholder=""  required>
                    </div>
                     <div class="input-group">
                        <span class="input-group-addon">Last Name</span>
                        <input name = "lname" type="text" class="form-control"  placeholder=""  required>
                    </div>
                <br>
                <small>Contact Information</small>
                <div class="input-group">
                    <span class="input-group-addon"><i class = "glyphicon glyphicon-envelope"></i></span>
                    <input name = "email" type="email" class="form-control"  placeholder="email"  required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class = "glyphicon glyphicon-phone"></i></span>
                    <input name = "phone" type="number" class="form-control"  placeholder="phone"  required>
                </div>
                <br>
                <small>Address
                Information</small>
                 <div class="input-group">
                    <span class="input-group-addon">House #</span>
                    <input name = "house" type="text" class="form-control"  placeholder=""  required>
                </div>
                 <div class="input-group">
                    <span class="input-group-addon">Street #</span>
                    <input name = "street" type="text" class="form-control"  placeholder=""  required>
                </div>
                 <div class="input-group">
                    <span class="input-group-addon"> City </span>
                    <input name = "city" type="text" class="form-control"  placeholder=""  required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Zip</span>
                    <input name = "zip" type="number" class="form-control"  placeholder=""  required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Country</span>
                    <input name = "country" type="text" class="form-control"  placeholder=""  required>
                </div>
            </field>
            <br>
            <div class = "input-group center">
                <button  type = "submit" name = "submit" class = "btn btn-primary btn-lg">Sign Up</button>
            </div>
        </form>
    </div>
</body>
