<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3 pt-0 pt-sm-15 pt-xs-15 pt-md-15 pt-lg-20 pt-xl-0">
            <negocios-todos-component></negocios-todos-component>
        </v-main>
    </v-app>
</template>

<script>
import NegociosTodosComponent from "@/components/business/NegociosTodosComponent";

export default {
    name: "NegociosTodosView.vue",
    components: {
        NegociosTodosComponent
    }
}
</script>

<style scoped>

</style>
