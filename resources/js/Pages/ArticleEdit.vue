<template>
    <v-container>
      <v-card>
        <v-card-title>Edit Article</v-card-title>
        <v-card-text>
          <v-form ref="form" v-model="valid">
            <v-text-field
              v-model="article.title"
              label="Title"
              :rules="titleRules"
              required
            ></v-text-field>
            <v-textarea
              v-model="article.description"
              label="Description"
              :rules="descriptionRules"
              required
            ></v-textarea>
            <v-btn :disabled="!valid" @click="updateArticle">Update</v-btn>
            <v-btn @click="goBack">Cancel</v-btn>
          </v-form>
        </v-card-text>
      </v-card>
    </v-container>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'ArticleEdit',
    data() {
      return {
        article: {
          title: '',
          description: ''
        },
        valid: false,
        titleRules: [
          v => !!v || 'Title is required',
          v => (v && v.length <= 50) || 'Title must be less than 50 characters',
        ],
        descriptionRules: [
          v => !!v || 'Description is required',
        ]
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
      async updateArticle() {
        try {
          const id = this.$route.params.id;
          const response = await axios.put(`/api/articles/${id}`, this.article);
          this.$router.push({ name: 'article-details', params: { id } });
          console.log('Article updated successfully:', response);
        } catch (error) {
          console.error('Error updating article:', error);
        }
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
  