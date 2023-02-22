<?php
    header("Access-Control-Allow-Origin: http://127.0.0.1:5173");
    header("Access-Control-Allow-Headers: X-Requested-With");

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