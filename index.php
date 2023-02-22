<?php
    include __DIR__ .'/script.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- collegamento css -->
        <link rel="stylesheet" href="css/style.css">

        <title>PHP ToDo List JSON</title>
    </head>
    <body>
        <div id="app">
            <h1>{{ message }}</h1>

            <p><?php echo $message ?></p>
        </div>
        
        <!-- Collegamento acios, vue e js -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>