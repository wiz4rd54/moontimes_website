<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Todo App</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="todo_style.css" type="text/css" media="screen" charset="utf-8">   
    <link rel="stylesheet" href="../font-awesome-4.3.0/css/font-awesome.min.css"> 
  </head>
  <body>
    <div class="container">
        <p>
            <label for="new-task">Add Task</label><input id="new-task" type="text"><button id="add">Add</button>
            <div class="warning"></div>
            <div class="success"></div>
        </p>
      
        <h3>To do
            <span id="counter"></span></h3>
            <ul id="incomplete-tasks">
                <li><input type="checkbox"><label>Pay Bills</label><input type="text" value="Pay Bills"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                <li><input type="checkbox"><label>Go Shopping</label><input type="text" value="Go Shopping"><button class="edit">Edit</button><button class="delete">Delete</button></li>
            </ul>
      
        <h3>Completed</h3>
            <ul id="completed-tasks">
            <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
            </ul>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="todo.js"></script>
  </body>
</html>