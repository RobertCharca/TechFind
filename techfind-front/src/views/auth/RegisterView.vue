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

                                                <p class="text-center mt-4">Asegúrese de su correo electrónico para el registro</p>

                                                <!--Formulario de registro-->
                                                <v-form>
                                                    <v-text-field
                                                        label="Nombre"
                                                        name="Name"
                                                        prepend-icon="mdi-account-arrow-right"
                                                        type="text"
                                                        color="blue accent-3"
                                                        v-model="nombre"
                                                    />
                                                    <v-text-field
                                                        label="Apellidos"
                                                        name="surname"
                                                        prepend-icon="mdi-account-arrow-right"
                                                        type="text"
                                                        color="blue accent-3"
                                                        v-model="apellidos"
                                                    />

                                                    <v-text-field
                                                        id="Email"
                                                        label="Correo"
                                                        name="Email"
                                                        prepend-icon="mdi-email"
                                                        type="Email"
                                                        color="blue accent-3"
                                                        v-model="email"
                                                    />
                                                    <v-text-field
                                                        id="password"
                                                        label="Contraseña"
                                                        name="password"
                                                        prepend-icon="mdi-lock"
                                                        type="password"
                                                        color="blue accent-3"
                                                        v-model="password"
                                                    />
                                                    <v-text-field
                                                        id="Username"
                                                        label="Nombre de usuario"
                                                        name="Username"
                                                        prepend-icon="mdi-account-star"
                                                        color="blue accent-3"
                                                        v-model="username"
                                                    />
                                                    <v-text-field
                                                        id="pais"
                                                        label="pais"
                                                        name="País"
                                                        prepend-icon="mdi-earth"
                                                        color="blue accent-3"
                                                        v-model="pais"
                                                    />
                                                    <v-text-field
                                                        id="Ciudad"
                                                        label="Ciudad"
                                                        name="Ciudad"
                                                        prepend-icon="mdi-city"
                                                        color="blue accent-3"
                                                        v-model="ciudad"
                                                    />
                                                </v-form>
                                            </v-card-text>

                                            <!--Boton para completar el registro-->
                                            <div class="text-center mt-3 mb-8">
                                                <v-btn color="blue   accent-3" dark @click="validate">SIGN UP</v-btn>
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
import axios from 'axios';
import router from "@/router";
export default {
    name: "RegisterView",
    data () {
        return{
            step: 1,
            nombre:'',
            apellidos:'',
            email:'',
            password:'',
            username:'',
            pais:'',
            ciudad:'',
            formulario:{
                email:null,
                password:null
            },
            imagen:'https://ceslava.s3-accelerate.amazonaws.com/2016/04/mistery-man-gravatar-wordpress-avatar-persona-misteriosa-510x510.png'
        }
    },
    props: {
        source: String
    },
    methods: {
        validate: async function () {
            const obj = new FormData()
            obj.append("nombre",this.nombre)
            obj.append("apellidos",this.apellidos)
            obj.append("email",this.email)
            obj.append("password",this.password)
            obj.append("username",this.username)
            obj.append("pais",this.pais)
            obj.append("ciudad",this.ciudad)
            obj.append("imagen",this.imagen)
            //console.log('esta es cat id '+this.select)
            console.log('estoy validando')
            const res = await axios.post('http://localhost:8000/registrovue',obj)
            console.log('terminde de registrar a mi usuario')
            console.log(res.data)
            //ingreso justo después del registro
            this.formulario.email = res.data.result.email
            this.formulario.password = res.data.result.password
            //console.log("aqui esta el email bitches "+this.formulario.email)  //para comprobación
            //realizando el login luego del registro
            const envio = await axios.post('http://localhost:8000/loginvue', this.formulario);
            console.log(envio.data.usuario) //es el retorno de la funcion de backend que vemos en la consola
            if (envio.data.usuario) {
                window.localStorage.setItem('user', JSON.stringify(envio.data.usuario))
                router.push('/user')
            }
            else {
                console.log(envio.data.mensaje)
            }
        },
    }
}
</script>

<style scoped>
</style>
