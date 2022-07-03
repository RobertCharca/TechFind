<template>
    <v-container>
        <v-row style="margin-top: 15px">
            <v-col class="d-flex justify-space-between align-center mb-2">
                <h1>Comentarios</h1>

                <!--Boton que sirve como publicacion de un comentario-->
                <div class="my-2">
                    <v-btn
                        color="blue lighten-1"
                        fab
                        dark
                        to="/vendedor/catalogo/producto/postComment"
                    >
                        <v-icon>mdi-comment-plus</v-icon>
                    </v-btn>
                </div>
            </v-col>
        </v-row>

        <!--Comentarios de la pagina de perfil del usuario-->
        <v-responsive
            class="overflow-y-auto mt-7 mb-10"
            max-height="500"
        >
            <v-row>
                <v-col
                    v-for="n in 3"
                    :key="n"
                >
                    <v-card
                        class="mx-auto"
                        width="60vw"
                    >

                        <!--Calificacion del usuario-->
                        <v-card-text>
                            <div class="mb-5">
                                <v-rating
                                    v-model="rating"
                                    color="yellow darken-3"
                                    background-color="grey darken-1"
                                    empty-icon="$ratingFull"
                                    half-increments
                                    hover
                                    size="25"
                                ></v-rating>
                            </div>

                            <!--Subtema y texto que escribio el usuario-->
                            <h2 style="margin-bottom: 20px">Subtema del negocio</h2>
                            <div style="font-size: 15px" class="mb-5">
                                <b>Usuario: </b> nombre de usuario
                            </div>

                            <div>
                                <p>
                                    If you enjoy using Vuetify, please take a few seconds to rate your experience with the framework. It really helps!
                                    If you enjoy using Vuetify, please take a few seconds to rate your experience with the framework. It really helps!
                                    If you enjoy using Vuetify, please take a few seconds to rate your experience with the framework. It really helps!
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
export default {
    name: "ProductoComentarioComponent.vue",
    data: () => ({
        rating: 4.5,
        imagenes:{
            "_id":3539457,
            "nombre":'imagen.jpg',
        },
    }),
}
</script>

<style scoped>

</style>
