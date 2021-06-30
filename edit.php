<?php
session_start();
    include("connection.php");
    include("functions.php");

    //$event_id = $_GET['id'];
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //$event_id = $event_detail['event_id'];
        $event_type = $_POST['event_Type'];
        $event_date = $_POST['event_Date'];
        $event_status = $_POST['event_Status'];
        $event_place = $_POST['event_Place'];
        $event_budget = $_POST['event_Budget'];
        $event_des = $_POST['event_Description'];

        $query1 = "UPDATE `events` SET `eventType`='$event_type',`eventDate`='$event_date',`eventStatus`='$event_status',`eventPlace`='$event_place',`eventBudget`='$event_budget',`eventDescription`='$event_des' WHERE `event_id`=3225";
        $result1 = mysqli_query($con,$query1);
        if ($result1)
        {   
            echo "Done";
            /*header('Location: dashboard.php');
            die;*/
        }
        else
        {
            echo "Unable to update";
        }
    }

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title> Edit </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/2fef570697.js" crossorigin="anonymous"></script>
        <script>

        </script>
    </head>
    <body>
        <form method="POST" action="">
            Name :- <input type="text" name="event_Type">
            Date :- <input type="date" name="event_Date">
            Status :- <input type="text" name="event_Status" >
            Place :- <input type="text" name="event_Place" >
            Budget :- <input type="number" name="event_Budget" >
            Description :- <input type="text" name="event_Description">
            <input type="submit" value="Submit";
        </form>
    </body>
</html>