<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3 pt-0 pt-sm-15 pt-xs-15 pt-md-10 pt-lg-0 pt-xl-0">
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md5>
                        <v-card class="elevation-12" width="100%">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Comentario sobre el negocio</v-toolbar-title>
                            </v-toolbar>

                            <!--Comentario del negocio-->
                            <v-card-text>
                                <h2 class="mt-5 mb-5">Deja tu comentario</h2>

                                <!--Calificacion del negocio-->
                                <div class="text-left mt-5 mb-5">
                                    <v-rating
                                        v-model="rating"
                                        color="yellow darken-3"
                                        background-color="grey darken-1"
                                        empty-icon="$ratingFull"
                                        half-increments
                                        hover
                                        large
                                    ></v-rating>
                                </div>

                                <v-form>
                                    <!--Titulo del comentario-->
                                    <v-text-field
                                        v-model="subtema"
                                        counter
                                        maxlength="50"
                                        hint="Ingrese el título de su comentario"
                                        label="Título"
                                    ></v-text-field>
                                    <!--Texto del comentario-->
                                    <v-textarea
                                        v-model="descripcion"
                                        counter
                                        maxlength="250"
                                        label="Comentario"
                                        class="mb-5"
                                    ></v-textarea>

                                    <v-divider></v-divider>

                                    <!--Imagen del comentario del negocio-->
                                    <template>
                                        <v-file-input
                                            v-model="imagen"
                                            :rules="rules"
                                            accept="image/png, image/jpeg, image/bmp"
                                            placeholder="Subir una imagen del producto"
                                            prepend-icon="mdi-image"
                                            label="Subir una imagen del producto"
                                            class="mb-6"
                                        ></v-file-input>
                                    </template>

                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-layout>
                                    <v-flex justify-center>
                                        <v-btn color="primary" @click="publicar" class="mb-5 mr-5">Publicar</v-btn>
                                        <v-btn dark color="red lighten-2" @click="regresar($route.params.id)" class="mb-5">Cancelar</v-btn>
                                    </v-flex>
                                </v-layout>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>

import router from "@/router";
import axios from "axios";

export default {
    created() {
        console.log(this.$route.params.id)
    },
    name: "NegocioComentarioPostComponent",
    props: {
        source: String,
    },
    data: () => ({
        rules: [
            value => !value || value.size < 2000000 || 'Avatar size should be less than 2 MB!',
        ],
        rating: 0,
        subtema:'',
        descripcion:'',
        imagen:null
    }),
    methods:{
        regresar(id){
            router.push('/vendedor/'+id)
        },
        probar(){
            console.log(this.rating)
        },
        publicar: async function(){
            const user = JSON.parse(window.localStorage.getItem('user'))
            const obj = new FormData()

            obj.append("usuario_id",user._id)
            obj.append("valoracion",this.rating)
            obj.append("subtema",this.subtema)
            obj.append("descripcion",this.descripcion)
            obj.append("negocio_id",this.$route.params.id)
            obj.append("imagen",this.imagen)

            const res = await axios.post('http://127.0.0.1:8000/bsncomments',obj)
            console.log(res.data)
            router.push('/vendedor/'+this.$route.params.id)
        }
    }
}
</script>

<style scoped>

</style>
