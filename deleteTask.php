<?php
if (isset($_POST['taskKey'])) {
    $key = $_POST['taskKey'];

    // Check that the task board exists in the session
    session_start();
    if (isset($_SESSION['tasks']) && isset($_SESSION['tasks'][$key])) {
        unset($_SESSION['tasks'][$key]);
    }
}

// Redirect the user back to the homepage
header('Location: index.php');
?>
