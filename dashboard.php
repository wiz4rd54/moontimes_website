<?php
session_start();

    $_SESSION;
    include("connection.php");
    include("function.php");
    $user_data = check_login($con);
    $user_id = $user_data['user_id'];
    
    $query = "SELECT * FROM events WHERE user_id ='$user_id'";
    $result = mysqli_query($con, $query);
    /*$event = mysqli_fetch_array($result);*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="dashboardstyle.css" type="text/css">
        <script src="https://kit.fontawesome.com/2fef570697.js" crossorigin="anonymous"></script>
        <!--<script src="todo.js"></script>-->
        <script>
            function myFunction(x) {
                var ele = document.getElementById(x);
                if (ele.style.display === "none") {
                    ele.style.display = "table-cell";
                } else {
                    ele.style.display = "none";
                }
            };
        </script>
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
            <!--<section class="quickstat">
                <div class="stats"> Event Budget </div>
                <div class="stats"> Cost </div>
                <div class="stats"> Date </div>
            </section>-->
            <table border="1">
            <?php
                if(mysqli_num_rows($result)>0) 
                {
            ?>
                <table class="data">
                <tr>
                    <td>Event Number</td>
                    <td>Event Name</td>
                    <td>Event date</td>
                    <td>Status </td>
                    <td colspan="2">Customize</td>
                </tr>
            <?php
                $i = 0;
                while( $row = mysqli_fetch_assoc($result) )
                {   
                    $event_id = $row['event_id'];
            ?>
                <tr>
                    <td><?php echo $i+1;?></td>
                    <td><?php echo $row["eventType"]; ?></td>
                    <td><?php echo $row["eventDate"]; ?></td>
                    <td><?php echo "status update";?></td>
                    <td><?php echo '<button id="edit" onclick="myFunction('.$i.')">EDIT</button>'; ?></td>
                    <td><?php echo '<a href="/delete.php?id='.$row['event_id'].'"/>Delete</a>';?></td>
                </tr>
                <tr>
                    <td colspan="6" id="<?php echo $i;?>" style="display:none">
                    <?php 
                        $query1 = "SELECT * FROM events WHERE `event_id`='$event_id'";
                        $result1 = mysqli_query($con,$query1);
                        $event_detail = mysqli_fetch_assoc($result1);
                        echo $event_detail['eventType'];
                        echo $event_detail['eventDate'];
                        echo $event_detail['eventPlace'];
                        echo $event_detail['eventBudget'];
                        echo $event_detail['eventDescription'];
                    ?> </td>
                </tr>
            <?php
                $i++;
                }
            ?>
            </table>
            <?php
            }
            else
            {
                echo '<a href="newevent.php"> Create new Event </a>';
            }
            ?>
            <section class="events">
                <ul class="events list">
                    <li> 
                </ul>
            </section>
        </main>
    </body>
</html>