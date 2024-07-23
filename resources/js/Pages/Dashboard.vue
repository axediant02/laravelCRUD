<template>
<h1>Hello world</h1>

    <!-- <v-container grid-list-md="grid-list-md" offset-sm3="offset-sm3">
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
                </v-card>
            </v-flex>
        </v-layout>
    </v-container> -->
</template>

<script>
import axios from 'axios';
export default {
    name: 'Dashboard',
    data() {
        return {
            posts: [],
        }; 
    },
    mounted() {
        this.fetchPosts();
    },
    methods: {
        fetchPosts() {
            axios.get('/api/articles').then(res => {this.posts = res.data;}).catch(error => {
                    console.error('Error fetching posts:', error);
                });
        }
    }
};
</script>
