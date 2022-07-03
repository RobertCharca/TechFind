<template>
    <v-container class="mb-10">

        <v-row class="mb-7">
            <h1>Todos los negocios</h1>
        </v-row>

        <v-row>

            <!--Todos los negocios sacados de la base de datos-->
            <v-col
                v-for="n in 6"
                :key="n"
                cols="4"
            >
                <!--Grupo de lista de los negocios-->
                <v-card
                    class="mr-5 mb-7"
                    max-width="344"
                >
                    <v-img
                        src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                        height="200px"
                    ></v-img>

                    <!--Titulo del negocio-->
                    <v-card-title >
                        <a href="#/vendedor" style="text-decoration: none">Nombre del negocio</a>
                    </v-card-title>

                    <!--Una parte de la descripcion del producto (si es posible implementarlo, se puede poner una pequeña
                    descripcion del producto como un campo mas a llenar)-->
                    <v-card-text>
                        1,000 miles of wonder
                        1,000 miles of wonder
                        1,000 miles of wonder
                        1,000 miles of wonder
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
                            Categoría
                        </v-chip>
                    </div>

                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    name: "NegociosTodosComponent.vue"
}
</script>

<style scoped>

</style>
