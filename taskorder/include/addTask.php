<?php
    include 'connect.php';

    $task_title = $_POST['title'];
    $task_details = $_POST['details'];

    $request = $pdo->prepare('INSERT INTO task (title, details) VALUES (?, ?)');
    $request->execute(array($task_title, $task_details));

    header('Location: ../index');
?>