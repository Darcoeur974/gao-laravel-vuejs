<template>
    <v-dialog v-model="dialogAddComputer" width="450px">
        <template v-slot:activator="{ on, attrs }">
            <v-btn icon color="orange" v-bind="attrs" v-on="on" class="ml-5">
                <v-icon>mdi-card-plus</v-icon>
            </v-btn>
        </template>
        <v-card>
            <v-card-title>
                Ajouter un ordinateur
                <v-spacer></v-spacer>
                <v-icon icon color="red" @click="close">mdi-close</v-icon>
            </v-card-title>
            <v-card-text>
                <v-row class="align-center">
                    <v-text-field v-model="name" :rules="nameRules" label="Nom de l'ordinateur"></v-text-field>

                    <v-btn icon color="orange" v-if="name.length >= 10 && name.length <= 20">
                        <v-icon @click="save">mdi-check</v-icon>
                    </v-btn>

                    <v-btn icon color="orange" v-else disabled>
                        <v-icon>mdi-check</v-icon>
                    </v-btn>

                </v-row>
            </v-card-text>
        </v-card>
    </v-dialog>
</template>

<script src="./AddComputer.js"></script>
