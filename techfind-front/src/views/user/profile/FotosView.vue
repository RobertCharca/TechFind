<template>
    <!--Galeria de imagenes de los comentarios publicados-->
    <v-container style="margin-bottom: 45px">
        <v-row style="margin-top: 15px">
            <v-col>
                <h1>Tus fotos</h1>
            </v-col>
        </v-row>
        <v-row>
            <!--Bucle de imagenes (se puede modificar)-->
            <v-col
                v-for="n in 9"
                :key="n"
                cols="4"
            >
                <v-card height="180">
                    <v-img
                        src="https://picsum.photos/350/165?random"
                        height="125"
                        class="grey lighten-1 white--text align-end"
                        gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                    >
                        <v-card-title>fecha</v-card-title>
                    </v-img>

                    <!--Botones para compartir o ir al link de la imagen-->
                    <v-card-actions>
                        <v-spacer></v-spacer>

                        <v-btn icon>
                            <v-icon>mdi-open-in-new</v-icon>
                        </v-btn>

                        <v-btn icon>
                            <v-icon>mdi-share</v-icon>
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>

export default {
    name: "FotosComponent.vue",
}
</script>

<style scoped>

</style>
