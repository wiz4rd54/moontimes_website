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
            $query = "select * from user where user_name = '$user_name' limit 1";
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
            $query = "select * from user where email = '$user_name' limit 1";
            $result = mysqli_query($con,$query);
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
            //echo "<div class='alert'> Wrong Credentials ! Try again. </div>";
            echo "<script> alert('Username or password incorrect') </script>";
        }
        else
        {
            //echo "<div class='alert'> Username or password entered is not correct </div>";
            echo "<script> alert('Username or password incorrect') </script>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login_style.css" type="text/css">
        <script src="https://kit.fontawesome.com/2fef570697.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <a href="main.php" alt="HOME" class="home"><i class="fas fa-home"></i></a>
        <form method="post" class="form">
            <img src="images/logo4.svg">
            <h1> Login </h1>
            <input class="input" type="text" placeholder="Username or Email" name="user_name">
            <input class="input" type="password" placeholder="Password" name="password"> 
            <input class="btn" type="submit" value="Login"> 
            <a href="forgot.php" class="fpwd"> Forgot Password </a>
            <a href="signup.php" style="margin-top:10px;" class="signup">Sign-up</a>
        </form>
    </body>
</html>