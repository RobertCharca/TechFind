<template>
    <v-container>
        <v-col>
            <h3 style="font-size: 33px" class="px-1 mt-2">
                Los 5 mejores negocios 🏆
            </h3>
        </v-col>
        <v-col>
            <v-card elevation="10">
                <v-simple-table>
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
                            :key="item.name"
                            class="pb-5"
                        >
                            <td class="pt-4 pb-5">
                                <a href="#/vendedor" class="text-decoration-none black--text" style="font-size: 16px">
                                    {{ item.name }}
                                </a>
                            </td>
                            <td class="pt-4 pb-5">
                                {{ item.calories }}
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
export default {
    name: "RankingNegociosComponent",
    data () {
        return {
            desserts: [
                {
                    name: 'Negocio 1: Samsung Store',
                    calories: 5,
                },
                {
                    name: 'Negocio 2: Nova Center',
                    calories: 4.5,
                },
                {
                    name: 'Negocio 3: Compu Plaza',
                    calories: 4.4,
                },
                {
                    name: 'Negocio 4: Xiaomi Store',
                    calories: 4.3,
                },
                {
                    name: 'Negocio 5: Mac Center',
                    calories: 4.2,
                },
            ],
        }
    },
}
</script>

<style scoped>

</style>
