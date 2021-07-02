<?php
session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $security_key = $_POST['security'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            // save to database;
            $user_id = random_num(20);
            $query = "INSERT INTO `user` (`user_id`,`user_name`,`password`,`name`,`phone`,`email`,`security_key`) VALUES ('$user_id','$user_name','$password','$name','$phone','$email','$security_key')";
            mysqli_query($con,$query);

            header("Location: login.php");
            die;
        }
        else
        {
            //echo "<div class='alert'> Please enter valid information. </div>";
            echo "<script> alert('Please enter valid information') </script>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signup_style.css" type="text/css">
        <script src="https://kit.fontawesome.com/2fef570697.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <a href="main.php" alt="HOME" class="home"><i class="fas fa-home"></i></a>
        <div class="container">
            <div class="div1">
                <img src="images/logo4.svg">
                <h1>Sign up </h1>
                <p> Welcome ! We are glad to see you here </p>
                <p class="login"> Already a user ? <a href="login.php"> Login </a>
            </div>
            <form method="post" class="form">
                <input class="input" type="text" placeholder="Name" name="name" required>
                <input class="input" type="contact" placeholder="Phone number" name="phone" required>
                <input class="input" type="email" placeholder="E-mail" name="email" required>
                <input class="input" type="text" placeholder="Username" name="user_name" required>
                <input class="input" type="password" placeholder="Password" name="password" required>
                <input class="input" type="password" placeholder="Security key (any key of your choice)" name="security" required> 
                <input class="btn" type="submit" value="Sign-up"> 
            </form>
        </div>
    </body>
</html>