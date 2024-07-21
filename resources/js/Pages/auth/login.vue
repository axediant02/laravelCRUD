<template>
    <v-container class="d-flex justify-center p-5">
      <v-card class="w-50">
        <v-card-title tag="h1" class="fw-bold">Login</v-card-title>
        <v-card-text>
          <v-form @submit.prevent="login">
            <v-text-field v-model="email" label="Email" required></v-text-field>
            <v-text-field v-model="password" label="Password" type="password" required></v-text-field>
  
            <v-btn color="primary" type="submit">Login</v-btn>
  
            <p> Don't Have an Account? <router-link to="/signup">Create an Account</router-link> </p>
  
  
          </v-form>
        </v-card-text>
      </v-card>
    </v-container>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'Login',
  
    data() {
      return {
        email: '',
        password: '',
      };
    },
  
    methods: {
      login() {
        axios.post('http://127.0.0.1:8000/login', {
          email: this.email,
          password: this.password
        }).then(response => {
          console.log('Logged in successfully', response);
          alert('Logged in successfully!');
          this.$router.push('/form'); // Redirect to form after successful login
        }).catch(error => {
          console.error('Login error', error.response.data);
          alert('Login failed! Please check your credentials and try again.');
        });
      }
    }
  };
  </script>
  <style scoped>
  .login {
    padding: 20px;
  }
  </style>