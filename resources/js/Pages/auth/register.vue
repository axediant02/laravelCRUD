
<template>
    <v-container class="d-flex justify-center p-5">
      <v-card class="w-50">
        <v-card-title tag="h1" class="fw-bold">Sign Up</v-card-title>
        <v-card-text>
          <v-form @submit.prevent="signUp">
            <v-text-field v-model="name" label="Name" required></v-text-field>
            <v-text-field v-model="email" label="Email" required></v-text-field>
            <v-text-field v-model="password" label="Password" type="password" required></v-text-field>
            <v-text-field v-model="password_confirmation" label="Confirm Password" type="password" required></v-text-field>
  
            <v-btn color="primary" type="submit">Sign Up</v-btn>
  
            <p>Already have an account? <router-link to="/login">Login</router-link></p>
  
            <!-- Display errors -->
            <div v-if="errors.length" class="mt-3">
              <ul>
                <li v-for="error in errors" :key="error" class="text-red-500">{{ error }}</li>
              </ul>
            </div>
          </v-form>
        </v-card-text>
      </v-card>
    </v-container>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'Register',
  
    data() {
      return {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        errors: [],
      };
    },
  
    methods: {
      signUp() {
        this.errors = [];  // Clear previous errors
        axios.post('http://127.0.0.1:8000/register', {
          name: this.name,
          email: this.email,
          password: this.password,
          password_confirmation: this.password_confirmation
        }).then(response => {
          console.log('Signed up successfully', response);
          alert('Account created successfully! Please log in.');
          this.$router.push('/login');
        }).catch(error => {
          console.error('Sign-up error', error.response.data);
          if (error.response.data.errors) {
            this.errors = Object.values(error.response.data.errors).flat();
          } else {
            this.errors.push('An unexpected error occurred.');
          }
        });
      }
    }
  };
  </script>
  
  <style scoped>
  .primary {
    background-color: #1976d2; /* Vuetify primary color */
    color: white;
  }
  </style>
  