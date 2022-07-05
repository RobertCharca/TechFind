<template>
    <v-container>

        <!--Titulo del producto-->
        <v-row style="margin-top: 15px" class="align-center justify-center text-center px-5 py-5">
            <v-col>
                <h3 style="font-size: 45px">{{productos.nombre_producto}}</h3>
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
                                        <v-list-item-title>{{productos.nombre_producto}}</v-list-item-title>
                                        <v-list-item-subtitle>{{productos.negocios.nombre_negocio}}</v-list-item-subtitle>
                                    </v-list-item-content>
                                    <!--<v-list-item-action>
                                        <v-switch
                                            v-model="cycle"
                                            label="Diapositiva"
                                            inset
                                        ></v-switch>
                                    </v-list-item-action>-->
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
                                {{productos.descripcion}}
                            </p>
                        </v-card>
                    </v-col>

                    <!--Componente de comentario de producto (Para mas detalle ver el archivo ProductoComentarioPostComponent.vue en components)-->
                    <v-col>
                        <producto-comentario-component :id_producto="$route.params.id" class="text-left" ></producto-comentario-component>
                    </v-col>

                </v-row>
            </v-flex >
        </v-layout>



    </v-container>
</template>

<script>

import ProductoComentarioComponent from "@/components/business/comments/ProductoComentarioComponent";
import axios from "axios";

export default {
    async created() {
        this.prod_id = this.$route.params.id
        console.log('este es mi id de producto: '+this.prod_id)
        const res = await axios.get('http://localhost:8000/products/one/'+this.prod_id)
        this.productos = res.data[0]
        this.items[0].src = this.productos.imagen
        //console.log(this.productos.negocios.nombre_negocio)
    },
    name:'Producto',
    components: {
        ProductoComentarioComponent
    },
    data () {
        return {
            prod_id:'',
            productos:[],
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
            ],
        }
    },
}
</script>

