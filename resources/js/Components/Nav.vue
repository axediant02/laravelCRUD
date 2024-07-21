<template>
    <nav class="navbar flex bg-gray-800 text-white justify-end h-20 text-2xl sticky top-0 z-50">
    
          <img class="pl-10" src="/resources/assets/logo.png" alt="" srcset="">
        <div class="navbar-menu container mx-auto flex justify-between items-center">
          <div class="navbar-end text-lg font-semibold">
            <router-link to="/" class="navbar-item">Home</router-link>
            <router-link to="/about" class="navbar-item">About</router-link>
            <router-link to="/services" class="navbar-item">Services</router-link>
            <router-link to="/contact" class="navbar-item">Contact</router-link>
            <router-link to="/login" class="navbar-item bg-blue p-2">Get Started</router-link>
          </div>
        </div>
      
    </nav>
  </template>
  
  <script>
  export default {
    name: 'Navbar'
  }
  </script>
  
  <style scoped>
  /* Add your navbar styling here */
  .navbar {
    padding: 1rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    
  }
  .navbar-brand {
    font-size: 1.5rem;
    font-weight: bold;
  }
  .navbar-menu {
    display: flex;
    justify-content: flex-end;
  }
  .navbar-item {
    margin-left: 1rem;
    text-decoration: none;
    color: white;
  }
  .navbar-item:hover {
    color: #007bff;
  }
  </style>
  