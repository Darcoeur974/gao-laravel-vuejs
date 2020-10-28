<template>
    <v-card class="ma-2 justify-center h-100" width="400px" height="100%" color="indigo lighten-4">
        <v-card-title>{{ computer.name }}</v-card-title>
        <v-card-text>
            <v-row class="align-baseline">
                <v-col cols="2" class="text-center">
                    Heure
                </v-col>
                <v-col cols="8" class="text-center">
                    Nom Prènom
                </v-col>
                <v-col cols="2" class="text-center">
                    Action
                </v-col>
            </v-row>
            <v-row v-for="(schedule, key) in schedules" :key="key" class="align-baseline" color="purple lighten-3">
                <v-col cols="2" class="text-center">
                    {{ schedule.schedule }} h
                </v-col>
                <v-col cols="8" class="text-center" v-if="schedule.client">
                    {{ schedule.clientName }}
                </v-col>
                <v-col cols="8" class="text-center" v-else>
                    ---
                </v-col>
                <v-col cols="2" class="text-center" v-if="schedule.client">
                    ---
                </v-col>
                <v-col cols="2" class="text-center" v-else>
                    <AddAssign :computer="computer" :date="date" :schedule="schedule"/>
                </v-col>
            </v-row>
        </v-card-text>
    </v-card>
</template>

<script src="./Computer.js"></script>
