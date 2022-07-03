<template>
    <v-container>
        <v-col class="d-flex justify-space-between">
            <h1>Productos</h1>

            <!--Boton que sirve como link para el catalogo de productos-->
            <div class="my-2">
                <v-btn
                    color="primary"
                    dark
                    to="/vendedor/catalogo"
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
                v-for="n in 10"
                :key="n"
                class="mb-5 mt-5"
            >
                <!--Grupo de lista de los productos del negocio-->
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
            </v-slide-item>
        </v-slide-group>
    </v-container>
</template>

<script>
export default {
    name: "NegocioListaComponente.vue"
}
</script>

<style scoped>

</style>
