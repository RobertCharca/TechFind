<template>
    <v-app id="inspire">
        <v-navigation-drawer
            v-model="drawer"
            fixed
            temporary
        >
            <v-list-item>
                <v-list-item-content>
                    <v-list-item-title class="text-h6">
                        Usuario
                    </v-list-item-title>
                    <v-list-item-subtitle>
                        usuario@gmail.com
                    </v-list-item-subtitle>
                </v-list-item-content>
            </v-list-item>

            <v-divider></v-divider>

            <v-list
                dense
                nav
            >
                <v-list-item
                    v-for="item in items"
                    :key="item.title"
                    :to="item.to"
                    link
                >
                    <v-list-item-icon>
                        <v-icon>{{ item.icon }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>

                <v-list-item style="margin-top: 20px">
                    <v-btn
                        color="#EF5350"
                        dark
                    >
                        Cerrar sesion
                    </v-btn>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
        <v-app-bar
            app
            color="#fcb69f"
            dark
            shrink-on-scroll
            src="https://images.fastcompany.net/image/upload/w_1280,f_auto,q_auto,fl_lossy/wp-cms/uploads/2022/01/p-1-15-tech-startups-to-watch-in-2022.jpg"
            prominent
        >
            <template v-slot:img="{ props }">
                <v-img
                    v-bind="props"
                    gradient="to top right, rgba(19,84,122,.5), rgba(128,208,199,.8)"
                ></v-img>
            </template>

            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

            <v-app-bar-title>TechFind</v-app-bar-title>

            <v-spacer></v-spacer>

        </v-app-bar>

        <v-main class="grey lighten-3">
            <router-view></router-view>
        </v-main>

        <v-footer dark padless>
            <v-col
                class="dark primary lighten-1 text-center"
                cols="12"
            >
                {{ new Date().getFullYear() }} — <strong>TechFind</strong>
            </v-col>
        </v-footer>

    </v-app>
</template>

<script>
export default {
    data: () => ({
        drawer: null,
        items: [
            { title: 'Principal', icon: 'mdi-home', to: '/' },
            { title: 'Vendedores', icon: 'mdi-google-my-business', to: '/vendedor' },
            { title: 'Mis negocios', icon: 'mdi-monitor-dashboard', to: '/colaboradores'  },
            { title: 'Usuario', icon: 'mdi-account', to: '/user' },
            { title: 'Login', icon: 'mdi-login', to: '/login' }
        ],
        links: [
            'Home',
            'Equipo',
            'Acerca de',
            'Contáctanos'
        ],
    }),
}
</script>
