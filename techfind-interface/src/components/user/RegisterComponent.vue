<template>
    <v-app id="inspire">
        <v-main class="pt-0 pt-sm-15 pt-xs-15 pt-md-10 pt-lg-0 pt-xl-0">
            <v-container class="fill-height" fluid>
                <v-row align="center" justify="center">
                    <v-col cols="14" sm="8" md="8">
                        <v-card class="elevation-12">
                            <v-window v-model="step">

                                <!--Ventana de registro-->
                                <v-window-item :value="2">
                                    <v-row class="fill-height">

                                        <!--Seccion para poder dirigirse a la pagina de Login-->
                                        <v-col cols="12" md="4" class="blue accent-3">
                                            <v-card-text class="white--text mt-12">
                                                <h1 class="text-center display-1">¿Ya tienes cuenta?</h1>
                                                <p
                                                    class="text-center text-body-1 mt-4"
                                                >Puedes ingresar aquí:</p>
                                            </v-card-text>

                                            <!--Boton para ir a la pagina de login-->
                                            <div class="text-center mb-10">
                                                <v-btn outlined dark @click="step--" to="/login">Ingresar</v-btn>
                                            </div>
                                        </v-col>

                                        <v-col cols="12" md="8">
                                            <v-card-text class="mt-10">
                                                <h1 class="text-center display-2 blue--text text--accent-3">Crear una cuenta</h1>

                                                <!--Autenticacion con Google o Facebook-->
                                                <div class="text-center mt-4">
                                                    <v-btn class="mx-2" color="white" height="55px">
                                                        <v-icon large color="blue-grey darken-1">mdi-facebook</v-icon>
                                                    </v-btn>

                                                    <v-btn class="mx-2" color="white" height="55px">
                                                        <v-icon large color="blue-grey darken-1">mdi-google</v-icon>
                                                    </v-btn>
                                                </div>

                                                <p class="text-center mt-4">Asegúrese de su correo electrónico para el registro</p>

                                                <!--Formulario de registro-->
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

                                            <!--Boton para completar el registro-->
                                            <div class="text-center mt-3 mb-8">
                                                <v-btn color="blue   accent-3" dark>SIGN UP</v-btn>
                                            </div>
                                        </v-col>
                                    </v-row>
                                </v-window-item>
                            </v-window>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
export default {
    name: "RegisterComponent.vue",
    data: () => ({
        step: 1
    }),
    props: {
        source: String
    }
}
</script>

<style scoped>

</style>
