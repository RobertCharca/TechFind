<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3 pt-0 pt-sm-15 pt-xs-15 pt-md-15 pt-lg-20 pt-xl-0">
            <productos-todos-component></productos-todos-component>
        </v-main>
    </v-app>
</template>

<script>
import ProductosTodosComponent from "@/components/business/ProductosTodosComponent";

export default {
    components:{
        ProductosTodosComponent
    }
}
</script>
