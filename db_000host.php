<?php
//connecting data base directly
    $db =  new mysqli('localhost','id1837723_admin','database7886','id1837723_stockpile');
    if (mysqli_connect_errno())
    {
        echo "<br><p>Couldn't connect to database</p><br>";
    }
?>

