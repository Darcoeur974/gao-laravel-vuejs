<template>
    <v-dialog v-model="dialogAddAssign" width="450px">
        <template v-slot:activator="{ on, attrs }">
            <v-btn icon color="orange" v-bind="attrs" v-on="on" class="ml-5">
                <v-icon>mdi-plus</v-icon>
            </v-btn>
        </template>
        <v-card>
            <v-card-title>
                Assigner un ordinateur
                <v-spacer></v-spacer>
                <v-icon icon color="red" @click="close">mdi-close</v-icon>
            </v-card-title>
            <v-card-text>
                <v-row class="align-center">
                    {{ computer }}
                </v-row>
            </v-card-text>
        </v-card>
    </v-dialog>
</template>

<script src="./AddAssign.js"></script>
