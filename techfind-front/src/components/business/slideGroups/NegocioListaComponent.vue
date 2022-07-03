<template>
    <v-container fluid>
        <v-col class="d-flex justify-space-between ">
            <h1>Negocios</h1>

            <!--Boton que sirve como link para el catalogo de negocios-->
            <div class="my-2">
                <v-btn
                    color="primary"
                    dark
                    to="/todosVendedor"
                >
                    Ver todo
                </v-btn>
            </div>
        </v-col>

        <v-slide-group
            class="px-0"
            show-arrows
        >
            <v-slide-item
                v-for="item in business"
                :key="item._id"
                class="mb-5 mt-5"
            >
                <!--Grupo de lista de los negocios-->
                <v-card
                    class="mr-5"
                    max-width="344"
                >
                    <v-img
                        :src="item.imagen_negocio"
                        height="200px"
                    ></v-img>

                    <!--Titulo del negocio-->
                    <v-card-title >
                        <a href="#/vendedor" style="text-decoration: none">{{item.nombre_negocio}}</a>
                    </v-card-title>

                    <!--Una parte de la descripcion del producto (si es posible implementarlo, se puede poner una pequeña
                    descripcion del producto como un campo mas a llenar)-->
                    <v-card-text>
                        {{item.descripcion}}
                    </v-card-text>

                    <v-divider></v-divider>

                    <!--Categoria del negocio-->
                    <div class="d-flex align-center justify-start">
                        <v-card-subtitle style="font-size: 15px">Categoría:</v-card-subtitle>

                        <!--Texto de la categoria del negocio-->
                        <v-chip
                            class="ma-2"
                            color="indigo accent-2"
                            label
                            text-color="white"
                        >
                            {{item.categorias.nombre_categoria}}
                        </v-chip>
                    </div>

                </v-card>
            </v-slide-item>
        </v-slide-group>


    </v-container>
</template>

<script>
import axios from 'axios';
export default {
    async created() {
        const rpta = await axios.get('http://127.0.0.1:5000/prueba')
        //console.log(rpta.data[0]['categorias'])
        this.business = rpta.data.slice(0, 5)
    },
    name: "NegocioListaComponente.vue",
    data () {
        return {
            business: [],
        }
    },
}
</script>

<style scoped>

</style>
