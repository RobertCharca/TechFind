<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3 pt-0 pt-sm-15 pt-xs-15 pt-md-10 pt-lg-0 pt-xl-0">
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md5>
                        <v-card class="elevation-12" width="100%">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Comentario sobre el negocio</v-toolbar-title>
                            </v-toolbar>

                            <!--Comentario del negocio-->
                            <v-card-text>
                                <h2 class="mt-5 mb-5">Deja tu comentario</h2>
                                <v-form>
                                    <!--Titulo del comentario-->
                                    <v-text-field
                                        counter
                                        maxlength="50"
                                        hint="Ingrese el título de su comentario"
                                        label="Título"
                                    ></v-text-field>
                                    <!--Texto del comentario-->
                                    <v-textarea
                                        counter
                                        maxlength="250"
                                        label="Comentario"
                                        class="mb-5"
                                    ></v-textarea>

                                    <v-divider></v-divider>

                                    <!--Imagen del comentario del negocio-->
                                    <template>
                                        <v-file-input
                                            show-size
                                            counter
                                            class="mt-5"
                                            multiple
                                            label="Imagen (opcional)"
                                        ></v-file-input>
                                    </template>

                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-layout>
                                    <v-flex justify-center>
                                        <v-btn color="primary" to="/vendedor" class="mb-5 mr-5">Publicar</v-btn>
                                        <v-btn dark color="red lighten-2" to="/vendedor" class="mb-5">Cancelar</v-btn>
                                    </v-flex>
                                </v-layout>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
export default {
    name: "NegocioComentarioPostComponent",
    props: {
        source: String,
    },
}
</script>

<style scoped>

</style>
