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
                                        v-model="nombre"
                                        label="Nombre"
                                        
                                        prepend-icon="mdi-account-arrow-right"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        v-model="apellidos"
                                        label="Apellidos"
                                        
                                        prepend-icon="mdi-account-arrow-right"
                                        type="text"
                                        color="blue accent-3"
                                    />

                                    <v-text-field
                                        v-model="email"
                                        id="Email"
                                        label="Correo"
                                        
                                        prepend-icon="mdi-email"
                                        type="Email"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        v-model="password"
                                        id="password"
                                        label="Contraseña"
                                        
                                        prepend-icon="mdi-lock"
                                        type="password"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        v-model="username"
                                        id="Username"
                                        label="Nombre de usuario"
                                        
                                        prepend-icon="mdi-account-star"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        v-model="pais"
                                        id="pais"
                                        label="pais"
                                        
                                        prepend-icon="mdi-earth"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        v-model="ciudad"
                                        id="Ciudad"
                                        label="Ciudad"
                                        
                                        prepend-icon="mdi-city"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-layout>
                                    <v-flex justify-center>
                                        <v-btn color="primary" @click="edit" class="mb-5 mr-5">Actualizar</v-btn>
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
import axios from "axios";
import router from "@/router";

export default {
    async created() {



        
        this._id = this.$route.params.id
        const res = await axios.get('http://localhost:8000/usuario/vue/one/'+this._id)

        //Filling the inputs with the information
        console.log(this._id)
        this.nombre = res.data[0].nombre
        this.apellidos = res.data[0].apellidos
        this.email = res.data[0].email
        this.username = res.data[0].username
        this.password = res.data[0].password
        this.pais = res.data[0].pais
        this.ciudad = res.data[0].ciudad
        //console.log(user._id)
        },

    name: "EditarPerfilView.vue",
    data: () => ({
        rules: [
            value => !value || value.size < 2000000 || 'Avatar size should be less than 2 MB!',
        ],
        //Just to show
        items:[],
        _id:'',
        nombre:'',
        //To show and save
        apellidos:'',
        email:'',
        username:'',
        password:'',
        ciudad:'',
        pais:'',

    }),
    methods:{
        consola: function (){
            if (this._id == ''){
                console.log('aqui estoy')
            }
            console.log('es mi id de categoria: '+this._id)
        },

        edit: async function(){
            const obj = new FormData()
            obj.append("_id",this._id)
            obj.append("nombre",this.nombre)
            obj.append("apellidos",this.apellidos)
            obj.append("username",this.username)
            obj.append("email",this.email)           
            obj.append("password",this.password)
            obj.append("pais",this.pais)
            obj.append("ciudad",this.ciudad)
            const response = await axios.post('http://localhost:8000/usuario/vue/edit/'+this._id,obj)
            console.log(response.data)
            router.push('/user')
        }
    }
}
</script>

<style scoped>

</style>
