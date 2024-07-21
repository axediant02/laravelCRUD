<template>
    <v-card class="pa-4" width="800" outlined>
      <v-card-title class="text-h5">
        Article Form
      </v-card-title>
      <v-card-subtitle>
        Add new Article
      </v-card-subtitle>
      <form ref="form" lazy-validation @submit.prevent="submit" enctype="multipart/form-data">
        <input type="hidden" name="_token" :value="csrf">
        <v-text-field v-model="article.title" label="Title" required></v-text-field>
        <v-textarea v-model="article.description" label="Description" required></v-textarea>
        <v-file-input v-model="article.image" @change="handleImageSelect" show-size label="File input" type="file"></v-file-input>
        <v-card-actions>
          <v-btn type="submit" outlined rounded text>Save</v-btn>
        </v-card-actions>
      </form>
    </v-card>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'Form',
  
    data() {
      return {
        csrf: document.head.querySelector('meta[name="csrf-token"]').content,
        article: {
          title: '',
          description: '',
          image: null,
        },
      };
    },
  
    methods: {
      handleImageSelect(e) {
        this.article.image = e.target.files[0] || null;
      },
  
      submit() {
        let formData = new FormData();
        formData.append('image', this.article.image);
        formData.append('description', this.article.description);
        formData.append('title', this.article.title);
  
        axios.post('/articles', formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
            'X-CSRF-TOKEN': this.csrf
          }
        })
        .then(response => {
          console.log(response.data);
          alert("Successfully Submitted");
          this.$refs.form.reset();
          his.$router.push('/dashboard');
        })
        .catch(error => {
          console.error(error);
          alert("Failed to submit data");
        });
      }
    }
  };
  </script>
  