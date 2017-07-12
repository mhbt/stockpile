<!DOCTYPE html>
<head lang = "en">
    <title>Stockpile</title>
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
            background-image: url("assets/images/sign_up_background.jpg");
            background-position: center;
            background-size: auto;
        }
        .container {
            margin-top: 150px !important;
            width: 25%;
            margin:auto;
            box-shadow: 5px 0px 40px  rgba(0,.7,.1, .9);
            color: #fff !important;
        }
         @media screen and (max-width: 768px) {
        .container {
            width:100%;
        }
      }
        .jumbotron {
          background-color: rgba(0,0,0,0.015)!important;
          border-radius: 10px;
        }
        .jumbotron a {
            color:#fff;
        }
        .jumbotron a:hover {
            color: #f4511e;
            text-decoration: none;
        }
        .jumbotron legend {
            color: grey;
        }
        .btn-primary {
            background-image: url("assets/images/sign_up_background.jpg");
            background-position: center;
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
        .form-control {
            background: transparent;
            border: 0;
        }
        .input-group-addon {
            background: transparent;
            border: 0;
        }
    </style>
</head>
<body>
    <?php //echo md5('sitemanager')?>
    <section class = "jumbotron container text-center">
        <form method = "POST" action = "assets/scripts/php/session_start_admin.php">
            <field>
                <legend>Administration Login</legend>
                <small>Username</small>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input  name = "username"  type="text" class="form-control"  placeholder="username" required>
                </div>
                <small>password</small>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input name = "password" type="password" class="form-control"  placeholder="password"  required>
                </div>
                <?php
                    if (isset($_COOKIE['login_failed']))
                    {
                        echo "<div class=\"input-group text-center\">
                    <kbd> username or password is incorrect</kbd>
                        </div>";
                    }
                 ?>
            </field>
            <br>
            <div class = "input-group center">
                <button  type = "submit" name = "submit" class = "btn btn-primary btn-lg">Sign In</button>
            </div>
        </form>
    </section>
</body>