<template>
    <v-container grid-list-md="grid-list-md" offset-sm3="offset-sm3">
        <v-layout row="row" wrap="wrap">
            <v-flex
                style="cursor: pointer;"
                xs12="xs12"
                sm4="sm4"
                v-for="post in posts"
                :key="post.id">
                <v-card width="300px">
                    <v-img
                        class="animated fadeIn white--text"
                        contain="contain"
                        :src="'/storage/images/' + post.image"
                        @click="navigateToPost(post.id, post.userId)">
                    </v-img>
                    <v-spacer></v-spacer>
                    <v-container
                        fill-height="fill-height"
                        animated="animated"
                        fadeInLeftBig="fadeInLeftBig"
                        fluid="fluid"
                        style="text-align:left">
                        <v-layout fill-height="fill-height">
                            <v-flex xs12="xs12" align-end="align-end" flexbox="flexbox">
                                <span class="subheading grey--text">{{ post.title }}</span>
                            </v-flex>
                        </v-layout>
                    </v-container>
                    <v-card-actions>
                        <v-btn>
                            <router-link
                                style="text-decoration:none;margin:2px"
                                :to="{ name: 'details', params: { postId: post.id }}">
                                Details
                            </router-link>
                        </v-btn>
                        <v-btn class="btn btn-primary">
                            <router-link
                                style="text-decoration:none;margin:2px"
                                :to="{ name: 'edit', params: { postId: post.id }}">
                                Edit
                            </router-link>
                        </v-btn>
                        <v-btn style="text-decoration:none;margin:2px" @click="deletedata(post.id)">Delete</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
import axios from 'axios'; // Import axios

export default {
    name: 'Dashboard',
    data() {
        return {
            posts: [],
        };
    },
    mounted() {
        this.fetchPosts(); // Fetch posts when component is mounted
    },
    methods: {
        fetchPosts() {
            axios.get('/api/articles')
                .then(res => {
                    this.posts = res.data;
                })
                .catch(error => {
                    console.error('Error fetching posts:', error);
                });
        },
        deletedata(id) {
            if (confirm("Are you sure to delete this data?")) {
                axios.delete(`/api/articles/${id}`) // Assuming DELETE is the correct method for your endpoint
                    .then(response => {
                        this.fetchPosts(); // Refresh the list after deletion
                        console.log('Deleted successfully:', response);
                    })
                    .catch(error => {
                        console.error('Error deleting post:', error);
                    });
            }
        },
        navigateToPost(postId, userId) {
            this.$router.push({ name: 'post', params: { postId, userId } });
        }
    }
};
</script>
