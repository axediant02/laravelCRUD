import "./bootstrap";
import router from "./router";
import 'vuetify/styles';
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
import { createApp } from 'vue';

import App from "./App.vue";
import Home from './Pages/Home.vue';

// Define the Vuetify instance
const vuetify = createVuetify({
    components,
    directives
});

// Create the Vue app instance
const app = createApp(App);

// Register the Sidebar component globally
// app.component('sidebar', Sidebar);

// Use the router and Vuetify instances
app.use(router);
app.use(vuetify);

// Mount the app
app.mount("#app");
