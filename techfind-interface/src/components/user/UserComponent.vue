<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3 pt-0 pt-sm-0 pt-xs-0 pt-md-0 pt-lg-0 pt-xl-0"
                style="padding-top: 20px">

            <!--Foto de perfil, nombre y botones de cambio-->
            <v-container class="white" fluid style="height: 30vh">
                <v-row style="height: 12vh" align="center" no-gutters>
                    <v-col class="d-flex justify-center">
                        <v-avatar size="100" rounded="lg">
                            <img
                                src="https://cdn.vuetifyjs.com/images/john.jpg"
                                alt="John"
                            >
                        </v-avatar>
                    </v-col>
                </v-row>

                <v-row style="height: 15vh" align="center">
                    <v-col class="d-flex justify-center">
                        <div>
                            <div style="text-align: center">
                                <h2>Usuario nuevo</h2>
                                <p>usuario@gmail.com</p>
                            </div>
                            <div class="my-2">
                                <v-btn
                                    color="primary"
                                    dark
                                    class="mr-3"
                                    to="/user/edit"
                                >
                                    Editar perfil
                                    <v-icon style="margin-left: 15px">mdi-account-edit</v-icon>
                                </v-btn>
                            </div>
                        </div>
                    </v-col>
                </v-row>
            </v-container>

            <!--Pestañas de la informacion de perfil-->
            <v-tabs
                fixed-tabs
                background-color="white"
            >
                <v-tab to="/user/posts">
                    <v-icon>mdi-comment-multiple</v-icon>
                </v-tab>
                <v-tab to="/user/photos">
                    <v-icon>mdi-image-multiple</v-icon>
                </v-tab>
            </v-tabs>

            <!--Router del componente Usuario-->
            <div>
                <router-view></router-view>
            </div>
        </v-main>
    </v-app>
</template>

<script>
export default {
    data: () => ({

    }),
}
</script>
