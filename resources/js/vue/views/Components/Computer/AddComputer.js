import Axios from "axios";

export default {
    data() {
        return {
            dialogAddComputer: false,
            name: '',
            nameRules: [
                v => !!v || "Nom d'ordinateur requis",
                v => (v && v.length >= 10 && v.length <=20) || "Le nom doit être compris entre 10 et 25 caractéres"
            ],
        }
    },
    methods: {
        save() {
            Axios.post('/api/computer/create', {
                name: this.name,
            })
            .then(({data}) => {
                this.$emit('addComputer', data.data)
                this.close()
            })
        },
        close() {
            this.dialogAddComputer = false
        }
    }
}
