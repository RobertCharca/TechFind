<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3 pt-0 pt-sm-15 pt-xs-15 pt-md-10 pt-lg-0 pt-xl-0">
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md5>
                        <v-card class="elevation-12" width="100%">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Editar tu negocio</v-toolbar-title>
                            </v-toolbar>

                            <!--Comentario del negocio-->
                            <v-card-text>
                                <h2 class="mt-5 mb-5">Datos del negocio</h2>
                                <v-form>
                                    <v-text-field
                                        label="Nombre del negocio"
                                        name="Name"
                                        prepend-icon="mdi-store"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        id="Email"
                                        label="Correo del negocio"
                                        name="Email"
                                        prepend-icon="mdi-email"
                                        type="Email"
                                        color="blue accent-3"
                                    />
                                    <v-textarea
                                        counter
                                        prepend-icon="mdi-card-text"
                                        maxlength="350"
                                        label="Descripción del negocio (ej. redes sociales, etc)"
                                        class="mb-5"
                                    ></v-textarea>

                                    <!--Ubicacion geografica-->
                                    <h3 class="mt-7 mb-5">Ubicación</h3>
                                    <v-text-field
                                        id="pais"
                                        label="País"
                                        name="País"
                                        prepend-icon="mdi-earth"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        id="Ciudad"
                                        label="Ciudad"
                                        name="Ciudad"
                                        prepend-icon="mdi-city"
                                        type="text"
                                        color="blue accent-3"
                                    />

                                    <!--Direccion del local-->
                                    <v-text-field
                                        id="Direccion"
                                        label="Dirección"
                                        name="Ciudad"
                                        prepend-icon="mdi-store-marker"
                                        type="text"
                                        color="blue accent-3"
                                    />


                                    <!--Horarios-->
                                    <h3 class="mt-7 mb-5">Horarios</h3>
                                    <v-text-field
                                        id="HorarioOne"
                                        label="Primer horario"
                                        name="HorarioOne"
                                        prepend-icon="mdi-clock-time-five-outline"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        id="DiasOne"
                                        label="Primer rango de días"
                                        name="DiasOne"
                                        prepend-icon="mdi-calendar-range"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        id="HorarioTwo"
                                        label="Segundo horario (opcional)"
                                        name="HorarioTwo"
                                        prepend-icon="mdi-clock-time-five-outline"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        id="DiasTwo"
                                        label="Segundo rango de días (opcional)"
                                        name="DiasTwo"
                                        prepend-icon="mdi-calendar-range"
                                        type="text"
                                        color="blue accent-3"
                                    />

                                    <v-divider class="mt-5 mb-5"></v-divider>

                                    <!--Imagen del negocio-->
                                    <h3 class="mb-5">Imagen</h3>
                                    <v-file-input
                                        :rules="rules"
                                        accept="image/png, image/jpeg, image/bmp"
                                        placeholder="Subir una imagen del negocio"
                                        prepend-icon="mdi-image"
                                        label="Subir una imagen del negocio"
                                        class="mb-6"
                                    ></v-file-input>


                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-layout>
                                    <v-flex justify-center>
                                        <v-btn color="primary" to="/misNegocios" class="mb-5 mr-5">Editar</v-btn>
                                        <v-btn dark color="red lighten-2" to="/misNegocios" class="mb-5">Cancelar</v-btn>
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
    name: "MiNegocioEditarView.vue",
    data: () => ({
        rules: [
            value => !value || value.size < 2000000 || 'Avatar size should be less than 2 MB!',
        ],

    })
}
</script>

<style scoped>

</style>
