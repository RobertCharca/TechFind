<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3 pt-0 pt-sm-15 pt-xs-15 pt-md-15 pt-lg-20 pt-xl-0">
            <v-container>
                <v-col>

                    <!--Informacion del negocio-->
                    <v-card
                        class="pa-4"
                        color="white" flat
                        rounded="lg"
                    >
                        <v-row>
                            <!--Imagen del negocio-->
                            <v-col cols="12" sm="4">
                                <v-img
                                    style="border-radius: 7px"
                                    src="https://ssluxurycars.ae/wp-content/uploads/2021/03/Qualities-of-a-Good-PC-Gaming-Store-ssluxurycars.jpg"
                                    class="align-center align-self-center"
                                ></v-img>
                            </v-col>

                            <!--Descripcion del negocio-->
                            <v-col cols="12" sm="4" md="8">
                                <v-list-item three-line>
                                    <v-list-item-content>
                                        <h1 class="mb-5">
                                            Nombre de negocio
                                        </h1>
                                        <p style="font-size: 20px">
                                            Texto como descripcion del negocio.
                                        </p>
                                    </v-list-item-content>
                                </v-list-item>
                            </v-col>

                        </v-row>
                    </v-card>


                    <v-row class="mt-n2 py-5">

                        <!--Mapa y ubicacion-->
                        <v-col cols="12" sm="6" md="8">
                            <v-card
                                color="white"
                                flat
                                rounded="lg"
                                height="100%"
                            >
                                <!--Direccion-->
                                <v-row class="mb-6" no-gutters>
                                    <v-col sm="5" md="6" class="pl-2 pt-3">
                                        <v-card-title class="primary--text">
                                            <h2>Lugar</h2>
                                        </v-card-title>

                                        <v-card-text style="font-size: 20px">
                                            Av. Desonocida 315-H. En algun lugar de Arequipa.
                                        </v-card-text>
                                    </v-col>

                                    <!--Google Maps-->
                                    <v-col sm="5"
                                           offset-sm="2"
                                           md="6"
                                           offset-md="0" class="pa-5">
                                        <google-maps-component style="width: 100%; height: 180px;" :latitude= 13.7013266 :longitude= -89.226622 />
                                    </v-col>
                                </v-row>

                            </v-card>
                        </v-col>

                        <!--Datos del horario-->
                        <v-col cols="6" md="4" >
                            <v-card
                                color="white"
                                flat
                                rounded="lg"
                                height="100%"
                            >
                                <v-card-title class="primary--text">
                                    <h2>Horario</h2>
                                </v-card-title>

                                <!--Primer horario (lunes a viernes)-->
                                <v-card-text style="font-size: 20px" class="pb-2">
                                    7am - 9pm <br>
                                    <p class="mt-2">Lunes a viernes</p>
                                </v-card-text>

                                <v-divider></v-divider>

                                <!--Segundo horario (sabado y domingo)-->
                                <v-card-text style="font-size: 20px" class="pb-2">
                                    7am - 11pm <br>
                                    <p class="mt-2">Sabado y domingo</p>
                                </v-card-text>
                            </v-card>
                        </v-col>
                    </v-row>

                    <!--Productos-->
                    <v-row>
                        <productos-lista-component></productos-lista-component>
                    </v-row>



                    <!--Comentario sobre los negocios-->
                    <v-row class="mt-5 ">
                        <v-col>
                            <negocio-comentario-component></negocio-comentario-component>
                        </v-col>
                    </v-row>

                </v-col>
            </v-container>
        </v-main>

    </v-app>
</template>

<script>
import GoogleMapsComponent from "@/components/business/location/GoogleMapsComponent";
import NegocioComentarioComponent from "@/components/business/comments/NegocioComentarioComponent";
import ProductosListaComponent from "@/components/business/slideGroups/ProductosListaComponent";

export default {
    name: 'App',
    components: {
        GoogleMapsComponent,
        NegocioComentarioComponent,
        ProductosListaComponent
    }
}
</script>

<style scoped>

</style>
