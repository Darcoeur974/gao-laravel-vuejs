<template>
    <v-main>
        <v-row class="ma-2 pa-2 align-end">
            <h2>Liste des ordinateurs</h2>
            <AddComputer @addComputer="add($event)" />
        </v-row>
        <v-row class="justify-center">
            <div v-for="(computer, key) in computers" :key="key">
                <Computer :computer="computer" />
            </div>
        </v-row>
    </v-main>
</template>

<script src="./Home.js"></script>

