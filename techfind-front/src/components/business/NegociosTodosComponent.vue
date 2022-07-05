<template>
    <v-container class="mb-10">

        <v-row class="mb-7">
            <h1>Todos los negocios</h1>
        </v-row>

        <v-row>

            <!--Todos los negocios sacados de la base de datos-->
            <v-col
                v-for="item in allbusiness"
                :key="item._id"
                cols="4"
            >
                <!--Grupo de lista de los negocios-->
                <v-card
                    class="mr-5 mb-7"
                    max-width="344"
                >
                    <v-img
                        :src="item.imagen_negocio"
                        height="200px"
                    ></v-img>

                    <!--Titulo del negocio-->
                    <v-card-title >
                        <a @click="mostrar(item._id)" style="text-decoration: none">{{item.nombre_negocio}}</a>
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
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import axios from "axios";
import router from "@/router";
export default {
    async created() {
        const rpta = await axios.get('http://127.0.0.1:5000/prueba')
        //console.log(rpta.data[0]['categorias'])
        this.allbusiness = rpta.data
    },
    name: "NegociosTodosComponent.vue",
    data () {
        return {
            allbusiness: [],
        }
    },
    methods:{
        mostrar(id){
            router.push('/vendedor/'+id)
        }
    }
}
</script>

<style scoped>

</style>
