<?php
//connecting data base directly
    $db =  new mysqli('localhost','root','','stockpile');
    if (mysqli_connect_errno())
    {
        echo "<br><p>Couldn't connect to database</p><br>";
    }
?>

