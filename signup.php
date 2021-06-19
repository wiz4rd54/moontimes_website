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
        $event_type = $_POST['event_Type'];
        $event_date = $_POST['event_Date'];
        $event_place = $_POST['event_Place'];
        $event_budget = $_POST['event_Budget'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            // save to database;
            $user_id = random_num(20);
            $query = "insert into users (user_id,name,phone,email,user_name,password,security_key,eventType, eventDate, eventPlace, eventBudget) values ('$user_id','$name','$phone','$email','$user_name','$password','$security_key','$event_type','$event_date','$event_place','$event_budget')";
            mysqli_query($con,$query);

            header("Location: login.php");
            die;
        }
        else
        {
            echo "Please enter some valid information !";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signupstyle.css" type="text/css">        
    </head>
    <body>
        <form method="post" class="form">
            <input class="input" type="text" placeholder="Name" name="name" required>
            <input class="input" type="contact" placeholder="Phone number" name="phone" required>
            <input class="input" type="email" placeholder="E-mail" name="email" required>
            <input class="input" type="text" placeholder="username" name="user_name" required>
            <input class="input" type="password" placeholder="password" name="password" required>
            <input class="input" type="password" placeholder="Your first school you attended (for security)" name="security" required> 
            <input class="input" type="text" placeholder="eg Corporate event, birthday etc." name="event_Type" required>
            <input class="input" type="date" name="event_Date" required>
            <input class="input" type="text" placeholder="Place of event" name="event_Place" required>
            <input class="input" type="number" style="-webkit-appearance:none; -moz-appearance:textfield" name="event_Budget" required>
            <input class="btn" type="submit" value="Sign-up"> 
        </form>
    </body>
</html>