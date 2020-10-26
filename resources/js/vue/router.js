import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './views/Home.vue';
import Computers from './views/Components/Computers.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/computers',
            name: 'computers',
            component: Computers,
        },
        {
            path: '/',
            name: 'home',
            component: Home,
        },
    ]
})

export default router;
