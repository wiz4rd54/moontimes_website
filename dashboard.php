<?php
session_start();

    $_SESSION;
    include("connection.php");
    include("function.php");
    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="dashboardui.css" type="text/css">
    </head>
    <body>
        <h1> Dashboard </h1>
        <p><?php echo $user_data['user_name'];?></p>
        <a href="logout.php">logout</a>
    </body>
</html>