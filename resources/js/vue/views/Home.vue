<template>
    <v-main>
        <AddComputer />
        <div v-for="(computer, key) in computers" :key="key">
            <Computer :computer="computer" />
        </div>
    </v-main>
</template>

<script src="./Home.js"></script>

