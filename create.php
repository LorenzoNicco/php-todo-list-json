<?php
    header('Content-Type: application/json');

    $databaseContentCoded = file_get_contents('./database.json');
    $tasks = json_decode($databaseContentCoded, true);

    $tasks[] = [
        "taskName" => $_POST['newTask']['taskName'],
        "status" => $_POST['newTask']['status']
    ];

    $tasksEncoded = json_encode($tasks);
    file_put_contents('./database.json', $tasksEncoded);

    $response = [
        'success' => true,
        'message' => 'Ok',
        'code' => 200,
        'tasks' => $tasks
    ];

    echo json_encode($response);
?>