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
                        :src="'/storage/images/'+post.image"
                        @click="navigateTo({
    name: 'post',
    params: {
    postId: post.id,
    userId: post.userId
    }})"></v-img>
                    <v-spacer></v-spacer>
                    <v-container
                        fill-height="fill-height"
                        animated="animated"
                        fadeInLeftBig="fadeInLeftBig"
                        fluid="fluid"
                        style="text-align:left">
                        <v-layout fill-height="fill-height">
                            <v-flex xs12="xs12" align-end="align-end" flexbox="flexbox">
                                <span class="subheading grey--text">{{post.title}}</span>
                            </v-flex>
                        </v-layout>
                    </v-container>
                    <v-card-actions>
                        <v-btn>
                            <router-link
                                style="text-decoration:none;margin:2px"
                                data-toggle="collapse"
                                :to="{
    path: 'details',
    params: postid, // <-- changed 'props' to 'params'
    query: { postid: post.id},}">
                                Details
                            </router-link>
                        </v-btn>
                        <v-btn class="btn btn-primary">
                            <router-link
                                style="text-decoration:none;margin:2px"
                                data-toggle="collapse"
                                :to="{
    path: 'edit',
    params: postid, // <-- changed 'props' to 'params'
    query: { postid: post.id},}">
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
    export default {
        name: 'Home',
        data() {
            return {posts: [], postid: ''}
        },
        mounted() {
            window
                .axios
                .get('/api/articles')
                .then(res => {
                    console.log(res.data);
                    this.posts = res.data
                })
        },
        methods: {
            deletedata(id) {
                if (confirm("Are you sure to Delete this data ?")) {
                    window
                        .axios
                        .put(`/api/delete/${id}`)
                        .then(response => {
                            console.log(response);
                        })
                        .catch(error => {
                            console.log(error)
                        })
                    }
            },
            details(id) {
                if (confirm("Are you sure to see details this data ?")) {
                    window
                        .axios
                        .get(`/api/show/${id}`)
                        .then(response => {
                            console.log(id);
                        })
                        .catch(error => {
                            console.log(error)
                        })
                    }
            }
        }
    }
</script>