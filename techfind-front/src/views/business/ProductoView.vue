<template>
    <v-container>

        <!--Titulo del producto-->
        <v-row style="margin-top: 15px" class="align-center justify-center text-center px-5 py-5">
            <v-col>
                <h3 style="font-size: 45px">Skytech Chronos Mini PC De Escritorio Para Juegos</h3>
            </v-col>
        </v-row>

        <v-layout wrap class="align-center justify-center text-center px-5 py-5 " >
            <v-flex clas="primary" >
                <v-row>
                    <v-col>

                        <!--Card para agrupar todos los elementos-->
                        <v-card
                            elevation="0"
                            max-width="444"
                            class="mx-auto"
                            rounded="lg"
                        >
                            <v-system-bar lights-out></v-system-bar>

                            <!--Carousel de las imagenes del producto-->
                            <v-carousel
                                :continuous="false"
                                :cycle="cycle"
                                :show-arrows="true"
                                height="300"
                            >
                                <!--Imagenes del producto-->
                                <v-carousel-item
                                    v-for="(item,i) in items"
                                    :key="i"
                                    :src="item.src"
                                    :to="item.to"
                                    target="_blank"
                                    reverse-transition="fade-transition"
                                    transition="fade-transition"
                                ></v-carousel-item>
                            </v-carousel>

                            <!--Titulo, subtitulo y boton de diapositiva del producto-->
                            <v-list two-line>
                                <v-list-item>
                                    <v-list-item-content>
                                        <v-list-item-title>Skytech Cronos Mini Pc</v-list-item-title>
                                        <v-list-item-subtitle>Nombre negocio</v-list-item-subtitle>
                                    </v-list-item-content>
                                    <v-list-item-action>
                                        <v-switch
                                            v-model="cycle"
                                            label="Diapositiva"
                                            inset
                                        ></v-switch>
                                    </v-list-item-action>
                                </v-list-item>
                            </v-list>
                        </v-card>
                    </v-col>


                    <v-col cols="12" md="7" >
                        <v-card class="mx-4 pa-4" rounded="lg" flat>
                            <v-card-title>
                                <h2 class="primary--text">Descripción:</h2>
                            </v-card-title>

                            <v-divider></v-divider>

                            <p class="text-left ml-5 mr-5 mt-10">
                                Procesador de CPU INTEL Core i3 10100F 3.6GHz (4.3GHz Max Boost) | SSD de 500 GB – Hasta 30 veces más rápido que el disco duro tradicional
                                Tarjeta gráfica GTX 1650 de 4 GB GDDR6 (la marca puede variar) | Memoria para juegos DDR4 3200 de 16G con difusor de calor | Windows 10 Home de 64 bits
                            </p>
                        </v-card>
                    </v-col>

                    <!--Componente de comentario de producto (Para mas detalle ver el archivo ProductoComentarioPostComponent.vue en components)-->
                    <v-col>
                        <producto-comentario-component class="text-left"></producto-comentario-component>
                    </v-col>

                </v-row>
            </v-flex >
        </v-layout>



    </v-container>
</template>

<script>

import ProductoComentarioComponent from "@/components/business/comments/ProductoComentarioComponent";

export default {
    name:'Producto',
    components: {
        ProductoComentarioComponent
    },
    data () {
        return {
            icons: [
                'mdi-facebook',
                'mdi-twitter',
                'mdi-linkedin',
                'mdi-instagram',
            ],
            rating: 4,
            cycle: false,
            items: [
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
                    to: '/'
                },
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
                    to: '/'
                },
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
                    to: '/'
                },
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
                    to: '/'
                },
            ],
        }
    },
}
</script>

