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
        <script src="https://kit.fontawesome.com/2fef570697.js" crossorigin="anonymous"></script>
        <script src="todo.js"></script>
    </head>
    <body>
        <nav class="navbar">
            <h1 id="username"><?php echo $user_data['user_name']."'s";?> Dashboard </h1>
            <ul>
                <li><a href="dashboard.php"><i class="fas fa-home"></i></a></li>
                <li><a href="setting.php"><i class="fas fa-cog"></i></a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </nav>
        <main>
            <section class="quickstat">
                <div class="stats"> Event Budget </div>
                <div class="stats"> Cost </div>
                <div class="stats"> Date </div>
            </section>
            <section class="todo">

            </section>
            <section class="chat">

            </section>
        </main>
    </body>
</html>