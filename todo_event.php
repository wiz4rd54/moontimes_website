<?php
session_start();

  $_SESSION;
  include("connection.php");
  include("function.php");
  $user_data = check_login($con);
  $event_data = check_login($con);
  $user_id = $user_data['user_id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Tasks </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="todo_style.css" type="text/css">
        <script src="https://kit.fontawesome.com/238d96934e.js" crossorigin="anonymous"></script>
        <script src="todo.js"></script>
    </head>
    <body>
      <div class="stats">

      </div>
      <div class="tasks">
        <h1> Tasks </h1>
        <form autocomplete="off" method="POST">
            <input id="newtask" placeholder="New task" type="text" name="task">
            <input id="submit" type="submit" value="Add">
        </form>
        <ul id="todo">
        </ul>
    </div>
    <div class="costs">
    </body>
</html>