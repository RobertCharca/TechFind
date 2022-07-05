<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3 pt-0 pt-sm-15 pt-xs-15 pt-md-10 pt-lg-0 pt-xl-0">
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md5>
                        <v-card class="elevation-12" width="100%">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Agregar un producto</v-toolbar-title>
                            </v-toolbar>

                            <!--Comentario del negocio-->
                            <v-card-text>
                                <h2 class="mt-5 mb-5">Datos del producto</h2>
                                <v-form>
                                    <v-text-field
                                        v-model="nombre"
                                        label="Nombre del producto"
                                        name="Name"
                                        prepend-icon="mdi-microsoft-xbox-controller"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-textarea
                                        v-model="descripcion"
                                        counter
                                        prepend-icon="mdi-card-text"
                                        maxlength="350"
                                        label="Descripción del producto (no tiene que ser lista)"
                                        class="mb-5"
                                    ></v-textarea>

                                    <v-divider class="mt-5 mb-5"></v-divider>

                                    <!--Imagen del negocio-->
                                    <h3 class="mb-5">Imagen</h3>
                                    <v-file-input
                                        v-model="imagen"
                                        :rules="rules"
                                        accept="image/png, image/jpeg, image/bmp"
                                        placeholder="Subir una imagen del producto"
                                        prepend-icon="mdi-image"
                                        label="Subir una imagen del producto"
                                        class="mb-6"
                                    ></v-file-input>
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-layout>
                                    <v-flex justify-center>
                                        <v-btn color="primary" @click="agregar" class="mb-5 mr-5">Agregar</v-btn>
                                        <v-btn dark color="red lighten-2" @click="cancelar" class="mb-5">Cancelar</v-btn>
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
    name: "MiNegocioCrearProducto.vue",
    data: () => ({
        rules: [
            value => !value || value.size < 2000000 || 'Avatar size should be less than 2 MB!',
        ],
        nombre:'',
        descripcion:'',
        imagen:null
    }),
    methods:{
        async agregar(){
            const obj = new FormData()
            //console.log('este es mi id de negocio'+this.$route.params.id)
            obj.append("nombre_producto",this.nombre)
            obj.append("descripcion",this.descripcion)
            obj.append("negocio_id",this.$route.params.id)
            obj.append("imagen",this.imagen)

            const res = await axios.post('http://localhost:8000/product',obj)
            console.log(res.data)
            router.push('/misNegocios')

        },
        cancelar(){
            router.push('/misNegocios')
        }
    }
}
</script>

<style scoped>

</style>
