<?php
    $databaseContentCoded = file_get_contents('./database.json');
    $tasks = json_decode($databaseContentCoded, true);

    $tasks[] = [
        "taskName" => $_POST['newTask']['taskName'],
        "status" => false
    ];

    $tasksEncoded = json_encode($tasks);
    file_put_contents('./database.json', $tasksEncoded);

    $response = [
        'success' => true,
        'message' => 'Ok',
        'code' => 200,
        'tasks' => $tasks
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
?>