import Axios from "axios";

export default {
    data() {
        return {
            dialog: false,
            name: '',
            nameRules: [v => !!v || "Nom d'ordinateur requis"],
        }
    },
    methods: {
        save() {
            Axios.post('/api/computer/create', {
                name: this.name,
            })
            .then(function (response) {
                console.log(response)
                this.close()
            })
            .catch(function (error) {
                console.log(error)
            })
        },
        close() {
            this.dialog = false
        }
    }
}
