<?php
session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            // read from database;
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result  = mysqli_query($con,$query);

            if ($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {
                        $_SESSION['user_id']=$user_data['user_id'];
                        header("Location: dashboard.php");
                        die;
                    }
                }
            }
            echo " Wrong username or password !";
        }
        else
        {
            echo "<div class='alert'> Username of password entered is not correct </div>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login_style.css" type="text/css">
    </head>
    <body>
        <form method="post" class="form">
            <img src="images/logo4.svg" style="height: 150px; width: 150px; margin:0;">
            <input class="input" type="text" placeholder="username" name="user_name">
            <input class="input" type="password" placeholder="password" name="password"> 
            <input class="btn" type="submit" value="Login"> 
            <a href="forgotpassword.php" class="fpwd"> Forgot Password </a>
            <a href="signup.php" style="margin-top:10px;" class="signup">Sign-up</a>
        </form>
    </body>
</html>