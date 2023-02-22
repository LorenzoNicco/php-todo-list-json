<?php
    $databaseContentCoded = file_get_contents('./database.json'); //estrazione contenuto database
    $databaseContentDecoded = json_decode($databaseContentCoded); //decodifica contenuto

    // costruzione response
    $response = [
        'success' => true,
        'message' => 'Ok',
        'tasks' => $databaseContentDecoded
    ];

    $codedResponse = json_encode($response); //codifica response
?>