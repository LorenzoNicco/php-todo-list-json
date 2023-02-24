const { createApp } = Vue;

createApp ({
    data () {
        return {
            apiUrl: "./script.php",
            createUrl: "./create.php",
            deleteUrl: "./delete.php",
            updateUrl: "./update.php",
            taskList: [],
            newTask: {
                taskName: ""
            }
        }
    },
    methods: {
        taskDone(index) {
            const updateIndex = index;

            axios.post(this.updateUrl, {
                indexTarget: updateIndex
            }, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then((response) => {
                console.log("update response",response);

                this.taskList[index].status = response.data.tasks[index].status;
            
                console.log("update tasklist", this.taskList);
            })
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
                console.log("add response", response);

                this.taskList = response.data.tasks;
            
                console.log("add tasklist", this.taskList);
            });
        },

        deleteTask(index) {

            axios.post(this.deleteUrl, {
                deletedTask: index
            }, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then((response) => {
                console.log("delete response", response);

                this.taskList = response.data.tasks;
                
                console.log("delete tasklist",this.taskList);
            });
        }
    },
    created() {
        axios
        .get(this.apiUrl)
        .then((response) => {
            console.log("read response", response);
            
            for (let i = 0; i < response.data.tasks.length; i++) {
                this.taskList.push(response.data.tasks[i]);
            }
            console.log("read tasklist", this.taskList);
        });
    }
}).mount('#app');