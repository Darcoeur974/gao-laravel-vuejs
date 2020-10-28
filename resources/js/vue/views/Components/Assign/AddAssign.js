
export default {
    props: {
        computer: {
            default: function () {
                return {}
            },
        },
    },
    data() {
        return {
            dialogAddAssign: false,
        }
    },
    methods: {
        close() {
            this.dialogAddAssign = false
        }
    }
}
