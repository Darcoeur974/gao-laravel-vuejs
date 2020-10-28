import Axios from "axios";
import Computer from "./Components/Computers.vue";
import AddComputer from "./Components/Computer/AddComputer.vue";

export default {
    components: {
        Computer,
        AddComputer,
    },
    data() {
        return {
            computers: [],
            date: new Date().toISOString().substr(0, 10),
            menuDate: false,
        };
    },
    created() {
        this.getComputers();
    },
    methods: {
        getComputers() {
            this.computers = []
            Axios.get('/api/computer', {
                params: {
                    date : this.date
                }
            }).then(
                ({ data }) => {
                    data.data.forEach(_data => {
                        this.computers.push(_data)
                    })
                }
            )
        },
        add(computer) {
            this.computers.push(computer)
        }
    }
}
