<?php
    $databaseContentCoded = file_get_contents('database.json'); //estrazione contenuto database
    $tasks = json_decode($databaseContentCoded, true); //decodifica contenuto

    // costruzione response
    $response = [
        'success' => true,
        'message' => 'Ok',
        'code' => 200,
        'tasks' => $tasks
    ];

    $codedResponse = json_encode($response); //codifica response
    header('Content-Type: application/json');

    echo $codedResponse; //stampa della risposta (da fare sempre)
?>