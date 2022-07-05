<template>
    <v-container>
        <v-row style="margin-top: 15px">
            <v-col>
                <h1>Tus comentarios</h1>
            </v-col>
        </v-row>

        <!--Comentarios de la pagina de perfil del usuario-->
        <v-responsive
            class="overflow-y-auto mt-7 mb-10"
            max-height="500"
        >
            <v-row>
                <v-col
                    v-for="i in comentarios"
                    :key="i._id"
                >
                    <v-card
                        class="mx-auto"
                        width="60vw"
                    >
                        <!--Nombre del negocio que el usuario ha comentado-->
                        <v-card-title class="text-h5 mb-3">
                            <b><a href="#/vendedor" style="text-decoration: none">{{i.negocio.nombre_negocio}}</a></b>
                        </v-card-title>

                        <v-card-subtitle>
                            <b>Usuario: </b> {{i.usuario.nombre}}
                        </v-card-subtitle>

                        <!--Calificacion del usuario-->
                        <v-card-text>
                            <div class="mb-5">
                                <v-rating
                                    v-model="i.valoracion"
                                    
                                    color="yellow darken-3"
                                    background-color="grey darken-1"
                                    empty-icon="$ratingFull"
                                    half-increments
                                    hover
                                    size="25"
                                ></v-rating>
                            </div>

                            <!--Subtema y texto que escribio el usuario-->
                            <div>
                                <h2 style="margin-bottom: 20px">Subtema del negocio</h2>
                                <p>
                                    {{i.texto_comentario}}
                                </p>
                            </div>
                        </v-card-text>

                        <!--Imagen (imagenes) que haya publicado el usuario-->
                        <v-divider></v-divider>
                        <v-sheet
                            max-width="65vw"
                        >
                            <template v-if="imagenes.count > 0">
                                <v-slide-group
                                    class="pa-1"
                                    show-arrows
                                >
                                    <v-slide-item
                                        v-for="n in 10"
                                        :key="n"
                                        class="mb-5 mt-5"
                                    >

                                        <!--Grupo de imagenes sin el uso de cards-->
                                        <a href="" target="_blank">
                                            <!--Link de carga de imagen. Puede ser cambiada-->
                                            <v-img
                                                :src="`https://picsum.photos/500/300?image=${n * 5 + 10}`"
                                                :lazy-src="`https://picsum.photos/10/6?image=${n * 5 + 10}`"
                                                aspect-ratio="1"
                                                class="grey lighten-2 mr-5"
                                                height="200"
                                                width="250"
                                                style="border-radius: 5px"
                                            >
                                                <template v-slot:placeholder>
                                                    <v-row
                                                        class="fill-height ma-0"
                                                        align="center"
                                                        justify="center"
                                                    >
                                                        <v-progress-circular
                                                            indeterminate
                                                            color="grey lighten-5"
                                                        ></v-progress-circular>
                                                    </v-row>
                                                </template>
                                            </v-img>
                                        </a>
                                    </v-slide-item>
                                </v-slide-group>
                            </template>

                            <template v-else>
                                <v-card-text>No hay imagenes.</v-card-text>
                            </template>
                        </v-sheet>
                    </v-card>
                </v-col>
            </v-row>
        </v-responsive>



    </v-container>
</template>

<script>
import axios from 'axios'
export default {
    async created(){
        const user = JSON.parse(window.localStorage.getItem('user'))
        const response = await axios.get(this.url+'/'+user._id);
        this.comentarios = response.data
    },
    name: "PublicacionesComponent",
    data: () => ({
        rating: 4.5,
        imagenes:{
            "_id":3539457,
            "nombre":'imagen.jpg',
        },
        comentarios:[],
        url: "http://localhost:8000/usuario/vue/comentario_negocio",
                   
    }),

    methods: {
        
    }

}
</script>

<style scoped>

</style>
