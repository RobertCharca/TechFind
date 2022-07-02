<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3 pt-0 pt-sm-15 pt-xs-15 pt-md-10 pt-lg-0 pt-xl-0">
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md4>
                        <v-card class="elevation-12">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Editar perfil</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>

                                <h2 class="mt-5 mb-5">Imagen de perfil:</h2>
                                <v-col class="d-flex justify-center">
                                    <v-avatar size="100" rounded="lg" color="blue-grey lighten-3">
                                        <img
                                            src="https://cdn.vuetifyjs.com/images/john.jpg"
                                            alt="John"
                                        >
                                    </v-avatar>
                                </v-col>

                                <v-file-input
                                    :rules="rules"
                                    accept="image/png, image/jpeg, image/bmp"
                                    placeholder="Selecciona una imagen de perfil"
                                    prepend-icon="mdi-camera"
                                    label="Avatar"
                                    class="mb-6"
                                ></v-file-input>
                                <v-divider></v-divider>
                                <h2 class="mt-5 mb-5">Datos</h2>
                                <v-form>
                                    <v-text-field
                                        label="Nombre"
                                        name="Name"
                                        prepend-icon="mdi-account-arrow-right"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        label="Apellidos"
                                        name="surname"
                                        prepend-icon="mdi-account-arrow-right"
                                        type="text"
                                        color="blue accent-3"
                                    />

                                    <v-text-field
                                        id="Email"
                                        label="Correo"
                                        name="Email"
                                        prepend-icon="mdi-email"
                                        type="Email"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        id="password"
                                        label="Contraseña"
                                        name="password"
                                        prepend-icon="mdi-lock"
                                        type="password"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        id="Username"
                                        label="Nombre de usuario"
                                        name="Username"
                                        prepend-icon="mdi-account-star"
                                        type="password"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        id="pais"
                                        label="pais"
                                        name="País"
                                        prepend-icon="mdi-earth"
                                        type="password"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        id="Ciudad"
                                        label="Ciudad"
                                        name="Ciudad"
                                        prepend-icon="mdi-city"
                                        type="password"
                                        color="blue accent-3"
                                    />
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-layout>
                                    <v-flex justify-center>
                                        <v-btn color="primary" to="/" class="mb-5 mr-5">Actualizar</v-btn>
                                        <v-btn dark color="red lighten-2" to="/user" class="mb-5">Cancelar</v-btn>
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
    name: "EditarPerfilView",
    props: {
        source: String,
    },
    data: () => ({
        rules: [
            value => !value || value.size < 2000000 || 'Avatar size should be less than 2 MB!',
        ],

    })
}
</script>

<style scoped>

</style>
