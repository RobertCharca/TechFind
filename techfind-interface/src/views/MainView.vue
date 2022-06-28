<template>
    <v-app>
        <v-content>
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
                            >
                                Explore
                            </v-btn>

                            <v-spacer></v-spacer>

                            <v-btn
                                icon
                                @click="show = !show"
                            >
                                <v-icon>{{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
                            </v-btn>
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
        </v-content>
    </v-app>
</template>
<script>
import axios from "axios";
export default {
    async mounted(){
        const response = await axios.get('http://localhost:8000/negocios/vue');
        this.negocios = response.data
    },
    data () {
        return {
            icons: [
                'mdi-facebook',
                'mdi-twitter',
                'mdi-linkedin',
                'mdi-instagram',
            ],
            negocios: [],
            show: false,
        }
    },
}
</script>
