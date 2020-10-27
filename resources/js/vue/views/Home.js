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
        };
    },
    created() {
        this.getComputers();
    },
    methods: {
        getComputers() {
            Axios.get('/api/computer').then(
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
