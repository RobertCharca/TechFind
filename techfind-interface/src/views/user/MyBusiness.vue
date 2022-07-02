<template>
    <v-container>
        <v-form
            ref="form"
            v-model="valid"
            lazy-validation
        >
            <v-text-field
                v-model="name"
                label="Name"
                required
            ></v-text-field>
            <v-text-field
                v-model="atencion"
                label="Horario de atención"
                required
            ></v-text-field>
            <v-text-field
                v-model="direccion"
                label="Dirección"
                required
            ></v-text-field>

            <!--<v-text-field
                v-model="email"
                :rules="emailRules"
                label="E-mail"
                required
            ></v-text-field>-->

            <v-textarea
                v-model="textarea"
                label="Descripcion"
                required
            ></v-textarea>
            <v-select
                v-model="select"
                :items="items"
                item-text="nombre_categoria"
                item-value="_id"
            ></v-select>

            <v-checkbox
                v-model="checkbox"
                :rules="[v => !!v || 'You must agree to continue!']"
                label="Do you agree?"
                required
            ></v-checkbox>

            <v-btn
                :disabled="!valid"
                color="success"
                class="mr-4"
                @click="validate"
            >
                Create
            </v-btn>

            <v-btn
                color="error"
                class="mr-4"
                @click="reset"
            >
                Reset Form
            </v-btn>
            <v-btn
                color="success"
                class="mr-4"
                @click="editarbsn"
            >
                Edit
            </v-btn>

        </v-form>
        <br>
        <v-container fluid fill-height justify-center>
            <v-flex xs12 sm3  v-for="bsn in negocios" :key="bsn._id">
                <v-card
                    class="ml-5"
                    max-width="344"
                >
                    <v-img
                        :src="bsn.imagen_negocio"
                        height="200px"
                    ></v-img>
                    <a href="/vendedor">
                        <v-card-title>
                            {{ bsn.nombre_negocio }}
                        </v-card-title>
                    </a>

                    <v-card-subtitle>
                        {{ bsn.hora_atencion }}<br>{{bsn.direccion}}
                    </v-card-subtitle>

                    <v-card-actions>
                        <v-btn
                            color="orange lighten-2"
                            text
                            @click="getone(bsn._id)"
                        >
                            Edit
                        </v-btn>

                        <v-spacer></v-spacer>

                        <template >
                            <v-btn
                                small
                                fab
                                color="red"
                                dark
                                @click="deletebsn(bsn._id)"
                            >
                                <v-icon> mdi-delete </v-icon>
                            </v-btn>
                        </template>

                    </v-card-actions>

                    <div v-show="show">
                        <v-divider></v-divider>

                        <v-card-text>
                            {{bsn.descripcion}}
                        </v-card-text>
                    </div>
                </v-card>
            </v-flex>
        </v-container>
    </v-container>
</template>

<script>
export default {
    async created(){
        const user = JSON.parse(window.localStorage.getItem('user'))
        console.log('este es el '+user._id)
        const response = await this.$http.get(this.url+'/'+user._id);
        this.negocios = response.data
        const rescat = await this.$http.get(this.caturl);
        this.items = rescat.data;

    },
    name: "MyBusiness",
    data: () => ({
        icons: [
            'mdi-facebook',
            'mdi-twitter',
            'mdi-linkedin',
            'mdi-instagram',
        ],
        negocios: [],
        show: false,
        url:"http://localhost:8000/negocios/vue",
        caturl:"http://localhost:8000/cat",
        valid: true,
        name: '',
        nameRules: [
            v => !!v || 'Name is required',
            v => (v && v.length <= 300000) || 'Name must be less than 10 characters',
        ],
        email: '',
        emailRules: [
            v => !!v || 'E-mail is required',
            v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
        ],
        textarea: '',
        atencion:'',
        direccion:'',
        textRules: [
            v => !!v || 'Descripción is required',
            v => (v && v.length <= 300000) || 'You exceed the limit of characters',
        ],
        select: null,
        items: [],
        items2:[],
        checkbox: false,
        neg_id:'',
        neg_one:[],
    }),

    methods: {
        validate: async function () {
            const user = JSON.parse(window.localStorage.getItem('user'))
            const obj = new FormData()
            obj.append("nombre",this.name)
            obj.append("descripcion",this.textarea)
            obj.append("hora_atencion",this.atencion)
            obj.append("direccion",this.direccion)
            obj.append("categoria_id",this.select)
            //console.log('esta es cat id '+this.select)
            obj.append("usuario_id",user._id)
            //console.log('esta es user id '+user._id)
            const res = await this.$http.post(this.url,obj)
            this.negocios.push(res.data.result)
        },

        deletebsn:async function(id) {
            const res = await this.$http.delete(this.url+'/'+id)
            console.log(res.data);
            this.negocios=this.negocios
                .filter(bsn => bsn._id != res.data.id)
        },

        getone:async function(id){
            const res = await this.$http.get(this.url+'/edit/'+id)
            console.log('holaa'+res.data.nombre_negocio);
            console.log(res.data)
            //this.negocios = res.data
            this.neg_id = id
            this.name = res.data[0].nombre_negocio
            this.textarea = res.data[0].descripcion
            this.atencion = res.data[0].hora_atencion
            this.direccion = res.data[0].direccion
            this.select = res.data[0].categoria._id
        },
        editarbsn: async function(){
            const user = JSON.parse(window.localStorage.getItem('user'))
            const obj = new FormData()
            obj.append("nombre",this.name)
            obj.append("descripcion",this.textarea)
            obj.append("hora_atencion",this.atencion)
            obj.append("direccion",this.direccion)
            obj.append("categoria_id",this.select)
            //console.log('esta es cat id '+this.select)
            obj.append("usuario_id",user._id)
            console.log('estoy -editandoooooo')
            obj.append("_id",this.neg_id)
            const res = await this.$http.post(this.url+"/update", obj)
            console.log('estoy en el elseeee')
            console.log(res.data)
            this.created()
        },
        reset () {
            this.$refs.form.reset()
        },
        resetValidation () {
            this.$refs.form.resetValidation()
        },
    },
}
</script>

<style scoped>

</style>
