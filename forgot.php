<?php
session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $security_code = $_POST['securityCode'];
        $new_pwd = $_POST['newpass'];

        if(!empty($user_name) && !empty($security_code) && !empty($new_pwd) && !is_numeric($user_name))
        {
            // read from database;
            $query = "select * from user where user_name = '$user_name' limit 1";
            $result  = mysqli_query($con,$query);

            if ($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    $user_id = $user_data['user_id'];
                    
                    if($user_data['security_key'] === $security_code)
                    {
                        $query = "UPDATE `user` SET `password`='$new_pwd' WHERE `user_id`='$user_id'";
                        $result = mysqli_query($con,$query);
                        if ($result)
                        {
                            header('Location: login.php');
                            die;
                        }
                        else
                        {
                            echo 'Not able to connect to server';
                        }
                    }
                }
            }

            $query = "select * from user where email = '$user_name' limit 1";
            $result = mysqli_query($con,$query);
            if ($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    $user_id = $user_data['user_id'];
                    
                    if($user_data['security_key'] === $security_code)
                    {
                        $query = "UPDATE `user` SET `password`='$new_pwd' WHERE `user_id`='$user_id'";
                        $result = mysqli_query($con,$query);
                        if ($result)
                        {
                            header('Location: login.php');
                            die;
                        }
                        else
                        {
                            echo 'Not able to connect to server';
                        }
                    }
                }
            }
            echo " Wrong data entered ! ";
        }
        else
        {
            echo "<div class='alert'> Username/E-mail or security code not entered. </div>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="loginstyle.css" type="text/css">
    </head>
    <body>
        <form method="post" class="form">
            <img src="images/logo4.svg" style="height: 150px; width: 150px; margin:0;">
            <input class="input" type="text" placeholder="Username or Email" name="user_name">
            <input class="input" type="password" placeholder="Security Code" name="securityCode">
            <input class="input" type="password" placeholder="New Password" name="newpass"> 
            <input class="btn" type="submit" value="Change Password">
            <a href="login.php" class="fpwd"> Back to Login </a>
        </form>
    </body>
</html>

