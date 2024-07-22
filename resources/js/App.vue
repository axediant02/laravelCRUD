<template>
    <div class="app">
        <Nav/>
        <router-view />
    </div>
    
</template>

<script>
import Form from './Pages/Form.vue';
import Home from './Pages/Home.vue';
import Nav from './Components/Nav.vue';


export default {
    name: 'App',
    components: {
        Form,
        Home, 
        Nav
    }
}

</script>