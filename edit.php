<?php
session_start();
    include("connection.php");
    include("functions.php");

    $id = $_GET['id'];
    $query = "SELECT * FROM `events` WHERE `event_id`='$id'";
    $result = mysqli_query($con,$query);
    if ($result)
    {
        $event_detail = mysqli_fetch_assoc($result);
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $event_id = $event_detail['event_id'];
        $event_type = $_POST['event_Type'];
        $event_date = $_POST['event_Date'];
        $event_status = $_POST['event_Status'];
        $event_place = $_POST['event_Place'];
        $event_budget = $_POST['event_Budget'];
        $event_des = $_POST['event_Description'];

        $query1 = "UPDATE `events` 
                SET `eventType`='$event_type',`eventDate`='$event_date',`eventStatus`='$event_status',`eventPlace`='$event_place',`eventBudget`='$event_budget',`eventDescription`='$event_des' WHERE `event_id`='$event_id'";
        $result1 = mysqli_query($con,$query1);
        if ($result1)
        {
            header('Location: /Moontimes/moontimes_website/edit.php?id=3225');
            die;
        }
        else{
            echo "Unable to update";
        }
    }

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $event_detail['eventType'];?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/2fef570697.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <form method="post">
            Name :- <input type="text" value="<?php echo $event_detail['eventType']; ?>" name="event_Type">
            Date :- <input type="date" value="<?php echo $event_detail['eventDate']; ?>" name="event_Date">
            Status :- <input type="text" value="<?php echo $event_detail['eventStatus']; ?>" name="event_Status" >
            Place :- <input type="text" value="<?php echo $event_detail['eventPlace']; ?>" name="event_Place" >
            Budget :- <input type="number" value="<?php echo $event_detail['eventBudget']; ?>" name="event_Budget" >
            Description :- <input type="text" value="<?php echo $event_detail['eventDescription']; ?>"  name="event_Description">
            <input type="submit" value="Submit";
        </form>
    </body>
</html>