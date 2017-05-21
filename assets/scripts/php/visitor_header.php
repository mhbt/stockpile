<!DOCTYPE html>
<head>
    <title>Stockpile-Home</title>
    <meta charset = 'utf-8'>
    <meta name ="viewport" content = "width=device-width, initial-scale =1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <?php
      include_once 'csshome.php';
     ?>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <nav class = "navbar navbar-default navbar-fixed-top">
            <div class = "container">
                <div class = "navbar-header">
                    <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#login-form"><span class = "glyphicon glyphicon-log-in"></span></button>
                    <a class = "navbar-brand" href = "index.php"> <h2 class = 'no-pm'> STOC<span class = 'glyphicon glyphicon-shopping-cart'></span>PILE</h2></a>
                </div>
                <div class = "collapse navbar-collapse" id = "login-form">
                 <form class = 'form-inline float-right'>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  type="text" class="form-control"  placeholder="username">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                          </div>

                        <div class="input-group">
                          <a href = "index.php" class = "btn btn-default">Log In
                            <i class="glyphicon glyphicon-log-in"></i>
                              </a>
                        </div>
                    </form>

                </div>
            </div>
        </nav>
    </header>
