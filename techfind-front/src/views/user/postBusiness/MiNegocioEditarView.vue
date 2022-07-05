<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3 pt-0 pt-sm-15 pt-xs-15 pt-md-10 pt-lg-0 pt-xl-0">
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md5>
                        <v-card class="elevation-12" width="100%">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Datos del Negocio</v-toolbar-title>
                            </v-toolbar>

                            <!--Comentario del negocio-->
                            <v-card-text>
                                <h2 class="mt-5 mb-5">Datos del negocio</h2>
                                <v-form>
                                    <v-text-field
                                        v-model="nombre"
                                        label="Nombre del negocio"
                                        name="Name"
                                        prepend-icon="mdi-store"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <h4 class="mt-7 mb-5">Categoría Actual: {{nombre_categoria}}</h4>
                                    <v-select
                                        v-model="categoria_id"
                                        :items="items"
                                        label="Nueva categoria"
                                        outlined
                                        item-text="nombre_categoria"
                                        item-value="_id"
                                    ></v-select>
                                    <v-text-field
                                        v-model="e_mail"
                                        id="Email"
                                        label="Correo del negocio"
                                        name="Email"
                                        prepend-icon="mdi-email"
                                        type="Email"
                                        color="blue accent-3"
                                    />
                                    <v-textarea
                                        v-model="descripcion"
                                        counter
                                        prepend-icon="mdi-card-text"
                                        maxlength="350"
                                        label="Descripción del negocio (ej. redes sociales, etc)"
                                        class="mb-5"
                                    ></v-textarea>

                                    <!--Ubicacion geografica-->
                                    <h3 class="mt-7 mb-5">Ubicación</h3>
                                    <v-text-field
                                        v-model="pais"
                                        id="pais"
                                        label="País"
                                        name="País"
                                        prepend-icon="mdi-earth"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        v-model="ciudad"
                                        id="Ciudad"
                                        label="Ciudad"
                                        name="Ciudad"
                                        prepend-icon="mdi-city"
                                        type="text"
                                        color="blue accent-3"
                                    />

                                    <!--Direccion del local-->
                                    <v-text-field
                                        v-model="direccion"
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
                                        v-model="horario_1"
                                        id="HorarioOne"
                                        label="Primer horario"
                                        name="HorarioOne"
                                        prepend-icon="mdi-clock-time-five-outline"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        v-model="dias_1"
                                        id="DiasOne"
                                        label="Primer rango de días"
                                        name="DiasOne"
                                        prepend-icon="mdi-calendar-range"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        v-model="horario_2"
                                        id="HorarioTwo"
                                        label="Segundo horario (opcional)"
                                        name="HorarioTwo"
                                        prepend-icon="mdi-clock-time-five-outline"
                                        type="text"
                                        color="blue accent-3"
                                    />
                                    <v-text-field
                                        v-model="dias_2"
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
                                        v-model="imagen"
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
                                        <v-btn color="primary" @click="editando" class="mb-5 mr-5">Editar</v-btn>
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
import axios from "axios";
import router from "@/router";

export default {
    async created() {
        const response = await axios.get('http://localhost:8000/categories')
        this.items = response.data

        this.negocio_id = this.$route.params.id
        const res = await axios.get('http://localhost:8000/mybusiness/one/'+this.negocio_id)

        //Filling the inputs with the information
        this.nombre = res.data[0].nombre_negocio
        this.e_mail = res.data[0].correo_electronico
        this.descripcion = res.data[0].descripcion
        this.pais = res.data[0].pais
        this.ciudad = res.data[0].ciudad
        this.direccion = res.data[0].direccion
        this.nombre_categoria = res.data[0].categorias.nombre_categoria
        this.horario_1 = res.data[0].horario_1
        this.dias_1 = res.data[0].dias_1
        this.horario_2 = res.data[0].horario_2
        this.dias_2 = res.data[0].dias_2
        this.usuario_id = res.data[0].usuario_id
        this.cat_id = res.data[0].categoria_id

    },

    name: "MiNegocioEditarView.vue",
    data: () => ({
        rules: [
            value => !value || value.size < 2000000 || 'Avatar size should be less than 2 MB!',
        ],
        //Just to show
        items:[],
        nombre_categoria:'',
        cat_id:'',
        //To show and save
        negocio_id:'',
        nombre:'',
        e_mail:'',
        descripcion:'',
        pais:'',
        ciudad:'',
        direccion:'',
        categoria_id:'',
        horario_1:'',
        dias_1:'',
        horario_2:'',
        dias_2:'',
        usuario_id:'',
        imagen:null

    }),
    methods:{
        editando: async function(){
            const obj = new FormData()
            obj.append("_id",this.negocio_id)
            obj.append("nombre_negocio",this.nombre)
            obj.append("descripcion",this.descripcion)
            obj.append("direccion",this.direccion)
            obj.append("ciudad",this.ciudad)
            obj.append("pais",this.pais)
            obj.append("correo_electronico",this.e_mail)
            if (this.categoria_id == ''){
                this.categoria_id = this.cat_id
            }
            obj.append("categoria_id",this.categoria_id)
            obj.append("horario_1",this.horario_1)
            obj.append("dias_1",this.dias_1)
            obj.append("horario_2",this.horario_2)
            obj.append("dias_2",this.dias_2)
            obj.append("usuario_id",this.usuario_id)
            obj.append('imagen',this.imagen)
            const response = await axios.post('http://localhost:8000/mybusiness/edit/'+this.negocio_id,obj)
            console.log(response.data)
            router.push('/misNegocios')
        }
    }
}
</script>

<style scoped>

</style>
