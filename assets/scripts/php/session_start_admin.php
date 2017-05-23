<?php
    echo $_POST['username'];
    $username = strtolower($_POST['username']);
    $password = md5($_POST['password']);
    include_once 'db.php';
    $query = "SELECT * "
        . "FROM user "
        . "WHERE username = '{$username}' AND (status = '{$username}')";
    $result = $db->query($query);
    if (mysqli_num_rows($result) > 0)
    {
        echo mysqli_num_rows($result);
        $data = $result->fetch_assoc();
        echo $data['password']; 
        if ($data['password'] == $password && ($data['status'] == 'admin' || $data['status'] == 'ordermanager'))
        {
            setcookie('site_manager',$username,time () + 60 * 60 * 10,'/');
            if ($data['username'] == 'admin')
            {
                header("Location:../../../public/admin.php?page=add_new_product");
            }
            else {
                //moiz chui code-header_rabbit.php
                echo "he is chutiya";
            }
        }
        else
        {
            
            setcookie('login_failed',$password,time() + 1,'/');
           header("Location:../../../public/admin.php");
        }     
    }
    else {
        setcookie('login_failed','failed',time() + 1,'/');
       header("Location:../../../public/admin.php");
        }
?>