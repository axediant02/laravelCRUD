<template>
    <div class="app">
        <router-view />
    </div>
    
</template>

<script>
import Form from './Pages/Form.vue';
import Home from './Pages/Home.vue';


export default {
    name: 'App',
    components: {
        Form,
        Home
    }
}

</script>