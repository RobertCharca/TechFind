<template>
    <v-container>
        <v-col>
            <h3 style="font-size: 33px" class="px-1 mt-2">
                Los 5 mejores negocios 🏆
            </h3>
        </v-col>
        <v-col>
            <v-card elevation="10">
                <v-simple-table fixed-header height="300px">
                    <template v-slot:default>
                        <thead>
                        <tr>
                            <th class="text-left primary--text pt-5 pb-5" style="font-size: 20px">
                                <b>Nombres</b>
                            </th>
                            <th class="text-left primary--text pt-5 pb-5" style="font-size: 20px">
                                <b>Calificación</b>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr
                            v-for="item in desserts"
                            :key="item._id"
                            class="pb-5"
                        >
                            <td class="pt-4 pb-5">
                                <a href="#/vendedor" class="text-decoration-none black--text" style="font-size: 16px">
                                    {{ item.nombre_negocio }}
                                </a>
                            </td>
                            <td class="pt-4 pb-5">
                                {{ item.total_rate }} ⭐
                            </td>
                        </tr>
                        </tbody>
                    </template>
                </v-simple-table>
            </v-card>
        </v-col>
    </v-container>
</template>

<script>
import axios from 'axios';
export default {
    async created() {
        const response = await axios.get('http://127.0.0.1:5000/prueba')
        //console.log(response.data) verifying the response showing it through console
        this.desserts = response.data.slice(0,5)
    },
    name: "RankingNegociosComponent",
    data () {
        return {
            desserts: [],
        }
    },
}
</script>

<style scoped>

</style>
