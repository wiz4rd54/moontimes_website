<?php
session_start();
    include("connection.php");
    include("functions.php");

    $id = $_GET['id'];

    $query = "SELECT * FROM `events` WHERE `event_id`='$id'";
    $result = mysqli_query($con,$query);
    $event_d = mysqli_fetch_assoc($result);
    if ($event_d['eventStatus'] == "Upcoming")
    {
        $query = "UPDATE `events` SET `eventStatus`='Completed' WHERE `event_id`='$id'";
        $result = mysqli_query($con,$query);
        header("Location: dashboard.php");
        die;
    }
    else if ($event_d['eventStatus'] == "Completed")
    {
        $query = "UPDATE `events` SET `eventStatus`='Upcoming' WHERE `event_id`='$id'";
        $result = mysqli_query($con,$query);
        header("Location: dashboard.php");
        die;
    }
    else 
    {
        echo "Could Not perform the requested action !!";
    }
?>    