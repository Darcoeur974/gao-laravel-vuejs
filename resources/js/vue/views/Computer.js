import Axios from "axios";

export default {
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
                    console.log(data)
                    // this.computers.push(data)
                }
            )
        },
    }
}
