<?php


if (isset($_POST['task'])) {
    $task = $_POST['task'];

    // Check whether the task board already exists in the session
    session_start();
    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }

    // Add the task to the board
    $_SESSION['tasks'][] = $task;
}

// Redirect the user back to the homepage
header('Location: index.php');
?>
