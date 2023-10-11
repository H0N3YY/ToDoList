<?php


if (isset($_POST['task'])) {
    $task = $_POST['task'];

    // Sprawdź, czy tablica zadan już istnieje w sesji
    session_start();
    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }

    // Dodaj zadanie do tablicy
    $_SESSION['tasks'][] = $task;
}

// Przekieruj użytkownika z powrotem do strony głównej
header('Location: index.php');
?>
