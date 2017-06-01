<?php
     session_start();
    if (isset($_SESSION['site_manager'])) {
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
         include_once("assets/scripts/php/admin_login.php");
    }
 ?> 
