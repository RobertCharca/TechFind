<template>
    <v-app id="inspire">
        <v-main class="pt-0 pt-sm-15 pt-xs-15 pt-md-10 pt-lg-0 pt-xl-0">
            <v-container class="fill-height" fluid style="margin-bottom: 45px">
                <v-row align="center" justify="center">
                    <v-col cols="14" sm="8" md="8">
                        <v-card class="elevation-12">
                            <v-window v-model="step">

                                <!--Ventana de Login-->
                                <v-window-item :value="1">
                                    <v-row>
                                        <v-col cols="12" md="8">
                                            <v-card-text class="mt-12">
                                                <h1
                                                    class="text-center display-2 blue--text text--accent-3"
                                                >Iniciar Sesión</h1>

                                                <p class="text-center mt-4">Asegúrese de su correo electrónico para ingresa</p>

                                                <!--Formulario de login-->
                                                <v-form>
                                                    <v-text-field
                                                        label="Correo"
                                                        name="Email"
                                                        prepend-icon="mdi-account"
                                                        type="text"
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
                                                </v-form>
                                                <p class="text-center mt-4">¿Olvidaste tu contraseña ?</p>
                                            </v-card-text>

                                            <!--Boton para ingresar-->
                                            <div class="text-center mt-2 mb-10">
                                                <v-btn color="blue accent-3" dark>SIGN IN</v-btn>
                                            </div>

                                        </v-col>

                                        <!--Seccion para poder dirigirse a la pagina de Registro-->
                                        <v-col cols="12" md="4" class="blue accent-3">
                                            <v-card-text class="white--text mt-12">
                                                <h3 class="text-center display-1">¿No tienes cuenta?</h3>
                                                <p
                                                    class="text-center text-body-1 mt-4"
                                                >Puedes registrarte aquí:</p>
                                            </v-card-text>

                                            <!--Boton para ir a la pagina de registro-->
                                            <div class="text-center" style="margin-bottom: 40px">
                                                <v-btn outlined dark @click="step++" to="/register">Registrarse</v-btn>
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
    data: () => ({
        step: 1
    }),
    props: {
        source: String
    }
};
</script>
