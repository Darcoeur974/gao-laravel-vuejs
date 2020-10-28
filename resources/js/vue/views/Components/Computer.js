import AddAssign from "./Assign/AddAssign.vue";

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
        }
    },
    components: {
        AddAssign,
    },
    data() {
        return {
            assigns: [],
            schedules: [
                {schedule: 8},
                {schedule: 9},
                {schedule: 10},
                {schedule: 11},
                {schedule: 12},
                {schedule: 13},
                {schedule: 14},
                {schedule: 15},
                {schedule: 16},
                {schedule: 17},
                {schedule: 18},
            ]
        };
    },
    created() {
        this.initialize();
        this.displaySchedule();
    },
    methods: {
        initialize() {
            this.computer.client.forEach(_data => {
                this.assigns.push({
                        schedule: _data.pivot.schedule,
                        lastname: _data.lastname,
                        firstname: _data.firstname,
                    });
                }
            )
        },
        displaySchedule() {
            this.assigns.forEach(_assign => {
                for(let i = 0; i < this.schedules.length; i++) {
                    if (this.schedules[i].schedule === _assign.schedule) {
                        this.schedules[i] = _assign
                    }
                }
            })
        },
    }
}
