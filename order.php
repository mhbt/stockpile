<?php

if (isset($_COOKIE['site_manager']))
{
   if( $_COOKIE['site_manager'] == 'ordermanager')
   {
       include_once("assets/scripts/php/admin_login_header.php");
       include_once "assets/scripts/php/order_main.php";


   }
   else {
       echo "<p>This page is not meant for you.</p>";
       die();
   }
}
else {
    echo "<p>Login to obtain this service.<a href = 'admin.php'>Go to Login Page</a></p>";
    die();
}


?>