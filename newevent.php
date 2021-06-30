<?php
session_start();

    include("connection.php");
    include("function.php");
    $user_data = check_login($con);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_id = $user_data['user_id'];
        $event_type = $_POST['event_Type'];
        $event_date = $_POST['event_Date'];
        $event_place = $_POST['event_Place'];
        $event_budget = $_POST['event_Budget'];
        $event_des = $_POST['event_Description'];
        $event_id = random_num(20);
        $query = "INSERT INTO `events` (`user_id`,`event_id`,`eventType`,`eventDate`,`eventStatus`,`eventPlace`,`eventBudget`,`eventDescription`) VALUES ('$user_id','$event_id','$event_type','$event_date','Upcoming','$event_place','$event_budget','$event_des')";
        $result = mysqli_query($con,$query);
        if ($result)
        {
            header("Location: dashboard.php");
            die;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>New Event</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="new-event.css" type="text/css">        
        <script src="https://kit.fontawesome.com/2fef570697.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav>
            <p> <a href="dashboard.php"> <i class="fas fa-arrow-circle-left"></i> Back </a></p>
        </nav>
        <form method="POST" class="form">
            <h1> Create New Event </h1>
            <input class="input" type="text" placeholder="Event name" name="event_Type" required>
            <input class="input" type="date" name="event_Date" required>
            <input class="input" type="text" placeholder="Place of event" name="event_Place" required>
            <input class="input" type="number" style="-webkit-appearance:none; -moz-appearance:textfield" placeholder="Budget" name="event_Budget" required>
            <input class="input" type="text" placeholder="Description (optional)" name="event_Description">
            <input class="btn" type="submit" value="Create"> 
        </form>
    </body>
</html>