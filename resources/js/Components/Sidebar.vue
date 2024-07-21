<template>
    <nav>
        <v-toolbar text="text">
            <v-app-bar-nav-icon class="grey--text" @click="drawer= !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title class="text-uppercase grey--text">
                <span>Todo</span>
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <div v-for="item in items" :key="item.title" link="link">
                <router-link
                    style="text-decoration: none;"
                    data-toggle="collapse"
                    :to="{ name: item.route }">
                    <v-btn text="text" color="grey">{{ item.title }}</v-btn>
                </router-link>
            </div>
        </v-toolbar>
        <v-navigation-drawer
            app="app"
            absolute="absolute"
            temporary="temporary"
            floating="floating"
            clipped="clipped"
            v-model="drawer">
            <v-list-item>
                <v-list-item-avatar>
                    <v-img src="https://randomuser.me/api/portraits/men/78.jpg"></v-img>
                </v-list-item-avatar>
                <v-list-item-content>
                    <v-list-item-title>John Leider</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
            <v-divider></v-divider>
            <v-list dense="dense">
                <v-list-item v-for="item in items" :key="item.title" link="link">
                    <v-list-item-icon>
                        <v-icon>{{ item.icon }}</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title>
                            <router-link
                                style="text-decoration: none;"
                                data-toggle="collapse"
                                :to="{ name: item.route }">{{ item.title }}
                            </router-link>
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
    </nav>
</template>
<script>
    export default {
        name: 'Sidebar',
        data() {
            return {
                drawer: false,
                items: [
                    {
                        title: 'Home',
                        icon: 'mdi-home-city',
                        route: 'home'
                    }, {
                        title: 'About',
                        icon: 'mdi-account',
                        route: 'about'
                    }, {
                        title: 'Add Post',
                        icon: 'mdi-account-group-outline',
                        route: 'form'
                    }
                ]
            }
        }
    }
</script>