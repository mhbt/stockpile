<?php setcookie('site_manager','', time() - 86400, '/');
    session_start();
    session_unset();
    session_destroy();
    header('Location:../../../admin.php');
?>