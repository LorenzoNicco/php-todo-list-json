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
            <main>
                <div class="container">
                    <h1>Todo List</h1>

                    <ul>
                        <li v-for="task in taskList">
                            <span v-on:click="taskDone(task)" v-bind:class="{'done':task.status == true}">{{ task.taskName }}</span>
                        </li>
                    </ul>
                </div>
            </main>
        </div>
        
        <!-- Collegamento axios, vue e js -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>