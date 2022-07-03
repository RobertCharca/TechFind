<template>
    <v-app id="inspire">
        <v-main class="grey lighten-3">
            <mis-negocios-component></mis-negocios-component>
        </v-main>
    </v-app>
</template>

<script>
import MisNegociosComponent from "@/components/user/MisNegociosComponent";

export default {
    components: {
      MisNegociosComponent
    },
}
</script>
