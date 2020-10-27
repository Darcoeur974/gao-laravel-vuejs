<template>
    <v-card class="ma-2 justify-center" width="400px">
        <v-card-title>{{ computer.name }}</v-card-title>
        <v-card-text>
            <v-row>
                <v-col cols="2">
                    Heure
                </v-col>
                <v-col cols="8" class="text-center">
                    Nom Prènom
                </v-col>
                <v-col cols="2" class="text-right">
                    Action
                </v-col>
            </v-row>
            <v-row v-for="(schedule, key) in schedules" :key="key">
                <v-col cols="2">
                    {{ schedule.schedule }} h
                </v-col>
                <v-col cols="8" class="text-center">
                    {{ schedule.firstname }}
                </v-col>
                <v-col cols="2" class="text-right">
                </v-col>
            </v-row>
        </v-card-text>
    </v-card>
</template>

<script src="./Computer.js"></script>
