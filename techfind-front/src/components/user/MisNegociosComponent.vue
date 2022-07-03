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
                        height="300px"
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
                                    v-for="item in desserts"
                                    :key="item.name"
                                >
                                    <td class="pt-3 pb-3">{{ item.name }}</td>
                                    <td>Descripcion</td>
                                    <td class="pt-3 pb-3">
                                        <div class="my-2 mr-5">
                                            <v-btn
                                                color="indigo lighten-2"
                                                dark
                                                to="/misNegocios/createProduct"
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
                                                    to="/misNegocios/edit"
                                                >
                                                    <v-icon>mdi-pencil</v-icon>

                                                </v-btn>
                                            </div>
                                            <div class="my-2">
                                                <v-btn
                                                    color="error"
                                                    dark
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
export default {
    name: "MisNegociosComponent.vue",
    data () {
        return {
            desserts: [
                {
                    name: 'Frozen Yogurt',
                },
                {
                    name: 'Ice cream sandwich',
                },
                {
                    name: 'Eclair',
                },
            ],
        }
    },
}
</script>

<style scoped>

</style>
