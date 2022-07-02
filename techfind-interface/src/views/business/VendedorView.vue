<template>
    <v-app id="inspire">
        <v-container>

            <v-app-bar color="rgba(0,0,0,0)" flat >
                <v-text-field label="Search ..."
                              class="pt-5"
                              filled  prepend-inner-icon="mdi-magnify"
                              dense solo flat background-color="blue lighten-4" rounded ></v-text-field>
            </v-app-bar>

            <v-col>
                <v-card
                    class="pa-4"
                    color="blue lighten-3" flat
                    rounded="lg"
                >

                    <v-row>
                        <v-col cols="12" sm="4">
                            <v-img
                                style="border-radius: 10px"
                                src="https://www.jasminsoftware.es/wp-content/uploads/2020/03/business-intelligence.jpg"
                                class="align-center align-self-center"
                            ></v-img>
                        </v-col>

                        <v-col cols="12" sm="4">
                            <v-list-item three-line>
                                <v-list-item-content>
                                    <v-list-item-title class="text-h2  mb-5">
                                        Hey AAE IdeaPro.
                                    </v-list-item-title>
                                    <v-list-item-subtitle class="text-h6" >Wecome back AAE IdeaPro. We are glad here
                                        Inspire the best work in people.enabling them to acheive
                                    </v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>

                            <v-card-actions>
                                <v-btn
                                    class="px-3"
                                    color="blak"
                                    dark
                                >
                                    View Details
                                </v-btn>

                            </v-card-actions>


                        </v-col>
                        <v-col cols="12" sm="4"  >
                            <google-maps-component style="width: 100%; height: 100%;" :latitude= 13.7013266 :longitude= -89.226622 />
                        </v-col>


                    </v-row>

                </v-card>


                <v-row class="mt-n5 py-5">
                    <v-col cols="12" sm="4">
                        <v-card
                            color="blue lighten-3"
                            flat
                            rounded="lg"
                        >
                            <v-card-title >
                                <span class="text-h4">Top </span>
                            </v-card-title>
                            <v-card-text class="text-center text-h6">
                                10 mejores tiendas de la semana <br> 50 paginas mas vistas del mes
                            </v-card-text>
                            <v-card-actions >
                                <v-list-item >


                                </v-list-item>

                            </v-card-actions>
                        </v-card>
                    </v-col>
                    <v-col cols="12" sm="4">
                        <v-card
                            color="blue lighten-3"
                            flat
                            rounded="lg"
                        >
                            <v-card-title >
                                <span class="text-h4 text-center align-center justify-center">Productos</span>
                            </v-card-title>
                            <v-card-text class="text-center text-h6">
                                Herramientas e manofactura  <br>con acabados suavez y preciosos
                            </v-card-text>
                            <v-card-actions >
                                <v-list-item >
                                    <v-btn
                                        class="px-3  flex"
                                        color="blak"
                                        dark
                                    >
                                        Productos
                                    </v-btn>

                                </v-list-item>

                            </v-card-actions>
                        </v-card>
                    </v-col>
                    <v-col cols="12" sm="4">
                        <v-card
                            color="blue lighten-3"
                            flat
                            rounded="lg"
                        >
                            <v-card-title >
                                <span class="text-h4">Horario</span>
                            </v-card-title>
                            <v-card-text class="text-center text-h6">
                                7am - 9pm Lunes a viernes <br> 7am - 11pm Sabado y Domingo
                            </v-card-text>

                            <v-card-actions >
                                <v-list-item >

                                </v-list-item>

                            </v-card-actions>

                        </v-card>
                    </v-col>
                </v-row>




                <v-row class="mt-5 ">
                    <v-col>
                        <negocio-comentario-component></negocio-comentario-component>
                    </v-col>
                </v-row>

            </v-col>
        </v-container>
    </v-app>
</template>

<script>
import GoogleMapsComponent from "@/components/business/location/GoogleMapsComponent";
import NegocioComentarioComponent from "@/components/business/comments/NegocioComentarioComponent";

export default {
    name: 'App',
    components: {
        GoogleMapsComponent,
        NegocioComentarioComponent
    }
}
</script>

<style scoped>

</style>
