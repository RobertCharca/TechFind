<template>
    <v-container>
        <v-col class="d-flex justify-space-between">
            <h1>Productos</h1>

            <!--Boton que sirve como link para el catalogo de productos-->
            <div class="my-2">
                <v-btn
                    color="primary"
                    dark
                    @click="almain($route.params.id)"
                >
                    Ver todo
                </v-btn>
            </div>
        </v-col>

        <v-slide-group
            class="pa-0"
            show-arrows
        >
            <v-slide-item
                v-for="item in productos"
                :key="item._id"
                class="mb-5 mt-5"
            >
                <!--Grupo de lista de los productos del negocio-->
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
                        <a @click="vamos(item._id)" style="text-decoration: none">{{item.nombre_producto}}</a>
                    </v-card-title>

                    <!--Una parte de la descripcion del producto (si es posible implementarlo, se puede poner una pequeña
                    descripcion del producto como un campo mas a llenar)-->
                    <v-card-text>
                        {{item.descripcion}}
                    </v-card-text>
                </v-card>
            </v-slide-item>
        </v-slide-group>
    </v-container>
</template>

<script>
import axios from "axios";
import router from "@/router";


export default {
    async created() {
        //console.log('encontre mi id de negocio: '+this.id_negocio)
        const res  = await axios.get('http://127.0.0.1:8000/products/'+this.id_negocio)
        this.productos = res.data.slice(0,5)
        this.nego_id = this.id_negocio
        console.log('id de negocio '+this.id_negocio)

    },
    name: "ProductosListaComponent",
    data:()=>({
        productos: [],
        nego_id:''
    }),
    props:{
        id_negocio:null,
    },
    methods:{
        almain(id){
            router.push('/corta/catalogo/'+id)
            console.log("Aqui id de mi negocio para su manipulación y hallar sus productos"+id)
        },
        vamos(id){
            router.push('/vendedor/catalogo/producto/'+id)
        }
    }
}
</script>

<style scoped>

</style>
