<template>
    <v-dialog v-model="dialogAddAssign" width="450px">
        <template v-slot:activator="{ on, attrs }">
            <v-btn icon color="orange" v-bind="attrs" v-on="on" class="text-center">
                <v-icon>mdi-plus</v-icon>
            </v-btn>
        </template>
        <v-card>
            <v-card-title>
                Ajouter une Assignation
                <v-spacer></v-spacer>
                <v-icon icon color="red" @click="close">mdi-close</v-icon>
            </v-card-title>
            <v-card-text>
                <v-row>
                    <v-col cols="8"><strong class="mx-2">Ordinateur :  {{ computer.name }} </strong></v-col>
                    <v-col cols="4 text-right"><strong class="mx-2">pour : {{ schedule.schedule }} h </strong></v-col>
                </v-row>
                <v-row class="align-baseline">
                    <v-autocomplete
                        dense
                        hide-no-data
                        return-object
                        chips
                        label="Recherche de client"
                        prepend-icon="mdi-magnify"
                        v-model="client"
                        item-text="firstname"
                        item-value="id"
                        :items="listingClients"
                        :search-input.sync="search"
                        :loading="loading"
                    ></v-autocomplete>
                    <v-btn icon color="orange">
                        <v-icon @click="save">mdi-check</v-icon>
                    </v-btn>
                </v-row>
            </v-card-text>
        </v-card>
    </v-dialog>
</template>

<script src="./AddAssign.js"></script>
