<template>
    <v-main>
        <v-row class="ma-2 pa-2 align-end">
            <h2>Liste des ordinateurs</h2>
            <AddComputer @addComputer="add($event)" />
        </v-row>
        <v-row class="ma-2 pa-2">
            <v-col cols="4">
                <v-menu
                    v-model="menuDate"
                    :close-on-content-click="false"
                    :nudge-right="40"
                    transition="scale-transition"
                    offset-y
                >
                    <template v-slot:activator="{ on, attrs }">
                        <v-text-field
                            v-model="date"
                            label="Selectionner une date"
                            prepend-icon="mdi-calendar"
                            readonly
                            v-bind="attrs"
                            v-on="on"
                        ></v-text-field>
                    </template>
                    <v-date-picker
                        v-model="date"
                        @input="menuDate = false"
                        @change="getComputers"
                    ></v-date-picker>
                </v-menu>
            </v-col>
        </v-row>
        <v-row class="justify-center">
            <div v-for="(computer, key) in computers" :key="key" class="ma-2">
                <Computer :computer="computer" :date="date"/>
            </div>
        </v-row>
    </v-main>
</template>

<script src="./Home.js"></script>

