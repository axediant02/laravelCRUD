<template>
    <v-container>
      <v-data-table
        :headers="headers"
        :items="articles"
        item-key="id"
        class="elevation-1"
      >
        <template v-slot:body="{ items }">
          <tbody>
            <tr v-for="item in items" :key="item.id">
              <td>{{ item.title }}</td>
              <td>{{ item.description }}</td>
              <td>
                <v-btn @click="viewArticle(item.id)" color="primary">View</v-btn>
                <v-btn @click="editArticle(item.id)" color="warning">Edit</v-btn>
                <v-btn @click="deleteArticle(item.id)" color="red">Delete</v-btn>
              </td>
            </tr>
          </tbody>
        </template>
      </v-data-table>
    </v-container>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'Articles',
    data() {
      return {
        articles: [],
        headers: [
          { text: 'Title', value: 'title' },
          { text: 'Description', value: 'description' },
          { text: 'Actions', value: 'actions', sortable: false }
        ]
      };
    },
    mounted() {
      this.fetchArticles();
    },
    methods: {
      fetchArticles() {
        axios.get('/articles')
          .then(response => {
            this.articles = response.data;
          })
          .catch(error => {
            console.error('Error fetching articles:', error);
          });
      },
      viewArticle(id) {
        // Navigate to the article details page
        this.$router.push({ name: 'article-details', params: { id } });
      },
      editArticle(id) {
        // Navigate to the article edit page
        this.$router.push({ name: 'article-edit', params: { id } });
      },
      deleteArticle(id) {
        if (confirm('Are you sure you want to delete this article?')) {
          axios.delete(`/api/articles/${id}`)
            .then(() => {
              this.fetchArticles(); // Refresh the list after deletion
              alert('Article deleted successfully.');
            })
            .catch(error => {
              console.error('Error deleting article:', error);
            });
        }
      }
    }
  };
  </script>
  
  <style scoped>
  /* Add custom styles here if needed */
  </style>
  