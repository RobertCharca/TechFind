<template>
    <v-container class="mb-10">

        <v-row class="mb-7">
            <h1>Todos los productos</h1>
        </v-row>

        <v-row>

            <!--Todos los productos sacados de la base de datos-->
            <v-col
                v-for="item in todos_productos"
                :key="item._id"
                cols="4"
            >
                <!--Grupo de lista de todos los productos del negocio-->
                <v-card
                    class="mr-5"
                    max-width="344"
                >
                    <v-img
                        :src="item.imagen"
                        height="200px"
                    ></v-img>

                    <!--Titulo del producto-->
                    <v-card-title >
                        <a @click="ir_producto(item._id)" style="text-decoration: none">{{item.nombre_producto}}</a>
                    </v-card-title>

                    <!--Una parte de la descripcion del producto (si es posible implementarlo, se puede poner una pequeña
                    descripcion del producto como un campo mas a llenar)-->
                    <v-card-text>
                        {{item.descripcion}}
                    </v-card-text>
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
        console.log("spy el id que esperabas"+this.$route.params.id)
        this.negocio_id = this.$route.params.id
        const res  = await axios.get('http://127.0.0.1:8000/products/'+this.negocio_id)
        this.todos_productos = res.data
    },
    name: "ProductosTodosComponent.vue",
    props:{
        id_negocio:null,
    },
    data:()=>({
        todos_productos: [],
        negocio_id:''
    }),
    methods:{
        ir_producto(id){
            router.push('/vendedor/catalogo/producto/'+id)
        }
    }
}
</script>

<style scoped>

</style>
