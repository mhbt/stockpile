<?php
    echo $_POST['username'];
    $username = strtolower($_POST['username']);
    $password = md5($_POST['password']);
    include_once 'db.php';
    $query = "SELECT * "
        . "FROM user "
        . "WHERE username = '{$username}'";
    $result = $db->query($query);
echo $query;
    if (mysqli_num_rows($result) >= 0)
    {
        echo mysqli_num_rows($result);
        $data = $result->fetch_assoc();
        if ($data['password'] == $password && $data['status'] == 'customer')
        {
            setcookie('username',$username,time () + 60 * 60 * 10,'/');
            header("Location:../../../public/index.php");
        }
        else
        {
            global $password_matched;
            $password_matched = false;
             header("Location:../../../public/index.php");
        }
    }
    else {
        global $user_exist;
        $user_exist = false;
         header("Location:../../../public/index.php");
    }
?>