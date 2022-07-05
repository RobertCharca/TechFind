<template>
    <v-container>
        <v-col class="d-flex justify-space-between align-center">
            <h3 style="font-size: 33px">
                Mis negocios
            </h3>

            <!--Boton que sirve para crear un nuevo negocio-->
            <div class="my-2">
                <v-btn
                    color="primary"
                    dark
                    to="/misNegocios/create"
                >
                    <v-icon>mdi-store-plus</v-icon>
                </v-btn>
            </div>
        </v-col>
        <v-row>
            <v-col>
                <v-card>
                    <!--Tabla del CRUD de negocios del usuario-->
                    <v-simple-table
                        fixed-header
                        height="600px"
                    >
                        <template v-slot:default>
                            <thead>
                            <tr>
                                <th class="text-left primary--text pt-5 pb-5" style="font-size: 20px">
                                    Nombre
                                </th>
                                <th class="text-left primary--text pt-5 pb-5" style="font-size: 20px" width="25%">
                                    Descripcion
                                </th>
                                <th class="text-left primary--text pt-5 pb-5" style="font-size: 20px">
                                    Producto
                                </th>
                                <th class="text-left primary--text pt-5 pb-5" style="font-size: 20px" width="25%">
                                    Acciones
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="item in mybsn"
                                    :key="item._id"
                                >
                                    <td class="pt-3 pb-3">{{ item.nombre_negocio }}</td>
                                    <td>{{item.descripcion}}</td>
                                    <td class="pt-3 pb-3">
                                        <div class="my-2 mr-5">
                                            <v-btn
                                                color="indigo lighten-2"
                                                dark
                                                @click="agregar_producto(item._id)"
                                            >
                                                Agregar

                                            </v-btn>
                                        </div>
                                    </td>

                                    <!--Botones para editar y eliminar un negocio-->
                                    <td class="pt-3 pb-3">
                                        <div class="d-flex flex-row">
                                            <div class="my-2 mr-5">
                                                <v-btn
                                                    color="success"
                                                    dark
                                                    @click="editar(item._id)"
                                                >
                                                    <v-icon>mdi-pencil</v-icon>

                                                </v-btn>
                                            </div>
                                            <div class="my-2">
                                                <v-btn
                                                    color="error"
                                                    dark
                                                    @click="eliminar(item._id)"
                                                >
                                                    <v-icon>mdi-delete</v-icon>
                                                </v-btn>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </template>
                    </v-simple-table>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import axios from 'axios';
import router from "@/router";
export default {
    async created(){
        const user = JSON.parse(window.localStorage.getItem('user'))
        //console.log('este es el '+user._id)
        const response = await axios.get('http://localhost:8000/mybusiness/'+user._id);
        this.mybsn = response.data
        //console.log(this.mybsn)
        /*
        const rescat = await axios.get(this.caturl);
        this.items = rescat.data;*/

    },
    name: "MisNegociosComponent.vue",
    data () {
        return {
            mybsn : [],
        }
    },
    methods:{
        eliminar: async function (id){
            const res = await axios.delete('http://localhost:8000/mybusiness/delete'+'/'+id)
            this.mybsn=this.mybsn.filter(bsn=>bsn._id != res.data.id)
        },
        editar(id){
            router.push('/misNegocios/edit/'+id)
        },
        agregar_producto(id){
            router.push("/misNegocios/createProduct/"+id)
        }
    }
}
</script>

<style scoped>

</style>
