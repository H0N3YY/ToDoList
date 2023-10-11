<?php
if (isset($_POST['taskKey'])) {
    $key = $_POST['taskKey'];

    // Sprawdź, czy tablica zadań istnieje w sesji
    session_start();
    if (isset($_SESSION['tasks']) && isset($_SESSION['tasks'][$key])) {
        unset($_SESSION['tasks'][$key]);
    }
}

// Przekieruj użytkownika z powrotem do strony głównej
header('Location: index.php');
?>
