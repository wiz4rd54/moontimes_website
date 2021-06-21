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
        <link rel="stylesheet" href="dashboard-ui.css" type="text/css">
    </head>
    <body>
        <h1><?php echo $user_data['user_name']."'s";?> Dashboard </h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="setting.php">Settings</a></li>
            </ul>
        </nav>
        <a href="logout.php">logout</a>
    </body>
</html>