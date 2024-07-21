import { createRouter, createWebHistory } from "vue-router";
import Form from "./Pages/Form.vue";
import Home from "./Pages/Home.vue";

const routes = [

    { path: '/', component: Home },
    { path: '/form', component: Form }


];

const router = createRouter({
    history: createWebHistory(),
    routes,
});


export default router;