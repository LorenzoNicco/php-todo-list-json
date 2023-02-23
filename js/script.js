const { createApp } = Vue;

createApp ({
    data () {
        return {
            apiUrl: "./script.php",
            taskList: []
        }
    },
    methods: {
        taskDone(task) {
            if (task.status == false) {
                return task.status = true;
            }
            else if (task.status == true) {
                return task.status = false;
            }
        }
    },
    created() {
        axios
        .get(this.apiUrl)
        .then((response) => {
            console.log(response);
            
            for (let i = 0; i < response.data.tasks.length; i++) {
                this.taskList.push(response.data.tasks[i]);
            }
            console.log(this.taskList);
        });
    }
}).mount('#app');