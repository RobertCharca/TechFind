<template>
    <v-container class="mb-10">

        <v-row class="mb-7">
            <h1>Todos los productos</h1>
        </v-row>

        <v-row>

            <!--Todos los productos sacados de la base de datos-->
            <v-col
                v-for="n in 6"
                :key="n"
                cols="4"
            >
                <!--Grupo de lista de todos los productos del negocio-->
                <v-card
                    class="mr-5"
                    max-width="344"
                >
                    <v-img
                        src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                        height="200px"
                    ></v-img>

                    <!--Titulo del producto-->
                    <v-card-title >
                        <a href="#/vendedor/catalogo/producto" style="text-decoration: none">Nombre del producto</a>
                    </v-card-title>

                    <!--Una parte de la descripcion del producto (si es posible implementarlo, se puede poner una pequeña
                    descripcion del producto como un campo mas a llenar)-->
                    <v-card-text>
                        1,000 miles of wonder
                        1,000 miles of wonder
                        1,000 miles of wonder
                        1,000 miles of wonder
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    name: "ProductosTodosComponent.vue"
}
</script>

<style scoped>

</style>
