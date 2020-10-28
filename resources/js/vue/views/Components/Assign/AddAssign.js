import Axios from "axios";

export default {
    props: {
        computer: {
            default: function () {
                return {}
            },
        },
        date: {
            default: function () {
                return {}
            },
        },
        schedule: {
            default: function () {
                return {}
            },
        },
    },
    data() {
        return {
            dialogAddAssign: false,
            search: null,
            client: {},
            listingClients: [],
            loading: false,
        }
    },
    watch: {
        search(val) {
            if (val && val.length >= 3) {
                this.loading = true
                Axios.get('/api/clients/search', {
                    params: {
                        query : val
                    }
                }).then(
                    ({ data }) => {
                        this.loading = false
                        data.forEach(data => {
                            this.listingClients.push(data)
                        })
                    }
                )
            }
        },
    },
    methods: {
        save() {
            Axios.post('api/assign/create', {
                id_client : this.client.id,
                id_computer : this.computer.id,
                date : this.date,
                schedule : this.schedule.schedule,
            })
                .then(({data}) => {
                    this.close()
                })
        },
        close() {
            this.dialogAddAssign = false
        }
    }
}
