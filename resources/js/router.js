import { createRouter, createWebHistory } from "vue-router";
import Form from "./Pages/Form.vue";
import Home from "./Pages/Home.vue";
import Dashboard from './Pages/Dashboard.vue';
import Login from './Pages/auth/login.vue';
import Register from './Pages/auth/register.vue';

const routes = [

    { path: '/', component: Home },
    { path: '/login', component: Login },
    { path: '/register', component: Register },
    { path: '/dashboard', component: Dashboard },
    { path: '/form', component: Form }

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});


export default router;