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

            function changecolor() {
                var x=document.getElementsByClassName('status');
                if (x.innerHTML === "Upcoming") 
                {
                    ele.style.background = "#ff4242";
                }
                elseif (x.innerHTML === "Completed")
                {
                    ele.style.background = "#0b6802";
                }
            }
            function get_date(){
                var date = new Date();
                var n = date.toDateString();
                document.getElementById("date").innerHTML = n;
            };
        </script>
    </head>
    <body onload="get_date()">
        <nav class="navbar">
            <h1 id="username"><?php echo strtoupper($user_data['user_name'])."'s";?> DASHBOARD </h1>
            
            <ul> 
                <li><a href="logout.php" alt="Logout"><i class="fas fa-sign-out-alt"></i></a></li>
                <li><a href="newevent.php" alt="New Event"><i class="fas fa-plus"></i></a></li>
                <p id="date"></p>
            </ul>
        </nav>
        <main>
            <table border="1">
            <?php
                if(mysqli_num_rows($result)>0) 
                {
            ?>
                <table class="data">
                <tr>
                    <th>Sr. No</th>
                    <th>Event Name</th>
                    <th>Event date</th>
                    <th>Status </th>
                    <th colspan="3">Customize</th>
                </tr>
            <?php
                $i = 0;
                while( $row = mysqli_fetch_assoc($result) )
                {   
                    $event_id = $row['event_id'];
            ?>
                <tr>
                    <td width="50px"><?php echo $i+1;?></td>
                    <td><?php echo $row["eventType"]; ?></td>
                    <td><?php echo date_format( date_create($row["eventDate"]),"d-m-Y"); ?></td>
                    <td><?php 
                        if ($row['eventStatus'] == "Completed" )
                        {
                            echo '<span class="status completed">'.$row['eventStatus'].'</span>';
                        }
                        else
                        {
                            echo '<span class="status upcoming">'.$row['eventStatus'].'</span>';
                        }?></td>
                    <td style="width:80px;text-align:center;"><?php echo '<a id="update" href="/Moontimes/moontimes_website/complete.php?id='.$row['event_id'].'"/>UPDATE</a>';?></td>
                    <td style="width:8%;text-align:center;"><?php echo '<a id="delete" href="/Moontimes/moontimes_website/delete.php?id='.$row['event_id'].'"/>DELETE</a>';?></td>
                    <td width="2%"><?php echo '<i onclick="myFunction('.$i.')" class="fas fa-sort-down drop"></i>'; ?></td>
                </tr>
                <tr>
                    <td colspan="7" id="<?php echo $i;?>" style="display:none" class="event_Data">
                    <ul class="info">
                    <?php 
                        $query1 = "SELECT * FROM events WHERE `event_id`='$event_id'";
                        $result1 = mysqli_query($con,$query1);
                        $event_detail = mysqli_fetch_assoc($result1);
                        echo '<li>Event Name :- '.$event_detail['eventType'].'</li>';
                        echo '<li>Event Date :- '.date_format( date_create($event_detail["eventDate"]),"d-m-Y").'</li>';
                        if ($event_detail['eventStatus'] == "Completed" )
                        {
                            echo '<li>Event Status :- <span class="status completed">'.$event_detail['eventStatus'].'</span></li>';
                        }
                        else
                        {
                            echo '<li>Event Status :- <span class="status upcoming">'.$event_detail['eventStatus'].'</span></li>';
                        }
                        echo '<li>Event Place :- '.$event_detail['eventPlace'].'</li>';
                        echo '<li>Event Budget :- '.$event_detail['eventBudget'].'</li>';
                        echo '<li>Event Description :- '.$event_detail['eventDescription'].'</li>';
                    ?> </ul></td>
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