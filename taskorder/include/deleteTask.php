<?php
    include 'connect.php';

    $task_id = $_GET['idTask'];

    $request = $pdo->prepare('DELETE FROM task WHERE id=?');
    $request->execute(array($task_id));

    header('Location: ../index');
?>