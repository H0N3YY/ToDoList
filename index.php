<!DOCTYPE html>
<html>
<head>
    <title>ToDoList</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="mainCard">
    <h1>To Do List</h1>
    <form action="addTask.php" method="post" autocomplete="off" id="inp_newTask"> 
        <input type="text" name="task" placeholder="Add new task" id="inp">
        <button type="submit">Add</button>
    </form>
    <h2>All List:</h2>
    <ul>
        <?php
        session_start();
        if (isset($_SESSION['tasks'])) {
            foreach ($_SESSION['tasks'] as $key => $task) {
                echo "<li>$task <form action='deleteTask.php' method='post'><input type='hidden' name='taskKey' value='$key'><button type='submit'class='type2'>Delete</button></form></li>";
            }
        }
        ?>
    </ul>
    </div>
    <p id="author">Made By Patrycja Norek</p>
</body>
</html>
