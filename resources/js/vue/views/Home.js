import Axios from "axios";
import Computer from "./Components/Computers.vue";

export default {
    components: {
        Computer,
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
            Axios.get('/api/computers').then(
                ({ data }) => {
                    data.data.forEach(_data => {
                        this.computers.push(_data)
                    })
                }
            )
        },
    }
}
