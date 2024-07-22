<template>
    <v-container>
      <v-card>
        <v-card-title>{{ article.title }}</v-card-title>
        <v-card-subtitle>{{ article.created_at }}</v-card-subtitle>
        <v-card-text>
          <p>{{ article.description }}</p>
        </v-card-text>
        <v-card-actions>
          <v-btn @click="editArticle">Edit</v-btn>
          <v-btn @click="goBack">Back</v-btn>
        </v-card-actions>
      </v-card>
    </v-container>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'ArticleDetails',
    data() {
      return {
        article: {},
      };
    },
    mounted() {
      this.fetchArticle();
    },
    methods: {
      async fetchArticle() {
        try {
          const id = this.$route.params.id;
          const response = await axios.get(`/api/articles/${id}`);
          this.article = response.data;
        } catch (error) {
          console.error('Error fetching article:', error);
        }
      },
      editArticle() {
        this.$router.push({ name: 'article-edit', params: { id: this.$route.params.id } });
      },
      goBack() {
        this.$router.go(-1);
      }
    }
  };
  </script>
  
  <style scoped>
  /* Add any styles you need here */
  </style>
  