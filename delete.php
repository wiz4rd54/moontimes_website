<?php
session_start();
    include("connection.php");
    include("functions.php");

    $id = $_GET['id']; 
    $query = "DELETE FROM `events` WHERE `event_id`='$id'";
    $result = mysqli_query($con,$query);
    if ($result)
    {
        header("Location: dashboard.php");
        die;
    }
    else {
        echo $id;
    }
?>