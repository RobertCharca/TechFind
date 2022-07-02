<template>
    <v-app id="inspire">
        <v-content>

            <v-snackbar
                v-model="snackbar"
                :vertical="vertical"
                :color="color"
            >
                {{ texto }}

                <template v-slot:action="{ attrs }">
                    <v-btn
                        color="white"
                        text
                        v-bind="attrs"
                        @click="snackbar = false"
                    >
                        Close
                    </v-btn>
                </template>
            </v-snackbar>



            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md4>
                        <v-card class="elevation-12">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Login</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <v-form>
                                    <v-text-field
                                        prepend-icon="mdi-account"
                                        name="login"
                                        label="Login"
                                        type="text"
                                        v-model="formulario.usuario"
                                    ></v-text-field>
                                    <v-text-field
                                        id="password"
                                        prepend-icon="mdi-lock"
                                        name="password"
                                        label="Password"
                                        type="password"
                                        v-model="formulario.password"
                                    ></v-text-field>
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="primary" @click="ingresar()">Login</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
import axios from 'axios';
import router from "@/router";

export default {
    name: "Login",
    data(){
        return{
            formulario:{
                usuario: null,
                password: null,
            },
            snackbar: false,
            vertical: true,
            texto: null,
            color:'cyan accent-4'
        }
    },
    methods:{
        async ingresar(){
            const envio = await axios.post('http://localhost:8000/loginvue', this.formulario);
            //console.log(envio.data);
            this.snackbar = true;
            this.texto = envio.data.mensaje;
            console.log(envio.data.usuario)
            if (envio.data.usuario) {
                router.push('/user')
                window.localStorage.setItem('user', JSON.stringify(envio.data.usuario))
            }
            else {
                this.snackbar = true;
                this.color = 'red';
                this.texto = envio.data.mensaje;
            }
        }
    }
}
</script>

<style scoped>
</style>
