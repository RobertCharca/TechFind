<template>
    <v-row style="margin-top: 35px" class="align-center justify-left text-left px-10 py-5">
        <v-col class="d-flex flex-column text-center mt-10 mb-10">
            <h1 class="primary--text" style="font-size: 40px">
                ¡Bienvenido a TechFind! 🏪
            </h1>
            <p  class="text-justify" style="font-size: 20px; margin: 0 auto">
                Un sito que conecta los negocios locales de tecnologia en unos cuantos clicks.
            </p>
        </v-col>

        <!--Componente de la lista de negocios-->
        <negocio-lista-component class="mb-7"></negocio-lista-component>

        <!--Ranking de los mejores negocios-->
        <ranking-negocios-component class="mb-10"></ranking-negocios-component>



    </v-row>
</template>

<script>
import NegocioListaComponent from "@/components/business/slideGroups/NegocioListaComponent";
import RankingNegociosComponent from "@/components/business/table/RankingNegociosComponent";

export default {
    components: {
        NegocioListaComponent,
        RankingNegociosComponent
    }
}
</script>
