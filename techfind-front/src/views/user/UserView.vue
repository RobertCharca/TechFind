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
                                <h2>{{this.nombre}}</h2>
                                <p>{{this.email}}</p>
                            </div>
                            <div class="my-2">
                                <v-btn
                                    color="primary"
                                    dark
                                    class="mr-3"
                                    @click="go"
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
import axios from 'axios'
import router from "@/router";
export default {
    async created(){
        const user = JSON.parse(window.localStorage.getItem('user'))
        //console.log(user)
        this.email=user.email
        this.nombre=user.nombre
        this._id=user._id
        console.log(user._id)
    },
    name: "PublicacionesComponent",
    data: () => ({
        _id:'',
        rating: 4.5,
        imagenes:{
            "_id":3539457,
            "nombre":'imagen.jpg',
        },
        email:'',
        nombre:'',
        
                   
    }),

    methods: {
        go(){
            router.push("/user/edit/"+this._id)
        }
    }

}
</script>

<style scoped>

</style>
