<?php
session_start();

    $_SESSION;
    include("connection.php");
    include("function.php");
    $user_data = check_login($con);
    $user_id = $user_data['user_id'];
    
    /*$query = "SELECT * FROM events WHERE user_id ='$user_id'";
    $result = mysqli_query($con, $query);
    $events = mysqli_fetch_all($result);
    foreach ($events as $event)
    {   
        foreach ($event as $e)
        {
            echo $e;
        }
    }*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="dashboardui.css" type="text/css">
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
                <li><a href="newevent.php"><i class="fas fa-plus"></i></a></li>
            </ul>
        </nav>
        <main>
            <section class="quickstat">
                <div class="stats"> Event Budget </div>
                <div class="stats"> Cost </div>
                <div class="stats"> Date </div>
            </section>
            <section class="events">
                <ul class="events list">
                    <li> 
                </ul>
            </section>
            <section class="chat">

            </section>
        </main>
    </body>
</html>