<?php
  if (isset($_COOKIE['username'])) {
    include_once("../assets/scripts/php/admin_login_header.php");
    include_once("../assets/scripts/php/admin_main.php");
  }
  else {
    include_once("../assets/scripts/php/admin_login.php");
  }
 ?>
        
    