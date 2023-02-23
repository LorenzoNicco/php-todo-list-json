const { createApp } = Vue;

createApp ({
    data () {
        return {
            apiUrl: "./script.php",
            createUrl: "./create.php",
            taskList: [],
            newTask: {
                taskName: "",
                status: false
            }
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
        },

        addNewTask() {
            console.log(this.newTask);
            axios.post(this.createUrl, {
                newTask: this.newTask
            }, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then((response) => {
                console.log(this.newTask);
            });
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