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
                    <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#user"><span class = "glyphicon glyphicon-user"></span></button>
                    <a class = "navbar-brand" href = "index.html"> <h2 class = 'no-pm'> STOC<span class = 'glyphicon glyphicon-shopping-cart'></span>PILE</h2></a>
                </div>
                <div class = "collapse navbar-collapse navbar-right" id = "user">
                  <ul class = 'nav nav-bar nav-stacked  li-orange'>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-placement = "down"href="#">First Name
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu text-center">
                            <li><a href = "index.html"><span class = "glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp; Logout </a></li>
                        </ul>
                      </li>

                </div>
            </div>
        </nav>
    </header>
