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

        $query = "UPDATE `users` SET `eventType`='$event_type',`eventDate`='$event_date',`eventPlace`='$event_place',`eventBudget`='$event_budget' WHERE `user_id`='$user_id'";
        $result = $con->query($query);

        if ($result)
        {
            echo "DONE";
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
            <input class="input" type="text" placeholder="eg Corporate event, birthday etc." name="event_Type" required>
            <input class="input" type="date" name="event_Date" required>
            <input class="input" type="text" placeholder="Place of event" name="event_Place" required>
            <input class="input" type="number" style="-webkit-appearance:none; -moz-appearance:textfield" name="event_Budget" required>
            <input class="btn" type="submit" value="Create new event"> 
        </form>
    </body>
</html>