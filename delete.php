<?php
    $databaseContentCoded = file_get_contents('./backup.json');
    $tasks = json_decode($databaseContentCoded, true);

    // sostituire con la cancellazione
    $tasks = $_POST['deletedTask'];

    $tasksEncoded = json_encode($tasks);
    file_put_contents('./backup.json', $tasksEncoded);

    $response = [
        'success' => true,
        'message' => 'Ok',
        'code' => 200,
        'tasks' => $tasks
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
?>