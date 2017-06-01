<?php
    include_once "db.php";
    $query = "DELETE FROM request WHERE req_id = {$_GET['request']}";
    echo $db->query($query);
    header('Refresh:0;URL=../../../admin.php?page=manage_requests');

?>